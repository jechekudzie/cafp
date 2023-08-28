<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Centre For Agriculture and Food Policy</title>

    <!-- Bootstrap -->
  <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">


<!-- Latest compiled and minified CSS -->
   {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css"
          integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">--}}
    <!-- Font-awesome -->
    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">

    <!-- Bootsnav -->
    <link href="{{asset('css/bootsnav.css')}}" rel="stylesheet">

    <!-- Cubeportfolio -->
    <link href="{{asset('css/cubeportfolio.min.css')}}" rel="stylesheet">

    <!-- OWL-Carousel -->
    <link href="{{asset('css/owl.carousel.css')}}" rel="stylesheet">
    <link href="{{asset('css/owl.transitions.css')}}" rel="stylesheet">

    <!-- Slider -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/settings.css')}}">

    <!-- Custom Style Sheet -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">


    <link rel="shortcut icon" href="{{asset('tests/logo 2-01.jpg')}}">


    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="overflow_hidden">

<!--  Header Start  -->
<header id="header-top_2">
    <div id="header-top">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-12 header_top_text">
                    <p>Centre For Agriculture and Food Policy</p>
                </div>

                <div class="col-md-8 col-sm-8 col-xs-12 text-right">

                    <ul class="top_socials">
                        <li><a href="javascript:void(0)">Covid 19</a>
                        </li>
                        {{--<li><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="javascript:void(0)"><i class="fa fa-youtube"></i></a>
                        </li>
                        <li><a href="javascript:void(0)"><i class="fa fa-instagram"></i></a>
                        </li>
                        <li><a href="javascript:void(0)"><i class="fa fa-pinterest"></i></a>
                        </li>--}}
                    </ul>

                </div>

            </div>
        </div>
    </div>
    <nav class="navbar navbar-default no-background {{--navbar-sticky--}} bootsnav">
        <div class="container">
            <!-- Start Header Navigation -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="{{url('/')}}">
                    <img src="{{asset('tests/logo 2-01.jpg')}}"
                         class="img-responsive logo"
                         alt="">
                </a>
            </div>
            <!-- End Header Navigation -->
            <div class="collapse navbar-collapse nav_2 clearfix" id="navbar-menu">
                <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                    <li style="font-size: 16px;" class="">
                        <a style="font-size: 16px;" href="{{url('/')}}">Home</a>
                    </li>

                    <li style="font-size: 16px;" class="dropdown">
                        <a style="font-size: 16px;" href="#" class="dropdown-toggle" data-toggle="dropdown">About
                            CAFP</a>
                        <ul class="dropdown-menu">
                            <li><a href="{{url('/establishment')}}">Establishment & Mandate</a></li>
                            <li class="dropdown">
                                <a href="javascript:void(0)" class="dropdown-toggle"
                                   data-toggle="dropdown">Our Strategy</a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{url('/vision_mission')}}">Vision, Mission
                                            and
                                            Objectives</a>
                                    </li>
                                    <li><a href="{{url('/cafp_approach')}}">CAFP Approach</a></li>
                                    <li><a href="{{url('/framework')}}">CAFP MEL Framework</a></li>

                                </ul>
                            </li>
                            <li><a href="{{url('/governance')}}">Governance</a></li>
                            <li><a href="{{url('/partnerships')}}">Partnerships and MOUs</a></li>
                            {{-- <li><a href="{{url('/team')}}">Our Team</a></li>--}}

                            <li class="dropdown">
                                <a href="javascript:void(0)" class="dropdown-toggle"
                                   data-toggle="dropdown">Our Team</a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{url('/trustees')}}">Board Of Trustees</a>
                                    </li>
                                    <li><a href="{{url('/staff')}}">CAFP Staff and Affiliates</a></li>
                                </ul>
                            </li>
                            <li><a href="{{url('/funding')}}">Funding</a></li>
                        </ul>
                    </li>


                    <li style="font-size: 16px;" class="dropdown">
                        <a style="font-size: 16px;" href="#" class="dropdown-toggle"
                           data-toggle="dropdown">Research & Policy Development</a>
                        <ul class="dropdown-menu">
                            <li><a href="{{url('/thematic_areas')}}">Thematic Areas</a>
                            </li>

                            <li class="dropdown">
                                <a href="{{url('/capacity_development')}}">Capacity Development</a>

                            </li>

                            {{-- <li><a href="{{url('/projects')}}">Projects & Programs</a></li>--}}
                            {{-- <li><a href="{{url('/data')}}">Data resources</a></li>--}}
                        </ul>
                    </li>

                    <li style="font-size: 16px;">
                        <a style="font-size: 16px;" href="{{url('/publications/all')}}">Publications</a>
                    </li>

                    <li style="font-size: 16px;">
                        <a style="font-size: 16px;" href="{{url('/events/all')}}">Events</a>
                    </li>

                    {{--<li style="font-size: 16px;" class="dropdown">
                        <a style="font-size: 16px;" href="#" class="dropdown-toggle"
                           data-toggle="dropdown">Outreach</a>
                        <ul class="dropdown-menu">
                            <li><a href="{{url('/events/2')}}">Events</a>
                            </li>
                           --}}{{-- <li><a href="{{url('#')}}">Blogs</a></li>
                            <li><a href="{{url('#')}}">Presentations</a></li>--}}{{--
                           --}}{{-- <li><a href="{{url('#')}}">Newsletters</a></li>--}}{{--
                           --}}{{-- <li><a href="{{url('#')}}">Gallery</a></li>--}}{{--
                        </ul>
                    </li>--}}
                    {{--<li style="font-size: 16px;" class="dropdown">
                        <a style="font-size: 16px;" href="#" class="dropdown-toggle" data-toggle="dropdown">Get
                            Involved</a>
                        <ul class="dropdown-menu">
                            <li><a href="{{url('#')}}">Fund research</a>
                            </li>
                            <li><a href="{{url('#')}}">Make a donation</a>
                            </li>
                            <li><a href="{{url('#')}}">Sponsor event</a></li>
                            <li><a href="{{url('#')}}">Become Associate</a></li>
                        </ul>
                    </li>--}}

                    <li style="font-size: 16px;"><a style="font-size: 16px;" href="{{url('/contact')}}">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<!--  Header End  -->
