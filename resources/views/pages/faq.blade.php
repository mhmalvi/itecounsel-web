@extends('layouts.app')
@push('seo')
    <meta name="keyword" content="html,css,XML,java script,meta tags">
    <meta name="keywords" content="Europe, study in europe,  right university, universities, beauty of Europe">
    <meta name="keywords" content="meta tags, meta description, meta keywords, SEO, search engine optimization">
    <meta name="description"
        content="Are you an ambitious researcher looking to boost your career? Europe offers you great opportunities.There were 1.58 million full time researchers">
    <meta tag="keywords"
        content="europe,study in europe,universities,beauty of europe,europa,uni,uts,um,harvard referencing,cmu,nu result,countries in europe,udc,undergraduate,du admission,student central,upenn,eastern europe,du result,swinburne,lpu ums,uow,unh,bu result,kth,nbu,top universities in the world,royal holloway,best universities in the world,ru result,western europe,bu result 2019,bgsu,times higher education,univ,jnu admission,top universities,ball state,ualbany,undergraduate degree,uchicago,fdu,ivy league colleges,ewu,degree result">

@endpush()
@section('content')

    <style>
        .faq{
            padding: 50px;
            width: 50%;
            float: left;
        }
        .fimg{
            padding: 50px;
            width: 50%;
            float: left;
        }
        .accordion {
            background-color: #eee;
            color: #444;
            cursor: pointer;
            padding: 18px;
            margin: 5px;
            width: 100%;
            border: none;
            text-align: left;
            outline: none;
            font-size: 15px;
            transition: 0.4s;
        }

        .active,
        .accordion:hover {
            background-color: #ccc;
        }

        .panel {
            padding: 0 20px;
            display: none;
            background-color: white;
            overflow: hidden;
        }

    </style>
    <div class="faq">
        <h2 class="h1">FAQ</h2>

        <button class="accordion">Why Choose ITEC?</button>
        <div class="panel">
            <p>ITEC is here for your abroad study solution in highly ranked universities providing scholarships.</p>
        </div>

        <button class="accordion">What makes me compatible for visa?</button>
        <div class="panel">
            <p>Our highly trained and professional consultants would help you to make you compatible by guiding you step by step for your visa.</p>
        </div>

        <button class="accordion">How long does it take to process visa?</button>
        <div class="panel">
            <p>It takes 15 days or longer for countries such as Australia, Canada and Europe once you step on the loop through this platform. In case of tourist visa for Malaysia, the process will take only 24</p>
        </div>

        <button class="accordion">Why does ITEC charge a fee?</button>
        <div class="panel">
            <p>Partly because we will work to save a considerable period of time for you that you may have had lost while carrying out everything single-handedly.</p>
        </div>
    </div>
    <div class="fimg">
        <img src="http://127.0.0.1:8000/assets/images/about/4026066rt.png" alt="image">
    </div>

    <script>
        var acc = document.getElementsByClassName("accordion");
        var i;

        for (i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var panel = this.nextElementSibling;
                if (panel.style.display === "block") {
                    panel.style.display = "none";
                } else {
                    panel.style.display = "block";
                }
            });
        }

    </script>



@endsection
