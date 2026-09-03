<script setup>
import AppLayout from "../Layouts/AppLayout.vue";

defineProps({
  title: String,
});
</script>

<template>
  <AppLayout>
    <section class="masthead">
      <div class="container">
        <div class="masthead-subheading">Welcome To Our Studio!</div>

        <div class="masthead-heading text-uppercase">
          {{ title }}
        </div>

        <a class="btn btn-primary btn-xl text-uppercase" href="/services">
          Tell Me More
        </a>
      </div>
    </section>
  </AppLayout>
</template>
