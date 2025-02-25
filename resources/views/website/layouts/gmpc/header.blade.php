  <nav
      class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5">
      <a href="index.html" class="navbar-brand d-flex align-items-center">
        <img
            class="img-fluid me-3"
            src="{{ asset('frontend/assets/img/GMPC LOGO.png') }}"
            alt=""
            
          />
        <h5 class="m-0">
          THE GARRISON METHODIST <br> PRESBYTERIAN CHURCH
        </h5>
      </a>
      <button
        type="button"
        class="navbar-toggler"
        data-bs-toggle="collapse"
        data-bs-target="#navbarCollapse"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav mx-auto bg-light rounded pe-4 py-3 py-lg-0">
          <a href="index" class="nav-item nav-link active">Home</a>
          <a href="about" class="nav-item nav-link">About Us</a>
          <a href="service" class="nav-item nav-link">Events</a>
          <div class="nav-item dropdown">
            <a
              href="#"
              class="nav-link dropdown-toggle"
              data-bs-toggle="dropdown"
              >Pages</a
            >
            <div class="dropdown-menu bg-light border-0 m-0">
              <a href="feature.html" class="dropdown-item">Activities</a>
              <a href="appointment.html" class="dropdown-item">Announcement</a>
              <a href="team.html" class="dropdown-item">The Board</a>
              <a href="testimonial.html" class="dropdown-item">Testimonial</a>
              <a href="childrenservice.html" class="dropdown-item">Children Service</a>
            </div>
          </div>
          <a href="contact" class="nav-item nav-link">Contact Us</a>
        </div>
      </div>
      <a href="" class="btn btn-primary px-3 d-none d-lg-block">Get A Quote</a>
    </nav>