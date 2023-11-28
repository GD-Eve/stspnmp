<div>
    <div class="">
        <x-front.header />
        <main class="relative min-h-screen overflow-hidden">
            <div class="lg:flex">
                <!--sidebar-->
                <x-front.sidebar />
                <!--content-->
                <div class="lg:flex-1 px-5 md:px-15 lg:px-48  rightanimation translate-x-60">
                    <div class=" pt-5 md:pt-10 lg:pt-11  ">
                        <div class="text-[#333] text-base md:text-lg leading-7 md:leading-8">
                            <div class="relative flex justify-between ">
                                <div class="lg:pb-7">
                                    <div class="inline-block group relative">
                                        <div class="text-2xl md:text-4xl font-black">導覽服務</div>
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
                            <div class=" pb-10 lg:pb-60 pt-5 md:pt-10 lg:pt-0  tracking-widest text-lg text-[#666] ">                               
                                <div class=" space-y-10 tracking-widest">
                                    <div>
                                        <div class="text-2xl md:text-3xl ">【個人語音導覽機租用】</div>
                                        <ul style="list-style-type:disc;" class="pl-10 ">
                                            <li>
                                                <p class=" leading-">
                                                    提供成人之華語版、英語版、日語版、臺灣台語版、臺灣客語版導覽內容，民眾可依個人興趣、參觀動線隨選即聽文物導覽解說。
                                                </p>
                                            </li>
                                            <li>
                                                <p class=" leading-">
                                                    提供兒童之華語版、英語版、臺灣台語版、臺灣客語版導覽內容，民眾可依個人興趣、參觀動線隨選即聽文物導覽解說。
                                                </p>
                                            </li>
                                            <li>
                                                <p class=" leading-">
                                                    租借地點：一樓大廳服務台。
                                                </p>
                                            </li>
                                            <li>
                                                <p class=" leading-">
                                                    租借費用：NT.50/台。
                                                </p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div>
                                        <div class="text-2xl md:text-3xl  ">【定時導覽】</div>
                                        <ul style="list-style-type:disc;" class="pl-10 ">
                                            <li>
                                                <p class=" leading-8">
                                                    場次： 09:30、10:30、14:30、15:30，每場約60分鐘。
                                                </p>
                                            </li>
                                            <li>
                                                <p class=" leading-8">
                                                    說明：開放日均有安排定時導覽服務，服務時間及內容以現場公告為準，可以現場報名參
                                                </p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div>
                                        <div class="text-2xl md:text-3xl  ">【團體導覽預約】</div>
                                        <ul style="list-style-type:disc;" class="pl-10 ">
                                            <li>
                                                <p class=" leading-8">
                                                    預約導覽團體人數至少20人以上，於參觀日前3個月開放電話預約，最遲於1周前提出申請，額滿為止。
                                                </p>
                                            </li>
                                            <li>
                                                <p class=" leading-8">
                                                    團體經預約成功後，當日請提早10分鐘抵達現場，超過10分鐘未到則視為取消，若因故延期參觀或取消預約，請於約定參觀2日前通知本館。
                                                </p>
                                            </li>
                                            <li>
                                                <p class=" leading-8">
                                                    服務專線：(06)5050905轉8101、8102。
                                                </p>
                                            </li>
                                        </ul>
                                    </div>
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
