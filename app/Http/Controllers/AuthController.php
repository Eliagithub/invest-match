<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Models\contact_us;
use App\Models\userecords;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function home () {
        return view('home');
    }

    public function register()
{
 return view('auth');
}
    public function registeruser(Request $request)
{
    $validator = Validator::make($request->all(), [
        'fullname' => 'required',
        'type' => 'required',
        'email'=>'required',
        'password' => 'required|max:8',
    ]);

    if ($validator->fails()) {
        return redirect()->back()->withInput()->withErrors($validator);
    }

    // $data['role'] = 'Investor';

    try {
        userecords::create([
            'fullname' => $request->input('fullname'),
            'type' => $request->input('type'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
        ]);

        return redirect()->back()->with('success', 'User created successfully.');
    } catch (\Illuminate\Database\QueryException $e) {
        $errorCode = $e->errorInfo[1];
        if ($errorCode == 1062) {
            return redirect()->back()->withInput()->withErrors(['fullname' => '.']);
        }
        throw $e;
    }
}
public function loginuser(Request $request)
 {
  $credentials = $request->validate([
    'email' => 'required',
    'password' => 'required',
]);
$user = userecords::where('email', $credentials['email'])->first();

// Check password
if (!$user || !Hash::check($credentials['password'], $user->password)) {
    return redirect()->back()->withInput()->withErrors(['email' => 'invalid email']);
}

// if ($user->role === 'Admin') {
//   return redirect()->route('admin.dashboard');
// } elseif ($user->role === '') {
  
//   return redirect()->route('Copyhome');
// }

return response()->redirectTo(route('account'));
 }

 public function contacts(Request $request)
{
    $validator = Validator::make($request->all(), [
        'name' => 'required',
        'email' => 'required',
        'title'=>'required',
        'messages' => 'required',
    ]);
   
    if ($validator->fails()) {
        return redirect()->back()->withInput()->withErrors($validator);
    }

    // $data['role'] = 'Investor';

    try {
        contact_us::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'title' => $request->input('title'),
            'messages' => bcrypt($request->input('messages')),
        ]);
    
        return redirect()->back()->with('success', 'User created successfully. Data has been stored in the table.');
    } catch (\Illuminate\Database\QueryException $e) {
        $errorCode = $e->errorInfo[1];
        if ($errorCode == 1062) {
            return redirect()->back()->withInput()->withErrors(['name' => 'Duplicate entry.']);
        }
        throw $e;
    }
}
}