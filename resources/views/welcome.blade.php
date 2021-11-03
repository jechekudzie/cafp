@extends('layouts.site')

@section('content')

    <!--  Banner Start  -->
    <section class="rev_slider_wrapper">
        <div id="rev_slider_2" class="rev_slider" data-version="5.0">
            <ul>
                <!-- SLIDE  -->
                {{-- <li data-transition="fade">

                     <img src="{{asset('banners/home-01.jpg')}}" alt="" data-bgposition="center center" data-bgfit="cover"
                          class="rev-slidebg">
                     <div class="tp-caption tp-resizeme" data-x="['left','left','left','left']"
                          data-hoffset="['15','15','30','15']" data-y="['290','240','200','200']"
                          data-voffset="['0','0','0','0']" data-responsive_offset="on"
                          data-visibility="['on','on','on','on']" data-transform_idle="o:1;"
                          data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;"
                          data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                          data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="800">

                     </div>

                     <div class="tp-caption tp-resizeme" data-x="['left','left','left','left']"
                          data-hoffset="['15','15','30','15']" data-y="['340','200','170','170']"
                          data-voffset="['0','0','0','0']" data-responsive_offset="on"
                          data-visibility="['on','on','on','off']" data-transform_idle="o:1;"
                          data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;"
                          data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                          data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="800">

                     </div>

                     <div class="tp-caption tp-resizeme" data-x="['left','left','left','left']"
                          data-hoffset="['15','15','30','15']" data-y="['400','290','230','230']"
                          data-voffset="['0','0','0','0']" data-responsive_offset="on"
                          data-visibility="['on','on','on','off']" data-transform_idle="o:1;"
                          data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;"
                          data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                          data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="800">


                     </div>

                     <div class="tp-caption tp-resizeme" data-x="['left','left','left','left']"
                          data-hoffset="['15','15','30','15']" data-y="['480','350','290','240']"
                          data-voffset="['0','0','0','0']" data-responsive_offset="on"
                          data-visibility="['on','on','on','on']" data-transform_idle="o:1;"
                          data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;"
                          data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                          data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="800">
                         <a href="javascript:void(0)" class="btn_dark">Read More</a>

                     </div>
                 </li>
 --}}
                <li data-transition="slideremoveleft">
                    <img src="{{asset('banners/home-01.jpg')}}" alt="" data-bgposition="center center"
                         data-bgfit="cover"
                         class="rev-slidebg">
                    <div class="tp-caption tp-resizeme" data-x="['center','center','center','center']"
                         data-hoffset="['15','15','30','15']" data-y="['290','240','200','200']"
                         data-voffset="['0','0','0','0']" data-responsive_offset="on"
                         data-visibility="['on','on','on','on']" data-transform_idle="o:1;"
                         data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;"
                         data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                         data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="800">

                    </div>

                    <div class="tp-caption tp-resizeme" data-x="['center','center','center','center']"
                         data-hoffset="['15','15','30','15']" data-y="['340','200','170','170']"
                         data-voffset="['0','0','0','0']" data-responsive_offset="on"
                         data-visibility="['on','on','on','off']" data-transform_idle="o:1;"
                         data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;"
                         data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                         data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="800">

                    </div>

                    <div class="tp-caption tp-resizeme" data-x="['center','center','center','center']"
                         data-hoffset="['15','15','30','15']" data-y="['400','290','230','230']"
                         data-voffset="['0','0','0','0']" data-responsive_offset="on"
                         data-visibility="['on','on','on','off']" data-transform_idle="o:1;"
                         data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;"
                         data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                         data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="800">
                        <a href="{{url('/establishment')}}" class="btn_dark">Read More</a>


                    </div>

                    <div class="tp-caption tp-resizeme" data-x="['center','center','center','center']"
                         data-hoffset="['15','15','30','15']" data-y="['480','350','290','240']"
                         data-voffset="['0','0','0','0']" data-responsive_offset="on"
                         data-visibility="['on','on','on','on']" data-transform_idle="o:1;"
                         data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;"
                         data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                         data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="800">
                    </div>

                </li>
                <li data-transition="slideremoveleft">
                    <img src="{{asset('banners/home-02.jpg')}}" alt="" data-bgposition="center center"
                         data-bgfit="cover"
                         class="rev-slidebg">
                    <div class="tp-caption tp-resizeme" data-x="['center','center','center','center']"
                         data-hoffset="['15','15','30','15']" data-y="['290','240','200','200']"
                         data-voffset="['0','0','0','0']" data-responsive_offset="on"
                         data-visibility="['on','on','on','on']" data-transform_idle="o:1;"
                         data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;"
                         data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                         data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="800">

                    </div>

                    <div class="tp-caption tp-resizeme" data-x="['center','center','center','center']"
                         data-hoffset="['15','15','30','15']" data-y="['340','200','170','170']"
                         data-voffset="['0','0','0','0']" data-responsive_offset="on"
                         data-visibility="['on','on','on','off']" data-transform_idle="o:1;"
                         data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;"
                         data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                         data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="800">

                    </div>

                    <div class="tp-caption tp-resizeme" data-x="['center','center','center','center']"
                         data-hoffset="['15','15','30','15']" data-y="['400','290','230','230']"
                         data-voffset="['0','0','0','0']" data-responsive_offset="on"
                         data-visibility="['on','on','on','off']" data-transform_idle="o:1;"
                         data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;"
                         data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                         data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="800">

                        <a href="{{url('/cafp_approach')}}" class="btn_dark">Read More</a>
                    </div>

                    <div class="tp-caption tp-resizeme" data-x="['center','center','center','center']"
                         data-hoffset="['15','15','30','15']" data-y="['480','350','290','240']"
                         data-voffset="['0','0','0','0']" data-responsive_offset="on"
                         data-visibility="['on','on','on','on']" data-transform_idle="o:1;"
                         data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;"
                         data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                         data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="800">


                    </div>
                </li>
                <li data-transition="slideremoveleft">
                    <img src="{{asset('banners/new work-04.jpg')}}" alt="" data-bgposition="center center"
                         data-bgfit="cover"
                         class="rev-slidebg">
                    <div class="tp-caption tp-resizeme" data-x="['center','center','center','center']"
                         data-hoffset="['15','15','30','15']" data-y="['290','240','200','200']"
                         data-voffset="['0','0','0','0']" data-responsive_offset="on"
                         data-visibility="['on','on','on','on']" data-transform_idle="o:1;"
                         data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;"
                         data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                         data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="800">

                    </div>

                    <div class="tp-caption tp-resizeme" data-x="['center','center','center','center']"
                         data-hoffset="['15','15','30','15']" data-y="['340','200','170','170']"
                         data-voffset="['0','0','0','0']" data-responsive_offset="on"
                         data-visibility="['on','on','on','off']" data-transform_idle="o:1;"
                         data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;"
                         data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                         data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="800">

                    </div>

                    <div class="tp-caption tp-resizeme" data-x="['center','center','center','center']"
                         data-hoffset="['15','15','30','15']" data-y="['400','290','230','230']"
                         data-voffset="['0','0','0','0']" data-responsive_offset="on"
                         data-visibility="['on','on','on','off']" data-transform_idle="o:1;"
                         data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;"
                         data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                         data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="800">


                    </div>

                    <div class="tp-caption tp-resizeme" data-x="['center','center','center','center']"
                         data-hoffset="['15','15','30','15']" data-y="['480','350','290','240']"
                         data-voffset="['0','0','0','0']" data-responsive_offset="on"
                         data-visibility="['on','on','on','on']" data-transform_idle="o:1;"
                         data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;"
                         data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                         data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="800">
                        <a href="{{url('/vision_mission')}}" class="btn_dark">Read More</a>

                    </div>
                </li>

            </ul>
        </div>
    </section>
    <!--  Banner End  -->

    <!--  Web & Develop Start  -->
    <section id="web">
        <div class="container">
            <div class="row">
                <div id="web_slider">
                    @foreach($featured_highlights as $featured_highlight)
                        <div class="item web_box">
                            <div class="web_img">
                                <img src="{{$featured_highlight->image}}" alt="Image">
                            </div>
                            <div class="web_detail clearfix">
                                <h3 class="pull-left" style="font-size: 15px;">{{$featured_highlight->name}}</h3>
                                <a href="{{url('events/'.$featured_highlight->id)}}" class="btn_dark pull-right">Read
                                    more</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!--  Web & Develop End  -->


    <!--  Latest News Start  -->
    <section id="latest_news" class="padding_bottom padding_top">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center heading_space heading">
                    <h2>National Agriculture Policy Framework Thematic Pillars</h2>
                </div>
            </div>
            <div class="row">
                <div id="news_slider">
                    @foreach($pillars as $pillar)
                        <div class="item services_box">
                            <div class="services_img">
                                <img src="{{asset($pillar->image)}}" alt="Image">
                            </div>
                            <div class="news_image text-center">
                                <span style="text-align: left;">{{$pillar->name}}</span>
                            </div>
                            <div class="news_detail">
                                <h3><a class="btn btn-success" href="{{url($pillar->file)}}"
                                       target="_blank">Read More</a></h3>

                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!--  Latest News End  -->

    <!--  About Us Start  -->
    <!--  About Us End  -->

    <!--  Team Start  -->
    {{--
    <section id="team_2" class="padding_top padding_bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center heading heading_space">
                    <h2>The Team</h2>
                    <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus. Nam libero tempore</p>
                </div>
            </div>
            <div class="row">
                <div id="team2_slider" class="owl-carousel owl-theme">
                    <div class="item">
                        <div class="team2_detail">
                            <img src="images/team2_1.png" class="img-circle" alt="image">
                            <h3>Michael Montanna</h3>
                            <span>Project manager</span>
                            <p>No one would have believed in the last years of the nine-teenth century that this world was being</p>
                            <ul class="team_share">
                                <li><a href="javascript:void(0)"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                </li>
                                <li><a href="javascript:void(0)"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                </li>
                                <li><a href="javascript:void(0)"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                </li>
                                <li><a href="javascript:void(0)"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="team_button">
                            <a href="#">Contact</a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="team2_detail">
                            <img src="images/team2_2.png" class="img-circle" alt="image">
                            <h3>Michael Montanna</h3>
                            <span>Project manager</span>
                            <p>No one would have believed in the last years of the nine-teenth century that this world was being</p>
                            <ul class="team_share">
                                <li><a href="javascript:void(0)"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                </li>
                                <li><a href="javascript:void(0)"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                </li>
                                <li><a href="javascript:void(0)"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                </li>
                                <li><a href="javascript:void(0)"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="team_button">
                            <a href="#">Contact</a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="team2_detail">
                            <img src="images/team2_3.png" class="img-circle" alt="image">
                            <h3>Michael Montanna</h3>
                            <span>Project manager</span>
                            <p>No one would have believed in the last years of the nine-teenth century that this world was being</p>
                            <ul class="team_share">
                                <li><a href="javascript:void(0)"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                </li>
                                <li><a href="javascript:void(0)"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                </li>
                                <li><a href="javascript:void(0)"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                </li>
                                <li><a href="javascript:void(0)"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="team_button">
                            <a href="#">Contact</a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="team2_detail">
                            <img src="images/team2_4.png" class="img-circle" alt="image">
                            <h3>Michael Montanna</h3>
                            <span>Project manager</span>
                            <p>No one would have believed in the last years of the nine-teenth century that this world was being</p>
                            <ul class="team_share">
                                <li><a href="javascript:void(0)"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                </li>
                                <li><a href="javascript:void(0)"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                </li>
                                <li><a href="javascript:void(0)"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                </li>
                                <li><a href="javascript:void(0)"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="team_button">
                            <a href="#">Contact</a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="team2_detail">
                            <img src="images/team2_1.png" class="img-circle" alt="image">
                            <h3>Michael Montanna</h3>
                            <span>Project manager</span>
                            <p>No one would have believed in the last years of the nine-teenth century that this world was being</p>
                            <ul class="team_share">
                                <li><a href="javascript:void(0)"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                </li>
                                <li><a href="javascript:void(0)"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                </li>
                                <li><a href="javascript:void(0)"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                </li>
                                <li><a href="javascript:void(0)"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="team_button">
                            <a href="#">Contact</a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="team2_detail">
                            <img src="images/team2_2.png" class="img-circle" alt="image">
                            <h3>Michael Montanna</h3>
                            <span>Project manager</span>
                            <p>No one would have believed in the last years of the nine-teenth century that this world was being</p>
                            <ul class="team_share">
                                <li><a href="javascript:void(0)"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                </li>
                                <li><a href="javascript:void(0)"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                </li>
                                <li><a href="javascript:void(0)"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                </li>
                                <li><a href="javascript:void(0)"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="team_button">
                            <a href="#">Contact</a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="team2_detail">
                            <img src="images/team2_3.png" class="img-circle" alt="image">
                            <h3>Michael Montanna</h3>
                            <span>Project manager</span>
                            <p>No one would have believed in the last years of the nine-teenth century that this world was being</p>
                            <ul class="team_share">
                                <li><a href="javascript:void(0)"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                </li>
                                <li><a href="javascript:void(0)"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                </li>
                                <li><a href="javascript:void(0)"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                </li>
                                <li><a href="javascript:void(0)"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="team_button">
                            <a href="#">Contact</a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="team2_detail">
                            <img src="images/team2_4.png" class="img-circle" alt="image">
                            <h3>Michael Montanna</h3>
                            <span>Project manager</span>
                            <p>No one would have believed in the last years of the nine-teenth century that this world was being</p>
                            <ul class="team_share">
                                <li><a href="javascript:void(0)"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                </li>
                                <li><a href="javascript:void(0)"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                </li>
                                <li><a href="javascript:void(0)"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                </li>
                                <li><a href="javascript:void(0)"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="team_button">
                            <a href="#">Contact</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    --}}
    <!--  Team End  -->

    {{-- <!-- Testinomial -->
     <section id="testinomial2" class="padding_bottom padding_top">
         <div class="container bg_orange padding_bottom padding_top">
             <div class="row ">
                 <div class="col-md-12 text-center heading">
                     <h2 class="heading_space">QUOTES</h2>
                 </div>
             </div>
             <div class="row">
                 <div id="testinomial2_slider" class="owl-carousel owl-theme">
                     <div class="item">
                         <div class="testinomial2_detail text-center">
                             <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil adipiscing quod
                                 maxime placeat facere possimuings.Nam libero tempore, cum soluta possimuings est
                                 eligendi optio cumque nihil nobis est eligendi optio cumque </p>
                             <a href="javascript:void(0)">
                                 <h4>DR CHAPOTO</h4>
                             </a>
                             <a href="javascript:void(0)"><span>TITLE</span></a>
                         </div>
                     </div>
                     <div class="item">
                         <div class="testinomial2_detail text-center">
                             <p>
                                 Lorem ipsum dolor amet consectur adipiscing elit sed do eiusmod tempor incididunt.Lorem
                                 ipsum dolor amet consectur adipiscing .Lorem ipsum dolor sit amet, consectetur
                                 adipiscing elit. Integer gravida leo id est venenatis, quis vehicula sem aliquet.
                             </p>
                             <a href="javascript:void(0)">
                                 <h4>James Cameron</h4>
                             </a>
                             <a href="javascript:void(0)"><span>TITLE</span></a>
                         </div>
                     </div>
                     <div class="item">
                         <div class="testinomial2_detail text-center">
                             <p>Nam libero tempore.Nam libero tempore, est eligendi optio cumque nihil impedit nobis est
                                 eligendi optio cumque nihil impedit cum soluta nobis est eligendi optio cumque nihil
                                 impedit quo minus id quod maxime placeat facere possimus.</p>
                             <a href="javascript:void(0)">
                                 <h4>Sherly Safinaz</h4>
                             </a>
                             <a href="javascript:void(0)"><span>TITLE</span></a>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>
     <!-- /#Testinomial -->
 --}}
    <div id="partners">
        <div class="container">

            <div class="row">
                <h2 class="text-center">
                    <a href="{{url('/plants/Useful Plants of Zimbabwe.pdf')}}" target="_blank">Useful Plants of Zimbabwe
                        With
                        Potential as Smallholder Crops</a>
                </h2>
                <div class="col-md-12 text-center heading_space heading">


                    <h3>
                        25 indigenous plant species with commercial potential in the food, beverage, health and
                        beauty industries
                    </h3>
                </div>

                <div id="partners_slider">
                    @foreach($plants as $plant)
                        <div class="item">
                            <a href="{{asset($plant->file)}}" target="_blank"><img src="{{asset
                            ($plant->path)}}" alt="Image"></a>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>

    <!--  Partners Start  -->
    {{--<div id="partners">
        <div class="container">
            <div class="row">
                <div id="partners_slider">
                    @foreach($partners as $partner)
                        <div class="item">
                            <a href="javascript:void(0)"><img src="{{asset($partner->path)}}" alt="Image"></a>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>--}}
    <!--  Partners End  -->

@stop
