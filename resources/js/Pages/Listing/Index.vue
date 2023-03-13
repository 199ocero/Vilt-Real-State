<template>
  <div class="grid grid-cols-1 gap-5 md:grid-cols-2 lg:grid-cols-3">
    <Box v-for="listing in listings" :key="listing.id">
      <div>
        <Link :href="route('listing.show', { listing: listing.id })">
          <ListingPrice
            :price="listing.price"
            class="text-2xl font-bold"
          ></ListingPrice>
          <ListingSpace :listing="listing" class="text-lg"></ListingSpace>
          <ListingAddress
            :listing="listing"
            class="text-gray-500 dark:text-gray-400"
          ></ListingAddress>
        </Link>
      </div>
      <div>
        <Link :href="route('listing.edit', { listing: listing.id })">Edit</Link>
      </div>
      <div>
        <Link
          :href="route('listing.destroy', { listing: listing.id })"
          method="DELETE"
          as="button"
          >Delete</Link
        >
      </div>
    </Box>
  </div>
</template>

<script setup>
import { Link } from "@inertiajs/vue3";
import MainLayout from "@/Layouts/MainLayout.vue";
import ListingAddress from "@/Components/ListingAddress.vue";
import ListingSpace from "@/Components/ListingSpace.vue";
import ListingPrice from "@/Components/ListingPrice.vue";
import Box from "@/Components/UI/Box.vue";
defineProps({
  listings: Array,
});

defineOptions({ layout: MainLayout });
</script>
