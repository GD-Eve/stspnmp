<div>
    <div class="">
        <x-front.header />
        <main class="relative min-h-screen overflow-hidden">
            <div class="lg:flex">
                <!--sidebar-->
                <x-front.about-sidebar />
                <!--content-->
                <div class="min-h-screen">
                    <div class="lg:flex-1 px-5 md:px-15 lg:px-48  rightanimation translate-x-60">
                        <div class=" pt-5 md:pt-10 lg:pt-11  ">
                            <div class="text-[#333] text-base md:text-lg leading-7 md:leading-8">
                                <div class="relative flex justify-between ">
                                    <div class="lg:pb-7">
                                        <div class="inline-block group relative">
                                            <div class="text-2xl md:text-4xl font-black relative z-10">博物館賣店與餐飲</div>
                                            <div
                                                class="absolute w-full h-1 bg-[#ffea00] bottom-0 left-0 -translate-y-[3px]">
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
                                                <img src="https://stsp.nmp.gov.tw/img/front/about-icon-3.png"
                                                    alt="" class=" aspect-square w-full h-full object-contain">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--text-->
                                <div class=" tracking-widest text-[#666]">
                                    <p class="text-lg">[111.5.27公告]</p>
                                    <p class="leading-loose text-2xl">
                                        南科考古館一樓賣店餐廳目前暫停對外營業，如有用餐需求可至對面Park17商場(7-11、摩斯漢堡、星巴克、翰林茶館、四季餐廳...等供選擇)。</p>
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
                duration: 1,

            }),
            //markers: true,
            start: "top 90%",
        });
        ScrollTrigger.batch(leftAnimation, {
            onEnter: batch => gsap.to(batch, {
                opacity: 1,
                stagger: 0.5,
                duration: 0.7,
                x: 0,
                y: 0
            }),
            //markers: true,
            start: "top 90%",
        });
        ScrollTrigger.batch(rightAnimation, {
            onEnter: batch => gsap.to(batch, {
                opacity: 1,
                stagger: 0.5,
                duration: 0.7,
                x: 0,
                y: 0
            }),
            //markers: true,
            start: "top 90%",
        });
    })
</script>
