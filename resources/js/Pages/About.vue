```vue
<script setup>
import AppLayout from "../Layouts/AppLayout.vue";
</script>

<template>
  <AppLayout>
    <section class="page-section" id="about">
      <div class="container">
        <div class="text-center">
          <h2 class="section-heading text-uppercase">About</h2>

          <h3 class="section-subheading text-muted">
            Lorem ipsum dolor sit amet consectetur.
          </h3>
        </div>

        <ul class="timeline">
          <!-- 2009-2011 -->
          <li>
            <div class="timeline-image">
              <div
                class="rounded-circle h-100 w-100 d-flex align-items-center justify-content-center bg-primary text-white"
              >
                <span class="fw-bold">1</span>
              </div>
            </div>

            <div class="timeline-panel">
              <div class="timeline-heading">
                <h4>2009-2011</h4>

                <h4 class="subheading">Our Humble Beginnings</h4>
              </div>

              <div class="timeline-body">
                <p class="text-muted">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut
                  voluptates repudiandae sint et fugiat quo exercitationem maiores.
                </p>
              </div>
            </div>
          </li>

          <!-- March 2011 -->
          <li class="timeline-inverted">
            <div class="timeline-image">
              <div
                class="rounded-circle h-100 w-100 d-flex align-items-center justify-content-center bg-primary text-white"
              >
                <span class="fw-bold">2</span>
              </div>
            </div>

            <div class="timeline-panel">
              <div class="timeline-heading">
                <h4>March 2011</h4>

                <h4 class="subheading">An Agency Is Born</h4>
              </div>

              <div class="timeline-body">
                <p class="text-muted">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut
                  voluptates repudiandae sint et fugiat quo exercitationem maiores.
                </p>
              </div>
            </div>
          </li>

          <!-- December 2015 -->
          <li>
            <div class="timeline-image">
              <div
                class="rounded-circle h-100 w-100 d-flex align-items-center justify-content-center bg-primary text-white"
              >
                <span class="fw-bold">3</span>
              </div>
            </div>

            <div class="timeline-panel">
              <div class="timeline-heading">
                <h4>December 2015</h4>

                <h4 class="subheading">Transition to Full Service</h4>
              </div>

              <div class="timeline-body">
                <p class="text-muted">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut
                  voluptates repudiandae sint et fugiat quo exercitationem maiores.
                </p>
              </div>
            </div>
          </li>

          <!-- July 2020 -->
          <li class="timeline-inverted">
            <div class="timeline-image">
              <div
                class="rounded-circle h-100 w-100 d-flex align-items-center justify-content-center bg-primary text-white"
              >
                <span class="fw-bold">4</span>
              </div>
            </div>

            <div class="timeline-panel">
              <div class="timeline-heading">
                <h4>July 2020</h4>

                <h4 class="subheading">Phase Two Expansion</h4>
              </div>

              <div class="timeline-body">
                <p class="text-muted">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut
                  voluptates repudiandae sint et fugiat quo exercitationem maiores.
                </p>
              </div>
            </div>
          </li>

          <!-- Final -->
          <li class="timeline-inverted">
            <div class="timeline-image">
              <h4 class="text-white">
                Be Part<br />
                Of Our<br />
                Story!
              </h4>
            </div>
          </li>
        </ul>
      </div>
    </section>
  </AppLayout>
</template>
```
