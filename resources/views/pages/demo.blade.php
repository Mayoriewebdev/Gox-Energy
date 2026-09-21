@extends('layout.app')

@section('title')
Get a Demo | GOX Energy
@endsection

@section('content')
<main class="demo-page">
    <div class="demo-bg-decor"></div>

    <div class="demo-container">

        <!-- ================= HERO HEADER ================= -->
        <div class="demo-hero" data-aos="fade-up">
            <div class="demo-badge">
                <span class="demo-badge-dot"></span>
                <span>Live Technical Demonstration</span>
            </div>
            <h1>See <span>GOX Energy</span> Technology In Action</h1>
            <p>
                Schedule an exclusive, 1-on-1 operational walkthrough with our drilling specialists. Discover how our directional drilling solutions, downhole surveying telemetry, and asset data software deliver peak drilling efficiency.
            </p>
        </div>

        <!-- ================= MAIN DEMO GRID ================= -->
        <div class="demo-grid">

            <!-- LEFT COLUMN: WHAT TO EXPECT & TRUST -->
            <div class="demo-info-col" data-aos="fade-right" data-aos-delay="100">

                <div class="demo-card">
                    <h3 class="demo-card-title">What To Expect From Your Demo</h3>
                    <p class="demo-card-subtitle">
                        Every session is customized around your target formation, field parameters, and operational goals.
                    </p>

                    <div class="demo-features-list">
                        <!-- Item 1 -->
                        <div class="demo-feature-item">
                            <div class="demo-feature-icon">
                                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <polyline points="12 6 12 12 16 14"></polyline>
                                </svg>
                            </div>
                            <div class="demo-feature-text">
                                <h4>Real-Time Telemetry & Survey Simulation</h4>
                                <p>Live demonstration of high-accuracy wellbore trajectory tracking, anti-collision monitoring, and gyro survey integration.</p>
                            </div>
                        </div>

                        <!-- Item 2 -->
                        <div class="demo-feature-item">
                            <div class="demo-feature-icon">
                                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect>
                                    <line x1="8" y1="21" x2="16" y2="21"></line>
                                    <line x1="12" y1="17" x2="12" y2="21"></line>
                                </svg>
                            </div>
                            <div class="demo-feature-text">
                                <h4>AFE Manager & Wellman Platform</h4>
                                <p>Interactive walkthrough of capital expenditure tracking, automated regulatory reporting, and daily drilling cost workflows.</p>
                            </div>
                        </div>

                        <!-- Item 3 -->
                        <div class="demo-feature-item">
                            <div class="demo-feature-icon">
                                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="9" cy="7" r="4"></circle>
                                    <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                    <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                </svg>
                            </div>
                            <div class="demo-feature-text">
                                <h4>Direct Technical Q&A with Senior Engineers</h4>
                                <p>Speak directly with seasoned directional drillers, MWD engineers, and software architects ready to address your exact requirements.</p>
                            </div>
                        </div>

                        <!-- Item 4 -->
                        <div class="demo-feature-item">
                            <div class="demo-feature-icon">
                                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
                                </svg>
                            </div>
                            <div class="demo-feature-text">
                                <h4>Rapid Mobilization & Equipment Deployment</h4>
                                <p>Detailed review of supply timelines, tool readiness at our Port Harcourt base, and on-site support logistics.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- FAST-TRACK WHATSAPP CONNECT -->
                <div class="demo-whatsapp-card">
                    <div class="demo-whatsapp-header">
                        <div class="demo-whatsapp-icon">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
                            </svg>
                        </div>
                        <div>
                            <h4>Need an Immediate Discussion?</h4>
                            <p>Fast-track your inquiry directly with our engineering team on WhatsApp.</p>
                        </div>
                    </div>
                    <a class="demo-whatsapp-btn"
                        href="https://wa.me/2349023670870?text=Hello%20GOX%20Energy%2C%20I%20would%20like%20to%20schedule%20a%20technical%20demo%20for%20our%20operations."
                        target="_blank">
                        <span>Chat Directly on WhatsApp</span>
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12h14M12 5l7 7-7 7"/>
                        </svg>
                    </a>
                </div>

                <!-- TRUST METRICS -->
                <div class="demo-stats-grid">
                    <div class="demo-stat-pill">
                        <div class="demo-stat-val">200M+</div>
                        <div class="demo-stat-lbl">Litres Delivered</div>
                    </div>
                    <div class="demo-stat-pill">
                        <div class="demo-stat-val">99%</div>
                        <div class="demo-stat-lbl">Client Satisfaction</div>
                    </div>
                    <div class="demo-stat-pill">
                        <div class="demo-stat-val">100%</div>
                        <div class="demo-stat-lbl">ISO Aligned & Safe</div>
                    </div>
                </div>

            </div>

            <!-- RIGHT COLUMN: INTERACTIVE DEMO FORM -->
            <div class="demo-form-wrapper" data-aos="fade-left" data-aos-delay="150">

                <div id="demoFormContainer">
                    <div class="demo-form-header">
                        <h2>Request Your Custom Demo</h2>
                        <p>Fill out the operational details below and we will confirm your session within 2 hours.</p>
                    </div>

                    <form id="demoRequestForm" class="demo-form" action="{{ route('home.demo.store') }}" method="POST">
                        @csrf
                        <div id="demoFormAlert" class="demo-form-alert"></div>
                        <!-- ROW 1: NAME & EMAIL -->
                        <div class="demo-form-row">
                            <div class="demo-field-group">
                                <label for="fullName">Full Name <span class="req">*</span></label>
                                <div class="demo-input-wrap">
                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="12" cy="7" r="4"></circle>
                                    </svg>
                                    <input type="text" id="fullName" name="fullName" placeholder="Engr. John Okon" required>
                                </div>
                            </div>

                            <div class="demo-field-group">
                                <label for="corporateEmail">Corporate Email <span class="req">*</span></label>
                                <div class="demo-input-wrap">
                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                                        <polyline points="22,6 12,13 2,6"></polyline>
                                    </svg>
                                    <input type="email" id="corporateEmail" name="corporateEmail" placeholder="john.okon@company.com" required>
                                </div>
                            </div>
                        </div>

                        <!-- ROW 2: PHONE & COMPANY -->
                        <div class="demo-form-row">
                            <div class="demo-field-group">
                                <label for="phoneNumber">Phone Number <span class="req">*</span></label>
                                <div class="demo-input-wrap">
                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                                    </svg>
                                    <input type="tel" id="phoneNumber" name="phoneNumber" placeholder="+234 800 000 0000" required>
                                </div>
                            </div>

                            <div class="demo-field-group">
                                <label for="companyName">Company / Operator <span class="req">*</span></label>
                                <div class="demo-input-wrap">
                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect>
                                        <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path>
                                    </svg>
                                    <input type="text" id="companyName" name="companyName" placeholder="e.g. Shell, Seplat, Total" required>
                                </div>
                            </div>
                        </div>

                        <!-- ROW 3: ROLE & ASSET TYPE -->
                        <div class="demo-form-row">
                            <div class="demo-field-group">
                                <label for="jobTitle">Job Title</label>
                                <div class="demo-input-wrap">
                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect>
                                        <path d="M16 3v4M8 3v4M3 11h18"></path>
                                    </svg>
                                    <input type="text" id="jobTitle" name="jobTitle" placeholder="e.g. Drilling Manager, VP Ops">
                                </div>
                            </div>

                            <div class="demo-field-group">
                                <label for="operatingEnvironment">Operating Terrain / Asset</label>
                                <div class="demo-input-wrap">
                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <polygon points="12 2 2 7 12 12 22 7 12 2"></polygon>
                                        <polyline points="2 17 12 22 22 17"></polyline>
                                        <polyline points="2 12 12 17 22 12"></polyline>
                                    </svg>
                                    <select id="operatingEnvironment" name="operatingEnvironment">
                                        <option value="Onshore Land Rig">Onshore Land Rig</option>
                                        <option value="Swamp / Barge">Swamp / Barge Operation</option>
                                        <option value="Offshore Platform / Jack-up">Offshore Platform / Jack-up</option>
                                        <option value="Deepwater Exploration">Deepwater Exploration</option>
                                        <option value="Midstream & Pipeline">Midstream & Pipeline Assets</option>
                                        <option value="Corporate / Regulatory">Corporate / Regulatory Office</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!-- PRODUCT INTEREST CHIPS -->
                        <div class="demo-products-section">
                            <div class="demo-products-title">
                                <span>Select Solutions for Demo <span class="req">*</span></span>
                                <span class="hint">(Choose all that apply)</span>
                            </div>

                            <div class="demo-products-grid">
                                <label class="demo-product-chip">
                                    <input type="checkbox" name="products[]" value="Directional Drilling Solutions" checked>
                                    <div class="demo-chip-box">
                                        <span class="check-mark">
                                            <svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                        </span>
                                        <span>Directional Drilling</span>
                                    </div>
                                </label>

                                <label class="demo-product-chip">
                                    <input type="checkbox" name="products[]" value="Wellbore Surveying & MWD" checked>
                                    <div class="demo-chip-box">
                                        <span class="check-mark">
                                            <svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                        </span>
                                        <span>Wellbore Surveying & MWD</span>
                                    </div>
                                </label>

                                <label class="demo-product-chip">
                                    <input type="checkbox" name="products[]" value="AFE Manager Software">
                                    <div class="demo-chip-box">
                                        <span class="check-mark">
                                            <svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                        </span>
                                        <span>AFE Manager Software</span>
                                    </div>
                                </label>

                                <label class="demo-product-chip">
                                    <input type="checkbox" name="products[]" value="Wellman NextGen Platform">
                                    <div class="demo-chip-box">
                                        <span class="check-mark">
                                            <svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                        </span>
                                        <span>Wellman NextGen Platform</span>
                                    </div>
                                </label>

                                <label class="demo-product-chip">
                                    <input type="checkbox" name="products[]" value="Drill Bits & Downhole Supply">
                                    <div class="demo-chip-box">
                                        <span class="check-mark">
                                            <svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                        </span>
                                        <span>Drill Bit Supply</span>
                                    </div>
                                </label>

                                <label class="demo-product-chip">
                                    <input type="checkbox" name="products[]" value="OCTG Inspection & QA/QC">
                                    <div class="demo-chip-box">
                                        <span class="check-mark">
                                            <svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                        </span>
                                        <span>OCTG & NDT Inspection</span>
                                    </div>
                                </label>
                            </div>
                        </div>

                        <!-- ROW 4: FORMAT & TIMELINE -->
                        <div class="demo-form-row">
                            <div class="demo-field-group">
                                <label for="demoFormat">Preferred Demo Format</label>
                                <div class="demo-input-wrap">
                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <polygon points="23 7 16 12 23 17 23 7"></polygon>
                                        <rect x="1" y="5" width="15" height="14" rx="2" ry="2"></rect>
                                    </svg>
                                    <select id="demoFormat" name="demoFormat">
                                        <option value="Live Virtual Meeting (Microsoft Teams)">Live Virtual Meeting (Microsoft Teams)</option>
                                        <option value="Live Virtual Meeting (Zoom / Google Meet)">Live Virtual Meeting (Zoom / Google Meet)</option>
                                        <option value="In-Person Presentation (Port Harcourt)">In-Person Session (Port Harcourt)</option>
                                        <option value="In-Person Presentation (Lagos)">In-Person Session (Lagos)</option>
                                    </select>
                                </div>
                            </div>

                            <div class="demo-field-group">
                                <label for="demoTimeline">Target Project Timeline</label>
                                <div class="demo-input-wrap">
                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                                        <line x1="16" y1="2" x2="16" y2="6"></line>
                                        <line x1="8" y1="2" x2="8" y2="6"></line>
                                        <line x1="3" y1="10" x2="21" y2="10"></line>
                                    </svg>
                                    <select id="demoTimeline" name="demoTimeline">
                                        <option value="Immediate (Within 2 Weeks)">Immediate (Within 2 Weeks)</option>
                                        <option value="Next 30 - 60 Days">Next 30 - 60 Days</option>
                                        <option value="Quarterly Planning (Q3/Q4)">Quarterly Planning / Next Campaign</option>
                                        <option value="Information & Evaluation Only">General Technical Evaluation</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!-- PROJECT MESSAGE -->
                        <div class="demo-field-group">
                            <label for="projectDetails">Specific Scope or Operational Questions (Optional)</label>
                            <textarea id="projectDetails" name="projectDetails" placeholder="Tell us about your well profile, expected depths, survey challenges, or specific software modules you'd like us to focus on..."></textarea>
                        </div>

                        <!-- SUBMIT BUTTON -->
                        <button type="submit" class="demo-submit-btn" id="demoSubmitBtn">
                            <span>Confirm & Schedule Demo</span>
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.3" stroke-linecap="round" stroke-linejoin="round">
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                <polyline points="12 5 19 12 12 19"></polyline>
                            </svg>
                        </button>

                        <div class="demo-form-privacy">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                                <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                            </svg>
                            <span>Your data is strictly protected under enterprise NDA & confidentiality terms.</span>
                        </div>
                    </form>
                </div>

                <!-- SUCCESS STATE AFTER SUBMISSION -->
                <div id="demoSuccessState" class="demo-success-state">
                    <div class="demo-success-icon">
                        <svg width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                            <polyline points="22 4 12 14.01 9 11.01"></polyline>
                        </svg>
                    </div>
                    <h3>Demo Request Received!</h3>
                    <p>
                        Thank you, <strong id="successName">Sir/Madam</strong>. Our drilling operations team has received your technical demo request for <strong id="successCompany">your company</strong>.
                    </p>

                    <div class="demo-success-summary" id="successSummary">
                        We will reach out to you within <strong>2 business hours</strong> with available calendar slots and technical agenda materials.
                    </div>

                    <div style="display: flex; gap: 14px; justify-content: center; flex-wrap: wrap;">
                        <a href="{{ url('/') }}" class="demo-submit-btn" style="width: auto; padding: 12px 28px; text-decoration: none;">
                            <span>Return to Homepage</span>
                        </a>
                        <a id="successWhatsappBtn" href="https://wa.me/2349023670870" target="_blank" class="demo-whatsapp-btn">
                            <span>Message Us on WhatsApp</span>
                        </a>
                    </div>
                </div>

            </div>

        </div>

        <!-- ================= FAQ SECTION ================= -->
        <div class="demo-faq-section" data-aos="fade-up">
            <h3 class="demo-faq-title">Frequently Asked Questions</h3>

            <div class="demo-faq-grid">
                <div class="demo-faq-card">
                    <h4>
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path><line x1="12" y1="17" x2="12.01" y2="17"></line></svg>
                        How long does the demonstration last?
                    </h4>
                    <p>Typically 35 to 45 minutes, with dedicated time reserved for your engineering team to ask questions and review sample well reports.</p>
                </div>

                <div class="demo-faq-card">
                    <h4>
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path><line x1="12" y1="17" x2="12.01" y2="17"></line></svg>
                        Can my operations & field team join?
                    </h4>
                    <p>Yes! We encourage drilling superintendents, directional drillers, procurement officers, and asset leads to join the collaborative session.</p>
                </div>

                <div class="demo-faq-card">
                    <h4>
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path><line x1="12" y1="17" x2="12.01" y2="17"></line></svg>
                        Can we test with our own operational parameters?
                    </h4>
                    <p>Absolutely. Under a standard NDA, we can model your actual target trajectory, BHA design, or AFE reporting structure during the walkthrough.</p>
                </div>

                <div class="demo-faq-card">
                    <h4>
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path><line x1="12" y1="17" x2="12.01" y2="17"></line></svg>
                        How soon can equipment or software deploy?
                    </h4>
                    <p>Our operational inventory in Port Harcourt and Lagos is maintained in hot-standby condition with rapid mobilization across Nigerian operational basins.</p>
                </div>
            </div>
        </div>

    </div>
