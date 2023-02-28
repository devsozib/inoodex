<header class="header-area position_top">
    <div class="site-logo">
      <div class="logo">
        <a href="{{ url('/') }}">
          <img src="assets/img/logo white.png" alt="image">
        </a>
      </div>
    </div>
    <div class="main-menu">
      <nav class="main-nav">
        <div class="mobile-menu-logo">
          <a href="{{ url('/') }}">
            <img src="assets/img/logo white.png" alt="">
          </a>
          <div class="remove">
            <i class="bi bi-plus-lg"></i>
          </div>
        </div>
        <ul>
          <li class="has-child active">
            <a href="{{ url('/') }}">Home</a>
          </li>
          <li>
            <a href="{{ route('about') }}">About Us</a>
          </li>
          <li>
            <a href="{{ route('service') }}">Service</a>
            {{-- <i class="bi bi-chevron-down"></i> --}}
            {{-- <ul class="sub-menu">
              <li>
                <a href="{{ route('service') }}">Service</a>
              </li>
            </ul> --}}
          </li>
          <li>
            <a href="{{ route('project') }}">Project</a>
            {{-- <i class="bi bi-chevron-down"></i> --}}
            {{-- <ul class="sub-menu">
              <li>
                <a href="project.html">Project</a>
              </li>
              <li>
                <a href="project-details.html">Project Details</a>
              </li>
            </ul> --}}
          </li>
          {{-- <li class="has-child">
            <a href="blog.html">Blog</a>
            <i class="bi bi-chevron-down"></i>
            <ul class="sub-menu">
              <li>
                <a href="blog.html">Blog</a>
              </li>
              <li>
                <a href="blog-standard.html">Blog standard</a>
              </li>
              <li>
                <a href="blog-details.html">Blog Details</a>
              </li>
            </ul>
          </li>
          <li class="has-child">
            <a href="#">Pages</a>
            <i class="bi bi-chevron-down"></i>
            <ul class="sub-menu">
              <li>
                <a href="team.html">Team</a>
              </li>
              <li>
                <a href="pricing.html">Pricing</a>
              </li>
              <li>
                <a href="faq.html">FAQs</a>
              </li>
              <li>
                <a href="error.html">Error 404</a>
              </li>
            </ul>
          </li> --}}
          <li>
            <a href="{{ route('contact') }}">Contact Us</a>
          </li>
        </ul>
        <div class="get-qoute d-flex justify-content-center d-lg-none d-block pt-50">
          <div class="cmn-btn">
            <div class="line-1"></div>
            <div class="line-2"></div>
            <a href="{{ route('contact') }}">Get A Quote</a>
          </div>
        </div>
      </nav>
    </div>
    <div class="nav-right">
      <div class="get-qoute">
        <div class="cmn-btn">
          <div class="line-1"></div>
          <div class="line-2"></div>
          <a href="contact.html">Get A Quote</a>
        </div>
      </div>
      <div class="mobile-menu">
        <a href="javascript:void(0)" class="cross-btn">
          <span class="cross-top"></span>
          <span class="cross-middle"></span>
          <span class="cross-bottom"></span>
        </a>
      </div>
    </div>
  </header>
