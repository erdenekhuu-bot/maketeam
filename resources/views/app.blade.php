<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name', 'Laravel') }}</title>
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @endif
    </head>
    <body>
        <div id="app">
            <Layout>
                <template v-slot:header>
                    <v-row >
                        <v-col class="px-16">
                            <section class="flex justify-between items-center">
                                <p class="font-black text-3xl text-[#020B75]">startupnews</p>
                                <div class="flex items-center">
                                    <img src="/asset/search.svg" alt="error">
                                    <img class="mx-4" src="/asset/moon.svg" alt="error">
                                </div>
                            </section>
                            <section class="flex justify-between items-center mt-3 text-[#020B75] font-bold">
                                <router-link to="/" class="hover:cursor-pointer">Мэдээ</router-link>
                                <router-link to="/startup" class="hover:cursor-pointer">Стартапууд</router-link>
                                <router-link to="/schema" class="hover:cursor-pointer">Монголын стартап экосистемийн зураглал</router-link>
                                <router-link to="/" class="hover:cursor-pointer">Холбогдох</router-link>
                                <div class="flex items-center hover:cursor-pointer">
                                    <img src="/asset/user.svg" alt="">
                                    <p class="px-2 text-[14px] font-bold">Нэвтрэх</p>
                                </div>
                            </section>
                        </v-col>
                    </v-row>
                </template>

                <router-view></router-view>

                <template v-slot:footer>
                    <v-row justify="justify-space-between">
                        <v-col class="px-16">
                          <div class="mt-8 w-[298px]">
                            <img src="/asset/foot_banner.svg" alt="">
                            <p class="text-[14px] opacity-80 my-4">Технологи ба стартап экосистемийн мэдээ мэдээллийг танд хүргэнэ.</p>
                            <img src="/asset/sosmedia.svg" alt="">
                          </div>
                        </v-col>
                        <v-col class="opacity-80">
                            <p class="my-4">Startupnews тухай</p>
                            <p class="my-4">Стартапууд</p>
                            <p class="my-4">Мэдээ</p>
                            <p class="my-4">Бидэнтэй холбогдох</p>
                            <p>Ярилцлага</p>
                        </v-col>
                    </v-row>
                </template>
            </Layout>
        </div>
    </body>
</html>
