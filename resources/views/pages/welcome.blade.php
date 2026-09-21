@extends('layout.app')

@section('title')
Gox Energy
@endsection

@section('content')



<!-- ================= HERO SECTION ================= -->
<section id="home" class="hero">
    <div class="overlay"></div>

    <div class="hero-content" data-aos="fade-up" data-aos-duration="1500">
        <h1>
            Precision Drilling<br>
            Engineering Excellence<br>
        </h1>


        <p>
            Advanced Directional Drilling Solutions | Real-Time Wellbore Surveying | Professional Training Programs
        </p>

        <div class="hero-buttons">
            <a class="btn-primary" href="#consultation">Request Consultation</a>
            <a class="btn-outline" href="#services">View Services</a>
        </div>
    </div>
</section>

<!-- About Us -->

<section id="about" class="section">
    <div class="container about-wrapper" data-aos="fade-up">

        <!-- LEFT CONTENT -->
        <div class="about-content">
            <!-- <div style="width:50px; height:3px; background-color:#f97316; margin:0 auto 15px;"></div> -->
            <h2>About GOX Energy</h2>
            <div class="mv-line"></div>

            <p class="lead">
                Founded to deliver world-class oil and gsas services in Nigeria, GOX Energy operates
                across the energy value chain with a strong commitment to safety, quality, and local
                content development.
            </p>

            <p>
                We combine deep technical expertise with strict HSE discipline and ISO-aligned
                operational systems to provide reliable, efficient, and environmentally responsible
                solutions for industry and host communities.
            </p>

            <!-- STATS -->
            <div class="about-stats">
                <div class="stat">
                    <span class="stat-number">200M+</span>
                    <span class="stat-label">Litres Delivered<br>Annually</span>
                </div>

                <div class="stat">
                    <span class="stat-number">99%</span>
                    <span class="stat-label">Client<br>Satisfaction</span>
                </div>
            </div>

            <a href="#services" class="about-link">
                Explore Our Services →
            </a>
        </div>

        <!-- RIGHT IMAGE -->
        <div class="about-image">
            <img src="{{ asset('assets/images/goxbuild.jpeg') }}" alt="GOX Energy Operations">

            <!-- FLOATING BADGE -->
            <div class="quality-badge" data-aos="fade-right" data-aos-delay="300">
                <div class="badge-icon">
                    <!-- INLINE ICON (no external libs) -->
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M12 2L14.9 5.6L19.3 6.3L16.4 10L17.1 14.4L12 12.5L6.9 14.4L7.6 10L4.7 6.3L9.1 5.6L12 2Z"
                            fill="#f97316" />
                    </svg>
                </div>
                <div class="badge-text">
                    <strong>Quality Certified</strong>
                    <span>Since 2024</span>
                </div>
            </div>
        </div>

    </div>
</section>




<section id="mission-vision" class="mv-section">
    <div class="container" data-aos="fade-up">

        <!-- Header -->
        <div class="mv-header">
            <h2>Mission & Vision</h2>
            <div class="mv-line"></div>
            <p>
                From exploration to distribution, we deliver energy with safety,
                reliability, and transparency.
            </p>
        </div>

        <!-- Cards -->
        <div class="mv-grid">

            <!-- Mission -->
            <div class="mv-card" data-aos="fade-up" data-aos-delay="100">
                <span class="mv-number">01</span>
                <div class="mv-icon">
                    <img src="{{ asset('assets/images/pl.png') }}" alt="Vision Icon">
                    <!-- <i class="fa-regular fa-lightbulb"></i> -->
                </div>
                <h3>Mission</h3>
                <p>
                    Our mission is to be introduced and recognized as one of the best
                    country’s leaders in all our specific areas of activities.
                </p>
            </div>

            <!-- Vision -->
            <div class="mv-card" data-aos="fade-up" data-aos-delay="200">
                <span class="mv-number">02</span>
                <div class="mv-icon">
                    <img src="{{ asset('assets/images/bob.png') }}" alt="Vision Icon">
                </div>
                <h3>Vision</h3>
                <p>
                    Our vision is to meet up with the present and future requests and needs
                    of the Oil, Gas, Energy, and Allied Industries in Nigeria.
                </p>
            </div>

        </div>

    </div>
</section>






