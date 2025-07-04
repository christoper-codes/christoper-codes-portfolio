<script setup>
import { Head, Link } from '@inertiajs/vue3';
import { onMounted, ref } from 'vue';
import Menu from '@/Components/Menu.vue';
import LightLayout from '@/Layouts/LightLayout.vue';
import Footer from '@/Components/Footer.vue';
import { contactSchema } from '@/validations/contact-schema';
import { useField, useForm } from 'vee-validate';
import Alert from '@/Components/Alert.vue';
import NavLink from '@/Components/NavLink.vue';

const TransitionState = ref(false);
onMounted(() => {
    TransitionState.value = true;
});
const showAlert = ref(false);
const { handleSubmit, resetForm } = useForm({validationSchema : contactSchema});
const name = useField('name');
const email = useField('email');
const description = useField('description');

const submit = handleSubmit((values) => {
    showAlert.value = true;
    resetForm();
});
</script>

<template>
    <Head title="Contact" />
    <Menu />
    <LightLayout />
    <!-- About -->
    <transition name="fade" mode="out-in">
        <section v-if="TransitionState" id="about" class="w-full relative overflow-hidden">
            <Alert v-if="showAlert" >
                {{ 'Email sent successfully' }}
            </Alert>
            <div class="min-h-full px-5 md:px-20 lg:px-5 lg:max-w-[50%] mt-10 lg:mt-0 py-12 flex  flex-col items-start mx-auto gap-10">
                <div class="text-center flex gap-5 relative z-20">
                    <NavLink :href="route('welcome')" :active="route().current('welcome')"><span>Welcome</span></NavLink>
                    <NavLink :href="route('about')" :active="route().current('about')"><span>About</span></NavLink>
                    <NavLink :href="route('uses')" :active="route().current('uses')"><span>Uses</span></NavLink>
                    <NavLink :href="route('contact')" :active="route().current('contact')"><span>Let's talk</span></NavLink>
                </div>
                <div class="w-full">
                    <h2 class="font-bold text-3xl lg:text-5xl text-gray-700">
                        Let's talk
                    </h2>

                    <a href="mailto:christoper.patiho@gmail.com" class="mt-3 inline-flex text-lg">christoper.patiho@gmail.com </a>

                    <div class="mt-9 text-lg flex flex-col gap-5">
                        <p class="leading-8">
                            Fill out the form below to get in touch with me.
                            I'm always excited to hear about new opportunities and I'll do my best to respond to your inquiry within 24 hours.
                        </p>
                        <div class="flex items-center gap-4">
                            <a href="https://www.linkedin.com/in/christoper-pati%C3%B1o-a27b95263/" target="_blank" class="inline-flex items-center justify-center gap-1 underline text-blue-600">
                                <img class="w-5 md:w-6 h-auto" src="https://img.icons8.com/fluency/48/linkedin.png" alt="linkedin image">
                                <span class="text-xs md:text-base">Linkedin</span>
                            </a>
                            <a href="https://github.com/christoper-codes" target="_blank" class="inline-flex items-center justify-center gap-1 underline text-blue-600">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 md:w-6 fill-current h-auto text-neutral-700" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12.026 2c-5.509 0-9.974 4.465-9.974 9.974 0 4.406 2.857 8.145 6.821 9.465.499.09.679-.217.679-.481 0-.237-.008-.865-.011-1.696-2.775.602-3.361-1.338-3.361-1.338-.452-1.152-1.107-1.459-1.107-1.459-.905-.619.069-.605.069-.605 1.002.07 1.527 1.028 1.527 1.028.89 1.524 2.336 1.084 2.902.829.091-.645.351-1.085.635-1.334-2.214-.251-4.542-1.107-4.542-4.93 0-1.087.389-1.979 1.024-2.675-.101-.253-.446-1.268.099-2.64 0 0 .837-.269 2.742 1.021a9.582 9.582 0 0 1 2.496-.336 9.554 9.554 0 0 1 2.496.336c1.906-1.291 2.742-1.021 2.742-1.021.545 1.372.203 2.387.099 2.64.64.696 1.024 1.587 1.024 2.675 0 3.833-2.33 4.675-4.552 4.922.355.308.675.916.675 1.846 0 1.334-.012 2.41-.012 2.737 0 .267.178.577.687.479C19.146 20.115 22 16.379 22 11.974 22 6.465 17.535 2 12.026 2z"></path>
                                </svg>
                                <span class="text-xs md:text-base">Github</span>
                            </a>
                            <a href="https://wa.me/522961161813" target="_blank" class="inline-flex items-center justify-center gap-1 underline text-blue-600">
                                <img class="w-5 md:w-6 h-auto" src="https://img.icons8.com/color/48/whatsapp.png" alt="whatsapp">
                                <span class="text-xs md:text-base">Whatsapp</span>
                            </a>
                        </div>
                    </div>

                    <div class="mt-9">
                        <form @submit.prevent="submit" class="w-full">
                            <div class="flex flex-col lg:flex-row items-center justify-between lg:gap-5 w-full">
                                <div class="w-full">
                                    <div class="relative w-full">
                                        <input v-model="name.value.value" type="text" name="name" id="name" class="block px-2.5 bg-transparent border border-gray-300 transition-colors duration-200 pb-2.5 pt-4 w-full text-sm focus:border-gray-400 appearance-none focus:outline-none focus:ring-0 peer" placeholder=" ">
                                        <label for="name" class="absolute text-sm text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 origin-[0] bg-white px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 start-1 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">Name</label>
                                    </div>
                                    <p class="text-red-500 text-xs font-medium h-4 my-1">{{ name.errorMessage.value }}</p>
                                </div>
                                <div class="w-full">
                                    <div class="relative w-full">
                                        <input v-model="email.value.value" type="email" name="email" id="email" class="block px-2.5 bg-transparent border border-gray-300 transition-colors duration-200 pb-2.5 pt-4 w-full text-sm focus:border-gray-400 appearance-none focus:outline-none focus:ring-0 peer" placeholder=" ">
                                        <label for="email" class="absolute text-sm text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 origin-[0] bg-white px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 start-1 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">E-mail</label>
                                    </div>
                                    <p class="text-red-500 text-xs font-medium h-4 my-1">{{ email.errorMessage.value }}</p>
                                </div>
                            </div>
                            <div class="w-full">
                                <div class="relative">
                                    <textarea v-model="description.value.value" name="comments" id="description" class="block px-2.5 pb-2.5 pt-5 w-full text-sm bg-transparent border border-gray-300 transition-colors duration-200 appearance-none focus:outline-none focus:ring-0 focus:border-gray-400 peer fixed-height resize-none h-24" placeholder=" "></textarea>
                                    <label for="description" class="absolute text-sm text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 origin-[0] bg-white px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-full peer-placeholder-shown:top-1/3 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">Your message</label>
                                </div>
                                <p class="text-red-500 text-xs font-medium h-4 my-1">{{ description.errorMessage.value }}</p>
                            </div>
                            <div class="mt-3 flex items-center justify-end">
                                <button type="submit" class="border hover:bg-white  hover:text-red-600 hover:border-red-500 bg-red-500 py-2 px-4 font-semibold text-white transition-all duration-500">Send email</button>
                            </div>
                        </form>
                    </div>

                    <div class="text-center text-gray-700 my-16 2xl:my-20">
                        <h3 class="text-sm lg:text-lg">Have a project in mind?</h3>
                        <h4 class="font-extrabold text-5xl lg:text-8xl mt-2">LET'S WORK</h4>
                    </div>
                </div>
            </div>
        </section>
    </transition>
    <Footer />
</template>
