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


    <!--  Team Start  -->
    <section style="margin-top: -80px;" id="team_2" class="padding_top padding_bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center heading heading_space">
                    <h2>CAFP Staff</h2>
                </div>
            </div>

            <div class="row">

                    @foreach($associates as $associate)
                        <div class="col-md-4 col-lg-4 item">
                            <div class="team2_detail">
                                <h3>{{$associate->name}}</h3>
                                {{--<span style="font-size: 15px; font-weight: bold;">{{$associate->position}}</span>--}}
                                {{--<p>No one would have believed in the last years of the nine-teenth century that this world was being</p>--}}
                            </div>
                            <div class="btn btn-success btn-block {{--team_button--}}">
                                <a href="{{url('/associates/'.$associate->id)}}">Read More</a>
                            </div>
                        </div>
                    @endforeach
            </div>
            <br/>
            <br/>
            {{-- <a class="btn btn-success" href="{{asset('/assets/About The Center for Agriculture and Food Policy.pdf')}}"
                target="_blank">Download Profile</a>--}}
        </div>
    </section>
    <!--  Team End  -->


@stop
