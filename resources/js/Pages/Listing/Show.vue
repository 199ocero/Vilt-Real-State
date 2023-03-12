<template>
  <div>
    <ListingAddress :listing="listing"></ListingAddress>
  </div>
</template>
<script setup>
import MainLayout from "@/Layouts/MainLayout.vue";
import ListingAddress from "@/Components/ListingAddress.vue";

defineProps({
  listing: Object,
});

defineOptions({ layout: MainLayout });
</script>
