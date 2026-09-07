<script setup>
defineProps({
  title: {
    type: String,
    required: true,
  },

  value: {
    type: [String, Number],
    required: true,
  },

  description: {
    type: String,
    default: "",
  },
});
</script>

<template>
  <div class="stat-card">
    <div class="stat-card-title">
      {{ title }}
    </div>

    <div class="stat-card-value">
      {{ value }}
    </div>

    <div v-if="description" class="stat-card-description">
      {{ description }}
    </div>
  </div>
</template>

<style scoped>
.stat-card {
  padding: 24px;

  background: var(--surface);
  border: 1px solid var(--border);
  border-radius: var(--radius-lg);

  box-shadow: var(--shadow-sm);

  transition: transform 0.2s ease, box-shadow 0.2s ease;
}

.stat-card:hover {
  transform: translateY(-2px);
  box-shadow: var(--shadow-md);
}

.stat-card-title {
  color: var(--text-secondary);
  font-size: 14px;
  font-weight: 600;
}

.stat-card-value {
  margin-top: 8px;

  color: var(--text);
  font-size: 32px;
  font-weight: 700;
  line-height: 1.2;
}

.stat-card-description {
  margin-top: 8px;

  color: var(--text-muted);
  font-size: 13px;
}
</style>
