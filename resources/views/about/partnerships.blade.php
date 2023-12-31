@extends('layouts.site')

@section('content')

    <!-- Inner Banner Start -->
    <section style="margin-top: 100px" id="inner-banner-partnerships">
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

    <section id="companyover-view">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div style="margin-top: 20px;" class="inner_heading heading_space">
                        <h2>CAFP MOUs</h2>
                    </div>
                </div>
            </div>

            <div class="col-md-12 col-sm-12 col-xs-12 m-t-35">
                <div class="creative_detail">
                    <div class="tag">
                        <i aria-hidden="true"></i>
                    </div>

                    {{-- <div style="margin-top: -5px" class="row">

                         <div class="over-view">

                             @forelse($partners as $partner)
                                 <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                     <a href="{{$partner->url}}" target="_blank">
                                         <img style="width: 150px; height: 100px; margin-left: 30px;"
                                              class="img-rounded" src="{{asset($partner->path)}}">
                                     </a>
                                     <div style="text-align: center;">

                                         <a href="{{$partner->url}}" target="_blank">
                                             <span style="text-align: center;">{{$partner->name}}</span>
                                         </a>
                                     </div>
                                 </div>
                                 @endforeach


                         </div>
                     </div>--}}

                    <div class="container">
                        <div style="margin-top: -60px;" class="row">
                            @foreach($partners as $partner)
                                <div style="margin-bottom:50px;" class="col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                    <div class="team2_detail">
                                        <img style="width: 150px;height: 100px;" src="{{asset($partner->path)}}"
                                             class="" alt="image">
                                    </div>
                                    <a href="{{url('/staff/'.$partner->id)}}">
                                            <span style="font-size: 12px; font-weight: bold;text-align: center;text-transform: none;">
                                                {{$partner->name}}
                                            </span>
                                    </a>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>


@stop
