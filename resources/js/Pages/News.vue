<script setup>
import { Head, Link } from '@inertiajs/vue3';
import Navbar from '@/Components/Navbar.vue';

defineProps({
  news: {
    type: Object,
    required: true
  },
});

</script>

<template>

  <Head :title="news.title" />

  <Navbar />

  <main id="content" class="pt-12 min-h-screen">
    <div class="container mx-auto p-4">
      <div class="flex flex-row items-center justify-between">
        <h2 class="text-gray-800 text-2xl font-bold">
          {{ news.title }}
        </h2>
        <Link :href="route('unews.bookmark', news.slug)" method="post" as="button"
          class="text-gray-900 bg-green-300 px-4 py-2 rounded hover:bg-green-400">
        Bookmark
        </Link>
      </div>

      <div class="w-full p-4">
        <img :src="news.image" :alt="news.title + ' image'" class="w-full h-auto" />
      </div>

      <div class="w-full">
        <p class="text-gray-800 text-base">
          {{ news.content }}
        </p>
      </div>
    </div>

    <div class="bg-gray-100">
      <div class="container mx-auto p-4">
        <h3 class="text-gray-800 text-xl font-bold">Comments</h3>
        <form action="#" method="post" class="mt-4">
          <div class="flex flex-row items-center gap-4">
            <textarea type="text" class="w-full p-2 border border-gray-300 rounded" placeholder="Write a comment..." />
            <button type="submit" class="bg-green-300 text-gray-900 px-4 py-2 rounded hover:bg-green-400">Post</button>
          </div>
        </form>

        <div class="flex flex-col items-center gap-4 mt-4">
          <div class="flex flex-col gap-1 bg-gray-50 px-4 py-2 rounded-lg">
            <h4 class="font-semibold">
              John Doe
            </h4>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim, laboriosam quas at ipsam assumenda
              perspiciatis
              suscipit sed voluptate amet nam provident consequatur delectus vel porro.
            </p>
          </div>
          <div class="flex flex-col gap-1 bg-gray-50 px-4 py-2 rounded-lg">
            <h4 class="font-semibold">
              John Doe
            </h4>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim, laboriosam quas at ipsam assumenda
              perspiciatis
              suscipit sed voluptate amet nam provident consequatur delectus vel porro.
            </p>
          </div>
        </div>
      </div>
    </div>

  </main>
</template>
