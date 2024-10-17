<x-app>
    <div class="container mt-5">
        <h1 class="text-start margin-bottom-25 fs-25" style="color: #222222">Toutes les notifications</h1>

        <div class="search-container">
            <input type="text" class="form-control" placeholder="Rechercher dans les notifications">
            <button type="button" class="search-button">
                <i class="fa fa-search"></i>
            </button>
        </div>


        <div class="text-center margin-top-30 notification-message">
            <div class="mb-3">
                <img src="{{ asset('assets/images/attributes/message-sent.svg') }}" alt="">
            </div>
            <h2 class="fs-18 margin-bottom-15">Aucune nouvelle notification</h2>
            <p class="fs-15 margin-bottom-20">Nous vous souhaitons beaucoup de succès dans vos projets !</p>
            <a href="{{ route('home') }}" class="btn btn-primary rounded-pill padding-y-15 padding-x-25">Retourner à la
                page
                d'accueil</a>
        </div>
    </div>
</x-app>
