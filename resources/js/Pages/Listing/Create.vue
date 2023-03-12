<template>
  <form @submit.prevent="create">
    <div>
      <div>
        <label for="">Beds</label>
        <input type="text" v-model.number="form.beds" />
      </div>
      <div>
        <label for="">Baths</label>
        <input type="text" v-model.number="form.baths" />
      </div>
      <div>
        <label for="">Area</label>
        <input type="text" v-model.number="form.area" />
      </div>
      <div>
        <label for="">Street</label>
        <input type="text" v-model="form.street" />
      </div>
      <div>
        <label for="">Street Number</label>
        <input type="text" v-model.number="form.street_number" />
      </div>
      <div>
        <label for="">Price</label>
        <input type="text" v-model.number="form.price" />
      </div>
      <div>
        <button type="submit">Create</button>
      </div>
    </div>
  </form>
</template>

<script setup>
import MainLayout from "@/Layouts/MainLayout.vue";
import { useForm } from "@inertiajs/vue3";
defineOptions({ layout: MainLayout });

const form = useForm({
  beds: 0,
  baths: 0,
  area: 0,
  city: null,
  street: null,
  code: null,
  street_number: null,
  price: 0,
});

const create = () => form.post("/listing");
</script>

<style scoped>
label {
  margin-right: 2em;
}
div {
  padding: 2px;
}
</style>
