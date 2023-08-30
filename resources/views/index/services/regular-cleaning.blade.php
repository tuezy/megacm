@extends("index.layouts.app")
@section("content")
    <div class="block py-5 bg-grey">
        <div class="container">
            <div class="w-100 d-flex justify-content-evenly my-4">
                <div class="__image">
                    <img class="img-fluid"
                         src="https://www.maidforyou.com.au/wp-content/uploads/2023/01/Book-Your-Cleaning.png"
                         alt="https://www.maidforyou.com.au/wp-content/uploads/2023/01/Book-Your-Cleaning.png"
                    >
                </div>
                <div class="__image">
                    <img class="img-fluid"
                         src="https://www.maidforyou.com.au/wp-content/uploads/2023/01/Book-Your-Cleaning-with-maidforyou.png"
                         alt="https://www.maidforyou.com.au/wp-content/uploads/2023/01/Book-Your-Cleaning-with-maidforyou.png"
                    >
                </div>
                <div class="__image">
                    <img class="img-fluid" src="https://www.maidforyou.com.au/wp-content/uploads/2023/01/Book-Your-Cleaning-with-us1.png" alt="https://www.maidforyou.com.au/wp-content/uploads/2023/01/Book-Your-Cleaning.png">
                </div>
            </div>
            <h3 class="h3-title text-center my-4"><span>An All-around Regular Cleaning Service</span></h3>
            <div class="fl-rich-text">
                <p>
                    When you hire a regular house cleaning with us, you can be assured that ALL your home cleaning needs will be met. Our long-standing goal is to provide services that cover all home-related cleaning needs under one roof so that you never have to look any further than MaidForYou. To meet this goal, we accommodate special cleaning requests and offer multiple add-on services that go beyond regular cleaning. It’s all about putting in 200% in order to get the job done to your satisfaction. Our add-on services include window cleaning, changing bedsheets, and balcony, and oven cleaning just to name a few.
                </p>
                <p>
                    With many years of experience in the professional cleaning industry, it’s safe to say that our cleaners know how to maintain a spick and-span living space. What’s more, we are a team of highly qualified cleaning experts that work together in a safe and systematic manner to clean homes thoroughly and swiftly.
                </p>
            </div>
        </div>
    </div>
    <div class="block py-5">
        <div class="container">
            <h3 class="h3-title text-center">
                <span>How Much Do Our Regular Cleaning Services Cost?</span>
            </h3>
            <div>
                @include("index.partials.price-table")
            </div>
        </div>

    </div>
    <div class="block py-5">
        <div class="container">
            <h3 class="h3-title text-center">
                <span>Regular Cleaning by Trusted Cleaning Staff</span>
            </h3>
            <div class="row">
                <div class="col-lg-7">
                    {{ fake()->realText(1200) }}
                </div>
                <div class="col-lg-5">
                    <div class="__image d-lg-flex justify-content-end align-items-center">
                        <img src="{{ asset("images/Why-Choose-Maid-For-Yous-Office-Cleaning-Service.png") }}"
                             class="img-fluid w-480"
                             alt="Why-Choose-Maid-For-Yous-Office-Cleaning-Service.png">
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="block py-5 bg-grey">
        <div class="container">
            <h3 class="h3-title text-center">
                <span>What To Expect From Our Regular Cleaning Services</span>
            </h3>
            <div class="fl-rich-text">
                <p>How often do you find shoes lying out of place, or smudges on your mirrors? While this is not uncommon in many households, you needn’t have to live with this untidiness and lack of shine throughout your house. With MaidForYou’s regular cleaning services, you can expect complete cleanliness and neatness, with the added bonus of spotless and gleaming surfaces. We aim to make all things clean by the end of our service so that you never have to lift a finger to clean after a long, tiring day. We also offer <a href="https://www.maidforyou.com.au/services/deep-cleaning-services-sydney/">deep cleaning services</a>, <a href="https://www.maidforyou.com.au/services/office-cleaning-sydney/">office cleaning</a>, <a href="https://www.maidforyou.com.au/services/end-of-lease-cleaning-sydney/">real estate cleaning</a>, and much more.<br>
                    <span class="text-style">&nbsp;</span><br>
                    For those of you looking to hire a reputable company that offers regular house cleaning services, <strong>MaidForYou</strong> is happy to give you a taste of what a squeaky clean living space looks like. Some of the cleaning tasks you can expect with <strong>MaidForYou’s</strong> regular <a href="https://www.maidforyou.com.au/services-pricing/">home cleaning services</a> include – dusting of furniture and other surfaces; thorough vacuuming/sweeping; mopping of floors; cleaning and scrubbing of bathrooms; tidying up shoes and clothes; cleaning mirrors; and making up beds. All in all, you get a cleaning service that is more than happy to go the distance to make your home as clean and tidy as can be!</p>
            </div>
        </div>
    </div>
    @include("index.components.faqs")
@endsection