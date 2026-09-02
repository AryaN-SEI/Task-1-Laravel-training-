<script setup>
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
  <section class="py-5">
    <div class="container">
      <div class="row align-items-center">
        <div v-for="client in clients" :key="client.name" class="col-md-3 col-sm-6 my-3">
          <a href="#!">
            <img
              class="img-fluid d-block mx-auto client-logo"
              :src="client.image"
              :alt="client.name"
            />
          </a>
        </div>
      </div>
    </div>
  </section>
</template>

<style scoped>
.client-logo {
  width: 180px;
  height: 80px;
  object-fit: contain;
}
</style>
