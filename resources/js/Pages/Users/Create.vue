<script setup>
import { ref } from "vue";
import { Link, useForm } from "@inertiajs/vue3";

import AppLayout from "../../layouts/AppLayout.vue";
import Button from "../../components/Button.vue";
import ButtonLink from "../../components/ButtonLink.vue";
import Card from "../../components/Card.vue";
import FormField from "../../components/FormField.vue";

const showPassword = ref(false);

const form = useForm({
  name: "",
  email: "",
  password: "",
});

function submit() {
  form.post(route("users.store"));
}
</script>

<template>
  <AppLayout>
    <div class="form-page">
      <!-- Header -->
      <div class="form-header">
        <Link :href="route('users.index')" class="back-link"> ← Back to Users </Link>

        <h1 class="page-title">Create User</h1>

        <p class="page-subtitle">Add a new user to your application.</p>
      </div>

      <!-- Form -->
      <Card>
        <form class="user-form" @submit.prevent="submit">
          <!-- Name -->
          <FormField label="Full Name" id="name" :error="form.errors.name">
            <input
              id="name"
              v-model="form.name"
              type="text"
              class="form-input"
              placeholder="Enter user's full name"
              maxlength="255"
              required
            />
          </FormField>

          <!-- Email -->
          <FormField label="Email Address" id="email" :error="form.errors.email">
            <input
              id="email"
              v-model="form.email"
              type="email"
              class="form-input"
              placeholder="user@example.com"
              required
            />
          </FormField>

          <!-- Password -->
          <FormField
            label="Password"
            id="password"
            help="Password must be at least 8 characters."
            :error="form.errors.password"
          >
            <div class="password-wrapper">
              <input
                id="password"
                v-model="form.password"
                :type="showPassword ? 'text' : 'password'"
                class="form-input"
                placeholder="Create a secure password"
                minlength="8"
                required
              />

              <button
                type="button"
                class="password-toggle"
                @click="showPassword = !showPassword"
              >
                {{ showPassword ? "Hide" : "Show" }}
              </button>
            </div>
          </FormField>

          <!-- Actions -->
          <div class="form-actions">
            <ButtonLink :href="route('users.index')" variant="secondary">
              Cancel
            </ButtonLink>

            <Button type="submit" variant="primary" :disabled="form.processing">
              {{ form.processing ? "Creating..." : "Create User" }}
            </Button>
          </div>
        </form>
      </Card>
    </div>
  </AppLayout>
</template>

<style scoped>
.form-page {
  max-width: 650px;
  margin: 0 auto;
}

.form-header {
  margin-bottom: 25px;
}

.back-link {
  display: inline-block;
  margin-bottom: 18px;

  color: var(--text-secondary);
  font-size: 14px;

  transition: color 0.2s ease;
}

.back-link:hover {
  color: var(--primary);
}

.user-form {
  padding: 35px;
}

.form-actions {
  display: flex;
  justify-content: flex-end;
  gap: 10px;

  padding-top: 20px;
  border-top: 1px solid var(--border);
}

.password-wrapper {
  position: relative;
}

.password-wrapper input {
  padding-right: 70px;
}

.password-toggle {
  position: absolute;
  top: 50%;
  right: 10px;

  transform: translateY(-50%);

  border: none;
  background: transparent;

  color: var(--primary);
  font-size: 13px;
  font-weight: 600;

  cursor: pointer;
}

@media (max-width: 600px) {
  .user-form {
    padding: 25px;
  }

  .form-actions {
    flex-direction: column-reverse;
  }

  .form-actions :deep(.btn) {
    width: 100%;
  }
}
</style>
