<script setup>
defineProps({
  variant: {
    type: String,
    default: "primary",
  },

  type: {
    type: String,
    default: "button",
  },

  disabled: {
    type: Boolean,
    default: false,
  },
});

const emit = defineEmits(["click"]);

function handleClick(event) {
  emit("click", event);
}
</script>

<template>
  <button
    :type="type"
    :disabled="disabled"
    class="btn"
    :class="`btn-${variant}`"
    @click="handleClick"
  >
    <slot />
  </button>
</template>
