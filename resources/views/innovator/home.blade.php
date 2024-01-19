<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Innovator's Page | InvestMatch</title>
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
                                <li><a href="/creator" class="active"><i class="fa-solid fa-signal"></i> Overview</a></li>
                                <li><a href="/creator/resources"><i class="fa-solid fa-book-bookmark"></i> Resources</a></li>
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
                    <div class="row boxes">
                        <div class="col-3">
                            <div class="box">
                                <span class="row">
                                    <span>Total Ideas Created</span>
                                    <span class="icon"><i class="fa-solid fa-lightbulb one"></i></span>
                                </span>
                                <span class="value">533</span>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="box">
                                <span class="row">
                                    <span>active projects</span>
                                    <span class="icon"><i class="fa-solid fa-gears two"></i></span>
                                </span>
                                <span class="value">4</span>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="box">
                                <span class="row">
                                    <span>investors interest</span>
                                    <span class="icon"><i class="fa-solid fa-handshake three"></i></span>
                                </span>
                                <span class="value">44</span>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="box">
                                <span class="row">
                                    <span>ideas for sale</span>
                                    <span class="icon"><i class="fa-solid fa-tags four"></i></span>
                                </span>
                                <span class="value">4</span>
                            </div>
                        </div>
                    </div>
                    <div class="home-content">
                        <div class="row">
                            <div class="col-5">
                                <div class="ideas">
                                    <h3>Latest Ideas</h3>
                                    <ul>
                                        <li class="row">
                                            <div class="img">
                                                <img src="{{asset('image/innovator.jpg')}}" alt="">
                                            </div>
                                            <div class="title">
                                                <h4>Tech Agriculture and Farming</h4>
                                                <p>Created at January 06, 2024</p>
                                            </div>
                                            <div class="action"><i class="fa-solid fa-ellipsis-vertical"></i></div>
                                        </li>
                                        <li class="row">
                                            <div class="img">
                                                <img src="{{asset('image/innovator.jpg')}}" alt="">
                                            </div>
                                            <div class="title">
                                                <h4>Tech Agriculture and Farming</h4>
                                                <p>Created at January 06, 2024</p>
                                            </div>
                                            <div class="action"><i class="fa-solid fa-ellipsis-vertical"></i></div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-7">
                                <div class="my-idea">
                                    <div class="thead row">
                                        <span class="id col-2">id</span>
                                        <span class="title col-5">title</span>
                                        <span class="date col-3">date</span>
                                        <span class="status col-2">status</span>
                                    </div>
                                    <div class="show-idea row">
                                        <span class="id col-2">FAT001</span>
                                        <span class="title col-5">Tech Agro-farming</span>
                                        <span class="date col-3">january 12, 2024</span>
                                        <span class="status col-2">
                                            <p>sold</p>
                                        </span>
                                    </div>
                                    <div class="show-idea row">
                                        <span class="id col-2">FAT001</span>
                                        <span class="title col-5">Tech Agro-farming</span>
                                        <span class="date col-3">january 12, 2024</span>
                                        <span class="status col-2">
                                            <p>sold</p>
                                        </span>
                                    </div>


                                    <div class="show-idea row">
                                        <span class="id col-2">FAT001</span>
                                        <span class="title col-5">Tech Agro-farming</span>
                                        <span class="date col-3">january 12, 2024</span>
                                        <span class="status col-2">
                                            <p id="seen">viewed</p>
                                        </span>
                                    </div>
                                    <div class="show-idea row">
                                        <span class="id col-2">FAT001</span>
                                        <span class="title col-5">Tech Agro-farming</span>
                                        <span class="date col-3">january 12, 2024</span>
                                        <span class="status col-2">
                                            <p id="sold">sold</p>
                                        </span>
                                    </div>
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