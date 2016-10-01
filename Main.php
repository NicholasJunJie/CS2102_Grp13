<!-- === BEGIN HEADER === -->

<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <head>
        <!-- Title -->
        <title>Habitat - A Professional Bootstrap Template</title>
        <!-- Meta -->
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <!-- Favicon -->
        <link href="favicon.ico" rel="shortcut icon">
        <!-- Bootstrap Core CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.css" rel="stylesheet">
        <!-- Template CSS -->
        <link rel="stylesheet" href="assets/css/animate.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/font-awesome.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/nexus.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/responsive.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/custom.css" rel="stylesheet">
        <!-- Google Fonts-->
        <link href="http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300" rel="stylesheet" type="text/css">
    </head>
    <body>
         <?php
    $dbconn = pg_connect("host=localhost port=5432 dbname=projectdb user=postgres password=cs2102")
    or die('Could not connect: ' . pg_last_error());
    ?>
        <div id="body-bg">
            <!-- Phone/Email -->
            <div id="pre-header" class="background-gray-lighter">
                <div class="container no-padding">
                    <div class="row hidden-xs">
                        <div class="col-sm-6 padding-vert-5">
                            <strong>Phone:</strong>&nbsp;1-800-123-4567
                        </div>
                        <div class="col-sm-6 text-right padding-vert-5">
                            <strong>Email:</strong>&nbsp;info@joomla51.com
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Phone/Email -->
            <!-- Header -->
            <div id="header">
                <div class="container">
                    <div class="row">
                        <!-- Logo -->
                        <div class="logo">
                            <a href="index.html" title="">
                                <img src="assets/img/logo.png" alt="Logo" />
                            </a>
                        </div>
                        <!-- End Logo -->
                    </div>
                </div>
            </div>
            <!-- End Header -->
            <!-- Top Menu -->
            <div id="hornav" class="bottom-border-shadow">
                <div class="container no-padding border-bottom">
                    <div class="row">
                        <div class="col-md-8 no-padding">
                            <div class="visible-lg">
                                <ul id="hornavmenu" class="nav navbar-nav">
                                    <li>
                                        <a href="index.html" class="fa-home ">Home</a>
                                    </li>
                                    <li>
                                        <span class="fa-gears ">Features</span>
                                        <ul>
                                            <li class="parent">
                                                <span>Typography</span>
                                                <ul>
                                                    <li>
                                                        <a href="features-typo-basic.html">Basic Typography</a>
                                                    </li>
                                                    <li>
                                                        <a href="features-typo-blockquotes.html">Blockquotes</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="parent">
                                                <span>Components</span>
                                                <ul>
                                                    <li>
                                                        <a href="features-labels.html">Labels</a>
                                                    </li>
                                                    <li>
                                                        <a href="features-progress-bars.html">Progress Bars</a>
                                                    </li>
                                                    <li>
                                                        <a href="features-panels.html">Panels</a>
                                                    </li>
                                                    <li>
                                                        <a href="features-pagination.html">Pagination</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="parent">
                                                <span>Icons</span>
                                                <ul>
                                                    <li>
                                                        <a href="features-icons.html">Icons General</a>
                                                    </li>
                                                    <li>
                                                        <a href="features-icons-social.html">Social Icons</a>
                                                    </li>
                                                    <li>
                                                        <a href="features-icons-font-awesome.html">Font Awesome</a>
                                                    </li>
                                                    <li>
                                                        <a href="features-icons-glyphicons.html">Glyphicons</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="features-testimonials.html">Testimonials</a>
                                            </li>
                                            <li>
                                                <a href="features-accordions-tabs.html">Accordions & Tabs</a>
                                            </li>
                                            <li>
                                                <a href="features-buttons.html">Buttons</a>
                                            </li>
                                            <li>
                                                <a href="features-carousels.html">Carousels</a>
                                            </li>
                                            <li>
                                                <a href="features-grid.html">Grid System</a>
                                            </li>
                                            <li>
                                                <a href="features-animate-on-scroll.html">Animate On Scroll</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span class="fa-copy ">Pages</span>
                                        <ul>
                                            <li>
                                                <a href="pages-about-us.html">About Us</a>
                                            </li>
                                            <li>
                                                <a href="pages-services.html">Services</a>
                                            </li>
                                            <li>
                                                <a href="pages-faq.html">F.A.Q.</a>
                                            </li>
                                            <li>
                                                <a href="pages-about-me.html">About Me</a>
                                            </li>
                                            <li>
                                                <a href="pages-full-width.html">Full Width</a>
                                            </li>
                                            <li>
                                                <a href="pages-left-sidebar.html">Left Sidebar</a>
                                            </li>
                                            <li>
                                                <a href="pages-right-sidebar.html">Right Sidebar</a>
                                            </li>
                                            <li>
                                                <a href="pages-login.html">Login</a>
                                            </li>
                                            <li>
                                                <a href="pages-sign-up.html">Sign-Up</a>
                                            </li>
                                            <li>
                                                <a href="pages-404.html">404 Error Page</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span class="fa-th active">Portfolio</span>
                                        <ul>
                                            <li>
                                                <a href="portfolio-2-column.html">2 Column</a>
                                            </li>
                                            <li>
                                                <a href="portfolio-3-column.html">3 Column</a>
                                            </li>
                                            <li>
                                                <a href="portfolio-4-column.html">4 Column</a>
                                            </li>
                                            <li>
                                                <a href="portfolio-6-column.html">6 Column</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span class="fa-font ">Blog</span>
                                        <ul>
                                            <li>
                                                <a href="blog-list.html">Blog</a>
                                            </li>
                                            <li>
                                                <a href="blog-single.html">Blog Single Item</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="contact.html" class="fa-comment ">Contact</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4 no-padding">
                            <ul class="social-icons pull-right">
                                <li class="social-rss">
                                    <a href="#" target="_blank" title="RSS"></a>
                                </li>
                                <li class="social-twitter">
                                    <a href="#" target="_blank" title="Twitter"></a>
                                </li>
                                <li class="social-facebook">
                                    <a href="#" target="_blank" title="Facebook"></a>
                                </li>
                                <li class="social-googleplus">
                                    <a href="#" target="_blank" title="Google+"></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Top Menu -->
            <!-- === END HEADER === -->
            <!-- === BEGIN CONTENT === -->
            <div id="content">
                <div class="container background-white">
                    <div class="row margin-vert-30">
                        <div class="col-md-12">
                            <h2>>Welcome : </h2>
                            <!-- Filter Buttons -->
                            <div class="portfolio-filter-container margin-top-20">
                                <ul class="portfolio-filter">
                                    <li class="portfolio-filter-label label label-primary">
                                        filter by:
                                    </li>
                                    <li>
                                        <a href="#" class="portfolio-selected btn btn-default" data-filter="*">All</a>
                                    </li>
                                    <li>
                                        <a href="#" class="btn btn-default" data-filter=".code">Housekeeping</a>
                                    </li>
                                    <li>
                                        <a href="#" class="btn btn-default" data-filter=".design">Maintence</a>
                                    </li>
                                    <li>
                                        <a href="#" class="btn btn-default" data-filter=".audio">Renovating</a>
                                    </li>
                                    <li>
                                        <a href="#" class="btn btn-default" data-filter=".video">Errands</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- End Filter Buttons -->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 portfolio-group no-padding">
                            <!-- Portfolio Item -->
                            <div class="col-md-4 portfolio-item margin-bottom-40 video">
                                <div>
                                    <a href="#">
                                        <figure>
                                            <img src="assets/img/portfolio/image1.jpg" alt="image1">
                                            <figcaption>
                                                <h3 class="margin-top-20">A Trusted Handyman</h3>
                                                <span>We’ve got the tools, now you’ve got the time. Hire handyman help for home improvements.</span>
                                                <br/>
                                                <button type="button">Click Me!</button>
                                            </figcaption>
                                        </figure>
                                    </a>
                                </div>
                            </div>
                            <!-- End Portfolio Item -->
                            <!-- Portfolio Item -->
                            <div class="col-md-4 portfolio-item margin-bottom-40 design">
                                <div>
                                    <a href="#">
                                        <figure>
                                            <img src="assets/img/portfolio/image2.jpg" alt="image2">
                                            <figcaption>
                                                <h3 class="margin-top-20">A Spotless House</h3>
                                                <span>Want a high quality cleaning? Our skilled cleaners will leave your place sparkling.</span>
                                                <br/>
                                                <button type="button">Click Me!</button>
                                            </figcaption>
                                        </figure>
                                    </a>
                                </div>
                            </div>
                            <!-- End Portfolio Item -->
                            <!-- Portfolio Item -->
                            <div class="col-md-4 portfolio-item margin-bottom-40 audio">
                                <div>
                                    <a href="#">
                                        <figure>
                                            <img src="assets/img/portfolio/image3.jpg" alt="image3">
                                            <figcaption>
                                                <h3 class="margin-top-20">Placerat facer possim</h3>
                                                <span>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</span>
                                                 <br/>
                                                <button type="button">Click Me!</button>
                                            </figcaption>
                                        </figure>
                                    </a>
                                </div>
                            </div>
                            <!-- End Portfolio Item -->
                            <!-- Portfolio Item -->
                            <div class="col-md-4 portfolio-item margin-bottom-40 design">
                                <div>
                                    <a href="#">
                                        <figure>
                                            <img src="assets/img/portfolio/image4.jpg" alt="image4">
                                            <figcaption>
                                                <h3 class="margin-top-20">Nam liber tempor</h3>
                                                <span>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</span>
                                            </figcaption>
                                        </figure>
                                    </a>
                                </div>
                            </div>
                            <!-- End Portfolio Item -->
                            <!-- Portfolio Item -->
                            <div class="col-md-4 portfolio-item margin-bottom-40 design">
                                <div>
                                    <a href="#">
                                        <figure>
                                            <img src="assets/img/portfolio/image5.jpg" alt="image5">
                                            <figcaption>
                                                <h3 class="margin-top-20">Donec non urna</h3>
                                                <span>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</span>
                                            </figcaption>
                                        </figure>
                                    </a>
                                </div>
                            </div>
                            <!-- End Portfolio Item -->
                            <!-- Portfolio Item -->
                            <div class="col-md-4 portfolio-item margin-bottom-40 code">
                                <div>
                                    <a href="#">
                                        <figure>
                                            <img src="assets/img/portfolio/image6.jpg" alt="image6">
                                            <figcaption>
                                                <h3 class="margin-top-20">Nullam consectetur</h3>
                                                <span>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</span>
                                            </figcaption>
                                        </figure>
                                    </a>
                                </div>
                            </div>
                            <!-- End Portfolio Item -->
                            <!-- Portfolio Item -->
                            <div class="col-md-4 portfolio-item margin-bottom-40 design">
                                <div>
                                    <a href="#">
                                        <figure>
                                            <img src="assets/img/portfolio/image7.jpg" alt="image7">
                                            <figcaption>
                                                <h3 class="margin-top-20">Velit esse molestie</h3>
                                                <span>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</span>
                                            </figcaption>
                                        </figure>
                                    </a>
                                </div>
                            </div>
                            <!-- End Portfolio Item -->
                            <!-- Portfolio Item -->
                            <div class="col-md-4 portfolio-item margin-bottom-40 code">
                                <div>
                                    <a href="#">
                                        <figure>
                                            <img src="assets/img/portfolio/image8.jpg" alt="image8">
                                            <figcaption>
                                                <h3 class="margin-top-20">Quam nunc putamus</h3>
                                                <span>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</span>
                                            </figcaption>
                                        </figure>
                                    </a>
                                </div>
                            </div>
                            <!-- End Portfolio Item -->
                            <!-- Portfolio Item -->
                            <div class="col-md-4 portfolio-item margin-bottom-40 video">
                                <div>
                                    <a href="#">
                                        <figure>
                                            <img src="assets/img/portfolio/image9.jpg" alt="image9">
                                            <figcaption>
                                                <h3 class="margin-top-20">Placerat facer possim</h3>
                                                <span>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</span>
                                            </figcaption>
                                        </figure>
                                    </a>
                                </div>
                            </div>
                            <!-- End Portfolio Item -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- === END CONTENT === -->
            <!-- === BEGIN FOOTER === -->
            <div id="base">
                <div class="container bottom-border padding-vert-30">
                    <div class="row">
                        <!-- Disclaimer -->
                        <div class="col-md-4">
                            <h3 class="class margin-bottom-10">Disclaimer</h3>
                            <p>All stock images on this template demo are for presentation purposes only, intended to represent a live site and are not included with the template or in any of the Joomla51 club membership plans.</p>
                            <p>Most of the images used here are available from
                                <a href="http://www.shutterstock.com/" target="_blank">shutterstock.com</a>. Links are provided if you wish to purchase them from their copyright owners.</p>
                        </div>
                        <!-- End Disclaimer -->
                        <!-- Contact Details -->
                        <div class="col-md-4 margin-bottom-20">
                            <h3 class="margin-bottom-10">Contact Details</h3>
                            <p>
                                <span class="fa-phone">Telephone:</span>1-800-123-4567
                                <br>
                                <span class="fa-envelope">Email:</span>
                                <a href="mailto:info@example.com">info@example.com</a>
                                <br>
                                <span class="fa-link">Website:</span>
                                <a href="http://www.example.com">www.example.com</a>
                            </p>
                            <p>The Dunes, Top Road,
                                <br>Strandhill,
                                <br>Co. Sligo,
                                <br>Ireland</p>
                        </div>
                        <!-- End Contact Details -->
                        <!-- Sample Menu -->
                        <div class="col-md-4 margin-bottom-20">
                            <h3 class="margin-bottom-10">Sample Menu</h3>
                            <ul class="menu">
                                <li>
                                    <a class="fa-tasks" href="#">Placerat facer possim</a>
                                </li>
                                <li>
                                    <a class="fa-users" href="#">Quam nunc putamus</a>
                                </li>
                                <li>
                                    <a class="fa-signal" href="#">Velit esse molestie</a>
                                </li>
                                <li>
                                    <a class="fa-coffee" href="#">Nam liber tempor</a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <!-- End Sample Menu -->
                    </div>
                </div>
            </div>
            <!-- Footer -->
            <div id="footer" class="background-grey">
                <div class="container">
                    <div class="row">
                        <!-- Footer Menu -->
                        <div id="footermenu" class="col-md-8">
                            <ul class="list-unstyled list-inline">
                                <li>
                                    <a href="#" target="_blank">Sample Link</a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">Sample Link</a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">Sample Link</a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">Sample Link</a>
                                </li>
                            </ul>
                        </div>
                        <!-- End Footer Menu -->
                        <!-- Copyright -->
                        <div id="copyright" class="col-md-4">
                            <p class="pull-right">(c) 2014 Your Copyright Info</p>
                        </div>
                        <!-- End Copyright -->
                    </div>
                </div>
            </div>
