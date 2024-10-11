<x-app>
    <section class="container margin-top-48 d-flex flex-column flex-gap-15 caros-soft">
        <h1 class="fs-35 fw-medium">Find the right property, right away</h1>
        <h2  class="fs-20 fw-100">Kemea supports your property research in Israel at every stage</h2>
    </section>
    <nav class="sticky-top margin-y-20 mx-0 padding-y-10 bg-light">
        <div class="container">
            
        </div>
    </nav>
    <section class="container">
        <div class="row  row-cols-lg-4 row-cols-md-2 row-cols-1 g-4">
            @for ($i = 1; $i <= 12; $i++)
                <x-property-grid/>
            @endfor

        </div>
    </section>
</x-app>
