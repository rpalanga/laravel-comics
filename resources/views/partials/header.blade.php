<nav>
    <div class="container-fluid">
        <div class="container d-flex   justify-content-between  align-items-center gap-4 py-4">
            <img src="{{Vite :: asset ('resources/img/dc-logo.png')}}" alt="">
            <ul class="d-flex gap-3 ">
                @foreach ($section as $sectionItem)
                <li class=" list-unstyled fw-bolder ">
                    {{ $sectionItem }}
                </li>
                    
                @endforeach
            </ul>

            

    
        </div>

    </div>

</nav>