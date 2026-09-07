<script setup>
import Button from "./Button.vue";
import ButtonLink from "./ButtonLink.vue";

defineProps({
  user: {
    type: Object,
    required: true,
  },
});

const emit = defineEmits(["delete"]);

function handleDelete() {
  console.log("1. UserCard clicked");
  emit("delete");
}
</script>

<template>
  <div class="user-card">
    <!-- User information -->
    <div class="user-card-header">
      <div class="user-avatar">
        {{ user.name.charAt(0).toUpperCase() }}
      </div>

      <div class="user-card-identity">
        <h3>
          {{ user.name }}
        </h3>

        <span> User #{{ user.id }} </span>
      </div>

      <span class="user-status"> Active </span>
    </div>

    <!-- Email -->
    <div class="user-card-email">
      {{ user.email }}
    </div>

    <!-- Actions -->
    <div class="user-card-actions">
      <ButtonLink :href="route('users.show', user.id)" variant="secondary">
        View
      </ButtonLink>

      <ButtonLink :href="route('users.edit', user.id)" variant="primary">
        Edit
      </ButtonLink>

      <Button variant="danger" @click="handleDelete"> Delete </Button>
    </div>
  </div>
</template>

<style scoped>
.user-card {
  padding: 22px;

  background: var(--surface);
  border: 1px solid var(--border);
  border-radius: var(--radius-lg);

  box-shadow: var(--shadow-sm);

  transition: transform 0.2s ease, box-shadow 0.2s ease;
}

.user-card:hover {
  transform: translateY(-2px);
  box-shadow: var(--shadow-md);
}

.user-card-header {
  display: flex;
  align-items: center;
  gap: 14px;
}

.user-avatar {
  width: 46px;
  height: 46px;

  display: flex;
  align-items: center;
  justify-content: center;

  border-radius: 50%;

  background: linear-gradient(135deg, var(--primary), #7c3aed);

  color: white;
  font-size: 18px;
  font-weight: 700;
}

.user-card-identity {
  flex: 1;
  min-width: 0;
}

.user-card-identity h3 {
  margin: 0;

  font-size: 16px;
  font-weight: 700;
}

.user-card-identity span {
  display: block;
  margin-top: 3px;

  color: var(--text-muted);
  font-size: 12px;
}

.user-status {
  padding: 5px 9px;

  border-radius: 999px;

  background: var(--success-bg);
  color: var(--success);

  font-size: 12px;
  font-weight: 600;
}

.user-card-email {
  margin-top: 20px;
  padding: 12px;

  background: var(--background);
  border-radius: var(--radius-md);

  color: var(--text-secondary);
  font-size: 14px;

  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap;
}

.user-card-actions {
  display: flex;
  gap: 8px;

  margin-top: 18px;
}

.user-card-actions :deep(.btn) {
  flex: 1;
}
</style>
