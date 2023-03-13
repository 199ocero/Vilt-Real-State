<template>
  <div>
    <span class="font-bold text-green-500 dark:text-green-300">{{
      listing.beds
    }}</span>
    bds
    <span class="text-gray-400">| </span>
    <span class="font-bold text-purple-500 dark:text-purple-300">{{
      listing.baths
    }}</span>
    ba
    <span class="text-gray-400">| </span>
    <span class="font-bold text-orange-500 dark:text-orange-300">{{
      listing.area
    }}</span>
    m²
  </div>
</template>
<script setup>
import MainLayout from "@/Layouts/MainLayout.vue";
defineProps({
  listing: Object,
});
defineOptions({ layout: MainLayout });
</script>
