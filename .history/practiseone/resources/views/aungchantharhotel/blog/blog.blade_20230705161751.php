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
       
        <link rel="stylesheet" href="assets/css/main.css" />
    </head>

  
    <body class="is-preload">>
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


        	<!-- Wrapper -->
			<div id="wrapper">

<!-- Header -->
    <header id="header">
        <h1><a href="index.html">Future Imperfect</a></h1>
        <nav class="links">
            <ul>
                <li><a href="#">Lorem</a></li>
                <li><a href="#">Ipsum</a></li>
                <li><a href="#">Feugiat</a></li>
                <li><a href="#">Tempus</a></li>
                <li><a href="#">Adipiscing</a></li>
            </ul>
        </nav>
        <nav class="main">
            <ul>
                <li class="search">
                    <a class="fa-search" href="#search">Search</a>
                    <form id="search" method="get" action="#">
                        <input type="text" name="query" placeholder="Search" />
                    </form>
                </li>
                <li class="menu">
                    <a class="fa-bars" href="#menu">Menu</a>
                </li>
            </ul>
        </nav>
    </header>



<!-- Main -->
    <div id="main">

        <!-- Post -->
            <article class="post">
                <header>
                    <div class="title">
                        <h2><a href="single.html">Magna sed adipiscing</a></h2>
                        <p>Lorem ipsum dolor amet nullam consequat etiam feugiat</p>
                    </div>
                    <div class="meta">
                        <time class="published" datetime="2015-11-01">November 1, 2015</time>
                        <a href="#" class="author"><span class="name">Jane Doe</span><img src="images/avatar.jpg" alt="" /></a>
                    </div>
                </header>
                <a href="single.html" class="image featured"><img src="images/pic01.jpg" alt="" /></a>
                <p>Mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id lorem euismod placerat. Vivamus porttitor magna enim, ac accumsan tortor cursus at. Phasellus sed ultricies mi non congue ullam corper. Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
                <footer>
                    <ul class="actions">
                        <li><a href="single.html" class="button large">Continue Reading</a></li>
                    </ul>
                    <ul class="stats">
                        <li><a href="#">General</a></li>
                        <li><a href="#" class="icon solid fa-heart">28</a></li>
                        <li><a href="#" class="icon solid fa-comment">128</a></li>
                    </ul>
                </footer>
            </article>

        <!-- Post -->
            <article class="post">
                <header>
                    <div class="title">
                        <h2><a href="single.html">Ultricies sed magna euismod enim vitae gravida</a></h2>
                        <p>Lorem ipsum dolor amet nullam consequat etiam feugiat</p>
                    </div>
                    <div class="meta">
                        <time class="published" datetime="2015-10-25">October 25, 2015</time>
                        <a href="#" class="author"><span class="name">Jane Doe</span><img src="images/avatar.jpg" alt="" /></a>
                    </div>
                </header>
                <a href="single.html" class="image featured"><img src="images/pic02.jpg" alt="" /></a>
                <p>Mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id lorem euismod placerat. Vivamus porttitor magna enim, ac accumsan tortor cursus at. Phasellus sed ultricies mi non congue ullam corper.</p>
                <footer>
                    <ul class="actions">
                        <li><a href="single.html" class="button large">Continue Reading</a></li>
                    </ul>
                    <ul class="stats">
                        <li><a href="#">General</a></li>
                        <li><a href="#" class="icon solid fa-heart">28</a></li>
                        <li><a href="#" class="icon solid fa-comment">128</a></li>
                    </ul>
                </footer>
            </article>

        <!-- Post -->
            <article class="post">
                <header>
                    <div class="title">
                        <h2><a href="single.html">Euismod et accumsan</a></h2>
                        <p>Lorem ipsum dolor amet nullam consequat etiam feugiat</p>
                    </div>
                    <div class="meta">
                        <time class="published" datetime="2015-10-22">October 22, 2015</time>
                        <a href="#" class="author"><span class="name">Jane Doe</span><img src="images/avatar.jpg" alt="" /></a>
                    </div>
                </header>
                <a href="single.html" class="image featured"><img src="images/pic03.jpg" alt="" /></a>
                <p>Mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id lorem euismod placerat. Vivamus porttitor magna enim, ac accumsan tortor cursus at. Phasellus sed ultricies mi non congue ullam corper. Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla. Cras vehicula tellus eu ligula viverra, ac fringilla turpis suscipit. Quisque vestibulum rhoncus ligula.</p>
                <footer>
                    <ul class="actions">
                        <li><a href="single.html" class="button large">Continue Reading</a></li>
                    </ul>
                    <ul class="stats">
                        <li><a href="#">General</a></li>
                        <li><a href="#" class="icon solid fa-heart">28</a></li>
                        <li><a href="#" class="icon solid fa-comment">128</a></li>
                    </ul>
                </footer>
            </article>

        <!-- Post -->
        <!--
            <article class="post">
                <header>
                    <div class="title">
                        <h2><a href="#">Elements</a></h2>
                        <p>Lorem ipsum dolor amet nullam consequat etiam feugiat</p>
                    </div>
                    <div class="meta">
                        <time class="published" datetime="2015-10-18">October 18, 2015</time>
                        <a href="#" class="author"><span class="name">Jane Doe</span><img src="images/avatar.jpg" alt="" /></a>
                    </div>
                </header>

                <section>
                    <h3>Text</h3>
                    <p>This is <b>bold</b> and this is <strong>strong</strong>. This is <i>italic</i> and this is <em>emphasized</em>.
                    This is <sup>superscript</sup> text and this is <sub>subscript</sub> text.
                    This is <u>underlined</u> and this is code: <code>for (;;) { ... }</code>. Finally, <a href="#">this is a link</a>.</p>
                    <hr />
                    <p>Nunc lacinia ante nunc ac lobortis. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus ornare mi ut ante amet placerat aliquet. Volutpat eu sed ante lacinia sapien lorem accumsan varius montes viverra nibh in adipiscing blandit tempus accumsan.</p>
                    <hr />
                    <h2>Heading Level 2</h2>
                    <h3>Heading Level 3</h3>
                    <h4>Heading Level 4</h4>
                    <hr />
                    <h4>Blockquote</h4>
                    <blockquote>Fringilla nisl. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan faucibus. Vestibulum ante ipsum primis in faucibus lorem ipsum dolor sit amet nullam adipiscing eu felis.</blockquote>
                    <h4>Preformatted</h4>
                    <pre><code>i = 0;