<section id="services" class="feature-section">
    <div class="feature-container">

        <div class="feature-header">
            <h2>Our Services</h2>
            <div class="mv-line"></div>
            <p>Innovative approaches to optimizing your drilling operations</p>
        </div>

        <div class="feature-grid">

            <div class="feature-card">
                <h3>On-Site<br>Directional Drillers</h3>
                <p>
                    Unbiased supervision, drilling & tool review—direct to operator
                </p>
                <a href="{{ route('home.directional') }}">+ Learn More</a>
            </div>

            <div class="feature-card">
                <h3>Wellbore<br>Surveying</h3>
                <p>
                    Precision wellbore surveying services utilizing advanced technology to ensure accurate positioning and trajectory control throughout the drilling process.
                </p>
                <a href="{{ route('home.wellbore') }}">+ Learn More</a>
            </div>

            <!-- <div class="feature-card">
                <h3>In-House<br>Expertise</h3>
                <p>
                    Dedicated oil & gas professionals with over 150 years of collective experience
                </p>
                <a href="#">+ Learn More</a>
            </div> -->

            <div class="feature-card">
                <h3>Geomechanics <br>Services</h3>
                <p>
                    Delivering advanced subsurface analysis and rock mechanics solutions to optimize drilling, and
                    reservoir performance.
                </p>
                <a href="{{ route('home.geomechanics') }}">+ Learn More</a>
            </div>

            <div class="feature-card">
                <h3>GeoSteering &<br>Geological</h3><br>Services
                <p>
                    Geosteering, reservoir evaluation, geo management, operations & wellsite geology
                </p>
                <a href="{{ route('home.geosteering') }}">+ Learn More</a>
            </div>


            <div class="feature-card">
                <h3>Drilling Optimization &<br>Software</h3>
                <p>
                    Advanced drilling optimization solutions and completions software to enhance operational efficiency,
                    reduce costs, and improve performance metrics.
                </p>
                <a href="{{ route('home.drilling') }}">+ Learn More</a>
            </div>


            <div class="feature-card">
                <h3>Wellsite Geology &<br>Subsurface</h3><br>Services
                <p>
                    High-precision well placement, sweet-spot pay-zone exposure, and real-time geological decision-making
                </p>
                <a href="{{ route('home.geosteering') }}">+ Learn More</a>
            </div>


            <div class="feature-card">
                <h3>Manpower<br>Supply</h3>
                <p>
                    We supply qualified, experienced, and certified personnel for drilling and oilfield operations,
                    delivering reliable workforce solutions tailored to meet project requirements safely and
                    efficiently.
                </p>
                <a href="{{ route('home.manpower') }}">+ Learn More</a>
            </div>

            <div class="feature-card">
                <h3>Bit Supply &<br>Drilling Tools Rentals</h3>
                <p>
                    Comprehensive supply of drilling bits and rental services for mud motors, NMDC, stabilizers, and
                    other essential drilling tools.
                </p>
                <a href="{{ route('home.bitsupply') }}">+ Learn More</a>
            </div>

            <div class="feature-card">
                <h3>Inspections & Drilling<br>Tubular Repairs</h3>
                <p>
                    Professional inspection services and machine shop capabilities for drilling tubular repairs,
                    ensuring equipment integrity and operational safety.
                </p>
                <a href="{{ route('home.inspection') }}">+ Learn More</a>
            </div>

            <div class="feature-card">
                <h3>Oil & Gas<br>Training Programs</h3>
                <p>
                    Comprehensive training and capacity building programs designed to develop industry professionals
                    with practical and theoretical knowledge.
                </p>
                <a href="{{ route('home.training') }}">+ Learn More</a>
            </div>

        </div>




    </div>
</section>




<!-- start of our service 1 -->

<section class="gox-services-section" data-aos="fade-up">
    <div class="gox-services-header" data-aos="fade-up" data-aos-delay="100">
        <!-- <h2>Our Services</h2> -->
        <!-- <div class="mv-line"></div> -->
        <p>
            Comprehensive drilling solutions backed by decades of industry expertise
            and cutting-edge technology
        </p>
    </div>

    <div class="gox-services-grid">
        <div class="gox-service-card" tabindex="0" data-aos="zoom-in" data-aos-delay="100">
            <img src="{{ asset('assets/images/jert.jpeg') }}" alt="Directional Drilling Engineering Consultancy">
            <div class="gox-service-overlay">
                <h3>Directional Drilling<br>Engineering Consultancy</h3>
            </div>
        </div>

        <div class="gox-service-card" tabindex="0" data-aos="zoom-in" data-aos-delay="200">
            <img src="{{ asset('assets/images/eiei.jpeg') }}" alt="Wellbore Surveying">
            <div class="gox-service-overlay">
                <a href="{{ route('home.wellbore') }}">
                    <h3>Wellbore Surveying</h3>
                </a>

            </div>
        </div>

        <div class="gox-service-card" tabindex="0" data-aos="zoom-in" data-aos-delay="300">
            <img src="{{ asset('assets/images/drx.jpeg') }}" alt="Bit Supply & Drilling Tools Rentals">
            <div class="gox-service-overlay">
                <h3>Bit Supply & Drilling Tools Rentals</h3>
            </div>
        </div>

        <div class="gox-service-card" tabindex="0" data-aos="zoom-in" data-aos-delay="400">
            <img src="{{ asset('assets/images/vlv.jpeg') }}" alt="Inspections & Drilling Tubular Repairs">
            <div class="gox-service-overlay">
                <h3>Inspections & Drilling Tubular Repairs</h3>
            </div>
        </div>

        <div class="gox-service-card" tabindex="0" data-aos="zoom-in" data-aos-delay="500">
            <img src="{{ asset('assets/images/lil.jpeg') }}" alt="Drilling Optimization & Software">
            <div class="gox-service-overlay">
                <h3>Drilling Optimization & Software</h3>
            </div>
        </div>

        <div class="gox-service-card" tabindex="0" data-aos="zoom-in" data-aos-delay="600">
            <img src="{{ asset('assets/images/etre.jpeg') }}" alt="Oil & Gas Training & Capacity Building">
            <div class="gox-service-overlay">
                <h3>Oil & Gas Training & Capacity Building</h3>
            </div>
        </div>
    </div>
