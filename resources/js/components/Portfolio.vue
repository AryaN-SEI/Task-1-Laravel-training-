```vue
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

import { ref } from "vue";

const selectedPortfolio = ref(null);
</script>

<template>
  <section class="page-section bg-light" id="portfolio">
    <div class="container">
      <!-- Heading -->
      <div class="text-center">
        <h2 class="section-heading text-uppercase">Portfolio</h2>

        <h3 class="section-subheading text-muted">
          Lorem ipsum dolor sit amet consectetur.
        </h3>
      </div>

      <!-- Portfolio items -->
      <div class="row">
        <div
          v-for="item in portfolioItems"
          :key="item.title"
          class="col-lg-4 col-sm-6 mb-4"
        >
          <div class="portfolio-item">
            <!-- Image -->
            <a
              class="portfolio-link"
              href="#"
              data-bs-toggle="modal"
              data-bs-target="#portfolioModal"
              @click.prevent="selectedPortfolio = item"
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

            <!-- Caption -->
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
</template>

<style scoped>
.portfolio-image {
  width: 100%;
  height: 250px;
  object-fit: contain;
}
</style>
```
