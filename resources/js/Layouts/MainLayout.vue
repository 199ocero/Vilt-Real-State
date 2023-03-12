<template>
  <Link href="/">Index Page</Link>&nbsp;
  <Link href="/hello">Show Page</Link>
  <div v-if="$page.props.flash.success" class="success">
    {{ $page.props.flash.success }}
  </div>
  <slot></slot>
</template>

<script setup>
import { Link } from "@inertiajs/vue3";
</script>

<style scoped>
.success {
  background-color: green;
  color: white;
}
</style>
