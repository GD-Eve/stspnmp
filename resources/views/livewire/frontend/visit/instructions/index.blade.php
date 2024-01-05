<div>

    <div class="">
        <x-front.header />
        <main class="relative overflow-hidden">
            <div class="lg:flex min-h-screen">
                <!--sidebar-->
                <x-front.sidebar />
                <!--content-->
                <div
                    class="pt-5 md:pt-10 lg:pt-11 pb-10 lg:pb-60 lg:flex-1 px-5 md:px-14 lg:px-48 rightanimation translate-x-10">
                    <div class="text-[#666] text-base md:text-lg ">
                        <div class="relative flex justify-between ">
                            <div class="lg:pb-7">
                                <div class="inline-block group relative">
                                    <div class="text-2xl md:text-4xl font-black relative z-10">參觀須知</div>
                                    <div class="absolute w-full h-1 bg-[#ffea00] bottom-0 left-0 -translate-y-[3px]">
                                    </div>
                                </div>
                            </div>
                            <!--lg以下icon-->
                            <x-front.icon />
                        </div>
                        <!--text-->
                        <div class="pt-5 md:pt-10 lg:pt-0">
                            <ul style="list-style-type:disc;" class="pl-10 space-y-5">
                                <li class="leading-7 md:leading-8 tracking-widest">
                                    大廳服務臺提供觀眾諮詢、寄物、播音、失物招領、借用嬰兒車、輪椅等服務。
                                </li>
                                <li class="leading-7 md:leading-8 tracking-widest">
                                    本館全面禁煙，並設有簡易護理箱、哺乳室及無障礙洗手間，歡迎多加利用。
                                </li>
                                <li class="leading-7 md:leading-8 tracking-widest">
                                    請勿攜帶寵物、危險物品進入本館。
                                </li>
                                <li class="leading-7 md:leading-8 tracking-widest">
                                    進入本館請著整潔服裝，注意保持社交距離，以維參觀品質。
                                </li>
                                <li class="leading-7 md:leading-8 tracking-widest">
                                    請勿在展示廳內飲食、高聲談笑、隨地吐痰、亂拋紙屑等，以免妨礙他人參觀權益。
                                </li>
                                <li class="leading-7 md:leading-8 tracking-widest">
                                    攝影時請勿使用腳架及閃光燈。
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--lg以上icon-->
                <x-front.lg-icon />

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
                }),
                //markers:true,
                start: "top 90%",
            });
        })
    </script>
</div>
