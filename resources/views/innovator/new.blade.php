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
                                <li><a href="/creator/new" class="active"><i class="fa-regular fa-square-plus"></i> New Idea</a></li>
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
                    <div class="create row">
                        <div class="col-7">
                            <div class="form idea-form">
                                <form>
                                    <h4>Innovator / Create New Idea</h4>
                                    <div class="row" style="justify-content: space-between;">
                                        <div class="input">
                                            <label for="title">Idea Title</label>
                                            <input type="text" name="title" id="title" required>
                                        </div>
                                        <div class="input col-5">
                                            <label for="file">Upload Files</label>
                                            <input type="file" name="file" id="file" multiple accept=".jpg, .jpeg, .pdf, .mp4, .mpg, .avi">
                                        </div>
                                    </div>
                                    <div class="input">
                                        <label for="category">Category</label>
                                        <input type="text" name="category" id="category" required>
                                    </div>
                                    <div class="input">
                                        <label for="description">Description</label>
                                        <textarea name="description" id="description" rows="3"></textarea>
                                    </div>
                                    <div class="input">
                                        <label for="implementation">Implementation Plan</label>
                                        <input type="text" name="implementation" id="implementation">
                                    </div>
                                    <div class="row" style="justify-content: space-between;">
                                        <div class="input col-5">
                                            <label for="phone">Phone Number</label>
                                            <input type="tel" name="phone" id="phone" required>
                                        </div>
                                        <div class="input col-6">
                                            <label for="email">Email Address</label>
                                            <input type="email" name="mail" id="mail" required>
                                        </div>
                                    </div>
                                    <button class="btn">Post Now</button>
                                </form>
                            </div>
                        </div>
                        <div class="col-5 guide-to-sub">
                            <div class="tips">
                                <h3>#TipsForCompetitiveIdeas</h3>
                                <ul>
                                    <li><span class="icon_check_alt2"></span><strong>Start with
                                            a problem or an opportunity.</strong><br> What do you want to solve? How can it be
                                        made better? Or what new service could it provide?</li>
                                    <li><span class="icon_check_alt2"></span><strong>Describe
                                            your idea in detail,</strong> including how it works and why it will work.</li>
                                    <li><span class="icon_check_alt2"></span><strong>Think
                                            about the user first</strong><br> Who are they, what needs do they have, and how
                                        does your solution meet those needs?</li>
                                    <li><span class="icon_check_alt2 i-color1"><strong> Don’t just tell us about your product</strong><br> Show us! Use images
                                            and videos to illustrate your concept. This helps us understand exactly
                                            what you’re proposing.</li>
                                </ul>
                            </div>
                            <div class="rule">
                                <p>
                                    Make sure no <b>harrasment</b>
                                    or <b>inappropriate</b> content is posted. All ideas are reviewed by our team
                                    before being published on the site.
                                </p>
                                <p>By submitting this form, I confirm that I have read and agree to
                                    the <a href="#0">Terms of Service</a> and
                                    <a href="#0">Privacy Policy</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



</body>

</html>