<?php
    session_start();
    $customer = $_SESSION['login_user'];// Starting Session
    //$user_check= $_SESSION['login_user'];
    echo $customer;
    //$query = "SELECT * FROM project.account WHERE email= '$user_check'";
   // $result = pg_query($query) or die('Query failed: ' . pg_last_error()); //MUST ALWAYS EXECUTE QUERY
     //  if(pg_num_rows($result) == 1)
       //     {
             
         //    echo "good"; 
              
           // }
           // else
             //   {

               //   echo "bad";
                //}        

    //if(pg_num_rows($result) == 1)
      //      {
        //        echo "HEY";
             //   $row = pg_fetch_assoc($result)
            // $login_session = $row['first_name'];
             // echo $login_session;  
          //  }
            //else
              //  echo "SAD";
         //     $row = pg_fetch_assoc($result);
           //   $login_session = $row['first_name'];
            //  echo $login_session;  
    ?>
        
            <!-- End Footer -->
            <!-- JS -->
            <script type="text/javascript" src="assets/js/jquery.min.js" type="text/javascript"></script>
            <script type="text/javascript" src="assets/js/bootstrap.min.js" type="text/javascript"></script>
            <script type="text/javascript" src="assets/js/scripts.js"></script>
            <!-- Isotope - Portfolio Sorting -->
            <script type="text/javascript" src="assets/js/jquery.isotope.js" type="text/javascript"></script>
            <!-- Mobile Menu - Slicknav -->
            <script type="text/javascript" src="assets/js/jquery.slicknav.js" type="text/javascript"></script>
            <!-- Animate on Scroll-->
            <script type="text/javascript" src="assets/js/jquery.visible.js" charset="utf-8"></script>
            <!-- Sticky Div -->
            <script type="text/javascript" src="assets/js/jquery.sticky.js" charset="utf-8"></script>
            <!-- Slimbox2-->
            <script type="text/javascript" src="assets/js/slimbox2.js" charset="utf-8"></script>
            <!-- Modernizr -->
            <script src="assets/js/modernizr.custom.js" type="text/javascript"></script>
            <!-- End JS -->
    </body>
</html>
<!-- === END FOOTER === -->