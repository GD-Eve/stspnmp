<div>
    <div class="">
        <x-front.header />
        <main class="relative min-h-screen overflow-hidden">
            <div class="lg:flex">
                <!--sidebar-->
                <div class="hidden lg:block  lg:w-[25%] xl:w-[15%] bg-[#f3f3f3] relative leftanimation opacity-0 -translate-x-28">
                    <a href="/introduction" title="簡介" class="block relative">
                        <div class=" pt-11 px-8">
                            <div class="flex items-center space-x-2 relative z-30">
                                <svg xmlns="http://www.w3.org/2000/svg" height="12" viewBox="0 -960 960 960" width="12">
                                    <path d="M140.001-140.001v-679.998h679.998v679.998H140.001Z" />
                                </svg>
                                <p class="py-4  text-lg ">簡介</p>
                            </div>
                        </div>
                        <div class="absolute  bottom-0 left-0 border-black border-b-4 w-[95%] z-10"></div>
                        <div class=" absolute top-10 left-0 bg-[#ffea00] w-[92%] h-[75%] "></div>
                    </a>
                    <a href="/buildingStyle" title="建築特色" class="block relative">
                        <div class="pt-11 px-8 group">
                            <div class="flex items-center space-x-2">
                                <svg xmlns="http://www.w3.org/2000/svg" height="12" viewBox="0 -960 960 960" width="12">
                                    <path d="M140.001-140.001v-679.998h679.998v679.998H140.001Z" />
                                </svg>
                                <p class="text-lg">建築特色</p>
                            </div>
                            <div
                                class="absolute  bottom-0 left-0 w-0 h-1 bg-black  group-hover:w-[95%] group-hover: group-hover:transition-all group-hover:duration-300 group-hover:ease-linear">
                            </div>
                        </div>
                    </a>
                </div>
                <!--content-->
                <div class="min-h-screen">
                    <div class="lg:flex-1 px-5 md:px-15 lg:px-48  rightanimation translate-x-60">
                        <div class=" pt-5 md:pt-10 lg:pt-11  ">
                            <div class="text-[#333] text-base md:text-lg leading-7 md:leading-8">
                                <div class="relative flex justify-between ">
                                    <div class="lg:pb-7">
                                        <div class="inline-block group relative">
                                            <div class="text-2xl md:text-4xl font-black">博物館賣店與餐飲</div>
                                            <div class="absolute w-full h-1 bg-[#ffea00] bottom-0 left-0 -translate-y-[3px]">
                                            </div>
                                        </div>
                                    </div>
                                    <!--lg以下icon-->
                                    <div class="flex space-x-7 md:space-x-10  justify-between items-center lg:hidden">
                                        <div class="w-[31%]  md:max-w-[43px] h-fit">
                                            <img src="https://stsp.nmp.gov.tw/img/front/about-icon-1.png" alt=""
                                                class=" aspect-square w-full h-full object-contain">
                                        </div>
                                        <div
                                            class="w-[31%] h-full md:w-[43px] md:h-[43px] flex justify-center rounded-full  bg-black/20">
                                            <div class="max-w-[25px] ">
                                                <img src="https://stsp.nmp.gov.tw/img/front/about-icon-3.png" alt=""
                                                    class=" aspect-square w-full h-full object-contain">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--text-->
                               <div>
                                    
                               </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--lg以上icon-->
                <div class="hidden lg:block  opacityanimation opacity-0 ">
                    <a href="/" title="Facebook">
                        <div class="absolute top-11  right-5 xl:right-28 w-[3%] max-w-[43px] h-fit">
                            <img src="https://stsp.nmp.gov.tw/img/front/about-icon-1.png" alt=""
                                class=" aspect-square w-full h-full overflow-hidden ">
                        </div>
                    </a>
                    <a href="/" title="print">
                        <div class="absolute top-28 right-5 xl:right-28 w-[3%] max-w-[43px] h-fit">
                            <img src="https://stsp.nmp.gov.tw/img/front/about-icon-3.png" alt=""
                                class=" aspect-square w-full h-full overflow-hidden">
                        </div>
                    </a>
                </div>
            </div>
        </main>
        <x-front.footer />
    
    
    </div>
    <script>
        document.addEventListener('livewire:init', () => {
                    let opacitytAnimation = gsap.utils.toArray('.opacityanimation');
                    let leftAnimation = gsap.utils.toArray('.leftanimation');
                    let rightAnimation = gsap.utils.toArray('.rightanimation');
                    gsap.registerPlugin(ScrollTrigger) 
                    ScrollTrigger.batch(opacitytAnimation, {
                        onEnter: batch => gsap.to(batch, {
                            opacity: 1, 
                            stagger: 0.7,
                            duration:1,
                        
                        }),
                        markers:true,
                        start:"top 90%",
                    });
                    ScrollTrigger.batch(leftAnimation, {
                        onEnter: batch => gsap.to(batch, {
                            opacity: 1, 
                            stagger: 0.5,
                            duration:0.7,
                            x:0,
                            y:0
                        }),
                        markers:true,
                        start:"top 90%",
                    });
                    ScrollTrigger.batch(rightAnimation, {
                        onEnter: batch => gsap.to(batch, {
                            opacity: 1, 
                            stagger: 0.5,
                            duration:0.7,
                            x:0,
                            y:0
                        }),
                        markers:true,
                        start:"top 90%",
                    });
                })
            
    </script>
</div>
