<template>
  <form @submit.prevent="login">
    <div class="w-1/2 mx-auto">
      <div class="grid grid-cols-1 gap-4">
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
        <div class="mt-4">
          <button type="submit" class="w-full btn-primary">Login</button>
        </div>
      </div>
    </div>
  </form>
</template>

<script setup>
import MainLayout from "@/Layouts/MainLayout.vue";
import { useForm } from "@inertiajs/vue3";
const form = useForm({
  email: null,
  password: null,
});
const login = () => form.post(route("login"));

defineOptions({ layout: MainLayout });
</script>
