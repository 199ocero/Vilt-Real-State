<template>
  <form>
    <div class="flex flex-wrap justify-center gap-2 mt-5 mb-8">
      <div class="flex items-center flex-nowrap">
        <input type="text" class="input-filter-l" placeholder="Price from" />
        <input type="text" class="input-filter-r" placeholder="Price to" />
      </div>
      <div class="flex items-center flex-nowrap">
        <select name="" id="" class="input-filter-l">
          <option :value="null">Beds</option>
          <option v-for="n in 5" :key="n.toString()" :value="n">{{ n }}</option>
          <option>6+</option>
        </select>
        <select name="" id="" class="input-filter-r">
          <option :value="null">Baths</option>
          <option v-for="n in 5" :key="n.toString()" :value="n">{{ n }}</option>
          <option>6+</option>
        </select>
      </div>
      <div class="flex items-center flex-nowrap">
        <input type="text" class="input-filter-l" placeholder="Area from" />
        <input type="text" class="input-filter-r" placeholder="Area to" />
      </div>
      <button type="submit" class="text-sm btn-secondary">Filter</button>
      <button type="reset" class="text-sm btn-danger">Reset</button>
    </div>
  </form>
</template>
