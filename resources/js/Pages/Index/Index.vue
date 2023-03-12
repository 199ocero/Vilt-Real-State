<template>
    <div>Index</div>
    <Link href="/hello">Show Page</Link>
    <p>This is my message: {{ message }}</p>
</template>

<script setup>
    import {Link} from '@inertiajs/vue3';
    defineProps({message:String});
</script>