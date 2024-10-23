<x-app>
    <style>
        .background-image {
            height: 600px;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-image: url({{ asset('assets/images/room.jpg') }});
            border-radius: 10px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .content {
            width: 800px;
        }

        .tags {
            padding: 24px 0 35px 24px;
        }

        .bg-tags {
            background-color: #F7F7F7;
            border-radius: 10px
        }

        .no-wrap {
            white-space: nowrap;
        }

        .personalized-img {
            height: 605px;
            border-radius: 21px;
        }

        .down-img {
            width: 100%;
            height: 590px;
            object-fit: cover;
            display: block;
        }
    </style>
    <div class="container">
        <section class="background-image margin-top-20">
            <div class="content">
                <div class="fw-500 fs-52 text-light text-center">
                    Discover My Kemea Experience
                </div>
                <div class="fw-300 fs-20 text-light text-center margin-top-30 p-3">Discover our exclusive selection of real
                    estate projects by registering for free, or opt for a personalized real estate hunting service to
                    find your property.
                    Registration on the Kemea platform is non-binding.</div>
                <div class="margin-top-35 col-6 text-center mx-auto">
                    <div class="row g-3 ">
                        <div class="col-md-6">
                            <a href="{{ route('login') }}"
                                class="btn btn-outline-light rounded-pill padding-y-16 padding-x-56">Log in</a>
                        </div>
                        <div class="col-md-6">
                            <a href="{{ route('register') }}"
                                class="btn btn-light rounded-pill padding-y-16 padding-x-56">Sign up</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="margin-top-65">
            <div class="row g-5">
                <div class="col-md-3  ">
                    <div class="tags bg-tags">
                        <div class="fw-500 fs-18">
                            Accélérez votre achat.
                        </div>
                        <div class="fw-300 fs-16">
                            Les taux augmentent, votre budget baisse.
                        </div>
                    </div>
                </div>
                <div class="col-md-3 ">
                    <div class="tags bg-tags">
                        <div class="fw-500 fs-18">
                            Achetez au bon prix.
                        </div>
                        <div class="fw-300 fs-16">
                            Le marché a évolué, nous négocions pour vous.
                        </div>
                    </div>
                </div>
                <div class="col-md-3 ">
                    <div class="tags bg-tags">
                        <div class="fw-500 fs-18">
                            Accédez à 100% des biens.
                        </div>
                        <div class="fw-300 fs-16">
                            Chercher sur les portails, cela ne suffit plus.
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="tags  bg-tags">
                        <div class="fw-500 fs-18">
                            Achetez sereinement.
                        </div>
                        <div class="fw-300 fs-16">
                            Défendre vos intérêts, c’est notre mission.
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="personalized margin-top-100">
            <div class="row ">
                <div class="col-md-6 margin-top-57 margin-bottom-30">
                    <div class="fw-500 fs-40">
                        More than just a personalized property service
                    </div>
                    <div class="fs-18 margin-top-25">
                        My Kemea supports Advices and researchs, Efficient visits, negociation assistance ...
                        Describe your project using the form provided.
                        After analyzing the feasibility of your project, a property hunter will be dedicated to your
                        search.
                        Thanks to our technology dedicated to sourcing and our privileged networks, your property hunter
                        sends you in real time the properties that correspond to your search.
                        You no longer miss anything in your personal space.
                    </div>
                    <a href="#" class="btn btn-dark rounded-pill padding-y-16 padding-x-42 margin-top-40">Start
                        now</a>
                </div>
                <div class="col-md-6 text-center">
                    <img src="{{ asset('assets/images/team.jpg') }}" alt="" class="personalized-img ">
                </div>
            </div>
        </section>
        <section class="margin-top-100">
            <div class="text-center">
                <div class="fw-500 fs-40">
                    Download our app
                </div>
                <div class="margin-top-20">Research, real estate lists, and more futures in one place.</div>
            </div>
            <div class="margin-top-30">
                <img src="{{ asset('assets/images/asset.jpg') }}" alt="" class="down-img  text-center">


                {{-- <div class="margin-top-35 border col-6 text-center mx-auto">
                    <div class="row g-3 ">
                        <div class="col-md-6">
                            <a href="{{ route('login') }}"
                                class="btn btn-outline-dark rounded-pill padding-y-16 padding-x-56">Log in</a>
                        </div>
                        <div class="col-md-6">
                            <a href="{{ route('register') }}"
                                class="btn btn-outline-dark rounded-pill padding-y-16 padding-x-56">Sign up</a>
                        </div>
                    </div>
                </div> --}}
                <div class="d-flex gap-3 justify-content-center margin-top-24">
                    <div class="">
                        <a href="#"
                            class="btn btn-outline-dark rounded-pill padding-y-16 padding-x-56">Iphone</a>
                    </div>
                    <div class="">
                        <a href="#"
                            class="btn btn-outline-dark rounded-pill padding-y-16 padding-x-56">Android</a>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

</x-app>
