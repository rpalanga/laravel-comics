<footer>
    <div id="top-footer" class="container-fluid d-flex ">
        <div class=" container links d-flex py-3">
            <div class="link-col text-white  pe-2 ">
                <h3>DC COMICS</h3>
                <ul  class=" list-unstyled p-0 opacity-50 ">
                    @foreach ($listOne as $listItem)
                        <li>
                            {{ $listItem }}
                        </li>
                    @endforeach
                </ul>
                    
                <h3>SHOP</h3>

                <ul  class=" list-unstyled p-0 opacity-50 ">
                    @foreach ($listTwo as $listItem)
                        <li>
                            {{ $listItem }}
                        </li>
                    @endforeach
                </ul>
                   
            </div>

            <div class="link-col-1 text-white pe-2">
                <h3>DC</h3>
                <ul  class=" list-unstyled p-0 opacity-50 ">
                    @foreach ($listThree as $listItem)
                        <li>
                            {{ $listItem }}
                        </li>
                    @endforeach
                </ul>
            </div>
            
            <div class="link-col-2 text-white pe-2">
                <h3>SITES</h3>
                
                <ul class="list-unstyled p-0 opacity-50 ">
                    @foreach ($listFour as $listItem)
                    <li>
                        {{ $listItem }}
                    </li>
                    @endforeach
                </ul>
            </div>

        </div>

        <img src="{{Vite :: asset ('resources/img/dc-logo-bg.png')}}" alt="">
    </div>

    <div id="down-footer" class="container-fluid bg-dark p-4 ">

        <div class="container d-flex  justify-content-between align-items-center">
            <div class="button text-white p-1" style="border:solid 2px #3880F1">
                SIGN-UP NOW
            </div>
            <div id="following " class="d-flex justify-content-between align-items-center gap-3 ">
                <div class=" fw-bolder d-flex justify-content-between align-items-center" style="color:#3880F1">
                    FOLLOW US
                </div>
                <div class="icon d-flex justify-content-between align-items-center gap-3">
                    <img src="{{Vite :: asset ('resources/img/footer-facebook.png')}}" alt="">
                    <img src="{{Vite :: asset ('resources/img/footer-twitter.png')}}" alt="">
                    <img src="{{Vite :: asset ('resources/img/footer-youtube.png')}}" alt="">
                    <img src="{{Vite :: asset ('resources/img/footer-pinterest.png')}}" alt="">
                    <img src="{{Vite :: asset ('resources/img/footer-periscope.png')}}" alt="">
                </div>
                
            </div>
        </div>

    </div>
</footer>