</section>
<!-- end or our services 1 -->









<!-- Our Services 2 -->
<section class="section services-section">
    <div class="container" data-aos="fade-up">

     
        <!-- <div class="section-header">
          
            <h2>Comprehensive Energy Solutions</h2>
           
            <p>
                Delivering world-class directional drilling, wellbore surveying, and training services to the global
                oil and gas industry with cutting-edge technology and unmatched expertise
            </p>
        </div>

    
        <div class="services-grid">

           
            <div class="service-card" data-aos="fade-up" data-aos-delay="100">
                <div class="service-icon">
                    <img src="{{ asset('assets/images/drfr.png') }}" alt="Directional Drilling">
                </div>
                <h3>Directional Drilling Engineering Consultancy</h3>
                <p>
                    Expert consultancy services for complex directional drilling projects, providing innovative
                    solutions and
                    technical expertise to optimize wellbore trajectories and maximize reservoir contact.
                </p>
                <ul>
                    <li>Well Planning</li>
                    <li>Trajectory Design</li>
                    <li>Real-time Support</li>
                </ul>
                <a href="{{ route('home.directional') }}">Learn More →</a>
            </div>

            <div class="service-card" data-aos="fade-up" data-aos-delay="150">
                <div class="service-icon">
                    <img src="{{ asset('assets/images/trips.png') }}" alt="Wellbore Surveying">
                </div>
                <h3>Wellbore Surveying</h3>
                <p>
                    Precision wellbore surveying services utilizing advanced technology to ensure accurate positioning
                    and
                    trajectory control throughout the drilling process.
                </p>
                <ul>
                    <li>MWD/LWD Services</li>
                    <li>Gyroscopic Surveys</li>
                    <li>Quality Control</li>
                </ul>
                <a href="{{ route('home.wellbore') }}">Learn More →</a>
            </div>

            <div class="service-card" data-aos="fade-up" data-aos-delay="200">
                <div class="service-icon">
                    <img src="{{ asset('assets/images/oob-removebg-preview.png') }}" alt="Drilling Tools">
                </div>
                <h3>Bit Supply & Drilling Tools Rentals</h3>
                <p>
                    Comprehensive supply of drilling bits and rental services for mud motors, NMDC, stabilizers, and
                    other
                    essential drilling tools.
                </p>
                <ul>
                    <li>PDC Bits</li>
                    <li>Mud Motors</li>
                    <li>Stabilizers & Reamers</li>
                </ul>
                <a href="{{ route('home.bitsupply') }}">Learn More →</a>
            </div>

            <div class="service-card" data-aos="fade-up" data-aos-delay="250">
                <div class="service-icon">
                    <img src="{{ asset('assets/images/ksk-removebg-preview.png') }}" alt="Inspection Services">
                </div>
                <h3>Inspections & Drilling Tubular Repairs</h3>
                <p>
                    Professional inspection services and machine shop capabilities for drilling tubular repairs,
                    ensuring
                    equipment integrity and operational safety.
                </p>
                <ul>
                    <li>NDT Inspection</li>
                    <li>Thread Repair</li>
                    <li>Equipment Certification</li>
                </ul>
                <a href="{{ route('home.inspection') }}">Learn More →</a>
            </div>

            <div class="service-card" data-aos="fade-up" data-aos-delay="300">
                <div class="service-icon">
                    <img src="{{ asset('assets/images/loi-removebg-preview.png') }}" alt="Optimization">
                </div>
                <h3>Drilling Optimization & Software</h3>
                <p>
                    Advanced drilling optimization solutions and completions software to enhance operational efficiency,
                    reduce costs, and improve performance metrics.
                </p>
                <ul>
                    <li>Performance Analytics</li>
                    <li>Cost Reduction</li>
                    <li>Predictive Modeling</li>
                </ul>
                <a href="{{ route('home.drilling') }}">Learn More →</a>
            </div>

            <div class="service-card" data-aos="fade-up" data-aos-delay="350">
                <div class="service-icon">
                    <img src="{{ asset('assets/images/www-removebg-preview.png') }}" alt="Training">
                </div>
                <h3>Oil & Gas Training Programs</h3>
                <p>
                    Comprehensive training and capacity building programs designed to develop industry professionals
                    with
                    practical and theoretical knowledge.
                </p>
                <ul>
                    <li>Certification Courses</li>
                    <li>Field Training</li>
                    <li>Safety Programs</li>
                </ul>
                <a href="{{ route('home.training') }}">Learn More →</a>
            </div>

        </div> -->

        <!-- Stats -->
        <div class="services-stats">
            <div>
                <h3>750+</h3>
                <p>Projects Completed</p>
            </div>
            <div>
                <h3>25+</h3>
                <p>Countries Served</p>
            </div>
            <div>
                <h3>2000+</h3>
                <p>Professionals Trained</p>
            </div>
            <div>
                <h3>99.2%</h3>
                <p>Client Satisfaction</p>
            </div>
        </div>

    </div>
