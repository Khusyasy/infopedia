<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link } from '@inertiajs/vue3';
import TableData from '@/Components/TableData.vue';

defineProps({
    news: {
        type: Array,
        required: true,
    },
});

const headers = [
    {
        text: 'Title',
        key: 'title',
    },
    {
        text: 'Slug',
        key: 'slug',
    },
    {
        text: 'Content',
        key: 'content',
    },
    {
        text: 'Image',
        key: 'image',
    },
    {
        text: 'Created At',
        key: 'created_at',
    },
];
</script>

<template>

    <Head title="News" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                News
            </h2>
        </template>

        <div class="py-4">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex flex-col gap-4">
                <div class="flex justify-between">
                    <Link :href="route('news.create')"
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Create News
                    </Link>
                </div>

                <TableData :items="news" :headers="headers" name="news" />
            </div>
        </div>
    </AuthenticatedLayout>
</template>
