@extends('layouts.site')

@section('content')

    <!-- Inner Banner Start -->
    <section style="margin-top: 100px" id="inner-banner-thematic">
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


    <!-- History -->
    <section id="companyover-view" class="padding_bottom padding_top">
        <div class="container">

            <div class="row">
                <div class="col-md-8 col-sm-8 col-xs-12">
                    <div style="padding-left: 10%;" class="over-view">
                       <p style="margin-top: -50px;padding-left: 20px;">
                           {!! $thematicArea->description !!}
                       </p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12">

                    <div class="shop-sidebar-box">
                        <h3>Thematic Areas</h3>
                        <ul class="blog-sidebar-category">
                            @foreach($thematic_areas as $thematic_area)
                                <li><a href="{{url('/thematic_areas/'.$thematic_area->id)
                                }}">{{$thematic_area->name}} </a></li>
                            @endforeach

                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- History -->


@stop
