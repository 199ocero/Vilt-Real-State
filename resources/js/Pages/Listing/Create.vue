<template>
  <form @submit.prevent="create">
    <div class="grid grid-cols-1 gap-4 md:grid-cols-3">
      <div>
        <label for="beds" class="label">Beds</label>
        <input
          v-model.number="form.beds"
          type="text"
          id="beds"
          class="input"
          placeholder="Enter beds"
        />
        <span class="error" v-if="form.errors.beds">{{
          form.errors.beds
        }}</span>
      </div>

      <div>
        <label for="baths" class="label">Baths</label>
        <input
          v-model.number="form.baths"
          type="text"
          id="baths"
          class="input"
          placeholder="Enter baths"
        />
        <span class="error" v-if="form.errors.baths">{{
          form.errors.baths
        }}</span>
      </div>

      <div>
        <label for="area" class="label">Area</label>
        <input
          v-model.number="form.area"
          type="text"
          id="area"
          class="input"
          placeholder="Enter area"
        />
        <span class="error" v-if="form.errors.area">{{
          form.errors.area
        }}</span>
      </div>

      <div>
        <label for="city" class="label">City</label>
        <input
          v-model="form.city"
          type="text"
          id="city"
          class="input"
          placeholder="Enter city"
        />
        <span class="error" v-if="form.errors.city">{{
          form.errors.city
        }}</span>
      </div>

      <div>
        <label for="code" class="label">Code</label>
        <input
          v-model="form.code"
          type="text"
          id="code"
          class="input"
          placeholder="Enter code"
        />
        <span class="error" v-if="form.errors.code">{{
          form.errors.code
        }}</span>
      </div>

      <div>
        <label for="street" class="label">Street</label>
        <input
          v-model="form.street"
          type="text"
          id="street"
          class="input"
          placeholder="Enter street"
        />
        <span class="error" v-if="form.errors.street">{{
          form.errors.street
        }}</span>
      </div>

      <div>
        <label for="street_number" class="label">Street Number</label>
        <input
          v-model.number="form.street_number"
          type="text"
          id="street_number"
          class="input"
          placeholder="Enter street number"
        />
        <span class="error" v-if="form.errors.street_number">{{
          form.errors.street_number
        }}</span>
      </div>

      <div>
        <label for="price" class="label">Price</label>
        <input
          v-model.number="form.price"
          type="text"
          id="price"
          class="input"
          placeholder="Enter price"
        />
        <span class="error" v-if="form.errors.price">{{
          form.errors.price
        }}</span>
      </div>
    </div>
    <div class="mt-4">
      <button type="submit" class="btn-primary">Create</button>
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
