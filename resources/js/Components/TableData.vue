<template>
  <table class="w-full whitespace-no-wrap rounded-md overflow-hidden">
    <thead>
      <tr
        class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
        <th v-for="header in headers" :key="header.key" class="px-4 py-3">
          {{ header.text }}
        </th>
        <th class="px-4 py-3">Actions</th>
      </tr>
    </thead>
    <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
      <tr v-for="item in items" class="text-gray-700 dark:text-gray-400">
        <td v-for="header in headers" :key="header.key" class="px-4 py-3">
          {{ item[header.key] }}
        </td>

        <td class="px-4 py-3">
          <div class="flex items-center space-x-4">
            <Link :href="route(name + '.edit', item.id)"
              class="text-black px-2 py-1 rounded bg-yellow-500 hover:bg-yellow-600">
            Edit
            </Link>
            <Link :href="route(name + '.destroy', item.id)" method="delete"
              class="text-black px-2 py-1 rounded bg-red-500 hover:bg-red-600">
            Delete
            </Link>
          </div>
        </td>
      </tr>
    </tbody>
  </table>
</template>

<script setup>
import { Link } from '@inertiajs/vue3';

const props = defineProps({
  items: {
    type: Array,
    required: true,
  },
  headers: {
    type: Array,
    required: true,
  },
  name: {
    type: String,
    required: true,
  },
});
</script>
