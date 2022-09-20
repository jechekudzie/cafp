@extends('layouts.site')

@section('content')
    <!-- Inner Banner Start -->
    <section style="margin-top: 100px" id="inner-banner-events">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="inner-banner-detail">

                        <h2>{{$event->title}}</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Inner Banner End -->
    <!--  Blog Start  -->
    <section id="blog-section" class="padding_bottom padding_top">
        <div class="container">
            <div class="row">

                <div class="col-md-9 col-sm-9 col-xs-12">

                    <div class="blog-box">
                        <div id="web" class="blog-box-img">
                            <div id="bloghome_slider">

                                <div class="item web_box">
                                    <img style="width: 1000px; ;height: 500px;" src="{{asset($event->image)}}"
                                         alt="image">
                                </div>
                            </div>
                            {{--<div class="date-tag">
                                <span class="date-sec"><p>25</p><p>May</p></span>
                                <span class="pic-sec"><i class="fa fa-picture-o" aria-hidden="true"></i></span>
                            </div>--}}
                        </div>
                        <div class="blog-box-deatil">
                            <h2><a href="#">{{$event->name}}</a></h2>
                            <br/>
                            @if($event->speaker != null)
                                <h5><a href="#">Speaker: {{$event->speaker}}</a></h5>
                            @endif
                            <div class="blog-tags">
                                {{--<a href="#"><span>By</span> {{}},</a>--}}
                                {{--  <a href="#"><span><i class="fa fa-comment-o" aria-hidden="true"></i></span> 25,</a>
                                  <a href="#"><span><i class="fa fa-heart-o" aria-hidden="true"></i></span> 205,</a>--}}
                            </div>
                            <p>{!! $event->description !!}</p>

                            <div class="sidebar-download">
                                @if($event->event_documents)
                                    @foreach($event->event_documents as $file)
                                        <a href="{{asset($file->name)}}" target="_blank" class="download-bro"><i
                                                class="fa fa-download" aria-hidden="true"></i> {{$file->name}}
                                        </a>
                                    @endforeach
                                @endif

                            </div>

                            <div class="blog-sidebar-box">
                                @if($event->event_images->count() > 0)
                                    <h3>Images</h3>
                                @endif
                                <div id="latest_blog_slider" class="owl-carousel owl-theme">

                                    @if($event->event_images)
                                        @foreach($event->event_images as $image)
                                            <div class="item">

                                                <div class="latest-blog-text">
                                                    <div class="latest-box-slider">
                                                        <img src="{{asset($image->file)}}" alt="image">
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endif


                                </div>
                            </div>

                        </div>

                    </div>

                    {{--  <form id="list_blog_contact" class="padding-top">

                          <div class="inner_heading">
                              <p>We Offer for you</p>
                              <h2>Leave a Reply</h2>
                          </div>

                          <div class="form-group">
                              <input type="text" class="form-control" placeholder="Name">
                          </div>
                          <div class="form-group">
                              <input type="text" class="form-control" placeholder="Phone">
                          </div>
                          <div class="form-group">
                              <input type="email" class="form-control" placeholder="Email">
                          </div>

                          <div class="form-group">
                              <textarea class="form-control" placeholder="Message"></textarea>
                          </div>


                          <div class="list_blog_contact">
                              <a href="#." class="hvr-sweep-to-left">Post Comment</a>
                          </div>

                      </form>--}}

                </div>

                <div class="col-md-3 col-sm-3 col-xs-12">

                    <div class="blog-sidebar-box">
                        <h3>Featured Highlights</h3>
                        <ul class="blog-sidebar-category">
                            @foreach($featured_highlights as $featured_highlight)
                                <li>
                                    <a href="{{url('events/'.$featured_highlight->id)}}">{{$featured_highlight->name}}
                                    </a></li>
                            @endforeach
                        </ul>

                    </div>

                </div>


            </div>
        </div>
    </section>
    <!--  Blog End  -->



@stop
