@extends('default.index')

@section('style')
    <style>
        .packaging {
            height: 90vh;
            box-sizing: border-box;
        }

        .description {
            width: 50%;
            height: 55%;
            background-color: #f8b0ba;
            top: 60%;
            left: 30%;
            transform: translate(-30%, -60%);
        }

        .packing {
            width: 40%;
            top: 30%;
            left: 80%;
            transform: translate(-80%, -30%);
        }

        .title {
            background-color: white;
            padding: 0 3%;
            font-size: 35px;
            top: -10%;
            left: 10%;
            transform: translate(-10%, 10%);
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .about-packaging {
            text-align: justify;
            top: 20%;
            left: 10%;
            width: 55%;
            transform: translate(-10%, 0%);
        }

        .contact {
            height: 90vh;
            box-sizing: border-box;
            background-color: #f9d0c1;
        }

        .socmeds {
            width: 100%;
            height: 70%;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            margin: auto;
        }

        .social-media {
            flex: 0 1 200px;
            border-radius: 8px;
            margin: 1.5rem;
            background-color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        .socmed-tag {
            user-select: none;
            opacity: 0;
            transition: opacity 0.2s ease;
        }

        .social-media:hover .socmed-tag {
            opacity: 1;
        }
    </style>
@endsection()

@section('content')
    <div class="packaging w-100 position-relative">
        <div class="description position-absolute">
            <div class="title position-absolute">
                <label>MousseBite</label>
            </div>
            <div class="about-packaging position-absolute">
                The journey of MousseBite began on September 17, 2000. Starting from a small online shop, MousseBite has progressively transformed into a massive Mousse Dessert company and has 60 branches all around the world. Due to the high demand and its rapid development, on July 15, 2003, the MousseBite site was born and has been progressively developing more fresh and sweet mousse over 30 countries.
            </div>
        </div>
        <div class="packing position-absolute">
            <img src="./storage/images/logobanner/MousseBite[Packaging].png" width="100%" alt="">
        </div>
    </div>
    <div class="contact w-100 p-5">
        <div><h1 class="">Stay Connected</h1></div>
        <div class="socmeds">
            <div class="social-media">
                <i style="font-size: 8rem" class="fab fa-instagram-square"></i>
                <div class="socmed-tag">@mousse_bite</div>
            </div>
            <div class="social-media">
                <i style="font-size: 8rem" class="fab fa-facebook-square"></i>
                <div class="socmed-tag">@MousseBite</div>
            </div>
            <div class="social-media">
                <i style="font-size: 8rem" class="fab fa-twitter-square"></i>
                <div class="socmed-tag">@mousse_bite</div>
            </div>
            <div class="social-media">
                <i style="font-size: 8rem" class="fab fa-line"></i>
                <div class="socmed-tag">@mousse_bite</div>
            </div>
            <div class="social-media">
                <i style="font-size: 8rem" class="fab fa-whatsapp-square"></i>
                <div class="socmed-tag">087867564534</div>
            </div>
        </div>
    </div>
@endsection()