<template>
  <nav
      class="relative flex w-full flex-wrap items-center justify-between py-2 text-neutral-50 hover:text-neutral-700 focus:text-neutral-700 lg:py-4"
      data-te-navbar-ref>
    <div class="flex w-full flex-wrap items-center justify-between px-3">
      <!-- Hamburger button -->
      <button
          class="block border-0 bg-transparent px-2 text-neutral-500 hover:no-underline hover:shadow-none focus:no-underline focus:shadow-none focus:outline-none focus:ring-0 dark:text-neutral-200 lg:hidden"
          type="button"
          data-te-collapse-init
          data-te-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation">
        <!-- Hamburger icon -->
        <span class="[&>svg]:w-7">
        <svg
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 24 24"
            fill="currentColor"
            class="h-7 w-7">
          <path
              fill-rule="evenodd"
              d="M3 6.75A.75.75 0 013.75 6h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 6.75zM3 12a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 12zm0 5.25a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75a.75.75 0 01-.75-.75z"
              clip-rule="evenodd"/>
        </svg>
      </span>
      </button>
      <div
          class="!visible mt-2 hidden flex-grow basis-[100%] items-center lg:mt-0 lg:!flex lg:basis-auto"
          id="navbarSupportedContent"
          data-te-collapse-item>
        <ul
            class="list-style-none mr-auto flex flex-col pl-0 lg:mt-1 lg:flex-row"
            data-te-navbar-nav-ref>
          <!-- Home link -->
          <li
              class="my-4 pl-2 lg:my-0 lg:pl-2 lg:pr-1"
              data-te-nav-item-ref>
            <a
                class="text-neutral-500 hover:text-neutral-700 focus:text-neutral-700 disabled:text-black/30 dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:text-neutral-400 lg:px-2 [&.active]:text-black/90 dark:[&.active]:text-neutral-400"
                aria-current="page"
                href="#"
                data-te-nav-link-ref
            >{{ profileLabel }}</a>
          </li>
          <li
              class="my-4 pl-2 lg:my-0 lg:pl-2 lg:pr-1"
              data-te-nav-item-ref>
            <a
                class="text-neutral-500 hover:text-neutral-700 focus:text-neutral-700 disabled:text-black/30 dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:text-neutral-400 lg:px-2 [&.active]:text-black/90 dark:[&.active]:text-neutral-400"
                aria-current="page"
                href="#"
                data-te-nav-link-ref
            >{{ experienceLabel }}</a>
          </li>
          <li
              class="my-4 pl-2 lg:my-0 lg:pl-2 lg:pr-1"
              data-te-nav-item-ref>
            <a
                class="text-neutral-500 hover:text-neutral-700 focus:text-neutral-700 disabled:text-black/30 dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:text-neutral-400 lg:px-2 [&.active]:text-black/90 dark:[&.active]:text-neutral-400"
                aria-current="page"
                href="#"
                data-te-nav-link-ref
            >{{ educationLabel }}</a>
          </li>
          <li
              class="my-4 pl-2 lg:my-0 lg:pl-2 lg:pr-1"
              data-te-nav-item-ref>
            <a
                class="text-neutral-500 hover:text-neutral-700 focus:text-neutral-700 disabled:text-black/30 dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:text-neutral-400 lg:px-2 [&.active]:text-black/90 dark:[&.active]:text-neutral-400"
                aria-current="page"
                href="#"
                data-te-nav-link-ref
            >{{ skillsLabel }}</a>
          </li>
          <li
              class="my-4 pl-2 lg:my-0 lg:pl-2 lg:pr-1"
              data-te-nav-item-ref>
            <a
                class="text-neutral-500 hover:text-neutral-700 focus:text-neutral-700 disabled:text-black/30 dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:text-neutral-400 lg:px-2 [&.active]:text-black/90 dark:[&.active]:text-neutral-400"
                aria-current="page"
                href="#"
                data-te-nav-link-ref
            >{{ downloadLabel }}</a>
          </li>
        </ul>
        <!-- /Left items -->
        <!-- Right items -->
        <div class="flex items-center">
          <!-- Icon dropdown -->
          <div class="relative ml-4" data-te-dropdown-alignment="end">
            <a
                class="mr-4 flex items-center text-gray-500 transition duration-200 hover:text-gray-700 hover:ease-in-out focus:text-gray-700 motion-reduce:transition-none"
                href="#"
                id="navbarDropdown"
                role="button"
                data-te-dropdown-toggle-ref
                aria-expanded="false">
            <span
                class="relative inline-block h-[11px] w-4 overflow-hidden bg-gray-200 leading-[11px] decoration-inherit">
              <span
                  class="inline-block h-[11px] w-4 content-[''] [background:url(/storage/images/flags.png)_no-repeat_-108px_-1976px] [background-position:-72px_-0px_!important]"></span>
            </span>
              <span class="w-2 pl-1">
              <svg
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 20 20"
                  fill="currentColor"
                  class="h-5 w-5">
                <path
                    fill-rule="evenodd"
                    d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                    clip-rule="evenodd"/>
              </svg>
            </span>
            </a>
            <ul
                class="absolute -left-24 z-[1000] float-left m-0 hidden min-w-[9.2rem] list-none overflow-hidden rounded-lg border-none bg-white bg-clip-padding text-left text-base shadow-lg dark:bg-zinc-700 [&[data-te-dropdown-show]]:block"
                aria-labelledby="navbarDropdown"
                data-te-dropdown-menu-ref>
              <li>
                <a
                    class="block w-full whitespace-nowrap bg-transparent px-4 py-2 text-sm font-normal text-gray-700 hover:bg-gray-100 active:text-zinc-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-gray-400 dark:text-gray-200 dark:hover:bg-white/30"
                    href="#"
                    data-te-dropdown-item-ref>
                <span
                    class="relative mr-2 inline-block h-[11px] w-4 overflow-hidden bg-gray-200 leading-[11px] decoration-inherit">
                  <span
                      class="inline-block h-[11px] w-4 content-[''] [background:url(/storage/images/flags.png)_no-repeat_-108px_-1976px] [background-position:-72px_-0px_!important]"></span>
                </span>
                  <span class="mr-4">Español</span>
                  <span
                      class="inline-block fill-green-600 dark:fill-gray-200 [&>svg]:h-3.5 [&>svg]:w-3.5">
                  <svg
                      xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 512 512">
                    <path
                        d="M470.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L192 338.7 425.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"/>
                  </svg>
                </span>
                </a>
              </li>
              <li>
                <hr class="my-2"/>
              </li>
              <li>
                <a
                    class="block w-full whitespace-nowrap bg-transparent px-4 py-2 text-sm font-normal text-gray-700 hover:bg-gray-100 active:text-zinc-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-gray-400 dark:text-gray-200 dark:hover:bg-white/30"
                    href="#"
                    data-te-dropdown-item-ref>
                <span
                    class="relative mr-2 inline-block h-[11px] w-4 overflow-hidden bg-gray-200 leading-[11px] decoration-inherit">
                  <span
                      class="inline-block h-[11px] w-4 content-[''] [background:url(/storage/images/flags.png)_no-repeat_-108px_-1976px] [background-position:-72px_-1924px_!important]"></span>
                </span>
                  English</a
                >
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </nav>
</template>

<script setup>
import {onMounted, computed} from 'vue'
import {usePage} from "@inertiajs/inertia-vue3";
import {Dropdown, Collapse, initTE} from 'tw-elements'

const page = usePage()
const profileLabel = computed(() => page.props.value.profile)
const experienceLabel = computed(() => page.props.value.experience)
const educationLabel = computed(() => page.props.value.education)
const skillsLabel = computed(() => page.props.value.skills)
const downloadLabel = computed(() => page.props.value.downloadLabel)
onMounted(() => {
  initTE({Dropdown, Collapse})
})

</script>

<style lang="scss" scoped>

</style>
