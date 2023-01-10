@extends('layouts.app')
@section('content')



    <header class=" header ">

        <section class="hero container ">
            <div class="leftHero ">
                <h1 class="h1 ">Learn from home <i style="color:var(--color1) ; ">& </i>make skilled yourself</h1>
                <p class="section-subtitle ">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>

                <a class="btns " href="# ">Get Started</a>

            </div>
            <div class="ReightHero ">
                <img class="imghero " src="{{asset("images/hero.svg")}}" alt=" ">
            </div>

        </section>
    </header>
    <section class="CarouselWraper ">
        <h1 class=" sectiontitle "> Our Most Popular Courses </h1>
        <div class="Pslider container owl-carousel owl-theme ">
            <div class="card ">
                <img class="card-img-top " src="{{asset("images/img1.jpg")}}" alt="Card image cap ">
                <div class="card-body ">
                    <h5 class="card-title hover-1">Card title</h5>
                    <span class=" card-text  ">255 $</span>
                </div>
            </div>
            <div class="card ">
                <img class="card-img-top " src="{{asset("images/img2.jpg")}}" alt="Card image cap ">
                <div class="card-body  ">
                    <h5 class="card-title hover-1">Card title</h5>
                    <span class=" card-text  ">123 dh</span>
                </div>
            </div>
            <div class="card ">
                <img class="card-img-top " src="{{asset("images/img3.jpg")}}" alt="Card image cap ">
                <div class="card-body ">
                    <h5 class="card-title hover-1">Card sdscccc title</h5>
                    <span class=" card-text  ">123 £</span>
                </div>
            </div>
            <div class="card ">
                <img class="card-img-top " src="{{asset("images/img4.jpg")}}" alt="Card image cap ">
                <div class="card-body ">
                    <h5 class="card-title hover-1">Card title</h5>
                    <span class=" card-text  ">fre e</span>
                </div>
            </div>

        </div>


    </section>
    <section class="why ">
        <div class="whyimg has-bg-image " style="background-image: url({{asset("images/bgwhy.svg")}}); "></div>

        <div class=" whycard has-bg-image " style="background-image: url({{asset("images/bgwhy1.png")}}); ">
            <img class="ping " src="{{asset("images/ping.png")}} " alt=" ">
            <div class="card ">
                <h1 class="card-title ">Enhance Your Learning with us From Any Where</h1>
                <p class=" card-p ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio maxime impedit quasi repellat repellendus exercitationem!</p>
                <div class="reasoncard ">
                    <span>Expert Traineer</span>
                    <span>Creat result</span>
                    <span>Online learning</span>
                    <span>life time access</span>
                </div>
                <div class="cardend ">
                    <a class="btns " href=" ">Start Now</a>

                </div>
            </div>
        </div>
    </section>
    <section class="searchsection ">
        <div class="Cardsearch  ">
            <div class="CardInner">
                <label>Search for your favourite food</label>
                <div class="containerf">
                    <div class="Icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#657789" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
                    </div>
                    <div class="InputContainer">
                        <input placeholder="It just can't be pizza..." />
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection



















