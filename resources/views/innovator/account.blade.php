<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Idea | InvestMatch</title>
    <link rel="shortcut icon" href="/image/hero-img.png" type="image/x-icon">
    <!-- icons -->
    <script src="https://kit.fontawesome.com/627b5e26a3.js" crossorigin="anonymous"></script>

    <!-- style css -->
    <link rel="stylesheet" href="/css/investor.css" />
</head>

<body>
    <div class="innovator">
        <div class="row">
            <div class="sidebar">
                <div class="container">
                    <div class="vrow">
                        <div class="brand">
                            <img src="{{asset('image/logo-white-nobg.png')}}" alt="">
                        </div>
                        <div class="user">
                            <h4>username</h4>
                            <p>i am innovator</p>
                        </div>
                        <hr>
                        <div class="nav">
                            <ul>
                                <li><a href="/creator"><i class="fa-solid fa-signal"></i> Overview</a></li>
                                <li><a href="/creator/resources"><i class="fa-solid fa-book-bookmark"></i> Resources</a></li>
                                <li><a href="/creator/new"><i class="fa-regular fa-square-plus"></i> New Idea</a></li>
                                <li><a href="/creator/support"><i class="fa-solid fa-headset"></i> Support</a></li>
                                <li><a href="/creator/account" class="active"><i class="fa-solid fa-user"></i> Account</a></li>
                                <li><a href="/creator/setting"><i class="fa-solid fa-gear"></i> Settings</a></li>
                                <li><a href=""><i class="fa-solid fa-lock"></i> Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main">
                <div class="navbar">
                    <div class="container">
                        <div class="search">
                            <button onclick="search()"><i class="fa-solid fa-magnifying-glass"></i></button>
                            <input type="text" placeholder="Search here..." id="searchInput">
                        </div>
                        <div class="right">
                            <button class=" btn add-idea">Add an Idea</button>
                            <button class="btn-icon"><i class="fa-solid fa-user-group"></i></button>
                            <button class="btn-icon"><i class="fa-solid fa-bell"></i></button>
                            <span class="user-icon"><img src="{{asset('image/bginn.png')}}" alt=""></span>
                        </div>
                    </div>
                </div>
                <div class="container account">
                    <h3>Account</h3>
                    <div class="row">
                        <div class="col-4">
                            <div class="ppic">
                                <div class="img">
                                    <img src="{{asset('image/pic.png')}}" alt="">
                                    <h4 id="username">Anne Kante</h4>
                                    <p id="email">anne@gmail.com</p>
                                    <p id="phone">250782984757</p>
                                    <p id="location">Kigali, Rwanda</p>
                                </div>
                                <hr>
                                <div class="pupload">
                                    <button>Upload Picture</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="pdetail">
                                <div class="form">
                                    <h4>Profile</h4>
                                    <p>Edit your profile information here</p>
                                    <form>
                                        <div class="input">
                                            <label for="name">Full Names</label>
                                            <input type="text" name="name" id="">
                                        </div>
                                        <div class="row">
                                            <div class="input col-6">
                                                <label for="email">Email Address*</label>
                                                <input type="email" name="email" id="" required>
                                            </div>
                                            <div class="input col-5">
                                                <label for="phone">Phone Number</label>
                                                <input type="tel" name="phone" id="">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input col-6">
                                                <label for="country">Country</label>
                                                <input type="text" name="country" id="">
                                            </div>
                                            <div class="input col-5">
                                                <label for="city">City/District</label>
                                                <input type="text" name="city" id="">
                                            </div>
                                        </div>
                                        <div class="btn">
                                            <input type="submit" value="Save Details">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



</body>

</html>