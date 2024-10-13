<x-auth>
    <section class="center-section margin-top-47">
        <div class="col-4 text-center">

            <div class="fw-500 fs-40 text-center ">Registration</div>
            {{-- <div class="fw-500 fs-40 text-center ">Login <br>& Registration</div>  dumn way to do it  --}}
            
        </div>
        <form action="" class="form col-5 margin-top-47">
            <div class="form-group margin-bottom-18">
                <label for="">First name</label>

                <input type="text" class="form-control rounded-pill" id="" placeholder="Juliette">
            </div>
            <div class="form-group margin-bottom-18">
                <label for="">Last name</label>

                <input type="text" class="form-control rounded-pill" id="email" placeholder="Dupont">
            </div>
            <div class="form-group margin-bottom-18">
                <label for="email">Email</label>

                <input type="text" class="form-control rounded-pill" id="email"
                    placeholder="Ex: juliette.dupont@mail.com">
            </div>
            <div class="form-group margin-bottom-18">
                <label for="password">Password</label>

                <input type="password" class="form-control rounded-pill" id="password" value="000000000000">
            </div>
            <div class="form-group margin-bottom-18">
                <label for="">Phone number</label>

                <input type="text" class="form-control rounded-pill" id="email" placeholder="">
            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" style="border-radius: 3px !important;">
                <label class="form-check-label" for="flexCheckDefault">
                    Receive Kemea communications
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" style="border-radius: 3px !important;">
                <label class="form-check-label" for="flexCheckDefault">
                    I accept the <a href="#">Terms of Service</a> and the <a href="#">Kemea Privacy Policy.</a>
                </label>
            </div>

            <button type="submit" class="btn btn-primary w-100 mt-3 rounded-pill margin-top-25 margin-bottom-52 fs-18">Sign
                up</button>
        </form>

    </section>
</x-auth>