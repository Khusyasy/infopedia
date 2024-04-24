<script setup>
import { Head } from '@inertiajs/vue3';
import Navbar from '@/Components/Navbar.vue';
import NewsCard from '@/Components/NewsCard.vue';
defineProps({
  news: { type: Array, required: true },
});
</script>

<template>
  <Head title="InfoPedia" />
  <Navbar />

  <!-- =========={ HERO SECTION }========== -->
  <section class="hero py-20">
    <div class="container mx-auto px-4 flex flex-row items-center">
      <img src="/img/logo_notext.png" class="h-40 mb-4">
      <div>
        <h1 class="text-4xl font-bold text-black mb-4">Stay Informed with InfoPedia</h1>
        <p class="text-black text-lg">Get the latest news and insights from around the world.</p>
      </div>
    </div>
  </section>

  <!-- =========={ MAIN }========== -->
  <main id="content" class="min-h-screen">
    <!-- block news -->
    <div class="bg-gray-100">
      <div class="xl:container mx-auto px-3 sm:px-4 xl:px-2">
        <div class="flex flex-row flex-wrap">
          <div class="flex-shrink max-w-full w-full overflow-hidden">
            <div class="w-full py-3">
              <h2 class="text-gray-800 text-2xl font-bold mb-4">Latest News</h2>
            </div>
          </div>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
          <NewsCard
            v-for="item in news"
            :key="item.id"
            :item="item"
            class="transform transition duration-300 hover:scale-105"
          />
        </div>
      </div>
    </div>
  </main>
  <!-- end main -->
</template>

<style>
.hero {
  background-image: url('/img/Bg.jpg');
  background-size: cover;
  background-position: center;
}
</style>