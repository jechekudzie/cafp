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
                <div class="col-md-12">
                    <div class="inner_heading heading_space">

                        <h2>Overview</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 col-sm-8 col-xs-12">
                    <div class="over-view">
                        <p style="margin-top: -50px">The main objective under this pillar is to conduct and support
                            evidence-based agricultural policy research and development in order to promote sustainable
                            agricultural growth as a means of reducing poverty, hunger, and malnutrition in Zimbabwe as
                            well as guide private sector, support private investments and rural development in line with
                            National Development Strategies, regional and international commitments. </p>
                        <p style="margin-top: -20px">
                            Strategic objectives (S0) under this pillar are as follows:
                        </p>
                        <p style="padding-left: 20px;margin-top: -10px">
                            <strong>S01:</strong> To shape a productive, sustainable, inclusive, and resilient
                            agricultural
                            and food
                            system that is capable of achieving broad-based agricultural growth and development to end
                            hunger and malnutrition, and reduce poverty through high quality evidence based public
                            research goods on policies, investments, and programmes.
                        </p>
                        <p style="padding-left: 20px">
                            <strong>S02:</strong> To conduct, catalyse, assist, curate and support policy research
                            and analysis in
                            Zimbabwe or elsewhere into all aspects of agriculture.
                        </p>
                        <p>
                            The key activities that will be undertaken to achieve the strategic objectives will fall
                            under three broad thematic areas with issues to do with gender and youth as cross-cutting.
                            The strategic thematic areas are:
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($thematic_areas as $thematic_area)
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="item web_box">
                            <div class="web_img">
                                <img src="{{asset($thematic_area->image)}}" alt="Owl Image">
                            </div>
                            <div class="web_detail">
                                <h3>{{$thematic_area->name}}</h3>
                                <a href="{{url('/thematic_areas/'.$thematic_area->id)}}">Read more</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- History -->


@stop
