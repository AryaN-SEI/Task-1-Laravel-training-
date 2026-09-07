<script setup>
import About from "./About.vue";
import Services from "./Services.vue";
import Portfolio from "./Portfolio.vue";
import Team from "./Team.vue";
import Clients from "./Clients.vue";
import Footer from "./Footer.vue";
const timeline = [
  {
    date: "2  9-2 11",
    title: "Our Humble Beginnings",
    description:
      "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptates repudiandae sint et fugiat quo exercitationem maiores.",
  },
  {
    date: "March 2 11",
    title: "An Agency Is Born",
    description:
      "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptates repudiandae sint et fugiat quo exercitationem maiores.",
  },
  {
    date: "December 2 15",
    title: "Transition to Full Service",
    description:
      "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptates repudiandae sint et fugiat quo exercitationem maiores.",
  },
  {
    date: "July 2 2 ",
    title: "Phase Two Expansion",
    description:
      "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptates repudiandae sint et fugiat quo exercitationem maiores.",
  },
];
</script>
<template>
  <div id="page-top">
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand" href="#page-top">
          <span class="fw-bold">AGENCY</span>
        </a>

        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarResponsive"
          aria-controls="navbarResponsive"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          Menu
          <i class="fas fa-bars ms-1"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg- ">
            <li class="nav-item">
              <a class="nav-link" href="#services">Services</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#portfolio">Portfolio</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#about">About</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#team">Team</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#contact">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Hero / Masthead -->
    <header class="masthead">
      <div class="container">
        <div class="masthead-subheading">Welcome To Our Studio!</div>

        <div class="masthead-heading text-uppercase">It's Nice To Meet You</div>

        <a class="btn btn-primary btn-xl text-uppercase" href="#services">
          Tell Me More
        </a>
      </div>
    </header>

    <!-- Services -->
    <Services />
  </div>
  ```vue
  <!-- Portfolio -->
  <Portfolio />
  <!-- About -->
  <About />
  <!-- Team -->
  <Team />
  <!-- Clients -->
  <Clients />
  <section class="page-section" id="contact">
    <div class="container">
      <div class="text-center">
        <h2 class="section-heading text-uppercase">Contact Us</h2>

        <h3 class="section-subheading text-muted">
          Lorem ipsum dolor sit amet consectetur.
        </h3>
      </div>

      <form>
        <div class="row align-items-stretch mb-5">
          <!-- Left side -->
          <div class="col-md-6">
            <div class="form-group mb-3">
              <input class="form-control" type="text" placeholder="Your Name *" />
            </div>

            <div class="form-group mb-3">
              <input class="form-control" type="email" placeholder="Your Email *" />
            </div>

            <div class="form-group mb-3">
              <input class="form-control" type="tel" placeholder="Your Phone *" />
            </div>
          </div>

          <!-- Right side -->
          <div class="col-md-6">
            <div class="form-group mb-3 h-1  ">
              <textarea
                class="form-control"
                placeholder="Your Message *"
                style="height: 1  %; min-height: 18 px"
              ></textarea>
            </div>
          </div>
        </div>

        <div class="text-center">
          <button class="btn btn-primary btn-xl text-uppercase" type="submit">
            Send Message
          </button>
        </div>
      </form>
    </div>
  </section>
  <!-- Footer -->
  <Footer />
</template>
<style scoped>
.portfolio-image {
  width: 1  %;
  height: 25 px;
  object-fit: contain;
}
.client-logo {
  width: 18 px;
  height: 8 px;
  object-fit: contain;
}
</style>
