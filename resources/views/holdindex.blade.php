@extends('layouts.site')
@section('content')
    <link href="https://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet"
          id="bootstrap-css">
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <style type="text/css">
        #myCarousel .nav {
            background: #eee;
        }

        #myCarousel .nav a {
            border-radius: 0px;
        }
    </style>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#myCarousel').carousel({
                interval: 3000
            });

            var clickEvent = false;
            $('#myCarousel').on('click', '.nav a', function () {
                clickEvent = true;
                $('.nav li').removeClass('active');
                $(this).parent().addClass('active');
            }).on('slid.bs.carousel', function (e) {
                if (!clickEvent) {
                    var count = $('.nav').children().length - 1;
                    var current = $('.nav li.active');
                    current.removeClass('active').next().addClass('active');
                    var id = parseInt(current.data('slide-to'));
                    if (count == id) {
                        $('.nav li').first().addClass('active');
                    }
                }
                clickEvent = false;
            });
        });
    </script>

    <div class="container">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div style="height: 600px" class="carousel-inner">
                @foreach($articles as $article)
                    <div class="item {{$x == 0 ? 'active':''}}">
                        <img src="{{asset($article->image)}}">
                        <div class="carousel-caption">
                            <h3 style="background-color: grey;">{!! $article->name !!}</h3>
                            <p>
                                <a href="{{url('/articles/'.$article->id)}}" target="_blank"
                                   class="btn btn-success">Red More
                                </a>
                            </p>

                        </div>
                    </div>
                    <span style="display: none;">{{$x = $x + 1}}</span>
                @endforeach

            </div><!-- End Carousel Inner -->
            <ul class="nav nav-pills nav-justified">
                @foreach($articles as $article)
                    <li data-target="#myCarousel" data-slide-to="{{$z}}" class="{{$z == 0 ? 'active':''}}">
                        <a style="background-color: white;" href="#">
                            <img style="width: 200px;height: 100px;" src="{{asset($article->image)}}">
                            <br/>
                            <h6 style="text-align: center;color: black;">{!! $article->name !!}</h6>
                        </a>
                    </li>
                    <span style="display: none;">{{$z = $z + 1}}</span>
                @endforeach
            </ul>

        </div><!-- End Carousel -->
    </div>


@stop
