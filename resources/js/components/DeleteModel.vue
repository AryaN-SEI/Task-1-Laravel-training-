<script setup>
defineProps({
  user: {
    type: Object,
    default: null,
  },
  show: Boolean,
  processing: Boolean,
});

const emit = defineEmits(["close", "confirm"]);
</script>

<template>
  <div v-if="show" class="modal-backdrop" @click.self="emit('close')">
    <div class="modal" role="dialog" aria-modal="true">
      <h2>Delete user?</h2>

      <p>
        Are you sure you want to delete <strong>{{ user?.name }}</strong
        >? This action cannot be undone.
      </p>

      <div class="modal-actions">
        <button
          type="button"
          class="btn btn-cancel"
          :disabled="processing"
          @click="emit('close')"
        >
          Cancel
        </button>

        <button
          type="button"
          class="btn btn-danger"
          :disabled="processing"
          @click="emit('confirm')"
        >
          {{ processing ? "Deleting..." : "Yes, delete user" }}
        </button>
      </div>
    </div>
  </div>
</template>

<style scoped>
.modal-backdrop {
  position: fixed;
  inset: 0;
  z-index: 1000;
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 20px;
  background: rgb(0 0 0 / 55%);
}

.modal {
  width: min(100%, 440px);
  padding: 28px;
  border-radius: 12px;
  background: #fff;
  box-shadow: 0 20px 50px rgb(0 0 0 / 25%);
}

.modal h2 {
  margin: 0 0 12px;
  color: #111827;
}

.modal p {
  margin: 0;
  color: #4b5563;
  line-height: 1.6;
}

.modal-actions {
  display: flex;
  justify-content: flex-end;
  gap: 12px;
  margin-top: 24px;
}

.btn {
  padding: 10px 16px;
  border: 0;
  border-radius: 6px;
  cursor: pointer;
  font-weight: 600;
}

.btn:disabled {
  cursor: not-allowed;
  opacity: 0.6;
}

.btn-cancel {
  background: #e5e7eb;
  color: #374151;
}

.btn-danger {
  background: #dc2626;
  color: #fff;
}

.btn-danger:hover:not(:disabled) {
  background: #b91c1c;
}
</style>
