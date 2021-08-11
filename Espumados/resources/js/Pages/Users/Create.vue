<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Módulo de usuarios
            </h2>
        </template>

    <div class="min-w-screen min-h-screen bg-gray-900 flex items-center justify-center px-5 py-3">
    <div class="bg-gray-100 text-gray-500 rounded-3xl shadow-xl w-full overflow-hidden" style="max-width:1000px">
    <div class="md:flex w-full">
    <div class="hidden md:block w-1/2 bg-indigo-500">
        <img src="https://claroinsurance.com/wp-content/uploads/2020/07/Hero.jpg"/>
    </div>
    <div class="w-full md:w-1/2 py-9 px-10 md:px-10">
        <div class="text-center mb-10">
            <h1 class="font-bold text-4xl text-indigo-500">Crea un usuario</h1>
        </div>
                      <form @submit.prevent="submit">
                           <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="name">
                            Nombre
                           </label>
                          <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" placeholder="Name"  id="name" v-model="form.name">
                            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="lastname">
                            Apellido
                           </label>
                          <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" placeholder="Lastname"  id="lastname" v-model="form.lastname">
                            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="email">
                            Email
                           </label>
                          <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" placeholder="Email"  id="email" v-model="form.email">
                          <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="password">
                                 Password
                          </label>
                         <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 mb-3" placeholder="********"  id="password" v-model="form.password">
                          <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="password">
                               Password Confirmation
                          </label>
                         <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 mb-3" placeholder="confirmation" id="password_confirmation" name="password_confirmation">
                          <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="rol">
                                    Cargo
                          </label>
                         <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" placeholder="Rol"  id="rol" v-model="form.rol">
                          <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="phone">
                                   Telefono
                           </label>
                          <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" placeholder="Phone"  id="phone" v-model="form.phone">
                          <button type="submit" class="bg-indigo-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-md"> Crear </button>
                       </form>
                     </div>
                    </div>
                    </div>
                </div>
    </app-layout>
</template>

<script>
    import AppLayout from '@/Layouts/AppLayout'
    import { reactive } from 'vue'
    import { Inertia } from '@inertiajs/inertia'
    export default {
        components: {
            AppLayout,
        },
        setup () {
    const form = reactive({
      name: null,
      lastname: null,
      email: null,
      password: null,
      rol: null,
      phone: null,
    })

    function submit() {
      Inertia.post('/users', form)
    }

    return { form, submit }
  },
       }
</script>
