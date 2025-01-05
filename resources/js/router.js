import { createRouter, createWebHistory } from "vue-router";
import Home from "./pages/Home.vue";
import About from "./pages/About.vue";
import Schema from "./pages/Schema.vue";
import Startup from "./pages/Startup.vue";

const routes = [
    {
        path: "/",
        name: "Home",
        component: Home,
        meta: { title: "Home" },
    },
    {
        path: "/startup",
        name: "Startup",
        component: Startup,
        meta: { title: "Startup" },
    },
    {
        path: "/schema",
        name: "Schema",
        component: Schema,
        meta: {title: 'Schema'}
    }
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

router.beforeEach((to, from, next) => {
    document.title = to.meta.title;
    next();
});

export default router;