</section>

<!-- end of our services 2 -->







<!-- WHY CHOOSE GOZ ENERGY -->
<section class="why-goz">
    <div class="why-container" data-aos="fade-up">

        <!-- <span class="why-line"></span> -->
        <h2 class="why-title">WHY CHOOSE GOX ENERGY</h2>
        <div class="mv-line"></div>
        <p class="why-subtitle">
            Discover what sets us apart as the preferred partner for directional drilling engineering,
            wellbore surveying solutions, and comprehensive training programs in the oil and gas industry
        </p>

        <div class="why-grid">

            <!-- Card 1 -->
            <div class="why-card" data-aos="fade-up" data-aos-delay="100">
                <div class="icon-box">
                    <img src="{{ asset('assets/images/olo-removebg-preview.png') }}" alt="Expert Team">
                </div>
                <h3>Expert Team</h3>
                <p>
                    Our team comprises industry veterans with over 150 years of combined experience in
                    directional drilling, wellbore surveying, and oil and gas operations.
                </p>
            </div>

            <!-- Card 2 -->
            <div class="why-card" data-aos="fade-up" data-aos-delay="200">
                <div class="icon-box">
                    <img src="{{ asset('assets/images/wee-removebg-preview.png') }}" alt="Advanced Technology">
                </div>
                <h3>Advanced Technology</h3>
                <p>
                    We utilize state-of-the-art drilling equipment, real-time monitoring systems, and
                    proprietary software to ensure precision and efficiency.
                </p>
            </div>

            <!-- Card 3 -->
            <div class="why-card" data-aos="fade-up" data-aos-delay="300">
                <div class="icon-box">
                    <img src="{{ asset('assets/images/lkj-removebg-preview.png') }}" alt="24/7 Support">
                </div>
                <h3>24/7 Support</h3>
                <p>
                    Round-the-clock technical support and emergency response teams ensure your operations
                    never face downtime.
                </p>
            </div>

            <!-- Card 4 -->
            <div class="why-card" data-aos="fade-up" data-aos-delay="400">
                <div class="icon-box">
                    <img src="{{ asset('assets/images/cost-removebg-preview.png') }}" alt="Cost Efficiency">
                </div>
                <h3>Cost Efficiency</h3>
                <p>
                    Our drilling optimization strategies reduce non-productive time by up to 35% while
                    maintaining superior quality standards.
                </p>
            </div>

            <!-- Card 5 -->
            <div class="why-card" data-aos="fade-up" data-aos-delay="500">
                <div class="icon-box">
                    <img src="{{ asset('assets/images/safe-removebg-preview.png') }}" alt="Safety Excellence">
                </div>
                <h3>Safety Excellence</h3>
                <p>
                    Maintaining an impeccable safety record through rigorous HSE protocols, continuous
                    training, and industry-leading systems.
                </p>
            </div>

            <!-- Card 6 -->
            <div class="why-card" data-aos="fade-up" data-aos-delay="600">
                <div class="icon-box">
                    <img src="{{ asset('assets/images/centric-removebg-preview.png') }}" alt="Client Centric">
                </div>
                <h3>Client-Centric</h3>
                <p>
                    Tailored solutions designed around your specific needs, delivering customized strategies
                    that exceed expectations consistently.
                </p>
            </div>

        </div>
    </div>
</section>



