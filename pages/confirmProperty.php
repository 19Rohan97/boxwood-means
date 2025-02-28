<main class="min-h-vh flex flex-col items-center py-14">
    <section class="w-full max-w-1440 mx-auto px-16 flex flex-row gap-x-[40px] xl:gap-x-[60px]">

        <div>
            <h3 class="text-2xl font-bold mb-6">Select property to be valued:</h3>

            <div class="card p-6 bg-white shadow-md rounded-[4px] border border-[#B0B0B0]">
                <h3 class="text-base font-semibold mb-4">140 Brevard Ct, Charlotte, NC 28202</h3>
                <div class="grid grid-cols-1 gap-x-4 gap-y-4 lg:grid-cols-6 xl:grid-cols-8">
                    <div class="sm:col-span-3 text-sm flex flex-col text-[#444444]">
                        <span class="property_type">Property: Retail / Street Retail</span>
                        <span class="latest_sale">Latest sale: $310,000 (10/8/2002)</span>
                        <span class="condition_of_sale">Condition of sale</span>
                    </div>
                    <div class="sm:col-span-3 text-sm flex flex-col text-[#444444]">
                        <span class="year_built">Year built: 1920</span>
                        <span class="building_sf">Building SF: 2,000</span>
                        <span class="distance_from_subject">Distance from subject: 2mi</span>
                    </div>
                    <div class="sm:col-span-2 ">
                        <a href="index.php?page=valuationSummary"
                            class="rounded-[2px] bg-primary px-6 py-3 text-sm text-white hover:bg-accent focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary uppercase font-semibold tracking-[1px]">select</a>
                    </div>
                </div>
            </div>

            <p class="text-base font-semibold my-14">I don’t see my property here, <a class="text-primary" href="#">add
                    a new one</a>.</p>

            <div class="flex flex-col gap-2">
                <p class="text-base font-semibold mb-[2px]">Or select from these possible matches:</p>
                <?php for ($i = 0; $i < 6; $i++) : ?>
                <?php include 'components/company-property.php'; ?>
                <?php endfor; ?>
            </div>
        </div>
        <div class="pt-14">
            <img src="<?php echo ASSETS_PATH; ?>/images/map.png" alt="Confirm Property Map">
        </div>
        </h4>

    </section>
</main>