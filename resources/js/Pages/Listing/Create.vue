<template>
  <form @submit.prevent="create">
    <div>
      <div>
        <label for="">Beds</label>
        <input type="text" v-model.number="form.beds" />
        <div v-if="form.errors.beds">{{ form.errors.beds }}</div>
      </div>
      <div>
        <label for="">Baths</label>
        <input type="text" v-model.number="form.baths" />
        <div v-if="form.errors.baths">{{ form.errors.baths }}</div>
      </div>
      <div>
        <label for="">Area</label>
        <input type="text" v-model.number="form.area" />
        <div v-if="form.errors.area">{{ form.errors.area }}</div>
      </div>
      <div>
        <label for="">City</label>
        <input type="text" v-model="form.city" />
        <div v-if="form.errors.city">{{ form.errors.city }}</div>
      </div>
      <div>
        <label for="">Post Code</label>
        <input type="text" v-model.number="form.code" />
        <div v-if="form.errors.code">{{ form.errors.code }}</div>
      </div>
      <div>
        <label for="">Street</label>
        <input type="text" v-model="form.street" />
        <div v-if="form.errors.street">{{ form.errors.street }}</div>
      </div>
      <div>
        <label for="">Street Number</label>
        <input type="text" v-model.number="form.street_number" />
        <div v-if="form.errors.street_number">
          {{ form.errors.street_number }}
        </div>
      </div>
      <div>
        <label for="">Price</label>
        <input type="text" v-model.number="form.price" />
        <div v-if="form.errors.price">{{ form.errors.price }}</div>
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
  beds: null,
  baths: null,
  area: null,
  city: null,
  street: null,
  code: null,
  street_number: null,
  price: null,
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
