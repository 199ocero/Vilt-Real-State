<template>
  <div class="grid grid-cols-12 gap-4 md:gap-4">
    <Box class="flex items-center order-2 col-span-12 md:col-span-7 md:order-1">
      <div class="w-full font-medium text-center text-gray-500">No Images</div>
    </Box>
    <div
      class="grid order-1 grid-cols-1 col-span-12 gap-4 md:col-span-5 md:order-2"
    >
      <Box>
        <template #header> Basic Information </template>
        <ListingPrice
          :price="listing.price"
          class="text-2xl font-bold"
        ></ListingPrice>
        <ListingSpace :listing="listing" class="text-lg"></ListingSpace>
        <ListingAddress
          :listing="listing"
          class="text-gray-500 dark:text-gray-400"
        ></ListingAddress>
      </Box>
      <Box>
        <template #header> Monthly Payment </template>
        <div>
          <label class="label">Interest rate ({{ interestRate }}%)</label>
          <input
            v-model="interestRate"
            type="range"
            min="0.1"
            max="30"
            step="0.1"
            class="range-slider"
          />

          <label class="label">Duration ({{ duration }} years)</label>
          <input
            v-model="duration"
            type="range"
            min="3"
            max="35"
            step="1"
            class="range-slider"
          />

          <div class="mt-2 text-gray-600 dark:text-gray-300">
            <div class="text-gray-400">Your monthly payment</div>
            <ListingPrice :price="monthlyPayment" class="text-3xl" />
          </div>
          <div class="mt-2 text-gray-500">
            <div class="flex justify-between">
              <div>Total Paid</div>
              <div>
                <ListingPrice :price="totalPaid"></ListingPrice>
              </div>
            </div>
          </div>
          <div class="mt-2 text-gray-500">
            <div class="flex justify-between">
              <div>Total Interest</div>
              <div>
                <ListingPrice :price="totalInterest"></ListingPrice>
              </div>
            </div>
          </div>
        </div>
      </Box>
    </div>
  </div>
</template>
<script setup>
import MainLayout from "@/Layouts/MainLayout.vue";
import ListingAddress from "@/Components/ListingAddress.vue";
import ListingPrice from "@/Components/ListingPrice.vue";
import ListingSpace from "@/Components/ListingSpace.vue";
import Box from "@/Components/UI/Box.vue";
import { ref } from "vue";
import { usePayment } from "@/Composables/usePayment";

const interestRate = ref(2.5);
const duration = ref(5);

const props = defineProps({
  listing: Object,
});

const { monthlyPayment, totalPaid, totalInterest } = usePayment(
  props.listing.price,
  interestRate,
  duration
);

defineOptions({ layout: MainLayout });
</script>
