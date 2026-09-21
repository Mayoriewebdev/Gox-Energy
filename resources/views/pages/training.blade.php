@extends('layout.app')

@section('title')
Training Programs
@endsection

@section('content')
<br>

<section class="tp-training">

    <div class="tp-container">

        <!-- TABS SWITCHER -->
        <div class="tp-nav-tabs" data-aos="fade-down">
            <span class="tp-tab-btn active">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                    <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                    <line x1="16" y1="2" x2="16" y2="6"></line>
                    <line x1="8" y1="2" x2="8" y2="6"></line>
                    <line x1="3" y1="10" x2="21" y2="10"></line>
                </svg>
                Upcoming Workshop (July 2026)
            </span>
            <a href="{{ route('home.past-training') }}" class="tp-tab-btn">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="12" cy="12" r="10"></circle>
                    <polyline points="12 6 12 12 14 14"></polyline>
                </svg>
                View Past Training Sessions
                <span class="tp-tab-badge">Archives</span>
            </a>
        </div>

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
                        <strong>Venue:</strong> 1 Digital Energy Close, KM 3 Igbo Etche Road, Off Eleme Junction, Port Harcourt, Rivers State Nigeria.
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


        <!-- PAST SESSIONS SHOWCASE CALLOUT -->
        <div class="tp-past-showcase" data-aos="fade-up">
            <div class="tp-past-content">
                <h3>
                    <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="#ea580c" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                        <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                    </svg>
                    Looking for Previous Training Sessions & Archives?
                </h3>
                <p>
                    See our past workshop records, field engineering modules, hands-on drilling bit analysis, and practical session highlights.
                </p>
            </div>
            <a href="{{ route('home.past-training') }}" class="tp-past-btn">
                <span>View Past Training Sessions</span>
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.3" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="5" y1="12" x2="19" y2="12"></line>
                    <polyline points="12 5 19 12 12 19"></polyline>
                </svg>
            </a>
        </div>

        <!-- CONTACT -->
        <div class="tp-contact" data-aos="zoom-in">

            <h2 class="tp-contact-title">Enquiries & Registration</h2>

            <a href="https://wa.me/2349023670870" class="tp-btn tp-btn-primary">
                WhatsApp: +234 902 367 0870
            </a>

            <a href="mailto:goxdrilling@gmail.com" class="tp-btn tp-btn-outline">
               Goxdrilling@gmail.com 
               <br>
               drilling@goxenergy.com.ng
            </a>

        </div>

    </div>
</section>


@endsection