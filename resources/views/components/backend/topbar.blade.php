<div
    class="sticky top-0 z-40 flex h-16 shrink-0 items-center gap-x-4 border-b border-gray-200 bg-white px-4 shadow-sm sm:gap-x-6 sm:px-6 lg:px-8">
    <button type="button" class="-m-2.5 p-2.5 text-gray-700 lg:hidden"><span class="sr-only">Open sidebar</span>
        <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
             aria-hidden="true" data-slot="icon">
            <path stroke-linecap="round" stroke-linejoin="round"
                  d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"/>
        </svg>
    </button>            <!-- Separator -->
    <div class="h-6 w-px bg-gray-900/10 lg:hidden" aria-hidden="true"></div>
    <div class="flex flex-1 gap-x-4 self-stretch lg:gap-x-6">
        <form class="grid flex-1 grid-cols-1" action="#" method="GET"><input type="search" name="search"
                                                                             aria-label="Search"
                                                                             class="col-start-1 row-start-1 block size-full bg-white pl-8 text-base text-gray-900 outline-none placeholder:text-gray-400 sm:text-sm/6"
                                                                             placeholder="Search">
            <svg class="pointer-events-none col-start-1 row-start-1 size-5 self-center text-gray-400"
                 viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                <path fill-rule="evenodd"
                      d="M9 3.5a5.5 5.5 0 1 0 0 11 5.5 5.5 0 0 0 0-11ZM2 9a7 7 0 1 1 12.452 4.391l3.328 3.329a.75.75 0 1 1-1.06 1.06l-3.329-3.328A7 7 0 0 1 2 9Z"
                      clip-rule="evenodd"/>
            </svg>
        </form>
        <div class="flex items-center gap-x-4 lg:gap-x-6">
            <button type="button" class="-m-2.5 p-2.5 text-gray-400 hover:text-gray-500"><span class="sr-only">View notifications</span>
                <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                     aria-hidden="true" data-slot="icon">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0"/>
                </svg>
            </button>                    <!-- Separator -->
            <div class="hidden lg:block lg:h-6 lg:w-px lg:bg-gray-900/10" aria-hidden="true"></div>
            <!-- Profile dropdown -->
            <div class="relative">
                <button type="button" class="-m-1.5 flex items-center p-1.5" id="user-menu-button"
                        aria-expanded="false" aria-haspopup="true"><span class="sr-only">Open user menu</span>
                    <img class="size-8 rounded-full bg-gray-50"
                         src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                         alt=""> <span class="hidden lg:flex lg:items-center">                <span
                            class="ml-4 text-sm/6 font-semibold text-gray-900"
                            aria-hidden="true">Tom Cook</span>                <svg
                            class="ml-2 size-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor"
                            aria-hidden="true" data-slot="icon">                  <path fill-rule="evenodd"
                                                                                        d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z"
                                                                                        clip-rule="evenodd"/>                </svg>              </span>
                </button>
                <!--                          Dropdown menu, show/hide based on menu state.                          Entering: "transition ease-out duration-100"                            From: "transform opacity-0 scale-95"                            To: "transform opacity-100 scale-100"                          Leaving: "transition ease-in duration-75"                            From: "transform opacity-100 scale-100"                            To: "transform opacity-0 scale-95"                        -->
                <div
                    class="absolute right-0 z-10 mt-2.5 w-32 origin-top-right rounded-md bg-white py-2 shadow-lg ring-1 ring-gray-900/5 focus:outline-none"
                    role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                    <!-- Active: "bg-gray-50 outline-none", Not Active: "" --> <a href="#"
                                                                                  class="block px-3 py-1 text-sm/6 text-gray-900"
                                                                                  role="menuitem" tabindex="-1"
                                                                                  id="user-menu-item-0">Your
                        profile</a> <a href="#" class="block px-3 py-1 text-sm/6 text-gray-900" role="menuitem"
                                       tabindex="-1" id="user-menu-item-1">Sign out</a></div>
            </div>
        </div>
    </div>
</div>
