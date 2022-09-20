@extends('layouts.site')

@section('content')
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <style type="text/css">
        #myCarousel .nav {
            background: #eee;
        }

        #myCarousel .nav a {
            border-radius: 0px;
        }
    </style>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#myCarousel').carousel({
                interval: 3000
            });

            var clickEvent = false;
            $('#myCarousel').on('click', '.nav a', function () {
                clickEvent = true;
                $('.nav li').removeClass('active');
                $(this).parent().addClass('active');
            }).on('slid.bs.carousel', function (e) {
                if (!clickEvent) {
                    var count = $('.nav').children().length - 1;
                    var current = $('.nav li.active');
                    current.removeClass('active').next().addClass('active');
                    var id = parseInt(current.data('slide-to'));
                    if (count == id) {
                        $('.nav li').first().addClass('active');
                    }
                }
                clickEvent = false;
            });
        });
    </script>

    <div class="container">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                @foreach($articles as $article)
                    <div class="item {{$x == 0 ? 'active':''}}">
                        <img style="width:100%;height: 600px" src="{{asset($article->image)}}">
                        <div class="carousel-caption">
                            <h3 style="background-color: #FCC100;">{!! $article->name !!}</h3>
                            <p>
                                <a href="{{url('/articles/'.$article->id)}}" target="_blank"
                                   class="btn btn-success btn-lg">Read More
                                </a>
                            </p>

                        </div>
                    </div>
                    <span style="display: none;">{{$x = $x + 1}}</span>
                @endforeach

            </div><!-- End Carousel Inner -->
            <ul class="nav nav-pills nav-justified">
                @foreach($articles as $article)
                    <li data-target="#myCarousel" data-slide-to="{{$z}}" class="{{$z == 0 ? 'active':''}}">
                        <a style="background-color: white;" href="#">
                            <img style="width: 200px;height: 100px;" src="{{asset($article->image)}}">
                            <br/>
                            <h6 style="text-align: center;color: black;">{!! $article->name !!}</h6>
                        </a>
                    </li>
                    <span style="display: none;">{{$z = $z + 1}}</span>
                @endforeach
            </ul>

        </div><!-- End Carousel -->
    </div>


    <!--  Banner Start  -->
    {{--  <section class="rev_slider_wrapper">
          <div id="rev_slider_4" class="rev_slider" data-version="5.0">
              <ul>

                  @foreach($articles as $article)
                      <li data-transition="zoomout">
                          <img src="{{asset($article->image)}}" alt="" data-bgposition="center center" data-bgfit="cover"
                               class="rev-slidebg">
                          <div class="tp-caption tp-resizeme" data-x="['right','right','right','right']"
                               data-hoffset="['15','15','30','15']" data-y="['290','240','200','200']"
                               data-voffset="['0','0','0','0']" data-responsive_offset="on"
                               data-visibility="['on','on','on','on']" data-transform_idle="o:1;"
                               data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;"
                               data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                               data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="800">

                          </div>
                          <div style="background-color: #FCC100/*117143*/; opacity: 0.1;" class="tp-caption tp-resizeme"
                               data-x="['right','right','right','right']" data-hoffset="['15','15','30','15']"
                               data-y="['340','200','170','170']" data-voffset="['0','0','0','0']"
                               data-responsive_offset="on" data-visibility="['on','on','on','off']"
                               data-transform_idle="o:1;"
                               data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;"
                               data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                               data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="800">
                              <h3 class="banner_h3">{!! $article->name !!}</h3>
                          </div>
                          <div class="tp-caption tp-resizeme" data-x="['right','right','right','right']"
                               data-hoffset="['15','15','30','15']" data-y="['400','290','230','230']"
                               data-voffset="['0','0','0','0']" data-responsive_offset="on"
                               data-visibility="['on','on','on','off']" data-transform_idle="o:1;"
                               data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;"
                               data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                               data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="800">
                              --}}{{--<h2 class="banner_h2"><strong>that can you trust</strong></h2>--}}{{--
                          </div>

                          <div style="padding-top: 20px;" class="tp-caption tp-resizeme"
                               data-x="['right','right','right','right']" data-hoffset="['15','15','30','15']"
                               data-y="['480','350','290','240']" data-voffset="['0','0','0','0']"
                               data-responsive_offset="on" data-visibility="['on','on','on','on']"
                               data-transform_idle="o:1;"
                               data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;"
                               data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                               data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="800">
                              <a href="{{url('/')}}" class="btn_dark">Read More</a>
                              <a href="javascript:void(0)" class="btn_light">Join Now</a>
                          </div>
                      </li>
                      --}}{{--  <li data-transition="fade">
                            <img src="{{asset($article->image)}}" alt="" data-bgposition="center center" data-bgfit="cover"
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
                                <h3 style="color: white;font-weight: bolder;" class="banner_h3">{!! $article->name !!}</h3>

                            </div>
                            <br/>
                            <br/>
                            <div class="tp-caption tp-resizeme" data-x="['left','left','left','left']"
                                 data-hoffset="['15','15','30','15']" data-y="['480','350','290','240']"
                                 data-voffset="['0','0','0','0']" data-responsive_offset="on"
                                 data-visibility="['on','on','on','on']" data-transform_idle="o:1;"
                                 data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;"
                                 data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                 data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="800">
                                <br/>
                                <br/>
                                <a href="javascript:void(0)" class="btn_dark">Read More</a>
                                <a href="javascript:void(0)" class="btn_light">Join Now</a>
                            </div>
                        </li>--}}{{--
                  @endforeach
              </ul>
          </div>
      </section>--}}
    <!-- Banner End -->


    <!--  Blog Start  -->
    <section id="blog-section" class="padding_bottom padding_top">
        <div class="col-md-12">
            <div class="inner_heading heading_space">
                <h2>Events</h2>
            </div>
        </div>
        <div class="container">
            <div class="row">
                @foreach($events as $event)
                    <div class="col-md-4 col-lg-4">
                        <div class="blog-box">
                            <img style="width: 460px;height: 260px;" src="{{asset($event->image)}}" alt="image">
                            <div class="blog-box-deatil">
                                <h5><a href="javascript:void(0)">{{$event->name}}</a></h5>
                                <div class="blog-tags">
                                    <a href="javascript:void(0)"><span>Location</span> {{$event->location}}</a>
                                    <br/>
                                    <a href="javascript:void(0)"><span>Date(s)</span> {{$event->date}}</a>
                                </div>
                                {{--<p>{!! substr($event->description,0,300) !!} ....</p>--}}
                                <a href="{{url('events/'.$event->id)}}" class="blog-button">Read More</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!--  Blog End  -->



@stop

