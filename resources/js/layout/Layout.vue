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

<style scoped>
.layout {
    display: flex;
    flex-direction: column;
    min-height: 100vh;
}
header,
footer {
    background-color: #f8f9fa;
    padding: 1rem;
}
main {
    flex: 1;
}
</style>
