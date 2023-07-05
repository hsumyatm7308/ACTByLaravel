@extends('aungchantharhotel.layout')

@section('title', 'Blog')


<!DOCTYPE html>
<html>
    <head>
        <title></title>
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

       
        </header>
        <!-- End Header Section -->

        
        <!-- bootstrap css1 js1 -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
        <!-- jquery js1 -->
        <script src="{{asset('blog/aungchanthar/assets/libs/code.jquery.com_jquery-3.7.0.min.js')}}" type="text/javascript"></script>
        <!-- magnific popup css1 js1 -->
        <script src="{{asset('blog/aungchanthar/assets/libs/magnific-popup-master/dist/jquery.magnific-popup.min.js')}}" type="text/javascript"></script>
        <!-- custom js -->
        <script src="{{asset('blog/aungchanthar/js/app.js')}}" type="text/javascript"></script>
    </body>
</html>