<div class="container">
    @yield('content')
</div>
<!-- Footer -->
<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="footer_detail">
                    <a href="javascript:void(0)"><img src="{{asset('logo/logo-02.jpg')}}" alt="image">
                    </a>
                    <p>The Centre for Agriculture and Food Policy (CAFP) is a registered
                        Trust governed by a Board
                        of Trustees drawn from the public and private sector. CAFP evolved from a structured
                        Technical Assistance Policy facility of the Livelihood Food Security Programme (LFSP)
                        “Strengthening Evidence and Analysis to Influence Policy and Private Sector Investments”, a
                        collaboration and partnership between the Food and Agriculture Organisation of the United
                        Nations, Indaba Agricultural Policy Research Institute and the Ministry of Lands,
                        Agriculture, Fisheries Water, and Rural Development (MLAFWRD) with funding from the
                        Foreign, Commonwealth & Development Office (FCDO).</p>
                    <div class="adres">
                        <p><i style="color: white;" class="fa fa-phone" aria-hidden="true"></i>
                        </p>
                        <p>
                            <span>+263 784 995 187 </span>
                            <span>+263 782 040 979 </span>

                        </p>
                    </div>
                    <div class="adres">
                        <p><i style="color: white;" class="fa fa-envelope-open-o" aria-hidden="true"></i>
                        </p>
                        <p>
                            <a href="javascript:void(0)"><span>info@cafp.org.zw</span></a>

                        </p>
                    </div>
                    <div class="adres">
                        <p><i style="color: white;" class="fa fa-globe" aria-hidden="true"></i>
                        </p>
                        <p>
                            <a href="javascript:void(0)"><span>www.cafp.org.zw</span></a>

                        </p>
                    </div>
                    <div class="adres">
                        <p><i style="color: white;" class="fa fa-map-marker" aria-hidden="true"></i>
                        </p>
                        <p>
                            <span>ZB Centre 2nd floor,</span>
                            <span>Kwame Nkrumah Avenue, Central Business District,</span>
                            <span>Harare, Zimbabwe</span>

                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-12">
                <div class="footer_news">
                    <h3>Quick Links</h3>
                    <ul class="footer-links">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Establishment and mandate</a></li>
                        <li><a href="#">Our strategy</a></li>
                        <li><a href="#">Board of Trustees</a></li>
                        <li><a href="#">Governance</a></li>
                        <li><a href="#">CAFP staff</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-12">
                <div class="footer_news">
                    <h3>Partners</h3>
                    <div style="background-color: white" id="sync1" class="owl-carousel">
                        @foreach(\App\Models\Partner::all() as $partner)
                            <a href="{{$partner->url}}" target="_blank">
                                <div class="item"><img style="width: 90px;" src="{{asset($partner->path)}}" alt="image"></div>
                            </a>
                        @endforeach

                    </div>
                    <div style="background-color: white" id="sync2" class="owl-carousel">
                        @foreach(\App\Models\Partner::all() as $partner)
                            <a style="margin: 20px;" href="{{$partner->url}}" target="_blank">
                                <div class="item"><img style="width: 90px; margin: 20px;" src="{{asset($partner->path)}}" alt="image"></div>
                            </a>
                        @endforeach
                    </div> 
                </div>
            </div>

        </div>
        <!-- Back To Top -->
        <a href="#top" class="scroll"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
        <!-- /#Back To Top -->
        <div class="footer_bottom">
            <div class="row">
                <div class="col-md-7">
                    <div class="copyright">
                        <p>Copyright {{date('Y')}}. All Rights Reserved.
                            Designed
                            by
                            <a href="https://leadingdigital.africa"> Leading Digital.</a>
                        </p>
                    </div>
                </div>
                <div class="col-md-5">
                    <ul class="socialicons">
                        <li><a target="_blank" href="https://www.facebook.com/CAFP2021"><i class="fa fa-facebook"
                                                                                           aria-hidden="true"></i></a>
                        </li>
                        <li><a target="_blank" href="https://twitter.com/CenterforAgric1?s=09"><i class="fa fa-twitter"
                                                                                                  aria-hidden="true"></i></a>
                        </li>
                        <li><a target="_blank"
                               href="https://www.linkedin.com/company/center-for-agriculture-and-food-policy"><i
                                    class="fa fa-linkedin" aria-hidden="true"></i></a>
                        </li>
                        <li><a target="_blank" href="https://www.instagram.com/cafp_2021zim/"><i class="fa fa-instagram"
                                                                                                 aria-hidden="true"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- /#Footer -->

