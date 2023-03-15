<template>
  <form @submit.prevent="create">
    <div class="w-1/2 mx-auto">
      <div class="grid grid-cols-1 gap-4">
        <div>
          <label for="name" class="label">Name</label>
          <input
            v-model="form.name"
            type="text"
            id="name"
            class="input"
            placeholder="Enter name"
          />
          <span class="error" v-if="form.errors.name">{{
            form.errors.name
          }}</span>
        </div>
        <div>
          <label for="email" class="label">Email</label>
          <input
            v-model="form.email"
            type="email"
            id="email"
            class="input"
            placeholder="Enter email"
          />
          <span class="error" v-if="form.errors.email">{{
            form.errors.email
          }}</span>
        </div>
        <div>
          <label for="password" class="label">Password</label>
          <input
            v-model="form.password"
            type="password"
            id="password"
            class="input"
            placeholder="Enter password"
          />
          <span class="error" v-if="form.errors.password">{{
            form.errors.password
          }}</span>
        </div>
        <div>
          <label for="password_confirmation" class="label"
            >Confirm Password</label
          >
          <input
            v-model="form.password_confirmation"
            type="password"
            id="password_confirmation"
            class="input"
            placeholder="Enter confirm password"
          />
        </div>
        <div class="mt-4">
          <button type="submit" class="w-full btn-primary">
            Create account
          </button>
        </div>
      </div>
    </div>
  </form>
</template>

<script setup>
import MainLayout from "@/Layouts/MainLayout.vue";
import { useForm } from "@inertiajs/vue3";
const form = useForm({
  name: null,
  email: null,
  password: null,
  password_confirmation: null,
});
const create = () => form.post(route("user-account.store"));

defineOptions({ layout: MainLayout });
</script>