while (!deck.isInOrder()) {
print 'Iteration ' + i;
deck.shuffle();
i++;
}

print 'It took ' + i + ' iterations to sort the deck.';</code></pre>
                </section>

                <section>
                    <h3>Lists</h3>
                    <div class="row">
                        <div class="col-6 col-12-medium">
                            <h4>Unordered</h4>
                            <ul>
                                <li>Dolor pulvinar etiam.</li>
                                <li>Sagittis adipiscing.</li>
                                <li>Felis enim feugiat.</li>
                            </ul>
                            <h4>Alternate</h4>
                            <ul class="alt">
                                <li>Dolor pulvinar etiam.</li>
                                <li>Sagittis adipiscing.</li>
                                <li>Felis enim feugiat.</li>
                            </ul>
                        </div>
                        <div class="col-6 col-12-medium">
                            <h4>Ordered</h4>
                            <ol>
                                <li>Dolor pulvinar etiam.</li>
                                <li>Etiam vel felis viverra.</li>
                                <li>Felis enim feugiat.</li>
                                <li>Dolor pulvinar etiam.</li>
                                <li>Etiam vel felis lorem.</li>
                                <li>Felis enim et feugiat.</li>
                            </ol>
                            <h4>Icons</h4>
                            <ul class="icons">
                                <li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
                                <li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
                                <li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
                                <li><a href="#" class="icon brands fa-github"><span class="label">Github</span></a></li>
                            </ul>
                        </div>
                    </div>
                    <h3>Actions</h3>
                    <div class="row">
                        <div class="col-6 col-12-medium">
                            <ul class="actions">
                                <li><a href="#" class="button">Default</a></li>
                                <li><a href="#" class="button">Default</a></li>
                                <li><a href="#" class="button">Default</a></li>
                            </ul>
                            <ul class="actions small">
                                <li><a href="#" class="button small">Small</a></li>
                                <li><a href="#" class="button small">Small</a></li>
                                <li><a href="#" class="button small">Small</a></li>
                            </ul>
                            <ul class="actions stacked">
                                <li><a href="#" class="button">Default</a></li>
                                <li><a href="#" class="button">Default</a></li>
                                <li><a href="#" class="button">Default</a></li>
                            </ul>
                            <ul class="actions stacked">
                                <li><a href="#" class="button small">Small</a></li>
                                <li><a href="#" class="button small">Small</a></li>
                                <li><a href="#" class="button small">Small</a></li>
                            </ul>
                        </div>
                        <div class="col-6 col-12-medium">
                            <ul class="actions stacked">
                                <li><a href="#" class="button fit">Default</a></li>
                                <li><a href="#" class="button fit">Default</a></li>
                            </ul>
                            <ul class="actions stacked">
                                <li><a href="#" class="button small fit">Small</a></li>
                                <li><a href="#" class="button small fit">Small</a></li>
                            </ul>
                        </div>
                    </div>
                </section>

                <section>
                    <h3>Table</h3>
                    <h4>Default</h4>
                    <div class="table-wrapper">
                        <table>
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Item One</td>
                                    <td>Ante turpis integer aliquet porttitor.</td>
                                    <td>29.99</td>
                                </tr>
                                <tr>
                                    <td>Item Two</td>
                                    <td>Vis ac commodo adipiscing arcu aliquet.</td>
                                    <td>19.99</td>
                                </tr>
                                <tr>
                                    <td>Item Three</td>
                                    <td> Morbi faucibus arcu accumsan lorem.</td>
                                    <td>29.99</td>
                                </tr>
                                <tr>
                                    <td>Item Four</td>
                                    <td>Vitae integer tempus condimentum.</td>
                                    <td>19.99</td>
                                </tr>
                                <tr>
                                    <td>Item Five</td>
                                    <td>Ante turpis integer aliquet porttitor.</td>
                                    <td>29.99</td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="2"></td>
                                    <td>100.00</td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>

                    <h4>Alternate</h4>
                    <div class="table-wrapper">
                        <table class="alt">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Item One</td>
                                    <td>Ante turpis integer aliquet porttitor.</td>
                                    <td>29.99</td>
                                </tr>
                                <tr>
                                    <td>Item Two</td>
                                    <td>Vis ac commodo adipiscing arcu aliquet.</td>
                                    <td>19.99</td>
                                </tr>
                                <tr>
                                    <td>Item Three</td>
                                    <td> Morbi faucibus arcu accumsan lorem.</td>
                                    <td>29.99</td>
                                </tr>
                                <tr>
                                    <td>Item Four</td>
                                    <td>Vitae integer tempus condimentum.</td>
                                    <td>19.99</td>
                                </tr>
                                <tr>
                                    <td>Item Five</td>
                                    <td>Ante turpis integer aliquet porttitor.</td>
                                    <td>29.99</td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="2"></td>
                                    <td>100.00</td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </section>

                <section>
                    <h3>Buttons</h3>
                    <ul class="actions">
                        <li><a href="#" class="button large">Large</a></li>
                        <li><a href="#" class="button">Default</a></li>
                        <li><a href="#" class="button small">Small</a></li>
                    </ul>
                    <ul class="actions fit">
                        <li><a href="#" class="button fit">Fit</a></li>
                        <li><a href="#" class="button fit">Fit</a></li>
                        <li><a href="#" class="button fit">Fit</a></li>
                    </ul>
                    <ul class="actions fit small">
                        <li><a href="#" class="button fit small">Fit + Small</a></li>
                        <li><a href="#" class="button fit small">Fit + Small</a></li>
                        <li><a href="#" class="button fit small">Fit + Small</a></li>
                    </ul>
                    <ul class="actions">
                        <li><a href="#" class="button icon solid fa-download">Icon</a></li>
                        <li><a href="#" class="button icon solid fa-upload">Icon</a></li>
                        <li><a href="#" class="button icon solid fa-save">Icon</a></li>
                    </ul>
                    <ul class="actions">
                        <li><span class="button disabled">Disabled</span></li>
                        <li><span class="button disabled icon solid fa-download">Disabled</span></li>
                    </ul>
                </section>

                <section>
                    <h3>Form</h3>
                    <form method="post" action="#">
                        <div class="row gtr-uniform">
                            <div class="col-6 col-12-xsmall">
                                <input type="text" name="demo-name" id="demo-name" value="" placeholder="Name" />
                            </div>
                            <div class="col-6 col-12-xsmall">
                                <input type="email" name="demo-email" id="demo-email" value="" placeholder="Email" />
                            </div>
                            <div class="col-12">
                                <select name="demo-category" id="demo-category">
                                    <option value="">- Category -</option>
                                    <option value="1">Manufacturing</option>
                                    <option value="1">Shipping</option>
                                    <option value="1">Administration</option>
                                    <option value="1">Human Resources</option>
                                </select>
                            </div>
                            <div class="col-4 col-12-small">
                                <input type="radio" id="demo-priority-low" name="demo-priority" checked>
                                <label for="demo-priority-low">Low</label>
                            </div>
                            <div class="col-4 col-12-small">
                                <input type="radio" id="demo-priority-normal" name="demo-priority">
                                <label for="demo-priority-normal">Normal</label>
                            </div>
                            <div class="col-4 col-12-small">
                                <input type="radio" id="demo-priority-high" name="demo-priority">
                                <label for="demo-priority-high">High</label>
                            </div>
                            <div class="col-6 col-12-small">
                                <input type="checkbox" id="demo-copy" name="demo-copy">
                                <label for="demo-copy">Email me a copy</label>
                            </div>
                            <div class="col-6 col-12-small">
                                <input type="checkbox" id="demo-human" name="demo-human" checked>
                                <label for="demo-human">Not a robot</label>
                            </div>
                            <div class="col-12">
                                <textarea name="demo-message" id="demo-message" placeholder="Enter your message" rows="6"></textarea>
                            </div>
                            <div class="col-12">
                                <ul class="actions">
                                    <li><input type="submit" value="Send Message" /></li>
                                    <li><input type="reset" value="Reset" /></li>
                                </ul>
                            </div>
                        </div>
                    </form>
                </section>

                <section>
                    <h3>Image</h3>
                    <h4>Fit</h4>
                    <div class="box alt">
                        <div class="row gtr-uniform">
                            <div class="col-12"><span class="image fit"><img src="images/pic02.jpg" alt="" /></span></div>
                            <div class="col-4"><span class="image fit"><img src="images/pic04.jpg" alt="" /></span></div>
                            <div class="col-4"><span class="image fit"><img src="images/pic05.jpg" alt="" /></span></div>
                            <div class="col-4"><span class="image fit"><img src="images/pic06.jpg" alt="" /></span></div>
                            <div class="col-4"><span class="image fit"><img src="images/pic06.jpg" alt="" /></span></div>
                            <div class="col-4"><span class="image fit"><img src="images/pic04.jpg" alt="" /></span></div>
                            <div class="col-4"><span class="image fit"><img src="images/pic05.jpg" alt="" /></span></div>
                            <div class="col-4"><span class="image fit"><img src="images/pic05.jpg" alt="" /></span></div>
                            <div class="col-4"><span class="image fit"><img src="images/pic06.jpg" alt="" /></span></div>
                            <div class="col-4"><span class="image fit"><img src="images/pic04.jpg" alt="" /></span></div>
                        </div>
                    </div>
                    <h4>Left &amp; Right</h4>
                    <p><span class="image left"><img src="images/pic07.jpg" alt="" /></span>Fringilla nisl. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent.</p>
                    <p><span class="image right"><img src="images/pic04.jpg" alt="" /></span>Fringilla nisl. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent.</p>
                </section>

            </article>
        -->

        <!-- Pagination -->
            <ul class="actions pagination">
                <li><a href="" class="disabled button large previous">Previous Page</a></li>
                <li><a href="#" class="button large next">Next Page</a></li>
            </ul>

    </div>

