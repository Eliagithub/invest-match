<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>InvestMatch - Innovator and Investor Matching Platform</title>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <!-- FontAwesome CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.css">
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>




  <!-- styles -->
  <link rel="stylesheet" href="/css/home.css" />


  <!-- icons -->
  <script src="https://kit.fontawesome.com/627b5e26a3.js" crossorigin="anonymous"></script>

  <!-- fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet" />
</head>

<body class="antialiased">
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <main>
    <section class="hero" id="home">
      <div class="container">
        <div class="hero-content col-6">
          <h2>Connecting Innovators with Investors</h2>
          <p>
            Unlocking Opportunities for Ambitious Entrepreneurs and Visionary
            Funders
          </p>
          <div class="hero-btn">
            <a href="" class="btn">get started</a>
            <a href="" class="button">learn more</a>
          </div>
        </div>
        <div class="hero-box-wp">
          <div class="hrow">
            <div class="hero-box col-4">
              <h4>Welcome to Your Investment Journey</h4>
              <p>Where Dreams Meet Capital, and Innovation Finds Fuel</p>
            </div>
            <div class="hero-box col-8">
              <p>
                Where Ambitious Entrepreneurs Meet Visionary Funders. Join
                InvestLink, the trusted bridge to growth and investment
                opportunities.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="about" id="about">
      <div class="container">
        <div class="row">
          <div class="col-5">
            <img src="{{ asset('image/about.png')}}" style="width: 100%; filter: brightness(.8);" />
          </div>
          <div class="about-content col-6">
            <span class="sec-title">who we are</span>
            <h3>where dreams meet capital, and innovation finds fuel</h3>
            <p>
              At InvestLink, we're not just a platform; we're the catalyst for
              your financial success. Our mission is to empower entrepreneurs
              and investors alike, providing a bridge that connects visionary
              ideas with the capital they need to flourish.
            </p>
            <p>
              With a network of over 800 financing parties, we've spent a
              decade perfecting the art of matching the right investor,
              venture capitalist, or financier with ambitious entrepreneurs.
              We're critical, decisive, and unrelenting in our commitment to
              your success.
            </p>
            <div class="about-btn">
              <a href="" class="btn">learn more</a>
              <a href="" class="button">meet the team</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="how-it-works" id="how">
      <div class="container">
        <div class="row pb-5">
          <div class="text-center col-md-8 mx-auto">
            <div class="section-title">
              <h1>How it Works</h1>
              <p>At InvestLink, our approach to connecting entrepreneurs with investors is designed to be seamless, transparent, and empowering. We believe in fostering meaningful collaborations and ensuring that great ideas find the support they need to flourish.</p>
            </div>
          </div>
        </div>

        <div class="row content">
          <div class="row pb-5">

            <div class="col-md-6 mt-2 mt-md-0 p-2 pl-4 box mb-3">
              <div class="d-flex p-3 bg-white align-items-center justify-content-between">
                <div class="p-1">
                  <span>Step 1: Idea Submission</span>
                  <h3 class="h4 mt-3 ">Investor Matching Begins</h3>
                  <p class="mt-3">Entrepreneurs kickstart the process by submitting their innovative business ideas through our user-friendly platform. This marks the beginning of our robust investor matching journey.</p>
                </div>
              </div>
            </div>

            <div class="col-md-6 mt-2 mt-md-0 p-2 pl-4 box mb-3">
              <div class="d-flex p-3 bg-white align-items-center justify-content-between">
                <div class="p-1">
                  <span>Step 2: In-Depth Analysis</span>
                  <h3 class="h4 mt-3 ">Matching Algorithm at Work </h3>
                  <p class="mt-3">Our advanced matching algorithm analyzes investor preferences and business idea attributes, ensuring a tailored and efficient matchmaking process that aligns with each user's unique goals and criteria.</p>
                </div>
              </div>
            </div>

            <div class="col-md-6 mt-2 mt-md-0 p-2 pl-4 box mb-3">
              <div class="d-flex p-3 bg-white align-items-center justify-content-between">
                <div class="p-1">
                  <span>Step 3: Recommendations</span>
                  <h3 class="h4 mt-3 ">Curated Match Recommendations</h3>
                  <p class="mt-3">Investors receive curated match recommendations based on their preferences. These carefully selected matches represent opportunities with high compatibility, facilitating efficient decision-making.</p>
                </div>
              </div>
            </div>

            <div class="col-md-6 mt-2 mt-md-0 p-2 pl-4 box mb-3">
              <div class="d-flex p-3 bg-white align-items-center justify-content-between">
                <div class="p-1">
                  <span>Step 4: Communication Hub</span>
                  <h3 class="h4 mt-3 ">Secure Communication Channels</h3>
                  <p class="mt-3"> Upon expressing interest, investors and entrepreneurs engage in secure and private communication channels within the platform. This ensures the confidentiality of discussions and protects sensitive information.</p>
                </div>
              </div>
            </div>

            <div class="col-md-6 mt-2 mt-md-0 p-2 pl-4 box mb-3">
              <div class="d-flex p-3 bg-white align-items-center justify-content-between">
                <div class="p-1">
                  <span>Step 5: Investor Review</span>
                  <h3 class="h4 mt-3 ">Investor Review and Expression of Interest</h3>
                  <p class="mt-3">Investors thoroughly review proposed business ideas and express their interest in potential collaborations. This stage marks a crucial intersection where exciting opportunities are explored and partnerships begin to take shape.</p>
                </div>
              </div>
            </div>

            <div class="col-md-6 mt-2 mt-md-0 p-2 pl-4 box mb-3">
              <div class="d-flex p-3 bg-white align-items-center justify-content-between">
                <div class="p-1">
                  <span>Step 6: Successful Collaboration</span>
                  <h3 class="h4 mt-3 ">Facilitating Successful Collaborations</h3>
                  <p class="mt-3">InvestLink aims to witness the success of collaborations as investors and entrepreneurs join forces, leveraging mutual strengths to turn innovative ideas into thriving businesses. We celebrate each success as a testament to the power of collaborative innovation.</p>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </section>


    <section class="blog_section" id="blog">
      <div class="container">
        <div class="section-title">
          <h1>Blog and Resources</h1>
          <p>we provide a wealth of valuable information and tools to empower entrepreneurs and investors on their journey to success. Explore the diverse range of resources curated to enhance your understanding, skills, and strategies in the world of entrepreneurship and investment.</p>
        </div>
        <div class="blog_content">
          <div class="owl-carousel owl-theme row">
            <div class="blog_item col-4">
              <div class="blog_image">
                <img class="img-fluid" src="https://cdn.pixabay.com/photo/2019/03/10/18/31/hong-kong-4046913_960_720.jpg" alt="images not found">
                <span><i class="icon ion-md-create"></i></span>
              </div>
              <div class="blog_details">
                <div class="blog_title">
                  <h5><a href="#">We are best for any industrial & business solution.</a></h5>
                </div>
                <ul>
                  <li><i class="icon ion-md-person"></i>Elia Muyizere</li>
                  <li><i class="icon ion-md-calendar"></i>December 21, 2023</li>
                </ul>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem...</p>
                <a href="#">Read More<i class="icofont-long-arrow-right"></i></a>
              </div>
            </div>
            <div class="blog_item col-4">
              <div class="blog_image">
                <img class="img-fluid" src="https://cdn.pixabay.com/photo/2015/07/09/22/45/tree-838667_960_720.jpg" alt="images not found">
                <span><i class="icon ion-md-create"></i></span>
              </div>
              <div class="blog_details">
                <div class="blog_title">
                  <h5><a href="#">We are best for any industrial & business solution.</a></h5>
                </div>
                <ul>
                  <li><i class="icon ion-md-person"></i>Elia Muyizere</li>
                  <li><i class="icon ion-md-calendar"></i>December 21, 2023</li>
                </ul>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem...</p>
                <a href="#">Read More<i class="icofont-long-arrow-right"></i></a>
              </div>
            </div>
            <div class="blog_item col-4">
              <div class="blog_image">
                <img class="img-fluid" src="https://cdn.pixabay.com/photo/2015/10/30/20/13/sunrise-1014712_960_720.jpg" alt="images not found">
                <span><i class="icon ion-md-create"></i></span>
              </div>
              <div class="blog_details">
                <div class="blog_title">
                  <h5><a href="#">We are best for any industrial & business solution.</a></h5>
                </div>
                <ul>
                  <li><i class="icon ion-md-person"></i>Elia Muyizere</li>
                  <li><i class="icon ion-md-calendar"></i>December 21, 2023</li>
                </ul>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem...</p>
                <a href="#">Read More<i class="icofont-long-arrow-right"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <section class="contact" id="contact">
      <div class="container">
        <div class="contact-form">
          <div class="form-title">
            <h1>contact us</h1>
            <p>Hello there! feel free to leave us a message</p>
          </div>
          <hr>
          <form>
            <div class="row">
              <div class="form-input col-6">
                <span class="input-box">
                  <input type="text" class="input" placeholder="Fullname">
                </span>
              </div>
              <div class="form-input col-6">
                <span class="input-box">
                  <input type="email" class="input" placeholder="Email">
                </span>
              </div>
            </div>
            <div class="row">
              <div class="form-input col-6">
                <span class="input-box">
                  <span class="icon"></span>
                  <input type="tel" class="input" placeholder="Phone Number">
                </span>
              </div>
              <div class="form-input col-6">
                <span class="input-box">
                  <span class="icon"></span>
                  <input type="text" class="input" placeholder="Topic | Subject">
                </span>
              </div>
            </div>
            <div class="row">
              <div class="form-input col-12">
                <span class="input-box">
                  <span class="icon"></span>
                  <textarea name="message" cols="30" rows="4" class="input" placeholder="Message*"></textarea>
                </span>
              </div>
            </div>
            <div class="form-btn col-12">
              <button type="submit" class="btn btn-primary">Send Message</button>
            </div>
          </form>
        </div>
      </div>
    </section>



  </main>


  <footer class="footer-section" id="footer">
    <div class="container">
      <div class="footer-cta pt-5 pb-5">
        <div class="row">
          <div class="col-xl-4 col-md-4 mb-30">
            <div class="single-cta">
              <i class="fas fa-map-marker-alt"></i>
              <div class="cta-text">
                <h4>Find us</h4>
                <span>KN 12 ST, Kigali, Rwanda</span>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-md-4 mb-30">
            <div class="single-cta">
              <i class="fas fa-phone"></i>
              <div class="cta-text">
                <h4>Call us</h4>
                <span>1234567890</span>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-md-4 mb-30">
            <div class="single-cta">
              <i class="far fa-envelope-open"></i>
              <div class="cta-text">
                <h4>Mail us</h4>
                <span>info@investmatch.com</span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-content pt-5 pb-5">
        <div class="row">
          <div class="col-xl-4 col-lg-4 mb-50">
            <div class="footer-widget">
              <div class="footer-logo">
                <a href="index.html">
                  <img src="data:image/png;base64,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" class="img-fluid" alt="logo">
                </a>
              </div>
              <div class="footer-text">
                <p>We are Gateway to Seamless Collaboration, Connecting Entrepreneurs with Potential Investors for Innovative Ventures.</p>
              </div>
              <div class="footer-social-icon">
                <span>Follow us</span>
                <a href="#"><i class="fab fa-facebook-f facebook-bg"></i></a>
                <a href="#"><i class="fab fa-twitter twitter-bg"></i></a>
                <a href="#"><i class="fab fa-google-plus-g google-bg"></i></a>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
            <div class="footer-widget">
              <div class="footer-widget-heading">
                <h3>Useful Links</h3>
              </div>
              <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#about">about</a></li>
                <li><a href="#how">services</a></li>
                <li><a href="#footer">testimonials</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="#footer">Gallery</a></li>
                <li><a href="#blog">Blog</a></li>
                <li><a href="#how">Expert Team</a></li>
                <li><a href="#footer">Admin? Login</a></li>
                <li><a href="#blog">Latest News</a></li>
              </ul>
            </div>
          </div>
          <div class="col-xl-4 col-lg-4 col-md-6 mb-50">
            <div class="footer-widget">
              <div class="footer-widget-heading">
                <h3>Subscribe</h3>
              </div>
              <div class="footer-text mb-25">
                <p>Don’t miss to subscribe to our new feeds, kindly fill the form below.</p>
              </div>
              <div class="subscribe-form">
                <form action="#">
                  <input type="text" placeholder="Email Address">
                  <button><i class="fab fa-telegram-plane"></i></button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="copyright-area">
      <div class="container">
        <div class="row">
          <div class="col-xl-6 col-lg-6 text-center text-lg-left">
            <div class="copyright-text">
              <p>Copyright &copy; 2023, All Right Reserved <a href="https://youtube.com/>Invest Match</a></p>
            </div>
          </div>
          <div class="col-xl-6 col-lg-6 d-none d-lg-block text-right">
            <div class="footer-menu">
              <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#footer">Terms</a></li>
                <li><a href="#footer">Privacy</a></li>
                <li><a href="#footer">Policy</a></li>
                <li><a href="#contact">Contact</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>



  <script src="/js/script.js"></script>
  <!-- Jquery -->
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <!-- bootstrap -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <!-- carousel -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"></script>
  
    </body>
</html>
