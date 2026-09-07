<script setup>
import { Link } from "@inertiajs/vue3";

import AppLayout from "../layouts/AppLayout.vue";
import ButtonLink from "../components/ButtonLink.vue";
import StatCard from "../components/StatCard.vue";
import UserCard from "../components/UserCard.vue";

defineProps({
  totalUsers: {
    type: Number,
    default: 0,
  },

  recentUsers: {
    type: Array,
    default: () => [],
  },
});
</script>

<template>
  <AppLayout>
    <div class="dashboard">
      <!-- Header -->
      <div class="dashboard-header">
        <div>
          <h1 class="page-title">Dashboard</h1>

          <p class="page-subtitle">
            Welcome back. Here's what's happening in your application.
          </p>
        </div>

        <ButtonLink :href="route('users.create')" variant="primary">
          + Create User
        </ButtonLink>
      </div>

      <!-- Statistics -->
      <div class="stats-grid">
        <StatCard
          title="Total Users"
          :value="totalUsers"
          description="Users registered in your application"
        />

        <StatCard
          title="Recent Users"
          :value="recentUsers.length"
          description="Users recently added"
        />
      </div>

      <!-- Recent Users -->
      <section class="recent-users">
        <div class="section-header">
          <div>
            <h2 class="section-title">Recent Users</h2>

            <p class="section-subtitle">The latest users added to the system.</p>
          </div>

          <ButtonLink :href="route('users.index')" variant="secondary">
            View All
          </ButtonLink>
        </div>

        <div v-if="recentUsers.length" class="users-grid">
          <UserCard v-for="user in recentUsers" :key="user.id" :user="user" />
        </div>

        <div v-else class="empty-state">
          <h3>No users yet</h3>

          <p>Create your first user to get started.</p>

          <ButtonLink :href="route('users.create')" variant="primary">
            Create User
          </ButtonLink>
        </div>
      </section>
    </div>
  </AppLayout>
</template>

<style scoped>
.dashboard {
  max-width: var(--container-width);
  margin: 0 auto;
}

.dashboard-header {
  display: flex;
  align-items: center;
  justify-content: space-between;

  margin-bottom: 30px;
}

.stats-grid {
  display: grid;
  grid-template-columns: repeat(2, minmax(0, 1fr));
  gap: 20px;

  margin-bottom: 35px;
}

.recent-users {
  margin-top: 10px;
}

.section-header {
  display: flex;
  align-items: center;
  justify-content: space-between;

  margin-bottom: 20px;
}

.section-title {
  margin: 0;

  font-size: 20px;
  font-weight: 700;
}

.section-subtitle {
  margin: 5px 0 0;

  color: var(--text-secondary);
  font-size: 14px;
}

.users-grid {
  display: grid;
  grid-template-columns: repeat(3, minmax(0, 1fr));
  gap: 20px;
}

.empty-state {
  padding: 50px;

  background: var(--surface);
  border: 1px solid var(--border);
  border-radius: var(--radius-lg);

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
  .dashboard-header,
  .section-header {
    align-items: flex-start;
    flex-direction: column;
    gap: 15px;
  }

  .stats-grid,
  .users-grid {
    grid-template-columns: 1fr;
  }
}
</style>
