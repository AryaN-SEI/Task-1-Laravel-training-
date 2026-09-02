```vue
<script setup>
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
</script>

<template>
  <section class="page-section bg-light" id="team">
    <div class="container">
      <!-- Heading -->
      <div class="text-center">
        <h2 class="section-heading text-uppercase">Our Amazing Team</h2>

        <h3 class="section-subheading text-muted">
          Lorem ipsum dolor sit amet consectetur.
        </h3>
      </div>

      <!-- Team Members -->
      <div class="row text-center">
        <div v-for="member in teamMembers" :key="member.name" class="col-lg-4">
          <div class="team-member">
            <!-- Team Image -->
            <div
              class="mx-auto rounded-circle bg-secondary d-flex align-items-center justify-content-center text-white"
              style="width: 150px; height: 150px"
            >
              <span class="fs-1">
                {{ member.name.charAt(0) }}
              </span>
            </div>

            <!-- Name -->
            <h4 class="mt-3">
              {{ member.name }}
            </h4>

            <!-- Role -->
            <p class="text-muted">
              {{ member.role }}
            </p>

            <!-- Social Links -->
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

      <!-- Team Description -->
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
</template>
```
