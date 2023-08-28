@extends('layouts.site')

@section('content')

    <!-- Inner Banner Start -->
    <section style="margin-top: 100px" id="inner-banner-associates">
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
                                <a href="#description" aria-controls="description" role="tab" data-toggle="tab">
                                    {{$associate->name}}
                                </a>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="description">
                                <div class="row">
                                    <div class="col-sm-12 col-md-8 col-lg-8">
                                        {{-- <h4>BIO</h4>--}}
                                        {!! $associate->bio !!}
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12">

                    <div class="shop-sidebar-box">
                        <h3>CAFP Affiliates</h3>
                        <ul class="blog-sidebar-category">
                            @foreach($associates as $associate)
                                <li><a href="{{url('/associates/'.$associate->id)
                                }}">{{$associate->name}} </a></li>
                            @endforeach

                        </ul>
                        <br/>
                        <h3>CAFP Staff</h3>
                        <ul class="blog-sidebar-category">
                            @foreach($team_members as $team_member)
                                <li><a href="{{url('/staff/'.$team_member->id)
                                }}">{{$team_member->name}} </a></li>
                            @endforeach

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  shop End  -->




@stop