<!-- Sidebar -->
    <section id="sidebar">

        <!-- Intro -->
            <section id="intro">
                <a href="#" class="logo"><img src="images/logo.jpg" alt="" /></a>
                <header>
                    <h2>Future Imperfect</h2>
                    <p>Another fine responsive site template by <a href="http://html5up.net">HTML5 UP</a></p>
                </header>
            </section>

        <!-- Mini Posts -->
            <section>
                <div class="mini-posts">

                    <!-- Mini Post -->
                        <article class="mini-post">
                            <header>
                                <h3><a href="single.html">Vitae sed condimentum</a></h3>
                                <time class="published" datetime="2015-10-20">October 20, 2015</time>
                                <a href="#" class="author"><img src="images/avatar.jpg" alt="" /></a>
                            </header>
                            <a href="single.html" class="image"><img src="images/pic04.jpg" alt="" /></a>
                        </article>

                    <!-- Mini Post -->
                        <article class="mini-post">
                            <header>
                                <h3><a href="single.html">Rutrum neque accumsan</a></h3>
                                <time class="published" datetime="2015-10-19">October 19, 2015</time>
                                <a href="#" class="author"><img src="images/avatar.jpg" alt="" /></a>
                            </header>
                            <a href="single.html" class="image"><img src="images/pic05.jpg" alt="" /></a>
                        </article>

                    <!-- Mini Post -->
                        <article class="mini-post">
                            <header>
                                <h3><a href="single.html">Odio congue mattis</a></h3>
                                <time class="published" datetime="2015-10-18">October 18, 2015</time>
                                <a href="#" class="author"><img src="images/avatar.jpg" alt="" /></a>
                            </header>
                            <a href="single.html" class="image"><img src="images/pic06.jpg" alt="" /></a>
                        </article>

                    <!-- Mini Post -->
                        <article class="mini-post">
                            <header>
                                <h3><a href="single.html">Enim nisl veroeros</a></h3>
                                <time class="published" datetime="2015-10-17">October 17, 2015</time>
                                <a href="#" class="author"><img src="images/avatar.jpg" alt="" /></a>
                            </header>
                            <a href="single.html" class="image"><img src="images/pic07.jpg" alt="" /></a>
                        </article>

                </div>
            </section>

        <!-- Posts List -->
            <section>
                <ul class="posts">
                    <li>
                        <article>
                            <header>
                                <h3><a href="single.html">Lorem ipsum fermentum ut nisl vitae</a></h3>
                                <time class="published" datetime="2015-10-20">October 20, 2015</time>
                            </header>
                            <a href="single.html" class="image"><img src="images/pic08.jpg" alt="" /></a>
                        </article>
                    </li>
                    <li>
                        <article>
                            <header>
                                <h3><a href="single.html">Convallis maximus nisl mattis nunc id lorem</a></h3>
                                <time class="published" datetime="2015-10-15">October 15, 2015</time>
                            </header>
                            <a href="single.html" class="image"><img src="images/pic09.jpg" alt="" /></a>
                        </article>
                    </li>
                    <li>
                        <article>
                            <header>
                                <h3><a href="single.html">Euismod amet placerat vivamus porttitor</a></h3>
                                <time class="published" datetime="2015-10-10">October 10, 2015</time>
                            </header>
                            <a href="single.html" class="image"><img src="images/pic10.jpg" alt="" /></a>
                        </article>
                    </li>
                    <li>
                        <article>
                            <header>
                                <h3><a href="single.html">Magna enim accumsan tortor cursus ultricies</a></h3>
                                <time class="published" datetime="2015-10-08">October 8, 2015</time>
                            </header>
                            <a href="single.html" class="image"><img src="images/pic11.jpg" alt="" /></a>
                        </article>
                    </li>
                    <li>
                        <article>
                            <header>
                                <h3><a href="single.html">Congue ullam corper lorem ipsum dolor</a></h3>
                                <time class="published" datetime="2015-10-06">October 7, 2015</time>
                            </header>
                            <a href="single.html" class="image"><img src="images/pic12.jpg" alt="" /></a>
                        </article>
                    </li>
                </ul>
            </section>

        <!-- About -->
            <section class="blurb">
                <h2>About</h2>
                <p>Mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id lorem euismod amet placerat. Vivamus porttitor magna enim, ac accumsan tortor cursus at phasellus sed ultricies.</p>
                <ul class="actions">
                    <li><a href="#" class="button">Learn More</a></li>
                </ul>
            </section>

        <!-- Footer -->
            <section id="footer">
                <ul class="icons">
                    <li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
                    <li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
                    <li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
                    <li><a href="#" class="icon solid fa-rss"><span class="label">RSS</span></a></li>
                    <li><a href="#" class="icon solid fa-envelope"><span class="label">Email</span></a></li>
                </ul>
                <p class="copyright">&copy; Untitled. Design: <a href="http://html5up.net">HTML5 UP</a>. Images: <a href="http://unsplash.com">Unsplash</a>.</p>
            </section>

    </section>

</div>

<!-- Scripts -->
<script src="{{asset('aungchanthar/assets/js/jquery.min.js')}}"></script>
<script src="{{asset('aungchanthar/assets/js/browser.min.js')}}"></script>
<script src="{{asset('aungchanthar/assets/js/breakpoints.min.js')}}"></script>
<script src="{{asset('aungchanthar/assets/js/util.js')}}"></script>
<script src="{{asset('aungchanthar/assets/js/main.js')}}"></script>
        
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

