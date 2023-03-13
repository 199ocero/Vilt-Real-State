<template>
  <form @submit.prevent="create">
    <div class="grid grid-cols-1 gap-4 md:grid-cols-3">
      <div>
        <label
          for="beds"
          class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
          >Beds</label
        >
        <input
          v-model.number="form.beds"
          type="text"
          id="beds"
          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
          placeholder="Enter beds"
        />
        <span class="text-red-500 dark:text-red-400" v-if="form.errors.beds">{{
          form.errors.beds
        }}</span>
      </div>
      <div>
        <label
          for="baths"
          class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
          >Baths</label
        >
        <input
          v-model.number="form.baths"
          type="text"
          id="baths"
          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
          placeholder="Enter baths"
        />
        <span class="text-red-500 dark:text-red-400" v-if="form.errors.baths">{{
          form.errors.baths
        }}</span>
      </div>
      <div>
        <label
          for="area"
          class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
          >Area</label
        >
        <input
          v-model.number="form.area"
          type="text"
          id="area"
          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
          placeholder="Enter area"
        />
        <span class="text-red-500 dark:text-red-400" v-if="form.errors.area">{{
          form.errors.area
        }}</span>
      </div>
      <div>
        <label
          for="city"
          class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
          >City</label
        >
        <input
          v-model="form.city"
          type="text"
          id="city"
          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
          placeholder="Enter city"
        />
        <span class="text-red-500 dark:text-red-400" v-if="form.errors.city">{{
          form.errors.city
        }}</span>
      </div>

      <div>
        <label
          for="code"
          class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
          >Code</label
        >
        <input
          v-model="form.code"
          type="text"
          id="code"
          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
          placeholder="Enter code"
        />
        <span class="text-red-500 dark:text-red-400" v-if="form.errors.code">{{
          form.errors.code
        }}</span>
      </div>
      <div>
        <label
          for="street"
          class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
          >Street</label
        >
        <input
          v-model="form.street"
          type="text"
          id="street"
          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
          placeholder="Enter street"
        />
        <span
          class="text-red-500 dark:text-red-400"
          v-if="form.errors.street"
          >{{ form.errors.street }}</span
        >
      </div>
      <div>
        <label
          for="street_number"
          class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
          >Street Number</label
        >
        <input
          v-model.number="form.street_number"
          type="text"
          id="street_number"
          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
          placeholder="Enter street number"
        />
        <span
          class="text-red-500 dark:text-red-400"
          v-if="form.errors.street_number"
          >{{ form.errors.street_number }}</span
        >
      </div>
      <div>
        <label
          for="price"
          class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
          >Price</label
        >
        <input
          v-model.number="form.price"
          type="text"
          id="price"
          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
          placeholder="Enter price"
        />
        <span class="text-red-500 dark:text-red-400" v-if="form.errors.price">{{
          form.errors.price
        }}</span>
      </div>
    </div>
    <div class="mt-4">
      <button
        type="submit"
        class="px-5 py-2 text-white bg-blue-600 rounded-md hover:bg-blue-500"
      >
        Create
      </button>
    </div>
  </form>
</template>

<script setup>
import MainLayout from "@/Layouts/MainLayout.vue";
import { useForm } from "@inertiajs/vue3";

defineOptions({ layout: MainLayout });

const form = useForm({
  beds: null,
  baths: null,
  area: null,
  city: null,
  street: null,
  code: null,
  street_number: null,
  price: null,
});

const create = () => form.post(route("listing.store"));
</script>

<style scoped>
label {
  margin-right: 2em;
}
div {
  padding: 2px;
}
</style>