<!-- <section class="qv-services">
    
    <div class="qv-services-grid">

      
        <div class="qv-service-card" data-aos="fade-up">
            
            <div class="qv-img-box">
                <img src="images/shipws.jpeg" alt="">
            </div>

            <h3>Directional Drilling Engineering</h3>

            <p>
                GOX Energy delivers advanced directional drilling solutions that improve well accuracy,
                optimize drilling performance, and reduce operational risk. Our experienced engineers
                support projects from planning through execution while maintaining the highest industry standards.
            </p>

        </div>


    
        <div class="qv-service-card" data-aos="fade-up" data-aos-delay="120">
            
            <div class="qv-img-box">
                <img src="images/survey.jpg" alt="">
            </div>

            <h3>Wellbore Gyroscopic Surveying</h3>

            <p>
                Using north-seeking gyro technology, we provide highly precise well positioning without
                magnetic interference. This ensures dependable measurements that strengthen drilling
                confidence and support safer operations.
            </p>

        </div>


      
        <div class="qv-service-card" data-aos="fade-up">
            
            <div class="qv-img-box">
                <img src="images/tools.jpg" alt="">
            </div>

            <h3>Drilling Bits & Tools Rental</h3>

            <p>
                We supply premium drilling tools including mud motors, stabilizers, drill pipes, and
                specialized equipment. Our flexible rental structure helps operators control costs while
                ensuring reliable field performance.
            </p>

        </div>


  
        <div class="qv-service-card" data-aos="fade-up" data-aos-delay="120">
            
            <div class="qv-img-box">
                <img src="images/software.jpg" alt="">
            </div>

            <h3>Drilling Software Consulting</h3>

            <p>
                Our drilling and reporting software solutions enhance operational visibility,
                improve data security, and deliver real-time insights that enable faster and
                smarter project execution.
            </p>

        </div>


      
        <div class="qv-service-card" data-aos="fade-up">
            
            <div class="qv-img-box">
                <img src="images/machineshop.jpg" alt="">
            </div>

            <h3>Machine Shop & Pipe Services</h3>

            <p>
                Certified to international standards, our machine shop performs precision pipe repairs,
                rethreading, and machining using high-grade materials to guarantee durability and compliance.
            </p>

        </div>


  
        <div class="qv-service-card" data-aos="fade-up" data-aos-delay="120">
            
            <div class="qv-img-box">
                <img src="images/project.jpg" alt="">
            </div>

            <h3>Integrated Drilling Project Management</h3>

            <p>
                Through strong partnerships and deep expertise, GOX Energy delivers end-to-end drilling
                consultancy — from site preparation to completion — ensuring efficiency, accountability,
                and superior service delivery.
            </p>

        </div>

    </div>

</section>
 -->







<div class="cta-wrapper">
    <div class="cta-box">
        <h2>Ready to Experience the Gox Energy Difference?</h2>

        <p>
            Join hundreds of satisfied clients who trust us for their directional
            drilling and wellbore surveying needs
        </p>

        <a href="#" class="cta-btn">
            <span>Get Started Today</span>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <line x1="5" y1="12" x2="19" y2="12"></line>
                <polyline points="12 5 19 12 12 19"></polyline>
            </svg>
        </a>
    </div>
</div>






