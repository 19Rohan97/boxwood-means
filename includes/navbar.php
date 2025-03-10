<header class="bg-white">
    <nav class="mx-auto flex items-center justify-between py-6 px-4" aria-label="Global">
        <div class="flex lg:flex-1">
            <a href="#" class="-m-1.5 p-1.5">
                <span class="sr-only">Your Company</span>
                <img class="h-8 w-auto" src="<?php echo ASSETS_PATH; ?>/images/boxwood-logo.png" alt="Boxwood Means">
            </a>
        </div>
        <div class="flex lg:hidden">
            <button type="button"
                class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700 mobile-menu-btn">
                <span class="sr-only">Open main menu</span>
                <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                    aria-hidden="true" data-slot="icon">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
            </button>
        </div>
        <div class="hidden lg:flex lg:gap-x-12">
            <a href="#" class="text-sm/6 font-semibold text-gray-900 flex flex-row items-center">New Search</a>
            <a href="#" class="text-sm/6 font-semibold text-gray-900 flex flex-row items-center">Saved Reports</a>
            <a href="#" class="text-sm/6 font-semibold text-gray-900 flex flex-row items-center gap-x-5"><span>R.
                    Winslow</span>
                <img class="h-8 w-6" src="<?php echo ASSETS_PATH; ?>/images/user.svg" alt="username"></a>
        </div>
    </nav>
    <!-- Mobile menu, show/hide based on menu open state. -->
    <div class="lg:hidden mobile-menu hidden" role="dialog" aria-modal="true">
        <!-- Background backdrop, show/hide based on slide-over state. -->
        <div class="fixed inset-0 z-10"></div>
        <div
            class="fixed inset-y-0 right-0 z-10 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
            <div class="flex items-center justify-between">
                <a href="#" class="-m-1.5 p-1.5">
                    <span class="sr-only">Your Company</span>
                    <img class="h-8 w-auto" src="<?php echo ASSETS_PATH; ?>/images/boxwood-logo.png"
                        alt="Boxwood Means">
                </a>
                <button type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700 mobile-menu-close">
                    <span class="sr-only">Close menu</span>
                    <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                        aria-hidden="true" data-slot="icon">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="mt-6 flow-root">
                <div class="-my-6 divide-y divide-gray-500/10">
                    <div class="space-y-2 py-6">
                        <a href="#"
                            class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">New
                            Search</a>
                        <a href="#"
                            class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Saved
                            Reports</a>
                    </div>
                    <div class="py-6">
                        <a href="#"
                            class="-mx-3 block rounded-lg px-3 py-2.5 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">
                            <span>R. Winslow</span>
                            <img class="h-6 w-5 inline-block ml-2" src="<?php echo ASSETS_PATH; ?>/images/user.svg"
                                alt="username">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>