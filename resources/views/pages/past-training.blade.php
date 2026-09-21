<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Past Training</title>
</head>
<body>
  @extends('layout.app')

@section('title')
Training Programs
@endsection

@section('content')
<br>

<section class="tp-training">

    <div class="tp-container">

        <!-- HERO -->
        <div class="tp-hero" data-aos="fade-up">
            <h1 class="tp-title">2 Day Practical Training Workshop on</h1>
            <h2 class="tp-subtitle">Drilling Bits & Drilling Assembly Tools</h2>

            <p class="tp-desc">
                Gain practical drilling knowledge from globally experienced field engineers and boost your oil & gas
                career.
            </p>
        </div>


        <!-- GRID -->
        <div class="tp-grid">

            <!-- LEFT -->
            <div data-aos="fade-right">

                <div class="tp-card">
                    <h3 class="tp-card-title">Who Should Attend</h3>

                    <ul class="tp-list">
                        <li>Managers or Field Engineers transitioning into Oil & Gas Drilling Engineering.</li>
                        <li>Field Engineers seeking advanced drilling skills for career growth.</li>
                        <li>Graduates preparing to excel in drilling job interviews.</li>
                    </ul>
                </div>


                <div class="tp-card">
                    <h3 class="tp-card-title">Workshop Details</h3>

                    <p class="tp-text"><strong>Date:</strong> 22nd & 23rd January 2026</p>

                    <p class="tp-text">
                        <strong>Venue:</strong> Skills Development Centre, KM 8 East West Road
                        (Adjacent to Adamac), Port Harcourt, Rivers State.
                    </p>
                </div>


                <div class="tp-card">
                    <h3 class="tp-card-title">About the Instructors</h3>

                    <p class="tp-text">
                        <strong>Deji Kareem</strong> & <strong>Ogu Charles</strong> bring over
                        50 years of global field experience with Baker Hughes,
                        Schlumberger, and Halliburton.
                    </p>
                </div>

            </div>


            <!-- RIGHT -->
            <div data-aos="fade-left">

                <div class="tp-card">
                    <h3 class="tp-card-title">Drilling Bits Technology</h3>

                    <ul class="tp-list">
                        <li>Bit types & applications</li>
                        <li>Selection criteria (CFD, cutter patterns)</li>
                        <li>Real-time drilling dynamics</li>
                        <li>Bit dull grading</li>
                    </ul>
                </div>


                <div class="tp-card">
                    <h3 class="tp-card-title">Drilling Assembly Tools</h3>

                    <ul class="tp-list">
                        <li>BHA types (Hold, Build & Drop)</li>
                        <li>BHA selection criteria</li>
                        <li>Connection thread identification</li>
                        <li>Wellplan simulations</li>
                        <li>Drilling jars placement</li>
                        <li>Well planning fundamentals</li>
                        <li>Drilling optimization basics</li>
                    </ul>
                </div>


                <div class="tp-card tp-pricing">
                    <h3 class="tp-card-title">Training Fees</h3>

                    <div class="tp-price">
                        <span class="tp-small tp-discount">
                            <span>Early Bird • 60% Discount</span>
                            <h2>₦100,000</h2>
                            <span class="tp-small">$66</span>
                    </div>



                    <div class="tp-price">
                        <span class="tp-small tp-discount">
                            <span>Normal Fee</span>
                            <h2>₦300,000</h2>
                            <span class="tp-small">$200</span>
                    </div>


                    <p class="tp-small">
                        Certificate, lunch, and logistics are included.
                    </p>
                </div>

            </div>

        </div>


        <!-- PAYMENT -->
        <div class="tp-card tp-payment">
            <h3 class="tp-card-title">Payment Details</h3>

            <p class="tp-text"><strong>Account Name:</strong> GOX Energy</p>
            <p class="tp-text"><strong>Account No:</strong> 1028419872</p>
            <p class="tp-text"><strong>Bank:</strong> UBA</p>

            <p class="tp-small">
                Kindly forward evidence of payment via WhatsApp.
            </p>

            <p class="tp-text">
                <strong>Accommodation:</strong> Available on request.
            </p>
        </div>


        <!-- CONTACT -->
        <div class="tp-contact" data-aos="zoom-in">

            <h2 class="tp-contact-title">Enquiries & Registration</h2>

            <a href="https://wa.me/2349023670870" class="tp-btn tp-btn-primary">
                WhatsApp: +234 902 367 0870
            </a>

            <a href="mailto:goxdrilling@gmail.com" class="tp-btn tp-btn-outline">
                goxdrilling@gmail.com
            </a>

        </div>

    </div>

</section>


@endsection
</body>
</html>