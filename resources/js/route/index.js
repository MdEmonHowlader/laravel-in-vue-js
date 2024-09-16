import { createRouter, createWebHistory } from "vue-router";
import AddNew from "../crud/AddNew.vue";
import List from "../crud/List.vue";
const routes = [
    { path: "/", name: "List", component: List },
    { path: "/add-new", name: "AddNew", component: AddNew },
];
const router = createRouter({
    history: createWebHistory(),
    routes,
});
export default router;
