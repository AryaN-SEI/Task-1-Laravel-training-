```vue
<script setup>
import AppLayout from "../Layouts/AppLayout.vue";
</script>

<template>
  <AppLayout>
    <section class="page-section bg-light" id="team">
      <div class="container">
        <div class="text-center">
          <h2 class="section-heading text-uppercase">Our Amazing Team</h2>

          <h3 class="section-subheading text-muted">
            Meet the creative people behind our agency.
          </h3>
        </div>

        <div class="row">
          <!-- Team Member 1 -->
          <div class="col-lg-4">
            <div class="team-member text-center">
              <span class="fa-stack fa-5x mb-3">
                <i class="fas fa-circle fa-stack-2x text-primary"></i>
                <i class="fas fa-user fa-stack-1x fa-inverse"></i>
              </span>

              <h4>John Doe</h4>

              <p class="text-muted">Lead Designer</p>

              <a class="btn btn-dark btn-social mx-1" href="#!">
                <i class="fab fa-twitter"></i>
              </a>

              <a class="btn btn-dark btn-social mx-1" href="#!">
                <i class="fab fa-facebook-f"></i>
              </a>

              <a class="btn btn-dark btn-social mx-1" href="#!">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </div>

          <!-- Team Member 2 -->
          <div class="col-lg-4">
            <div class="team-member text-center">
              <span class="fa-stack fa-5x mb-3">
                <i class="fas fa-circle fa-stack-2x text-primary"></i>
                <i class="fas fa-user fa-stack-1x fa-inverse"></i>
              </span>

              <h4>Jane Smith</h4>

              <p class="text-muted">Lead Developer</p>

              <a class="btn btn-dark btn-social mx-1" href="#!">
                <i class="fab fa-twitter"></i>
              </a>

              <a class="btn btn-dark btn-social mx-1" href="#!">
                <i class="fab fa-facebook-f"></i>
              </a>

              <a class="btn btn-dark btn-social mx-1" href="#!">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </div>

          <!-- Team Member 3 -->
          <div class="col-lg-4">
            <div class="team-member text-center">
              <span class="fa-stack fa-5x mb-3">
                <i class="fas fa-circle fa-stack-2x text-primary"></i>
                <i class="fas fa-user fa-stack-1x fa-inverse"></i>
              </span>

              <h4>Mike Johnson</h4>

              <p class="text-muted">Marketing Manager</p>

              <a class="btn btn-dark btn-social mx-1" href="#!">
                <i class="fab fa-twitter"></i>
              </a>

              <a class="btn btn-dark btn-social mx-1" href="#!">
                <i class="fab fa-facebook-f"></i>
              </a>

              <a class="btn btn-dark btn-social mx-1" href="#!">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </AppLayout>
</template>
```
