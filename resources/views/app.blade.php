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
                    <v-row class="bg-white">
                        <v-col class="px-16">
                            <section class="flex justify-between items-center">
                                <p class="font-black text-2xl text-[#020B75]">startupnews</p>
                                <div class="flex items-center">
                                    <img src="/asset/search.svg" alt="error">
                                    <img class="mx-4" src="/asset/moon.svg" alt="error">
                                </div>
                            </section>
                            <section class="flex justify-between items-center mt-3 text-[#020B75] font-bold hover:cursor-pointer">
                                <p>Мэдээ</p>
                                <p>Стартапууд</p>
                                <p>Монголын стартап экосистемийн зураглал</p>
                                <p>Холбогдох</p>
                                <div class="flex items-center">
                                    <img src="/asset/user.svg" alt="">
                                    <p class="px-2 text-[14px] font-bold">Нэвтрэх</p>
                                </div>
                            </section>
                        </v-col>
                    </v-row>
                </template>

                <router-view></router-view>

                <template v-slot:footer>
                    <p>&copy; 2022 My Website</p>
                </template>
            </Layout>
        </div>
    </body>
</html>
