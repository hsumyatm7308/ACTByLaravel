
@extends('aungchantharhotel.layout')

@section('title', 'Aung Chan Thar')
<!DOCTYPE html>
<html>
    <head>
        <title>Aung Chan Thar</title>
        <!-- fav icon -->
        <link href="./assets/img/fav/favicon3.png" rel="icon" type="image/png" sizes="16x16"/>
        <!-- bootstrap css1 js1 -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <!-- fontawesome css1 -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- magnific popup css1 js1 -->
        <link href="{{asset('aungchanthar/assets/libs/magnific-popup-master/dist/magnific-popup.css')}}" rel="stylesheet" type="text/css"/>
        <!-- custom css -->
        <!-- <link href="./css/style.css" rel="stylesheet" type="text/css"/> -->
        <link href="{{asset('aungchanthar/css/style.css')}}" rel="stylesheet" type="text/css"/>
       
    </head>
    <body>
        <!-- Start Header Section -->
        <header>
            <!-- Start Nav Bar -->
            <nav class="navbar navbar-expand-md navbar-dark">
                <div class="container">
                    <button class="navbar-toggler ms-auto" data-bs-toggle="collapse" data-bs-target="#navbarcollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div id="navbarcollapse" class="navbar-collapse collapse">
                        <ul class="navbar-nav me-auto">
                            <li class="nav-item">
                                <a href="index.html" class="nav-link active">Home</a>
                            </li>

                            <li class="nav-item">
                                <a href="#room" class="nav-link">Rooms</a>
                            </li>

                            <li class="nav-item">
                                <a href="{{route('blog')}}" class="nav-link">Blog</a>
                            </li>

                            <li class="nav-item">
                                <a href="#services" class="nav-link">Restaurant</a>
                            </li>

                            <li class="nav-item">
                                <a href="#contact" class="nav-link">Contact</a>
                            </li>

                            <li class="nav-item dropdowns">
                                <a href="#" class="nav-link dropbtn" onclick="dropbtn(event)">FAQ</a>

                                <div id="" class="dropdown-contents mydropdowns">
                                    <input type="text" name="search" id="search" onkeyup="dropfilter()" class="search" placeholder="Search..."/>
                                    <a href="javascript:void(0)">Room Booking</a>
                                    <a href="javascript:void(0)">Transportation</a>
                                    <a href="javascript:void(0)">Payment</a>
                                    <a href="javascript:void(0)">Wifi Connect</a>
                                    <a href="javascript:void(0)">Food</a>
                                    <a href="javascript:void(0)">Bar</a>
                                    <a href="javascript:void(0)">Spa</a>
                                </div>
                            </li>
                        </ul>

                        <div class="dropdown float-sm-end">
                            <a href="#" class="dropdown-toggle text-decoration-none" data-bs-toggle="dropdown">
                                <img src="{{asset('aungchanthar/assets/img/users/user1.jpg')}}" alt="user1" class="rounded-circle" width="32px" height="32px"/>
                            </a>
    
                            <ul class="dropdown-menu small">
                                <li> <a href="#" class="dropdown-item">Profile</a> </li>
                                <li> <a href="#" class="dropdown-item">Invoices</a> </li>
                                <li> <hr class="dropdown-divider"/> </li>
                                <li> <a href="#" class="dropdown-item">Sign Out</a> </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- End Nav Bar -->

            <!-- Start Banner -->
            <div class="container-fluid">
                <div id="banners" class="banners">
                    <h1 class="display-4 bannerheaders">Aung Chaung Thar Hotel</h1>
                    <p class="lead bannerparagraphs">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                </div>
            </div>
            <!-- End Banner -->
        </header>
        <!-- End Header Section -->

        <!-- Start Booking Section -->
        <section id="booking" class="search-rooms text-center">
            <form action="" method="">
                <input type="date" name="checkin" id="checkin" class="form-control"/>
                <input type="date" name="checkout" id="checkout" class="form-control"/>
                <select name="adult" id="adult" class="form-control">
                    <option value="1">1 Adult</option>
                    <option value="2">2 Adult</option>
                    <option value="3">3 Adult</option>
                    <option value="4">4 Adult</option>
                </select>
                <input type="text" name="schroom" id="schroom" class="form-control" placeholder="Search Somethings..."/>
                <input type="button" class="btn btn-primary rounded-0" value="Search Room"/>
            </form>
        </section>
        <!-- End Booking Section -->

        <!-- Start Room Section -->
        <section id="room" class="rooms py-5 mt-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="text-center">
                            <h4>Our Rooms</h4>
                            <p class="small">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        </div>
                    </div>
                </div>

                <div class="rows">
                    <div class="columns">
                        <a href="aungchanthar/assets/img/gallery/image1.jpg" class="roompopup">
                            <img src="aungchanthar/assets/img/gallery/image1.jpg" alt="image2"/>
                        </a>
                        <a href="aungchanthar/assets/img/gallery/image2.jpg" class="roompopup">
                            <img src="aungchanthar/assets/img/gallery/image2.jpg" alt="image2"/>
                        </a>
                        <a href="aungchanthar/assets/img/gallery/image3.jpg" class="roompopup">
                            <img src="aungchanthar/assets/img/gallery/image3.jpg" alt="image3"/>
                        </a>
                    </div>
                   
                    <div class="columns">
                        <a href="aungchanthar/assets/img/gallery/image4.jpg" class="roompopup">
                            <img src="aungchanthar/assets/img/gallery/image4.jpg" alt="image1"/>
                        </a>
                        <a href="aungchanthar/assets/img/gallery/image5.jpg" class="roompopup">
                            <img src="aungchanthar/assets/img/gallery/image5.jpg" alt="image1"/>
                        </a>
                        <a href="aungchanthar/assets/img/gallery/image6.jpg" class="roompopup">
                            <img src="aungchanthar/assets/img/gallery/image6.jpg" alt="image1"/>
                        </a>
                    </div>

                    <div class="columns">
                        <a href="aungchanthar/assets/img/gallery/image7.jpg" class="roompopup">
                            <img src="aungchanthar/assets/img/gallery/image7.jpg" alt="image7"/>
                        </a>
                        <a href="aungchanthar/assets/img/gallery/image8.jpg" class="roompopup">
                            <img src="aungchanthar/assets/img/gallery/image8.jpg" alt="image8"/>
                        </a>
                        <a href="aungchanthar/assets/img/gallery/image9.jpg" class="roompopup">
                            <img src="aungchanthar/assets/img/gallery/image9.jpg" alt="image9"/>
                        </a>
                    </div>

                    <div class="columns">
                        <a href="aungchanthar/assets/img/gallery/image1.jpg" class="roompopup">
                            <img src="aungchanthar/assets/img/gallery/image1.jpg" alt="image1"/>
                        </a>
                        <a href="aungchanthar/assets/img/gallery/image2.jpg" class="roompopup">
                            <img src="aungchanthar/assets/img/gallery/image2.jpg" alt="image2"/>
                        </a>
                        <a href="aungchanthar/assets/img/gallery/image3.jpg" class="roompopup">
                            <img src="aungchanthar/assets/img/gallery/image3.jpg" alt="image3"/>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Room Section -->

        <!-- Start Our Service Section -->
        <section id="services" class="text-center py-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">                   
                        <h4>Our Services</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="iconboxs dropdowns">
                            <div class="icons"><i class="fas fa-car fa-2x"></i></div>
                            <h4>Airport Transportation</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text eve</p>
                            <button class="btn btn-outline-dark rounded-0" onclick="dropbtn(Event)">More Info</button>

                            <div class="dropdown-contents mydropdowns">
                                <a href="javascript:void(0);">Hotel Limousines</a>
                                <a href="javascript:void(0);">Drivers</a>
                                <a href="javascript:void(0);">Visit City</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="iconboxs dropdowns">
                            <div class="icons"><i class="fas fa-clock fa-2x"></i></div>
                            <h4>Quick Check In/Out</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text eve</p>
                            <button class="btn btn-outline-dark rounded-0" onclick="dropbtn(event)">More Info</button>

                            <div class="dropdown-contents mydropdowns">
                                <a href="javascript:void(0);">Early Check In</a>
                                <a href="javascript:void(0);">Lately Check Out</a>
                                <a href="javascript:void(0);">Extra Half Day</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="iconboxs dropdowns">
                            <div class="icons"><i class="fas fa-building fa-2x"></i></div>
                            <h4>24/7 Room Service</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text eve</p>
                            <button class="btn btn-outline-dark rounded-0" onclick="dropbtn(event)">More Info</button>

                            <div class="dropdown-contents mydropdowns">
                                <a href="javascript:void(0);">Cleaning Service</a>
                                <a href="javascript:void(0);">Food Order</a>
                                <a href="javascript:void(0);">Outdoor Call</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Our Service Section -->

        <!-- Start Testimonials Section -->
        <section id="testimonials" class="bg-dark text-white py-5">
            <div class="container">
                <div class="row text-center">
                    <div class="testimonial-container">
                        <div class="fas fa-quote-right fa-quotes"></div>
                        <div class="fas fa-quote-left fa-quotes"></div>

                        <div class="company">
                            <h4 class="companyname">Rich Start Restaurant</h4>
                            <p class="role">Our Outlet</p>
                        </div>

                        <p class="testimonial">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>

                        <div class="progress-bar"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Testimonials Section -->

        <!-- Start Blog Section -->

        <section id="blog" class="py-3">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 mb-2">
                        <div class="card">
                            <img src="https://source.unsplash.com/random/300x200" class="" alt="blog1"/>
                            <div class="card-body">
                                <h6 class="card-title">Blog Post One</h6>
                                <p class="small">Witten by Mr.Anton on 02/Oct/2022</p>
                                <hr/>
                                <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mb-2">
                        <div class="card">
                            <img src="https://source.unsplash.com/random/300x201" class="" alt="blog1"/>
                            <div class="card-body">
                                <h6 class="card-title">Blog Post Two</h6>
                                <p class="small">Witten by Mr.Anton on 02/Oct/2022</p>
                                <hr/>
                                <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mb-2">
                        <div class="card">
                            <img src="https://source.unsplash.com/random/300x202" class="" alt="blog1"/>
                            <div class="card-body">
                                <h6 class="card-title">Blog Post Three</h6>
                                <p class="small">Witten by Mr.Anton on 02/Oct/2022</p>
                                <hr/>
                                <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Blog Section -->

        <!-- Start ADV Box Section -->
        <section class="py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <div class="card bg-danger text-white text-center">
                            <div class="card-body">
                                <i class="fas fa-hiking fa-3x"></i>
                                <h3>Activities</h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mb-3">
                        <div class="card bg-dark text-white text-center">
                            <div class="card-body">
                                <i class="fas fa-spa fa-3x"></i>
                                <h3>Spa & Wellness</h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mb-3">
                        <div class="card bg-danger text-white text-center">
                            <div class="card-body">
                                <i class="fas fa-crown fa-3x"></i>
                                <h3>Wedding & Romance</h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mb-3">
                        <div class="card bg-dark text-white text-center">
                            <div class="card-body">
                                <i class="fas fa-box fa-3x"></i>
                                <h3>Art</h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mb-3">
                        <div class="card bg-danger text-white text-center">
                            <div class="card-body">
                                <i class="fas fa-credit-card fa-3x"></i>
                                <h3>VIA Payment</h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mb-3">
                        <div class="card bg-dark text-white text-center">
                            <div class="card-body">
                                <i class="fas fa-coffee fa-3x"></i>
                                <h3>Activities</h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End ADV Box Section -->

        <!-- Start ADV Text Section -->
        <section class="adv-container">
            <p class="advtext">Love the Nature <br/> @ACT Hotel</p>
        </section>
        <!-- End ADV Text Section -->

        <!-- Start Staffs Section -->
        <section id="staffs" class="py-5">
            <div class="container">
                <div class="row">
                    <div class="cards mb-3">
                        <img src="aungchanthar/assets/img/users/user1.jpg" alt="user1"/>
                        <h4>Ms.July</h4>
                        <p class="title">CEO & Founder</p>
                        <p>Harvard University</p>
                        <div>
                            <a href="javascript:void(0)"> <i class="fab fa-facebook-f"></i> </a>
                            <a href="javascript:void(0)"> <i class="fab fa-twitter"></i> </a>
                            <a href="javascript:void(0)"> <i class="fab fa-linkedin-in"></i> </a>
                            <a href="javascript:void(0)"> <i class="fas fa-envelope"></i> </a>
                        </div>
                        <button type="button">Contact</button>
                    </div>

                    <div class="cards mb-3">
                        <img src="aungchanthar/assets/img/users/user2.jpg" alt="user2"/>
                        <h4>Ms.Anton</h4>
                        <p class="title">Hotel Manager</p>
                        <p>Oxford University</p>
                        <div>
                            <a href="javascript:void(0)"> <i class="fab fa-facebook-f"></i> </a>
                            <a href="javascript:void(0)"> <i class="fab fa-twitter"></i> </a>
                            <a href="javascript:void(0)"> <i class="fab fa-linkedin-in"></i> </a>
                            <a href="javascript:void(0)"> <i class="fas fa-envelope"></i> </a>
                        </div>
                        <button type="button">Contact</button>
                    </div>

                    <div class="cards mb-3">
                        <img src="aungchanthar/assets/img/users/user3.jpg" alt="user3"/>
                        <h4>Ms.Honey</h4>
                        <p class="title">Finance Manager</p>
                        <p>Catholic University</p>
                        <div>
                            <a href="javascript:void(0)"> <i class="fab fa-facebook-f"></i> </a>
                            <a href="javascript:void(0)"> <i class="fab fa-twitter"></i> </a>
                            <a href="javascript:void(0)"> <i class="fab fa-linkedin-in"></i> </a>
                            <a href="javascript:void(0)"> <i class="fas fa-envelope"></i> </a>
                        </div>
                        <button type="button">Contact</button>
                    </div>

                    <div class="cards mb-3">
                        <img src="aungchanthar/assets/img/users/team_popup.jpg" alt="user4"/>
                        <h4>Ms.Thida</h4>
                        <p class="title">Co Founder</p>
                        <p>Harvard University</p>
                        <div>
                            <a href="javascript:void(0)"> <i class="fab fa-facebook-f"></i> </a>
                            <a href="javascript:void(0)"> <i class="fab fa-twitter"></i> </a>
                            <a href="javascript:void(0)"> <i class="fab fa-linkedin-in"></i> </a>
                            <a href="javascript:void(0)"> <i class="fas fa-envelope"></i> </a>
                        </div>
                        <button type="button">Contact</button>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Staffs Section -->

        <!-- Start Property Section -->
        <section id="property" class="py-5">
            <div class="row text-center">
                <div class="col-md-12">
                    <h4>Properties</h4>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                </div>
            </div>

            <ul id="filtercontrol" class="list-inline text-center text-uppercase fw-bold my-3">
                <li class="list-inline-item propertylists activeitems" onclick="filterby('all')">
                    All <span class="mx-md-5 mx-3 text-muted">/</span>
                </li>

                <li class="list-inline-item propertylists" onclick="filterby('room')">
                    Room <span class="mx-md-5 mx-3 text-muted">/</span>
                </li>

                <li class="list-inline-item propertylists" onclick="filterby('decoration')">
                    Decoration <span class="mx-md-5 mx-3 text-muted">/</span>
                </li>

                <li class="list-inline-item propertylists" onclick="filterby('furniture')">
                    Furniture <span class="mx-md-5 mx-3 text-muted">/</span>
                </li>

                <li class="list-inline-item propertylists" onclick="filterby('office')">Office</li>
            </ul>

            <div class="container-fluid">
                <div class="d-flex flex-wrap justify-content-center">
                    <div class="filters room">
                        <img src="aungchanthar/assets/img/gallery/image1.jpg" alt="image1" width="200px"/>
                    </div>

                    <div class="filters room">
                        <img src="aungchanthar/assets/img/gallery/image2.jpg" alt="image2" width="200px"/>
                    </div>

                    <div class="filters room">
                        <img src="aungchanthar/assets/img/gallery/image3.jpg" alt="image3" width="200px"/>
                    </div>

                    <div class="filters decoration">
                        <img src="aungchanthar/assets/img/gallery/image4.jpg" alt="image4" width="200px"/>
                    </div>

                    <div class="filters decoration">
                        <img src="aungchanthar/assets/img/gallery/image5.jpg" alt="image5" width="200px"/>
                    </div>

                    <div class="filters decoration">
                        <img src="aungchanthar/assets/img/gallery/image6.jpg" alt="image6" width="200px"/>
                    </div>

                    <div class="filters furniture">
                        <img src="aungchanthar/assets/img/gallery/image7.jpg" alt="image7" width="200px"/>
                    </div>

                    <div class="filters furniture">
                        <img src="aungchanthar/assets/img/gallery/image8.jpg" alt="image8" width="200px"/>
                    </div>

                    <div class="filters furniture">
                        <img src="aungchanthar/assets/img/gallery/image9.jpg" alt="image9" width="200px"/>
                    </div>

                    <div class="filters office">
                        <img src="aungchanthar/assets/img/gallery/image1.jpg" alt="image1" width="200px"/>
                    </div>

                    <div class="filters office">
                        <img src="aungchanthar/assets/img/gallery/image2.jpg" alt="image2" width="200px"/>
                    </div>

                    <div class="filters decoration">
                        <img src="aungchanthar/assets/img/gallery/image3.jpg" alt="image3" width="200px"/>
                    </div>

                    <div class="filters decoration">
                        <img src="aungchanthar/assets/img/gallery/image4.jpg" alt="image4" width="200px"/>
                    </div>

                    <div class="filters room">
                        <img src="aungchanthar/assets/img/gallery/image5.jpg" alt="image5" width="200px"/>
                    </div>

                    <div class="filters furniture">
                        <img src="aungchanthar/assets/img/gallery/image6.jpg" alt="image6" width="200px"/>
                    </div>

                    <div class="filters furniture">
                        <img src="aungchanthar/assets/img/gallery/image7.jpg" alt="image7" width="200px"/>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Property Section -->

        <!-- Start Contact Section -->
        <section id="contact" class="bg-dark py-3">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 d-sm-none d-md-block">
                        <div class="taboxs">
                            <div id="phone" class="tabcontents">
                                <h1>Phone</h1>
                                <p>Office : 09 4220 4222 5</p>
                                <p>Office : 09 4220 4222 8</p>
                            </div>

                            <div id="social" class="tabcontents">
                                <h1>Social</h1>
                                <p>Viber : @aungchaungtar</p>
                                <p>Line : @aungchaungtar</p>
                            </div>

                            <div id="website" class="tabcontents">
                                <h1>Social</h1>
                                <p>Web : www.aungchaungtar.com</p>
                                <p>Email : admin@aungchaungtar.com</p>
                            </div>

                            <div id="address" class="tabcontents">
                                <h1>Address</h1>
                                <p>No.170 , Between 102/103, Mandalay, Myanmar.</p>
                            </div>

                            <button type="button" id="autoclick" class="btn-tabs" onclick="tabbox('phone', event.target, 'grey')">Phone</button>
                            <button type="button" class="btn-tabs" onclick="tabbox('social', event.target, 'slateblue')">Social</button>
                            <button type="button" class="btn-tabs" onclick="tabbox('website', this, 'slategray')">Website</button>
                            <button type="button" class="btn-tabs" onclick="tabbox('address', this, 'steelblue')">Address</button>
                        </div>
                    </div>

                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="text-center">Please fill out this form to contact us</h4>
                                <hr/>

                                <form action="" method="">
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <div class="form-group">
                                                <input type="text" name="firstname" id="firstname" class="form-control form-control-sm rounded-0" placeholder="First Name"/>
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <div class="form-group">
                                                <input type="text" name="lastname" id="lastname" class="form-control form-control-sm rounded-0" placeholder="Last Name"/>
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <div class="form-group">
                                                <input type="text" name="email" id="email" class="form-control form-control-sm rounded-0" placeholder="Email"/>
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <div class="form-group">
                                                <input type="text" name="formphone" id="formphone" class="form-control form-control-sm rounded-0" placeholder="Phone Number"/>
                                            </div>
                                        </div>

                                        <div class="col-md-12 mb-3">
                                            <div class="form-group">
                                                <textarea name="message" id="message" class="form-control rounded-0" placeholder="Message"></textarea>
                                            </div>
                                        </div>

                                        <div class="d-grid">
                                            <input type="submit" class="btn btn-outline-secondary" rounded-0/>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Contact Section -->

        <!-- Start Our Pricing Section -->
        <section id="pricing" class="py-3">
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-12">
                        <h4>Our Pricing</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4 mb-3">
                        <div class="card text-center">
                            <div class="card-header bg-dark text-white">
                                <h3>Single Room</h3>
                            </div>
                            <div class="card-body">
                                <h4>$100</h4>
                                <p>Lorem Ipsum is simply text of the printing and typesetting industry.</p>

                                <ul class="list-group">
                                    <li class="list-group-item">
                                        <i class="fas fa-check"></i> Wi-Fi
                                    </li>

                                    <li class="list-group-item">
                                        <i class="fas fa-check"></i> Parking
                                    </li>

                                    <li class="list-group-item">
                                        <i class="fas fa-check"></i> Pool
                                    </li>

                                    <li class="list-group-item">
                                        <i class="fas fa-check"></i> Fitness Center
                                    </li>

                                    <li class="list-group-item">
                                        <i class="fas fa-check"></i> Spa
                                    </li>
                                </ul>

                                <div class="d-grid">
                                    <a href="#" class="btn btn-dark">Check Out</a>
                                </div>
                            </div>
                            <div class="card-foooter">
                                <b>Airport transportation Free</b>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mb-3">
                        <div class="card text-center">
                            <div class="card-header bg-dark text-white">
                                <h3>Deluxe Room</h3>
                            </div>
                            <div class="card-body">
                                <h4>$150</h4>
                                <p>Lorem Ipsum is simply text of the printing and typesetting industry.</p>

                                <ul class="list-group">
                                    <li class="list-group-item">
                                        <i class="fas fa-check"></i> Wi-Fi
                                    </li>

                                    <li class="list-group-item">
                                        <i class="fas fa-check"></i> Parking
                                    </li>

                                    <li class="list-group-item">
                                        <i class="fas fa-check"></i> Pool
                                    </li>

                                    <li class="list-group-item">
                                        <i class="fas fa-check"></i> Fitness Center
                                    </li>

                                    <li class="list-group-item">
                                        <i class="fas fa-check"></i> Spa
                                    </li>
                                </ul>

                                <div class="d-grid">
                                    <a href="#" class="btn btn-dark">Check Out</a>
                                </div>
                            </div>
                            <div class="card-foooter">
                                <b>Airport transportation Free</b>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mb-3">
                        <div class="card text-center">
                            <div class="card-header bg-dark text-white">
                                <h3>Family Room</h3>
                            </div>
                            <div class="card-body">
                                <h4>$200</h4>
                                <p>Lorem Ipsum is simply text of the printing and typesetting industry.</p>

                                <ul class="list-group">
                                    <li class="list-group-item">
                                        <i class="fas fa-check"></i> Wi-Fi
                                    </li>

                                    <li class="list-group-item">
                                        <i class="fas fa-check"></i> Parking
                                    </li>

                                    <li class="list-group-item">
                                        <i class="fas fa-check"></i> Pool
                                    </li>

                                    <li class="list-group-item">
                                        <i class="fas fa-check"></i> Fitness Center
                                    </li>

                                    <li class="list-group-item">
                                        <i class="fas fa-check"></i> Spa
                                    </li>
                                </ul>

                                <div class="d-grid">
                                    <a href="#" class="btn btn-dark">Check Out</a>
                                </div>
                            </div>
                            <div class="card-foooter">
                                <b>Airport transportation Free</b>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Our Pricing Section -->

        <!-- Start Footer Section -->
        <footer class="bg-dark pt-3">
            <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                <li class="nav-item">
                    <a href="#" class="nav-link text-muted px-2">Home</a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link text-muted px-2">Rooms</a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link text-muted px-2">Pricing</a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link text-muted px-2">Contact</a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link text-muted px-2">FAQs</a>
                </li>
            </ul>

            <div class="text-light d-flex justify-content-center">
                <p>&copy; <span id="getyear"></span> Copyright, Inc. All rights reserved.</p>
            </div>
        </footer>
        <!-- End Footer Section -->

        <!-- START CHAT BOX -->
        <button class="chat-btn" onclick="openchatbox()">
            <i class="fas fa-comment-alt"></i>
        </button>

        <div id="mychat" class="chat-popup">
            <div class="chat-container">
                <h4>Chat</h4>

                <div class="messages">
                    <div class="containers admin">
                        <p>Hello! How can i help you ?</p>
                        <span class="time-right">13:00</span>
                    </div>

                    <div class="containers user">
                        <p>Thanks for your reply!</p>
                        <span class="time-left">13:01</span>
                    </div>

                    <div class="containers admin">
                        <p>Do you want to reserve room ?</p>
                        <span class="time-right">13:03</span>
                    </div>

                    <div class="containers user">
                        <p>Sure! let me seet the price for mountain view.</p>
                        <span class="time-left">13:04</span>
                    </div>
                </div>

                <form action="" method="">
                    <textarea name="messsage" id="message" class="message" placeholder="Messsage Here..."></textarea>

                    <button type="submit" class="btns">Send</button>
                    <button type="button" class="btns" onclick="closechatbox()">Close</button>
                </form>
            </div>
        </div>
        <!-- END CHAT BOX -->

        <!-- bootstrap css1 js1 -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
        <!-- jquery js1 -->
        <script src="{{asset('aungchanthar/assets/libs/code.jquery.com_jquery-3.7.0.min.js')}}" type="text/javascript"></script>
        <!-- magnific popup css1 js1 -->
        <script src="{{asset('aungchanthar/assets/libs/magnific-popup-master/dist/jquery.magnific-popup.min.js')}}" type="text/javascript"></script>
        <!-- custom js -->
        <script src="{{asset('aungchanthar/js/app.js')}}" type="text/javascript"></script>
    </body>
</html>

