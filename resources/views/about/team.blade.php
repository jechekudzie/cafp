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

    <section id="companyover-view" class="padding_bottom padding_top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="inner_heading heading_space">

                        {{--<h2>Coming Soon</h2>--}}
                    </div>
                </div>
            </div>
            {{-- <div class="row">
                 <div class="col-md-8 col-sm-8 col-xs-12">
                     <div class="over-view">
                         <p style="margin-top: -50px">
                             To strengthen capacities as well as better utilize research, IAPRI in 2015 will initiate a
                             scholarship program to support master’s level thesis research aligned to the CAFP strategic
                             thematic area, Poverty, Health, Food and Nutrition Security; Agricultural Transformation,
                             Institutions, Markets and Trade Development; and Technology, Climate-Resilient Agriculture
                             and Food Systems. In addition to offering students resources and collaboration opportunities
                             to build their research capabilities, the scholarship program aims to enhance the relevance
                             of agricultural and food policy research to improving the effectiveness of agricultural and
                             rural development strategies in Zimbabwe.
                         </p>
                         <p>
                             The idea behind the program is to make researchers
                             more accountable to stakeholders in the sector. By informing students of issues that
                             policymakers and donors are interested in and would like research on, CAFP hopes to enhance
                             the research that comes out of the various Master’s level programs at universities around
                             the country so that stakeholders in the agricultural sector can actually use the information
                             students are producing to implement agricultural and rural development strategies.
                         </p>

                         <p style="margin-top: -20px">
                             The objectives of the program are summarised as follows:
                         </p>
                         <ul style="padding-left: 5%;margin-top: -10px;">
                             <li> To enhance the research that comes out of the various Master’s level programs at
                                 universities around the country so that stakeholders can actually use the information
                                 students are producing to implement agricultural and rural development strategies;
                             </li>
                             <li> To provide students with resources and collaboration opportunities to build their
                                 research capabilities;
                             </li>
                             <li> To inform students of issues that policymakers and donors are interested in and would
                                 like research on.
                             </li>
                             <li></li>
                             <li></li>
                             <li></li>
                         </ul>

                     </div>
                 </div>
             </div>--}}

        </div>
    </section>

    <!--  Team Start  -->
    {{--<section id="team_2" class="padding_top padding_bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center heading heading_space">
                    <h2>CAFP staff</h2>
                </div>
            </div>
            <div class="row">
                <div id="team2_slider" --}}{{--class="owl-carousel owl-theme"--}}{{-->
                    @foreach($team_members as $team_member)
                        <div class="item">
                            <div class="team2_detail">
                                <img src="{{asset($team_member->image)}}" class="img-circle" alt="image">
                                <h3>{{$team_member->name}}</h3>
                                <span style="font-size: 15px; font-weight: bold;">{{$team_member->position}}</span>
                                --}}{{--<p>No one would have believed in the last years of the nine-teenth century that this world was being</p>--}}{{--
                            </div>
                            <div class="team_button">
                                <a href="{{url('/team_detail/'.$team_member->id)}}">Read More</a>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
            <br/>
            <br/>
            <a class="btn btn-success" href="{{asset('/assets/About The Center for Agriculture and Food Policy.pdf')}}"
               target="_blank">Download Profile</a>
        </div>
    </section>--}}
    <!--  Team End  -->


    {{-- <section id="services-page-2" class="padding_bottom padding_top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="inner_heading heading_space">
                        <h2>CAFP Staff</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($team_members as $team_member)
                    <div class="col-md-3 col-sm-3 col-xs-12">
                        <div class="item web_box">
                            <div class="web_img">
                                <img src="{{asset($team_member->image)}}" alt="Owl Image">
                            </div>
                            <div class="web_detail">
                                <h3 style="font-size: 12px;">{{$team_member->name}}</h3>
                                <a href="{{url('/board/'.$team_member->id)}}">Read more</a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
--}}


@stop
