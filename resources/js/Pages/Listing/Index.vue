<template>
  <div class="grid grid-cols-1 gap-5 md:grid-cols-2 lg:grid-cols-3">
    <Listing
      v-for="listing in listings.data"
      :key="listing.id"
      :listing="listing"
    >
    </Listing>
  </div>
  <div v-if="listings.data.length" class="flex justify-center w-full my-8">
    <Pagination :links="listings.links"></Pagination>
  </div>
</template>

<script setup>
import MainLayout from "@/Layouts/MainLayout.vue";
import Listing from "@/Pages/Listing/Index/Components/Listing.vue";
import Pagination from "@/Components/Ui/Pagination.vue";
defineProps({
  listings: Object,
});

defineOptions({ layout: MainLayout });
</script>
