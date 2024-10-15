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
                <h4>2 ads</h4>

                <!-- Search Bar and Filters -->
                <div class="d-flex justify-content-between mb-3">
                    <input type="text" class="form-control w-25" placeholder="Search">
                    <div>
                        <button class="btn btn-outline-primary">Vente</button>
                        <button class="btn btn-outline-primary">Achat</button>
                        <button class="btn btn-outline-secondary">Annonces à actualiser</button>
                    </div>
                    <a href="#" class="btn btn-primary">+ Créer une annonce</a>
                </div>

                <!-- Ads List -->
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th><input type="checkbox"></th>
                            <th>Annonce</th>
                            <th>Statut</th>
                            <th>À faire</th>
                            <th>Boost</th>
                            <th>Coup de Coeur</th>
                            <th>Type</th>
                            <th>Emplacement</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Ad 1 -->
                        <tr>
                            <td><input type="checkbox"></td>
                            <td><i class="fa fa-home"></i> Cottage - Ra'anana</td>
                            <td><span class="badge bg-info">En cours</span></td>
                            <td><button class="btn btn-outline-primary btn-sm">Terminer</button></td>
                            <td>No</td>
                            <td><i class="fa fa-check-circle text-primary"></i> Yes</td>
                            <td>Achat</td>
                            <td>Ra'anana</td>
                            <td><a href="#" class="text-primary">Modify <i class="fa fa-pencil"></i></a></td>
                        </tr>
                        <!-- Ad 2 -->
                        <tr>
                            <td><input type="checkbox"></td>
                            <td><img src="path/to/apartment-image.jpg" alt="Apartment" width="50"> Appartement - Tel
                                Aviv</td>
                            <td><span class="badge bg-info">En cours</span></td>
                            <td><button class="btn btn-outline-primary btn-sm">Terminer</button></td>
                            <td>1/1</td>
                            <td>No</td>
                            <td>Location</td>
                            <td>Tel Aviv</td>
                            <td><a href="#" class="text-primary">Modify <i class="fa fa-pencil"></i></a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app>
