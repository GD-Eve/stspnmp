<div>
    <x-front.header />
    <main class="relative">
        <div class="flex">
            <!--sidebar-->
            <x-front.sidebar />
            <!--content-->
            <div class="lg:flex-1 pb-10 rightanimation translate-x-40">
                <div class=" pt-5 md:pt-10 lg:pt-11  px-3 md:px-6 lg:px-20 xl:px-48  ">
                    <div class="text-[#333] text-base md:text-lg leading-7 md:leading-8">
                        <div class="relative flex justify-between ">
                            <div class="lg:pb-7">
                                <div class="inline-block group relative">
                                    <div class="text-2xl md:text-4xl font-black">誕生</div>
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
                        <div class="pt-5 md:pt-10 lg:pt-0 space-y-3 tracking-widest">
                            <p>
                                1995年12月，中央研究院歷史語言研究所臧振華院士接受行政院國家科學委員會委託在該地進行考古遺址調查起，至今連同其周邊新開發臺南特定工業區及樹谷工業園區，已發現82處以上考古遺址。其中史前館進行搶救發掘者共32處，這些遺址中所埋存史前文化的年代，最早可達5000年前左右，最晚則約距今300多年，涵蓋的時間範圍長達4500年，包括大坌坑、牛稠子、大湖、蔦松、西拉雅及明清漢人等文六個文化層。
                            </p>
                            <p>
                                為了保存因開發臺南科學園區所進行搶救發掘的遺址出土珍貴的文化資產，2002年國科會與臺南縣政府提出興建博物館之議，2003年4月教育部指定國立臺灣史前文化博物館（簡稱史前館）保管南科園區
                                出土文物及辦理興建博物館事宜。2003年4月起至2004年12月教育部共召開「研商設置國立臺灣史前文化博物館南科分館保存南科園區出土文物之可行性與相關事宜」5次會議，原則同意新單位為史前館之分館。
                            </p>
                            <p>
                                經多方共同努力下，於2007年獲得行政院首肯，2008年2月奉行政院二度核定，核定建館經費15億元，館址選於南部科學工業園區管用地，佔地2.44公頃。
                            </p>
                            <div>
                                <ul class="list-disc pl-8 leading-9">
                                    <li>2012年史前館改隸文化部。</li>
                                    <li>2014年6月南科館新建工程開工。</li>
                                    <li>2017年12月南科館新建工程完工取得使用執照。</li>
                                    <li>2018年12月定名「國立臺灣史前文化博物館南科考古館」並進行試營運。</li>
                                    <li>2019年10月19日正式對外開館營運。</li>
                                </ul>
                            </div>
                            <div class="pb-7">
                                <div class="inline-block group relative">
                                    <div class="text-2xl md:text-4xl font-black">願景</div>
                                    <div class="absolute w-full h-1 bg-[#ffea00] bottom-0 left-0 -translate-y-[3px]">
                                    </div>
                                </div>
                            </div>
                            <div class="pl-8 leading-9">
                                <ul class=" list-decimal">
                                    <li>妥善保存及研究南科出土之文化資產。</li>
                                    <li>展示南科出土之文物。</li>
                                    <li>推廣環境及鄉土文化教育。</li>
                                    <li>提供地方知識休閒和觀光之優質場所。</li>
                                    <li>擴展史前館之服務功能。</li>
                                </ul>
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