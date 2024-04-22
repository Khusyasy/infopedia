<script setup>
import { ref } from 'vue';
import { Link } from '@inertiajs/vue3';

const menus = ref([
  { name: 'Home', route: 'home' },
  { name: 'Search', route: 'home' },
  { name: 'Bookmarks', route: 'home' },
]);
</script>

<template>
  <!-- ========== { HEADER }==========  -->
  <header class="fixed top-0 left-0 right-0 z-50">
    <nav class="bg-gray-800">
      <div class="xl:container mx-auto px-3 sm:px-4 xl:px-2">
        <div class="flex justify-between">
          <div class="mx-w-10 text-2xl font-bold capitalize text-white flex items-center">
            InfoPedia
          </div>

          <div class="flex flex-row">
            <!-- nav menu -->
            <ul class="navbar hidden lg:flex lg:flex-row text-gray-50 text-sm items-center font-bold">
              <li v-for="menu in menus" class="relative border-l border-gray-800 hover:bg-gray-900">
                <Link class="block py-3 px-6 border-b-2 border-transparent" :href="route(menu.route)">
                {{ menu.name }}
                </Link>
              </li>

              <li v-if="$page.props.auth.user" class="relative border-l border-gray-800 hover:bg-gray-900">
                <Link class="block py-3 px-6 border-b-2 border-transparent" :href="route('logout')" method="post">
                Log Out
                </Link>
              </li>
              <li v-else class="relative border-l border-gray-800 hover:bg-gray-900">
                <Link class="block py-3 px-6 border-b-2 border-transparent" :href="route('login')">
                Log In
                </Link>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
  </header><!-- end header -->
</template>
