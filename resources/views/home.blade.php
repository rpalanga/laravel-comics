@extends('layout/app')

@section('content')
    <main>
        <div id="jumbo" class="container-fluid m-0 p-0">
            <img src="{{Vite :: asset ('resources/img/jumbotron.jpg')}}" alt="" class="w-100 p-0 m-0">
        </div>

        <div  class="container-fluid bg-dark py-5">

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
    </main>
@endsection