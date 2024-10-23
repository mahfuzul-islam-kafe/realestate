<x-app>

   
    <div class="container">
        <div class="fw-600 fs-25 margin-y-20 ">Favorites</div>
        <ul class="nav nav-underline margin-bottom-15 border-bottom">
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#">Buy</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Rent</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">New Projects</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Short Term</a>
            </li>
            
        </ul>   
        <div class="row  row-cols-lg-4 row-cols-md-2 row-cols-1 g-4 mb-4">
            @foreach ($properties as $property)
                <x-property-grid :property="$property" />
            @endforeach

        </div>
        {{ $properties->links() }}
    </div>
</x-app>
