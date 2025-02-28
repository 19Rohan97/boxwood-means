<main class="min-h-vh flex flex-col items-center py-14">
    <section class="w-full max-w-1440 mx-auto px-16 flex flex-row gap-x-[26px]">
        <div class="max-w-[590px] flex flex-row gap-x-2 items-center">
            <h3 class="text-2xl font-bold ">140 Brevard Ct, Charlotte, NC 28202</h3>
            <a class="text-primary uppercase text-base font-bold " href="">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_214_9500)">
                        <path
                            d="M3 17.25V21H6.75L17.815 9.935L14.065 6.185L3 17.25ZM20.705 7.045C21.095 6.655 21.095 6.02 20.705 5.63L18.37 3.295C17.98 2.905 17.345 2.905 16.955 3.295L15.125 5.125L18.875 8.875L20.705 7.045Z"
                            fill="#008998" />
                    </g>
                    <defs>
                        <clipPath id="clip0_214_9500">
                            <rect width="24" height="24" fill="white" />
                        </clipPath>
                    </defs>
                </svg>
            </a>
        </div>
        <div class="max-w-[673px]">

        </div>
    </section>

    <hr class="w-full max-w-[1380px] mx-auto px-16">

    <section class="w-full max-w-1440 mx-auto px-16 flex flex-row gap-x-[26px]">

        <div class="max-w-[590px]">
            <div class="mb-[32px] flex flex-row gap-x-6 items-center">
                <a class="text-boxwood-dark-teal uppercase text-sm font-semibold" href="#">Map View</a>
                <span class="text-black uppercase text-base font-semibold">|</span>
                <a class="text-primary uppercase text-sm font-semibold" href="#">List View</a>
            </div>
            <img src="<?php echo ASSETS_PATH; ?>/images/map.png" alt="Confirm Property Map">
        </div>

        <div>
            <div class="flex flex-row gap-x-2 items-center justify-between mb-6">
                <h3 class="text-2xl font-bold ">140 Brevard Ct, Charlotte, NC 28202</h3>
                <a class="text-primary uppercase text-base font-bold flex flex-row gap-x-2 items-center" href="">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_214_9500)">
                            <path
                                d="M3 17.25V21H6.75L17.815 9.935L14.065 6.185L3 17.25ZM20.705 7.045C21.095 6.655 21.095 6.02 20.705 5.63L18.37 3.295C17.98 2.905 17.345 2.905 16.955 3.295L15.125 5.125L18.875 8.875L20.705 7.045Z"
                                fill="#008998" />
                        </g>
                        <defs>
                            <clipPath id="clip0_214_9500">
                                <rect width="24" height="24" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>
                    <span>Edit Details</span>
                </a>
            </div>

            <div class="card p-4 bg-boxwood-dark-teal shadow-md rounded-[4px] border border-[#B0B0B0]">
                <div class="grid grid-cols-1 gap-x-4 gap-y-4 lg:grid-cols-6 xl:grid-cols-9">
                    <div class="sm:col-span-1 text-sm flex flex-col justify-center">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M9.995 0C4.47 0 0 4.475 0 10C0 15.525 4.47 20 9.995 20C15.52 20 20 15.525 20 10C20 4.475 15.52 0 9.995 0ZM14.23 16L10 13.45L5.77 16L6.89 11.19L3.16 7.955L8.08 7.535L10 3L11.92 7.535L16.84 7.955L13.11 11.19L14.23 16Z"
                                fill="#FF8A00" />
                        </svg>
                    </div>
                    <div class="sm:col-span-4 text-sm leading-6 font-bold flex flex-col text-white">
                        <span class="property_type">Property: Retail / Street Retail</span>
                        <span class="latest_sale">Latest sale: $310,000 (10/8/2002)</span>
                        <span class="condition_of_sale">Condition of sale</span>
                    </div>
                    <div class="sm:col-span-4 text-sm leading-6 font-bold flex flex-col text-white">
                        <span class="year_built">Year built: 1920</span>
                        <span class="building_sf">Building SF: 2,000</span>
                        <span class="distance_from_subject">Distance from subject: 2mi</span>
                    </div>
                </div>
            </div>


            <div class="flex flex-col gap-2 mt-20.5">
                <?php for ($i = 0; $i < 6; $i++) : ?>
                <?php include 'components/valuation-summary.php'; ?>
                <?php endfor; ?>
            </div>
        </div>

        </h4>

    </section>
</main>