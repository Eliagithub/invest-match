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
                                <li><a href="/creator/resources" class="active"><i class="fa-solid fa-book-bookmark"></i> Resources</a></li>
                                <li><a href="/creator/new"><i class="fa-regular fa-square-plus"></i> New Idea</a></li>
                                <li><a href="/creator/support"><i class="fa-solid fa-headset"></i> Support</a></li>
                                <li><a href="/creator/account"><i class="fa-solid fa-user"></i> Account</a></li>
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
                <div class="container">
                    <p>Setting page</p>
                </div>
            </div>
        </div>
    </div>



</body>

</html>