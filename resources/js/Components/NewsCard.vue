<template>
  <Link :href="route('unews', item.slug)"
    class="max-w-full w-full pb-3 pt-3 sm:pt-0 border-b-2 border-green-400 bg-white rounded hover:drop-shadow-lg transition-all duration-200 ease-in-out overflow-hidden">
  <div class="flex flex-row sm:block">
    <div class="h-full max-h-[225px] overflow-hidden  object-cover">
      <img class="h-full mx-auto" :src="`/storage/${item.image}`" :alt="item.title + ' image'">
    </div>
    <div class="px-3 py-0 sm:py-3">
      <h3 class="text-lg font-bold leading-tight mb-2">
        {{ item.title }}
      </h3>
      <div class="hidden md:block text-gray-600 leading-tight mb-1" v-html="item.content.substring(0, 150)">
      </div>
    </div>
  </div>
  </Link>
</template>

<script setup>
import { Link } from '@inertiajs/vue3';
defineProps({
  item: {
    type: Object,
    required: true
  },
});
</script>
