<x-app>
    <section class="container margin-top-48">
        <h1 class="fs-35 fw-normal">Find the right property, right away</h1>
        <h2 class="fs-20 fw-normal">Kemea supports your property research in Israel at every stage</h2>
    </section>
    <section class="container">
        <div class="row row-cols-lg-4 row-cols-md-2 row-cols-1 g-4">
            @for ($i = 1; $i <= 10; $i++)
                <x-property-grid/>
            @endfor

        </div>
    </section>
</x-app>
