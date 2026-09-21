@extends('layout.app')

@section('title')
Bit Supply & Drilling Tools Rentals
@endsection

@section('content')
<section class="rt-section">

    <div class="rt-container">

        <!-- HEADER -->
        <div class="rt-header" data-aos="fade-up">
            <h2>Drilling Tools Rentals</h2>
            <p>
                Our drilling tools rental inventory is built to support demanding
                field operations with reliable, high-performance equipment.
                Each tool is maintained to industry standards and ready for deployment,
                giving operators confidence, efficiency, and operational continuity.
            </p>
        </div>

        <!-- TOOL 1 -->
        <div class="rt-tool">

            <!-- IMAGES -->
            <div class="rt-images">
                <img src="{{ asset('assets/images/ndj.jpeg') }}" class="rt-main-img" alt="Mud Motor Main">
                <div class="rt-img-row">
                    <img src="{{ asset('assets/images/JSJE.jpeg') }}" alt="Mud Motor Work">
                    <img src="{{ asset('assets/images/JWJ.jpeg') }}" alt="Mud Motor Field">
                </div>
            </div>

            <!-- CONTENT -->
            <div class="rt-content">
                <h3>Mud Motors</h3>
                <p>
                    High-performance mud motors engineered for durability,
                    directional accuracy, and consistent downhole power.
                    Suitable for vertical, directional, and horizontal wells.
                </p>
                <ul class="rt-specs">
                    <li>Sizes available: 3 1/8" – 9 5/8"</li>
                    <li>Optimized torque and RPM output</li>
                    <li>Compatible with multiple bit types</li>
                    <li>Field-tested for reliability</li>
                </ul>
            </div>

        </div>

        <!-- TOOL 2 -->
        <div class="rt-tool rt-reverse">

            <div class="rt-images" >
                <!-- <img src="images/stabilizer-main.jpg" class="rt-main-img" alt="Stabilizer Main"> -->
                <div class="rt-img-row">
                    <!-- <img src="images/stabilizer-field.jpg" alt="Stabilizer Field"> -->
                    <!-- <img src="images/stabilizer-tools.jpg" alt="Stabilizer Tools"> -->
                </div>
            </div>

            <div class="rt-content" >
                <h3>Drill String Stabilizers</h3>
                <p>
                    Precision-engineered stabilizers designed to enhance
                    bottom hole assembly performance, improve wellbore quality,
                    and minimize vibration during drilling operations.
                </p>
                <ul class="rt-specs">
                    <li>Multiple blade configurations</li>
                    <li>Available in various sizes</li>
                    <li>Reduces lateral vibration</li>
                    <li>Improves trajectory control</li>
                </ul>
            </div>

        </div>

        <!-- TOOL 3 -->
        <div class="rt-tool">

            <div class="rt-images" data-aos="fade-right">
                <!-- <img src="images/drilling-tools-main.jpg" class="rt-main-img" alt="Downhole Tools Main"> -->
                <div class="rt-img-row">
                    <!-- <img src="images/tools-yard.jpg" alt="Tools Yard"> -->
                    <!-- <img src="images/tools-team.jpg" alt="Tools Team"> -->
                </div>
            </div>

            <div class="rt-content" data-aos="fade-left">
                <h3>Downhole Drilling Tools</h3>
                <p>
                    A broad inventory of certified downhole tools prepared
                    for rapid mobilization. Our equipment supports safer drilling,
                    reduced non-productive time, and improved operational efficiency.
                </p>
                <ul class="rt-specs">
                    <li>Strictly inspected and maintained</li>
                    <li>Ready for immediate deployment</li>
                    <li>Suitable for complex drilling programs</li>
                    <li>Technical support available</li>
                </ul>
            </div>

        </div>

    </div>

</section>

@endsection
