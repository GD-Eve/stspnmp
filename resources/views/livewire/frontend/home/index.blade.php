<div>
    <x-front.header />
    <main class="pb-10 lg:pb-60">
        <!--banner-->
        <div class=" relative w-full overflow-hidden">
            <div class="swiper bannerSwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="relative pt-[60%] lg:pt-[calc(100vh-95px)]">
                            <img class="absolute top-0 left-0 w-full h-full object-cover "
                                src="{{asset('assets/images/banner01.jpg')}}" />
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="relative pt-[60%] lg:pt-[calc(100vh-95px)]">
                            <img class="absolute top-0 left-0 w-full h-full object-cover"
                                src="{{asset('assets/images/banner02.jpg')}}" />
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="relative pt-[60%] lg:pt-[calc(100vh-95px)]">
                            <img class="absolute top-0 left-0 w-full h-full object-cover"
                                src="{{asset('assets/images/banner03.jpg')}}" />
                        </div>
                    </div>
                </div>
                {{-- <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div> --}}
                <div class="bannerswiper-pagination absolute bottom-11 left-14 z-30 text-center"></div>
            </div>
        </div>
        <div class="px-[62.5px] md:px-0  xl:px-60 py-5 md:py-0 xl:py-20">
            {{-- content01 --}}
            <div class="xl:flex xl:justify-between space-y-5 md:space-y-0">
                {{-- left --}}
                <div class=" border-black border-[6px] w-full">
                    <div class="p-5 space-y-7 md:space-y-0">
                        <div class="inline-block group relative">
                            <div class="text-xl md:text-4xl font-black">開館中</div>
                            <div class="absolute w-full h-1 bg-[#ffea00] bottom-0 left-0 -translate-y-[3px]">
                            </div>
                        </div>
                        <div class="text-base leading-8 text-[#666]">
                            <p>星期一休館</p>
                            <p>星期二至星期日09:00-17:00</p>
                        </div>
                    </div>
                </div>
                {{-- mid --}}
                <div class="border-black border-[6px] w-full h-[260px]">
                    <div class="pt-5 md:pt-0 px-[10px] md:px-0 py-[15px] md:py-0 w-full">
                        <div class="px-2 flex justify-between items-center text-center text-base">
                            <x-front.arrow_left />
                            <div class="text-xl font-black">2023/11月</div>
                            <x-front.arrow_right />
                        </div>
                       <div class="px-2 ">
                            <div class=" text-black/50 text-base w-full">
                                <div class="grid grid-cols-7 gap-1 justify-items-stretch text-center">
    
                                    <div class="w-[16.3%] ">一</div>
    
                                    <div class="w-[16.3%] ">二</div>
    
                                    <div class="w-[16.3%] ">三</div>
    
                                    <div class="w-[16.3%] ">四</div>
    
                                    <div class="w-[16.3%] ">五</div>
    
                                    <div class="w-[16.3%] ">六</div>
    
                                    <div class="w-[16.3%] ">日</div>
    
                                </div>
                                <div class=" grid grid-cols-7 gap-1 justify-items-stretch text-center">
                                    <div class="w-[16.3%] ">30</div>
                                    <div class="w-[16.3%] ">31</div>
                                    <div class="w-[16.3%] ">1</div>
                                    <div class="w-[16.3%] ">2</div>
                                    <div class="w-[16.3%] ">3</div>
                                    <div class="w-[16.3%] ">4</div>
                                    <div class="w-[16.3%] ">5</div>
                                    <div class="w-[16.3%] ">6</div>
                                    <div class="w-[16.3%] ">7</div>
                                    <div class="w-[16.3%] ">8</div>
                                    <div class="w-[16.3%] ">9</div>
                                    <div class="w-[16.3%] ">10</div>
                                    <div class="w-[16.3%] ">11</div>
                                    <div class="w-[16.3%] ">12</div>
                                    <div class="w-[16.3%] ">13</div>
                                    <div class="w-[16.3%] ">14</div>
                                    <div class="w-[16.3%] ">15</div>
                                    <div class="w-[16.3%] ">16</div>
                                    <div class="w-[16.3%] ">17</div>
                                    <div class="w-[16.3%] ">18</div>
                                    <div class="w-[16.3%] ">19</div>
                                    <div class="w-[16.3%] ">20</div>
                                    <div class="w-[16.3%] ">21</div>
                                    <div class="w-[16.3%] ">22</div>
                                    <div class="w-[16.3%] ">23</div>
                                    <div class="w-[16.3%] ">24</div>
                                    <div class="w-[16.3%] ">25</div>
                                    <div class="w-[16.3%] ">26</div>
                                    <div class="w-[16.3%] text-black">27</div>
                                    <div class="w-[16.3%] text-black">28</div>
                                    <div class="w-[16.3%] text-black">29</div>
                                    <div class="w-[16.3%] text-black">30</div>
                                    <div class="w-[16.3%] ">1</div>
                                    <div class="w-[16.3%] ">2</div>
                                    <div class="w-[16.3%] ">3</div>
                                    <div class="w-[16.3%] ">4</div>
                                    <div class="w-[16.3%] ">5</div>
                                    <div class="w-[16.3%] ">6</div>
                                    <div class="w-[16.3%] ">7</div>
                                    <div class="w-[16.3%] ">8</div>
                                    <div class="w-[16.3%] ">9</div>
                                    <div class="w-[16.3%] ">10</div>
    
                                </div>
    
                            </div>
                       </div>

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
                slidesPerView:1,
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
                    delay:3000
                },
                loop:true
            });


        })

    </script>
</div>