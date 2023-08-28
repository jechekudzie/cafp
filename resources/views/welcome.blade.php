@extends('layouts.site')

@section('content')
    <style>
        #more {
            display: none;
        }
    </style>
    <main>
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                @foreach($articles as $article)
                    <li data-target="#myCarousel" data-slide-to="{{$z}}" class="{{$z == 0 ? 'active':''}}"></li>
                @endforeach
            </ol>
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                @foreach($articles as $article)
                    <div class="item {{$x == 0 ? 'active':''}}">
                        <img src="{{asset($article->image)}}" style="width:100%;">
                        <div style="padding-bottom:20px;!important;" class="carousel-caption">
                            <h4 style="background-color: #FCC100;">{!! $article->name !!}</h4>
                            <br/>
                            <a href="{{url('/articles/'.$article->id)}}"
                               class="btn btn-success">Read More
                            </a>
                        </div>
                    </div>
                    <span style="display: none;">{{$x = $x + 1}}</span>
                @endforeach

            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

    </main>
    <div style="padding-top: 30px;" class="container">
        <section id="" class="padding_bottom padding_top">
            <div class="col-md-12">
                <div class="inner_heading heading_space">
                    <h2>Job Vacancies</h2>
                </div>
            </div>
            {{-- <div style="padding-bottom: 40px;" class="container">
                 <div class="row">
                     <div class="col-lg-6">


                         <p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><strong><span style="font-size:14.0pt"><span style="font-family:&quot;Gill Sans MT&quot;,sans-serif">2023 Greetings from the CAFP Chairperson</span></span></strong></span></span></p>

                         <p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-family:&quot;Gill Sans MT&quot;,sans-serif">Dear Partners and Friends,</span></span></span></p>

                         <p style="margin-left:0cm; margin-right:0cm; text-align:justify">&nbsp;</p>

                         <p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-family:&quot;Gill Sans MT&quot;,sans-serif">Compliments of the new season to you all. We would like to thank everyone for the support and collaboration during 2022.</span></span></span></p>

                         <p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-family:&quot;Gill Sans MT&quot;,sans-serif">The Center for Agriculture and Food Policy (CAFP), with great support from partners managed to sustain its core programme on capacity building, research and outreach activities. We are excited that through our collaboration with the Ministry of Lands Agriculture, Fisheries, Water and Rural Development (MLAFWRD) we continue to catalyse the National Agriculture Policy Framework (NAFP) Pillar Thematic Working Groups. These are agricultural policy discussions platforms co-chaired by Private and Government participants from diverse backgrounds. We would like to continue providing this public good and expand into new agendas, strong partnerships and outreach activities in 2023.</span></span></span></p>

                         <p style="margin-left:0cm; margin-right:0cm; text-align:justify">&nbsp;</p>

                         <p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-family:&quot;Gill Sans MT&quot;,sans-serif">Through its internship programme, CAFP is hosting a PhD student majoring in Agricultural Policy from the University of Ghana as of November 2022 until July 2023 on an Experimental Learning Module. In addition, CAFP is also supporting an MSc student from the University of Zimbabwe majoring in Food Systems. CAFP will continue with the internship programme for both MSc and PhD agricultural policy students. The objective is to support development of a pool of experts in agricultural public policy for the benefit of both public and private sectors.</span></span></span></p>

                         <p style="margin-left:0cm; margin-right:0cm; text-align:justify">&nbsp;</p>

                         <p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-family:&quot;Gill Sans MT&quot;,sans-serif">We are also delighted that CAFP provided technical assistance to a number of projects to the Ministry of Lands, Agriculture, Fisheries, Water and Rural Development (MLAFWRD). These projects include the Zimbabwe Livestock Capacity Building and Census Approach Note; National Sunflower and Legume Value Chain Strategy and the Evaluation of the effectiveness and efficiency of the Government blitz tick grease programme. The later will be concluded during the first quarter of 2023.</span></span></span></p>

                         <span id="dots">...</span>
                         <span id="more">

                         <p style="margin-left:0cm; margin-right:0cm; text-align:justify">&nbsp;</p>

                         <p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-family:&quot;Gill Sans MT&quot;,sans-serif">In 2022, CAFP hosted a webinar that responded to the severe global market disruptions resulting from the Russia-Ukraine conflict. The main thrust for the webinar was to deliberate on the implications of the Russia-Ukraine Conflict on Zimbabwe Food Security and explore mitigation measures as well as help guide policy responses. </span></span></span></p>

                         <p style="margin-left:0cm; margin-right:0cm; text-align:justify">&nbsp;</p>

                         <p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-family:&quot;Gill Sans MT&quot;,sans-serif">Technical and financial support from regional and country partners enabled CAFP to create knowledge products including:</span></span></span></p>

                         <ul>
                             <li style="text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-family:&quot;Gill Sans MT&quot;,sans-serif">A Digital Climate Adaptation in Agriculture Profile for Zimbabwe.</span></span></span></li>
                             <li style="text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-family:&quot;Gill Sans MT&quot;,sans-serif">A survey to assess biofortification technology adoption and impact of iron beans and vitamin A maize in selected provinces of Zimbabwe.</span></span></span></li>
                         </ul>

                         <p style="margin-left:0cm; margin-right:0cm; text-align:justify">&nbsp;</p>

                         <p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-family:&quot;Gill Sans MT&quot;,sans-serif">CAFP also helped to organise and participated in the 2022 ReSAKSS Annual Conference under the theme &ldquo;Agri-food Processing Strategies for Successful Food Transformation in Africa&rdquo;. The conference was a huge success and was graced by high level MLAFWRD officials. </span></span></span></p>

                         <p style="margin-left:0cm; margin-right:0cm; text-align:justify">&nbsp;</p>

                         <p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-family:&quot;Gill Sans MT&quot;,sans-serif">I</span></span></span><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-family:&quot;Gill Sans MT&quot;,sans-serif">n 2023, CAFP intend to capitalize on this momentum and continue to implement our 2021-2026 Strategic Plan. We will continue to strengthen partnerships, collaborations and outreach to benefit from synergies and broaden our impact. The Institution looks to better opportunities and mutually beneficial engagements in 2023. We are happy and proud to have worked with you in 2022 and look forward to continue working together in the New Year.</span></span></span></p>

                         <p style="margin-left:0cm; margin-right:0cm; text-align:justify">&nbsp;</p>

                         <p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-family:&quot;Gill Sans MT&quot;,sans-serif">We look forward to more collaboration in 2023!</span></span></span></p>

                         <p style="margin-left:0cm; margin-right:0cm; text-align:justify">&nbsp;</p>

                         <p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-family:&quot;Gill Sans MT&quot;,sans-serif">Dr T Takavarasha</span></span></span></p>

                         <p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><strong><span style="font-family:&quot;Gill Sans MT&quot;,sans-serif">Chairperson</span></strong></span></span></p>

                         <p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><strong><span style="font-family:&quot;Gill Sans MT&quot;,sans-serif">Center for Agriculture and Food Policy</span></strong></span></span></p>

                         <p style="margin-left:0cm; margin-right:0cm; text-align:justify">&nbsp;</p>

                         <p style="margin-left:0cm; margin-right:0cm; text-align:justify">&nbsp;</p>

                         </span>
                         <a style="color: blue;cursor: pointer;" onclick="myFunction()" id="myBtn">Read more</a>

                     </div>
                     <div class="col-lg-6">
                         <img style="width: 600px;" src="{{asset('2023.jpeg')}}">
                     </div>


                 </div>
             </div>--}}

            <div class="container">
                <div class="row">
                    <section id="error_page" class="padding_bottom padding_top">
                        {{--<h2 style="text-align: center;padding-top: 20px;">Job Vacancies</h2>--}}
                        <div class="container">
                            <div class="row">
                                @if (session('message'))
                                    <div class="alert alert-success alert-rounded"><i
                                            class="fa fa-check-circle"></i> {{ session('message') }}
                                        <button type="button" class="close" data-dismiss="alert"
                                                aria-label="Close"><span
                                                aria-hidden="true">&times;</span></button>
                                    </div>
                                @endif
                                @foreach($vacancies as $vacancy)
                                    <div style="margin-top:-50px;" class="blog-box-deatil">
                                        <h4><a style="color: #117143;" href="#"
                                               target="_blank">Call For Applications: {{$vacancy->job_title}}</a></h4>
                                        <p>{!! substr($vacancy->description,0,120) !!}....</p>
                                        <button style="margin-bottom: 15px;" type="button" class="btn btn-success"
                                                data-toggle="modal"
                                                data-target="#staticBackdrop{{$vacancy->id}}">
                                            View Full Job Description
                                        </button>
                                    </div>

                                @endforeach
                            </div>
                        </div>
                    </section>
                    <!-- Login End -->
                    <!-- Button trigger modal -->
                    @foreach($vacancies as $vacancy)
                        <!-- Modal -->
                        <div class="modal fade" id="staticBackdrop{{$vacancy->id}}" data-backdrop="static"
                             data-keyboard="false" tabindex="-1"
                             aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="staticBackdropLabel">{{$vacancy->job_title}}</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        {!! $vacancy->description !!}
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close
                                        </button>
                                        <button type="button" class="btn btn-primary">Understood</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>



        </section>
    </div>

    <div class="container">
        <section id="blog-section" class="padding_bottom padding_top">
            <div class="col-md-12">
                <div class="inner_heading heading_space">
                    <h2>Events</h2>
                </div>
            </div>
            {{-- <div style="padding-bottom: 40px;" class="container">
                 <div class="row">
                     <div class="col-lg-6">


                         <p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><strong><span style="font-size:14.0pt"><span style="font-family:&quot;Gill Sans MT&quot;,sans-serif">2023 Greetings from the CAFP Chairperson</span></span></strong></span></span></p>

                         <p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-family:&quot;Gill Sans MT&quot;,sans-serif">Dear Partners and Friends,</span></span></span></p>

                         <p style="margin-left:0cm; margin-right:0cm; text-align:justify">&nbsp;</p>

                         <p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-family:&quot;Gill Sans MT&quot;,sans-serif">Compliments of the new season to you all. We would like to thank everyone for the support and collaboration during 2022.</span></span></span></p>

                         <p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-family:&quot;Gill Sans MT&quot;,sans-serif">The Center for Agriculture and Food Policy (CAFP), with great support from partners managed to sustain its core programme on capacity building, research and outreach activities. We are excited that through our collaboration with the Ministry of Lands Agriculture, Fisheries, Water and Rural Development (MLAFWRD) we continue to catalyse the National Agriculture Policy Framework (NAFP) Pillar Thematic Working Groups. These are agricultural policy discussions platforms co-chaired by Private and Government participants from diverse backgrounds. We would like to continue providing this public good and expand into new agendas, strong partnerships and outreach activities in 2023.</span></span></span></p>

                         <p style="margin-left:0cm; margin-right:0cm; text-align:justify">&nbsp;</p>

                         <p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-family:&quot;Gill Sans MT&quot;,sans-serif">Through its internship programme, CAFP is hosting a PhD student majoring in Agricultural Policy from the University of Ghana as of November 2022 until July 2023 on an Experimental Learning Module. In addition, CAFP is also supporting an MSc student from the University of Zimbabwe majoring in Food Systems. CAFP will continue with the internship programme for both MSc and PhD agricultural policy students. The objective is to support development of a pool of experts in agricultural public policy for the benefit of both public and private sectors.</span></span></span></p>

                         <p style="margin-left:0cm; margin-right:0cm; text-align:justify">&nbsp;</p>

                         <p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-family:&quot;Gill Sans MT&quot;,sans-serif">We are also delighted that CAFP provided technical assistance to a number of projects to the Ministry of Lands, Agriculture, Fisheries, Water and Rural Development (MLAFWRD). These projects include the Zimbabwe Livestock Capacity Building and Census Approach Note; National Sunflower and Legume Value Chain Strategy and the Evaluation of the effectiveness and efficiency of the Government blitz tick grease programme. The later will be concluded during the first quarter of 2023.</span></span></span></p>

                         <span id="dots">...</span>
                         <span id="more">

                         <p style="margin-left:0cm; margin-right:0cm; text-align:justify">&nbsp;</p>

                         <p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-family:&quot;Gill Sans MT&quot;,sans-serif">In 2022, CAFP hosted a webinar that responded to the severe global market disruptions resulting from the Russia-Ukraine conflict. The main thrust for the webinar was to deliberate on the implications of the Russia-Ukraine Conflict on Zimbabwe Food Security and explore mitigation measures as well as help guide policy responses. </span></span></span></p>

                         <p style="margin-left:0cm; margin-right:0cm; text-align:justify">&nbsp;</p>

                         <p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-family:&quot;Gill Sans MT&quot;,sans-serif">Technical and financial support from regional and country partners enabled CAFP to create knowledge products including:</span></span></span></p>

                         <ul>
                             <li style="text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-family:&quot;Gill Sans MT&quot;,sans-serif">A Digital Climate Adaptation in Agriculture Profile for Zimbabwe.</span></span></span></li>
                             <li style="text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-family:&quot;Gill Sans MT&quot;,sans-serif">A survey to assess biofortification technology adoption and impact of iron beans and vitamin A maize in selected provinces of Zimbabwe.</span></span></span></li>
                         </ul>

                         <p style="margin-left:0cm; margin-right:0cm; text-align:justify">&nbsp;</p>

                         <p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-family:&quot;Gill Sans MT&quot;,sans-serif">CAFP also helped to organise and participated in the 2022 ReSAKSS Annual Conference under the theme &ldquo;Agri-food Processing Strategies for Successful Food Transformation in Africa&rdquo;. The conference was a huge success and was graced by high level MLAFWRD officials. </span></span></span></p>

                         <p style="margin-left:0cm; margin-right:0cm; text-align:justify">&nbsp;</p>

                         <p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-family:&quot;Gill Sans MT&quot;,sans-serif">I</span></span></span><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-family:&quot;Gill Sans MT&quot;,sans-serif">n 2023, CAFP intend to capitalize on this momentum and continue to implement our 2021-2026 Strategic Plan. We will continue to strengthen partnerships, collaborations and outreach to benefit from synergies and broaden our impact. The Institution looks to better opportunities and mutually beneficial engagements in 2023. We are happy and proud to have worked with you in 2022 and look forward to continue working together in the New Year.</span></span></span></p>

                         <p style="margin-left:0cm; margin-right:0cm; text-align:justify">&nbsp;</p>

                         <p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-family:&quot;Gill Sans MT&quot;,sans-serif">We look forward to more collaboration in 2023!</span></span></span></p>

                         <p style="margin-left:0cm; margin-right:0cm; text-align:justify">&nbsp;</p>

                         <p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-family:&quot;Gill Sans MT&quot;,sans-serif">Dr T Takavarasha</span></span></span></p>

                         <p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><strong><span style="font-family:&quot;Gill Sans MT&quot;,sans-serif">Chairperson</span></strong></span></span></p>

                         <p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><strong><span style="font-family:&quot;Gill Sans MT&quot;,sans-serif">Center for Agriculture and Food Policy</span></strong></span></span></p>

                         <p style="margin-left:0cm; margin-right:0cm; text-align:justify">&nbsp;</p>

                         <p style="margin-left:0cm; margin-right:0cm; text-align:justify">&nbsp;</p>

                         </span>
                         <a style="color: blue;cursor: pointer;" onclick="myFunction()" id="myBtn">Read more</a>

                     </div>
                     <div class="col-lg-6">
                         <img style="width: 600px;" src="{{asset('2023.jpeg')}}">
                     </div>


                 </div>
             </div>--}}

            <div class="container">
                <div class="row">
                    @foreach($events as $event)
                        <div class="col-md-4 col-lg-4">
                            <div class="blog-box">
                                <img class="img-responsive" style="width: 460px;height: 260px;"
                                     src="{{asset($event->image)}}" alt="image">
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
    </div>
@stop

<script>
    function myFunction() {
        var dots = document.getElementById("dots");
        var moreText = document.getElementById("more");
        var btnText = document.getElementById("myBtn");

        if (dots.style.display === "none") {
            dots.style.display = "inline";
            btnText.innerHTML = "Read more";
            moreText.style.display = "none";
        } else {
            dots.style.display = "none";
            btnText.innerHTML = "Read less";
            moreText.style.display = "inline";
        }
    }
</script>

