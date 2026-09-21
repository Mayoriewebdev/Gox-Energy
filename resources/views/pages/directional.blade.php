@extends('layout.app')

@section('title')
Directional drilling
@endsection

@section('content')

<section class="dd-section">

    <div class="dd-container">

        <!-- HEADER -->
        <div class="dd-header" data-aos="fade-up">
            <h2>Directional Drilling Engineering Consultancy</h2>
            <p>
                Expert consultancy services for complex directional drilling projects,
                delivering innovative engineering solutions that optimize wellbore
                trajectories and maximize reservoir contact.
            </p>
        </div>


        <!-- HERO IMAGE -->
        <div class="dd-hero-img" data-aos="zoom-in">
            <img src="{{ asset('assets/images/yuf.jpeg') }}" alt="Directional drilling rig">
        </div>



        <!-- SERVICES -->
        <div class="dd-services">

            <div class="dd-service" data-aos="fade-up">
                <img src="images/well-planning.jpg" alt="Well Planning">

                <div>
                    <h3>Well Planning</h3>
                    <p>
                        Comprehensive well planning designed to reduce operational risk,
                        control drilling costs, and ensure precise target intersection
                        using advanced engineering models.
                    </p>
                </div>
            </div>


            <div class="dd-service" data-aos="fade-up" data-aos-delay="150">
                <img src="images/trajectory.jpg" alt="Trajectory Design">

                <div>
                    <h3>Trajectory Design</h3>
                    <p>
                        High-precision trajectory engineering that improves well placement,
                        minimizes torque and drag, and enables safe drilling through
                        challenging geological structures.
                    </p>
                </div>
            </div>


            <div class="dd-service" data-aos="fade-up" data-aos-delay="300">
                <img src="images/realtime-support.jpg" alt="Real Time Support">

                <div>
                    <h3>Real-Time Support</h3>
                    <p>
                        Continuous monitoring and engineering guidance during drilling
                        operations to enhance performance, accelerate decision-making,
                        and proactively resolve downhole challenges.
                    </p>
                </div>
            </div>

        </div>

    </div>

</section>


@endsection