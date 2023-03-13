<template>
  <span>{{ formattedPrice }}</span>
</template>
<script setup>
import MainLayout from "@/Layouts/MainLayout.vue";
import { computed } from "vue";

defineOptions({ layout: MainLayout });

const props = defineProps({
  price: [Number, String],
});

const formattedPrice = computed(() =>
  Number(props.price).toLocaleString("en-PH", {
    style: "currency",
    currency: "PHP",
    maximumFractionDigits: 2,
  })
);
</script>
