@extends('default.index')

@section('style')
    <style>
        .landing-page {
            background-color: #f8b0ba;
            height: 80vh;
            display: flex;
            justify-content: space-evenly;
            align-items: center;
            user-select: none;
        }

        .landing-page label {
            color: #a1776a;
            letter-spacing: 2px;
            font-size: large;
        }

        .top {
            padding: 7vh 0;
            height: 90vh;
            box-sizing: border-box;
            flex-direction: column;
        }

        .top-mousse-container {
            height: 50vh;
        }

        .testimony-image {
            width: 30%;
            height: 90%;
            background-size: cover;
            background-position: center;
        }

        .testimony-desc {
            width: 30%;
            text-align: justify;
        }

        .top-mousse {
            width: 30vw;
            height: 20vw;
            background-image: url("./storage/images/mousse/{{$recommended->image}}");
            background-size: cover;
            background-position: center;
            top: 50%;
            left: 75%;
            transform: translate(-75%, -50%);
            overflow: hidden;
        }

        .top-mousse-desc {
            width: 30vw;
            padding: 2%;
            box-sizing: border-box;
            background-color: floralwhite;
            top: 50%;
            left: 30%;
            transform: translate(-30%, -50%);
        }

        .padding-5 {
            padding: 2%;
            box-sizing: border-box;
        }

        .testimony {
            height: 90vh;
            background-color: #507796;
            padding: 7vh 0;
            box-sizing: border-box;
            flex-direction: column;
            color: white;
        }

        #testimony-carousel {
            width: 90%;
            height: 100%;
        }

        .carousel-inner, .carousel-item {
            height: 100%;
        }

        .carousel-item > div {
            width: 100%;
            height: 100%;
        }

        .fa-quote-left, .fa-quote-right {
            margin: 0 5px;
        }
    </style>
@endsection()

@section('content')
    <div class="landing-page">
        <div class="description">
            <div class="d-flex justify-content-center">
                <img src="./storage/images/logobanner/MousseBite-07.png" alt="">
            </div>
            <div class="d-flex justify-content-center">
                <label for="">Sweets for your every desire.</label>
            </div>
            <div>

            </div>
        </div>
        <div class="image">
            <img src="./storage/images/logobanner/MousseBite[transp]-01.png" alt="">
        </div>
    </div>
    <div class="top w-100 d-flex flex-wrap align-items-center">
        <div>
            <h1>Most Favorite Mousse</h1>
        </div>
        <div class="d-flex justify-content-center w-100 padding-5">
            <div class="position-relative w-100 top-mousse-container">
                <div class="top-mousse-desc position-absolute">
                    <h5>{{$recommended->name}}</h5>
                </div>
                <a href="/mousse/detail/{{$recommended->id}}">
                    <div class="top-mousse position-absolute"></div>
                </a>
            </div>
        </div>
    </div>
    <div class="testimony w-100 d-flex flex-wrap align-items-center">
        <div>
            <h1>What they say?</h1>
        </div>
        <div class="d-flex justify-content-center w-100 mt-5" style="height: 50%">
            <div id="testimony-carousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="d-flex justify-content-evenly align-items-center">
                            <div class="testimony-image" style="background-image: url('./storage/images/mousse/{{$testimonies[0]['image']}}')"></div>
                            <div class="testimony-desc">
                                <i class="fas fa-quote-left"></i>
                                {{$testimonies[0]['testimony']}}
                                <i class="fas fa-quote-right"></i>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="d-flex justify-content-evenly align-items-center">
                            <div class="testimony-image" style="background-image: url('./storage/images/mousse/{{$testimonies[1]['image']}}')"></div>
                            <div class="testimony-desc">
                                <i class="fas fa-quote-left"></i>
                                {{$testimonies[1]['testimony']}}
                                <i class="fas fa-quote-right"></i></div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="d-flex justify-content-evenly align-items-center">
                            <div class="testimony-image" style="background-image: url('./storage/images/mousse/{{$testimonies[2]['image']}}')"></div>
                            <div class="testimony-desc">
                                <i class="fas fa-quote-left"></i>
                                {{$testimonies[2]['testimony']}}
                                <i class="fas fa-quote-right"></i>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="d-flex justify-content-evenly align-items-center">
                            <div class="testimony-image" style="background-image: url('./storage/images/mousse/{{$testimonies[3]['image']}}')"></div>
                            <div class="testimony-desc">
                                <i class="fas fa-quote-left"></i>
                                {{$testimonies[3]['testimony']}}
                                <i class="fas fa-quote-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#testimony-carousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#testimony-carousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
@endsection()