<section id="product" class="products-section">
    <div class="products-header">
        <h2>Products</h2>
        <span class="products-line"></span>
        <p>
            Comprehensive energy solutions across oil and gas for retail,
            industrial, and marine sectors.
        </p>
    </div>

    <!-- Oil Division -->
    <div class="product-group">
        <h3 class="group-title">
            <img src="{{ asset('assets/images/oil.png') }}" alt="Oil Division" />
            Oil Division
        </h3>
        <p class="group-desc">
            Comprehensive refined products solutions for retail, industrial,
            and marine customers
        </p>

        <div class="product-grid">
            <div class="product-card">
                <img src="{{ asset('assets/images/fill-removebg-preview.png') }}" alt="PMS Petrol" />
                <h4>PMS (Petrol)</h4>
                <p>
                    Premium Motor Spirit for retail and commercial fueling across
                    West Africa.
                </p>
            </div>

            <div class="product-card">
                <img src="{{ asset('assets/images/oilp-removebg-preview.png') }}" alt="AGO Diesel" />
                <h4>AGO (Diesel)</h4>
                <p>
                    Automotive Gas Oil for marine vessels, generators, and
                    industrial equipment.
                </p>
            </div>

            <div class="product-card">
                <img src="{{ asset('assets/images/planer-removebg-preview.png') }}" alt="ATK Jet A1" />
                <h4>ATK (Jet A1)</h4>
                <p>
                    Aviation Turbine Kerosene for safe and efficient aircraft
                    operations.
                </p>
            </div>

            <div class="product-card">
                <img src="{{ asset('assets/images/fier-removebg-preview.png') }}" alt="HFO Base Oils" />
                <h4>HFO & Base Oils</h4>
                <p>
                    Heavy Fuel Oil and premium base oils for industrial and marine
                    applications.
                </p>
            </div>
        </div>
    </div>

    <!-- Gas Division -->
    <div class="product-group">
        <h3 class="group-title">
            <img src="{{ asset('assets/images/owol-removebg-preview.png') }}" alt="Gas Division" />
            Gas Division
        </h3>
        <p class="group-desc">
            Commitment to cleaner energy through comprehensive gas solutions
            from bulk to last-mile distribution
        </p>

        <div class="product-grid">
            <div class="product-card">
                <img src="{{ asset('assets/images/fill-removebg-preview.png') }}" alt="LPG" />
                <h4>LPG</h4>
                <p>
                    Liquefied Petroleum Gas—bulk supply to cylinder distribution for
                    domestic and commercial use.
                </p>
            </div>

            <div class="product-card">
                <img src="{{ asset('assets/images/gassse-removebg-preview.png') }}" alt="LNG" />
                <h4>LNG</h4>
                <p>
                    Liquefied Natural Gas for power generation and large-scale
                    industrial applications.
                </p>
            </div>

            <div class="product-card">
                <img src="{{ asset('assets/images/cloud-removebg-preview.png') }}" alt="CNG" />
                <h4>CNG</h4>
                <p>
                    Compressed Natural Gas for fleet vehicles and industrial
                    compressed air applications.
                </p>
            </div>

            <div class="product-card">
                <img src="{{ asset('assets/images/dia-removebg-preview.png') }}" alt="NGLs" />
                <h4>NGLs</h4>
                <p>
                    Natural Gas Liquids for petrochemical and manufacturing
                    sectors.
                </p>
            </div>
        </div>
    </div>



    <!-- Energy Logistics -->
    <div class="product-group">
        <h3 class="group-title">
            <img src="{{ asset('assets/images/light-removebg-preview.png') }}" alt="Energy Logistics" />
            Energy Logistics
        </h3>
        <p class="group-desc">
            Chartering, trucking, and route optimization for efficient and safe deliveries
        </p>

        <div class="product-grid">
            <div class="product-card">
                <img src="{{ asset('assets/images/ship-removebg-preview.png') }}" alt="Chartering" />
                <h4>Chartering</h4>
                <p>
                    Marine vessel chartering for offshore supply and bulk product
                    transportation across West African waters.
                </p>
            </div>

            <div class="product-card">
                <img src="{{ asset('assets/images/truck-removebg-preview.png') }}" alt="Trucking & Distribution" />
                <h4>Trucking & Distribution</h4>
                <p>
                    Reliable ground transportation with modern fleet for fuel and
                    gas distribution across key locations.
                </p>
            </div>

            <div class="product-card">
                <img src="{{ asset('assets/images/route-removebg-preview.png') }}" alt="Route Optimization" />
                <h4>Route Optimization</h4>
                <p>
                    Data-driven logistics planning for timely, cost-effective, and
                    safe product delivery.
                </p>
            </div>
        </div>
    </div>
</section>





<!-- HSE CODES -->
<section class="hse-esg-section">
    <div class="hse-esg-container">

        <!-- LEFT: HSE -->
        <div class="hse-content">
            <h2>Health, Safety &amp; Environment</h2>
            <!-- <div class="mv-line"></div> -->
            <p class="hse-intro">
                We embed safety in every task—driving a zero-incident culture through
                training, audits, and leadership engagement.
            </p>

            <ul class="hse-list">
                <li>Process safety &amp; emergency response</li>
                <li>Contractor management &amp; PTW systems</li>
                <li>Environmental monitoring &amp; spill prevention</li>
            </ul>
        </div>

        <!-- RIGHT: ESG -->
        <div class="esg-card">
            <h3 class="esg-title">
                <img src="{{ asset('assets/images/worltt-removebg-preview.png') }}" alt="ESG" />
                ESG Commitments
            </h3>

            <div class="esg-grid">
                <div class="esg-item green">
                    <strong>50%+</strong>
                    <span>Local content &amp; suppliers</span>
                </div>

                <div class="esg-item blue">
                    <strong>25%↓</strong>
                    <span>Flaring intensity (target)</span>
                </div>

                <div class="esg-item yellow">
                    <strong>0</strong>
                    <span>Recordable incidents (goal)</span>
                </div>

                <div class="esg-item gray">
                    <strong>ISO</strong>
                    <span>14001 &amp; 45001 aligned</span>
                </div>
            </div>
        </div>

    </div>
</section>









