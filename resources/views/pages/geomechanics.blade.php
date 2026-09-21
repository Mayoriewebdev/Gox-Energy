@extends('layout.app')

@section('title', 'Geomechanics & Real-Time Pore Pressure Prediction | GOX Energy')

@section('content')
<div class="geo-page">

    <!-- ================= HERO SECTION ================= -->
    <section class="geo-hero">
        <div class="geo-container">
            <div class="geo-hero-grid">
                <div data-aos="fade-right">
                    <div class="geo-hero-badge">
                        <span class="pulse-dot"></span>
                        Subsurface Rock Mechanics & Real-Time Safety
                    </div>
                    <h1>Geomechanics & <span>Pore Pressure</span> Prediction</h1>
                    <p class="geo-hero-lead">
                        Advanced geomechanical modeling, borehole integrity solutions, and 24/7 real-time pore pressure monitoring to eliminate NPT, optimize well trajectories, and safeguard drilling operations worldwide.
                    </p>
                    <div class="geo-hero-actions">
                        <a href="{{ route('home.demo') }}" class="geo-btn-cta">
                            <span>Request Technical Demo</span>
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                <polyline points="12 5 19 12 12 19"></polyline>
                            </svg>
                        </a>
                        <a href="#pore-pressure" class="geo-btn-secondary">
                            <span>Explore Real-Time Prediction</span>
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                                <line x1="12" y1="5" x2="12" y2="19"></line>
                                <polyline points="19 12 12 19 5 12"></polyline>
                            </svg>
                        </a>
                    </div>
                </div>

                <div class="geo-hero-media" data-aos="fade-left">
                    <div class="geo-hero-card-preview">
                        <img src="{{ asset('assets/images/drilling.webp') }}" alt="Subsurface Geomechanical Drilling">
                        <div class="geo-hero-stat-floating">
                            <strong>24/7</strong>
                            <span>Remote Operations<br>Monitoring Center</span>
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
                <a href="#overview">Overview</a>
                <a href="#scales">Wellbore & Reservoir Scale</a>
                <a href="#stability">Borehole Stability & MEM</a>
                <a href="#pore-pressure">Pore Pressure Prediction</a>
                <a href="#remote-monitoring">Calgary 24/7 Center</a>
            </div>
            <a href="{{ route('home.geosteering') }}" class="geo-subnav-cross">
                Looking for Wellsite Geologists & Geosteering? <span>&rarr;</span>
            </a>
        </div>
    </div>

    <!-- ================= OVERVIEW SECTION ================= -->
    <section id="overview" class="geo-section">
        <div class="geo-container">
            <div class="geo-grid-2">
                <div class="geo-prose" data-aos="fade-up">
                    <span class="geo-kicker">Core Discipline</span>
                    <h3>The Science of Rock Deformation & Stress Analysis</h3>
                    <p>
                        <strong>Geomechanics</strong> is the study of how soils and rocks deform, sometimes to failure, in response to changes of stress, pressure, temperature and other environmental conditions.
                    </p>
                    <p>
                        Geomechanics modelling applies to almost all phases of hydrocarbon exploration, extraction, production and abandonment. From as small as the action of individual cutters on a poly-crystalline diamond compact (PDC) bit through drilling wells and perforating to as large as modeling fields and basins.
                    </p>
                    <p>
                        Over the last 30 years, geomechanics has come to play an increasingly important role in drilling, completion and production operations. This trend continues as operators pursue oil and gas production from shales, in which <em>mechanical anisotropy</em>—the variation of mechanical properties with orientation—plays a vital role.
                    </p>
                </div>

                <div data-aos="fade-up" data-aos-delay="150">
                    <div class="geo-feature-box mb-4">
                        <div class="geo-icon-badge">
                            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="12" cy="12" r="10"></circle>
                                <polyline points="12 6 12 12 16 14"></polyline>
                            </svg>
                        </div>
                        <h4>Whole Life-Cycle Reservoir Modeling</h4>
                        <p>
                            Our engineers use industry-leading geomechanical modeling software to predict and quantify stress and deformation effects for critical decisions: placing and completing new wells, enhancing and sustaining production, minimizing risk, facility design, and high-impact capital investments.
                        </p>
                    </div>

                    <div class="geo-feature-box">
                        <div class="geo-icon-badge">
                            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M12 2v20M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                            </svg>
                        </div>
                        <h4>Optimized Drill Bit Performance & MSE</h4>
                        <p>
                            Choosing the correct bit type and design for optimal rate of penetration (ROP) and bit life is vital for cost-effective wells. We apply Mechanical Specific Energy (MSE) interpretation to optimize rock destruction mechanisms under complex strain rates and temperatures.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ================= SCALES SECTION ================= -->
    <section id="scales" class="geo-section geo-section-alt">
        <div class="geo-container">
            <div class="geo-section-header" data-aos="fade-up">
                <span class="geo-kicker">Multi-Scale Applications</span>
                <h2>Subsurface Modeling Across Every Dimension</h2>
                <p>From microscopic cutter interactions to regional basin-wide stress regimes, our modeling safeguards your drilling investment.</p>
            </div>

            <div class="geo-grid-2">
                <div class="geo-feature-box" data-aos="fade-right">
                    <div class="geo-icon-badge">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect>
                            <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path>
                        </svg>
                    </div>
                    <h4>At the Wellbore Scale</h4>
                    <p>
                        Geomechanics is central to understanding how drill bits remove rock, characterizing borehole stability, predicting the stability of perforation tunnels, and designing and monitoring hydraulic fracturing stimulation programs.
                    </p>
                </div>

                <div class="geo-feature-box" data-aos="fade-left">
                    <div class="geo-icon-badge">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polygon points="12 2 2 7 12 12 22 7 12 2"></polygon>
                            <polyline points="2 17 12 22 22 17"></polyline>
                            <polyline points="2 12 12 17 22 12"></polyline>
                        </svg>
                    </div>
                    <h4>At the Reservoir Scale</h4>
                    <p>
                        Geomechanics models fluid movement and predicts how fluid removal or injection leads to changes in permeability, fluid pressure, and in situ rock stresses that can have significant effects on long-term reservoir performance.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- ================= STABILITY & MEM SECTION ================= -->
    <section id="stability" class="geo-section">
        <div class="geo-container">
            <div class="geo-section-header" data-aos="fade-up">
                <span class="geo-kicker">Wellbore Integrity</span>
                <h2>Borehole Stability & Mechanical Earth Model (MEM)</h2>
                <p>Preventing catastrophic failure modes through continuous stress computing and calibrated mud weight windows.</p>
            </div>

            <div class="geo-callout-card" data-aos="fade-up">
                <h4>
                    <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="#ea580c" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"></path>
                        <line x1="12" y1="9" x2="12" y2="13"></line>
                        <line x1="12" y1="17" x2="12.01" y2="17"></line>
                    </svg>
                    Understanding Borehole Stress Redistribution & Failure Modes
                </h4>
                <p>
                    Geomechanics plays a major role in understanding the stability and integrity of the borehole while drilling. The presence of the wellbore and the pressure of the drilling fluid induce changes in the stress state of the rock. If redistributed stresses exceed rock strength, failure ensues:
                </p>
                <div class="geo-grid-2" style="margin-top: 20px;">
                    <div style="background: rgba(239, 68, 68, 0.06); border-left: 3px solid #ef4444; padding: 18px; border-radius: 8px;">
                        <strong style="color: #991b1b; display: block; margin-bottom: 6px;">Tensile Cracking (Mud Weight Too High)</strong>
                        <span style="font-size: 14.5px; color: #475569;">Occurs when mud pressure becomes excessive, driving the borehole wall into tension, creating fractures and triggering lost circulation.</span>
                    </div>
                    <div style="background: rgba(245, 158, 11, 0.08); border-left: 3px solid #f59e0b; padding: 18px; border-radius: 8px;">
                        <strong style="color: #92400e; display: block; margin-bottom: 6px;">Breakouts (Mud Weight Too Low)</strong>
                        <span style="font-size: 14.5px; color: #475569;">Regions of enlargement on opposing sides of the borehole caused by shear cracking, leading to cavings, stuck pipe, and hole pack-off.</span>
                    </div>
                </div>
            </div>

            <div class="geo-grid-2" style="margin-top: 40px;">
                <div class="geo-prose" data-aos="fade-right">
                    <h3 style="font-size: 22px;">Mud Weight Window Optimization</h3>
                    <p>
                        By computing stress changes around a planned borehole and comparing them to the strength of the rock, our engineers generate an optimized mud weight program.
                    </p>
                    <p>
                        Typically, mud weight must be high enough to suppress shear failure and fluid influx, and low enough to avoid tensile failure and lost circulation. Because complex failure modes such as bedding plane failure cannot yet be reliably predicted by static formulas alone, effective wellbore stability control—especially along challenging trajectories—requires real-time monitoring combined with robust predrill predictive models.
                    </p>
                </div>

                <div class="geo-feature-box" data-aos="fade-left">
                    <div class="geo-icon-badge">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <ellipse cx="12" cy="5" rx="9" ry="3"></ellipse>
                            <path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"></path>
                            <path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"></path>
                        </svg>
                    </div>
                    <h4>The Mechanical Earth Model (MEM)</h4>
                    <p>
                        The MEM is a comprehensive numerical framework integrating all geological and petrophysical data to make quantitative and qualitative predictions of the subsurface geomechanical environment:
                    </p>
                    <ul class="geo-checklist" style="margin-top: 14px;">
                        <li>In situ Earth stresses (magnitude and orientation)</li>
                        <li>Formation pore pressure</li>
                        <li>Rock elastic properties (Young's modulus, Poisson's ratio)</li>
                        <li>Unconfined compressive strength (UCS) and tensile strength</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- ================= PORE PRESSURE PREDICTION SECTION ================= -->
    <section id="pore-pressure" class="geo-section geo-section-alt">
        <div class="geo-container">
            <div class="geo-section-header" data-aos="fade-up">
                <span class="geo-kicker">Safety & Efficiency</span>
                <h2>Real-Time Pore Pressure Prediction</h2>
                <p>
                    Pore pressure-related operational well safety and positive petroleum results are paramount in the oil and gas industry. Personnel skilled in formation evaluation, pore pressure monitoring, and real-time well follow-up optimize operational efficiency and prevent catastrophic kicks and blowouts.
                </p>
            </div>

            <!-- 3 CURRICULUM / TECHNICAL MODULES -->
            <div class="geo-grid-3">
                <!-- Module 1 -->
                <div class="geo-module-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="geo-module-header">
                        <div class="geo-module-num">01</div>
                        <h4>Pressure Basics & Units</h4>
                    </div>
                    <ul class="geo-checklist">
                        <li>Fluid Gradients and Pressure-Depth Plots</li>
                        <li>Fluid Pressure and Lithostatic Stress</li>
                        <li>Drilling Hazards: Kick and Blowout Prevention</li>
                        <li>Causes and Timing of Overpressure / Centroid Concept</li>
                        <li>Pressure Dimensions and Units Conversion</li>
                        <li>Pressure Compartmentalization in Oil & Gas Fields</li>
                    </ul>
                </div>

                <!-- Module 2 -->
                <div class="geo-module-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="geo-module-header">
                        <div class="geo-module-num">02</div>
                        <h4>Pore Pressure & Fracture Gradient</h4>
                    </div>
                    <ul class="geo-checklist">
                        <li>Hydrostatic, Principal Stresses & Overburden Curves</li>
                        <li>Stress Tests: FIT / LOT & Applications in Drilling</li>
                        <li>Disequilibrium Compaction & Inefficient Dewatering</li>
                        <li>Eaton and Terzaghi Equations for Prediction</li>
                        <li>Equivalent Depth & Ratio Methods in Real Time</li>
                        <li>Psh & Psand: Computation & Pressure Measurement</li>
                    </ul>
                </div>

                <!-- Module 3 -->
                <div class="geo-module-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="geo-module-header">
                        <div class="geo-module-num">03</div>
                        <h4>Industry Software Application</h4>
                    </div>
                    <ul class="geo-checklist">
                        <li>Setting Up a New Pore Pressure Prediction Project</li>
                        <li>Importing LAS Files & Multi-well Dataset Management</li>
                        <li>Picking & Projecting Shale Points on Gamma Ray (GR)</li>
                        <li>Building Overburden Gradient (OBG) & NCT Trends</li>
                        <li>Performing PPP and Fracture Gradient (S3) Analysis</li>
                        <li>Drilling Application & Live Real-Time Well Follow-Up</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- ================= CALGARY 24/7 CENTER SECTION ================= -->
    <section id="remote-monitoring" class="geo-section geo-section-dark">
        <div class="geo-container">
            <div class="geo-section-header" data-aos="fade-up">
                <span class="geo-kicker">Global Operations</span>
                <h2>24/7 Real-Time Remote Operations Center</h2>
                <p>
                    Our primary objective is to assist our clientele in managing drilling operations flawlessly within the AFE budget, eliminating hidden and avoidable NPT while improving overall rigsite performance.
                </p>
            </div>

            <div class="geo-remote-card" data-aos="zoom-in">
                <div style="display: flex; flex-wrap: wrap; justify-content: space-between; align-items: center; gap: 20px;">
                    <div>
                        <div class="geo-remote-badge">
                            <span class="pulse-dot"></span>
                            Calgary, Canada Operations Center — 24/7 Continuous Monitoring
                        </div>
                        <h3 style="color: #ffffff; font-size: 24px; margin-bottom: 8px;">Scope of Real-Time Rigsite Monitoring</h3>
                        <p style="color: #94a3b8; max-width: 700px; font-size: 15px; margin: 0;">
                            Our dedicated Remote Operations Team maintains uninterrupted routine surveillance across all client rigsites, delivering proactive engineering recommendations before issues escalate.
                        </p>
                    </div>
                </div>

                <div class="geo-scope-grid">
                    <div class="geo-scope-item">
                        <div class="geo-scope-icon">🔍</div>
                        <p>Monitoring drilling, cementing, testing and all other rig operations workflows in the remote center; detecting anomalies and communicating observations per defined communication protocols.</p>
                    </div>

                    <div class="geo-scope-item">
                        <div class="geo-scope-icon">📊</div>
                        <p>Analyzing drilling mechanics time logs and providing daily activity summary reports along with comprehensive daily drilling KPI reports.</p>
                    </div>

                    <div class="geo-scope-item">
                        <div class="geo-scope-icon">🎯</div>
                        <p>Performing rigorous Data Quality Control (QC) on surface and downhole drilling parameters, environment, and overall rigsite performance.</p>
                    </div>

                    <div class="geo-scope-item">
                        <div class="geo-scope-icon">⚡</div>
                        <p>Diagnosing and analyzing drilling operational issues while providing immediate, actionable mitigation recommendations.</p>
                    </div>

                    <div class="geo-scope-item">
                        <div class="geo-scope-icon">📈</div>
                        <p>Tracking various drilling KPIs and advising rig teams on industry best practices for continuous performance improvement.</p>
                    </div>

                    <div class="geo-scope-item">
                        <div class="geo-scope-icon">⚙️</div>
                        <p>Monitoring for trend deviations in Real-Time Torque & Drag, Hole Cleaning, and other critical downhole conditions during drilling & tripping.</p>
                    </div>

                    <div class="geo-scope-item" style="grid-column: 1 / -1;">
                        <div class="geo-scope-icon">🚨</div>
                        <p>Alerting appropriate stakeholders and rigsite crews immediately of any deviation from drilling SOPs, guidelines, or potential anomalies and outliers during drilling, tripping, and cementing operations.</p>
                    </div>
                </div>
            </div>

            <!-- CROSS PROMO LINK TO GEOSTEERING -->
            <div class="geo-cross-banner" data-aos="fade-up" style="background: rgba(255, 255, 255, 0.05); border-color: rgba(255, 255, 255, 0.1);">
                <div class="geo-cross-text">
                    <h3 style="color: #ffffff;">Need Wellsite Geology & Geosteering Services?</h3>
                    <p style="color: #cbd5e1;">Discover how our experienced wellsite geologists ensure optimum placement in the sweetest spot of the hydrocarbon reservoir.</p>
                </div>
                <a href="{{ route('home.geosteering') }}" class="geo-btn-cta" style="white-space: nowrap;">
                    <span>View Geosteering Services</span>
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
                <h2>Optimize Your Drilling Operations with GOX Geomechanics</h2>
                <p>Contact our Calgary & Lagos technical engineering teams to set up pre-drill pore pressure prediction, wellbore stability modeling, or 24/7 RTOC surveillance.</p>
                <div style="display: flex; justify-content: center; gap: 16px; flex-wrap: wrap;">
                    <a href="{{ route('home.demo') }}" class="geo-btn-cta" style="background: #f97316; font-size: 16px; padding: 16px 36px;">
                        <span>Schedule Technical Consultation</span>
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
