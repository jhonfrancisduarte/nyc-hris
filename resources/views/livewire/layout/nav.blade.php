<div class="flex h-screen overflow-hidden bg-white">

    <div class="hidden md:flex md:flex-shrink-0">
      <div class="flex flex-col w-64">
        <div class="flex flex-col flex-grow pt-5 overflow-y-auto bg-white border-r">
          <div class="flex flex-col flex-shrink-0 px-4">
            <a class="text-lg font-semibold tracking-tighter text-black focus:outline-none focus:ring" href="/">
              <span class="inline-flex items-center gap-2">
                <img class="size-10 mx-auto" src="/images/hris-logo.png" alt="hris logo">
              
                NYC - HRIS
              </span>
            </a>
            <button class="hidden rounded-lg focus:outline-none focus:shadow-outline">
              <svg fill="currentColor" viewBox="0 0 20 20" class="size-6">
                <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
              </svg>
            </button>
          </div>
          <div class="flex flex-col flex-grow mt-5">
            <nav class="flex-1 px-2 bg-white">
              <ul>
                <li>
                  <div x-data="{ open: false }">
                    <button class="inline-flex items-center justify-between w-full px-4 py-2 mt-1 text-sm text-gray-500 transition duration-200 ease-in-out transform rounded-lg focus:shadow-outline hover:bg-gray-100 hover:scale-95 hover:text-blue-500 group" @click="open = ! open" fdprocessedid="x54g4">
                      <span class="inline-flex items-center text-base font-medium">
                        <ion-icon class="size-4 md hydrated" name="home-outline" role="img" aria-label="home outline"></ion-icon>
                        <span class="ml-4"> Home </span>
                      </span>
                      <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline size-5 ml-auto transition-transform duration-200 transform group-hover:text-accent rotate-0">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                      </svg>
                    </button>
                    <div class="p-2 pl-6 -px-px" x-show="open" @click.outside="open = false" style="display: none;">
                      <ul>
                        <li>
                          <a href="#_" title="#" class="inline-flex items-center w-full p-2 pl-3 text-sm font-medium text-gray-500 rounded-lg hover:text-blue-500 group hover:bg-gray-50">
                            <span class="inline-flex items-center w-full">
                              <ion-icon class="size-4 md hydrated" name="document-outline" role="img" aria-label="document outline"></ion-icon>
                              <span class="ml-4"> Guides </span>
                            </span>
                          </a>
                        </li>
                        <li>
                          <a href="#_" title="#" class="inline-flex items-center w-full p-2 pl-3 text-sm font-medium text-gray-500 rounded-lg hover:text-blue-500 group hover:bg-gray-50">
                            <span class="inline-flex items-center w-full">
                              <ion-icon class="size-4 md hydrated" name="mail-outline" role="img" aria-label="mail outline"></ion-icon>
                              <span class="ml-4"> Email </span>
                            </span>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </li>
                <li>
                  <div x-data="{ open: false }">
                    <button class="inline-flex items-center justify-between w-full px-4 py-2 mt-1 text-sm text-gray-500 transition duration-200 ease-in-out transform rounded-lg focus:shadow-outline hover:bg-gray-100 hover:scale-95 hover:text-blue-500 group" @click="open = ! open" fdprocessedid="hdqpd">
                      <span class="inline-flex items-center text-base font-medium">
                        <ion-icon class="size-4 md hydrated" name="pie-chart-outline" role="img" aria-label="pie chart outline"></ion-icon>
                        <span class="ml-4"> Dashboard </span>
                      </span>
                      <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline size-5 ml-auto transition-transform duration-200 transform group-hover:text-accent rotate-0">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                      </svg>
                    </button>
                    <div class="p-2 pl-6 -px-px" x-show="open" @click.outside="open = false" style="display: none;">
                      <ul>
                        <li>
                          <a href="#_" title="#" class="inline-flex items-center w-full p-2 pl-3 text-sm font-medium text-gray-500 rounded-lg hover:text-blue-500 group hover:bg-gray-50">
                            <span class="inline-flex items-center w-full">
                              <ion-icon class="size-4 md hydrated" name="flower-outline" role="img" aria-label="flower outline"></ion-icon>
                              <span class="ml-4"> Overview </span>
                              <span class="inline-flex ml-auto items-center rounded-full bg-blue-50 px-2.5 py-0.5 text-xs font-medium text-blue-500">
                                25
                              </span>
                            </span>
                          </a>
                        </li>
                        <li>
                          <a href="#_" title="#" class="inline-flex items-center w-full p-2 pl-3 text-sm font-medium text-gray-500 rounded-lg hover:text-blue-500 group hover:bg-gray-50">
                            <span class="inline-flex items-center w-full">
                              <ion-icon class="size-4 md hydrated" name="notifications-outline" role="img" aria-label="notifications outline"></ion-icon>
                              <span class="ml-4"> Notifications </span>
                            </span>
                          </a>
                        </li>
                        <li>
                          <a href="#_" title="#" class="inline-flex items-center w-full p-2 pl-3 text-sm font-medium text-gray-500 rounded-lg hover:text-blue-500 group hover:bg-gray-50">
                            <span class="inline-flex items-center w-full">
                              <ion-icon class="size-4 md hydrated" name="analytics-outline" role="img" aria-label="analytics outline"></ion-icon>
                              <span class="ml-4"> Analytics </span>
                            </span>
                          </a>
                        </li>
                        <li>
                          <a href="#_" title="#" class="inline-flex items-center w-full p-2 pl-3 text-sm font-medium text-gray-500 rounded-lg hover:text-blue-500 group hover:bg-gray-50">
                            <span class="inline-flex items-center w-full">
                              <ion-icon class="size-4 md hydrated" name="document-outline" role="img" aria-label="document outline"></ion-icon>
                              <span class="ml-4"> Saved reports </span>
                            </span>
                          </a>
                        </li>
                        <li>
                          <a href="#_" title="#" class="inline-flex items-center w-full p-2 pl-3 text-sm font-medium text-gray-500 rounded-lg hover:text-blue-500 group hover:bg-gray-50">
                            <span class="inline-flex items-center w-full">
                              <ion-icon class="size-4 md hydrated" name="calendar-outline" role="img" aria-label="calendar outline"></ion-icon>
                              <span class="ml-4"> Scheduled reports </span>
                            </span>
                          </a>
                        </li>
                        <li>
                          <a href="#_" title="#" class="inline-flex items-center w-full p-2 pl-3 text-sm font-medium text-gray-500 rounded-lg hover:text-blue-500 group hover:bg-gray-50">
                            <span class="inline-flex items-center w-full">
                              <ion-icon class="size-4 md hydrated" name="bookmark-outline" role="img" aria-label="bookmark outline"></ion-icon>
                              <span class="ml-4"> Saved reports </span>
                            </span>
                          </a>
                        </li>
                        <li>
                          <a href="#_" title="#" class="inline-flex items-center w-full p-2 pl-3 text-sm font-medium text-gray-500 rounded-lg hover:text-blue-500 group hover:bg-gray-50">
                            <span class="inline-flex items-center w-full">
                              <ion-icon class="size-4 md hydrated" name="settings-outline" role="img" aria-label="settings outline"></ion-icon>
                              <span class="ml-4"> Notifications </span>
                            </span>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </li>
                <li>
                  <div x-data="{ open: false }">
                    <button class="inline-flex items-center justify-between w-full px-4 py-2 mt-1 text-sm text-gray-500 transition duration-200 ease-in-out transform rounded-lg focus:shadow-outline hover:bg-gray-100 hover:scale-95 hover:text-blue-500 group" @click="open = ! open" fdprocessedid="umavxq">
                      <span class="inline-flex items-center text-base font-medium">
                        <ion-icon class="size-4 md hydrated" name="albums-outline" role="img" aria-label="albums outline"></ion-icon>
                        <span class="ml-4"> Projects </span>
                      </span>
                      <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline size-5 ml-auto transition-transform duration-200 transform group-hover:text-accent rotate-0">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                      </svg>
                    </button>
                    <div class="p-2 pl-6 -px-px" x-show="open" @click.outside="open = false" style="display: none;">
                      <ul>
                        <li>
                          <a href="#_" title="#" class="inline-flex items-center w-full p-2 pl-3 text-sm font-medium text-gray-500 rounded-lg hover:text-blue-500 group hover:bg-gray-50">
                            <span class="inline-flex items-center w-full">
                              <ion-icon class="size-4 md hydrated" name="flower-outline" role="img" aria-label="flower outline"></ion-icon>
                              <span class="ml-4"> Overview </span>
                              <span class="inline-flex ml-auto items-center rounded-full bg-blue-50 px-2.5 py-0.5 text-xs font-medium text-blue-500">
                                25
                              </span>
                            </span>
                          </a>
                        </li>
                        <li>
                          <a href="#_" title="#" class="inline-flex items-center w-full p-2 pl-3 text-sm font-medium text-gray-500 rounded-lg hover:text-blue-500 group hover:bg-gray-50">
                            <span class="inline-flex items-center w-full">
                              <ion-icon class="size-4 md hydrated" name="notifications-outline" role="img" aria-label="notifications outline"></ion-icon>
                              <span class="ml-4"> Notifications </span>
                            </span>
                          </a>
                        </li>
                        <li>
                          <a href="#_" title="#" class="inline-flex items-center w-full p-2 pl-3 text-sm font-medium text-gray-500 rounded-lg hover:text-blue-500 group hover:bg-gray-50">
                            <span class="inline-flex items-center w-full">
                              <ion-icon class="size-4 md hydrated" name="analytics-outline" role="img" aria-label="analytics outline"></ion-icon>
                              <span class="ml-4"> Analytics </span>
                            </span>
                          </a>
                        </li>
                        <li>
                          <a href="#_" title="#" class="inline-flex items-center w-full p-2 pl-3 text-sm font-medium text-gray-500 rounded-lg hover:text-blue-500 group hover:bg-gray-50">
                            <span class="inline-flex items-center w-full">
                              <ion-icon class="size-4 md hydrated" name="document-outline" role="img" aria-label="document outline"></ion-icon>
                              <span class="ml-4"> Saved reports </span>
                            </span>
                          </a>
                        </li>
                        <li>
                          <a href="#_" title="#" class="inline-flex items-center w-full p-2 pl-3 text-sm font-medium text-gray-500 rounded-lg hover:text-blue-500 group hover:bg-gray-50">
                            <span class="inline-flex items-center w-full">
                              <ion-icon class="size-4 md hydrated" name="calendar-outline" role="img" aria-label="calendar outline"></ion-icon>
                              <span class="ml-4"> Scheduled reports </span>
                            </span>
                          </a>
                        </li>
                        <li>
                          <a href="#_" title="#" class="inline-flex items-center w-full p-2 pl-3 text-sm font-medium text-gray-500 rounded-lg hover:text-blue-500 group hover:bg-gray-50">
                            <span class="inline-flex items-center w-full">
                              <ion-icon class="size-4 md hydrated" name="bookmark-outline" role="img" aria-label="bookmark outline"></ion-icon>
                              <span class="ml-4"> Saved reports </span>
                            </span>
                          </a>
                        </li>
                        <li>
                          <a href="#_" title="#" class="inline-flex items-center w-full p-2 pl-3 text-sm font-medium text-gray-500 rounded-lg hover:text-blue-500 group hover:bg-gray-50">
                            <span class="inline-flex items-center w-full">
                              <ion-icon class="size-4 md hydrated" name="settings-outline" role="img" aria-label="settings outline"></ion-icon>
                              <span class="ml-4"> Notifications </span>
                            </span>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </li>
                <li>
                  <div x-data="{ open: false }">
                    <button class="inline-flex items-center justify-between w-full px-4 py-2 mt-1 text-sm text-gray-500 transition duration-200 ease-in-out transform rounded-lg focus:shadow-outline hover:bg-gray-100 hover:scale-95 hover:text-blue-500 group" @click="open = ! open" fdprocessedid="01wtgd">
                      <span class="inline-flex items-center text-base font-medium">
                        <ion-icon class="size-4 md hydrated" name="add-outline" role="img" aria-label="add outline"></ion-icon>
                        <span class="ml-4"> Tasks </span>
                      </span>
                      <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline size-5 ml-auto transition-transform duration-200 transform group-hover:text-accent rotate-0">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                      </svg>
                    </button>
                    <div class="p-2 pl-6 -px-px" x-show="open" @click.outside="open = false" style="display: none;">
                      <ul>
                        <li>
                          <a href="#_" title="#" class="inline-flex items-center w-full p-2 pl-3 text-sm font-medium text-gray-500 rounded-lg hover:text-blue-500 group hover:bg-gray-50">
                            <span class="inline-flex items-center w-full">
                              <ion-icon class="size-4 md hydrated" name="flower-outline" role="img" aria-label="flower outline"></ion-icon>
                              <span class="ml-4"> Overview </span>
                              <span class="inline-flex ml-auto items-center rounded-full bg-blue-50 px-2.5 py-0.5 text-xs font-medium text-blue-500">
                                25
                              </span>
                            </span>
                          </a>
                        </li>
                        <li>
                          <a href="#_" title="#" class="inline-flex items-center w-full p-2 pl-3 text-sm font-medium text-gray-500 rounded-lg hover:text-blue-500 group hover:bg-gray-50">
                            <span class="inline-flex items-center w-full">
                              <ion-icon class="size-4 md hydrated" name="notifications-outline" role="img" aria-label="notifications outline"></ion-icon>
                              <span class="ml-4"> Notifications </span>
                            </span>
                          </a>
                        </li>
                        <li>
                          <a href="#_" title="#" class="inline-flex items-center w-full p-2 pl-3 text-sm font-medium text-gray-500 rounded-lg hover:text-blue-500 group hover:bg-gray-50">
                            <span class="inline-flex items-center w-full">
                              <ion-icon class="size-4 md hydrated" name="analytics-outline" role="img" aria-label="analytics outline"></ion-icon>
                              <span class="ml-4"> Analytics </span>
                            </span>
                          </a>
                        </li>
                        <li>
                          <a href="#_" title="#" class="inline-flex items-center w-full p-2 pl-3 text-sm font-medium text-gray-500 rounded-lg hover:text-blue-500 group hover:bg-gray-50">
                            <span class="inline-flex items-center w-full">
                              <ion-icon class="size-4 md hydrated" name="document-outline" role="img" aria-label="document outline"></ion-icon>
                              <span class="ml-4"> Saved reports </span>
                            </span>
                          </a>
                        </li>
                        <li>
                          <a href="#_" title="#" class="inline-flex items-center w-full p-2 pl-3 text-sm font-medium text-gray-500 rounded-lg hover:text-blue-500 group hover:bg-gray-50">
                            <span class="inline-flex items-center w-full">
                              <ion-icon class="size-4 md hydrated" name="calendar-outline" role="img" aria-label="calendar outline"></ion-icon>
                              <span class="ml-4"> Scheduled reports </span>
                            </span>
                          </a>
                        </li>
                        <li>
                          <a href="#_" title="#" class="inline-flex items-center w-full p-2 pl-3 text-sm font-medium text-gray-500 rounded-lg hover:text-blue-500 group hover:bg-gray-50">
                            <span class="inline-flex items-center w-full">
                              <ion-icon class="size-4 md hydrated" name="bookmark-outline" role="img" aria-label="bookmark outline"></ion-icon>
                              <span class="ml-4"> Saved reports </span>
                            </span>
                          </a>
                        </li>
                        <li>
                          <a href="#_" title="#" class="inline-flex items-center w-full p-2 pl-3 text-sm font-medium text-gray-500 rounded-lg hover:text-blue-500 group hover:bg-gray-50">
                            <span class="inline-flex items-center w-full">
                              <ion-icon class="size-4 md hydrated" name="settings-outline" role="img" aria-label="settings outline"></ion-icon>
                              <span class="ml-4"> Notifications </span>
                            </span>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </li>
                <li>
                  <div x-data="{ open: false }">
                    <button class="inline-flex items-center justify-between w-full px-4 py-2 mt-1 text-sm text-gray-500 transition duration-200 ease-in-out transform rounded-lg focus:shadow-outline hover:bg-gray-100 hover:scale-95 hover:text-blue-500 group" @click="open = ! open" fdprocessedid="8ijkp3">
                      <span class="inline-flex items-center text-base font-medium">
                        <ion-icon class="size-4 md hydrated" name="newspaper-outline" role="img" aria-label="newspaper outline"></ion-icon>
                        <span class="ml-4"> Reporting </span>
                      </span>
                      <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline size-5 ml-auto transition-transform duration-200 transform group-hover:text-accent rotate-0">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                      </svg>
                    </button>
                    <div class="p-2 pl-6 -px-px" x-show="open" @click.outside="open = false" style="display: none;">
                      <ul>
                        <li>
                          <a href="#_" title="#" class="inline-flex items-center w-full p-2 pl-3 text-sm font-medium text-gray-500 rounded-lg hover:text-blue-500 group hover:bg-gray-50">
                            <span class="inline-flex items-center w-full">
                              <ion-icon class="size-4 md hydrated" name="flower-outline" role="img" aria-label="flower outline"></ion-icon>
                              <span class="ml-4"> Overview </span>
                              <span class="inline-flex ml-auto items-center rounded-full bg-blue-50 px-2.5 py-0.5 text-xs font-medium text-blue-500">
                                25
                              </span>
                            </span>
                          </a>
                        </li>
                        <li>
                          <a href="#_" title="#" class="inline-flex items-center w-full p-2 pl-3 text-sm font-medium text-gray-500 rounded-lg hover:text-blue-500 group hover:bg-gray-50">
                            <span class="inline-flex items-center w-full">
                              <ion-icon class="size-4 md hydrated" name="notifications-outline" role="img" aria-label="notifications outline"></ion-icon>
                              <span class="ml-4"> Notifications </span>
                            </span>
                          </a>
                        </li>
                        <li>
                          <a href="#_" title="#" class="inline-flex items-center w-full p-2 pl-3 text-sm font-medium text-gray-500 rounded-lg hover:text-blue-500 group hover:bg-gray-50">
                            <span class="inline-flex items-center w-full">
                              <ion-icon class="size-4 md hydrated" name="analytics-outline" role="img" aria-label="analytics outline"></ion-icon>
                              <span class="ml-4"> Analytics </span>
                            </span>
                          </a>
                        </li>
                        <li>
                          <a href="#_" title="#" class="inline-flex items-center w-full p-2 pl-3 text-sm font-medium text-gray-500 rounded-lg hover:text-blue-500 group hover:bg-gray-50">
                            <span class="inline-flex items-center w-full">
                              <ion-icon class="size-4 md hydrated" name="document-outline" role="img" aria-label="document outline"></ion-icon>
                              <span class="ml-4"> Saved reports </span>
                            </span>
                          </a>
                        </li>
                        <li>
                          <a href="#_" title="#" class="inline-flex items-center w-full p-2 pl-3 text-sm font-medium text-gray-500 rounded-lg hover:text-blue-500 group hover:bg-gray-50">
                            <span class="inline-flex items-center w-full">
                              <ion-icon class="size-4 md hydrated" name="calendar-outline" role="img" aria-label="calendar outline"></ion-icon>
                              <span class="ml-4"> Scheduled reports </span>
                            </span>
                          </a>
                        </li>
                        <li>
                          <a href="#_" title="#" class="inline-flex items-center w-full p-2 pl-3 text-sm font-medium text-gray-500 rounded-lg hover:text-blue-500 group hover:bg-gray-50">
                            <span class="inline-flex items-center w-full">
                              <ion-icon class="size-4 md hydrated" name="bookmark-outline" role="img" aria-label="bookmark outline"></ion-icon>
                              <span class="ml-4"> Saved reports </span>
                            </span>
                          </a>
                        </li>
                        <li>
                          <a href="#_" title="#" class="inline-flex items-center w-full p-2 pl-3 text-sm font-medium text-gray-500 rounded-lg hover:text-blue-500 group hover:bg-gray-50">
                            <span class="inline-flex items-center w-full">
                              <ion-icon class="size-4 md hydrated" name="settings-outline" role="img" aria-label="settings outline"></ion-icon>
                              <span class="ml-4"> Notifications </span>
                            </span>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </li>
                <li>
                  <div x-data="{ open: false }">
                    <button class="inline-flex items-center justify-between w-full px-4 py-2 mt-1 text-sm text-gray-500 transition duration-200 ease-in-out transform rounded-lg focus:shadow-outline hover:bg-gray-100 hover:scale-95 hover:text-blue-500 group" @click="open = ! open" fdprocessedid="zamv7g">
                      <span class="inline-flex items-center text-base font-medium">
                        <ion-icon class="size-4 md hydrated" name="people-outline" role="img" aria-label="people outline"></ion-icon>
                        <span class="ml-4"> Users </span>
                      </span>
                      <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline size-5 ml-auto transition-transform duration-200 transform group-hover:text-accent rotate-0">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                      </svg>
                    </button>
                    <div class="p-2 pl-6 -px-px" x-show="open" @click.outside="open = false" style="display: none;">
                      <ul>
                        <li>
                          <a href="#_" title="#" class="inline-flex items-center w-full p-2 pl-3 text-sm font-medium text-gray-500 rounded-lg hover:text-blue-500 group hover:bg-gray-50">
                            <span class="inline-flex items-center w-full">
                              <ion-icon class="size-4 md hydrated" name="flower-outline" role="img" aria-label="flower outline"></ion-icon>
                              <span class="ml-4"> Overview </span>
                              <span class="inline-flex ml-auto items-center rounded-full bg-blue-50 px-2.5 py-0.5 text-xs font-medium text-blue-500">
                                25
                              </span>
                            </span>
                          </a>
                        </li>
                        <li>
                          <a href="#_" title="#" class="inline-flex items-center w-full p-2 pl-3 text-sm font-medium text-gray-500 rounded-lg hover:text-blue-500 group hover:bg-gray-50">
                            <span class="inline-flex items-center w-full">
                              <ion-icon class="size-4 md hydrated" name="notifications-outline" role="img" aria-label="notifications outline"></ion-icon>
                              <span class="ml-4"> Notifications </span>
                            </span>
                          </a>
                        </li>
                        <li>
                          <a href="#_" title="#" class="inline-flex items-center w-full p-2 pl-3 text-sm font-medium text-gray-500 rounded-lg hover:text-blue-500 group hover:bg-gray-50">
                            <span class="inline-flex items-center w-full">
                              <ion-icon class="size-4 md hydrated" name="analytics-outline" role="img" aria-label="analytics outline"></ion-icon>
                              <span class="ml-4"> Analytics </span>
                            </span>
                          </a>
                        </li>
                        <li>
                          <a href="#_" title="#" class="inline-flex items-center w-full p-2 pl-3 text-sm font-medium text-gray-500 rounded-lg hover:text-blue-500 group hover:bg-gray-50">
                            <span class="inline-flex items-center w-full">
                              <ion-icon class="size-4 md hydrated" name="document-outline" role="img" aria-label="document outline"></ion-icon>
                              <span class="ml-4"> Saved reports </span>
                            </span>
                          </a>
                        </li>
                        <li>
                          <a href="#_" title="#" class="inline-flex items-center w-full p-2 pl-3 text-sm font-medium text-gray-500 rounded-lg hover:text-blue-500 group hover:bg-gray-50">
                            <span class="inline-flex items-center w-full">
                              <ion-icon class="size-4 md hydrated" name="calendar-outline" role="img" aria-label="calendar outline"></ion-icon>
                              <span class="ml-4"> Scheduled reports </span>
                            </span>
                          </a>
                        </li>
                        <li>
                          <a href="#_" title="#" class="inline-flex items-center w-full p-2 pl-3 text-sm font-medium text-gray-500 rounded-lg hover:text-blue-500 group hover:bg-gray-50">
                            <span class="inline-flex items-center w-full">
                              <ion-icon class="size-4 md hydrated" name="bookmark-outline" role="img" aria-label="bookmark outline"></ion-icon>
                              <span class="ml-4"> Saved reports </span>
                            </span>
                          </a>
                        </li>
                        <li>
                          <a href="#_" title="#" class="inline-flex items-center w-full p-2 pl-3 text-sm font-medium text-gray-500 rounded-lg hover:text-blue-500 group hover:bg-gray-50">
                            <span class="inline-flex items-center w-full">
                              <ion-icon class="size-4 md hydrated" name="settings-outline" role="img" aria-label="settings outline"></ion-icon>
                              <span class="ml-4"> Notifications </span>
                            </span>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </li>
              </ul>
            </nav>

          </div>

          <div class="flex flex-shrink-0 p-4 px-4 bg-gray-50">
            <div @click.away="open = false" class="relative inline-flex items-center w-full" x-data="{ open: false }">
              <button @click="open = !open" class="inline-flex items-center justify-between w-full px-4 py-3 text-lg font-medium text-center text-white transition duration-500 ease-in-out transform rounded-xl hover:bg-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500" fdprocessedid="iflff">
                <span>
                  <span class="flex-shrink-0 block group">
                    <div class="flex items-center">
                      <div>
                        <img class="inline-block object-cover rounded-full h-9 w-9" src="https://images.unsplash.com/flagged/photo-1570612861542-284f4c12e75f?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=2070&amp;q=80" alt="">
                      </div>
                      <div class="ml-3 text-left">
                        <p class="text-sm font-medium text-gray-500 group-hover:text-blue-500">
                          Mike Vega
                        </p>
                        <p class="text-xs font-medium text-gray-500 group-hover:text-blue-500">
                          Pro user
                        </p>
                      </div>
                    </div>
                  </span>
                </span>
                <svg :class="{'rotate-180': open, 'rotate-0': !open}" xmlns="http://www.w3.org/2000/svg" class="inline size-5 ml-4 text-black transition-transform duration-200 transform rotate-0" viewBox="0 0 20 20" fill="currentColor">
                  <path fill-rule="evenodd" d="M14.707 12.707a1 1 0 01-1.414 0L10 9.414l-3.293 3.293a1 1 0 01-1.414-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 010 1.414z" clip-rule="evenodd"></path>
                </svg>
              </button>
              <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute bottom-0 z-50 w-full mx-auto mt-2 origin-bottom-right bg-white rounded-xl" style="display: none">
                <div class="px-2 py-2 bg-white rounded-lg shadow-lg ring-1 ring-black ring-opacity-5">
                  <ul>
                    <li>
                      <a class="inline-flex items-center w-full px-4 py-2 mt-1 text-sm text-gray-500 transition duration-200 ease-in-out transform rounded-lg focus:shadow-outline hover:bg-gray-100 hover:scale-95 hover:text-blue-500" href="#_">
                        <ion-icon class="size-4 md hydrated" name="body-outline" role="img" aria-label="body outline"></ion-icon>
                        <span class="ml-4"> Account </span>
                      </a>
                    </li>
                    <li>
                      <a class="inline-flex items-center w-full px-4 py-2 mt-1 text-sm text-gray-500 transition duration-200 ease-in-out transform rounded-lg focus:shadow-outline hover:bg-gray-100 hover:scale-95 hover:text-blue-500" href="#_">
                        <ion-icon class="size-4 md hydrated" name="person-circle-outline" role="img" aria-label="person circle outline"></ion-icon>
                        <span class="ml-4"> Profile </span>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="flex flex-col flex-1 w-0 overflow-hidden">
      <main class="relative flex-1 overflow-y-auto focus:outline-none">
        <div class="py-6">
          <div class="px-4 mx-auto 2xl:max-w-7xl sm:px-6 md:px-8">
            <!-- === Remove and replace with your own content... === -->
            <div class="py-4">
              <div class="h-screen border border-gray-200 border-dashed rounded-lg">

              </div>
            </div>
            <!-- === End ===  -->
          </div>
        </div>
      </main>
    </div>

</div>
