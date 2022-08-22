<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{url('frontend/css/styles.css')}}" />
    <title>{{config('app.name')}}</title>

    <!-- npx tailwindcss -i ./src/styles.css -o ./public/styles.css --watch -->
</head>
<body>
<!-- header section start -->
<div class="relative bg-white">
    <div class="px-4 mx-auto max-w-7xl sm:px-6">
        <div
            class="flex items-center justify-between border-b-2 border-gray-100 md:justify-start md:space-x-10"
        >

            <div class="flex justify-start lg:w-0 lg:flex-1">
                <a href="#">
                    <span class="sr-only">Workflow</span>
                    <img
                        class="h-20 w-36"
                        src="{{$klinic->image}}"
                        alt=""
                    />
                </a>
            </div>
            <div class="-my-2 -mr-2 md:hidden">
                <button
                    type="button"
                    class="inline-flex items-center justify-center p-2 text-gray-400 bg-white rounded-md hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500"
                    aria-expanded="false"
                >
                    <span class="sr-only">Open menu</span>
                    <!-- Heroicon name: outline/menu -->
                    <svg
                        class="w-6 h-6"
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="2"
                        stroke="currentColor"
                        aria-hidden="true"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M4 6h16M4 12h16M4 18h16"
                        ></path>
                    </svg>
                </button>
            </div>
            <nav class="hidden space-x-10 md:flex">
                <div class="relative">
                    <!-- Item active: "text-gray-900", Item inactive: "text-gray-500" -->
                    <button
                        type="button"
                        class="inline-flex items-center text-base font-medium text-gray-500 bg-white rounded-md group hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                        aria-expanded="false"
                    >
                        <span>Solutions</span>
                        <!--
                      Heroicon name: solid/chevron-down

                      Item active: "text-gray-600", Item inactive: "text-gray-400"
                    -->
                        <svg
                            class="hidden w-5 h-5 ml-2 text-gray-400 group-hover:text-gray-500"
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20"
                            fill="currentColor"
                            aria-hidden="true"
                        >
                            <path
                                fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd"
                            ></path>
                        </svg>
                    </button>

                    <div
                        class="absolute z-10 hidden w-screen max-w-md px-2 mt-3 -ml-4 transform sm:px-0 lg:ml-0 lg:left-1/2 lg:-translate-x-1/2"
                    >
                        <div
                            class="overflow-hidden rounded-lg shadow-lg ring-1 ring-black ring-opacity-5"
                        >
                            <div class="relative grid gap-6 px-5 py-6 bg-white sm:gap-8 sm:p-8">
                                <a href="#" class="flex items-start p-3 -m-3 rounded-lg hover:bg-gray-50">
                                    <!-- Heroicon name: outline/chart-bar -->
                                    <svg
                                        class="flex-shrink-0 w-6 h-6 text-indigo-600"
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="2"
                                        stroke="currentColor"
                                        aria-hidden="true"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"
                                        ></path>
                                    </svg>
                                    <div class="ml-4">
                                        <p class="text-base font-medium text-gray-900">Analytics</p>
                                        <p class="mt-1 text-sm text-gray-500">
                                            Get a better understanding of where your traffic is coming from.
                                        </p>
                                    </div>
                                </a>

                                <a href="#" class="flex items-start p-3 -m-3 rounded-lg hover:bg-gray-50">
                                    <!-- Heroicon name: outline/cursor-click -->
                                    <svg
                                        class="flex-shrink-0 w-6 h-6 text-indigo-600"
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="2"
                                        stroke="currentColor"
                                        aria-hidden="true"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122"
                                        ></path>
                                    </svg>
                                    <div class="ml-4">
                                        <p class="text-base font-medium text-gray-900">Engagement</p>
                                        <p class="mt-1 text-sm text-gray-500">
                                            Speak directly to your customers in a more meaningful way.
                                        </p>
                                    </div>
                                </a>

                                <a href="#" class="flex items-start p-3 -m-3 rounded-lg hover:bg-gray-50">
                                    <!-- Heroicon name: outline/shield-check -->
                                    <svg
                                        class="flex-shrink-0 w-6 h-6 text-indigo-600"
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="2"
                                        stroke="currentColor"
                                        aria-hidden="true"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"
                                        ></path>
                                    </svg>
                                    <div class="ml-4">
                                        <p class="text-base font-medium text-gray-900">Security</p>
                                        <p class="mt-1 text-sm text-gray-500">
                                            Your customers' data will be safe and secure.
                                        </p>
                                    </div>
                                </a>

                                <a href="#" class="flex items-start p-3 -m-3 rounded-lg hover:bg-gray-50">
                                    <!-- Heroicon name: outline/view-grid -->
                                    <svg
                                        class="flex-shrink-0 w-6 h-6 text-indigo-600"
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="2"
                                        stroke="currentColor"
                                        aria-hidden="true"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"
                                        ></path>
                                    </svg>
                                    <div class="ml-4">
                                        <p class="text-base font-medium text-gray-900">Integrations</p>
                                        <p class="mt-1 text-sm text-gray-500">
                                            Connect with third-party tools that you're already using.
                                        </p>
                                    </div>
                                </a>

                                <a href="#" class="flex items-start p-3 -m-3 rounded-lg hover:bg-gray-50">
                                    <!-- Heroicon name: outline/refresh -->
                                    <svg
                                        class="flex-shrink-0 w-6 h-6 text-indigo-600"
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="2"
                                        stroke="currentColor"
                                        aria-hidden="true"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"
                                        ></path>
                                    </svg>
                                    <div class="ml-4">
                                        <p class="text-base font-medium text-gray-900">Automations</p>
                                        <p class="mt-1 text-sm text-gray-500">
                                            Build strategic funnels that will drive your customers to convert
                                        </p>
                                    </div>
                                </a>
                            </div>
                            <div
                                class="px-5 py-5 space-y-6 bg-gray-50 sm:flex sm:space-y-0 sm:space-x-10 sm:px-8"
                            >
                                <div class="flow-root">
                                    <a
                                        href="#"
                                        class="flex items-center p-3 -m-3 text-base font-medium text-gray-900 rounded-md hover:bg-gray-100"
                                    >
                                        <!-- Heroicon name: outline/play -->
                                        <svg
                                            class="flex-shrink-0 w-6 h-6 text-gray-400"
                                            xmlns="http://www.w3.org/2000/svg"
                                            fill="none"
                                            viewBox="0 0 24 24"
                                            stroke-width="2"
                                            stroke="currentColor"
                                            aria-hidden="true"
                                        >
                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"
                                            ></path>
                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"
                                            ></path>
                                        </svg>
                                        <span class="ml-3">Watch Demo</span>
                                    </a>
                                </div>

                                <div class="flow-root">
                                    <a
                                        href="#"
                                        class="flex items-center p-3 -m-3 text-base font-medium text-gray-900 rounded-md hover:bg-gray-100"
                                    >
                                        <!-- Heroicon name: outline/phone -->
                                        <svg
                                            class="flex-shrink-0 w-6 h-6 text-gray-400"
                                            xmlns="http://www.w3.org/2000/svg"
                                            fill="none"
                                            viewBox="0 0 24 24"
                                            stroke-width="2"
                                            stroke="currentColor"
                                            aria-hidden="true"
                                        >
                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"
                                            ></path>
                                        </svg>
                                        <span class="ml-3">Contact Sales</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <a href="#" class="text-base font-medium text-gray-500 hover:text-gray-900">
                    Pricing
                </a>
                <a href="#" class="text-base font-medium text-gray-500 hover:text-gray-900">
                    Docs
                </a>

                <div class="relative">
                    <button
                        type="button"
                        class="inline-flex items-center text-base font-medium text-gray-500 bg-white rounded-md group hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                        aria-expanded="false"
                    >
                        <span>More</span>
                        <!--
                      Heroicon name: solid/chevron-down

                      Item active: "text-gray-600", Item inactive: "text-gray-400"
                    -->
                        <svg
                            class="hidden w-5 h-5 ml-2 text-gray-400 group-hover:text-gray-500"
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20"
                            fill="currentColor"
                            aria-hidden="true"
                        >
                            <path
                                fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd"
                            ></path>
                        </svg>
                    </button>

                    <div
                        class="absolute z-10 hidden w-screen max-w-md px-2 mt-3 transform -translate-x-1/2 left-1/2 sm:px-0"
                    >
                        <div
                            class="overflow-hidden rounded-lg shadow-lg ring-1 ring-black ring-opacity-5"
                        >
                            <div class="relative grid gap-6 px-5 py-6 bg-white sm:gap-8 sm:p-8">
                                <a href="#" class="flex items-start p-3 -m-3 rounded-lg hover:bg-gray-50">
                                    <!-- Heroicon name: outline/support -->
                                    <svg
                                        class="flex-shrink-0 w-6 h-6 text-indigo-600"
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="2"
                                        stroke="currentColor"
                                        aria-hidden="true"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z"
                                        ></path>
                                    </svg>
                                    <div class="ml-4">
                                        <p class="text-base font-medium text-gray-900">Help Center</p>
                                        <p class="mt-1 text-sm text-gray-500">
                                            Get all of your questions answered in our forums or contact support.
                                        </p>
                                    </div>
                                </a>

                                <a href="#" class="flex items-start p-3 -m-3 rounded-lg hover:bg-gray-50">
                                    <!-- Heroicon name: outline/bookmark-alt -->
                                    <svg
                                        class="flex-shrink-0 w-6 h-6 text-indigo-600"
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="2"
                                        stroke="currentColor"
                                        aria-hidden="true"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M16 4v12l-4-2-4 2V4M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"
                                        ></path>
                                    </svg>
                                    <div class="ml-4">
                                        <p class="text-base font-medium text-gray-900">Guides</p>
                                        <p class="mt-1 text-sm text-gray-500">
                                            Learn how to maximize our platform to get the most out of it.
                                        </p>
                                    </div>
                                </a>

                                <a href="#" class="flex items-start p-3 -m-3 rounded-lg hover:bg-gray-50">
                                    <!-- Heroicon name: outline/calendar -->
                                    <svg
                                        class="flex-shrink-0 w-6 h-6 text-indigo-600"
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="2"
                                        stroke="currentColor"
                                        aria-hidden="true"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"
                                        ></path>
                                    </svg>
                                    <div class="ml-4">
                                        <p class="text-base font-medium text-gray-900">Events</p>
                                        <p class="mt-1 text-sm text-gray-500">
                                            See what meet-ups and other events we might be planning near you.
                                        </p>
                                    </div>
                                </a>

                                <a href="#" class="flex items-start p-3 -m-3 rounded-lg hover:bg-gray-50">
                                    <!-- Heroicon name: outline/shield-check -->
                                    <svg
                                        class="flex-shrink-0 w-6 h-6 text-indigo-600"
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="2"
                                        stroke="currentColor"
                                        aria-hidden="true"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"
                                        ></path>
                                    </svg>
                                    <div class="ml-4">
                                        <p class="text-base font-medium text-gray-900">Security</p>
                                        <p class="mt-1 text-sm text-gray-500">
                                            Understand how we take your privacy seriously.
                                        </p>
                                    </div>
                                </a>
                            </div>
                            <div class="px-5 py-5 bg-gray-50 sm:px-8 sm:py-8">
                                <div>
                                    <h3 class="text-sm font-medium tracking-wide text-gray-500 uppercase">
                                        Recent Posts
                                    </h3>
                                    <ul role="list" class="mt-4 space-y-4">
                                        <li class="text-base truncate">
                                            <a href="#" class="font-medium text-gray-900 hover:text-gray-700">
                                                Boost your conversion rate
                                            </a>
                                        </li>

                                        <li class="text-base truncate">
                                            <a href="#" class="font-medium text-gray-900 hover:text-gray-700">
                                                How to use search engine optimization to drive traffic to your site
                                            </a>
                                        </li>

                                        <li class="text-base truncate">
                                            <a href="#" class="font-medium text-gray-900 hover:text-gray-700">
                                                Improve your customer experience
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="mt-5 text-sm">
                                    <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">
                                        View all posts <span aria-hidden="true">→</span></a
                                    >
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
            <div class="items-center justify-end hidden md:flex md:flex-1 lg:w-0">

                <a
                    href="{{route('master.login')}}"
                    class="inline-flex items-center justify-center px-4 py-2 ml-8 text-base font-medium text-white bg-teal-600 border-transparent rounded-md shadow-sm whitespace-nowrap hover:bg-teal-700"
                >
                    Sign in
                </a>
            </div>
        </div>
    </div>

    <div
        class="absolute inset-x-0 top-0 p-2 transition origin-top-right transform md:hidden"
    >
        <div
            class="bg-white divide-y-2 rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 divide-gray-50"
        >
            <div class="px-5 pt-5 pb-6">
                <div class="flex items-center justify-between">
                    <div>
                        <img
                            class="w-auto h-8"
                            src="https://tailwindui.com/img/logos/workflow-mark-indigo-600.svg"
                            alt="Workflow"
                        />
                    </div>
                    <div class="-mr-2">
                        <button
                            type="button"
                            class="inline-flex items-center justify-center p-2 text-gray-400 bg-white rounded-md hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500"
                        >
                            <span class="sr-only">Close menu</span>
                            <!-- Heroicon name: outline/x -->
                            <svg
                                class="w-6 h-6"
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke-width="2"
                                stroke="currentColor"
                                aria-hidden="true"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M6 18L18 6M6 6l12 12"
                                ></path>
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="mt-6">
                    <nav class="grid gap-y-8">
                        <a href="#" class="flex items-center p-3 -m-3 rounded-md hover:bg-gray-50">
                            <!-- Heroicon name: outline/chart-bar -->
                            <svg
                                class="flex-shrink-0 w-6 h-6 text-indigo-600"
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke-width="2"
                                stroke="currentColor"
                                aria-hidden="true"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"
                                ></path>
                            </svg>
                            <span class="ml-3 text-base font-medium text-gray-900"> Analytics </span>
                        </a>

                        <a href="#" class="flex items-center p-3 -m-3 rounded-md hover:bg-gray-50">
                            <!-- Heroicon name: outline/cursor-click -->
                            <svg
                                class="flex-shrink-0 w-6 h-6 text-indigo-600"
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke-width="2"
                                stroke="currentColor"
                                aria-hidden="true"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122"
                                ></path>
                            </svg>
                            <span class="ml-3 text-base font-medium text-gray-900"> Engagement </span>
                        </a>

                        <a href="#" class="flex items-center p-3 -m-3 rounded-md hover:bg-gray-50">
                            <!-- Heroicon name: outline/shield-check -->
                            <svg
                                class="flex-shrink-0 w-6 h-6 text-indigo-600"
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke-width="2"
                                stroke="currentColor"
                                aria-hidden="true"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"
                                ></path>
                            </svg>
                            <span class="ml-3 text-base font-medium text-gray-900"> Security </span>
                        </a>

                        <a href="#" class="flex items-center p-3 -m-3 rounded-md hover:bg-gray-50">
                            <!-- Heroicon name: outline/view-grid -->
                            <svg
                                class="flex-shrink-0 w-6 h-6 text-indigo-600"
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke-width="2"
                                stroke="currentColor"
                                aria-hidden="true"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"
                                ></path>
                            </svg>
                            <span class="ml-3 text-base font-medium text-gray-900"> Integrations </span>
                        </a>

                        <a href="#" class="flex items-center p-3 -m-3 rounded-md hover:bg-gray-50">
                            <!-- Heroicon name: outline/refresh -->
                            <svg
                                class="flex-shrink-0 w-6 h-6 text-indigo-600"
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke-width="2"
                                stroke="currentColor"
                                aria-hidden="true"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"
                                ></path>
                            </svg>
                            <span class="ml-3 text-base font-medium text-gray-900"> Automations </span>
                        </a>
                    </nav>
                </div>
            </div>
            <div class="px-5 py-6 space-y-6">
                <div class="grid grid-cols-2 gap-y-4 gap-x-8">
                    <a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700">
                        Pricing
                    </a>

                    <a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700">
                        Docs
                    </a>

                    <a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700">
                        Help Center
                    </a>

                    <a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700">
                        Guides
                    </a>

                    <a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700">
                        Events
                    </a>

                    <a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700">
                        Security
                    </a>
                </div>
                <div>
                    <a
                        href="#"
                        class="flex items-center justify-center w-full px-4 py-2 text-base font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700"
                    >
                        Sign up
                    </a>
                    <p class="mt-6 text-base font-medium text-center text-gray-500">
                        Existing customer?
                        <a href="#" class="text-indigo-600 hover:text-indigo-500"> Sign in </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- header section end -->
