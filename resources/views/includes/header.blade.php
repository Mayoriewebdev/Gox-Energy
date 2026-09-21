 <div id="site-loader">
     <div class="loader-content">
         <img src="{{ asset('assets/images/goz.png') }}" alt="Company Logo" class="loader-logo">
         <span class="loader-ring"></span>
         <p class="loader-text">Loading...</p>
     </div>
 </div>


 <!-- ================= HEADER ================= -->
 <header class="header">
     <div class="nav-wrapper">

         <div class="logo">
             <a href="{{ url('/') }}" class="logo-link" aria-label="Goz Energy Home">
                 <img src="{{ asset('assets/images/goxti-removebg-preview.png') }}" alt="Goz Energy Logo">
             </a>
         </div>

         <nav class="nav">
             <a href="#home">Home</a>
             <a href="#about">About</a>
             <a href="#product">Product</a>
             <a href="#services">Services</a>
             <a href="{{ route('home.training') }}">Training</a>
             <a class="btn-primary" href="{{ route('home.demo') }}">
                 <span>Get a Demo</span>
                 <svg class="btn-icon" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.3" stroke-linecap="round" stroke-linejoin="round">
                     <path d="M5 12h14M12 5l7 7-7 7"/>
                 </svg>
             </a>

         </nav>

         <!-- Modern Hamburger -->
         <button class="hamburger" aria-label="Toggle navigation" type="button">
             <span></span>
             <span></span>
             <span></span>
         </button>

     </div>
 </header>


 <!-- end of home  page -->