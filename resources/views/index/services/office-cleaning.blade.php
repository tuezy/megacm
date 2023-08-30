@extends("index.layouts.app")
@section("content")
    <div class="block py-5">
        <div class="container">
            <h3 class="h3-title text-center">
                <span>We Provide Commercial Cleaning Services to</span>
            </h3>
            <div class="my-5 text-center">
                <img src="https://www.maidforyou.com.au/wp-content/uploads/2023/01/All-office-sizes-and-corporate-premises-in-Sydney.png" alt="">
                <p class="my-3 fw-bold">All office sizes and commercial premises in Sydney</p>
            </div>

            <div class="d-flex justify-content-center flex-wrap">
                <div class="col-lg-5">
                    <div role="listitem" class="fl-list-item fl-list-item-0">
                        <div class="fl-list-item-wrapper">
                            <div class="fl-list-item-heading">
                                <span class="fl-list-item-heading-icon fl-list-item-heading-left">
                                    <i class="fl-list-item-icon fas fa-check" aria-hidden="true"></i>
                                </span>
                                <span class="fl-list-item-heading-text fs-18 fw-bold">
                                    A Trained, Professional, Verified & Highly Experienced Cleaners
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div role="listitem" class="fl-list-item fl-list-item-0">
                        <div class="fl-list-item-wrapper">
                            <div class="fl-list-item-heading">
                                <span class="fl-list-item-heading-icon fl-list-item-heading-left">
                                    <i class="fl-list-item-icon fas fa-check" aria-hidden="true"></i>
                                </span>
                                <span class="fl-list-item-heading-text fs-18 fw-bold">
                                    All Equipment & Chemicals Provided
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div role="listitem" class="fl-list-item fl-list-item-0">
                        <div class="fl-list-item-wrapper">
                            <div class="fl-list-item-heading">
                                <span class="fl-list-item-heading-icon fl-list-item-heading-left">
                                    <i class="fl-list-item-icon fas fa-check" aria-hidden="true"></i>
                                </span>
                                <span class="fl-list-item-heading-text fs-18 fw-bold">
                                    Insured Service Against Damages
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div role="listitem" class="fl-list-item fl-list-item-0">
                        <div class="fl-list-item-wrapper">
                            <div class="fl-list-item-heading">
                                <span class="fl-list-item-heading-icon fl-list-item-heading-left">
                                    <i class="fl-list-item-icon fas fa-check" aria-hidden="true"></i>
                                </span>
                                <span class="fl-list-item-heading-text fs-18 fw-bold">
                                    Unlimited, Responsive Customer Service
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <div class="block py-5">
        <div class="container">
            <h3 class="h3-title text-center">
                <span>
                    Office Cleaning Pricing
                </span>
            </h3>
            <div id="price-table">
                <table class="w-75 mx-auto">
                    <tbody>
                    <tr>
                        <th>Service</th>
                        <th>Pricing</th>
                    </tr>
                    <tr>
                        <td>Office Cleaning</td>
                        <td>$55 Per hour per cleaner inclusive of GST</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td class="link"><a href="book-now">BOOK NOW</a></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="block py-5 bg-grey">
        <div class="container">
            <h3 class="h3-title text-center">
                    <span>
                        Your Office Cleaning Checklist
                    </span>
            </h3>
            <div>
                @include("index.components.checklist-tabs")
            </div>
        </div>
    </div>

    <div class="block py-10">
        <div class="container">
            <h3 class="h3-title text-center">
                    <span>
                        Service Exclusions
                    </span>
            </h3>
            <div class="col-11 mx-auto">
                <ul class="x_blc_service except">
                    <li>
                        <a href="https://www.maidforyou.com.au/services/">
                            <img decoding="async"
                                 src="https://www.maidforyou.com.au/wp-content/uploads/2023/01/Chandeliers.png"
                                 alt="House"
                                 data-ll-status="loaded"
                                 class="entered lazyloaded"
                            >

                            <p>Chandeliers
                            </p></a>
                    </li>
                    <li>
                        <a href="https://www.maidforyou.com.au/services/">
                            <img decoding="async"
                                 src="https://www.maidforyou.com.au/wp-content/uploads/2023/01/Wet-Wiping-Light.png"
                                 alt="House"
                                 data-ll-status="loaded"
                                 class="entered lazyloaded"
                            >
                            <p>
                                Wet Wiping Light Bulbs
                            </p>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.maidforyou.com.au/services/">
                            <img decoding="async"
                                 src="https://www.maidforyou.com.au/wp-content/uploads/2023/01/Light-Fixtures.png"
                                 alt="House"
                                 data-ll-status="loaded"
                                 class="entered lazyloaded"
                            >
                            <p>
                                Light Fixtures
                            </p>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.maidforyou.com.au/services/">
                            <img decoding="async"
                                 src="https://www.maidforyou.com.au/wp-content/uploads/2023/01/Biohazards.png"
                                 alt="House"
                                 data-ll-status="loaded"
                                 class="entered lazyloaded"
                            >
                            <p>
                                Biohazards
                            </p>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.maidforyou.com.au/services/">
                            <img decoding="async"
                                 src="https://www.maidforyou.com.au/wp-content/uploads/2023/01/Animal-Waste.png"
                                 alt="House"
                                 data-ll-status="loaded"
                                 class="entered lazyloaded"
                            >
                            <p>
                                Animal Waste
                            </p>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.maidforyou.com.au/services/">
                            <img decoding="async"
                                 src="https://www.maidforyou.com.au/wp-content/uploads/2023/01/High-Reach-Areas.png"
                                 alt="House"
                                 data-ll-status="loaded"
                                 class="entered lazyloaded"
                            >
                            <p>
                                High Reach Areas
                            </p>
                        </a>
                    </li>

                    <li>
                        <a href="https://www.maidforyou.com.au/services/">
                            <img decoding="async"
                                 src="https://www.maidforyou.com.au/wp-content/uploads/2023/01/Gardening.png"
                                 alt="House"
                                 data-ll-status="loaded"
                                 class="entered lazyloaded"
                            >
                            <p>
                                Gardening and Putting Dishes Away
                            </p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="block bg-grey py-8">
        <div class="container">
            <h3 class="h3-title text-center">
                    <span>
                        Office Cleaning in Sydney
                    </span>
            </h3>
            <div class="content-text">
                <div class="fl-rich-text">
                    <p>When things get hectic at the office, you can’t let cleanliness and order go out the window! This is a place where you spend a lot of hours and, more importantly, one where business meetings with potential clients are held. Therefore, the state of your office can say a lot about you and the way you run your business. It’s all about impressing clients and employees and, of course, maintaining a sanitary and organised office for your own good.<br>
                        <span class="text-style-5">&nbsp;</span><br>
                        With MaidForYou at your service, you will never have to worry about your Sydney office being clean or tidy enough for clients and employees to walk in to. We offer various types of office cleaning services in Sydney to ensure that all your cleaning needs are taken cared of in the most efficient manner regardless of the job type. Rest assured that MaidForYou is a reliable, flexible and trusted cleaning company with many years of experience in the cleaning industry. We cover all office areas like Sydney CBD, <a href="https://www.maidforyou.com.au/house-cleaning-north-sydney/"><span class="colorf58000">North Sydney</span></a>, Macquarie Park,&nbsp;<a href="https://www.maidforyou.com.au/house-cleaning-services-chatswood/"><span class="colorf58000">Chatswood</span></a>,&nbsp;<a href="https://www.maidforyou.com.au/house-cleaning-parramatta/"><span class="colorf58000">Parramatta</span></a>, and Norwest. We cover all essential office cleaning services like window cleaning, <a href="https://www.maidforyou.com.au/services/carpet-cleaning-sydney/">commercial carpet steam cleaning</a>, and commercial grade cleaning of office toilets, meeting rooms and common areas.</p>
                </div>
            </div>
        </div>
    </div>


    @include("index.components.faqs")

    <div class="block-qc py-5">
        <div class="container">
            <div class="text-center">
                <div class="row">
                    <div class="col fl-node-s89qvj6yfhac">
                        <div class="col-content"><div class="fl-module fl-module-heading fl-node-hyepdqzkl9ut" data-node="hyepdqzkl9ut">
                                <div class="fl-module-content">
                                    <h3 class="h3-title mb-0">
                                        <span class="fl-heading-text">We’re Committed To 200% Customer Satisfaction Each And Every Time</span>
                                    </h3>
                                </div>
                            </div>
                            <p>If you’re not happy with our work, we make it right!</p>
                            <a href="book-now" target="_self" class="btn btn-success btn-book-now">
                                <span class="fl-button-text">BOOK NOW</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection