<script setup>
import { Link } from "@inertiajs/vue3";
</script>

<template>
  <div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <Link class="navbar-brand" href="/"> AGENCY </Link>

        <div class="navbar-nav ms-auto">
          <Link class="nav-link" href="/">Home</Link>
          <Link class="nav-link" href="/about">About</Link>
          <Link class="nav-link" href="/services">Services</Link>
          <Link class="nav-link" href="/departments">Departments</Link>
          <Link class="nav-link" href="/team">Team</Link>
          <Link class="nav-link" href="/contact">Contact</Link>
        </div>
      </div>
    </nav>

    <main>
      <slot />
    </main>

    <footer class="footer py-4">
      <div class="container text-center">Copyright © AGENCY 2026</div>
    </footer>
  </div>
</template>
