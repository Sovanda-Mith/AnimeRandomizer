<script setup lang="ts">
import { ref } from "vue";
import { Head, Link } from "@inertiajs/vue3";
const showingGender = ref<boolean>();

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
        <div
            class="p-4 sm:text-xl md:text-2xl lg:text-4xl space-y-3 text-custom-primary font-semibold"
        >
            <p>
                Have never watch any animes before? We can help you get started.
            </p>
            <p>
                Have already watched too many animes? We can recommend some new
                ones.
            </p>
        </div>
    </div>
    <div>
        <div
            class="font-semibold sm:text-xl md:text-3xl lg:text-4xl text-custom-primary"
        >
            Form Example
        </div>
        <form class="px-4">
            <div class="md:text-2xl lg:text-4xl">
                Select your favourite type of genre
            </div>
            <div class="grid md:grid-cols-4 lg:grid-cols-6 space-y-2">
                <div>
                    <div class="space-x-2">
                        <input type="checkbox" id="action" />
                        <label for="action">Action</label>
                    </div>
                    <div class="space-x-2">
                        <input type="checkbox" id="adventure" />
                        <label for="adventure">Adventure</label>
                    </div>
                    <div class="space-x-2">
                        <input type="checkbox" id="boylove" />
                        <label for="boylove">Boy Love</label>
                    </div>
                    <div class="space-x-2">
                        <input type="checkbox" id="comedy" />
                        <label for="comedy">Comedy</label>
                    </div>
                    <div class="space-x-2">
                        <input type="checkbox" id="drama" />
                        <label for="drama">Drama</label>
                    </div>
                </div>
                <div>
                    <div class="space-x-2">
                        <input type="checkbox" id="ecchi" />
                        <label for="ecchi">Ecchi</label>
                    </div>
                    <div class="space-x-2">
                        <input type="checkbox" id="fantasy" />
                        <label for="fantasy">Fantasy</label>
                    </div>
                    <div class="space-x-2">
                        <input type="checkbox" id="gag" />
                        <label for="gag">Gag Humor</label>
                    </div>
                    <div class="space-x-2">
                        <input type="checkbox" id="girllove" />
                        <label for="girllove">Girl Love</label>
                    </div>
                    <div class="space-x-2">
                        <input type="checkbox" id="gourmet" />
                        <label for="gourmet">Gourmet</label>
                    </div>
                </div>
                <div>
                    <div class="space-x-2">
                        <input type="checkbox" id="harem" />
                        <label for="harem">Harem</label>
                    </div>
                    <div class="space-x-2">
                        <input type="checkbox" id="historical" />
                        <label for="historical">Historical</label>
                    </div>
                    <div class="space-x-2">
                        <input type="checkbox" id="horror" />
                        <label for="horror">Horror</label>
                    </div>
                    <div class="space-x-2">
                        <input type="checkbox" id="magical" />
                        <label for="magical">Magical</label>
                    </div>
                    <div class="space-x-2">
                        <input type="checkbox" id="mecha" />
                        <label for="mecha">Mecha</label>
                    </div>
                </div>
                <div>
                    <div class="space-x-2">
                        <input type="checkbox" id="mystery" />
                        <label for="mystery">Mystery</label>
                    </div>
                    <div class="space-x-2">
                        <input type="checkbox" id="reincarnation" />
                        <label for="reincarnation">Reincarnation</label>
                    </div>
                    <div class="space-x-2">
                        <input type="checkbox" id="regression" />
                        <label for="regression">Regression</label>
                    </div>
                    <div class="space-x-2">
                        <input type="checkbox" id="romance" />
                        <label for="romance">Romance</label>
                    </div>
                    <div class="space-x-2">
                        <input type="checkbox" id="school" />
                        <label for="school">School</label>
                    </div>
                </div>
                <div>
                    <div class="space-x-2">
                        <input type="checkbox" id="scifi" />
                        <label for="scifi">Science Fiction</label>
                    </div>
                    <div class="space-x-2">
                        <input type="checkbox" id="sliceoflife" />
                        <label for="sliceoflife">Slice of Life</label>
                    </div>
                    <div class="space-x-2">
                        <input type="checkbox" id="sport" />
                        <label for="sport">Sport</label>
                    </div>
                    <div class="space-x-2">
                        <input type="checkbox" id="thriller" />
                        <label for="thriller">Thriller</label>
                    </div>
                    <div class="space-x-2">
                        <input type="checkbox" id="warfare" />
                        <label for="warfare">Warfare</label>
                    </div>
                </div>
            </div>
            <div class="md:text-2xl lg:text-4xl">
                Do you have a preference with the gender of the protagonist?
            </div>
            <div>
                <input type="radio" id="yes" :value="true" name="yes-no" />
                <label for="yes">Yes</label>
            </div>
            <div>
                <input type="radio" id="no" name="yes-no" />
                <label for="no">No</label>
            </div>
            <div>
                <label for="gender"
                    >Input the gender of protagonist that you want?</label
                >
                <input type="text" id="gender" />
            </div>
        </form>
    </div>
</template>
