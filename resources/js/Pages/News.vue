<script setup>
import { Head, Link, useForm } from '@inertiajs/vue3';
import Navbar from '@/Components/Navbar.vue';
const props = defineProps({
  news: { type: Object, required: true },
  comments: { type: Array, required: true }
});
const form = useForm({
  content: '',
  news_id: props.news.id,
  slug: props.news.slug,
});
const submit = () => {
  form.post(route('comments.store'), {
    onSuccess: () => {
      form.reset();
    },
  });
};
</script>

<template>
  <Head :title="news.title" />
  <Navbar />
  <main id="content" class="pt-12 min-h-screen">
    <div class="container mx-auto p-4">
      <div class="flex flex-col md:flex-row items-center justify-between mb-8">
        <h2 class="text-gray-800 text-2xl md:text-4xl font-bold mb-4 md:mb-0">{{ news.title }}</h2>
        <Link
          :href="route('unews.bookmark', news.slug)"
          method="post"
          as="button"
          class="text-gray-900 bg-green-300 px-4 py-2 rounded hover:bg-green-400 transition-colors duration-300"
        >
          Bookmark
        </Link>
      </div>
      <div class="w-full mb-8">
        <img :src="news.image" :alt="news.title + ' image'" class="w-full h-auto rounded-lg shadow-lg" />
      </div>
      <div class="w-full prose prose-lg prose-indigo max-w-none mb-8" v-html="news.content"></div>
    </div>
    <div class="bg-gray-100 py-8">
      <div class="container mx-auto p-4">
        <h3 class="text-gray-800 text-xl font-bold mb-4">Comments</h3>
        <form v-if="$page.props.auth.user" @submit.prevent="submit" class="mb-8">
          <div class="flex flex-col md:flex-row items-center gap-4">
            <textarea
              v-model="form.content"
              class="w-full p-2 border border-gray-300 rounded shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-400"
              placeholder="Write a comment..."
              rows="3"
            />
            <button
              type="submit"
              class="bg-indigo-600 text-white px-4 py-2 rounded hover:bg-indigo-700 transition-colors duration-300"
            >
              Post
            </button>
          </div>
        </form>
        <div v-else class="mb-8">
          <p class="text-gray-800">You need to login to post a comment.</p>
        </div>
        <div class="flex flex-col items-center gap-4">
          <div
            v-for="comment in comments"
            :key="comment.id"
            class="flex flex-col gap-1 bg-white px-4 py-2 rounded-lg w-full shadow-md transition-transform duration-300 hover:scale-105"
          >
            <h4 class="font-semibold">{{ comment.user.name }}</h4>
            <p>{{ comment.content }}</p>
          </div>
        </div>
      </div>
    </div>
  </main>
</template>

<style>
.prose {
  @apply text-gray-800;
}
</style>