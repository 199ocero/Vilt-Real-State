<template>
  <Box>
    <div>
      <Link :href="route('listing.show', { listing: listing.id })">
        <div class="mb-2">
          <ListingPrice
            :price="listing.price"
            class="text-2xl font-bold"
          ></ListingPrice>
          <div class="text-xs text-gray-500">
            <ListingPrice :price="monthlyPayment"></ListingPrice>
            <span>/month - 2.5 % int / 5 yrs</span>
          </div>
        </div>
        <ListingSpace :listing="listing" class="text-lg"></ListingSpace>
        <ListingAddress
          :listing="listing"
          class="text-gray-500 dark:text-gray-400"
        ></ListingAddress>
      </Link>
    </div>
    <div v-if="user">
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
    </div>
  </Box>
</template>
<script setup>
import { Link, usePage } from "@inertiajs/vue3";
import MainLayout from "@/Layouts/MainLayout.vue";
import ListingAddress from "@/Components/ListingAddress.vue";
import ListingSpace from "@/Components/ListingSpace.vue";
import ListingPrice from "@/Components/ListingPrice.vue";
import Box from "@/Components/UI/Box.vue";
import { usePayment } from "@/Composables/usePayment";
import { computed } from "vue";

const props = defineProps({
  listing: Object,
});

const { monthlyPayment } = usePayment(props.listing.price, 2.5, 5);
const user = computed(() => usePage().props.user);

defineOptions({ layout: MainLayout });
</script>
