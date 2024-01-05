<div>
    <x-front.header />
    <main class="relative min-h-screen overflow-x-hidden">
        <div class=" px-8 md:px-20 lg:px-0 lg:flex">
            <!--sidebar-->
            <x-front.exhibition-sidebar />
            <!--content-->
            <div class="lg:flex-1 pt-10 lg:px-20 xl:px-60 pb-10">
                <div class="min-h-screen rightanimation opacity-0 translate-x-28 space-y-5 lg:space-y-0">
                    <div class="relative flex justify-between ">
                        <div class="lg:pb-7">
                            <div class="inline-block group relative">
                                <div class="text-2xl md:text-4xl font-black relative z-10">第一展廳</div>
                                <div class="absolute w-full h-1 bg-[#ffea00] bottom-0 left-0 -translate-y-[3px]">
                                </div>
                            </div>
                        </div>
                        <!--lg以下icon-->
                        <x-front.icon />
                    </div>
                    <!--pic-->

                    <div class="2xl:h-[70vh]">
                        <div class="max-w-[1200px] z-30 relative">
                            <img src="{{ asset('assets/images/exhibition01.jpg') }}" alt=""
                                class=" aspect-[2/1] shadow-xl">
                        </div>
                        <div
                            class="absolute top-[15%] left-[20%] w-full h-[300px] 2xl:w-[1200px] 2xl:h-[600px] bg-[#ffea00] -z-10">
                        </div>
                    </div>

                    <!--text-->
                    <div class="lg:pt-40  flex flex-col justify-center items-center">
                        <div class="max-w-screen-md">
                            <div class="text-base lg:text-lg text-[#666666] tracking-widest leading-loose font-bold">
                                <p>南科考古館為臺灣首座位於科學園區中之考古專業博物館，作為參觀南科館展示內容的第一站，呈現的是南科地區自新石器時代以來5,000年歷史淵源以及南科遺址群在臺灣考古研究中的重要性與獨特性。
                                </p>
                                <p>展廳中依照時間序列展出兩百多件南科地區6大考古文化11個子期相的代表性珍貴古物，如薄如紙張的貝刀、光可鑑人的巴圖形石斧、模樣質樸有趣的人面陶偶、雕工精緻的鹿角刀柄與骨骰等。
                                </p>
                                <p>搭配展廳入口的大型投影動畫以及各文化的生活場景模型，讓史前文化不再只是書本與媒體上的文句，而是可近距離觀看、感受的對象。</p>
                                <p>此外，每一次的遺址搶救發掘都涉及南科地區的地貌變化，也是許多機關與工作人員費盡心力、揮汗如雨的成果，這20餘年來數十次的考古工作過程縮影亦將於展廳一隅呈現。</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--lg以上icon-->
            <div class="hidden lg:block opacityanimation opacity-0 ">
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
                //markers:true,
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
                //markers:true,
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
                //markers:true,
                start: "top 90%",
            });
        })
    </script>
</div>