<!-- slider section start -->
<div
    style="
        background-image: url(https://img.freepik.com/free-photo/doctor-with-stethoscope-hand-hospital-background_34200-156.jpg?size=626&amp;ext=jpg&amp;ga=GA1.2.431404942.1654811873);
        background-size: cover;
        background-repeat: no-repeat;
        height: 665px;
      "
    class="relative flex items-center justify-center text-white"
>
    <div class="absolute w-full h-full bg-teal-600 bg-opacity-40"></div>
    <div class="relative z-0 text-center">
        <h1 class="mb-8 text-2xl italic font-semibold tracking-wider uppercase md:text-5xl">
            <span class="px-2 py-2 mb-3 animate-pulse">Find the best doctor</span>
            <span class="block px-2 py-2 mt-4">near by you</span>
            <a
                href="#"
                class="p-3 text-base uppercase bg-teal-600 rounded shadow bg-teal focus:outline-none focus:ring-4 hover:bg-teal-700"
            >
                All Services
            </a>
        </h1>
    </div>
</div>
<!-- slider section end -->

<!-- second section start -->
<div class="flex -mt-20 max-w-7xl mx-auto text-white z-30 relative">
    <div class="bg-teal-500 w-1/4">
        <div class="h-48 px-5 py-5">
            <h1 class="capitalize font-bold mb-4 text-2xl">opening hours</h1>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Earum, cupiditate!</p>
        </div>
    </div>

    <div class="bg-teal-500 w-1/4">
        <div class="h-48 mybg-50 px-5 py-5">
            <h1 class="capitalize font-bold mb-4 text-2xl">opening hours</h1>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Earum, cupiditate!</p>
        </div>
    </div>
    <div class="bg-teal-500 w-1/4">
        <div class="h-48 px-5 py-5">
            <h1 class="capitalize font-bold mb-4 text-2xl">opening hours</h1>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Earum, cupiditate!</p>
        </div>
    </div>
    <div class="bg-teal-500 w-1/4">
        <div class="h-48 mybg-50 px-5 py-5">
            <h1 class="capitalize font-bold mb-4 text-2xl">opening hours</h1>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Earum, cupiditate!</p>
        </div>
    </div>
</div>
<!-- second section end -->

<!-- <div
  class="h-8"
  style="
    background-image: url(https://img.freepik.com/free-vector/blue-molecules-background-science-medical-healthcare_1017-15000.jpg?t=st=1655179554~exp=1655180154~hmac=bc0492bdaaa923c9a7c8a5fccb4bed5078c8512152d696668a886820c2eab5fe&w=1060);
  "
>
</div> -->
<!-- service section -->
<div class="bg-white flex items-center justify-center text-white">
    <div class="h-full pt-16 w-full">
        <div
            class="text-center mx-auto max-w-md px-4 sm:max-w-3xl sm:px-6 lg:px-8 lg:max-w-7xl"
        >
            <p class="font-extrabold sm:text-4xl text-3xl text-white tracking-tight">
                our <span class="myblue-50 capitalize">our services</span>
            </p>
        </div>
        <div
            class="mt-12 mx-auto max-w-md px-4 grid gap-8 sm:max-w-lg sm:px-6 lg:px-8 lg:grid-cols-3 lg:max-w-7xl"
        >
            <div class="flex flex-col rounded-lg shadow-lg overflow-hidden">
                <div class="flex-shrink-0">
                    <img
                        class="duration-500 ease-in-out h-48 hover:scale-110 object-cover transform w-full"
                        src="https://images.unsplash.com/photo-1496128858413-b36217c2ce36?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=1679&amp;q=80"
                        alt=""
                    />
                </div>
                <div class="flex-1 bg-white p-6 flex flex-col justify-between">
                    <div class="flex-1">
                        <a href="#" class="block mt-2">
                            <p class="font-semibold myblue-50 text-gray-900 text-xl">
                                Boost your conversion rate
                            </p>
                            <p class="mt-3 text-base text-gray-500">
                                Have you ever heard the term "analysis paralysis"? It's the concept that
                                too many choices can inhibit a person's ability to make a decision.
                                Visitors to your website can experience this too if there are too many
                                places to look or if there’s a confusing design.
                            </p>
                        </a>
                    </div>
                </div>
            </div>

            <div class="flex flex-col rounded-lg shadow-lg overflow-hidden">
                <div class="flex-shrink-0">
                    <img
                        class="duration-500 ease-in-out h-48 hover:scale-110 object-cover transform w-full"
                        src="https://images.unsplash.com/photo-1547586696-ea22b4d4235d?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=1679&amp;q=80"
                        alt=""
                    />
                </div>
                <div class="flex-1 bg-white p-6 flex flex-col justify-between">
                    <div class="flex-1">
                        <a href="#" class="block mt-2">
                            <p class="font-semibold myblue-50 text-gray-900 text-xl">
                                How to use search engine optimization to drive sales
                            </p>
                            <p class="mt-3 text-base text-gray-500">
                                SEO stands for “search engine optimization.” It means the process of
                                improving your site to increase its visibility when people search for
                                products or services related to your business in any search engines.
                            </p>
                        </a>
                    </div>
                </div>
            </div>

            <div class="flex flex-col rounded-lg shadow-lg overflow-hidden">
                <div class="flex-shrink-0">
                    <img
                        class="duration-500 ease-in-out h-48 hover:scale-110 object-cover transform w-full"
                        src="https://images.unsplash.com/photo-1492724441997-5dc865305da7?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=1679&amp;q=80"
                        alt=""
                    />
                </div>
                <div class="flex-1 bg-white p-6 flex flex-col justify-between">
                    <div class="flex-1">
                        <a href="#" class="block mt-2">
                            <p class="font-semibold myblue-50 text-gray-900 text-xl">
                                Improve your customer experience
                            </p>
                            <p class="mt-3 text-base text-gray-500">
                                Being customer-centric means developing a focal point towards delivering a
                                positive experience throughout the customer journey. When you focus on
                                increasing customer experience, it drives repeat customers and increases
                                loyalty.
                            </p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- service section end -->

<!-- why choose section -->
<section>
    <div class="mx-auto pt-16 services-area">
        <div class="services-wrapper myblue-50">
            <div class="md:flex mx-auto">
                <div class="md:w-2/5 mx-auto w-full">
                    <div
                        style="
                  background-image: url(https://img.freepik.com/free-vector/gradient-hexagonal-background_23-2148932756.jpg?size=626&amp;ext=jpg&amp;ga=GA1.2.431404942.1654811873);
                  background-position: center;
                  height: 564px;
                  background-repeat: no-repeat;
                  background-size: cover;
                  background-attachment: fixed;
                "
                        class="relative"
                    >
                        <div
                            class="absolute bg-opacity-60 bg-teal-600 flex h-full items-center w-full"
                        >
                            <div class="md:pr-32 p-10">
                                <div>
                                    <h1
                                        class="lg:text-4xl mb-3 md:text-xl text-center text-shadow-md text-white uppercase"
                                    >
                                        How it works
                                    </h1>
                                    <p class="lg:text-xl md:text-sm text-sm text-white">
                                        Our customers expect us to deliver every day. Simply click the link
                                        below, enter your delivery details and place your booking.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="relative md:w-3/5 w-full"
                    style="
                background-image: url(https://img.freepik.com/free-vector/network-mesh-wire-digital-technology-background_1017-27428.jpg?size=626&amp;ext=jpg&amp;ga=GA1.2.431404942.1654811873);
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
                height: 564px;
              "
                >
                    <div class="bg-opacity-50 bg-teal-1000 h-full w-full absolute">
                        <div
                            class="bg-white md:w-full px-10 py-8 shadow-2xl w-10/12 relative -left-16 top-16"
                        >
                            <div class="md:flex">
                                <div class="flex flex-col mb-2 sm:mb-10">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20"
                                        fill="currentColor"
                                        class="duration-500 ease-in-out h-10 hover:-translate-y-1 hover:scale-110 mb-4 text-5xl text-ko-blaze-orange-500 transform transition-all w-10"
                                    >
                                        <path
                                            fill-rule="evenodd"
                                            d="M4.083 9h1.946c.089-1.546.383-2.97.837-4.118A6.004 6.004 0 004.083 9zM10 2a8 8 0 100 16 8 8 0 000-16zm0 2c-.076 0-.232.032-.465.262-.238.234-.497.623-.737 1.182-.389.907-.673 2.142-.766 3.556h3.936c-.093-1.414-.377-2.649-.766-3.556-.24-.56-.5-.948-.737-1.182C10.232 4.032 10.076 4 10 4zm3.971 5c-.089-1.546-.383-2.97-.837-4.118A6.004 6.004 0 0115.917 9h-1.946zm-2.003 2H8.032c.093 1.414.377 2.649.766 3.556.24.56.5.948.737 1.182.233.23.389.262.465.262.076 0 .232-.032.465-.262.238-.234.498-.623.737-1.182.389-.907.673-2.142.766-3.556zm1.166 4.118c.454-1.147.748-2.572.837-4.118h1.946a6.004 6.004 0 01-2.783 4.118zm-6.268 0C6.412 13.97 6.118 12.546 6.03 11H4.083a6.004 6.004 0 002.783 4.118z"
                                            clip-rule="evenodd"
                                        ></path>
                                    </svg>
                                    <h2 class="font-semibold uppercase hover:text-deep-sapphire-600">
                                        <span class="text-2xl font-bold mr-3">step 1</span> Search best online
                                        professional
                                    </h2>
                                    <p class="lg:w-1/2 text-sm w-full">
                                        Customers can access directly to dispatching tools, order history and
                                        personal address books, to enjoy a higher level of service.
                                    </p>
                                </div>
                                <div class="flex flex-col mb-2 sm:mb-10">
                                    <svg
                                        fill="currentColor"
                                        xmlns="http://www.w3.org/2000/svg"
                                        xml:space="preserve"
                                        viewBox="0 0 512 512"
                                        version="1.1"
                                        class="duration-500 ease-in-out h-10 hover:-translate-y-1 hover:scale-110 mb-4 text-5xl text-ko-blaze-orange-500 transform transition-all w-10"
                                    >
                        <path
                            d="m506.24 371.7-96-80c-4.768-4-11.424-4.8-17.024-2.208-5.632 2.656-9.216 8.288-9.216 14.496v48h-26.784c-22.208 0-42.496-11.264-54.272-30.08l-103.62-165.76c-23.52-37.664-64.096-60.16-108.54-60.16h-90.784v64h90.784c22.208 0 42.496 11.264 54.272 30.08l103.62 165.76c23.552 37.664 64.128 60.16 108.54 60.16h26.784v48c0 6.208 3.584 11.84 9.216 14.496 2.144 0.992 4.48 1.504 6.784 1.504 3.68 0 7.328-1.248 10.24-3.712l96-80c3.68-3.04 5.76-7.552 5.76-12.288s-2.08-9.248-5.76-12.288z"
                        ></path>
                                        <path
                                            d="m506.24 115.7-96-80c-4.768-3.968-11.424-4.8-17.024-2.176-5.632 2.592-9.216 8.256-9.216 14.464v48h-26.784c-44.448 0-85.024 22.496-108.54 60.16l-5.792 9.28 37.728 60.384 22.336-35.744c11.776-18.816 32.064-30.08 54.272-30.08h26.784v48c0 6.208 3.584 11.872 9.216 14.496 2.144 0.992 4.48 1.504 6.784 1.504 3.68 0 7.328-1.28 10.24-3.712l96-80c3.68-3.04 5.76-7.552 5.76-12.288s-2.08-9.248-5.76-12.288z"
                                        ></path>
                                        <path
                                            d="m167.39 286.16-22.304 35.744c-11.776 18.816-32.096 30.08-54.304 30.08h-90.784v64h90.784c44.416 0 84.992-22.496 108.54-60.16l5.792-9.28-37.728-60.384z"
                                        ></path>
                      </svg>

                                    <h2 class="font-semibold uppercase hover:text-deep-sapphire-600">
                                        <span class="text-2xl font-bold mr-3">step 2</span>get instant
                                        appointment
                                    </h2>
                                    <p class="lg:w-1/2 text-sm w-full">
                                        The API is made available as a set of both REST and SOAP based Web
                                        Services all built on open standards.
                                    </p>
                                </div>
                            </div>
                            <div class="md:flex">
                                <div class="flex flex-col sm:mb-10">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20"
                                        fill="currentColor"
                                        class="duration-500 ease-in-out h-10 hover:-translate-y-1 hover:scale-110 mb-4 text-5xl text-ko-blaze-orange-500 transform transition-all w-10"
                                    >
                                        <path
                                            fill-rule="evenodd"
                                            d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                                            clip-rule="evenodd"
                                        ></path>
                                    </svg>
                                    <h2 class="font-semibold uppercase hover:text-deep-sapphire-600">
                                        <span class="text-2xl font-bold mr-3">step 3</span>take support for
                                        health
                                    </h2>
                                    <p class="lg:w-1/2 text-sm w-full">
                                        Everyone can view the status of shipments through our website using
                                        their Reference or Tracking number.
                                    </p>
                                </div>
                                <div class="flex flex-col mb-2 sm:mb-10">
                                    <svg
                                        fill="currentColor"
                                        viewBox="0 0 512 512"
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="duration-500 ease-in-out h-10 hover:-translate-y-1 hover:scale-110 mb-4 text-5xl text-ko-blaze-orange-500 transform transition-all w-10"
                                    >
                                        <path
                                            d="m497 482h-467v-467c0-8.284-6.716-15-15-15s-15 6.716-15 15v482c0 8.284 6.716 15 15 15h482c8.284 0 15-6.716 15-15s-6.716-15-15-15z"
                                        ></path>
                                        <path
                                            d="m75 330c-8.284 0-15 6.716-15 15v92c0 8.284 6.716 15 15 15h61c8.284 0 15-6.716 15-15v-92c0-8.284-6.716-15-15-15zm46 92h-31v-62h31z"
                                        ></path>
                                        <path
                                            d="m196 270c-8.284 0-15 6.716-15 15v152c0 8.284 6.716 15 15 15h60c8.284 0 15-6.716 15-15v-152c0-8.284-6.716-15-15-15zm45 152h-30v-122h30z"
                                        ></path>
                                        <path
                                            d="m316 210c-8.284 0-15 6.716-15 15v212c0 8.284 6.716 15 15 15h60c8.284 0 15-6.716 15-15v-212c0-8.284-6.716-15-15-15zm45 212h-30v-182h30z"
                                        ></path>
                                        <path
                                            d="m497 150h-61c-8.284 0-15 6.716-15 15v272c0 8.284 6.716 15 15 15h61c8.284 0 15-6.716 15-15v-272c0-8.284-6.716-15-15-15zm-15 272h-31v-242h31z"
                                        ></path>
                                        <path
                                            d="m429.29 118.42c7.419 3.71 16.424 0.691 20.124-6.708l30-60c2.325-4.649 2.077-10.172-0.656-14.594-2.734-4.423-7.562-7.115-12.76-7.115h-75c-8.284 0-15 6.716-15 15s6.716 15 15 15h15.369l-338.47 181.78c-7.298 3.92-10.037 13.014-6.117 20.312 2.707 5.041 7.881 7.906 13.228 7.906 2.396 0 4.827-0.576 7.085-1.788l349.34-187.62-8.85 17.7c-3.705 7.41-0.702 16.419 6.708 20.125z"
                                        ></path>
                                    </svg>
                                    <h2
                                        class="bg-mosque-500 font-semibold uppercase hover:text-deep-sapphire-600"
                                    >
                                        <span class="text-2xl font-bold mr-3">step 4</span>leave your feedback
                                    </h2>
                                    <p class="lg:w-1/2 text-sm w-full">
                                        Customers can view and print a variety of reports through our Customer
                                        Web Portal.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- why choose section -->
<!-- our team section -->
<div class="bg-white">
    <div class="lg:px-8 max-w-7xl mx-auto px-4 py-16 sm:px-6">
        <div class="space-y-12">
            <div
                class="space-y-5 sm:space-y-4 md:max-w-xl lg:max-w-3xl xl:max-w-none text-center"
            >
                <h2 class="font-extrabold myblue-50 sm:text-4xl text-3xl tracking-tight">
                    Our Team
                </h2>
            </div>
            <ul
                role="list"
                class="space-y-12 sm:grid sm:grid-cols-2 sm:gap-x-6 sm:gap-y-12 sm:space-y-0 lg:grid-cols-3 lg:gap-x-8"
            >
                <li>
                    <div class="space-y-4">
                        <div class="aspect-w-3 aspect-h-2">
                            <img
                                class="object-cover shadow-lg rounded-lg"
                                src="https://img.freepik.com/free-photo/doctor-standing-with-folder-stethoscope_1291-16.jpg?size=626&amp;ext=jpg&amp;ga=GA1.2.431404942.1654811873"
                                alt=""
                            />
                        </div>

                        <div class="space-y-2">
                            <div class="text-lg leading-6 font-medium space-y-1">
                                <h3>Lindsay Walton</h3>
                                <p class="text-teal-700">Clinical Laboratory Technologist</p>
                            </div>
                            <ul role="list" class="flex space-x-5">
                                <li>
                                    <a href="#" class="text-gray-400 hover:text-gray-500">
                                        <span class="sr-only">Twitter</span>
                                        <svg
                                            class="w-5 h-5"
                                            fill="currentColor"
                                            viewBox="0 0 20 20"
                                            aria-hidden="true"
                                        >
                                            <path
                                                d="M6.29 18.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0020 3.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.073 4.073 0 01.8 7.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 010 16.407a11.616 11.616 0 006.29 1.84"
                                            ></path>
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="text-gray-400 hover:text-gray-500">
                                        <span class="sr-only">LinkedIn</span>
                                        <svg
                                            class="w-5 h-5"
                                            fill="currentColor"
                                            viewBox="0 0 20 20"
                                            aria-hidden="true"
                                        >
                                            <path
                                                fill-rule="evenodd"
                                                d="M16.338 16.338H13.67V12.16c0-.995-.017-2.277-1.387-2.277-1.39 0-1.601 1.086-1.601 2.207v4.248H8.014v-8.59h2.559v1.174h.037c.356-.675 1.227-1.387 2.526-1.387 2.703 0 3.203 1.778 3.203 4.092v4.711zM5.005 6.575a1.548 1.548 0 11-.003-3.096 1.548 1.548 0 01.003 3.096zm-1.337 9.763H6.34v-8.59H3.667v8.59zM17.668 1H2.328C1.595 1 1 1.581 1 2.298v15.403C1 18.418 1.595 19 2.328 19h15.34c.734 0 1.332-.582 1.332-1.299V2.298C19 1.581 18.402 1 17.668 1z"
                                                clip-rule="evenodd"
                                            ></path>
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>

                <li>
                    <div class="space-y-4">
                        <div class="aspect-w-3 aspect-h-2">
                            <img
                                class="object-cover shadow-lg rounded-lg"
                                src="https://img.freepik.com/free-photo/portrait-smiling-handsome-male-doctor-man_171337-5055.jpg?size=626&amp;ext=jpg&amp;ga=GA1.2.431404942.1654811873"
                                alt=""
                            />
                        </div>

                        <div class="space-y-2">
                            <div class="text-lg leading-6 font-medium space-y-1">
                                <h3>Courtney Henry</h3>
                                <p class="text-teal-700">Clinical Laboratory Technologist</p>
                            </div>
                            <ul role="list" class="flex space-x-5">
                                <li>
                                    <a href="#" class="text-gray-400 hover:text-gray-500">
                                        <span class="sr-only">Twitter</span>
                                        <svg
                                            class="w-5 h-5"
                                            fill="currentColor"
                                            viewBox="0 0 20 20"
                                            aria-hidden="true"
                                        >
                                            <path
                                                d="M6.29 18.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0020 3.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.073 4.073 0 01.8 7.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 010 16.407a11.616 11.616 0 006.29 1.84"
                                            ></path>
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="text-gray-400 hover:text-gray-500">
                                        <span class="sr-only">LinkedIn</span>
                                        <svg
                                            class="w-5 h-5"
                                            fill="currentColor"
                                            viewBox="0 0 20 20"
                                            aria-hidden="true"
                                        >
                                            <path
                                                fill-rule="evenodd"
                                                d="M16.338 16.338H13.67V12.16c0-.995-.017-2.277-1.387-2.277-1.39 0-1.601 1.086-1.601 2.207v4.248H8.014v-8.59h2.559v1.174h.037c.356-.675 1.227-1.387 2.526-1.387 2.703 0 3.203 1.778 3.203 4.092v4.711zM5.005 6.575a1.548 1.548 0 11-.003-3.096 1.548 1.548 0 01.003 3.096zm-1.337 9.763H6.34v-8.59H3.667v8.59zM17.668 1H2.328C1.595 1 1 1.581 1 2.298v15.403C1 18.418 1.595 19 2.328 19h15.34c.734 0 1.332-.582 1.332-1.299V2.298C19 1.581 18.402 1 17.668 1z"
                                                clip-rule="evenodd"
                                            ></path>
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>

                <li>
                    <div class="space-y-4">
                        <div class="aspect-w-3 aspect-h-2">
                            <img
                                class="object-cover shadow-lg rounded-lg"
                                src="https://img.freepik.com/free-photo/portrait-smiling-young-man-doctor-with-stethoscope-standing-with-arms-folded_171337-15538.jpg?size=626&amp;ext=jpg&amp;ga=GA1.2.431404942.1654811873"
                                alt=""
                            />
                        </div>

                        <div class="space-y-2">
                            <div class="text-lg leading-6 font-medium space-y-1">
                                <h3>Tom Cook</h3>
                                <p class="text-teal-700">Clinical Laboratory Technologist</p>
                            </div>
                            <ul role="list" class="flex space-x-5">
                                <li>
                                    <a href="#" class="text-gray-400 hover:text-gray-500">
                                        <span class="sr-only">Twitter</span>
                                        <svg
                                            class="w-5 h-5"
                                            fill="currentColor"
                                            viewBox="0 0 20 20"
                                            aria-hidden="true"
                                        >
                                            <path
                                                d="M6.29 18.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0020 3.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.073 4.073 0 01.8 7.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 010 16.407a11.616 11.616 0 006.29 1.84"
                                            ></path>
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="text-gray-400 hover:text-gray-500">
                                        <span class="sr-only">LinkedIn</span>
                                        <svg
                                            class="w-5 h-5"
                                            fill="currentColor"
                                            viewBox="0 0 20 20"
                                            aria-hidden="true"
                                        >
                                            <path
                                                fill-rule="evenodd"
                                                d="M16.338 16.338H13.67V12.16c0-.995-.017-2.277-1.387-2.277-1.39 0-1.601 1.086-1.601 2.207v4.248H8.014v-8.59h2.559v1.174h.037c.356-.675 1.227-1.387 2.526-1.387 2.703 0 3.203 1.778 3.203 4.092v4.711zM5.005 6.575a1.548 1.548 0 11-.003-3.096 1.548 1.548 0 01.003 3.096zm-1.337 9.763H6.34v-8.59H3.667v8.59zM17.668 1H2.328C1.595 1 1 1.581 1 2.298v15.403C1 18.418 1.595 19 2.328 19h15.34c.734 0 1.332-.582 1.332-1.299V2.298C19 1.581 18.402 1 17.668 1z"
                                                clip-rule="evenodd"
                                            ></path>
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- our team section -->
<!-- testimonial start -->
<section
    style="
        background-image: url(https://img.freepik.com/free-vector/abstract-medical-wallpaper-template-design_53876-61802.jpg?t=st=1655191849~exp=1655192449~hmac=547bfd059d637890b17bc0aa229ad2da7260f3c8e65c067504f6e0aee94ad5c2&amp;w=1060);
        background-size: cover;
        background-repeat: no-repeat;
      "
    class="flex h-96 items-center justify-center relative text-white"
>
    <div class="absolute bg-opacity-50 bg-teal-1000 h-full w-full"></div>
    <div class="max-w-7xl mx-auto md:grid md:grid-cols-2 md:px-6 lg:px-8 relative">
        <div
            class="lg:pr-16 md:border-indigo-900 md:border-r md:flex md:flex-col md:pl-0 md:pr-10 md:py-16 px-4 py-12 sm:px-6"
        >
            <blockquote class="mt-6 md:flex-grow md:flex md:flex-col">
                <div class="relative text-lg font-medium text-white md:flex-grow">
                    <svg
                        class="-translate-x-3 -translate-y-2 absolute bg-indigo-600 h-8 left-0 p-2 rounded-full text-white top-0 transform w-8"
                        fill="currentColor"
                        viewBox="0 0 32 32"
                        aria-hidden="true"
                    >
                        <path
                            d="M9.352 4C4.456 7.456 1 13.12 1 19.36c0 5.088 3.072 8.064 6.624 8.064 3.36 0 5.856-2.688 5.856-5.856 0-3.168-2.208-5.472-5.088-5.472-.576 0-1.344.096-1.536.192.48-3.264 3.552-7.104 6.624-9.024L9.352 4zm16.512 0c-4.8 3.456-8.256 9.12-8.256 15.36 0 5.088 3.072 8.064 6.624 8.064 3.264 0 5.856-2.688 5.856-5.856 0-3.168-2.304-5.472-5.184-5.472-.576 0-1.248.096-1.44.192.48-3.264 3.456-7.104 6.528-9.024L25.864 4z"
                        ></path>
                    </svg>
                    <p class="relative">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo expedita voluptas
                        culpa sapiente alias molestiae. Numquam corrupti in laborum sed rerum et
                        corporis.
                    </p>
                </div>
                <footer class="mt-8">
                    <div class="flex items-start">
                        <div class="flex-shrink-0 inline-flex rounded-full border-2 border-white">
                            <img
                                class="h-12 w-12 rounded-full"
                                src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=8&amp;w=1024&amp;h=1024&amp;q=80"
                                alt=""
                            />
                        </div>
                        <div class="ml-4">
                            <div class="text-base font-medium text-white">Judith Black</div>
                            <div class="font-medium text-base text-indigo-600">CEO, Tuple</div>
                        </div>
                    </div>
                </footer>
            </blockquote>
        </div>
        <div class="lg:pl-16 md:border-t-0 md:pl-10 md:pr-0 md:py-16 px-4 py-12 sm:px-6">
            <blockquote class="mt-6 md:flex-grow md:flex md:flex-col">
                <div class="relative text-lg font-medium text-white md:flex-grow">
                    <svg
                        class="-translate-x-3 -translate-y-2 absolute bg-indigo-600 h-8 left-0 p-2 rounded-full text-white top-0 transform w-8"
                        fill="currentColor"
                        viewBox="0 0 32 32"
                        aria-hidden="true"
                    >
                        <path
                            d="M9.352 4C4.456 7.456 1 13.12 1 19.36c0 5.088 3.072 8.064 6.624 8.064 3.36 0 5.856-2.688 5.856-5.856 0-3.168-2.208-5.472-5.088-5.472-.576 0-1.344.096-1.536.192.48-3.264 3.552-7.104 6.624-9.024L9.352 4zm16.512 0c-4.8 3.456-8.256 9.12-8.256 15.36 0 5.088 3.072 8.064 6.624 8.064 3.264 0 5.856-2.688 5.856-5.856 0-3.168-2.304-5.472-5.184-5.472-.576 0-1.248.096-1.44.192.48-3.264 3.456-7.104 6.528-9.024L25.864 4z"
                        ></path>
                    </svg>
                    <p class="relative">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo expedita voluptas
                        culpa sapiente alias molestiae. Numquam corrupti in laborum sed rerum et
                        corporis.
                    </p>
                </div>
                <footer class="mt-8">
                    <div class="flex items-start">
                        <div class="flex-shrink-0 inline-flex rounded-full border-2 border-white">
                            <img
                                class="h-12 w-12 rounded-full"
                                src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=8&amp;w=1024&amp;h=1024&amp;q=80"
                                alt=""
                            />
                        </div>
                        <div class="ml-4">
                            <div class="text-base font-medium text-white">Judith Black</div>
                            <div class="font-medium text-base text-indigo-600">CEO, Tuple</div>
                        </div>
                    </div>
                </footer>
            </blockquote>
        </div>
    </div>
</section>
<!-- testimonial end -->

<!-- blog section start -->
<div class="bg-gray-50 lg:px-8 pb-20 pt-16 px-4 relative sm:px-6">
    <div class="absolute inset-0">
        <div class=""></div>
    </div>
    <div class="relative max-w-7xl mx-auto">
        <div class="text-center">
            <h2 class="capitalize font-extrabold myblue-50 sm:text-4xl text-3xl tracking-tight">
                From the blog
            </h2>
            <p class="mt-3 max-w-2xl mx-auto text-xl text-gray-500 sm:mt-4">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsa libero labore natus
                atque, ducimus sed.
            </p>
        </div>
        <div class="mt-12 max-w-lg mx-auto grid gap-5 lg:grid-cols-3 lg:max-w-none">
            <div
                class="bg-white flex flex-col overflow-hidden p-6 border border-teal-100 shadow-lg"
            >
                <div class="flex-shrink-0">
                    <img
                        class="h-48 object-cover rounded-md w-full"
                        src="https://images.unsplash.com/photo-1496128858413-b36217c2ce36?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=1679&amp;q=80"
                        alt=""
                    />
                </div>
                <div class="flex flex-1 flex-col justify-between pt-5">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <a href="#">
                                <span class="sr-only">Roel Aufderehar</span>
                                <img
                                    class="h-10 w-10 rounded-full"
                                    src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80"
                                    alt=""
                                />
                            </a>
                        </div>
                        <div class="ml-3">
                            <p class="text-sm font-medium text-gray-900">
                                <a href="#" class="hover:underline"> Roel Aufderehar </a>
                            </p>
                            <div class="flex space-x-1 text-sm text-gray-500">
                                <time datetime="2020-03-16"> Mar 16, 2020 </time>
                                <span aria-hidden="true"> · </span>
                                <span> 6 min read </span>
                            </div>
                        </div>
                    </div>
                    <div class="flex-1">
                        <a href="#" class="block mb-3 mt-4">
                            <p class="font-semibold myblue-50 text-xl">Boost your conversion rate</p>
                            <p class="mt-3 text-base text-gray-500">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto
                                accusantium praesentium eius, ut atque fuga culpa, similique sequi cum eos
                                quis dolorum.
                            </p>
                        </a>
                        <a class="font-extrabold myblue-50">Read more</a>
                    </div>
                </div>
            </div>

            <div
                class="bg-white flex flex-col overflow-hidden p-6 border border-teal-100 shadow-lg"
            >
                <div class="flex-shrink-0">
                    <img
                        class="h-48 object-cover rounded-md w-full"
                        src="https://images.unsplash.com/photo-1496128858413-b36217c2ce36?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=1679&amp;q=80"
                        alt=""
                    />
                </div>
                <div class="flex flex-1 flex-col justify-between pt-5">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <a href="#">
                                <span class="sr-only">Roel Aufderehar</span>
                                <img
                                    class="h-10 w-10 rounded-full"
                                    src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80"
                                    alt=""
                                />
                            </a>
                        </div>
                        <div class="ml-3">
                            <p class="text-sm font-medium text-gray-900">
                                <a href="#" class="hover:underline"> Roel Aufderehar </a>
                            </p>
                            <div class="flex space-x-1 text-sm text-gray-500">
                                <time datetime="2020-03-16"> Mar 16, 2020 </time>
                                <span aria-hidden="true"> · </span>
                                <span> 6 min read </span>
                            </div>
                        </div>
                    </div>
                    <div class="flex-1">
                        <a href="#" class="block mb-3 mt-4">
                            <p class="font-semibold myblue-50 text-xl">Boost your conversion rate</p>
                            <p class="mt-3 text-base text-gray-500">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto
                                accusantium praesentium eius, ut atque fuga culpa, similique sequi cum eos
                                quis dolorum.
                            </p>
                        </a>
                        <a class="font-extrabold myblue-50">Read more</a>
                    </div>
                </div>
            </div>

            <div
                class="bg-white flex flex-col overflow-hidden p-6 border border-teal-100 shadow-lg"
            >
                <div class="flex-shrink-0">
                    <img
                        class="h-48 object-cover rounded-md w-full"
                        src="https://images.unsplash.com/photo-1496128858413-b36217c2ce36?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=1679&amp;q=80"
                        alt=""
                    />
                </div>
                <div class="flex flex-1 flex-col justify-between pt-5">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <a href="#">
                                <span class="sr-only">Roel Aufderehar</span>
                                <img
                                    class="h-10 w-10 rounded-full"
                                    src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80"
                                    alt=""
                                />
                            </a>
                        </div>
                        <div class="ml-3">
                            <p class="text-sm font-medium text-gray-900">
                                <a href="#" class="hover:underline"> Roel Aufderehar </a>
                            </p>
                            <div class="flex space-x-1 text-sm text-gray-500">
                                <time datetime="2020-03-16"> Mar 16, 2020 </time>
                                <span aria-hidden="true"> · </span>
                                <span> 6 min read </span>
                            </div>
                        </div>
                    </div>
                    <div class="flex-1">
                        <a href="#" class="block mb-3 mt-4">
                            <p class="font-semibold myblue-50 text-xl">Boost your conversion rate</p>
                            <p class="mt-3 text-base text-gray-500">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto
                                accusantium praesentium eius, ut atque fuga culpa, similique sequi cum eos
                                quis dolorum.
                            </p>
                        </a>
                        <a class="font-extrabold myblue-50">Read more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- blog section end -->

<!-- subscription start -->
<div class="bg-white">
    <div class="lg:flex lg:items-center lg:px-8 max-w-7xl mx-auto px-4 py-24 sm:px-6">
        <div class="lg:w-0 lg:flex-1">
            <h2
                class="capitalize font-extrabold sm:text-4xl text-3xl text-gray-900 text-teal-700"
            >
                Sign up for our newsletter
            </h2>
            <p class="mt-3 max-w-3xl text-lg text-gray-500">
                Anim aute id magna aliqua ad ad non deserunt sunt. Qui irure qui Lorem cupidatat
                commodo. Elit sunt amet fugiat veniam occaecat fugiat.
            </p>
        </div>
        <div class="mt-8 lg:mt-0 lg:ml-8">
            <form class="sm:flex">
                <label for="email-address" class="sr-only">Email address</label>
                <input
                    id="email-address"
                    name="email-address"
                    type="email"
                    autocomplete="email"
                    required=""
                    class="w-full px-5 py-3 border border-gray-300 shadow-sm placeholder-gray-400 focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs rounded-md"
                    placeholder="Enter your email"
                />
                <div class="mt-3 rounded-md shadow sm:mt-0 sm:ml-3 sm:flex-shrink-0">
                    <button
                        type="submit"
                        class="bg-teal-600 border border-transparent flex focus:outline-none focus:ring-indigo-500 focus:ring-offset-2 font-medium hover:bg-teal-700 items-center justify-center px-5 py-3 rounded-md text-base text-white w-full"
                    >
                        Notify me
                    </button>
                </div>
            </form>
            <p class="mt-3 text-sm text-gray-500">
                We care about the protection of your data. Read our
                <!-- space -->
                <a href="#" class="font-medium underline"> Privacy Policy. </a>
            </p>
        </div>
    </div>
</div>
<!-- subscription end -->

<!-- footer section -->
<footer class="text-gray-600 body-font bg-teal-600">
    <div
        class="container px-5 py-24 mx-auto flex md:items-center lg:items-start md:flex-row md:flex-nowrap flex-wrap flex-col"
    >
        <div class="w-64 flex-shrink-0 md:mx-0 mx-auto text-center md:text-left">
            <a
                class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900"
            >
                <img
                    class="h-20 w-36"
                    src="{{$klinic->image}}"
                    alt=""
                />

            </a>
            <p class="mt-2 text-sm text-white">
                A full clinic and diagnostic management system.
            </p>
        </div>
        <div
            class="flex-grow flex flex-wrap md:pl-20 -mb-10 md:mt-0 mt-10 md:text-left text-center"
        >
            <div class="lg:w-1/4 md:w-1/2 w-full px-4">
                <h2 class="title-font font-bold text-white tracking-widest text-md mb-3">
                    CATEGORIES
                </h2>
                <nav class="list-none mb-10">
                    <li>
                        <a class="text-white hover:text-red-300" href="#">First Link</a>
                    </li>
                    <li>
                        <a class="text-white hover:text-red-300" href="#">Second Link</a>
                    </li>
                    <li>
                        <a class="text-white hover:text-red-300" href="#">Third Link</a>
                    </li>
                    <li>
                        <a class="text-white hover:text-red-300" href="#">Fourth Link</a>
                    </li>
                </nav>
            </div>
            <div class="lg:w-1/4 md:w-1/2 w-full px-4">
                <h2 class="title-font font-bold text-white tracking-widest text-md mb-3">
                    CATEGORIES
                </h2>
                <nav class="list-none mb-10">
                    <li>
                        <a class="text-white hover:text-red-300" href="#">First Link</a>
                    </li>
                    <li>
                        <a class="text-white hover:text-red-300" href="#">Second Link</a>
                    </li>
                    <li>
                        <a class="text-white hover:text-red-300" href="#">Third Link</a>
                    </li>
                    <li>
                        <a class="text-white hover:text-red-300" href="#">Fourth Link</a>
                    </li>
                </nav>
            </div>
            <div class="lg:w-1/4 md:w-1/2 w-full px-4">
                <h2 class="title-font font-bold text-white tracking-widest text-md mb-3">
                    CATEGORIES
                </h2>
                <nav class="list-none mb-10">
                    <li>
                        <a class="text-white hover:text-red-300" href="#">First Link</a>
                    </li>
                    <li>
                        <a class="text-white hover:text-red-300" href="#">Second Link</a>
                    </li>
                    <li>
                        <a class="text-white hover:text-red-300" href="#">Third Link</a>
                    </li>
                    <li>
                        <a class="text-white hover:text-red-300" href="#">Fourth Link</a>
                    </li>
                </nav>
            </div>
            <div class="lg:w-1/4 md:w-1/2 w-full px-4">
                <h2 class="title-font font-bold text-white tracking-widest text-md mb-3">
                    CATEGORIES
                </h2>
                <nav class="list-none mb-10">
                    <li>
                        <a class="text-white hover:text-red-300" href="#">First Link</a>
                    </li>
                    <li>
                        <a class="text-white hover:text-red-300" href="#">Second Link</a>
                    </li>
                    <li>
                        <a class="text-white hover:text-red-300" href="#">Third Link</a>
                    </li>
                    <li>
                        <a class="text-white hover:text-red-300" href="#">Fourth Link</a>
                    </li>
                </nav>
            </div>
        </div>
    </div>
    <div class="bg-teal-1000">
        <div class="container mx-auto py-4 px-5 flex flex-wrap flex-col sm:flex-row">
            <p class="text-white text-sm text-center sm:text-left">
                © 2020 Kodeeo Limited -
                <a
                    href="https://www.kodeeo.com"
                    rel="noopener noreferrer"
                    class="text-gray-400 ml-1"
                    target="_blank"
                > www.kodeeo.com</a>

            </p>
            <span class="inline-flex sm:ml-auto sm:mt-0 mt-2 justify-center sm:justify-start">
            <a class="text-gray-200">
              <svg
                  fill="currentColor"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  class="w-5 h-5"
                  viewBox="0 0 24 24"
              >
                <path
                    d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"
                ></path>
              </svg>
            </a>
            <a class="ml-3 text-gray-200">
              <svg
                  fill="currentColor"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  class="w-5 h-5"
                  viewBox="0 0 24 24"
              >
                <path
                    d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"
                ></path>
              </svg>
            </a>
            <a class="ml-3 text-gray-200">
              <svg
                  fill="none"
                  stroke="currentColor"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  class="w-5 h-5"
                  viewBox="0 0 24 24"
              >
                <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
              </svg>
            </a>
            <a class="ml-3 text-gray-200">
              <svg
                  fill="currentColor"
                  stroke="currentColor"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="0"
                  class="w-5 h-5"
                  viewBox="0 0 24 24"
              >
                <path
                    stroke="none"
                    d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"
                ></path>
                <circle cx="4" cy="4" r="2" stroke="none"></circle>
              </svg>
            </a>
          </span>
        </div>
    </div>
</footer>
<!-- footer section -->
</body>
</html>
