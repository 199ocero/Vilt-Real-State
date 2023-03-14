<template>
  <form @submit.prevent="create">
    <div class="w-1/2 mx-auto">
      <div class="grid grid-cols-1 gap-4">
        <div>
          <label for="email" class="label">Email</label>
          <input
            type="email"
            id="email"
            class="input"
            placeholder="Enter email"
          />
          <span class="error"></span>
        </div>
        <div>
          <label for="password" class="label">Password</label>
          <input
            type="password"
            id="password"
            class="input"
            placeholder="Enter password"
          />
          <span class="error"></span>
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

defineOptions({ layout: MainLayout });
</script>
