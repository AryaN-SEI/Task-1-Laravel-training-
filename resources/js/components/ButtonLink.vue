<script setup>
import { Link } from "@inertiajs/vue3";

defineProps({
  href: {
    type: String,
    required: true,
  },

  variant: {
    type: String,
    default: "primary",
  },
});
</script>

<template>
  <Link :href="href" class="btn" :class="`btn-${variant}`">
    <slot />
  </Link>
</template>
