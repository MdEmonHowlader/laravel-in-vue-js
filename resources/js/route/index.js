

import { createRouter, createWebHistory } from "vue-router";
import AddNew from "../crud/AddNew.vue";

const routes=[
    {path: '/add-new', name:'AddNew', component:AddNew}
];
const router =createRouter({
    history:createWebHistory(),
    routes
});
export default router;