<section id="equipment" class="gox-equipment-section" data-aos="fade-up">
    <div class="gox-equipment-header" data-aos="fade-up" data-aos-delay="100">
        <h2>Equipment & Technology</h2>
        <div class="mv-line"></div>
        <p>
            Premium drilling tools and advanced software solutions for superior performance
        </p>
    </div>

    <div class="gox-equipment-grid">
        <!-- CARD 1 -->
        <div class="gox-equipment-card" data-aos="fade-up" data-aos-delay="100">
            <div class="gox-equipment-image">
                <img src="{{ asset('assets/images/dldl.jpg') }}" alt="Drilling Tools" />
            </div>
            <div class="gox-equipment-content">
                <h3>Drilling Tools</h3>
                <ul>
                    <li>PDC & Roller Cone Bits</li>
                    <li>Mud Motors (Positive Displacement)</li>
                    <li>Non-Magnetic Drill Collars</li>
                    <li>Stabilizers & Reamers</li>
                    <li>Drilling Jars & Shock Subs</li>
                    <li>Downhole Tools</li>
                </ul>
            </div>
        </div>

        <!-- CARD 2 -->
        <div class="gox-equipment-card" data-aos="fade-up" data-aos-delay="200">
            <div class="gox-equipment-image">
                <img src="{{ asset('assets/images/wetr.jpg') }}" alt="Surveying Equipment" />
            </div>
            <div class="gox-equipment-content">
                <h3>Surveying Equipment</h3>
                <ul>
                    <li>MWD/LWD Systems</li>
                    <li>Gyroscopic Survey Tools</li>
                    <li>Electromagnetic Ranging</li>
                    <li>Survey Quality Control</li>
                    <li>Data Acquisition Systems</li>
                    <li>Calibration Equipment</li>
                </ul>
            </div>
        </div>

        <!-- CARD 3 -->
        <div class="gox-equipment-card" data-aos="fade-up" data-aos-delay="300">
            <div class="gox-equipment-image">
                <img src="{{ asset('assets/images/sos.jpg') }}" alt="Software Solutions" />
            </div>
            <div class="gox-equipment-content">
                <h3>Software Solutions</h3>
                <ul>
                    <li>Well Planning Software</li>
                    <li>Trajectory Design Tools</li>
                    <li>Torque & Drag Modeling</li>
                    <li>Real-Time Monitoring</li>
                    <li>Data Analytics Platform</li>
                    <li>Reporting Systems</li>
                </ul>
            </div>
        </div>
    </div>
</section>



<!-- faq codes -->

<section class="faq-section" data-aos="fade-up">
    <div class="faq-container">

        <h2 class="faq-title" data-aos="fade-up" data-aos-delay="100">
            Frequently Asked Questions
        </h2>
        <!-- <div class="mv-line"></div> -->

        <div class="faq-divider" data-aos="zoom-in" data-aos-delay="200"></div>

        <p class="faq-subtitle" data-aos="fade-up" data-aos-delay="300">
            Answers to common questions about our directional drilling, oil & gas support services and technical
            capabilities.
        </p>

        <div class="faq-item" data-aos="fade-up" data-aos-delay="100">
            <h3>What services does GOX Energy provide?</h3>
            <p>
                GOX Energy provides comprehensive oil and gas support services including directional drilling
                engineering,
                wellbore surveying (gyro services), drilling bits supply, drilling tools rental, drilling software
                consultancy,
                machine shop services, OCTG services, NDT inspections and integrated drilling project management.
            </p>
        </div>

        <div class="faq-item" data-aos="fade-up" data-aos-delay="200">
            <h3>Do you offer directional drilling and wellbore surveying services?</h3>
            <p>
                Yes. GOX Energy specializes in directional drilling engineering for all well profiles including
                horizontal,
                extended reach and deviated wells. We also provide high-accuracy wellbore surveying using North-Seeking
                Gyro systems that are unaffected by magnetic interference.
            </p>
        </div>

        <div class="faq-item" data-aos="fade-up" data-aos-delay="300">
            <h3>Do you supply drilling tools and provide rental services?</h3>
            <p>
                Yes. We supply drilling bits (PDC, tricone and hammer bits) and offer rental services for drilling tools
                such
                as
                drill pipes, collars, stabilizers, subs, fishing tools and mud motors. Flexible and cost-effective
                rental
                plans
                are available to meet client project requirements.
            </p>
        </div>

        <div class="faq-item" data-aos="fade-up" data-aos-delay="400">
            <h3>What software solutions does GOX Energy support?</h3>
            <p>
                We provide drilling and completions software consultancy including WellMan NextGen, AFE Manager and
                other industry-standard tools for well planning, trajectory design, reporting, cost control and data
                visualization.
                Our systems enable secure real-time access to operational data from anywhere in the world.
            </p>
        </div>

        <div class="faq-item" data-aos="fade-up" data-aos-delay="500">
            <h3>How can I request a quote or speak with GOX Energy?</h3>
            <p>
                You can contact GOX Energy directly via phone or email to discuss your project requirements.
                Our technical team will review your needs and provide a tailored solution promptly.
                <br><br>
                <strong>Email:</strong> goxdrilling@gmail.com<br>
                <strong>Phone:</strong> +234 902 367 0870
            </p>
        </div>

    </div>
</section>
<!-- end of faq -->








