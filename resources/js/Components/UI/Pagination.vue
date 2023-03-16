<template>
  <div class="flex gap-1">
    <template v-for="link in links" :key="link.id">
      <div v-if="link.url">
        <Link
          :key="link.id"
          class="px-4 py-2 rounded-md"
          :class="{
            'bg-blue-500 text-white': link.active,
            'text-gray-400 pointer-events-none':
              link.label === 'Previous' && link.url === null,
            'text-gray-400 pointer-events-none':
              link.label === 'Next' && link.url === null,
          }"
          :href="link.url"
        >
          <span v-html="link.label"></span>
        </Link>
      </div>
      <div v-else>
        <span
          v-html="link.label"
          class="px-4 text-gray-400 pointer-events-none"
        ></span>
      </div>
    </template>
  </div>
</template>

<script setup>
import { Link } from "@inertiajs/vue3";
defineProps({
  links: Array,
});
</script>
