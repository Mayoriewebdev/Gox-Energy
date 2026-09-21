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
                Chat on WhatsApp
            </a>

            <a href="mailto:goxdrilling@gmail.com" class="tp-btn tp-btn-outline">
                goxdrilling@gmail.com
            </a>

        </div>

        <!-- UPCOMING WORKSHOP CALLOUT -->
        <div class="tp-past-showcase" data-aos="fade-up">
            <div class="tp-past-content">
                <h3>
                    <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="#ea580c" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                        <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                        <line x1="16" y1="2" x2="16" y2="6"></line>
                        <line x1="8" y1="2" x2="8" y2="6"></line>
                        <line x1="3" y1="10" x2="21" y2="10"></line>
                    </svg>
                    Interested in Our Upcoming Training Workshop?
                </h3>
                <p>
                    Registrations are currently open for our July 6th – 10th practical workshop on Drilling Bits & Drilling Assembly Tools. Early bird discounts available.
                </p>
            </div>
            <a href="{{ route('home.training') }}" class="tp-past-btn">
                <span>View Upcoming Workshop</span>
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.3" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="5" y1="12" x2="19" y2="12"></line>
                    <polyline points="12 5 19 12 12 19"></polyline>
                </svg>
            </a>
        </div>

    </div>

</section>

@endsection