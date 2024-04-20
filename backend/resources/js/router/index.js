import { createRouter, createWebHistory } from "vue-router";
import index from "../components/invoice/index.vue";
import NotFound from "../components/NotFound.vue";

const routes = [
    {
        path: "/",
        component: index,
    },
    {
        path: "/:pathMatch(.*)*",
        component: NotFound,
    },
];
const router = createRouter({
    history: createWebHistory(),
    routes,
});
 
export default router;