</main>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('demoRequestForm');
    const formContainer = document.getElementById('demoFormContainer');
    const successState = document.getElementById('demoSuccessState');
    const submitBtn = document.getElementById('demoSubmitBtn');

    if (form) {
        form.addEventListener('submit', function(e) {
            e.preventDefault();

            const alertBox = document.getElementById('demoFormAlert');
            if (alertBox) alertBox.style.display = 'none';

            const name = document.getElementById('fullName').value.trim();
            const company = document.getElementById('companyName').value.trim();
            const email = document.getElementById('corporateEmail').value.trim();
            const phone = document.getElementById('phoneNumber').value.trim();

            // Collect selected products
            const checkedBoxes = document.querySelectorAll('input[name="products[]"]:checked');
            const selectedProducts = Array.from(checkedBoxes).map(cb => cb.value).join(', ');

            // Button loading state
            const originalBtnHtml = submitBtn.innerHTML;
            submitBtn.disabled = true;
            submitBtn.innerHTML = `
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="animation: spin 0.7s linear infinite;">
                    <line x1="12" y1="2" x2="12" y2="6"></line>
                    <line x1="12" y1="18" x2="12" y2="22"></line>
                    <line x1="4.93" y1="4.93" x2="7.76" y2="7.76"></line>
                    <line x1="16.24" y1="16.24" x2="19.07" y2="19.07"></line>
                    <line x1="2" y1="12" x2="6" y2="12"></line>
                    <line x1="18" y1="12" x2="22" y2="12"></line>
                    <line x1="4.93" y1="19.07" x2="7.76" y2="16.24"></line>
                    <line x1="16.24" y1="7.76" x2="19.07" y2="4.93"></line>
                </svg>
                <span>Submitting & Saving Request...</span>
            `;

            const formData = new FormData(form);
            const actionUrl = form.getAttribute('action') || '{{ route("home.demo.store") }}';

            fetch(actionUrl, {
                method: 'POST',
                body: formData,
                headers: {
                    'X-Requested-With': 'XMLHttpRequest',
                    'Accept': 'application/json'
                }
            })
            .then(async response => {
                const data = await response.json().catch(() => null);
                if (!response.ok) {
                    throw data || { message: 'Network or database error occurred.' };
                }
                return data;
            })
            .then(data => {
                // Populate confirmation
                document.getElementById('successName').textContent = name;
                document.getElementById('successCompany').textContent = company;

                // Update WhatsApp button with personalized prefill
                const whatsappUrl = `https://wa.me/2349023670870?text=${encodeURIComponent('Hello GOX Energy, my name is ' + name + ' from ' + company + '. I just submitted a demo request for: ' + (selectedProducts || 'GOX Energy services') + '. Looking forward to our session.')}`;
                const waBtn = document.getElementById('successWhatsappBtn');
                if (waBtn) waBtn.href = whatsappUrl;

                // Smooth transition to success
                formContainer.style.display = 'none';
                successState.classList.add('active');
                successState.scrollIntoView({ behavior: 'smooth', block: 'center' });
            })
            .catch(err => {
                submitBtn.disabled = false;
                submitBtn.innerHTML = originalBtnHtml;

                let message = 'An unexpected error occurred. Please verify your details and try again.';
                if (err && err.errors) {
                    message = Object.values(err.errors).flat().join('<br>');
                } else if (err && err.message) {
                    message = err.message;
                }

                if (alertBox) {
                    alertBox.innerHTML = message;
                    alertBox.style.display = 'block';
                    alertBox.scrollIntoView({ behavior: 'smooth', block: 'center' });
                }
            });
        });
    }
});
</script>
@endsection
