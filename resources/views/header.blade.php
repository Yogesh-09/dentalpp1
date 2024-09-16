<!-- @extends('home') -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dental Plant</title>
    <link rel="stylesheet" href=" {{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <header id="header-2" class="header">
        <div class="wsmobileheader clearfix navBar">
            <!-- mobile logo -->
            <!-- <span class="smalllogo">
                <img src="{{ url('images/logo-dental.png') }}" width="50" alt="mobile-logo" />
            </span> -->
          
        </div> <!-- Closing wsmobileheader div -->
        <div class="hero-widget clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="desktoplogo">
                            <a href="#">
                                <img src="{{ url('images/logo-dental.png') }}" width="100px" alt="header-logo" />
                            </a>
                        </div>
                    </div> <!-- Closing col-md-5 div -->

                    <div class="col-md-3">
                        <div class="row">
                            <div class="header-widget icon-xs">
                                <span class="flaticon-092-clock blue-color"> </span>
                                <p>Emergency Cases</p>
                                <p class="header-widget-phone steelblue-color">
                                    <a href="tel:8989686949">8989686949</a>
                                </p>
                                
                            </div> <!-- Closing header-widget div -->
                        </div> <!-- Closing row div -->
                    </div> <!-- Closing col-md-7 div -->

                    <div class="col-md-3">
                        <div class="header-widget icon-xs">
                            <span class="flaticon-039-emergency-call-1 blue-color"></span>
                            <div class="header-widget-txt">
                                <p class="txt-400">Monday - Sunday: 10am - 7pm</p>
                                <p class="lightgrey-color">Sun: By Appointment</p>
                               
                            </div>
                        </div>
                    </div> <!-- Closing col-md-6 div -->

                </div> <!-- Closing row div -->
            </div> <!-- Closing container div -->
        </div> <!-- Closing hero-widget div -->
        <div class="container">
            <div col-md-12>
            <nav class="clearfix">
    <ul class="menuNav">
        <li class="first"><a href="#">Home</a></li>
        <li class="first"><a href="#">About Us</a></li>
        <li class="first"><a href="#">Course</a></li>
        <li class="first"><a href="#">Service Charges</a></li>
        <li class="first"><a href="#">Treatments</a></li>
        <li class="first"><a href="#">Gallery</a></li>
        <li class="first"><a href="#">Contact Us</a></li>
       <div class="btnfirst">
        <button>welcome to My some</button>
        </div>
    </ul>
</nav>
            </div>
        </div>
    </header>
</body>

</html>