<script setup>
import { ref } from "vue";
import { Link, useForm } from "@inertiajs/vue3";
import AppLayout from "../../layouts/AppLayout.vue";

const props = defineProps({
  user: Object,
});

const showPassword = ref(false);

const form = useForm({
  name: props.user.name,
  email: props.user.email,
  password: "",
});

function submit() {
  form.put(route("users.update", props.user.id));
}
</script>

<template>
  <AppLayout>
    <div class="form-page">
      <!-- Header -->
      <div class="form-header">
        <Link :href="route('users.show', user.id)" class="back-link">
          ← Back to User
        </Link>

        <div class="user-heading">
          <div class="avatar">
            {{ user.name.charAt(0).toUpperCase() }}
          </div>

          <div>
            <h1>Edit User</h1>

            <p>Update {{ user.name }}'s account information.</p>
          </div>
        </div>
      </div>

      <!-- Form -->
      <div class="form-card">
        <form @submit.prevent="submit">
          <!-- Name -->
          <FormField label="Full Name" id="name" :error="form.errors.name">
            <input id="name" v-model="form.name" type="text" class="form-input" />
          </FormField>

          <!-- Email -->
          <div class="form-group">
            <label for="email"> Email Address </label>

            <input
              id="email"
              v-model="form.email"
              type="email"
              placeholder="user@example.com"
              :class="{ 'input-error': form.errors.email }"
            />

            <p v-if="form.errors.email" class="error">
              {{ form.errors.email }}
            </p>
          </div>

          <!-- Password -->
          <div class="form-group">
            <label for="password">
              New Password

              <span class="optional"> (optional) </span>
            </label>

            <div class="password-wrapper">
              <input
                id="password"
                v-model="form.password"
                :type="showPassword ? 'text' : 'password'"
                placeholder="Leave blank to keep current password"
                minlength="8"
                :class="{ 'input-error': form.errors.password }"
              />

              <button
                type="button"
                class="password-toggle"
                @click="showPassword = !showPassword"
              >
                {{ showPassword ? "Hide" : "Show" }}
              </button>
            </div>

            <p class="field-help">Only enter a password if you want to change it.</p>

            <p v-if="form.errors.password" class="error">
              {{ form.errors.password }}
            </p>
          </div>

          <!-- Actions -->
          <div class="form-actions">
            <Link :href="route('users.show', user.id)" class="btn btn-secondary">
              Cancel
            </Link>

            <button type="submit" class="btn btn-primary" :disabled="form.processing">
              {{ form.processing ? "Saving..." : "Save Changes" }}
            </button>
          </div>
        </form>
      </div>
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
  color: #64748b;
  text-decoration: none;
  font-size: 14px;
  margin-bottom: 18px;
}

.back-link:hover {
  color: #2563eb;
}

.user-heading {
  display: flex;
  align-items: center;
  gap: 15px;
}

.user-heading h1 {
  font-size: 32px;
  margin-bottom: 6px;
}

.user-heading p {
  color: #64748b;
}

.avatar {
  width: 55px;
  height: 55px;
  flex-shrink: 0;
  border-radius: 50%;
  background: linear-gradient(135deg, #2563eb, #7c3aed);
  color: white;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 21px;
  font-weight: bold;
}

.form-card {
  background: white;
  padding: 35px;
  border-radius: 18px;
  box-shadow: 0 8px 30px rgba(15, 23, 42, 0.08);
}

.form-group {
  margin-bottom: 23px;
}

.form-group label {
  display: block;
  font-size: 14px;
  font-weight: 600;
  margin-bottom: 8px;
  color: #334155;
}

.optional {
  color: #94a3b8;
  font-weight: normal;
  font-size: 12px;
}

.form-group input {
  width: 100%;
  padding: 13px 15px;
  border: 1px solid #cbd5e1;
  border-radius: 9px;
  font-size: 14px;
  outline: none;
  transition: 0.2s;
}

.form-group input:focus {
  border-color: #2563eb;
  box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.1);
}

.form-group input::placeholder {
  color: #94a3b8;
}

.input-error {
  border-color: #dc2626 !important;
}

.error {
  color: #dc2626;
  font-size: 13px;
  margin-top: 6px;
}

.field-help {
  color: #94a3b8;
  font-size: 12px;
  margin-top: 6px;
}

.password-wrapper {
  position: relative;
}

.password-wrapper input {
  padding-right: 70px;
}

.password-toggle {
  position: absolute;
  right: 10px;
  top: 50%;
  transform: translateY(-50%);
  border: none;
  background: transparent;
  color: #2563eb;
  font-size: 13px;
  font-weight: 600;
  cursor: pointer;
}

.form-actions {
  display: flex;
  justify-content: flex-end;
  gap: 10px;
  padding-top: 10px;
  border-top: 1px solid #e2e8f0;
}

@media (max-width: 600px) {
  .form-card {
    padding: 25px;
  }

  .user-heading {
    align-items: flex-start;
  }

  .form-actions {
    flex-direction: column-reverse;
  }

  .form-actions .btn {
    width: 100%;
    text-align: center;
  }
}
</style>
