<script setup lang="ts">
import { ObjectEmitsOptions, ref } from "vue";
import { Head, Link } from "@inertiajs/vue3";
import DisplayAnime from "@/Components/DisplayAnime.vue";

defineProps<{
    canLogin?: boolean;
    canRegister?: boolean;
    animes?: Object;
    errors?: Object;
}>();

const showingGender = ref<boolean>(false);

const handleGenderChange = (event: Event) => {
    const input = event.target as HTMLInputElement;
    showingGender.value = input.id === "yes" && input.checked;
};
</script>

<template>
    <Head title="Welcome" />
    <!-- <p v-if="animes">{{ animes }}</p>
    <p v-else>{{ errors }}</p> -->
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
    <section>
        <div
            class="px-2 font-semibold sm:text-xl md:text-3xl lg:text-4xl text-custom-primary"
        >
            Form Example
        </div>
        <p
            class="px-2 font-semibold sm:text-sm md:text-md lg:text-lg text-red-500"
        >
            You don't have to complete this form, it is just a sample of what
            you're going to complete
        </p>
        <form class="px-4">
            <div class="md:text-2xl lg:text-4xl">
                1. Select your favourite type of genre
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
                2. Do you have a preference with the gender of the protagonist?
            </div>
            <div class="space-x-2">
                <input
                    type="radio"
                    id="yes"
                    name="yes-no"
                    @change="handleGenderChange"
                />
                <label for="yes">Yes</label>
            </div>
            <div class="space-x-2">
                <input
                    type="radio"
                    id="no"
                    name="yes-no"
                    @change="handleGenderChange"
                />
                <label for="no">No</label>
            </div>
            <div v-if="showingGender" class="space-x-2">
                <label for="gender"
                    >Input the gender of protagonist that you prefer?</label
                >
                <input type="text" id="gender" />
            </div>
            <div class="md:text-2xl lg:text-4xl">
                3. Would you give a chance to older animes with old art style?
            </div>
            <div class="space-x-2">
                <input type="radio" id="old_yes" name="old" />
                <label for="old_yes">Yes</label>
            </div>
            <div class="space-x-2">
                <input type="radio" id="old_no" name="old" />
                <label for="old_no">No</label>
            </div>
            <div>That's all we need to give you a recommendation.</div>
        </form>
    </section>
    <section>
        <div class="px-2 md:text-3xl lg:text-4xl font-bold">
            Recommendation Sample
        </div>
        <p
            class="sm:text-sm md:text-md lg:text-lg px-2 text-green-500 font-semibold"
        >
            Here should be the result after you completed the form
        </p>
    </section>
    <section>
        <DisplayAnime
            :anime="{
                mal_url: '#',
                title: 'Naruto',
                description: 'Hello',
                image_url:
                    'https://cdn.myanimelist.net/img/sp/icon/apple-touch-icon-256.png',
            }"
        />
    </section>
</template>
