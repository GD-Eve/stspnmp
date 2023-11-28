<div>
    <x-front.header />
    <main class=" min-h-screen">
        <div class="pt-5 md:pt-10 lg:pt-11 lg:pb-7 space-y-5 lg:space-y-10">
            <div class="flex justify-center items-center">
                <div class="inline-block group relative">
                    <div class="text-2xl md:text-4xl font-black">導覽服務</div>
                    <div class="absolute w-full h-1 bg-[#ffea00] bottom-0 left-0 -translate-y-[3px]">
                    </div>
                </div>
            </div>
            <!--map-->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3669.912530281249!2d120.2815778153549!3d23.100297619214487!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x346e7bf1980e9f51%3A0x78b16e6bbdc1e155!2z5ZyL56uL6Ie654Gj5Y-y5YmN5paH5YyW5Y2a54mp6aSo77yN5Y2X56eR6ICD5Y-k6aSo!5e0!3m2!1szh-TW!2stw!4v1587540619912!5m2!1szh-TW!2stw" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0" title="地址：台南市新市區南科三路10號" class="h-[70vh] w-[100%]"></iframe>
            <!--districtplan-->
            <div class="flex flex-col lg:h-[80vh]">
                <div class="h-[10%] w-full">館區平面圖(引導用)</div >
                <div class="relative ">
                    <div class="absolute top-0 left-0 pt-[25%] w-full h-full">
                        <img src="https://stsp.nmp.gov.tw/img/back/editor/2021-09-09/20210909152425537.jpg" alt="" class=" aspect-[3/4] w-full h-full">
                    </div>
                </div>
               
            </div>
        </div>
    </main>
    <x-front.footer />
</div>
