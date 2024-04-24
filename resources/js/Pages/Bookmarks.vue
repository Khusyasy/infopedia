<script setup>
import { Head } from '@inertiajs/vue3';
import Navbar from '@/Components/Navbar.vue';
import NewsCard from '@/Components/NewsCard.vue';

defineProps({
    news: {
        type: Array,
        required: true
    },
});

</script>

<template>

    <Head title="InfoPedia" />

    <Navbar />

    <!-- =========={ MAIN }==========  -->
    <main id="content" class="py-12 min-h-screen">
        <!-- block news -->
        <div class="bg-white">
            <div class="xl:container mx-auto px-3 sm:px-4 xl:px-2">
                <div class="flex flex-row flex-wrap">
                    <div class="flex-shrink max-w-full w-full overflow-hidden">
                        <div class="w-full py-3">
                            <h2 class="text-gray-800 text-2xl font-bold">
                                Bookmarks
                            </h2>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-3 gap-4">
                    <NewsCard v-for="item in news" :key="item.id" :item="item" />
                </div>
            </div>
        </div>

    </main><!-- end main -->
</template>