<script src="{{asset('js/jquery.2.2.3.min.js')}}"></script>
{{--<script src="{{asset('js/bootstrap.min.js')}}"></script>--}}
<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js"
        integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd"
        crossorigin="anonymous"></script>

<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/bootsnav.js')}}"></script>
<script src="{{asset('js/jquery.cubeportfolio.min.js')}}"></script>
<script src="{{asset('js/jquery-countTo.js')}}"></script>
<script src="{{asset('js/jquery.appear.js')}}"></script>
<script src="{{asset('js/video.js')}}"></script>
<script src="{{asset('js/jquery.typewriter.js')}}"></script>
<script src="{{asset('js/.elevateZoom-3.0.8.min.js')}}"></script>
<script type="text/javascript"
        src="http://maps.googleapis.com/maps/api/js?key=AIzaSyAOBKD6V47-g_3opmidcmFapb3kSNAR70U"></script>
<script src="{{asset('js/gmaps.js')}}"></script>
<script src="{{asset('js/contact.js')}}"></script>
<script src="{{asset('js/themepunch/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{asset('js/themepunch/jquery.themepunch.revolution.min.js')}}"></script>
<script src="{{asset('js/themepunch/revolution.extension.layeranimation.min.js')}}"></script>
<script src="{{asset('js/themepunch/revolution.extension.navigation.min.js')}}"></script>
<script src="{{asset('js/themepunch/revolution.extension.parallax.min.js')}}"></script>
<script src="{{asset('js/themepunch/revolution.extension.slideanims.min.js')}}"></script>
<script src="{{asset('js/themepunch/revolution.extension.video.min.js')}}"></script>
<script src="{{asset('js/functions.js')}}"></script>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API = Tawk_API || {}, Tawk_LoadStart = new Date();
    (function () {
        var s1 = document.createElement("script"), s0 = document.getElementsByTagName("script")[0];
        s1.async = true;
        s1.src = 'https://embed.tawk.to/6169b44386aee40a5736c96c/1fi2egaha';
        s1.charset = 'UTF-8';
        s1.setAttribute('crossorigin', '*');
        s0.parentNode.insertBefore(s1, s0);
    })();
</script>
<!--End of Tawk.to Script-->
</body>

</html>
