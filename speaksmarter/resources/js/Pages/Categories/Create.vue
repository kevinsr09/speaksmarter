<script >
export default {
    name: "Categories/Create",
}
</script>


<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import { useForm } from '@inertiajs/vue3';
import CreateForm from '@/Components/Categories/CreateForm.vue';

const form = useForm({
    name: '',
})
</script>

<template>
    <AppLayout title="Categories">
        <template #header>
            <h1 class="font-semibold text-xl text-gray-800 leading-tight">Categories</h1>
        </template>

        <main class="py-12 container mx-auto max-w-screen-lg">


            <CreateForm :form="form" @submit="form.post(route('categories.store'))"></CreateForm>



        </main>
    </AppLayout>
</template>
