<x-layout.publish>
    <div x-cloak class="steps" x-data="{
        currentStep: new URL(window.location.href).searchParams.get('step') ?? 1,
        nextStep: step => {
            $data.currentStep = step;
            history.pushState(null, null, window.location.pathname + '?step=' + $data.currentStep)
        }
    }">

        <div class="step" x-show="currentStep == 1">
            <h1 class="step-title">
                <strong>Step 1 </strong> - <span>Property's address</span>
            </h1>
            @include('pages.agents.property.includes.form.sell.property_address')

            <div class="step-footer d-flex justify-content-between">
                <button class="btn btn-outline-dark"> <i class="fa fa-chevron-left"></i> Back</button>
                <button class="btn btn-dark" x-on:click="nextStep(2)"> Next <i class="fa fa-chevron-right"></i>
                </button>
            </div>
        </div>
        <div class="step" x-show="currentStep == 2">
            <h1 class="step-title">
                <strong>Step 2 </strong> - <span>About the property</span>
            </h1>
            @include('pages.agents.property.includes.form.sell.about_the_property')
            <div class="step-footer d-flex justify-content-between">
                <button class="btn btn-outline-dark" x-on:click="nextStep(1)"> <i class="fa fa-chevron-left"></i>
                    Back</button>
                <button class="btn btn-dark" x-on:click="nextStep(3)"> Next <i class="fa fa-chevron-right"></i>
                </button>
            </div>
        </div>
        <div class="step" x-show="currentStep == 3">
            <h1 class="step-title">
                <strong>Step 3 </strong> - <span>Description</span>
            </h1>
            @include('pages.agents.property.includes.form.sell.property_description')

            <div class="step-footer d-flex justify-content-between">
                <button class="btn btn-outline-dark" x-on:click="nextStep(2)"> <i class="fa fa-chevron-left"></i>
                    Back</button>
                <button class="btn btn-dark" x-on:click="nextStep(4)"> Next <i class="fa fa-chevron-right"></i>
                </button>
            </div>
        </div>

        <div class="step" x-show="currentStep == 4">
            <h1 class="step-title">
                <strong>Step 4 </strong> - <span>Photos and videos</span>
            </h1>

            @include('pages.agents.property.includes.form.sell.property_photos_and_videos')
            <div class="step-footer d-flex justify-content-between margin-top-70">
                <button class="btn btn-outline-dark" x-on:click="nextStep(3)"> <i class="fa fa-chevron-left"></i>
                    Back</button>
                <button class="btn btn-dark" x-on:click="nextStep(5)"> Next <i class="fa fa-chevron-right"></i>
                </button>
            </div>
        </div>
        <div class="step" x-show="currentStep == 5">
            <h1 class="step-title">
                <strong>Step 5 </strong> - <span>Contact Information</span>
            </h1>
            @include('pages.agents.property.includes.form.sell.contact_information')
        
            <div class="step-footer d-flex justify-content-between">
                <button class="btn btn-outline-dark" x-on:click="nextStep(4)"> <i class="fa fa-chevron-left"></i>
                    Back</button>
                <button class="btn btn-dark" type="submit"> Send <i class="fa fa-chevron-right"></i>
                </button>
            </div>
        </div>
    </div>


</x-layout.publish>
