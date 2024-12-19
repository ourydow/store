<>
      <div>
        
              <div class="fixed inset-0 bg-gray-600 bg-opacity-75" />

            <div class="fixed inset-0 z-40 flex">
             
                
                    <div class="absolute top-0 right-0 -mr-12 pt-2">
                      <button
                        id="closeSB"
                        type="button"
                        class="ml-1 flex h-10 w-10 items-center justify-center rounded-full focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white"
                        onClick={() => setSidebarOpen(false)}
                      >
                        <span class="sr-only">Close sidebar</span>
                        A
                      </button>
                    </div>
                  <div class="flex flex-shrink-0 items-center px-4">
                    <div class="bg-white rounded-md">
                      <img
                        src="/logo.png"
                        width={250}
                        height={100}
                        alt="kalsadort"
                        priority={false}
                      />
                    </div>
                  </div>
                  <div class="mt-5 h-0 flex-1 overflow-y-auto">
                    <nav class="space-y-1 px-2">
                      {{-- nav --}}
                    </nav>
                  </div>
              <div class="w-14 flex-shrink-0" aria-hidden="true">
                {/* Dummy element to force sidebar to shrink to fit close icon */}
              </div>
            </div>
          </Dialog>

        {/* Static sidebar for desktop */}
        <div class="hidden md:fixed md:inset-y-0 md:flex md:w-64 md:flex-col print:hidden">
          {/* Sidebar component, swap this element with another sidebar if you like */}
          <div class="flex flex-grow flex-col overflow-y-auto bg-red-700 pt-5 print:hidden">
            <div class="flex flex-shrink-0 items-center px-4">
              <div class="bg-white min-w-full py-2 rounded-md flex justify-center">
                <img 
                src="/logo.png"
                alt="kalsadort"
                width={250}
                height={100}
                />
              </div>
            </div>
            <div class="mt-5 flex flex-1 flex-col">
              <nav class="flex-1 space-y-1 px-2 pb-4">
                {{-- nav --}}
              </nav>
            </div>
          </div>
        </div>
        <div class="flex flex-1 flex-col md:pl-64 print:bg-white">
          <div class="sticky top-0 z-10 flex h-16 flex-shrink-0 bg-white shadow print:hidden">
            <button
              id="openSB"
              type="button"
              class="border-r border-gray-200 px-4 text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-red-500 md:hidden"
              onClick={() => setSidebarOpen(true)}
            >
              <span class="sr-only">Open sidebar</span>
              Q
            </button>
            <div class="flex flex-1 justify-between px-4">
              <div class="flex flex-1">
                Btn
                {/* <form class="flex w-full md:ml-0" action="#" method="GET">
                  <label htmlFor="search-field" class="sr-only">
                    Search
                  </label>
                  <div class="relative w-full text-gray-400 focus-within:text-gray-600">
                    <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center">
                      Not
                    </div>
                    <input
                      id="search-field"
                      class="block h-full w-full border-transparent py-2 pl-8 pr-3 text-gray-900 placeholder-gray-500 focus:border-transparent focus:placeholder-gray-400 focus:outline-none focus:ring-0 sm:text-sm"
                      placeholder="Search"
                      type="search"
                      name="search"
                    />
                  </div>
                </form> */}
              </div>
              <div class="ml-4 flex items-center md:ml-6">
                {/* <button
                  type="button"
                  class="rounded-full bg-white p-1 text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2"
                >
                  <span class="sr-only">View notifications</span>
                  Q
                </button> */}

                
              </div>
            </div>
          </div>

          <main class="print:bg-white">
            <div class="py-6 px-4 print:bg-white">{children}</div>
          </main>
        </div>
      </div>
    </>