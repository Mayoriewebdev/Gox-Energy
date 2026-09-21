@extends('layout.app')

@section('title')
Inspection & Machine Shop Tubular Repairs
@endsection

@section('content')
<section class="im-section">

    <div class="im-container">

        <!-- HEADER -->
        <div class="im-header" data-aos="fade-up">
            <h2>Inspection & Machine Shop Tubular Repairs</h2>
            <p>
                Our machine shop is equipped with CNC machinery and expert technicians
                to handle tubular repairs, thread inspections, and quality control
                for all drilling operations. Precision and reliability are our top priority.
            </p>
        </div>

        <!-- TOOL 1 -->
        <div class="im-tool">

            <!-- IMAGES -->
            <div class="im-images" data-aos="fade-right">
                <img src="{{ asset('assets/images/yueue.jpeg') }}" class="im-main-img" alt="CNC Machine Main">
                <div class="im-img-row">
                    <img src="{{ asset('assets/images/igl.jpeg') }}" alt="CNC Operator">
                    <img src="{{ asset('assets/images/dkek.jpeg') }}" alt="Tool Inspection">
                </div>
            </div>

            <!-- CONTENT -->
            <div class="im-content" data-aos="fade-left">
                <h3>CNC Machines & Operations</h3>
                <p>
                    State-of-the-art CNC machinery allows precise tubular machining,
                    repairs, and threading. Each component is handled with
                    the highest standard of accuracy and efficiency.
                </p>
                <ul class="im-specs">
                    <li>High-precision CNC lathes and mills</li>
                    <li>Automated thread inspection</li>
                    <li>Capability for complex tubular geometries</li>
                    <li>Rapid repair turnaround times</li>
                </ul>
            </div>

        </div>

        <!-- TOOL 2 -->
        <div class="im-tool im-reverse">

            <div class="im-images" data-aos="fade-left">
                <img src="{{ asset('assets/images/hltryl.jpeg') }}" class="im-main-img" alt="Thread Inspection Main">
                <div class="im-img-row">
                    <!-- <img src="images/technician-inspecting.jpg" alt="Technician Inspecting"> -->
                    <!-- <img src="images/tubular-inspection.jpg" alt="Tubular Inspection"> -->
                </div>
            </div>

            <div class="im-content" data-aos="fade-right">
                <h3>Tool & Thread Inspection</h3>
                <p>
                    Skilled technicians perform rigorous inspections on all
                    tubulars and drilling tools to ensure compliance
                    with industry standards and optimal operational safety.
                </p>
                <ul class="im-specs">
                    <li>Thread gauging and verification</li>
                    <li>Non-destructive testing of tubulars</li>
                    <li>Quality control documentation</li>
                    <li>Field-ready certification</li>
                </ul>
            </div>

        </div>

        <!-- TOOL 3 -->
        <div class="im-tool">

            <div class="im-images" data-aos="fade-right">
                <!-- <img src="images/machine-shop-team.jpg" class="im-main-img" alt="Machine Shop Team"> -->
                <div class="im-img-row">
                    <!-- <img src="images/machine-shop-tools.jpg" alt="Machine Shop Tools">
                    <img src="images/inspection-setup.jpg" alt="Inspection Setup"> -->
                </div>
            </div>

            <div class="im-content" data-aos="fade-left">
                <h3>Full Service Tubular Repairs</h3>
                <p>
                    From cutting and threading to full tubular repair,
                    our machine shop provides end-to-end solutions to ensure
                    wellbore readiness and operational efficiency.
                </p>
                <ul class="im-specs">
                    <li>CNC machining for tubular repairs</li>
                    <li>Thread reconditioning and cleaning</li>
                    <li>Pressure testing and certification</li>
                    <li>Rapid deployment for field operations</li>
                </ul>
            </div>

        </div>

    </div>

</section>


@endsection