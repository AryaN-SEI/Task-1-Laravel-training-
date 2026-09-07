<script setup>
import { Link } from "@inertiajs/vue3";
</script>

<template>
  <div>
    <nav class="navbar">
      <div class="brand">User Management</div>

      <div class="nav-links">
        <Link :href="route('users.index')"> Users </Link>

        <Link :href="route('users.create')"> Add User </Link>
      </div>
    </nav>

    <main class="container">
      <slot />
    </main>
  </div>
</template>
