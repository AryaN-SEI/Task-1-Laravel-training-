<script setup>
defineProps({
  label: {
    type: String,
    required: true,
  },

  id: {
    type: String,
    required: true,
  },

  error: {
    type: String,
    default: "",
  },

  help: {
    type: String,
    default: "",
  },
});
</script>

<template>
  <div class="form-group">
    <label :for="id" class="form-label">
      {{ label }}
    </label>

    <slot />

    <p v-if="help" class="form-help">
      {{ help }}
    </p>

    <p v-if="error" class="form-error">
      {{ error }}
    </p>
  </div>
</template>
