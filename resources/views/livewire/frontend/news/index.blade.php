<div>
    <x-front.header />
    <main class="min-h-screen">
        <div class="w-full xl:max-w-[1200px] mx-auto py-12 px-5 md:px-10 pb-10">
            <div>
                <div class="inline-block relative">
                    <p class="text-2xl md:text-4xl font-bold relative z-10">最新消息</p>
                    <div class="absolute w-full h-1 bg-[#ffea00] bottom-0 left-0 -translate-y-[3px]"></div>
                </div>
                <div class="pt-10 lg:pt-20 tracking-widest text-base">
                    <div class=" space-y-10 xl:space-y-0 lg:flex lg:justify-between lg:items-center ">
                        <div class="flex items-center w-full">
                            <p>日期：</p>
                            <div
                                class="flex justify-center items-center border-solid border-b border-black space-x-1 lg:space-x-5">
                                <p>2024/01/04</p>
                                <svg width="15" height="15" viewBox="0 0 1000 1000" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M48 404.88H952.096V904.512C952.096 930.793 930.793 952.096 904.512 952.096H95.584C69.3041 952.096 48 930.793 48 904.512V404.88Z"
                                        fill="white" stroke="black" stroke-width="95.168" stroke-linejoin="round" />
                                    <path
                                        d="M48 166.96C48 140.68 69.3041 119.376 95.584 119.376H904.512C930.793 119.376 952.096 140.68 952.096 166.96V404.88H48V166.96Z"
                                        stroke="black" stroke-width="95.168" stroke-linejoin="round" />
                                    <path d="M309.712 48V238.336" stroke="black" stroke-width="95.168"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M690.384 48V238.336" stroke="black" stroke-width="95.168"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                            <p>－</p>
                            <div class="flex justify-center items-center border-solid border-b border-black space-x-5">
                                <p>2024/01/04</p>
                                <svg width="15" height="15" viewBox="0 0 1000 1000" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M48 404.88H952.096V904.512C952.096 930.793 930.793 952.096 904.512 952.096H95.584C69.3041 952.096 48 930.793 48 904.512V404.88Z"
                                        fill="white" stroke="black" stroke-width="95.168" stroke-linejoin="round" />
                                    <path
                                        d="M48 166.96C48 140.68 69.3041 119.376 95.584 119.376H904.512C930.793 119.376 952.096 140.68 952.096 166.96V404.88H48V166.96Z"
                                        stroke="black" stroke-width="95.168" stroke-linejoin="round" />
                                    <path d="M309.712 48V238.336" stroke="black" stroke-width="95.168"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M690.384 48V238.336" stroke="black" stroke-width="95.168"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                        </div>
                        <div class="flex relative w-full" x-data="{ open: false }">
                            <p>分類：</p>
                            <div class="relative " @click="open = ! open">
                                <div class="flex space-x-20">
                                    <p>全部</p>
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960"
                                        width="24">
                                        <path d="M480-360 280-560h400L480-360Z" />
                                    </svg>
                                </div>
                                <div class=" absolute  top-full left-0 w-full z-20 bg-white border border-black/10 rounded-md  shadow-xl"
                                    x-show="open">
                                    <div class=" font-bold hover:bg-sky-500 hover:text-white">全部</div>
                                    <div class=" font-bold hover:bg-sky-500 hover:text-white">活動</div>
                                    <div class=" font-bold hover:bg-sky-500 hover:text-white">招標公告</div>
                                    <div class=" font-bold hover:bg-sky-500 hover:text-white">徵才</div>
                                    <div class=" font-bold hover:bg-sky-500 hover:text-white">新聞稿</div>
                                    <div class=" font-bold hover:bg-sky-500 hover:text-white">公告</div>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center w-full">
                            <p>關鍵字：</p>
                            <input type="text" name="" id=""
                                class="outline-none focus:outline-none border-none focus:border-none"
                                placeholder="請輸入關鍵字">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960"
                                width="24">
                                <path d="M480-360 280-560h400L480-360Z" />
                            </svg>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </main>
    <x-front.footer />
    <script type="module">
        document.addEventListener('livewire:init', () => {
            gsap.registerPlugin(ScrollTrigger)
            let menuListOpenBtn = gsap.utils.toArray('.menulistopenbtn');
            let menuListShow = gsap.utils.toArray('.menulistshow');
            let menuBtnState = []
            menuListOpenBtn.forEach((btn, i) => {
                btn.addEventListener('click', function() {
                    if (menuBtnState[i] !== true) {
                        gsap.to(menuListShow[i], {
                            duration: 0.3,
                            height: 'auto'
                        })
                    } else {
                        gsap.to(menuListShow[i], {
                            duration: 0.3,
                            height: '0'
                        })
                    }
                    menuBtnState[i] = !menuBtnState[i]
                })
            });
        })
    </script>
</div>
