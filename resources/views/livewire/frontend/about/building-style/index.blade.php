<div>
    <x-front.header />
    <main class="relative min-h-screen">
        <div class="lg:flex">
            <!--sidebar-->
            <x-front.sidebar />
            <!--content-->
            <div class="lg:flex-1 rightanimation lg:translate-x-40">
                <div class="py-5 md:py-10 lg:pt-11  px-3 md:px-6 lg:px-28 xl:px-48 ">
                    <div class="text-[#333] text-base md:text-lg  space-y-7">
                        <div class="lg:pb-7">
                            <div class="inline-block group relative">
                                <div class="text-2xl md:text-4xl font-black">建築特色</div>
                                <div class="absolute w-full h-1 bg-[#ffea00] bottom-0 left-0 -translate-y-[3px]">
                                </div>
                            </div>
                        </div>
                        <!--text-->
                        <div class="space-y-7">
                            <div class="space-y-3 tracking-widest">
                                <p class="text-xl font-bold">設計理念</p>
                                <p class="text-base lg:text-lg leading-8 md:leading-9">整體外觀看似一石剖一刀，一玻璃管從中間穿過，隱含剖析、穿梭、交織、下探、滲透的概念；建築像體中，隱含著交錯19°角的軸線關係，一象徵過去的方位、一象徵現代都市的經緯關係，交織的軸線存在於外牆的分割縫隙中，也存在於博物館展示動線，帶著時空交錯的趣味性。</p>
                            </div>
                            <div class="space-y-3 tracking-widest">
                                <p class="text-xl font-bold">剖析考古</p>
                                <p class="text-base lg:text-lg leading-8 md:leading-9">像一刀剖開大地一般，探究地底下每個時期所遺留的足跡，考古學上稱為文化層，如同建築設計常用到的〝Section〞(剖面圖，用來解讀建築物個空間的關聯性)；將一個黑盒子切成兩半，展開的是文化層的概念，建築牆面上呈現剖面紋理，象徵著各遺址文化層出現的相對關係，亦意涵著南科園區多次的海進、海退所形成的土層關係。</p>
                            </div>
                            <div class="space-y-3 tracking-widest">
                                <p class="text-xl font-bold">穿梭時空</p>
                                <p class="text-base lg:text-lg leading-8 md:leading-9">藉由玻璃方管象徵時空隧道，穿梭建築的剖面；玻璃方管將遊客從地面送至建築物至高點，映入眼簾的是高速而過的高鐵，提醒遊客現在的時空，而穿過的建築高度象徵穿梭過去時空5000年。</p>
                            </div>
                            <div class="space-y-3 tracking-widest">
                                <p class="text-xl font-bold">交織</p>
                                <p class="text-base lg:text-lg leading-8 md:leading-9">探坑，考古探坑存在著現代經緯與過去方位，交織紋理的不在開始也不在最後，存在於發現的過程。</p>
                            </div>
                            <div class="space-y-3 tracking-widest">
                                <p class="text-xl font-bold">下探</p>
                                <p class="text-base lg:text-lg leading-8 md:leading-9">由時空隧道引導遊客進入建築至高點，再進去展示區；以時光回溯與考古工作下探的概念，設計建築展示的動線，由高至低、由今至古，循著向下探索的精神。</p>
                            </div>
                            <div class="space-y-3 tracking-widest">
                                <p class="text-xl font-bold">滲透</p>
                                <p class="text-base lg:text-lg leading-8 md:leading-9">建築外牆切割的縫隙，將參訪的情境滲透些許時間軸的變化，暗示南科遺址與博物館的關係，而夜間則由建築量體的照明向外綻放，成為高鐵上旅客行經台南科學園區的一個印證。</p>
                            </div>
                        </div>
                       
                    </div>
                </div>
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
