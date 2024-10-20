<x-app>
    <style>
        .header {
            color: #1D234E;
        }
        .text-blue{
            color: #1D234E;
        }
        .prévisualiser {
            border: 1px solid #2C2C46;
            border-radius: 6px;
            padding: 6px 12px;
            text-decoration: none;
        }
    </style>
    <div class="container">
        <a href="#" class="back d-flex align-items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-chevron-left" viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                    d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0" />
            </svg>
            <span class="ms-2">Go back</span>
        </a>
        <div class="header d-flex justify-content-between align-items-center margin-top-44">
            <div class="title">
                <div class="fw-500 fs-26">
                    Cottage - Eliezer Yaffe Street, Ra’anana
                </div>
            </div>
            <div class="right-nav ">
                <ul class="d-flex align-items-center list-unstyled m-0">
                    <!-- Masquée -->
                    <li class="me-3 d-flex align-items-center">
                        <a href="" class="text-blue">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                            style="margin-right: 8px; padding: 0;">
                            <circle cx="8" cy="8" r="6" fill="#C13515" />
                        </svg>
                        <span class="fw-500">Masquée</span>
                        </a>
                    </li>

                    <!-- Boost activée -->
                    <li class="me-3 d-flex align-items-center">
                       <a href="" class="text-blue">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-lightning-charge-fill" viewBox="0 0 16 16" style="color: #F1B417; margin-right: 8px;">
                            <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
                          </svg>
                        <span class="fw-500">Boost activée</span>
                       </a>
                    </li>

                    <!-- Prévisualiser l'annonce (Button) -->
                    <li class="d-flex align-items-center">
                        <a href="#" class="prévisualiser fw-500 text-blue">
                            Prévisualiser l'annonce
                        </a>
                    </li>
                </ul>

            </div>
        </div>
        <section class="row">
            <div class="col-md-4">

            </div>
            <div class="col-md-8">
                <div class="label">
                    <div class="fs-18">
                        Photos
                    </div>
                    <a href="#" class="back d-flex align-items-center">
                        <span class="ms-2">Modifier</span> 
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-chevron-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0" />
                        </svg>
                    </a>
                </div>
                
            </div>
        </section>
    </div>
</x-app>
