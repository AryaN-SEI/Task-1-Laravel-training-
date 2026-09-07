<script setup>
import { ref } from "vue";
import { router } from "@inertiajs/vue3";

import AppLayout from "../../layouts/AppLayout.vue";
import UserCard from "../../components/UserCard.vue";
import DeleteModel from "../../components/DeleteModel.vue";

const selectedUser = ref(null);
const showDeleteModel = ref(false);
const deleting = ref(false);
function openDeleteModal(user) {
  selectedUser.value = user;
  showDeleteModel.value = true;
}

function closeDeleteModel() {
  if (deleting.value) {
    return;
  }

  showDeleteModel.value = false;
  selectedUser.value = null;
}

function deleteUser() {
  if (!selectedUser.value) {
    return;
  }

  deleting.value = true;

  router.delete(route("users.destroy", selectedUser.value.id), {
    onFinish: () => {
      deleting.value = false;
      showDeleteModel.value = false;
      selectedUser.value = null;
    },
  });
}

defineProps({
  users: {
    type: Array,
    default: () => [],
  },

  search: {
    type: String,
    default: "",
  },
});
</script>

<template>
  <AppLayout>
    <div class="page-container">
      <!-- Header -->
      <div class="page-header">
        <div>
          <h1 class="page-title">Users</h1>

          <p class="page-subtitle">Manage all users in your application.</p>
        </div>

        <Link :href="route('users.create')" class="btn btn-primary"> + Create User </Link>
      </div>

      <!-- Users -->
      <div v-if="users.length > 0" class="users-grid">
        <UserCard
          v-for="user in users"
          :key="user.id"
          :user="user"
          @delete="openDeleteModal(user)"
        />
      </div>

      <!-- Empty state -->
      <div v-if="users.length === 0" class="empty-state card">
        <h3>No users found</h3>

        <p>There are currently no users to display.</p>

        <Link :href="route('users.create')" class="btn btn-primary">
          Create your first user
        </Link>
      </div>
    </div>

    <!-- Delete Modal -->
    <DeleteModel
      :show="showDeleteModel"
      :user="selectedUser"
      :processing="deleting"
      @close="closeDeleteModel"
      @confirm="deleteUser"
    />
  </AppLayout>
</template>

<style scoped>
.users-grid {
  display: grid;

  grid-template-columns: repeat(3, minmax(0, 1fr));

  gap: 20px;
}

.empty-state {
  padding: 50px;

  text-align: center;
}

.empty-state h3 {
  margin: 0;

  font-size: 20px;
}

.empty-state p {
  margin: 8px 0 20px;

  color: var(--text-secondary);
}

@media (max-width: 900px) {
  .users-grid {
    grid-template-columns: repeat(2, minmax(0, 1fr));
  }
}

@media (max-width: 600px) {
  .users-grid {
    grid-template-columns: 1fr;
  }

  .page-header {
    align-items: flex-start;
    flex-direction: column;
  }
}
</style>
