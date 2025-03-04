<div class="card rounded-[4px] border border-2 border-b-0 border-[#E5E5E5] bg-white shadow-md transition">
    <div class="flex flex-row p-4 gap-x-4 gap-y-4 justify-between border-b-1 border-b-[#E5E5E5]">
        <div class="flex flex-row flex-wrap items-center gap-y-3 gap-x-3 mb-4">
            <span
                class="rounded-full p-1.5 bg-white font-bold text-[12px] border border-[#C4C4C4] w-[24px] h-[24px] flex flex-row items-center justify-center"><?php echo $i + 1; ?></span>
            <h3 class="text-base font-semibold text-primary">140 Brevard Ct, Charlotte, NC
                28202</h3>
            <div class="flex flex-row items-center gap-x-2">
                <span class="w-2 h-2 block bg-[#24EDAF] rounded-full"></span>
                <span class="text-[10px] font-bold">75% MATCH</span>
            </div>
        </div>
        <div>
            <span class="text-xs text-boxwood-dark-teal font-medium leading-[21px] uppercase">Custom comp</span>
        </div>
    </div>
    <div class="grid grid-cols-1 p-4 gap-x-4 gap-y-4 lg:grid-cols-10">
        <div class="sm:col-span-3 text-sm flex flex-col justify-between text-[#444444] leading-[21px]">
            <span class="property_type">Property: Retail / Street Retail</span>
            <span class="latest_sale">Latest sale: $310,000 (10/8/2002)</span>
            <span class="condition_of_sale">Condition of sale: Arm’s length</span>
        </div>
        <div class="sm:col-span-3 text-sm flex flex-col justify-between text-[#444444] leading-[21px]">
            <span class="year_built">Year built: 1920</span>
            <span class="building_sf">Building SF: 2,000</span>
            <span class="distance_from_subject">Distance from subject: 2mi</span>
        </div>
        <div class="sm:col-span-2 flex flex-col items-center justify-center">
            <span class="text-xs text-boxwood-dark-teal font-medium leading-[21px] mb-1">Adjust weighting</span>
            <input type="text" value="55%" class="border block w-full max-w-[60px] p-2 text-center">
        </div>
        <div class="sm:col-span-2 flex flex-col justify-center gap-4">
            <a class="text-primary text-xs font-semibold underline flex flex-row gap-x-2 items-center" href="">
                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
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
            <a class="text-primary text-xs font-semibold underline flex flex-row gap-x-2 items-center" href="">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_214_9368)">
                        <path
                            d="M4.66683 7.33334V8.66668H11.3335V7.33334H4.66683ZM8.00016 1.33334C4.31683 1.33334 1.3335 4.31668 1.3335 8.00001C1.3335 11.6833 4.31683 14.6667 8.00016 14.6667C11.6835 14.6667 14.6668 11.6833 14.6668 8.00001C14.6668 4.31668 11.6835 1.33334 8.00016 1.33334ZM8.00016 13.3333C5.06016 13.3333 2.66683 10.94 2.66683 8.00001C2.66683 5.06001 5.06016 2.66668 8.00016 2.66668C10.9402 2.66668 13.3335 5.06001 13.3335 8.00001C13.3335 10.94 10.9402 13.3333 8.00016 13.3333Z"
                            fill="#008998" />
                    </g>
                    <defs>
                        <clipPath id="clip0_214_9368">
                            <rect width="16" height="16" fill="white" />
                        </clipPath>
                    </defs>
                </svg>

                <span>Remove</span>
            </a>
        </div>
    </div>
</div>