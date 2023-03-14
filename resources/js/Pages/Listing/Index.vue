<template>
  <div class="grid grid-cols-1 gap-5 md:grid-cols-2 lg:grid-cols-3">
    <Listing v-for="listing in listings" :key="listing.id" :listing="listing">
    </Listing>
  </div>
</template>

<script setup>
import MainLayout from "@/Layouts/MainLayout.vue";
import Listing from "@/Pages/Listing/Index/Components/Listing.vue";
defineProps({
  listings: Array,
});

defineOptions({ layout: MainLayout });
</script>
