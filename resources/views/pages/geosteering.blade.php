@extends('layout.app')

@section('title', 'Wellsite Geologists & Geosteering Services | GOX Energy')

@section('content')
<div class="geo-page">

    <!-- ================= HERO SECTION ================= -->
    <section class="geo-hero">
        <div class="geo-container">
            <div class="geo-hero-grid">
                <div data-aos="fade-right">
                    <div class="geo-hero-badge">
                        <span class="pulse-dot"></span>
                        Precision Subsurface Navigation & Well Placement
                    </div>
                    <h1>Wellsite Geologists & <span>Geosteering</span> Services</h1>
                    <p class="geo-hero-lead">
                        Navigating through complex reservoirs with top-tier software and real-time geological decision-making to ensure optimum well placement in the sweetest spot of the hydrocarbon reservoir.
                    </p>
                    <div class="geo-hero-actions">
                        <a href="{{ route('home.demo') }}" class="geo-btn-cta">
                            <span>Get Started With Geosteering</span>
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                <polyline points="12 5 19 12 12 19"></polyline>
                            </svg>
                        </a>
                        <a href="#benefits" class="geo-btn-secondary">
                            <span>Explore Key Benefits</span>
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                                <line x1="12" y1="5" x2="12" y2="19"></line>
                                <polyline points="19 12 12 19 5 12"></polyline>
                            </svg>
                        </a>
                    </div>
                </div>

                <div class="geo-hero-media" data-aos="fade-left">
                    <div class="geo-hero-card-preview">
                        <img src="{{ asset('assets/images/yuf.jpeg') }}" alt="Wellsite Geological and Directional Drilling Operations">
                        <div class="geo-hero-stat-floating">
                            <strong>100%</strong>
                            <span>Target Reservoir<br>Sweet-Spot Exposure</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ================= SUBNAV BAR ================= -->
    <div class="geo-subnav-bar">
        <div class="geo-container geo-subnav-container">
            <div class="geo-subnav-links">
                <a href="#overview">Team Overview</a>
                <a href="#role-geosteering">Role of Geosteering</a>
                <a href="#data-sources">LWD, MWD & Data</a>
                <a href="#benefits">Key Advantages</a>
            </div>
            <a href="{{ route('home.geomechanics') }}" class="geo-subnav-cross">
                Looking for Geomechanics & Pore Pressure? <span>&rarr;</span>
            </a>
        </div>
    </div>

    <!-- ================= OVERVIEW SECTION ================= -->
    <section id="overview" class="geo-section">
        <div class="geo-container">
            <div class="geo-grid-2">
                <div class="geo-prose" data-aos="fade-up">
                    <span class="geo-kicker">Subsurface Expertise</span>
                    <h3>Experienced Wellsite Geological Excellence</h3>
                    <p>
                        Our <strong>Well Site Geological Team</strong> comprises highly experienced geologists who utilize the industry’s top-notch software to navigate through the most complex reservoirs.
                    </p>
                    <p>
                        Our mission is to ensure optimum well placement in the <em>sweetest spot</em> within the hydrocarbon reservoir, allowing for more efficient, high-recovery, and precise access to oil and gas reserves.
                    </p>
                    <p>
                        Working directly alongside drilling engineers and asset managers, our wellsite specialists evaluate cuttings, analyze mud gas logs, integrate geophysical data, and maintain continuous oversight over stratigraphic markers.
                    </p>
                </div>

                <div data-aos="fade-up" data-aos-delay="150">
                    <div class="geo-callout-card">
                        <h4>
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#ea580c" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="12" cy="12" r="10"></circle>
                                <circle cx="12" cy="12" r="6"></circle>
                                <circle cx="12" cy="12" r="2"></circle>
                            </svg>
                            The Primary Objective of Geosteering
                        </h4>
                        <p>
                            Our Geosteering Geologists adjust the wellbore placement in real time based on geological and petrophysical data. This ensures the drill bit stays strictly within the desired stratigraphic layer to optimize resource extraction and deliver maximum Return on Investment (ROI) for our clients.
                        </p>
                        <p style="font-weight: 600; color: #111827; margin: 0;">
                            The primary goal: Maximize the exposure of the wellbore to the productive pay zone, thereby dramatically increasing the productivity, efficiency, and profitability of the drilling campaign.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ================= THE ROLE OF GEOSTEERING & DATA SOURCES ================= -->
    <section id="data-sources" class="geo-section geo-section-alt">
        <div class="geo-container">
            <div class="geo-section-header" data-aos="fade-up">
                <span class="geo-kicker">Integrated Subsurface Data</span>
                <h2>Data-Driven Real-Time Geosteering</h2>
                <p>
                    Our geosteering specialists rely on various mud logging, directional telemetry, and downhole imaging streams to make informed, split-second steering decisions:
                </p>
            </div>

            <div class="geo-grid-2">
                <!-- Source 1 -->
                <div class="geo-step-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="geo-step-num">01</div>
                    <div class="geo-step-content">
                        <h4>Logging While Drilling (LWD)</h4>
                        <p>
                            LWD tools provide continuous, real-time data about the rock formations being drilled, including deep and shallow resistivity, natural gamma ray, density, and neutron porosity measurements. This information helps geologists and directional drillers make informed decisions about the direction and inclination of drilling.
                        </p>
                    </div>
                </div>

                <!-- Source 2 -->
                <div class="geo-step-card" data-aos="fade-up" data-aos-delay="150">
                    <div class="geo-step-num">02</div>
                    <div class="geo-step-content">
                        <h4>Measurement While Drilling (MWD)</h4>
                        <p>
                            MWD tools supply crucial drilling parameters such as the exact inclination, azimuth, toolface, and tool vibration of the wellbore. These high-frequency directional measurements are vital for maintaining the planned trajectory and calculating dogleg severity.
                        </p>
                    </div>
                </div>

                <!-- Source 3 -->
                <div class="geo-step-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="geo-step-num">03</div>
                    <div class="geo-step-content">
                        <h4>Seismic Data & Geological Models</h4>
                        <p>
                            Pre-drill 3D seismic surveys and high-resolution geological models provide the baseline framework for understanding subsurface structural closures and fault blocks. Geosteering adjusts the drilling path as new information becomes available, continually refining the structural model and improving reservoir mapping accuracy.
                        </p>
                    </div>
                </div>

                <!-- Source 4 -->
                <div class="geo-step-card" data-aos="fade-up" data-aos-delay="250">
                    <div class="geo-step-num">04</div>
                    <div class="geo-step-content">
                        <h4>Real-Time Multi-Disciplinary Decision Making</h4>
                        <p>
                            Geosteering requires close collaboration between the rig directional drilling team, wellsite geologists, operations managers, and reservoir engineers. Together, they interpret incoming log data and make prompt, coordinated decisions to adjust the trajectory, guaranteeing the wellbore remains inside the sweet spot.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ================= BENEFITS SECTION ================= -->
    <section id="benefits" class="geo-section">
        <div class="geo-container">
            <div class="geo-section-header" data-aos="fade-up">
                <span class="geo-kicker">Operational Advantages</span>
                <h2>Benefits of Geosteering & Well Site Geologists</h2>
                <p>
                    Employing expert wellsite geologists and real-time geosteering delivers decisive advantages across complex horizontal, multilateral, and extended-reach directional drilling campaigns:
                </p>
            </div>

            <div class="geo-grid-4">
                <!-- Benefit 1 -->
                <div class="geo-benefit-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="geo-benefit-icon">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 2v20M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                        </svg>
                    </div>
                    <h4>Enhanced Resource Recovery</h4>
                    <p>
                        By precisely navigating the wellbore through the most productive zones, geosteering maximizes net pay exposure, increases cumulative hydrocarbon recovery, and boosts overall operational efficiency.
                    </p>
                </div>

                <!-- Benefit 2 -->
                <div class="geo-benefit-card" data-aos="fade-up" data-aos-delay="150">
                    <div class="geo-benefit-icon">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10"></circle>
                            <polyline points="12 6 12 12 14 14"></polyline>
                        </svg>
                    </div>
                    <h4>Reduced Drilling Costs</h4>
                    <p>
                        Accurate steering minimizes the risk of drilling out of zone into non-productive or abrasive formations, effectively eliminating non-productive time (NPT), sidetracks, and unnecessary bit changes.
                    </p>
                </div>

                <!-- Benefit 3 -->
                <div class="geo-benefit-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="geo-benefit-icon">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                        </svg>
                    </div>
                    <h4>Improved Safety</h4>
                    <p>
                        By anticipating and avoiding subsurface geological hazards such as unexpected fault planes, unstable shale layers, and pore pressure anomalies, geosteering enhances the total safety of the drilling operation.
                    </p>
                </div>

                <!-- Benefit 4 -->
                <div class="geo-benefit-card" data-aos="fade-up" data-aos-delay="250">
                    <div class="geo-benefit-icon">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 22a7 7 0 0 0 7-7c0-2-1-3.9-3-5.5s-3.5-4-4-6.5c-.5 2.5-2 4.9-4 6.5C6 11.1 5 13 5 15a7 7 0 0 0 7 7z"></path>
                        </svg>
                    </div>
                    <h4>Environmental Stewardship</h4>
                    <p>
                        Minimizing surface disturbance through multi-well pad drilling and optimizing well paths contribute directly to reduced environmental footprints and more sustainable, responsible oilfield development.
                    </p>
                </div>
            </div>

            <!-- CROSS PROMO LINK TO GEOMECHANICS -->
            <div class="geo-cross-banner" data-aos="fade-up">
                <div class="geo-cross-text">
                    <h3>Explore Subsurface Geomechanics & Pore Pressure</h3>
                    <p>Discover our advanced rock mechanics, borehole stability modeling, and 24/7 Calgary Remote Monitoring Center.</p>
                </div>
                <a href="{{ route('home.geomechanics') }}" class="geo-btn-cta" style="white-space: nowrap;">
                    <span>View Geomechanics Services</span>
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                        <polyline points="12 5 19 12 12 19"></polyline>
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <!-- ================= CALL TO ACTION ================= -->
    <section class="geo-cta-section">
        <div class="geo-container">
            <div class="geo-cta-wrap" data-aos="zoom-in">
                <h2>Deploy GOX Wellsite Geologists on Your Next Well</h2>
                <p>Maximize your pay-zone exposure and protect project margins with our proven geosteering specialists and 24/7 technical operations support.</p>
                <div style="display: flex; justify-content: center; gap: 16px; flex-wrap: wrap;">
                    <a href="{{ route('home.demo') }}" class="geo-btn-cta" style="background: #f97316; font-size: 16px; padding: 16px 36px;">
                        <span>Request Geosteering Consultation</span>
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                            <polyline points="12 5 19 12 12 19"></polyline>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

</div>
@endsection
