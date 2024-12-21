<script setup>
import { ref } from 'vue'
import { Bars3BottomRightIcon, XMarkIcon } from '@heroicons/vue/24/solid'
import backgroundImage from 'images/background-image.jpg'

const open = ref(false)
const toggle = () => (open.value = !open.value)

const navigation = [
    { name: 'News', href: '#' },
    { name: 'About', href: '#' },
    { name: 'Contact', href: '#' },
]
</script>

<template>
    <header class="absolute inset-x-0 top-0 z-50">
        <div class="relative isolate overflow-hidden pt-2 lg:pt-8">
            <nav
                class="container mx-auto flex items-center justify-between p-6 text-white lg:px-8"
                aria-label="Global"
            >
                <div class="flex lg:flex-1">
                    <a
                        href="#"
                        class="-m-1.5 p-1.5 text-xl font-bold lg:text-3xl"
                    >
                        <span class="sr-only">Your Company</span>
                        <span class="text-2xl text-amber-400 lg:text-4xl"
                            >T</span
                        >echNews
                    </a>
                </div>
                <div class="flex lg:hidden">
                    <button
                        type="button"
                        class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-400"
                        @click="toggle"
                    >
                        <span class="sr-only">Open main menu</span>
                        <Bars3BottomRightIcon
                            class="size-6 text-white"
                            aria-hidden="true"
                        />
                    </button>
                </div>
                <div class="hidden lg:flex lg:gap-x-12">
                    <a
                        v-for="item in navigation"
                        :key="item.name"
                        :href="item.href"
                        class="group text-sm/6 font-semibold text-white transition duration-300"
                    >
                        {{ item.name }}
                        <span
                            class="block h-0.5 max-w-0 bg-amber-400 transition-all duration-500 group-hover:max-w-full"
                        ></span>
                    </a>
                </div>
            </nav>
            <img
                :src="backgroundImage"
                alt="Header Background"
                class="absolute inset-0 -z-10 size-full object-cover"
            />

            <div class="mx-auto max-w-2xl py-32 sm:py-48 lg:py-56">
                <div class="hidden sm:mb-8 sm:flex sm:justify-center">
                    <div
                        class="relative rounded-full px-3 py-1 text-sm/6 text-gray-400 ring-1 ring-white/10 hover:ring-white/20"
                    >
                        Announcing our next round of funding.
                        <a href="#" class="font-semibold text-white"
                            ><span
                                class="absolute inset-0"
                                aria-hidden="true"
                            />Read more
                            <span aria-hidden="true">&rarr;</span></a
                        >
                    </div>
                </div>
                <div class="text-center">
                    <h1
                        class="text-balance text-5xl font-semibold tracking-tight text-white sm:text-7xl"
                    >
                        Data to enrich your online business
                    </h1>
                    <p
                        class="mt-8 text-pretty text-lg font-medium text-gray-400 sm:text-xl/8"
                    >
                        Anim aute id magna aliqua ad ad non deserunt sunt. Qui
                        irure qui lorem cupidatat commodo. Elit sunt amet fugiat
                        veniam occaecat.
                    </p>
                    <div class="mt-10 flex items-center justify-center gap-x-6">
                        <a
                            href="#"
                            class="rounded-md bg-indigo-500 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-400"
                            >Get started</a
                        >
                        <a href="#" class="text-sm/6 font-semibold text-white"
                            >Learn more <span aria-hidden="true">→</span></a
                        >
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Mobile Navbar -->
    <nav
        v-if="open"
        class="fixed inset-0 z-50 flex flex-col items-center justify-center bg-black bg-opacity-90 text-white transition-opacity duration-500"
    >
        <div class="absolute right-4 top-10">
            <XMarkIcon
                @click="toggle"
                class="absolute right-2 top-0 size-8 cursor-pointer items-end text-white lg:hidden"
            />
        </div>
        <div class="flex flex-col space-y-6 text-center text-lg">
            <a
                v-for="item in navigation"
                :key="item.name"
                :href="item.href"
                class="group text-sm/6 font-semibold text-white transition duration-300"
            >
                {{ item.name }}
            </a>
        </div>
    </nav>
</template>
