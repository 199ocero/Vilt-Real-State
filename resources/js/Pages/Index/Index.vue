<template>
  <div>Index</div>
  <Link href="/hello">Show Page</Link>
  <p>This is my message: {{ message }}</p>
</template>

<script setup>
import { Link } from "@inertiajs/vue3";
import MainLayout from "../../Layouts/MainLayout.vue";
defineProps({ message: String });
defineOptions({ layout: MainLayout });
</script>
