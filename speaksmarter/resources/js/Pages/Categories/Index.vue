<script >
export default {
    name: "Categories/Index",
}
</script>


<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import { Link } from '@inertiajs/vue3';

defineProps({
    categories: {
        type: Object,
        required: true,
    },

})

const categories2 = [{
    id: 1,
    name: 'Categsory 1',
    created_at: '2020-01-01 00:00:00',
}]

const categoryDestroy = (id) => {

    if(confirm('Are you sure?')){
        Inertia.delete(route('categories.destroy', id))
    }
}

</script>

<template>
    <AppLayout title="Categories">
        <template #header>
            <h1 class="font-semibold text-xl text-gray-800 leading-tight">Categories</h1>
        </template>

        <main class="py-12 container mx-auto max-w-screen-lg">

            <Link :href="route('categories.create')">Create Category
            </Link>


            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Name
                            </th>
                            <th scope="col" class="px-6 py-3">
                                ID
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Created_at
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Modify
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700" v-for="category in categories2">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ category.name }}
                            </th>
                            <td class="px-6 py-4">
                                {{ category.id }}
                            </td>
                            <td class="px-6 py-4">
                                {{ category.created_at }}
                            </td>
                            <td class="px-6 py-4">
                                <Link :href="route('categories.edit', category.id)" >Editar</Link> /    <Link @click="()=>categoryDestroy(category.id)">Eliminar</Link>
                            </td>

                        </tr>
                     </tbody>
                </table>
            </div>


        </main>
    </AppLayout>
</template>
