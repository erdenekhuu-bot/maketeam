<template>
    <div class="layout">
        <header class="bg-white">
            <slot name="header"></slot>
        </header>
        <main class="bg-[#F5F5F5]">
            <router-view></router-view>
        </main>
        <footer class="bg-black">
            <slot name="footer"></slot>
        </footer>
    </div>
</template>

<script>
export default {
    name: "Layout",
};
</script>