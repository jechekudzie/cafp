@extends('layouts.site')

@section('content')
    <!-- Inner Banner Start -->
    <section style="margin-top: 100px" id="inner-banner-events">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="inner-banner-detail">
                        {{--<p><a href="javascript:void(0)">Home</a><span> - </span>About Us</p>
                        <h2>Our Strategy</h2>--}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Inner Banner End -->

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
