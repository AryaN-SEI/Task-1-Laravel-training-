```vue
<script setup>
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
</script>

<template>
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
</template>
```
