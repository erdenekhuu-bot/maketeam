<template>
    <div class="layout">
        <header>
            <slot name="header"></slot>
        </header>
        <main>
            <router-view></router-view>
        </main>
        <footer>
            <slot name="footer"></slot>
        </footer>
    </div>
</template>

<script>
export default {
    name: "Layout",
};
</script>