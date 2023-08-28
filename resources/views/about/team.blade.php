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
    <!--  Team Start  -->
    <section id="team_2" class="padding_top padding_bottom">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="inner_heading heading_space">
                        <h2>CAFP STAFF</h2>
                        <br/>
                        <br/>
                        <p style="text-transform: none">
                            Our work is grounded in our previous experience in agriculture policy development,
                            implementation, monitoring and evaluation. This background is why the team combines
                            experience from Government, parastatals, private sector, regional and international in
                            evidence-based policy making. CAFP is able to apply its expertise to a wide range of
                            agricultural policy making issues, including surveys and impact evaluations.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row ">
                @foreach($team_members as $team_member)
                    <div style="margin-bottom:50px;" class="col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
                        <div class="team2_detail">
                            <img style="width: 200px;height: 200px;" src="{{asset($team_member->image)}}"
                                 class="img-circle" alt="image">
                            <h3 style="font-size: 12px;">{{$team_member->name}}</h3>
                            <span style="font-size: 12px; font-weight: bold;text-align: justify;text-transform: none;">{{$team_member->position}}</span>
                        </div>
                        <div class="btn btn-success btn-block {{--team_button--}}">
                            <a href="{{url('/staff/'.$team_member->id)}}">Read More</a>
                        </div>
                    </div>
                @endforeach
            </div>
            <br/>
            <br/>

        </div>
    </section>
    <section style="margin-top: -100px;" id="team_2" class="padding_top padding_bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="inner_heading heading_space">
                        <h2>CAFP Affiliates</h2>
                        <br/>
                        <br/>
                        <p style="text-transform: none">
                            Our Affiliates provide additional expertise expanding on the capabilities of our core team
                            in the following thematic areas:
                        </p>
                        <br/>
                        <ol>
                            <li>1. Poverty, Health, Food and Nutrition Security</li>
                            <li>2. Agricultural Transformation, Institutions, Markets and Trade Development</li>
                            <li>3. Technology, Climate-Resilient Agriculture and Food Systems</li>
                        </ol>
                    </div>
                </div>
            </div>

            <div class="container">
                <div style="margin-top: -60px;" class="row">
                    @foreach($associates as $associate)
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
                            <div class="team2_detail">

                                <h3>{{$associate->name}}</h3>
                                <span style="font-size: 15px; font-weight: bold;">{{$associate->position}}</span>
                                {{--<p>No one would have believed in the last years of the nine-teenth century that this world was being</p>--}}
                            </div>
                            <div class="btn btn-success btn-block {{--team_button--}}">
                                <a href="{{url('/associates/'.$associate->id)}}">Read More</a>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
            <br/>
            <br/>
            {{-- <a class="btn btn-success" href="{{asset('/assets/About The Center for Agriculture and Food Policy.pdf')}}"
                target="_blank">Download Profile</a>--}}
        </div>
    </section>
    <!--  Team End  -->

@stop
