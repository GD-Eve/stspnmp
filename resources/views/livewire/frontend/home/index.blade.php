<div>
    <x-front.header />
    <main class="min-h-screen overflow-x-hidden">
        <div>
            <!--banner-->
            <section class="relative w-full">
                <div class="swiper bannerSwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="w-full h-[20%]">
                                <img class="aspect-[16/9] w-full h-full object-cover "
                                    src="{{ asset('assets/images/banner01.jpg') }}" />
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="w-full h-[20%]">
                                <img class="aspect-[16/9] w-full h-full object-cover"
                                    src="{{ asset('assets/images/banner02.jpg') }}" />
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="w-full h-[20%]">
                                <img class="aspect-[16/9] w-full h-full object-cover"
                                    src="{{ asset('assets/images/banner03.jpg') }}" />
                            </div>
                        </div>
                    </div>
                    {{-- <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div> --}}
                    <div class="bannerswiper-pagination absolute bottom-11 left-14 z-30 text-center"></div>
                </div>
            </section>
            <!--openinfo-->
            <section class="2xl:pt-24">
                <div class="2xl:max-w-[1600px] mx-auto">
                    <div class="flex 2xl:space-x-12 2xl:w-1/2 h-[360px]">
                        <div class="2xl:w-1/2 h-full">
                            <div class="2xl:px-16 w-full h-full">
                                <div class=" flex flex-col justify-center w-full h-full">
                                    <p class="font-bold ">開館中</p>
                                    <div>
                                        <p>星期一休館</p>
                                        <p>星期二至星期日09:00-17:00</p>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="2xl:w-1/2 h-full">
                            <div class=" border-black border-[6px]">
                                <div class="px-2 flex justify-between items-center text-center text-md">
                                    <x-front.arrow_left />
                                    <div class="text-xl font-black">2023/11月</div>
                                    <x-front.arrow_right />
                                </div>
                                <div class="pt-1 space-y-3  text-black/50 text-xs ">
                                    <ul class="flex justify-between items-center text-center text-black text-base">

                                        <li class="w-[16.3%] ">一</li>

                                        <li class="w-[16.3%] ">二</li>

                                        <li class="w-[16.3%] ">三</li>

                                        <li class="w-[16.3%] ">四</li>

                                        <li class="w-[16.3%] ">五</li>

                                        <li class="w-[16.3%] ">六</li>

                                        <li class="w-[16.3%] ">日</li>

                                    </ul>
                                    <div class="">
                                        <ul class="flex justify-between items-center text-center ">
                                            <li class="w-[16.3%] ">30</li>
                                            <li class="w-[16.3%] ">31</li>
                                            <li class="w-[16.3%] ">1</li>
                                            <li class="w-[16.3%] ">2</li>
                                            <li class="w-[16.3%] ">3</li>
                                            <li class="w-[16.3%] ">4</li>
                                            <li class="w-[16.3%] ">5</li>
                                        </ul>
                                    </div>
                                    <div class="">
                                        <ul class="flex justify-between items-center text-center">
                                            <li class="w-[16.3%] ">6</li>
                                            <li class="w-[16.3%] ">7</li>
                                            <li class="w-[16.3%] ">8</li>
                                            <li class="w-[16.3%] ">9</li>
                                            <li class="w-[16.3%] ">10</li>
                                            <li class="w-[16.3%] ">11</li>
                                            <li class="w-[16.3%] ">12</li>
                                        </ul>
                                    </div>
                                    <div class="">
                                        <ul class="flex justify-between items-center text-center">
                                            <li class="w-[16.3%] ">13</li>
                                            <li class="w-[16.3%] ">14</li>
                                            <li class="w-[16.3%] ">15</li>
                                            <li class="w-[16.3%] ">16</li>
                                            <li class="w-[16.3%] ">17</li>
                                            <li class="w-[16.3%] ">18</li>
                                            <li class="w-[16.3%] ">19</li>
                                        </ul>
                                    </div>
                                    <div class="">
                                        <ul class="flex justify-between items-center text-center text-black">
                                            <li class="w-[16.3%] ">20</li>
                                            <li class="w-[16.3%] ">21</li>
                                            <li class="w-[16.3%] ">22</li>
                                            <li class="w-[16.3%] ">23</li>
                                            <li class="w-[16.3%] ">24</li>
                                            <li class="w-[16.3%] ">25</li>
                                            <li class="w-[16.3%] ">26</li>
                                        </ul>
                                    </div>
                                    <div class="">
                                        <ul class="flex justify-between items-center text-center ">
                                            <li class="w-[16.3%] text-black">27</li>
                                            <li class="w-[16.3%] text-black">28</li>
                                            <li class="w-[16.3%] text-black">29</li>
                                            <li class="w-[16.3%] text-black">30</li>
                                            <li class="w-[16.3%] ">1</li>
                                            <li class="w-[16.3%] ">2</li>
                                            <li class="w-[16.3%] ">3</li>
                                        </ul>
                                    </div>
                                    <div class="">
                                        <ul class="flex justify-between items-center text-center">
                                            <li class="w-[16.3%] ">4</li>
                                            <li class="w-[16.3%] ">5</li>
                                            <li class="w-[16.3%] ">6</li>
                                            <li class="w-[16.3%] ">7</li>
                                            <li class="w-[16.3%] ">8</li>
                                            <li class="w-[16.3%] ">9</li>
                                            <li class="w-[16.3%] ">10</li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="2xl:w-1/2">

                </div>

            </section>
            <!--service area-->
            <section class="pt-5 md:pt-10 lg:pt-24 md:px-20 lg:px-0 ">
                <div class="relative">
                    <!--768以下隱藏-->
                    <div class="md:hidden pt-5 px-10 space-y-4">
                        <a href="/" class="block" title="展覽活動">
                            <div class="relative">
                                <img src="{{ asset('assets/images/homefeature01.jpg') }}" alt="展覽活動"
                                    class=" aspect-square w-full hfull object-cover">
                                <div class="w-[80px] h-[80px] absolute top-0 right-0 bg-[#ffea00]">
                                    <div
                                        class="p-2 flex flex-col justify-between text-center text-xl leading-8  font-bold">
                                        <p class="">展覽</p>
                                        <p class="">活動</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="/" class="block" title="交通指南">
                            <div class="relative">
                                <img src="{{ asset('assets/images/homefeature02.jpg') }}" alt="交通指南"
                                    class=" aspect-square w-full hfull object-cover">
                                <div class="w-[80px] h-[80px] absolute top-0 right-0 bg-[#ffea00]">
                                    <div
                                        class="p-2 flex flex-col justify-between text-center text-xl leading-8 font-bold">
                                        <p class="">交通</p>
                                        <p class="">指南</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="/" class="block" title="票價資訊">
                            <div class="relative">
                                <img src="{{ asset('assets/images/homefeature03.jpg') }}" alt="票價資訊"
                                    class=" aspect-square w-full hfull object-cover">
                                <div class="w-[80px] h-[80px] absolute top-0 right-0 bg-[#ffea00]">
                                    <div
                                        class="p-2 flex flex-col justify-between text-center text-xl leading-8 font-bold">
                                        <p class="">票價</p>
                                        <p class="">資訊</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="/" class="block" title="導覽服務">
                            <div class="relative">
                                <img src="{{ asset('assets/images/homefeature04.jpg') }}" alt="導覽服務"
                                    class=" aspect-square w-full hfull object-cover">
                                <div class="w-[80px] h-[80px] absolute top-0 right-0 bg-[#ffea00]">
                                    <div
                                        class="p-2 flex flex-col justify-between text-center text-xl leading-8 font-bold">
                                        <p class="">導覽</p>
                                        <p class="">服務</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!--728以上顯示-->
                    <!--將圖片分為兩個部分，並用寬設定比例才可以在rwd等比例縮放-->
                    <div class="px-5">
                        <div class=" max-w-[1600px] mx-auto">
                            <div class="flex space-x-5 xl:space-x-10">
                                <a href="/"
                                    class="w-[45%] group block overflow-hidden opacityanimation opacity-0">
                                    <div
                                        class="relative w-full h-full group-hover:scale-105 transition-all duration-500">
                                        <img src="{{ asset('assets/images/homefeature01.jpg') }}" alt=""
                                            class=" absolute top-0 left-0 w-full h-full object-cover">
                                    </div>
                                </a>
                                <div class=" w-[55%]">
                                    <div class="flex justify-between space-x-5 xl:space-x-10">
                                        <div class="w-1/2 space-y-5 flex flex-col justify-between xl:space-y-10 ">
                                            <a href="/"
                                                class=" overflow-hidden group block opacityanimation opacity-0">
                                                <div
                                                    class="relative group-hover:scale-105 transition-all duration-500">
                                                    <img src="{{ asset('assets/images/homefeature02.jpg') }}"
                                                        alt=""
                                                        class=" aspect-[420/320] w-full h-full object-cover">
                                                </div>
                                            </a>
                                            <a href="/"
                                                class=" overflow-hidden group block opacityanimation opacity-0">
                                                <div
                                                    class="relative group-hover:scale-105 transition-all duration-500">
                                                    <img src="{{ asset('assets/images/homefeature03.jpg') }}"
                                                        alt=""
                                                        class=" aspect-[420/320] w-full h-full object-cover">
                                                </div>
                                            </a>
                                        </div>
                                        <a href="/"
                                            class="w-1/2 group block overflow-hidden opacityanimation opacity-0">
                                            <div
                                                class="relative w-full h-full group-hover:scale-105 transition-all duration-500">
                                                <img src="{{ asset('assets/images/homefeature04.jpg') }}"
                                                    alt=""
                                                    class=" absolute top-0 left-0 w-full h-full object-cover">
                                            </div>
                                        </a>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </section>
    </main>
    <x-front.footer />
    <script>
        document.addEventListener('livewire:init', () => {
            // banner
            let bannerswiper = new Swiper(".bannerSwiper", {
                slidesPerView: 1,
                spaceBetween: 30,
                effect: "fade",
                navigation: {
                    nextEl: ".bannerswiper-button-next",
                    prevEl: ".bannerswiper-button-prev"
                },
                pagination: {
                    el: ".bannerswiper-pagination",
                    clickable: true
                },
                autoplay: {
                    delay: 3000
                },
                loop: true
            });

            let opacityAnimation = gsap.utils.toArray('.opacityanimation');
            let rightAnimation = gsap.utils.toArray('.rightanimation');
            gsap.registerPlugin(ScrollTrigger)
            ScrollTrigger.batch(opacityAnimation, {
                onEnter: batch => gsap.to(batch, {
                    opacity: 1,
                    stagger: 0.5,
                    duration: 0.7,
                    x: 0,
                    y: 0
                }),
                markers: true,
                start: "top 90%",
            });

            gsap.registerPlugin(ScrollTrigger)
            ScrollTrigger.batch(rightAnimation, {
                onEnter: batch => gsap.to(batch, {
                    opacity: 1,
                    stagger: 2,
                    duration: 2,
                    x: 10,
                    y: 20
                }),
                markers: true,
                start: "top 90%",
            });


        })
    </script>
</div>
