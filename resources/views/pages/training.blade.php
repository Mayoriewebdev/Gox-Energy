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

                    <p class="tp-text"><strong>Date:</strong> JULY 6TH - 10TH JULY 2026.</p>


                    <p class="tp-text">
                        <strong>Time :</strong> 9:00AM - 4:00PM
                    </p>

                    <p class="tp-text">
                        <strong>Venue:</strong>  KM 3, Igbo Etche Road, Reveille Yard By Digital Energy Street. 
                    </p>

                </div>


                <div class="tp-card">
                    <h3 class="tp-card-title">About the Instructors</h3>

                    <p class="tp-text">
                        <strong>
                            <a href="https://www.linkedin.com/in/deji-kareem-106a3a11" target="_blank">
                                Deji Kareem
                            </a>
                        </strong>
                        & <strong>Ogu Charles</strong> bring over
                        50 years of global field experience with Baker Hughes,
                        Schlumberger, and Halliburton.
                    </p>
                </div>

            </div>


            <!-- RIGHT -->
            <div data-aos="fade-left">

                <div class="tp-card">
                    <h3 class="tp-card-title">Well Planning & Design </h3>

                    <ul class="tp-list">
                        <li>Wellbore Trajectory Design & Planning</li>
                        <li>Safe Mud Weight Window Estimation</li>
                        <li>Well Bore Geometry & Casing Design</li>
                        <li>Bits Selection / Optimization</li>
                        <li>BHA Selection/ Optimization</li>
                    </ul>
                </div>


                <div class="tp-card">
                    <h3 class="tp-card-title">Real Time Drilling Optimization / Well Monitoring  </h3>

                    <ul class="tp-list">
                        <li>Stuck Pipe Indicators</li>
                        <li>Shock & Vibration Monitoring</li>
                        <li>Surface Parameters Tracking</li>
                        <li>Realtime T&D Roadmap Monitoring</li>
                        <li>Bit Life Estimation / MSE</li>
                        <li>Wellbore Trajectory Monitoring</li>
                        <li>SPP / Pit Volume Monitoring</li>
                        <li>Casing Running</li>
                        <li>Drilling Rig Key Performance Indicators</li>
                    </ul>
                </div>



                <div class="tp-card">
                    <h3 class="tp-card-title">Pre Drill Engineering Simulations  </h3>

                    <ul class="tp-list">
                        <li>Torque & Drag / Drill String Stress Simulations</li>
                        <li>Hydraulics Simulations</li>
                        <li>Drilling Jar Placement</li>
                    </ul>
                </div>


                <div class="tp-card">
                    <h3 class="tp-card-title">Basic Oilfield Crew Management.  </h3>

                    <ul class="tp-list">
                        <li>Pre Tour Meetings</li>
                        <li>Field Crew Management / Communications skills.</li>
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
               Goxdrilling@gmail.com 
               <br>
               drilling@goxenergy.com.ng
            </a>

        </div>

    </div>

    <a href="{{ route('home.past-training') }}" class="tp-btn tp-btn-outline">
        View Past Trainings
    </a>
</section>


@endsection