<template>
  <a :href="`/${item.slug}`"
    class="max-w-full w-full px-3 pb-3 pt-3 sm:pt-0 border-b-2 border-green-400 bg-white rounded hover:drop-shadow-lg transition-all duration-200 ease-in-out">
    <div class="flex flex-row sm:block">
      <img class="max-w-full w-full mx-auto" :src="item.image" :alt="item.title + ' image'">
      <div class="py-0 sm:py-3 pl-3 sm:pl-0">
        <h3 class="text-lg font-bold leading-tight mb-2">
          {{ item.title }}
        </h3>
        <p class="hidden md:block text-gray-600 leading-tight mb-1">
          {{ item.content.substring(0, 150) }}
        </p>
      </div>
    </div>
  </a>
</template>

<script setup>
defineProps({
  item: {
    type: Object,
    required: true
  },
});
</script>
