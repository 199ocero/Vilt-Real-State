<template>
  <div
    class="p-4 border border-gray-200 rounded-md shadow-sm dark:border-gray-600 dark:text-gray-300"
  >
    <div class="mb-2 text-sm font-medium text-gray-500">
      <slot name="header"></slot>
    </div>
    <slot></slot>
  </div>
</template>
