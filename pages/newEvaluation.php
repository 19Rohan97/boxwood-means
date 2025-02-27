<main class="min-h-vh flex flex-col items-center py-14">
    <section class="max-w-650 mx-auto px-4 pb-[142px]">
        <h2 class="text-4xl text-center font-semibold text-dark">Commercial property values instantly</h2>
        <form class="px-5" method="POST">
            <div class="space-y-12">
                <div class="pb-8">

                    <div class="mt-7 grid grid-cols-1 gap-x-4 gap-y-4 sm:grid-cols-6">


                        <div class="sm:col-span-4">
                            <input id="email" name="email" type="email" autocomplete="email"
                                placeholder="Street address"
                                class="block w-full bg-white px-3 py-4 text-base text-black outline-1 -outline-offset-1 outline-light placeholder:text-black focus:outline-2 focus:-outline-offset-2 focus:outline-primary text-base leading-[21px]">
                        </div>
                        <div class="sm:col-span-2">
                            <input id="email" name="email" type="email" autocomplete="email" placeholder="ZIP"
                                class="block w-full bg-white px-3 py-4 text-base text-black outline-1 -outline-offset-1 outline-light placeholder:text-black focus:outline-2 focus:-outline-offset-2 focus:outline-primary text-base leading-[21px]">
                        </div>

                        <div class="sm:col-span-3">
                            <div class="grid grid-cols-1">
                                <select id="country" name="country" autocomplete="country-name"
                                    class="col-start-1 row-start-1 w-full appearance-none bg-white py-4 pr-8 pl-3 text-base text-black outline-1 -outline-offset-1 outline-light focus:outline-2 focus:-outline-offset-2 focus:outline-primary text-base leading-[21px]">
                                    <option value="">Select property type</option>
                                    <option>United States</option>
                                    <option>Canada</option>
                                    <option>Mexico</option>
                                </select>
                                <svg class="pointer-events-none col-start-1 row-start-1 mr-6 size-3 self-center justify-self-end text-gray-500"
                                    width="10" height="5" viewBox="0 0 10 5" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0 1.90735e-05L5 5.00002L10 1.90735e-05H0Z" fill="black" />
                                </svg>

                            </div>
                        </div>
                        <div class="sm:col-span-3">
                            <div class="grid grid-cols-1">
                                <select id="country" name="country" autocomplete="country-name"
                                    class="col-start-1 row-start-1 w-full appearance-none bg-white py-4 pr-8 pl-3 text-base text-black outline-1 -outline-offset-1 outline-light focus:outline-2 focus:-outline-offset-2 focus:outline-primary text-base leading-[21px]">
                                    <option value="">Select subtype</option>
                                    <option>United States</option>
                                    <option>Canada</option>
                                    <option>Mexico</option>
                                </select>
                                <svg class="pointer-events-none col-start-1 row-start-1 mr-6 size-3 self-center justify-self-end text-gray-500"
                                    width="10" height="5" viewBox="0 0 10 5" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0 1.90735e-05L5 5.00002L10 1.90735e-05H0Z" fill="black" />
                                </svg>
                            </div>
                        </div>


                    </div>
                </div>

            </div>

            <div class="flex items-center justify-center gap-x-6">
                <button type="submit" name="submit"
                    class="bg-primary px-5 py-3 rounded-xs text-base leading-[21px] tracking-[2px] font-semibold text-white shadow-xs hover:bg-accent focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 uppercase cursor-pointer transition duration-300 ease-in-out">search</button>
            </div>
        </form>
    </section>
    <section class="w-full max-w-650 mx-auto px-4">
        <h4 class="w-full text-base text-left text-dark border-b-1 border-light pb-4 mb-3">Recent searches
        </h4>

        <div class="flex flex-col gap-3">
            <?php for ($i = 0; $i < 2; $i++) : ?>
                <?php include 'components/recent-search.php'; ?>
            <?php endfor; ?>
        </div>
    </section>
</main>