<nav
    class="
          flex flex-wrap
          items-center
          justify-between
          w-full
          py-4
          md:py-0
          px-4
          text-lg text-gray-700
          bg-white
        ">
    <div>
        <a href="#">
            <img src="<?php echo ASSETS_PATH; ?>/images/boxwood-logo.png" alt="Site Logo">
        </a>
    </div>

    <svg
        xmlns="http://www.w3.org/2000/svg"
        id="menu-button"
        class="h-6 w-6 cursor-pointer md:hidden block"
        fill="none"
        viewBox="0 0 24 24"
        stroke="currentColor">
        <path
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            d="M4 6h16M4 12h16M4 18h16" />
    </svg>

    <div class="hidden w-full md:flex md:items-center md:w-auto" id="menu">
        <ul
            class="
              pt-4
              text-base text-gray-700
              md:flex
              md:justify-between 
              md:pt-0">
            <li>
                <a class="md:p-4 py-2 block hover:text-purple-400" href="#">New Search</a>
            </li>
            <li>
                <a class="md:p-4 py-2 block hover:text-purple-400" href="#">Saved Reports</a>
            </li>
            <li>
                <a class="md:p-4 py-2 block hover:text-purple-400 flex gap-4" href="#">
                    R. Winslow 
                    <img src="<?php echo ASSETS_PATH; ?>/images/user.svg" alt="Site Logo">
                </a>
            </li>
        </ul>
    </div>
</nav>