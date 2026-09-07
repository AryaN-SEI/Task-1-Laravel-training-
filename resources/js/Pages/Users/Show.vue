<script setup>
import { ref } from "vue";
import { Link, useForm } from "@inertiajs/vue3";
import AppLayout from "../../layouts/AppLayout.vue";

const props = defineProps({
  user: Object,
});

const showDeleteModal = ref(false);

const deleteForm = useForm({});

function deleteUser() {
  deleteForm.delete(route("users.destroy", props.user.id), {
    onSuccess: () => {
      showDeleteModal.value = false;
    },
  });
}

function formatDate(date) {
  if (!date) {
    return "Not available";
  }

  return new Date(date).toLocaleDateString("en-US", {
    month: "short",
    day: "2-digit",
    year: "numeric",
  });
}
</script>

<template>
  <AppLayout>
    <!-- Page Header -->
    <div class="page-header">
      <div>
        <Link :href="route('users.index')" class="btn btn-secondary">
          ← Back to Users
        </Link>
      </div>

      <div>
        <Link :href="route('users.edit', user.id)" class="btn btn-primary">
          Edit User
        </Link>
      </div>
    </div>

    <!-- User Profile -->
    <div class="user-profile">
      <!-- Profile Header -->
      <div class="profile-header">
        <div class="avatar">
          {{ user.name.charAt(0).toUpperCase() }}
        </div>

        <div>
          <h1>{{ user.name }}</h1>
          <p>{{ user.email }}</p>
        </div>
      </div>

      <!-- User Information -->
      <div class="user-info">
        <div class="info-item">
          <span class="label"> User ID </span>

          <strong> #{{ user.id }} </strong>
        </div>

        <div class="info-item">
          <span class="label"> Email </span>

          <strong>
            {{ user.email }}
          </strong>
        </div>

        <div class="info-item">
          <span class="label"> Created </span>

          <strong>
            {{ formatDate(user.created_at) }}
          </strong>
        </div>

        <div class="info-item">
          <span class="label"> Last Updated </span>

          <strong>
            {{ formatDate(user.updated_at) }}
          </strong>
        </div>
      </div>

      <!-- Danger Zone -->
      <div class="danger-zone">
        <div>
          <h3>Delete this user</h3>

          <p>Once deleted, this user cannot be recovered.</p>
        </div>

        <button type="button" class="btn btn-danger" @click="showDeleteModal = true">
          Delete User
        </button>
      </div>

      <!-- Delete Modal -->
      <div
        v-if="showDeleteModal"
        class="modal-overlay"
        @click.self="showDeleteModal = false"
      >
        <div class="modal">
          <div class="modal-icon">!</div>

          <h2>Delete User?</h2>

          <p>
            Are you sure you want to delete
            <strong>{{ user.name }}</strong
            >? This action cannot be undone.
          </p>

          <div class="modal-actions">
            <button
              type="button"
              class="btn btn-secondary"
              @click="showDeleteModal = false"
              :disabled="deleteForm.processing"
            >
              Cancel
            </button>

            <button
              type="button"
              class="btn btn-danger"
              @click="deleteUser"
              :disabled="deleteForm.processing"
            >
              {{ deleteForm.processing ? "Deleting..." : "Delete User" }}
            </button>
          </div>
        </div>
      </div>
    </div>
  </AppLayout>
</template>

<style scoped>
.user-profile {
  background: white;
  border-radius: 18px;
  padding: 35px;
  box-shadow: 0 8px 30px rgba(15, 23, 42, 0.08);
}

.profile-header {
  display: flex;
  align-items: center;
  gap: 22px;
  padding-bottom: 30px;
  border-bottom: 1px solid #e2e8f0;
}

.profile-header h1 {
  font-size: 30px;
  margin-bottom: 6px;
}

.profile-header p {
  color: #64748b;
}

.avatar {
  width: 80px;
  height: 80px;
  border-radius: 50%;
  background: linear-gradient(135deg, #2563eb, #7c3aed);
  color: white;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 32px;
  font-weight: bold;
}

.user-info {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: 20px;
  padding: 30px 0;
}

.info-item {
  background: #f8fafc;
  padding: 18px;
  border-radius: 12px;
}

.label {
  display: block;
  color: #64748b;
  font-size: 13px;
  margin-bottom: 7px;
}

.danger-zone {
  border-top: 1px solid #fee2e2;
  padding-top: 25px;
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.danger-zone h3 {
  color: #991b1b;
  margin-bottom: 5px;
}

.danger-zone p {
  color: #64748b;
  font-size: 14px;
}

.modal-overlay {
  position: fixed;
  inset: 0;
  background: rgba(15, 23, 42, 0.55);
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 20px;
  z-index: 1000;
}

.modal {
  background: white;
  width: 100%;
  max-width: 420px;
  padding: 30px;
  border-radius: 18px;
  text-align: center;
  box-shadow: 0 15px 50px rgba(15, 23, 42, 0.2);
}

.modal-icon {
  width: 50px;
  height: 50px;
  margin: 0 auto 15px;
  border-radius: 50%;
  background: #fee2e2;
  color: #dc2626;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 24px;
  font-weight: bold;
}

.modal h2 {
  margin-bottom: 10px;
}

.modal p {
  color: #64748b;
  line-height: 1.6;
}

.modal-actions {
  display: flex;
  justify-content: center;
  gap: 10px;
  margin-top: 25px;
}

@media (max-width: 700px) {
  .user-info {
    grid-template-columns: 1fr;
  }

  .danger-zone {
    flex-direction: column;
    align-items: flex-start;
    gap: 20px;
  }

  .profile-header {
    align-items: flex-start;
  }
}
</style>
