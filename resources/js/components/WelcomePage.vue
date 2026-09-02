<script setup>
const portfolioItems = [
  {
    title: "Threads",
    category: "Illustration",
    image: "/images/1.jpg",
  },
  {
    title: "Explore",
    category: "Graphic Design",
    image: "/images/2.jpg",
  },
  {
    title: "Finish",
    category: "Identity",
    image: "/images/3.jpg",
  },
  {
    title: "Lines",
    category: "Branding",
    image: "/images/4.jpg",
  },
  {
    title: "Southwest",
    category: "Website Design",
    image: "/images/5.jpg",
  },
  {
    title: "Window",
    category: "Photography",
    image: "/images/6.jpg",
  },
];
const timeline = [
  {
    date: "2009-2011",
    title: "Our Humble Beginnings",
    description:
      "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptates repudiandae sint et fugiat quo exercitationem maiores.",
  },
  {
    date: "March 2011",
    title: "An Agency Is Born",
    description:
      "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptates repudiandae sint et fugiat quo exercitationem maiores.",
  },
  {
    date: "December 2015",
    title: "Transition to Full Service",
    description:
      "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptates repudiandae sint et fugiat quo exercitationem maiores.",
  },
  {
    date: "July 2020",
    title: "Phase Two Expansion",
    description:
      "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptates repudiandae sint et fugiat quo exercitationem maiores.",
  },
];
const teamMembers = [
  {
    name: "Parveen Anand",
    role: "Lead Designer",
    image: "/images/team/1.jpg",
  },
  {
    name: "Diana Petersen",
    role: "Lead Marketer",
    image: "/images/team/2.jpg",
  },
  {
    name: "Larry Parker",
    role: "Lead Developer",
    image: "/images/team/3.jpg",
  },
];
const clients = [
  {
    name: "Microsoft",
    image: "/images/logos/microsoft.png",
  },
  {
    name: "Google",
    image: "/images/logos/google.png",
  },
  {
    name: "Facebook",
    image: "/images/logos/facebook.png",
  },
  {
    name: "IBM",
    image: "/images/logos/ibm.png",
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
          <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
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
    <section class="page-section" id="services">
      <div class="container">
        <div class="text-center">
          <h2 class="section-heading text-uppercase">Services</h2>

          <h3 class="section-subheading text-muted">
            Lorem ipsum dolor sit amet consectetur.
          </h3>
        </div>

        <div class="row text-center">
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fas fa-circle fa-stack-2x text-primary"></i>
              <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>
            </span>

            <h4 class="my-3">E-Commerce</h4>

            <p class="text-muted">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam
              architecto quo inventore harum ex magni, dicta impedit.
            </p>
          </div>

          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fas fa-circle fa-stack-2x text-primary"></i>
              <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
            </span>

            <h4 class="my-3">Responsive Design</h4>

            <p class="text-muted">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam
              architecto quo inventore harum ex magni, dicta impedit.
            </p>
          </div>

          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fas fa-circle fa-stack-2x text-primary"></i>
              <i class="fas fa-lock fa-stack-1x fa-inverse"></i>
            </span>

            <h4 class="my-3">Web Security</h4>

            <p class="text-muted">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam
              architecto quo inventore harum ex magni, dicta impedit.
            </p>
          </div>
        </div>
      </div>
    </section>
  </div>
  ```vue
  <!-- Portfolio -->
  <section class="page-section bg-light" id="portfolio">
    <div class="container">
      <div class="text-center">
        <h2 class="section-heading text-uppercase">Portfolio</h2>

        <h3 class="section-subheading text-muted">
          Lorem ipsum dolor sit amet consectetur.
        </h3>
      </div>
      <div class="row">
        <div
          v-for="(item, index) in portfolioItems"
          :key="index"
          class="col-lg-4 col-sm-6 mb-4"
        >
          <div class="portfolio-item">
            <a
              class="portfolio-link"
              href="#"
              data-bs-toggle="modal"
              data-bs-target="#portfolioModal"
              @click="selectedPortfolio = item"
            >
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fas fa-plus fa-3x"></i>
                </div>
              </div>

              <img
                class="img-fluid portfolio-image"
                :src="item.image"
                :alt="item.title"
              />
            </a>

            <div class="portfolio-caption">
              <div class="portfolio-caption-heading">
                {{ item.title }}
              </div>

              <div class="portfolio-caption-subheading text-muted">
                {{ item.category }}
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- About -->
  <section class="page-section" id="about">
    <div class="container">
      <div class="text-center">
        <h2 class="section-heading text-uppercase">About</h2>

        <h3 class="section-subheading text-muted">
          Lorem ipsum dolor sit amet consectetur.
        </h3>
      </div>

      <ul class="timeline">
        <li v-for="(item, index) in timeline" :key="index">
          <div class="timeline-image">
            <div
              class="rounded-circle h-100 w-100 d-flex align-items-center justify-content-center bg-primary text-white"
            >
              <span class="fw-bold">
                {{ index + 1 }}
              </span>
            </div>
          </div>

          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4>{{ item.date }}</h4>

              <h4 class="subheading">
                {{ item.title }}
              </h4>
            </div>

            <div class="timeline-body">
              <p class="text-muted">
                {{ item.description }}
              </p>
            </div>
          </div>
        </li>

        <li class="timeline-inverted">
          <div class="timeline-image">
            <h4 class="text-white">
              Be Part
              <br />
              Of Our
              <br />
              Story!
            </h4>
          </div>
        </li>
      </ul>
    </div>
  </section>
  <!-- Team -->
  <section class="page-section bg-light" id="team">
    <div class="container">
      <div class="text-center">
        <h2 class="section-heading text-uppercase">Our Amazing Team</h2>

        <h3 class="section-subheading text-muted">
          Lorem ipsum dolor sit amet consectetur.
        </h3>
      </div>

      <div class="row text-center">
        <div v-for="(member, index) in teamMembers" :key="index" class="col-lg-4">
          <div class="team-member">
            <!-- Placeholder instead of team photo -->
            <div
              class="mx-auto rounded-circle bg-secondary d-flex align-items-center justify-content-center text-white"
              style="width: 150px; height: 150px"
            >
              <span class="fs-1">
                {{ member.name.charAt(0) }}
              </span>
            </div>

            <h4 class="mt-3">
              {{ member.name }}
            </h4>

            <p class="text-muted">
              {{ member.role }}
            </p>

            <div class="mt-3">
              <a class="btn btn-dark btn-social mx-1" href="#!" aria-label="Twitter">
                <i class="fab fa-twitter"></i>
              </a>

              <a class="btn btn-dark btn-social mx-1" href="#!" aria-label="Facebook">
                <i class="fab fa-facebook-f"></i>
              </a>

              <a class="btn btn-dark btn-social mx-1" href="#!" aria-label="LinkedIn">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-8 mx-auto text-center">
          <p class="large text-muted mt-4">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque,
            laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias
            ut unde.
          </p>
        </div>
      </div>
    </div>
  </section>
  <section class="py-5">
    <div class="container">
      <div class="text-center mb-4">
        <h2 class="section-heading text-uppercase">Our Clients</h2>
        <h3 class="section-subheading text-muted">
          Trusted by businesses and organizations around the world.
        </h3>
      </div>

      <div class="row align-items-center">
        <div v-for="client in clients" :key="client.name" class="col-md-3 col-sm-6 my-3">
          <a href="#!">
            <img
              :src="client.image"
              :alt="client.name"
              class="img-fluid d-block mx-auto client-logo"
            />
          </a>
        </div>
      </div>
    </div>
  </section>
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
            <div class="form-group mb-3 h-100">
              <textarea
                class="form-control"
                placeholder="Your Message *"
                style="height: 100%; min-height: 180px"
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
  <footer class="footer py-4">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-4 text-lg-start">Copyright © Your Website 2026</div>

        <div class="col-lg-4 my-3 my-lg-0 text-center">
          <a class="btn btn-dark btn-social mx-1" href="#!" aria-label="Twitter">
            <i class="fa-brands fa-twitter"></i>
          </a>

          <a class="btn btn-dark btn-social mx-1" href="#!" aria-label="Facebook">
            <i class="fa-brands fa-facebook-f"></i>
          </a>

          <a class="btn btn-dark btn-social mx-1" href="#!" aria-label="LinkedIn">
            <i class="fa-brands fa-linkedin-in"></i>
          </a>
        </div>

        <div class="col-lg-4 text-lg-end">
          <a class="link-dark text-decoration-none me-3" href="#!"> Privacy Policy </a>

          <a class="link-dark text-decoration-none" href="#!"> Terms of Use </a>
        </div>
      </div>
    </div>
  </footer>
</template>
<style scoped>
.portfolio-image {
  width: 100%;
  height: 250px;
  object-fit: contain;
}
.client-logo {
  width: 180px;
  height: 80px;
  object-fit: contain;
}
</style>
