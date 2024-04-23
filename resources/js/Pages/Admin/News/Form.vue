<script setup>
import { Head, Link, useForm } from '@inertiajs/vue3';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';

import AddNews from '@/Components/AddNews.vue';

const props = defineProps({
    news: {
        type: Object,
    },
});

const form = useForm({
  title: props.news?.title ?? '',
  slug: props.news?.slug ?? '',
  content: props.news?.content ?? '',
  image: null,
  _method: props.news ? 'put' : 'post',
});

const submit = () => {
  if (props.news) {
    form.post(route('news.update', props.news.id), {
      onFinish: () => form.reset(),
    });
  } else {
    form.post(route('news.store'), {
      onFinish: () => form.reset(),
    });
  }
};

</script>

<template>

  <Head title="News" />

  <AuthenticatedLayout>
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        News
      </h2>
    </template>

    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="flex justify-between">
          <Link :href="route('news.index')"
            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
          Back
          </Link>
        </div>

        <form @submit.prevent="submit" class="m-4">
          <div class="grid grid-cols-1 gap-6">
            <div>
              <label for="title" class="block text-sm font-medium text-white">Title</label>
              <input type="text" name="title" id="title" v-model="form.title" required
                class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
            </div>

            <div>
              <label for="slug" class="block text-sm font-medium text-white">Slug</label>
              <input type="text" name="slug" id="slug" v-model="form.slug" required
                class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
            </div>

            <div>
              <label for="content" class="block text-sm font-medium text-white">Content</label>

              <AddNews v-model="form.content" />

            </div>

            <div>
              <label for="image" class="block text-sm font-medium text-white">Image</label>
              <input type="file" name="image" id="image" @change="form.image = $event.target.files[0]"
                :required="news == null" accept="image/*"
                class="text-white mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
            </div>

            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
              :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
              {{
                news ? 'Update News' : 'Create News'
              }}
            </button>
          </div>
        </form>
      </div>
    </div>
  </AuthenticatedLayout>
</template>
