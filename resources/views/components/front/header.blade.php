<header class="px-3 lg:px-5 py-[5px] lg:py-[11px] bg-white z-30 shadow-lg overflow-x-hidden">
    <div class="sticky top-0 left-0 text-base ">
        <div class="flex justify-between items-center lg:items-end text-[#666] text-base ">
            <!--left-->
            <a href="/" title="國立台灣史前文化博物館南科考古館" class="block">
                <img src="https://stsp.nmp.gov.tw/img/front/logo-footer.png" alt=""
                    class="w-[51%] md:w-[61%] xl:w-[200px] object-cover">
            </a>
            <!--手機/平板menu-->
            <div class="xl:hidden font-bold">
                {{-- class="px-1" --}}
                <div>
                    <!--menu bar-->
                    <div class="flex space-x-2 text-md" x-data="{ open: false }" x-cloak>
                        <!--search-->
                        <section class="relative">
                            <div class="py-2 px-[6px] bg-[#ffea00] rounded-sm md:rounded-md  flex items-center justify-center w-[40px] lg:w-[60px] h-[40px] lg:h-[60px] cursor-auto "
                                @click="open = ! open">
                                <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960"
                                    width="24" style="stroke: black; stroke-width:25px;">
                                    <path
                                        d="M784-120 532-372q-30 24-69 38t-83 14q-109 0-184.5-75.5T120-580q0-109 75.5-184.5T380-840q109 0 184.5 75.5T640-580q0 44-14 83t-38 69l252 252-56 56ZM380-400q75 0 127.5-52.5T560-580q0-75-52.5-127.5T380-760q-75 0-127.5 52.5T200-580q0 75 52.5 127.5T380-400Z" />
                                </svg>
                            </div>
                            <!--關鍵字搜尋-->
                            <div class=" absolute top-full right-0 shadow-lg shadow-black/10" x-show="open">
                                <div class="p-4 bg-white ">
                                    <form action="" method="post"
                                        class="flex justify-brtween items-center space-x-[2px] ">
                                        <div class="">
                                            <input type="text" name="search" id="search" placeholder="關鍵字搜索"
                                                class="px-1 py-[3px]">
                                        </div>
                                        <div class="bg-[#ffea00]">
                                            <button type="submit" class="px-2 py-1 w-[60px] ">搜尋</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </section>
                        <!--hamberger-->
                        <section
                            class="menubtn py-2 px-[6px] bg-[#ffea00] rounded-sm md:rounded-md flex items-center justify-center w-[40px] lg:w-[60px] h-[40px] lg:h-[60px] z-30 ">
                            <div class="w-7 h-5 relative ">
                                <span class="w-7  h-[3px] bg-black  line01 absolute top-0 left-0"></span>
                                <span
                                    class="w-7 h-[3px] bg-black  line02 absolute top-1/2 -translate-y-1/2 left-0"></span>
                                <span class="w-7  h-[3px] bg-black  line03 absolute bottom-0 left-0"></span>
                            </div>
                        </section>
                    </div>
                </div>
                <!--下拉選單-->
                <div class="menu fixed top-0 left-0 w-full h-screen opacity-0 pointer-events-none ">
                    <div class=" absolute top-0 left-0 bg-black/50 w-full h-full"></div>
                    <div class="flex justify-end w-full h-full relative z-10">
                        <div class="menuwhite w-4/5 bg-white h-full  translate-x-[100%] overflow-y-auto">
                            <!--fixtop-->
                            <div class="px-6 pt-14 pb-4 sticky top-0 z-30 bg-white shadow-sm shadow-black/50">
                                <div class="space-y-3 text-base ">
                                    <!--icon-->
                                    <div class="flex items-center space-x-4">
                                        <a href="" target="_blank" class="block">
                                            <img src="https://stsp.nmp.gov.tw/img/front/youtube_icon.png" alt="Youtube"
                                                class=" aspect-square  h-full w-full object-cover">
                                        </a>
                                        <a href="" target="_blank" class="block">
                                            <img src="https://stsp.nmp.gov.tw/img/front/facebook_icon.png"
                                                alt="Facebook" class="aspect-square h-full w-full object-cover">
                                        </a>
                                        <a href="" target="_blank" class="block">
                                            <img src="https://stsp.nmp.gov.tw/img/front/instagram_icon2.png"
                                                alt="Instagrem" class="aspect-square h-full w-full object-cover">
                                        </a>
                                    </div>
                                    <!--language-->
                                    <div class="flex items-center space-x-2 ">
                                        <a href="" title="中文" class="inline-block group relative">
                                            <div class=" inline">中文</div>
                                            <div
                                                class="absolute w-full h-1 bg-yellow-300 bottom-0 left-0 -translate-y-[px]">
                                            </div>
                                        </a>
                                        <p>/</p>
                                        <a href="" title="英文「另開新視窗」" target="_blank">EN</a>
                                        <p>/</p>
                                        <a href="" title="台語「另開新視窗」" target="_blank" class="block">台語</a>
                                        <p>/</p>
                                        <a href="" title="客語「另開新視窗」" target="_blank" class="block">客語</a>
                                    </div>
                                    <!--lang-->
                                    <div class="flex items-center space-x-2">
                                        <p>字級:</p>
                                        <div class="flex items-center space-x-3">
                                            <a href="" title="中文" class="inline-block group relative">
                                                <div class=" inline">小</div>
                                                <div
                                                    class="absolute w-full h-1 bg-yellow-300 bottom-0 left-0 -translate-y-[2px]">
                                                </div>
                                            </a>
                                            <a href="" title="">中</a>
                                            <a href="" title="">大</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="divide-y">
                                <!--about-->
                                <div class="px-6 py-4 space-y-4 text-lg font-black text-black">
                                    <a href="/introduction" class="inline-block relative group" title="認識我們">
                                        <div>
                                            <div class="relative text-lg  ">認識我們</div>
                                            <div
                                                class="absolute w-0 h-1 bg-yellow-300 bottom-0 left-0 -translate-y-[110%] group-hover:w-full group-hover:transition-all">
                                            </div>
                                        </div>
                                    </a>
                                    <div class="px-5 text-black/80 space-y-4">
                                        <a href="" class=" block" title="簡介">簡介</a>
                                        <a href="" class=" block" title="建築特色">建築特色</a>
                                    </div>
                                </div>
                                <!--visit-->
                                <div class="px-6 py-4 space-y-4 text-lg font-black text-black">
                                    <a href="" class="inline-block relative group" title="參觀資訊">
                                        <div>
                                            <div class="relative text-lg">參觀資訊</div>
                                            <div
                                                class="absolute w-0 h-1 bg-yellow-300 bottom-0 left-0 -translate-y-[110%] group-hover:w-full group-hover:transition-all">
                                            </div>
                                        </div>
                                    </a>
                                    <div class="px-5 text-black/80 space-y-4">
                                        <a href="" class=" block" title="票價資訊">票價資訊</a>
                                        <a href="" class=" block" title="導覽服務">導覽服務</a>
                                        <a href="" class=" block" title="兒童廳預約">兒童廳預約</a>
                                        <a href="" class=" block" title="管區平面圖">管區平面圖</a>
                                        <a href="" class=" block" title="參觀須知">參觀須知</a>
                                        <a href="" class=" block" title="交通指南">交通指南</a>
                                        <a href="" class=" block" title="博物館賣店與餐飲">博物館賣店與餐飲</a>
                                    </div>
                                </div>
                                <!--event-->
                                <div class="px-6 py-4 space-y-4 text-lg font-black text-black">
                                    <a href="" class="inline-block relative group" title="展覽活動">
                                        <div>
                                            <div class="relative text-lg ">展覽活動</div>
                                            <div
                                                class="absolute w-0 h-1 bg-yellow-300 bottom-0 left-0 -translate-y-[110%] group-hover:w-full group-hover:transition-all">
                                            </div>
                                        </div>
                                    </a>
                                    <div class="px-5 space-y-4">
                                        <a href="" class="block text-black/80" title="常設展">常設展</a>
                                        <div class="px-5 space-y-4 text-base text-black/60">
                                            <a href="" class="block" title="第一展廳">第一展廳</a>
                                            <a href="" class="block" title="第二展廳">第二展廳</a>
                                            <a href="" class="block" title="第三展廳">第三展廳</a>
                                            <a href="" class="block" title="兒童廳">兒童廳</a>
                                            <a href="" class="block" title="博物館密室">博物館密室</a>
                                        </div>
                                    </div>
                                    <div class="px-5 space-y-4 ">
                                        <a href="" class="block text-black/80" title="特展">特展</a>
                                        <div class="px-5 space-y-4 text-base text-black/60">
                                            <a href="" class="block" title="當期特展">當期特展</a>
                                            <a href="" class="block" title="歷屆特展">歷屆特展</a>

                                        </div>
                                    </div>
                                    <div class="px-5 space-y-4 ">
                                        <a href="" class="block text-black/80" title="藝術共賞">藝術共賞</a>
                                        <div class="px-5 space-y-4 text-base text-black/60">
                                            <a href="" class="block" title="裝置藝術">裝置藝術</a>
                                            <a href="" class="block" title="歷屆特展">公共藝術</a>

                                        </div>
                                    </div>
                                </div>
                                <!--service-->
                                <div class="px-6 py-4 space-y-4 text-lg font-black text-black">
                                    <a href="" class="inline-block relative group" title="便民服務">
                                        <div>
                                            <div class="relative text-lg">便民服務</div>
                                            <div
                                                class="absolute w-0 h-1 bg-yellow-300 bottom-0 left-0 -translate-y-[110%] group-hover:w-full group-hover:transition-all">
                                            </div>
                                        </div>
                                    </a>
                                    <div class="px-5 text-black/80 space-y-4">
                                        <a href="" class=" block" title="常見問題">常見問題</a>
                                        <a href="" class=" block" title="失物招領">失物招領</a>
                                        <a href="" class=" block" title="志工制度">志工制度</a>
                                        <a href="" class=" block" title="實習申請">實習申請</a>
                                        <a href="" class=" block" title="場地租借">場地租借</a>
                                        <a href="" class=" block" title="攝影申請">攝影申請</a>
                                    </div>
                                </div>
                                <div class="px-6 py-4 space-y-4 text-lg font-black text-black">
                                    <a href="" class="inline-block relative group" title="最新消息">
                                        <div>
                                            <div class="relative text-lg">最新消息</div>
                                            <div
                                                class="absolute w-0 h-1 bg-yellow-300 bottom-0 left-0 -translate-y-[110%] group-hover:w-full group-hover:transition-all">
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="px-6 py-4 space-y-4 text-lg font-black text-black">
                                    <a href="" class="inline-block relative group" title="線上展覽">
                                        <div>
                                            <div class="relative text-lg">線上展覽</div>
                                            <div
                                                class="absolute w-0 h-1 bg-yellow-300 bottom-0 left-0 -translate-y-[110%] group-hover:w-full group-hover:transition-all">
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="px-6 py-4 space-y-4 text-lg font-black text-black">
                                    <a href="" class="inline-block relative group" title="服務信箱">
                                        <div>
                                            <div class="relative text-lg">服務信箱</div>
                                            <div
                                                class="absolute w-0 h-1 bg-yellow-300 bottom-0 left-0 -translate-y-[110%] group-hover:w-full group-hover:transition-all">
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="px-6 py-4 space-y-4 text-lg font-black text-black">
                                    <a href="" class="inline-block relative group" title="網站地圖">
                                        <div>
                                            <div class="relative text-lg">網站地圖</div>
                                            <div
                                                class="absolute w-0 h-1 bg-yellow-300 bottom-0 left-0 -translate-y-[110%] group-hover:w-full group-hover:transition-all">
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hidden xl:block">
                <!--mid-->
                <div class="flex justify-between space-x-10">
                    <div class="relative">
                        <div class=" group relative">
                            <a href="/introduction" class="block relative  group">
                                <div class="relative z-10">認識我們</div>
                                <div
                                    class="absolute w-0 h-1 bg-yellow-300 bottom-0 left-0  -translate-y-[110%] group-hover:w-full group-hover:transition-all">
                                </div>
                            </a>
                            <div
                                class="group-hover:border-[#ffea00] group-hover:transition-all group-hover:duration-500 group-hover:block pointer-events-none group-hover:pointer-events-auto">
                            </div>
                            <div
                                class="absolute top-full left-[20%] -translate-x-[20%] w-[200px] bg-white shadow-lg shadow-black/10 group-hover:opacity-100 opacity-0 pointer-events-none group-hover:pointer-events-auto">
                                <div class="pt-[5px]">
                                    <a href="/introduction" class="block px-1 py-1">
                                        <div class="  hover:bg-yellow-300 hover:transition-all hover:duration-500">
                                            <p class="px-4 py-1">簡介</p>
                                        </div>
                                    </a>
                                    <a href="/buildingStyle" class="block px-1 py-1">
                                        <div class="  hover:bg-yellow-300 hover:transition-all hover:duration-500">
                                            <p class="px-4 py-1">建築特色</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="relative">
                        <div class="group relative">
                            <a href="" class="block relative  group">
                                <div class="relative z-10">參觀資訊</div>
                                <div
                                    class="absolute w-0 h-1 bg-yellow-300 bottom-0 left-0  -translate-y-[110%] group-hover:w-full group-hover:transition-all">
                                </div>
                            </a>
                            <div
                                class="absolute top-full left-[20%] -translate-x-[20%] w-[200px] bg-white shadow-lg shadow-black/10 opacity-0 group-hover:opacity-100 pointer-events-none group-hover:pointer-events-auto">
                                <div class="pt-[5px]">
                                    <a href="" class="block px-1 py-1">
                                        <div class="  hover:bg-yellow-300 hover:transition-all hover:duration-500">
                                            <p class="px-4 py-1">票價資訊</p>
                                        </div>
                                    </a>
                                    <a href="" class="block px-1 py-1">
                                        <div class="  hover:bg-yellow-300 hover:transition-all hover:duration-500">
                                            <p class="px-4 py-1">導覽服務</p>
                                        </div>
                                    </a>
                                    <a href="" class="block px-1 py-1">
                                        <div class="  hover:bg-yellow-300 hover:transition-all hover:duration-500">
                                            <p class="px-4 py-1">兒童廳預約</p>
                                        </div>
                                    </a>
                                    <a href="" class="block px-1 py-1">
                                        <div class="  hover:bg-yellow-300 hover:transition-all hover:duration-500">
                                            <p class="px-4 py-1">管區平面圖</p>
                                        </div>
                                    </a>
                                    <a href="" class="block px-1 py-1">
                                        <div class="  hover:bg-yellow-300 hover:transition-all hover:duration-500">
                                            <p class="px-4 py-1">參觀須知</p>
                                        </div>
                                    </a>
                                    <a href="" class="block px-1 py-1">
                                        <div class="  hover:bg-yellow-300 hover:transition-all hover:duration-500">
                                            <p class="px-4 py-1">交通指南</p>
                                        </div>
                                    </a>
                                    <a href="" class="block px-1 py-1">
                                        <div class=" hover:bg-yellow-300 hover:transition-all hover:duration-500">
                                            <p class="px-4 py-1">博物館賣店與餐飲</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="relative ">
                        <div class="group relative">
                            <a href="" class="block relative  group">
                                <div class="relative z-10">展覽活動</div>
                                <div
                                    class="absolute w-0 h-1 bg-yellow-300 bottom-0 left-0  -translate-y-[110%] group-hover:w-full group-hover:transition-all">
                                </div>
                            </a>
                            <div
                                class=" absolute top-full left-[20%] -translate-x-[20%] w-[200px] bg-white shadow-lg h-max shadow-black/10 group-hover:opacity-100 opacity-0 pointer-events-none group-hover:pointer-events-auto">
                                <div>
                                    <div class="px-1 py-1">
                                        <div
                                            class="flex justify-between hover:bg-yellow-300 hover:transition-all hover:duration-500">
                                            <div class="block ">
                                                <a href="" class="  ">
                                                    <p class="px-4 py-1">常設展</p>
                                                </a>
                                            </div>
                                            <div class="menulistopenbtn">
                                                <img src="{{ asset('assets/images/arrowdown.svg') }}" alt=""
                                                    class=" ">
                                            </div>

                                        </div>
                                    </div>
                                    <div class="menulistshow h-0 overflow-hidden bg-white">
                                        <a href="" class="block px-1 py-1">
                                            <p
                                                class="inline-block px-4 py-1 after:border-b after:w-0 after:hover:w-full after:hover:border-black after:transition-all after:block">
                                                第一展廳
                                            </p>

                                        </a>
                                        <a href="" class="block px-1 py-1">
                                            <p
                                                class="inline-block px-4 py-1 after:border-b after:w-0 after:hover:w-full after:hover:border-black after:transition-all after:block">
                                                第二展廳
                                            </p>
                                        </a>
                                        <a href="" class="block px-1 py-1">
                                            <p
                                                class="inline-block px-4 py-1 after:border-b after:w-0 after:hover:w-full after:hover:border-black after:transition-all after:block">
                                                第三展廳
                                            </p>
                                        </a>
                                        <a href="" class="block px-1 py-1">
                                            <p
                                                class="inline-block px-4 py-1 after:border-b after:w-0 after:hover:w-full after:hover:border-black after:transition-all after:block">
                                                兒童廳
                                            </p>
                                        </a>
                                        <a href="" class="block px-1 py-1">
                                            <p
                                                class="inline-block px-4 py-1 after:border-b after:w-0 after:hover:w-full after:hover:border-black after:transition-all after:block">
                                                博物館密室
                                            </p>
                                        </a>
                                    </div>
                                </div>
                                <div>
                                    <div class="px-1 py-1">
                                        <div
                                            class="flex justify-between hover:bg-yellow-300 hover:transition-all hover:duration-500">
                                            <div class="block ">
                                                <div class="  ">
                                                    <p class="px-4 py-1">特展</p>
                                                </div>
                                            </div>
                                            <div class="menulistopenbtn">
                                                <img src="{{ asset('assets/images/arrowdown.svg') }}" alt="">
                                            </div>

                                        </div>
                                    </div>
                                    <div class="menulistshow h-0 overflow-hidden">
                                        <a href="" class="block px-1 py-1">
                                            <p
                                                class="inline-block px-4 py-1 after:border-b after:w-0 after:hover:w-full after:hover:border-black after:transition-all after:block">
                                                當期特展
                                            </p>
                                        </a>
                                        <a href="" class="block px-1 py-1">
                                            <p
                                                class="inline-block px-4 py-1 after:border-b after:w-0 after:hover:w-full after:hover:border-black after:transition-all after:block">
                                                歷屆特展
                                            </p>
                                        </a>

                                    </div>
                                </div>
                                <div>
                                    <div class="px-1 py-1">
                                        <div
                                            class="flex justify-between hover:bg-yellow-300 hover:transition-all hover:duration-500">
                                            <a class="block ">
                                                <div class="  ">
                                                    <p class="px-4 py-1">藝術共賞</p>
                                                </div>
                                            </a>
                                            <div class="menulistopenbtn">
                                                <img src="{{ asset('assets/images/arrowdown.svg') }}" alt="">
                                            </div>

                                        </div>
                                    </div>
                                    <div class="menulistshow h-0 overflow-hidden">
                                        <a href="" class="block px-1 py-1">
                                            <p
                                                class="inline-block px-4 py-1 after:border-b after:w-0 after:hover:w-full after:hover:border-black after:transition-all after:block">
                                                裝置藝術
                                            </p>
                                        </a>
                                        <a href="" class="block px-1 py-1">
                                            <p
                                                class="inline-block px-4 py-1 after:border-b after:w-0 after:hover:w-full after:hover:border-black after:transition-all after:block">
                                                公共藝術
                                            </p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="relative">
                        <div class=" group relative">
                            <a href="" class="block relative  group">
                                <div class="relative z-10">便民服務</div>
                                <div
                                    class="absolute w-0 h-1 bg-yellow-300 bottom-0 left-0  -translate-y-[110%] group-hover:w-full group-hover:transition-all">
                                </div>
                            </a>

                            <div
                                class="group-hover:border-[#ffea00] group-hover:transition-all group-hover:duration-500 group-hover:block pointer-events-none group-hover:pointer-events-auto">
                            </div>
                            <div
                                class="absolute top-full left-[20%] -translate-x-[20%] w-[200px] bg-white shadow-lg shadow-black/10 group-hover:opacity-100 opacity-0 pointer-events-none group-hover:pointer-events-auto">
                                <a href="" class="block px-1 py-1">
                                    <div class="  hover:bg-yellow-300 hover:transition-all hover:duration-500">
                                        <p class="px-4 py-1">常見問題</p>
                                    </div>
                                </a>
                                <a href="" class="block px-1 py-1">
                                    <div class="  hover:bg-yellow-300 hover:transition-all hover:duration-500">
                                        <p class="px-4 py-1">失物招領</p>
                                    </div>
                                </a>
                                <a href="" class="block px-1 py-1">
                                    <div class="  hover:bg-yellow-300 hover:transition-all hover:duration-500">
                                        <p class="px-4 py-1">志工制度</p>
                                    </div>
                                </a>
                                <a href="" class="block px-1 py-1">
                                    <div class="  hover:bg-yellow-300 hover:transition-all hover:duration-500">
                                        <p class="px-4 py-1">實習申請</p>
                                    </div>
                                </a>
                                <a href="" class="block px-1 py-1">
                                    <div class="  hover:bg-yellow-300 hover:transition-all hover:duration-500">
                                        <p class="px-4 py-1">場地租借</p>
                                    </div>
                                </a>
                                <a href="" class="block px-1 py-1">
                                    <div class="  hover:bg-yellow-300 hover:transition-all hover:duration-500">
                                        <p class="px-4 py-1">攝影申請</p>
                                    </div>
                                </a>

                            </div>
                        </div>
                    </div>
                    <a href="" class="block relative  group">
                        <div class="relative z-10">最新消息</div>
                        <div
                            class="absolute w-0 h-1 bg-yellow-300 bottom-0 left-0  -translate-y-[110%] group-hover:w-full group-hover:transition-all">
                        </div>
                    </a>
                    <a href="" class="block relative  group">
                        <div class="relative z-10">線上展覽</div>
                        <div
                            class="absolute w-0 h-1 bg-yellow-300 bottom-0 left-0  -translate-y-[110%] group-hover:w-full group-hover:transition-all">
                        </div>
                    </a>
                </div>
            </div>
            <div class="hidden xl:block">
                <!--right-->
                <div class="flex flex-col space-y-5 ">
                    <!--上-->
                    <div class="flex justify-between lg:space-x-5">
                        <div class="">:::</div>
                        <div class="flex space-x-3">
                            <div class="w-full h-full">
                                <a href="" class="block" title="Youtube「另開新視窗」">
                                    <img src="https://stsp.nmp.gov.tw/img/front/youtube_icon.png" alt="Youtube"
                                        class="w-full h-full  object-cover">
                                </a>
                            </div>
                            <div class="w-full h-full">
                                <a href="" class="block" title="Facebook「另開新視窗」">
                                    <img src="https://stsp.nmp.gov.tw/img/front/facebook_icon.png" alt="Facebook"
                                        class="w-full h-full  object-cover">
                                </a>
                            </div>
                            <div class="w-full h-full">
                                <a href="" class="block" title="Instagram「另開新視窗」">
                                    <img src="https://stsp.nmp.gov.tw/img/front/instagram_icon2.png" alt="Instagram"
                                        class="w-full h-full  object-cover">
                                </a>
                            </div>
                        </div>
                    </div>
                    <!--下-->
                    <div class="text-xs font-bold">
                        <div class=" flex justify-end items-center space-x-5">
                            <div class="flex space-x-2">
                                <p>語言:</p>
                                <div class="relative group ">
                                    <a href="" title="中文">中文</a>
                                    <div
                                        class="absolute top-full left-[20%] -translate-x-[20%] w-[100px] bg-white shadow-lg shadow-black/20 group-hover:opacity-100 opacity-0 pointer-events-none group-hover:pointer-events-auto">
                                        <div class="pt-[5px] space-y-1">
                                            <a href="" class="block px-1 py-1" title="英文「另開新視窗」">
                                                <div
                                                    class="  hover:bg-yellow-300 hover:transition-all hover:duration-500">
                                                    <p class="px-4 py-1">EN</p>
                                                </div>
                                            </a>
                                            <a href="" class="block px-1 py-1" title="台語「另開新視窗」">
                                                <div
                                                    class="  hover:bg-yellow-300 hover:transition-all hover:duration-500">
                                                    <p class="px-4 py-1">臺灣台語</p>
                                                </div>
                                            </a>
                                            <a href="" class="block px-1 py-1" title="客語「另開新視窗」">
                                                <div
                                                    class="  hover:bg-yellow-300 hover:transition-all hover:duration-500">
                                                    <p class="px-4 py-1">臺灣客語</p>
                                                </div>
                                            </a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex justify-center space-x-2">
                                <p>字級:</p>
                                <div class="relative group">
                                    <a href="">中</a>
                                    <div
                                        class="absolute top-full left-[50%] -translate-x-[70%] w-[200px] bg-white shadow-lg shadow-black/10 group-hover:opacity-100 opacity-0 pointer-events-none group-hover:pointer-events-auto">
                                        <div class="flex space-x-4">
                                            <div class=" hover:bg-yellow-300 hover:transition-all">
                                                <button class="block px-6 py-2 ">
                                                    小
                                                </button>
                                            </div>
                                            <div class=" hover:bg-yellow-300 hover:transition-all">
                                                <button class="block px-6 py-2 ">
                                                    中
                                                </button>
                                            </div>
                                            <div class=" hover:bg-yellow-300 hover:transition-all">
                                                <button class="block px-6 py-2 ">
                                                    大
                                                </button>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="" class="block"><img
                                    src="https://stsp.nmp.gov.tw/img/front/search_icon.png" alt=""
                                    class=""></a>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<script type="module">
    document.addEventListener('livewire:init', () => {
        gsap.registerPlugin(ScrollTrigger)
        let menuListOpenBtn = gsap.utils.toArray('.menulistopenbtn');
        let menuListShow = gsap.utils.toArray('.menulistshow');
        let menuBtnState = []
        menuListOpenBtn.forEach((btn, i) => {
            btn.addEventListener('click', function() {
                if (menuBtnState[i] !== true) {
                    gsap.to(menuListShow[i], {
                        duration: 0.3,
                        height: 'auto'
                    })
                } else {
                    gsap.to(menuListShow[i], {
                        duration: 0.3,
                        height: '0'
                    })
                }
                menuBtnState[i] = !menuBtnState[i]
            })
        });

        //按鈕動畫
        let menuBtn = document.querySelector('.menubtn');
        let open = false;
        let tl = gsap.timeline()
        tl.pause()
        tl.to('.menu', {
                opacity: 1,
                duration: 0.1,
                pointerEvents: 'auto',
            })
            .to('.menuwhite', {
                x: 0
            })
            .to('.line01', {
                rotation: 45,
                top: '50%',
                y: '-50%',
                duration: 0.5
            }, "<")
            .to('.line02', {
                opacity: 0,
                duration: 0.5
            }, '<')
            .to('.line03', {
                rotation: -45,
                bottom: '50%',
                y: '50%',
                duration: 0.5
            }, '<')
        menuBtn.addEventListener('click', function() {
            if (open) {
                tl.reverse()
            } else {
                tl.play()
            }
            open = !open
        });

    })
</script>
