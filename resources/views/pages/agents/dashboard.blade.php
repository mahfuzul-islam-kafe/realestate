<x-app>
    <div class="container">
        <!-- Welcome message -->
        <div class="row mt-4">
            <div class="col-md-12 text-center">

                <h2>We are happy to have you back, {{ Auth::user()->name }}!</h2>
            </div>
        </div>

        <!-- Ads Table -->
        <div class="row mt-4">
            <div class="col-md-12">
                <div class="d-flex justify-content-between align-items-center mb-2">
                    <h4>2 ads</h4>
                    <a href="#" class="btn btn-primary">+ Créer une annonce</a>
                </div>
                <div class="d-flex justify-content-start mb-3">
                    <input type="text" class="form-control w-25" placeholder="Search">
                    <div class="margin-left-20">
                        <button class="btn btn-outline-dark">Vente</button>
                        <button class="btn btn-outline-dark">Achat</button>
                        <button class="btn btn-outline-dark">Annonces à actualiser</button>
                    </div>

                </div>

                <!-- Ads List -->
                <table class="agent-dashboard-table table table-striped table-hover" style="color: #1D234E">
                    <thead>
                        <tr class="fs-12 table-header">
                            <th><input type="checkbox"></th>
                            <th class="fw-400">Annonce</th>
                            <th class="fw-400">Statut</th>
                            <th class="fw-400">À faire</th>
                            <th class="fw-400">Boost</th>
                            <th class="fw-400">Coup de Coeur</th>
                            <th class="fw-400">Type</th>
                            <th class="fw-400">Emplacement</th>
                            <th class="fw-400">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="fs-14">
                        <!-- Ad 1 -->
                        <tr>
                            <td><input type="checkbox"></td>
                            <td class="text-dark-primary"><i class="fa fa-home"></i> Cottage - Ra'anana</td>
                            <td class="text-dark-primary"><span style="color: #1D234E"><img
                                        src="{{ asset('assets/images/attributes/encours.svg') }}" alt=""
                                        class="me-2">En cours</span></td>
                            <td class="text-dark-primary"><button class="btn btn-outline-dark btn-sm">Terminer</button>
                            </td>
                            <td class="text-dark-primary"><i class="fa-solid fa-circle-check"
                                    style="color: #dddddd;"></i> No</td>
                            <td class="text-dark-primary"><i class="fa fa-check-circle text-primary"></i> Yes</td>
                            <td class="text-dark-primary">Achat</td>
                            <td class="text-dark-primary">Ra'anana</td>
                            <td><a href="#" class="text-dark-primary">Modify <i class="fa fa-pencil"></i></a></td>
                        </tr>
                        <!-- Ad 2 -->
                        <tr>
                            <td><input type="checkbox"></td>
                            <td><img src="path/to/apartment-image.jpg" alt="Apartment" width="50"> Appartement - Tel
                                Aviv</td>
                            <td><span style="color: #1D234E"><img
                                        src="{{ asset('assets/images/attributes/encours.svg') }}" alt=""
                                        class="me-2">En cours</span></td>
                            <td><button class="btn btn-outline-dark btn-sm">Terminer</button></td>
                            <td><i class="fa fa-check-circle text-primary"></i> 1/1</td>
                            <td><i class="fa-solid fa-circle-check" style="color: #dddddd;"></i> No</td>
                            <td>Location</td>
                            <td>Tel Aviv</td>
                            <td><a href="#" class="text-dark-primary">Modify <i class="fa fa-pencil"></i></a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app>
