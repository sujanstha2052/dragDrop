<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head } from "@inertiajs/vue3";
</script>

<script>
export default {
    components: {
        AuthenticatedLayout,
        Head,
    },

    data() {
        return {
            title: null,
            parts: []
        }
    },

    props: {
        series: Object,
    },

    methods: {
        update() {
            console.log('update run')
        }
    },

    mounted() {
        this.title = this.series.title;
        this.parts = this.series.parts;
    },
};
</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ title }}
            </h2>
        </template>


        <div class="hero bg-base-200">
            <div class="hero-content flex-col ">
                <div class="card shrink-0 w-full max-w-sm shadow-2xl bg-base-100">
                    <form class="card-body" action="#" @submit.prevent="update">
                        <div class="form-control">
                            <label class="label">
                                <span class="label-text">Title</span>
                            </label>
                            <input type="text" id="title" v-model="title" class="input input-bordered"  />
                        </div>
                        <div class="form-control mt-6">
                            <button class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
