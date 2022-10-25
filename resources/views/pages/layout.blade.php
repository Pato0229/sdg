<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mediCare</title>
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- normalize css -->
    <link rel="stylesheet" href="{{ asset('/css/normalize.css') }}">
    <!-- custom css -->
    <link rel="stylesheet" href="{{ asset('/css/about.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/medicKit.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/doctors.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/blog.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/contact.css') }}">
    <script src="https://code.jquery.com/jquery-3.6.1.js"></script>    
</head>
<body>
    <!-- header -->
    <header class="header bg-blue">
        <div class="brand-hold">
            <a href="#" class="navbar-brand">
                <img src="{{asset('imgs/brand-logo.jpeg')}}" alt="site logo">
            </a>
            <h1>Medi<span style="color: #fff;">Care</span> </h1>
        </div>
        <nav class="navbar bg-blue">
            <div class="container flex">
                <button type="button" class="navbar-show-btn">
                    <img src="{{asset('imgs/hamburger-menu-icon-16.png')}}">
                </button>
                <div class="navbar-collapse bg-white">
                    <button type="button" class="navbar-hide-btn" >
                        <img src="{{asset('imgs/close-icon-b.png')}}" alt="">
                    </button>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="{{ url('/home') }}" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/about') }}" class="nav-link">About</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/service') }}" class="nav-link">Service</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/blog') }}" class="nav-link">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/contact') }}" class="nav-link">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/contact') }}" class="nav-link">Login</a>
                        </li>
                    </ul>
                    <!-- <div class="search-bar">
                        <form>
                            <div class="search-bar-box flex">
                                <span class="search-icon flex">
                                    <img src="/Search-icon.png" alt="">
                                </span>
                                <input type="search" class="search-control" placeholder="Search here...">
                            </div>
                        </form>
                    </div> -->
                </div>
            </div>
        </nav>
    </header>
<!-- end of header -->
    @yield('content')
        <!-- custom js -->
    <script type="text/javascript" src="{{ asset('js/medicKit.js') }}"></script>
    <!-- footer -->
    <footer id="footer" class="footer text-center">
    <div class="container">
        <div class="footer-inner text-white py grid">
        <div class="footer-item">
            <h3 class="footer-head">about us</h3>
            <div class="icon">
            <img src="/imgs/brand-logo.jpeg" alt="">
            <h3>Medi<span>Care</span> </h3>
            </div>
            <p class="text text-md">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            <address>
            MediCare <br>
            20 Code Plateau Campus, off Zaramanganda rd <br>
            Jos, Plateau State <br>
            Nigeria
            </address>
        </div>
        
        <div class="footer-item">
            <h3 class="footer-head">tags</h3>
            <ul class="tags-list flex">
            <li>medical care</li>
            <li>emergency</li>
            <li>therapy</li>
            <li>surgery</li>
            <li>medication</li>
            <li>nurse</li>
            </ul>
        </div>

        <div class="footer-item">
            <h3 class="footer-head">Quick links</h3>
            <ul>
            <li><a href="#" class="text-white">Our Services</a></li>
            <li><a href="#" class="text-white">Our Plan</a></li>
            <li><a href="#" class="text-white">Privacy Policy</a></li>
            <li><a href="#" class="text-white">Appointment Schedule</a></li>
            </ul>
        </div>

        <div class="footer-item">
            <h3 class="footer-head">make an appointment</h3>
            <p class="text text-md">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            <ul class="appointment-info">
            <li>8:00 AM - 11:00 AM</li>
            <li>2:00 PM - 05:00 PM</li>
            <li>6:00 PM - 11:00 PM</li>
            <li>
                <i class="fas fa-envelope"></i>
                <span>medicare@gmail.com</span>
            </li>
            <li>
                <i class="fas fa-phone"></i>
                <span>+234 (814) 042 3552</span>
            </li>
            </ul>
        </div>
        </div>
        <div class="footer-links">
        <ul class="flex">
            <li><a href="https://www.facebook.com" class="text-white flex"><i class="fab fa-facebook-f"></i></a></li>
            <li><a href="https://www.twitter.com" class="text-white flex"><i class="fab fa-twitter"></i></a></li>
            <li><a href="https://facebook.com" class="text-white flex"><i class="fab fa-linkedin"></i></a></li>
            <li><a href="https://www.instagram.com" class="text-white flex"><i class="fab fa-instagram"></i></a></li>
        </ul>
        </div>
    </div>
    </footer>
    <!-- end of footer -->
</body>
</html>