<template>
  <span>
    {{ listing.street }} {{ listing.street_number }}, {{ listing.city }}
  </span>
</template>
<script setup>
import MainLayout from "@/Layouts/MainLayout.vue";
defineProps({
  listing: Object,
});
defineOptions({ layout: MainLayout });
</script>
