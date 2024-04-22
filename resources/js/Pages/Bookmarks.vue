<script setup>
import { Head, Link } from '@inertiajs/vue3';
import Navbar from '@/Components/Navbar.vue';

defineProps({
    canLogin: {
        type: Boolean,
    },
    canRegister: {
        type: Boolean,
    },
});
</script>

<template>

    <Head title="Bookmarks" />

    <Navbar />

    <div class="bookmark">
       <h2>Bookmarked News</h2>
       <input type="text" v-model="searchQuery" placeholder="Search news..." />
       <ul>
         <li v-for="news in filteredNews" :key="news.id" @click="showNewsDetail(news)" :class="{ 'selected': news === newsDetail }">
           <h3>{{ news.title }}</h3>
           <p>{{ news.date }}</p>
           <button @click.stop="removeBookmark(news.id)">Hapus</button> <!-- Tombol hapus -->
         </li>
       </ul>
       <transition name="fade" mode="out-in">
         <div v-if="newsDetail" class="news-detail">
           <h2>{{ newsDetail.title }}</h2>
           <p>{{ newsDetail.date }}</p>
           <p>{{ newsDetail.content }}</p>
         </div>
       </transition>
    </div>

</template>

<script>
export default {
    name: 'Bookmark',
    data() {
       return {
         bookmarkedNews: [
           { id: 1, title: 'Berita 1', date: '2023-04-01', content: 'Isi berita 1' },
           { id: 2, title: 'Berita 2', date: '2023-04-02', content: 'Isi berita 2' },
           { id: 3, title: 'Berita 3', date: '2023-04-03', content: 'Isi berita 3' },
         ],
         searchQuery: '',
         newsDetail: null,
       };
    },
    computed: {
       filteredNews() {
         return this.bookmarkedNews.filter(news =>
           news.title.toLowerCase().includes(this.searchQuery.toLowerCase())
         );
       },
    },
    methods: {
       showNewsDetail(news) {
         this.newsDetail = news;
       },
       removeBookmark(id) {
         this.bookmarkedNews = this.bookmarkedNews.filter(news => news.id !== id);
       },
    },
};
</script>

<style scoped>
.bookmark {
    padding: 20px;
    background-color: #f9f9f9;
    border-radius: 5px;
    margin-top: 50px;
}

.bookmark ul {
    list-style-type: none;
    padding: 0;
}

.bookmark li {
    margin-bottom: 10px;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.bookmark li:hover {
    background-color: #e0e0e0;
}

.bookmark li.selected {
    background-color: #d0d0d0;
}

.bookmark input {
    margin-bottom: 20px;
    padding: 5px;
    width: 100%;
}

.news-detail {
    margin-top: 20px;
    padding: 20px;
    background-color: #e0e0e0;
    border-radius: 5px;
}

.fade-enter-active, .fade-leave-active {
    transition: opacity 0.5s;
}
.fade-enter, .fade-leave-to {
    opacity: 2;
}

.bookmark button {
    background-color: #f44336;
    color: white;
    padding: 5px 10px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.bookmark li h3 {
    max-width: 150px; /* Atur lebar maksimum yang diinginkan */
    white-space: nowrap; /* Jaga teks dalam satu baris */
    overflow: hidden; /* Sembunyikan teks yang melebihi lebar */
    text-overflow: ellipsis; /* Tampilkan tiga titik jika teks terpotong */
}
</style>
