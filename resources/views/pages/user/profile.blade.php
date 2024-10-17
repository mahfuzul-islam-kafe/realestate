<x-app>
    <div class="container mt-5">
        <h1 class="margin-bottom-30 fs-25">Profile</h1>

        <div class="row g-4">
            <div class="col-md-7">
                <div class="profile-card shadow padding-y-35 padding-x-20">
                    <h5 class="fs-18 margin-bottom-23">Identité</h5>

                    <form action="{{ route('user.profile.update') }}" method="POST">
                        @csrf
                        <div class="row g-3 margin-bottom-18">
                            <div class="col-md-4">
                                <select class="form-select rounded-pill" name="sex">
                                    <option value="Monsieur"
                                        {{ isset(auth()->user()->sex) && auth()->user()->sex == 'Monsieur' ? 'selected' : '' }}>
                                        Monsieur</option>
                                    <option value="Madame"
                                        {{ isset(auth()->user()->sex) && auth()->user()->sex == 'Madame' ? 'selected' : '' }}>
                                        Madame</option>
                                </select>
                            </div>

                            <div class="col-md-4">
                                <input type="text" class="form-control rounded-pill" name="name"
                                    value="{{ isset(auth()->user()->name) ? auth()->user()->name : '' }}"
                                    placeholder="John">
                            </div>

                            <div class="col-md-4">
                                <input type="text" class="form-control rounded-pill" name="last_name"
                                    value="{{ isset(auth()->user()->last_name) ? auth()->user()->last_name : '' }}"
                                    placeholder="Doe">
                            </div>
                        </div>

                        <div class="row g-3 margin-bottom-18">
                            <div class="col-md-6">
                                <div class="input-group">
                                    <span class="input-group-text rounded-start-pill">
                                        <img src="{{ asset('assets/images/attributes/flag.svg') }}" alt="flag"
                                            style="width: 20px;">
                                        +972
                                    </span>
                                    <input type="text" class="form-control rounded-end-pill" name="phone"
                                        value="{{ isset(auth()->user()->phone) ? auth()->user()->phone : '' }}"
                                        placeholder="53 288 9282">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <input type="email" class="form-control rounded-pill" name="email"
                                    value="{{ isset(auth()->user()->email) ? auth()->user()->email : '' }}"
                                    placeholder="johndoe@gmail.com">
                            </div>
                        </div>

                        <div class="row g-3 mt-3">
                            <div class="col-md-4">
                                <input type="date" class="form-control rounded-pill" name="birth_date"
                                    value="{{ isset(auth()->user()->birth_date) ? auth()->user()->birth_date : '' }}">
                            </div>
                            <div class="col-md-4">
                                <input type="text" class="form-control rounded-pill" name="birth_place"
                                    value="{{ isset(auth()->user()->birth_place) ? auth()->user()->birth_place : '' }}"
                                    placeholder="Lieu de naissance">
                            </div>
                            <div class="col-md-4">
                                <select class="form-select rounded-pill" name="nationality">
                                    <option value="French"
                                        {{ isset(auth()->user()->nationality) && auth()->user()->nationality == 'French' ? 'selected' : '' }}>
                                        French</option>
                                </select>
                            </div>
                        </div>

                        <div class="d-flex justify-content-end mt-4">
                            <button type="submit" class="btn btn-primary px-5 py-2">Submit</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-md-5">
                <div class="profile-card shadow padding-x-25 padding-y-22">
                    <h5 class="fs-18 margin-bottom-22">Modifier mon mot de passe</h5>
                    <form action="{{ route('user.password.update') }}" method="POST">
                        @csrf
                        <div class="margin-bottom-17">
                            <input type="password" class="form-control rounded-pill" name="current_password"
                                placeholder="Mot de passe actuel" required>
                        </div>
                        <div class="margin-bottom-24">
                            <input type="password" class="form-control rounded-pill" name="new_password"
                                placeholder="Nouveau mot de passe" required>
                        </div>
                        <div class="margin-bottom-24">
                            <input type="password" class="form-control rounded-pill" name="new_password_confirmation"
                                placeholder="Confirmer le nouveau mot de passe" required>
                        </div>
                        <button type="submit" class="btn btn-primary btn-profile w-100">Changer mon mot de
                            passe</button>
                    </form>

                    <div class="margin-top-5 deactivate-account ">
                        <a href="#"data-bs-toggle="modal"
                            class="{{ auth()->user()->status === 1 ? 'text-danger' : 'text-success' }}"
                            data-bs-target="#toggleStatusModal">{{ auth()->user()->status === 1 ? 'Deactivate Account' : 'Reactivate Account' }}</a>
                    </div>
                </div>
            </div>
        </div>


    </div>
    <div class="container margin-top-55 margin-bottom-35">
        <h3 class="margin-bottom-30 fs-25">Mon mandat</h3>
        <div class="row">
            <div class="col-md-3">
                <div class="mandat-card p-4 rounded-3">
                    <p>Aucun frais associé tant que votre offre n'est pas validée et que votre projet n'est pas
                        vérifié</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="mandat-card p-4 rounded-3">
                    <p>Non-exclusif vous n'êtes pas obligés de passer par nous si vous changez d'avis</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="mandat-card p-4 rounded-3">
                    <p>Un seul engagement ne pas acheter un des biens</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="toggleStatusModal" tabindex="-1" aria-labelledby="toggleStatusModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="toggleStatusModalLabel">
                        {{ auth()->user()->status === 1 ? 'Confirm Account Deactivation' : 'Confirm Account Reactivation' }}
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    {{ auth()->user()->status === 1 ? 'Are you sure you want to deactivate your account?' : 'Are you sure you want to reactivate your account?' }}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <form action="{{ route('user.account.deactivate') }}" method="POST">
                        @csrf
                        <button type="submit"
                            class="btn text-white {{ auth()->user()->status === 1 ? 'btn-danger ' : 'btn-success' }}">
                            {{ auth()->user()->status === 1 ? 'Deactivate' : 'Reactivate' }}
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app>
