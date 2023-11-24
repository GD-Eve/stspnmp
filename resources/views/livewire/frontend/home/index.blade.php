<div>
    <x-front.header />
    <main class="pb-10 ">
        <div class="">
            <!--banner-->
            <div class=" relative w-full overflow-hidden ">
                <div class="swiper bannerSwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="relative pt-[60%] lg:pt-[calc(100vh-95px)]">
                                <img class="absolute top-0 left-0 w-full h-full object-cover "
                                    src="{{ asset('assets/images/banner01.jpg') }}" />
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="relative pt-[60%] lg:pt-[calc(100vh-95px)]">
                                <img class="absolute top-0 left-0 w-full h-full object-cover"
                                    src="{{ asset('assets/images/banner02.jpg') }}" />
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="relative pt-[60%] lg:pt-[calc(100vh-95px)]">
                                <img class="absolute top-0 left-0 w-full h-full object-cover"
                                    src="{{ asset('assets/images/banner03.jpg') }}" />
                            </div>
                        </div>
                    </div>
                    {{-- <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div> --}}
                    <div class="bannerswiper-pagination absolute bottom-11 left-14 z-30 text-center"></div>
                </div>
            </div>
            <!--openinfo-->
            <div>
                <div class="pt-5 md:pt-10 w-full">
                    <div class="lg:flex lg:justify-center lg:space-x-5 xl:space-x-10 space-y-4 md:space-y-0 ">
                        <div
                            class="px-10 xl:px-0 md:flex md:justify-between md:space-x-5 xl:space-x-10 space-y-4 md:space-y-0 w-full lg:w-[50%] xl:max-w-[600px]">
                            <!--left-->
                            <div class="p-5  border-black border-[6px] md:aspect-square w-full">
                                <div class="relative space-y-10  xl:space-y-20">
                                    <div class="inline-block group relative">
                                        <div class="text-xl md:text-4xl font-black">開館中</div>
                                        <div
                                            class="absolute w-full h-1 bg-[#ffea00] bottom-0 left-0 -translate-y-[3px]">
                                        </div>
                                    </div>
                                    <div class="text-base space-y-5">
                                        <p>星期一休館</p>
                                        <p>星期二至星期日09:00-17:00</p>
                                    </div>
                                </div>
                            </div>
                            <!--right-->
                            <div class="p-3 space-y-2 border-black border-[6px]  w-full">
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
                        <!--text-->
                        <div class="pt-5 lg:pt-0 px-10 md:px-20 lg:px-0  lg:w-[45%] ">
                            <a href="/" class="relative group ">
                                <div class="  py-1 md:py-5 border-t-[6px] border-b-[6px] border-black ">
                                    <div class=" space-y-1 md:space-y-2 text-center lg:text-left ">
                                        <div class=" ">
                                            <div class="text-base xl:text-xl text-black/50">
                                                特展時間:2023.06.20~2024.01.01
                                            </div>
                                            <div class="text-sm xl:text-xl font-black">
                                                與土地共舞-自然與人共譜的台南特展
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div
                                    class=" absolute bottom-0 left-0 -z-10 w-full h-full translate-x-0 translate-y-0   group-hover:transition-all group-hover:-translate-x-3 group-hover:translate-y-3 group-hover:duration-500 group-hover:opacity-1 group-hover:bg-[#ffea00]">
                                </div>
                            </a>
                            <div class="relative">
                                <a href="" class=" ">
                                    <a class="relative inline-block group cursor-pointer">
                                        <div class="text-sm md:text-xl font-black  flex items-center space-x-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="50" viewBox="0 -940 960 960"
                                                width="50">
                                                <path d="M400-280v-400l200 200-200 200Z" />
                                            </svg>
                                            <div class="">更多特展資訊</div>
                                            {{-- <div
                                                class="absolute w-0 h-[1px] bg-black bottom-0 left-0 translate-b-[150%] group-hover:w-full group-hover:transition-all">
                                            </div> --}}
                                        </div>
                                    </a>
                                </a>
                                <a href="/">
                                    <div class="relative group">
                                        <div class="p-2 border-black border-[6px] md:w-1/2 ">
                                            <p class="text-sm md:text-xl font-black text-center">兒童廳預約</p>
                                        </div>
                                        <div
                                            class=" absolute bottom-0 left-0 -z-10 w-1/2 h-full translate-x-0 translate-y-0   group-hover:transition-all group-hover:-translate-x-3 group-hover:translate-y-3 group-hover:duration-500 group-hover:opacity-1 group-hover:bg-[#ffea00]">
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--service area-->
                <div class="pt-5 md:pt-10 lg:pt-24 md:px-20 lg:px-0 ">
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
                                    <div class="relative w-[42.5%] ">
                                        <div class="">
                                            <img src="{{asset('assets/images/homefeature01.jpg')}}" alt=""
                                                class=" w-full h-full object-cover absolute top-0 left-0">
                                        </div>
                                    </div>
                                    <div class=" w-[55%]">
                                        <div class="flex justify-between space-x-5 xl:space-x-10">
                                            <div class="w-1/2 space-y-5 flex flex-col justify-between xl:space-y-10 ">
                                                <div class="relative overflow-hidden">
                                                    <div class="">
                                                        <img src="{{asset('assets/images/homefeature02.jpg')}}" alt=""
                                                            class=" aspect-[420/320] w-full h-full object-cover">
                                                    </div>
                                                </div>
                                                <div class="relative overflow-hidden">
                                                    <img src="{{asset('assets/images/homefeature03.jpg')}}" alt=""
                                                        class=" aspect-[420/320] w-full h-full object-cover">
                                                </div>
                                            </div>
                                            <div class="w-1/2">
                                                <div class="relative w-full h-full">
                                                    <img src="{{asset('assets/images/homefeature04.jpg')}}" alt=""
                                                        class=" absolute top-0 left-0 w-full h-full object-cover">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
    
    
                                </div>
                            </div>
                        </div>

                        {{-- <div class="hidden md:block min-h-screen space-y-5 lg:space-y-0">
                            <div class="relative">
                                <div class="lg:absolute lg:top-0 lg:left-[5%] lg:w-[35%] 2xl:man-w-[600px]">
                                    <img class=" aspect-square w-full h-full object-cover "
                                        src="{{ asset('assets/images/homefeature01.jpg') }}" />
                                    <div
                                        class="w-[100px] h-[100px] xl:w-[150px] xl:h-[150px] absolute bottom-0 right-0 bg-[#ffea00]">
                                        <div
                                            class="p-4 xl:p-8 flex flex-col justify-center text-center space-y-2 xl:space-y-4 ">
                                            <p class="xl:text-4xl leading-8 tracking-widest font-bold">展覽</p>
                                            <p class="xl:text-4xl leading-8 tracking-widest font-bold">活動</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex justify-between space-x-5 lg:space-x-0">
                                <div class="flex flex-col justify-between space-y-5 lg:space-x-0 ">
                                    <div
                                        class="lg:absolute lg:top-0 lg:left-[44.5%] lg:w-[22%] lg:max-w-[320px] xl:max-w-[420px]">
                                        <img class=" aspect-[320/220] w-full h-full object-cover relative"
                                            src="{{ asset('assets/images/homefeature02.jpg') }}" />
                                        <div
                                            class="w-[80px] h-[80px] xl:w-[120px] xl:h-[120px] absolute top-0 left-0 bg-[#ffea00]">
                                            <div
                                                class="p-3 xl:p-4 flex flex-col justify-center text-center  xl:space-y-4 ">
                                                <p class="xl:text-4xl leading-8 tracking-widest font-bold">交通</p>
                                                <p class="xl:text-4xl leading-8 tracking-widest font-bold">指南</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div
                                        class="lg:absolute lg:top-[22.6%] xl:top-[32.5%] 2xl:top-[39.4%] lg:left-[44.5%] lg:w-[22%] lg:max-w-[320px] xl:max-w-[420px]">
                                        <img class=" aspect-[320/220] w-full h-full object-cover relative"
                                            src="{{ asset('assets/images/homefeature02.jpg') }}" />
                                        <div
                                            class="w-[80px] h-[80px] xl:w-[120px] xl:h-[120px] absolute top-0 right-0 bg-[#ffea00]">
                                            <div
                                                class="p-3 xl:p-4 flex flex-col justify-center text-center  xl:space-y-4 ">
                                                <p class="xl:text-4xl leading-8 tracking-widest font-bold">票價</p>
                                                <p class="xl:text-4xl leading-8 tracking-widest font-bold">資訊</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="lg:absolute lg:top-0 lg:right-[5%] lg:w-[23.4%] lg:xl:max-w-[580px]">
                                    <img class=" aspect-[320/480] w-full h-full object-cover relative"
                                        src="{{ asset('assets/images/homefeature04.jpg') }}" />
                                    <div
                                        class="w-[100px] h-[100px] xl:w-[150px] xl:h-[150px] absolute top-0 right-0 bg-[#ffea00]">
                                        <div
                                            class="p-4 xl:p-8 flex flex-col justify-center text-center space-y-2 xl:space-y-4 ">
                                            <p class="xl:text-4xl leading-8 tracking-widest font-bold">展覽</p>
                                            <p class="xl:text-4xl leading-8 tracking-widest font-bold">活動</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>

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


            let rightAnimation = gsap.utils.toArray('.rightanimation');
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