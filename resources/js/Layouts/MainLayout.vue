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
        <div class="text-base font-medium">
          <Link :href="route('listing.create')" class="btn-primary"
            >+ New Listing</Link
          >
        </div>
      </nav>
    </div>
  </header>
  <main class="container p-4 mx-auto">
    <div
      v-if="$page.props.flash.success"
      class="p-3 mb-2 text-green-700 bg-green-200 rounded-md"
    >
      {{ $page.props.flash.success }}
    </div>
    <slot></slot>
  </main>
</template>

<script setup>
import { Link } from "@inertiajs/vue3";
</script>

<style scoped>
.success {
  background-color: green;
  color: white;
}
</style>
