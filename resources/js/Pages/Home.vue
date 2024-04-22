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

    <Head title="InfoPedia" />

    <Navbar />

    <!-- =========={ MAIN }==========  -->
    <main id="content">
        <!-- hero big grid -->
        <div class="bg-white py-6">
            <div class="xl:container mx-auto px-3 sm:px-4 xl:px-2">
                <!-- big grid 1 -->
                <div class="flex flex-row flex-wrap">
                    <!--Start left cover-->
                    <div class="flex-shrink max-w-full w-full lg:w-1/2 pb-1 lg:pb-0 lg:pr-1">
                        <div class="relative hover-img max-h-98 overflow-hidden">
                            <a href="#">
                                <img class="max-w-full w-full mx-auto h-auto" src="src/img/dummy/img1.jpg"
                                    alt="Image description">
                            </a>
                            <div class="absolute px-5 pt-8 pb-5 bottom-0 w-full bg-gradient-cover">
                                <a href="#">
                                    <h2 class="text-3xl font-bold capitalize text-white mb-3">Amazon Shoppers Are
                                        Ditching Designer Belts for This Best-Selling</h2>
                                </a>
                                <p class="text-gray-100 hidden sm:inline-block">This is a wider card with supporting
                                    text below as a natural lead-in to additional content. This very helpfull for
                                    generate default content..</p>
                                <div class="pt-2">
                                    <div class="text-gray-100">
                                        <div class="inline-block h-3 border-l-2 border-red-600 mr-2"></div>Europe
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Start box news-->
                    <div class="flex-shrink max-w-full w-full lg:w-1/2">
                        <div class="box-one flex flex-row flex-wrap">
                            <article class="flex-shrink max-w-full w-full sm:w-1/2">
                                <div class="relative hover-img max-h-48 overflow-hidden">
                                    <a href="#">
                                        <img class="max-w-full w-full mx-auto h-auto" src="src/img/dummy/img2.jpg"
                                            alt="Image description">
                                    </a>
                                    <div class="absolute px-4 pt-7 pb-4 bottom-0 w-full bg-gradient-cover">
                                        <a href="#">
                                            <h2 class="text-lg font-bold capitalize leading-tight text-white mb-1">News
                                                magazines are becoming obsolete, replaced by gadgets</h2>
                                        </a>
                                        <div class="pt-1">
                                            <div class="text-gray-100">
                                                <div class="inline-block h-3 border-l-2 border-red-600 mr-2"></div>
                                                Techno
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <article class="flex-shrink max-w-full w-full sm:w-1/2">
                                <div class="relative hover-img max-h-48 overflow-hidden">
                                    <a href="#">
                                        <img class="max-w-full w-full mx-auto h-auto" src="src/img/dummy/img3.jpg"
                                            alt="Image description">
                                    </a>
                                    <div class="absolute px-4 pt-7 pb-4 bottom-0 w-full bg-gradient-cover">
                                        <a href="#">
                                            <h2 class="text-lg font-bold capitalize leading-tight text-white mb-1">
                                                Minimalist designs are starting to be popular with the next generation
                                            </h2>
                                        </a>
                                        <div class="pt-1">
                                            <div class="text-gray-100">
                                                <div class="inline-block h-3 border-l-2 border-red-600 mr-2"></div>
                                                Architecture
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <article class="flex-shrink max-w-full w-full sm:w-1/2">
                                <div class="relative hover-img max-h-48 overflow-hidden">
                                    <a href="#">
                                        <img class="max-w-full w-full mx-auto h-auto" src="src/img/dummy/img4.jpg"
                                            alt="Image description">
                                    </a>
                                    <div class="absolute px-4 pt-7 pb-4 bottom-0 w-full bg-gradient-cover">
                                        <a href="#">
                                            <h2 class="text-lg font-bold capitalize leading-tight text-white mb-1">Tips
                                                for decorating the interior of the living room</h2>
                                        </a>
                                        <div class="pt-1">
                                            <div class="text-gray-100">
                                                <div class="inline-block h-3 border-l-2 border-red-600 mr-2"></div>
                                                Interior
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <article class="flex-shrink max-w-full w-full sm:w-1/2">
                                <div class="relative hover-img max-h-48 overflow-hidden">
                                    <a href="#">
                                        <img class="max-w-full w-full mx-auto h-auto" src="src/img/dummy/img5.jpg"
                                            alt="Image description">
                                    </a>
                                    <div class="absolute px-4 pt-7 pb-4 bottom-0 w-full bg-gradient-cover">
                                        <a href="#">
                                            <h2 class="text-lg font-bold capitalize leading-tight text-white mb-1">
                                                Online taxi users are increasing drastically ahead of the new year</h2>
                                        </a>
                                        <div class="pt-1">
                                            <div class="text-gray-100">
                                                <div class="inline-block h-3 border-l-2 border-red-600 mr-2"></div>
                                                Lifestyle
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- block news -->
        <div class="bg-white">
            <div class="xl:container mx-auto px-3 sm:px-4 xl:px-2">
                <div class="flex flex-row flex-wrap">
                    <!-- Left -->
                    <div class="flex-shrink max-w-full w-full lg:w-2/3 overflow-hidden">
                        <div class="w-full py-3">
                            <h2 class="text-gray-800 text-2xl font-bold">
                                <span class="inline-block h-5 border-l-3 border-red-600 mr-2"></span>Europe
                            </h2>
                        </div>
                        <div class="flex flex-row flex-wrap -mx-3">
                            <div
                                class="flex-shrink max-w-full w-full sm:w-1/3 px-3 pb-3 pt-3 sm:pt-0 border-b-2 sm:border-b-0 border-dotted border-gray-100">
                                <div class="flex flex-row sm:block hover-img">
                                    <a href="">
                                        <img class="max-w-full w-full mx-auto" src="src/img/dummy/img6.jpg"
                                            alt="alt title">
                                    </a>
                                    <div class="py-0 sm:py-3 pl-3 sm:pl-0">
                                        <h3 class="text-lg font-bold leading-tight mb-2">
                                            <a href="#">5 Tips to Save Money Booking Your Next Hotel Room</a>
                                        </h3>
                                        <p class="hidden md:block text-gray-600 leading-tight mb-1">This is a wider card
                                            with supporting text below as a natural lead-in to additional content.</p>
                                        <a class="text-gray-500" href="#"><span
                                                class="inline-block h-3 border-l-2 border-red-600 mr-2"></span>Europe</a>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="flex-shrink max-w-full w-full sm:w-1/3 px-3 pb-3 pt-3 sm:pt-0 border-b-2 sm:border-b-0 border-dotted border-gray-100">
                                <div class="flex flex-row sm:block hover-img">
                                    <a href="">
                                        <img class="max-w-full w-full mx-auto" src="src/img/dummy/img7.jpg"
                                            alt="alt title">
                                    </a>
                                    <div class="py-0 sm:py-3 pl-3 sm:pl-0">
                                        <h3 class="text-lg font-bold leading-tight mb-2">
                                            <a href="#">5 Tips to Save Money Booking Your Next Hotel Room</a>
                                        </h3>
                                        <p class="hidden md:block text-gray-600 leading-tight mb-1">This is a wider card
                                            with supporting text below as a natural lead-in to additional content.</p>
                                        <a class="text-gray-500" href="#"><span
                                                class="inline-block h-3 border-l-2 border-red-600 mr-2"></span>Europe</a>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="flex-shrink max-w-full w-full sm:w-1/3 px-3 pb-3 pt-3 sm:pt-0 border-b-2 sm:border-b-0 border-dotted border-gray-100">
                                <div class="flex flex-row sm:block hover-img">
                                    <a href="">
                                        <img class="max-w-full w-full mx-auto" src="src/img/dummy/img8.jpg"
                                            alt="alt title">
                                    </a>
                                    <div class="py-0 sm:py-3 pl-3 sm:pl-0">
                                        <h3 class="text-lg font-bold leading-tight mb-2">
                                            <a href="#">5 Tips to Save Money Booking Your Next Hotel Room</a>
                                        </h3>
                                        <p class="hidden md:block text-gray-600 leading-tight mb-1">This is a wider card
                                            with supporting text below as a natural lead-in to additional content.</p>
                                        <a class="text-gray-500" href="#"><span
                                                class="inline-block h-3 border-l-2 border-red-600 mr-2"></span>Europe</a>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="flex-shrink max-w-full w-full sm:w-1/3 px-3 pb-3 pt-3 sm:pt-0 border-b-2 sm:border-b-0 border-dotted border-gray-100">
                                <div class="flex flex-row sm:block hover-img">
                                    <a href="">
                                        <img class="max-w-full w-full mx-auto" src="src/img/dummy/img9.jpg"
                                            alt="alt title">
                                    </a>
                                    <div class="py-0 sm:py-3 pl-3 sm:pl-0">
                                        <h3 class="text-lg font-bold leading-tight mb-2">
                                            <a href="#">5 Tips to Save Money Booking Your Next Hotel Room</a>
                                        </h3>
                                        <p class="hidden md:block text-gray-600 leading-tight mb-1">This is a wider card
                                            with supporting text below as a natural lead-in to additional content.</p>
                                        <a class="text-gray-500" href="#"><span
                                                class="inline-block h-3 border-l-2 border-red-600 mr-2"></span>Europe</a>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="flex-shrink max-w-full w-full sm:w-1/3 px-3 pb-3 pt-3 sm:pt-0 border-b-2 sm:border-b-0 border-dotted border-gray-100">
                                <div class="flex flex-row sm:block hover-img">
                                    <a href="">
                                        <img class="max-w-full w-full mx-auto" src="src/img/dummy/img10.jpg"
                                            alt="alt title">
                                    </a>
                                    <div class="py-0 sm:py-3 pl-3 sm:pl-0">
                                        <h3 class="text-lg font-bold leading-tight mb-2">
                                            <a href="#">5 Tips to Save Money Booking Your Next Hotel Room</a>
                                        </h3>
                                        <p class="hidden md:block text-gray-600 leading-tight mb-1">This is a wider card
                                            with supporting text below as a natural lead-in to additional content.</p>
                                        <a class="text-gray-500" href="#"><span
                                                class="inline-block h-3 border-l-2 border-red-600 mr-2"></span>Europe</a>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="flex-shrink max-w-full w-full sm:w-1/3 px-3 pb-3 pt-3 sm:pt-0 border-b-2 sm:border-b-0 border-dotted border-gray-100">
                                <div class="flex flex-row sm:block hover-img">
                                    <a href="">
                                        <img class="max-w-full w-full mx-auto" src="src/img/dummy/img11.jpg"
                                            alt="alt title">
                                    </a>
                                    <div class="py-0 sm:py-3 pl-3 sm:pl-0">
                                        <h3 class="text-lg font-bold leading-tight mb-2">
                                            <a href="#">5 Tips to Save Money Booking Your Next Hotel Room</a>
                                        </h3>
                                        <p class="hidden md:block text-gray-600 leading-tight mb-1">This is a wider card
                                            with supporting text below as a natural lead-in to additional content.</p>
                                        <a class="text-gray-500" href="#"><span
                                                class="inline-block h-3 border-l-2 border-red-600 mr-2"></span>Europe</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- right -->
                    <div
                        class="flex-shrink max-w-full w-full lg:w-1/3 lg:pl-8 lg:pt-14 lg:pb-8 order-first lg:order-last">
                        <div class="w-full bg-gray-50 h-full">
                            <div class="text-sm py-6 sticky">
                                <div class="w-full text-center">
                                    <a class="uppercase" href="#">Advertisement</a>
                                    <a href="#">
                                        <img class="mx-auto" src="src/img/ads/250.jpg" alt="advertisement area">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main><!-- end main -->
</template>
