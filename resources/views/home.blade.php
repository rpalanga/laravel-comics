@extends('layout/app')

@section('content')
    <main>
        <div id="jumbo" class="container-fluid m-0 p-0">
            <img src="{{Vite :: asset ('resources/img/jumbotron.jpg')}}" alt="" class="w-100 p-0 m-0">
        </div>

        <div  class="container-fluid bg-dark py-5 " style="position:relative">

            <div class=" text-white fw-bolder p-2 " style="background-color:#3880F1; position:absolute;top: 0px; transform: translateY(-50%); left: 80px; ">
                CURRENT SERIES
            </div>

            <div id="comics" class="container ">

                <div class="comics-list d-flex flex-wrap py-5 justify-content-center ">
                    
                    @foreach($comics as $comicsItem)
                    <div class="comics-item">
                        <img class="comics-img" src="{{$comicsItem['thumb']}}" alt="">
                        <div class="comics-title text-white ">{{$comicsItem['title']}} </div>
                    </div>
                    @endforeach

                </div>
                <div class="row justify-content-center">
                    <div class=" col-2 btn text-white  " style="background-color:#3880F1">
                        <span>LOAD MORE</span>
                    </div>
                    

                </div>
                
            </div>

        </div>
        <div id="blue-row" class="contanerier-fluid " style="background-color:#3880F1" >
            <div class="container  d-flex justify-content-center align-items-center py-5 gap-4">

                <div class="element">
                    <img src="{{Vite :: asset ('resources/img/buy-comics-digital-comics.png')}}" alt="">
                    <div class="description">DIGITAL COMICS</div>
                </div>

                <div class="element">
                    <img src="{{Vite :: asset ('resources/img/buy-comics-merchandise.png')}}" alt="">
                    <div class="description">DC MERCHANDISE</div>
                </div>

                <div class="element">
                    <img src="{{Vite :: asset ('resources/img/buy-comics-subscriptions.png')}}" alt="">
                    <div class="description">SUBSCRIPTION</div>
                </div>

                <div class="element">
                    <img src="{{Vite :: asset ('resources/img/buy-comics-shop-locator.png')}}" alt="">
                    <div class="description">COMICS SHOP LOCATOR</div>
                </div>


                <div class="element">
                    <img src="{{Vite :: asset ('resources/img/buy-dc-power-visa.svg')}}" alt="">
                    <div class="description">DC POWER VISA</div>
                </div>



            </div>
        </div>

        

    </main>
@endsection