@extends('layouts.site')

@section('content')

    <!-- Inner Banner Start -->
    <section style="margin-top: 100px" id="inner-banner-team">
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
    <section id="shop-section" class="padding_top">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-9 col-xs-12">
                    <div class="review-tabs">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active">
                                <a href="#description" aria-controls="description" role="tab" data-toggle="tab">{{$secretariat->name}}
                                    {{--{{$secretariat->position}}--}}
                                </a>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="description">
                                <div class="row">
                                    <div class="col-md-4 col-sm-4 col-xs-12">
                                        <div class="over-view-img">
                                            <a title="View About us video" data-height="420" data-width="900"
                                               class="html5lightbox content-vbtn-color-blue"
                                               href="https://player.vimeo.com/video/102732914?title=0&amp;byline=0&amp;portrait=0&amp;color=11b1c2&amp;wmode=opaque"><img
                                                    src="{{asset($secretariat->image)}}" alt="image">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-8 col-lg-8">
                                        {{--<h4>BIO</h4>--}}
                                        {!! $secretariat->bio !!}
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12">

                    <div class="shop-sidebar-box">
                        <h3>CAFP Staff</h3>
                        <ul class="blog-sidebar-category">
                            @foreach($secretariats as $secretariat)
                                <li><a href="{{url('/staff/'.$secretariat->id)
                                }}">{{$secretariat->name}} ({{$secretariat->position}})</a></li>
                            @endforeach

                        </ul>
                        <br/>
                        <h3>CAFP Affiliates</h3>
                        <ul class="blog-sidebar-category">
                            @foreach($associates as $associate)
                                <li><a href="{{url('/associates/'.$associate->id)
                                }}">{{$associate->name}} </a></li>
                            @endforeach

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  shop End  -->




@stop
