<script setup lang="ts">
import { Head, Link } from "@inertiajs/vue3";

defineProps<{
    canLogin?: boolean;
    canRegister?: boolean;
}>();
</script>

<template>
    <Head title="Welcome" />
    <div
        class="bg-custom-primary dark:text-white min-h-screen flex flex-col font-semibold"
    >
        <div class="flex flex-col justify-between min-h-screen">
            <header class="flex justify-between items-center px-4 py-3">
                <img
                    src="../Assets/linkedin_profile_image.png"
                    alt="logo"
                    class="w-20 h-20 md:w-30 md:h-30 lg:w-40 lg:h-40"
                />
                <nav
                    v-if="canLogin"
                    class="flex justify-end text-xl md:text-2xl lg:text-4xl space-x-4 md:space-x-4 lg:space-x-6 mr-2"
                >
                    <Link :href="route('about')">About</Link>
                    <Link :href="route('contact')">Contact</Link>
                    <Link
                        v-if="$page.props.auth.user"
                        :href="route('dashboard')"
                        >Dashboard</Link
                    >
                    <template v-else>
                        <Link :href="route('login')">Log in</Link>
                        <Link v-if="canRegister" :href="route('register')"
                            >Register</Link
                        >
                    </template>
                </nav>
            </header>
            <main class="flex flex-col justify-center items-center space-y-2">
                <div
                    class="text-4xl md:text-6xl lg:text-8xl text-custom-quaternary font-extrabold"
                >
                    Anime Suggestion
                </div>
                <div
                    class="text-lg md:text-2xl lg:text-4xl text-custom-quaternary font-bold"
                >
                    Complete a form and we'll recommend some anime for you to
                    try.
                </div>
            </main>
            <footer
                class="py-2 px-2 text-xl md:text-2xl lg:text-4xl flex justify-end space-x-4 md:space-x-4 lg:space-x-6 font-semibold"
            ></footer>
        </div>
    </div>
</template>