<section class="industries">
    <div class="industries-container">

        <div class="industries-header" data-aos="fade-up">
            <h2>Industries We Serve</h2>
            <div class="mv-line"></div>
            <p><span>Gox Energy</span> provides specialized services across multiple sectors</p>
        </div>

        <div class="industries-grid">

            <!-- Card 1 -->
            <div class="industry-card" data-aos="fade-up" data-aos-delay="100">
                <div class="industry-img">
                    <img src="{{ asset('assets/images/jfj.jpg') }}" alt="Upstream Oil and Gas">
                </div>
                <div class="industry-content">
                    <h3>Upstream Oil & Gas</h3>
                    <p>Exploration and production drilling services for conventional and unconventional resources</p>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="industry-card" data-aos="fade-up" data-aos-delay="200">
                <div class="industry-img">
                    <img src="{{ asset('assets/images/germ.jpg') }}" alt="Geothermal Energy">
                </div>
                <div class="industry-content">
                    <h3>Geothermal Energy</h3>
                    <p>Specialized drilling solutions for geothermal well development and energy production</p>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="industry-card" data-aos="fade-up" data-aos-delay="300">
                <div class="industry-img">
                    <img src="{{ asset('assets/images/ksk.jpg') }}" alt="Mining and Minerals">
                </div>
                <div class="industry-content">
                    <h3>Mining & Minerals</h3>
                    <p>Precision drilling services for mineral exploration and extraction operations</p>
                </div>
            </div>

        </div>
    </div>
</section>






<!-- parter code -->
<section class="partner-section" data-aos="fade-up">
    <div class="partner-container">

        <h2 class="partner-title" data-aos="fade-up" data-aos-delay="100">
            Partner With GOX Energy
            <div class="mv-line"></div>
        </h2>


        <p class="partner-text" data-aos="fade-up" data-aos-delay="200">
            GOX Energy is a 100% Nigerian-owned oil and gas services company with its operational base in
            Port Harcourt, Rivers State. We provide reliable directional drilling engineering, wellbore
            surveying, drilling tools rental, drilling bits supply, software consultancy and integrated
            oil and gas support services to operators across Nigeria.
        </p>

        <p class="partner-text" data-aos="fade-up" data-aos-delay="300">
            Whether you are an operator seeking dependable technical solutions or a partner exploring
            strategic collaboration opportunities, our experienced team is ready to deliver safe,
            efficient and world-class service execution.
        </p>

    </div>
</section>
<!-- end partner code -->






<!-- contact form -->
<section id="consultation" class="contact-feature-section">
    <div class="contact-feature-grid">

        <!-- LEFT FEATURES -->
        <div class="feature-cards">
            <div class="feature-card">
                <img src="{{ asset('assets/images/fill-removebg-preview.png') }}" alt="Bulk Distribution"
                    class="feature-icon">
                <h4>Bulk Distribution</h4>
                <p>Reliable supply for vessels and industrial clients</p>
            </div>

            <div class="feature-card">
                <img src="{{ asset('assets/images/truck-removebg-preview.png') }}" alt="Integrated Logistics"
                    class="feature-icon">
                <h4>Integrated Logistics</h4>
                <p>Coastal location enabling efficient distribution</p>
            </div>

            <div class="feature-card">
                <img src="{{ asset('assets/images/shiwlr-removebg-preview.png') }}" alt="HSE Focus"
                    class="feature-icon">
                <h4>HSE Focus</h4>
                <p>Strong safety and environmental compliance</p>
            </div>

            <div class="feature-card">
                <img src="{{ asset('assets/images/trick-removebg-preview.png') }}" alt="Growth Potential"
                    class="feature-icon">
                <h4>Growth Potential</h4>
                <p>Attractive outlook for partners and investors</p>
            </div>
        </div>

        <!-- RIGHT CONTACT CARD -->
        <div class="contact-card">
            <h2>Ready to Discuss Supply or Investment?</h2>

            <p class="contact-text">
                Talk to us about bunkering, maritime logistics, bulk fuel supply, or strategic
                investment opportunities. Our team will review your requirements and propose
                solutions tailored to your operational and financial goals.
            </p>

            <a href="{{ route('home.demo') }}" class="contact-btn">
                Schedule a Demo or Consultation <span>→</span>
            </a>

            <div class="contact-info">
                <div class="info-item">
                    <img src="{{ asset('assets/images/calls-removebg-preview.png') }}" alt="Phone">
                    <span>+234 902 367 0870</span>
                </div>

                <div class="info-item">
                    <img src="{{ asset('assets/images/eamils-removebg-preview.png') }}" alt="Email">
                    <span>goxenergy.com</span>
                </div>

                <div class="info-item">
                    <img src="{{ asset('assets/images/route-removebg-preview.png') }}" alt="Address">
                    <span>1 Digital Energy Close, KM 3 Igbo Etche Road, Off Eleme Junction, Port Harcourt, Rivers State Nigeria.</span>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- end of contact form -->
@endsection