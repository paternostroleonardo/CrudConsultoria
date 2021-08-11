<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
              Módulo de usuarios
            </h2>
             <div class="md:col-span-2 mt-5 md:mt-0">
                     <div class="shadow bg-white md:rounded-md p-4">
                         <div class="flex justify-between">
                             <input type="text" class="form-input rounded-md shadow-sm" placeholder="Buscar por nombre..." v-model="q">
                              <Link :href="route('users.create')" class="bg-indigo-500 text-white font-bold py-2 px-4 rounded-md"> Crear Usuario </Link>
            </div>
            </div>
            </div>
        </template>
    <div class="max-w-6xl mx-auto py-10 sm:px-6 lg:px-8">
        <div class="flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200 w-full">
                            <thead>
                            <tr>
                                <th scope="col" class="px-6 py-3 bg-indigo-500 text-left text-xs font-medium text-gray-100 uppercase tracking-wider">
                                    Nombre
                                </th>
                                <th scope="col" class="px-6 py-3 bg-gray-200 text-left text-xs font-medium uppercase tracking-wider">
                                    Apellido
                                </th>
                                <th scope="col" class="px-6 py-3 bg-indigo-500 text-left text-xs font-medium text-gray-100 uppercase tracking-wider">
                                    Email
                                </th>
                                <th scope="col" class="px-6 py-3 bg-indigo-500 text-left text-xs font-medium text-gray-100 uppercase tracking-wider">
                                    Télefono
                                </th>
                                <th scope="col" class="px-6 py-3 bg-gray-200 text-left text-xs font-medium uppercase tracking-wider">
                                    Cargo
                                </th>
                                <th scope="col" class="px-6 py-3 bg-gray-200 text-left text-xs font-medium uppercase tracking-wider">
                                    Acción
                                </th>
                            </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                            <tr v-for="user in users">

                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                        {{ user.name }}
                                    </td>

                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-indigo-500">
                                        {{ user.lastname }}
                                    </td>

                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                        {{ user.email }}
                                    </td>

                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                        {{ user.phone }}
                                    </td>

                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                        {{ user.rol }}
                                    </td>
                                    <td class="py-3 px-6 text-center">
                                        <div class="flex item-center justify-center">
                                            <div class="w-4 mr-2 transform hover:text-yellow-400 hover:scale-110">
                                                <Link :href="route('users.show', user.id)" :class="{ 'active': $page.url.startsWith('/users') }">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                </svg>
                                                </Link>
                                            </div>
                                            <div class="w-4 mr-2 transform text-indigo-500 hover:text-yellow-400 hover:scale-110">
                                                 <Link :href="route('users.edit', user.id)" :class="{ 'active': $page.url.startsWith('/users') }">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                                </svg>
                                                </Link>
                                            </div>
                                            <div class="w-4 mr-2 transform text-yellow-400 hover:text-indigo-500 hover:scale-110">
                                            <Link method="delete" :href="route('users.destroy', user.id)" :class="{ 'active': $page.component.startsWith('users') }">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                </svg>
                                           	</Link>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </app-layout>
</template>

<script>
    import AppLayout from '@/Layouts/AppLayout'
    import { Link } from '@inertiajs/inertia-vue3'
    import Welcome from '@/Jetstream/Welcome'
    export default {
        components: {
            AppLayout,
            Welcome,
            Link
        },
        props: {
            users: Array,
        },
        data(){
            return{
                q:''
            }
        },
        watch: {
            q: function (value){
                this.$inertia.replace(this.route('users.index', {q: value}))
            }
        }
    }
</script>
