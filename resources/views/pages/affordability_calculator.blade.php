<x-app>
    <div class="container">
        <ul class="breadcrumb fs-13 margin-top-19 margin-bottom-45">
            <li>Kemea</li>
            <li><a href="">Affordability Calculator</a></li>
        </ul>

        <section class="responsive-padding affordability_calculator margin-bottom-30">
            <div class="text-center">
                <h1 class="text-center fs-22 text-uppercase">Affordability calculator</h1>
                <div class="mx-auto hr shadow">
                    <hr>
                </div>
            </div>
            <div class="row margin-top-80 justify-content-between">
                <div class="col-desk-mobile-440">
                    <div class="d-flex justify-content-between fs-17 fw-600 margin-bottom-15">
                        <span>Net Income</span>
                        <span>₪69,000</span>
                    </div>
                    <form>
                        <div class="margin-bottom-28">
                            <label for="income" class="form-label margin-bottom-4">Annual household income <span
                                    class="text-danger">*</span></label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="income" placeholder="$75,000">
                                <span class="input-group-text">/ year</span>
                            </div>
                            <small class="form-text text-muted margin-top-10">Before taxes. Include any co-buyer’s
                                income.</small>
                        </div>

                        <div class="margin-bottom-28">
                            <label for="debts" class="form-label margin-bottom-4">Monthly debts <span
                                    class="text-danger">*</span></label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="debts" placeholder="$500">
                                <span class="input-group-text">/ month</span>
                            </div>
                            <small class="form-text text-muted margin-top-10">Obligations like loan and debt payments or
                                alimony, but
                                not costs like groceries or utilities.</small>
                        </div>

                        <div class="margin-bottom-28">
                            <p class="fs-17 margin-bottom-13 fw-600">Down Payment</p>
                            <label for="cash" class="form-label margin-bottom-4">Cash <span
                                    class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="cash" placeholder="$50,000">
                            <small class="form-text text-muted margin-top-10">Cash you can pay when you close.</small>
                        </div>

                        <div class="margin-bottom-35">
                            <p class="fs-17 margin-bottom-15 fw-600">Location</p>
                            <label for="buyingLocation" class="form-label margin-bottom-4">Where are you buying?</label>
                            <input type="text" class="form-control" id="buyingLocation"
                                placeholder="City, neighborhood, or zip">
                            <small class="form-text text-muted margin-top-10">To calculate local taxes and
                                costs.</small>
                        </div>
                    </form>

                </div>
                <div class="col-desk-mobile-666 margin-top-13">
                    <div class="shadow padding-x-25 padding-y-40 border-radius-8">
                        <div class="card  card-custom">
                            <div class="currency-symbol d-flex">₪ <span class="currency-dash">---,---</span></div>
                            <div class="row margin-top-33 margin-bottom-28">
                                <div class="col-6">
                                    <p class="mb-0 fs-20">Monthly payment</p>
                                </div>
                                <div class="col-6 text-end d-flex justify-content-end align-items-center">
                                    <div class="margin-right-10 fs-19">₪ <span class="currency-dash">-,---</span></div>
                                    <img src="{{ asset('assets/images/attributes/info.svg') }}" alt=""
                                        style="height: 22px; width: 22px;">
                                </div>
                            </div>

                            <div class="margin-bottom-45 d-flex justify-content-between align-items-center">
                                <p class=" fs-19">Down payment</p>
                                <p class="mb-0"><span class="currency-dash">--.--</span> %</p>
                            </div>

                            <div class="margin-bottom-24">
                                <p class="progress-label fw-600">Debt-to-income ratio:</p>
                            </div>
                            <div class="margin-bottom-20">
                                <h4 class="fs-26"><strong style="color: #333333">36%</strong> | <span
                                        class="comportable">Comfortable</span></h4>
                            </div>
                            <div class="margin-bottom-35 padding-x-50">
                                <input type="range" name="gdas-range" min="0" max="100" step="5"
                                    value="54" class="styled-slider slider-progress">
                            </div>

                            <hr>
                            <div class="margin-top-15 text-muted d-flex justify-content-between align-items-center">
                                <p class="m-0">Add a location to see homes that fit your budget</p>
                                <img src="{{ asset('assets/images/attributes/location.svg') }}" alt=""
                                    srcset="">
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </section>
        <section class="container-fluid margin-top-40">
            <div class="row">
                <div class="col-12 text-center">
                    <h2 class="margin-top-15 fs-28">How we calculate how much house you can afford?</h2>
                </div>

                <div class="col-12">
                    <h3 class="fs-15 fw-900 margin-top-78">1. RÉFÉRENCEMENT ET DÉRÉFÉRENCEMENT DES ANNONCEURS :</h3>
                </div>

                <div class="col-12">
                    <h4 class="fs-15 fw-600 margin-top-40">(i) Référencement des Annonceurs :</h4>
                </div>
                <div class="col-12">
                    <p class="margin-top-18">
                        La diffusion d’annonces sur le Site est réservée aux Annonceurs définis ci-dessous :
                    </p>
                    <p class="margin-top-16">
                        (i) Annonceurs professionnels ayant souscrit à titre payant un contrat de diffusion d’annonces
                        de vente de biens immobiliers avec la société DCF et entrant dans l’une des catégories suivantes
                        :
                    </p>
                </div>

                <div class="col-12">
                    <ul class="margin-top-12">
                        <li>Les professionnels de l’immobilier détenant une carte de transaction ou de gestion
                            conformément à la loi Hoguet n° 70-9 du 2 janvier 1970,</li>
                        <li>Les notaires,</li>
                        <li>Les avocats exerçant à titre accessoire l’activité de mandataire en transactions
                            immobilières,</li>
                        <li>Les huissiers,</li>
                        <li>Les promoteurs immobiliers,</li>
                        <li>Les constructeurs.</li>
                    </ul>
                </div>

                <div class="col-12">
                    <h4 class="fs-15 fw-600 margin-top-40">(ii) Référencement des Annonces :</h4>
                </div>
                <div class="col-12">
                    <p class="margin-top-18">
                        Pour être référencée sur le Site et donc diffusée, une Annonce doit impérativement respecter les
                        règles décrites ci-dessous.
                    </p>
                    <p class="text-decoration-underline fw-500 margin-top-25 padding-left-40">Contenu de l'Annonce</p>
                    <p>
                        Le bien doit être diffusé dans sa catégorie et être conforme aux produits de diffusion souscrits
                        par l’Annonceur. Sur le Site, l’Annonce ne peut porter que sur :
                    </p>
                    <ul style="list-style: none;">
                        <li><span class="margin-right-5">-</span>La vente et la location de biens anciens, ayant déjà
                            fait l'objet d'un transfert de propriété;</li>
                        <li><span class="margin-right-5">-</span>La vente de lots associés à des programmes immobiliers
                            neufs, n'ayant pas encore fait l'objet d'un transfert de propriété.</li>
                    </ul>
                </div>

                <div class="col-12">
                    <p>
                        <a href="https://support.myselogerpro.com/hc/fr/articles/360000607939-Charte-SeLoger"
                            class="text-decoration-underline text-wrap"
                            target="_blank">https://support.myselogerpro.com/hc/fr/articles/360000607939-Charte-SeLoger</a>
                    </p>
                </div>

                <div class="col-12">
                    <p class="text-decoration-underline fw-500 margin-top-35 padding-left-40">Contenu interdit au sein
                        d'une Annonce</p>
                    <p>
                        Toute Annonce contenant des éléments qui sembleraient contraires aux dispositions légales ou
                        réglementaires, aux bonnes mœurs, aux règles de diffusion de notre Site ou susceptible de
                        heurter les utilisateurs sera immédiatement refusée par la société DCF, donc non référencée sur
                        le Site.
                    </p>
                    <ul>
                        <li>Tout contenu rédigé en langue étrangère comportant des termes ou des descriptions sans lien
                            avec le contenu proposé ;</li>
                        <li>Tout contenu comportant des termes ou des descriptions sans lien avec le contenu proposé ;
                        </li>
                        <li>Tout contenu portant sur un bien immobilier ou un programme de construction fictif ;</li>
                        <li>Tout contenu frauduleux, ou visant à tromper l’utilisateur ;</li>
                        <li>Tout contenu à caractère politique, religieux ou haineux ;</li>
                        <li>Tout contenu à caractère promotionnel et/ou publicitaire ;</li>
                        <li>Toute image ou photographie sans lien avec l’offre proposée, ou encore contrefaite, ou à
                            caractère pornographique.</li>
                    </ul>
                </div>

                <div class="col-10">
                    <div class="table-responsive d-flex justify-content-center margin-top-80 margin-bottom-100">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Percentage</th>
                                    <th>Down Payment</th>
                                    <th>Home Price</th>
                                    <th>Monthly Mortgage Payment</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>20%</td>
                                    <td>$60,000</td>
                                    <td>$300,000</td>
                                    <td>$1,779.39</td>
                                </tr>
                                <tr>
                                    <td>15%</td>
                                    <td>$45,000</td>
                                    <td>$300,000</td>
                                    <td>$1,253.10</td>
                                </tr>
                                <tr>
                                    <td>10%</td>
                                    <td>$30,000</td>
                                    <td>$300,000</td>
                                    <td>$1,326.82</td>
                                </tr>
                                <tr>
                                    <td>5%</td>
                                    <td>$15,000</td>
                                    <td>$300,000</td>
                                    <td>$1,400.53</td>
                                </tr>
                                <tr>
                                    <td>0%</td>
                                    <td>$0</td>
                                    <td>$300,000</td>
                                    <td>$1,474.24</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="col-12">
                    <h4 class="margin-top-40 fs-15 fw-600">(ii) Référencement des Annonces :</h4>
                    <p>
                        Pour être référencé sur le Site et donc diffusée, une Annonce doit impérativement respecter les
                        règles décrites ci-dessous.
                    </p>
                    <p class="text-decoration-underline fw-500 margin-top-35 padding-left-40">Contenu de l'Annonce</p>
                    <p>
                        Le bien doit être diffusé dans sa catégorie et être conforme aux produits de diffusion souscrits
                        par l’Annonceur. Sur le Site, l’Annonce ne peut porter que sur :
                    </p>
                    <ul style="list-style: none;">
                        <li><span class="margin-right-5">-</span>la vente et la location de biens anciens, ayant déjà
                            fait l'objet d'un transfert de propriété ;</li>
                        <li><span class="margin-right-5">-</span>la vente de lots associés à des programmes immobiliers
                            neufs, n'ayant pas encore fait l'objet d'un transfert de propriété.</li>
                    </ul>
                </div>

                <div class="col-12">
                    <p>
                        <a class="text-decoration-underline text-wrap"
                            href="https://support.myselogerpro.com/hc/fr/articles/360006057939--Charte-SeLoger">https://support.myselogerpro.com/hc/fr/articles/360006057939--Charte-SeLoger</a>
                    </p>
                </div>

                <div class="col-12">
                    <p class="text-decoration-underline fw-500 margin-top-35 padding-left-40">Contenu interdit au sein
                        d'une Annonce</p>
                    <p>
                        Toute Annonce contenant des éléments qui sembleraient contraires aux dispositions légales ou
                        réglementaires, aux bonnes mœurs, aux règles de diffusion de notre Site ou susceptible de
                        heurter les utilisateurs sera immédiatement refusée par la société DCF, donc non référencée sur
                        le Site.
                    </p>
                    <ul>
                        <li>Tout contenu rédigé en langue étrangère comportant des termes ou des descriptions sans lien
                            avec le contenu proposé ;</li>
                        <li>Tout contenu comportant des termes ou des descriptions sans lien avec le contenu proposé ;
                        </li>
                        <li>Tout contenu portant sur un bien immobilier ou un programme de construction fictif ;</li>
                        <li>Tout contenu frauduleux, au vouloir à tromper l’utilisateur ;</li>
                        <li>Toute annonce à caractère politique, religieux ou haineux ;</li>
                        <li>Tout contenu à caractère promotionnel et/ou publicitaire ;</li>
                        <li>Toute image ou photographie sans lien avec l’offre proposée, non autorisée, contrefaite, ou
                            encore à caractère pornographique.</li>
                    </ul>
                </div>
            </div>
        </section>

    </div>

</x-app>
