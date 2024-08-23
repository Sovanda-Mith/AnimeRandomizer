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
                    class="sm:w-20 sm:h-20 md:w-30 md:h-30 lg:w-40 lg:h-40"
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
                    Complete a form and we'll recommend some animes for you to
                    try.
                </div>
            </main>
            <div
                class="text-center font-semibold text-2xl py-2 shadow-md animate-bounce"
            >
                Scroll Down👇
            </div>
        </div>
    </div>
    <div class="bg-custom-quaternary flex items-center">
        <img
            src="../Assets/ubel.png"
            alt="Ubel From Frieren"
            class="sm:w-40 sm:h-40 md:w-60 md:h-60 lg:w-80 lg:h-80"
        />
        <div class="p-4 text-2xl space-y-3 text-custom-primary font-semibold">
            <p>
                Have never watch any animes before? We can help you get started.
            </p>
            <p>
                Have already watched too many animes? We can recommend some new
                ones.
            </p>
        </div>
    </div>
</template>
