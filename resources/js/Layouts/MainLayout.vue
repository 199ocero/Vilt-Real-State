<template>
  <header
    class="w-full bg-white border-b border-gray-200 dark:border-gray-700 dark:bg-gray-800"
  >
    <div class="container mx-auto">
      <nav class="flex items-center justify-between p-4">
        <div class="text-base font-medium">
          <Link :href="route('listing.index')">Listings</Link>
        </div>
        <div class="text-lg font-bold text-blue-600 dark:text-blue-400">
          <Link :href="route('listing.index')">Vilt Real State</Link>
        </div>
        <div v-if="user" class="flex items-center gap-4 text-base">
          <div>
            {{ user.name }}
          </div>
          <Link :href="route('listing.create')" class="font-medium btn-primary"
            >+ New Listing</Link
          >
          <span class="text-gray-600">|</span>
          <div class="font-medium text-red-400">Logout</div>
        </div>
        <div v-else>
          <Link :href="route('login')" class="font-medium btn-primary"
            >Sign in</Link
          >
        </div>
      </nav>
    </div>
  </header>
  <main class="container p-4 mx-auto">
    <div
      v-if="flashSuccess"
      class="p-3 mb-2 text-green-700 bg-green-200 rounded-md"
    >
      {{ flashSuccess }}
    </div>
    <slot></slot>
  </main>
</template>

<script setup>
import { Link, usePage } from "@inertiajs/vue3";
import { computed } from "vue";

const flashSuccess = computed(() => usePage().props.flash.success);
const user = computed(() => usePage().props.user);
</script>
