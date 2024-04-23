<script setup>
import { Head, Link, useForm} from '@inertiajs/vue3';
import Navbar from '@/Components/Navbar.vue';

const props = defineProps({
  news: {
    type: Object,
    required: true
  },
  comments: {
    type: Array,
    required: true
  }
});

const form = useForm({
  content: '',
  news_id: props.news.id,
  slug: props.news.slug,
});

const submit = () => {
    form.post(route('comments.store'), {
        onSuccess: () => {form.reset()},
    });
};

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
        <div class="text-gray-800 text-base prose" v-html="news.content">

        </div>
      </div>
    </div>

    <div class="bg-gray-100">
      <div class="container mx-auto p-4">
        <h3 class="text-gray-800 text-xl font-bold">Comments</h3>
        <form v-if="$page.props.auth.user" @submit.prevent="submit" class="mt-4">
          <div class="flex flex-row items-center gap-4">
            <textarea v-model="form.content" class="w-full p-2 border border-gray-300 rounded" placeholder="Write a comment..." />
            <button type="submit" class="bg-green-300 text-gray-900 px-4 py-2 rounded hover:bg-green-400">Post</button>
          </div>
        </form>

        <div v-else class="mt-4">
          <p class="text-gray-800">You need to login to post a comment.</p>
        </div>

        <div class="flex flex-col items-center gap-4 mt-4">
          <div v-for="comment in comments" :key="comment.id" class="flex flex-col gap-1 bg-gray-50 px-4 py-2 rounded-lg w-full">
            <h4 class="font-semibold">
              {{ comment.user.name }}
            </h4>
            <p>
              {{ comment.content }}
            </p>
          </div>
        </div>
      </div>
    </div>

  </main>
</template>

