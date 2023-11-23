<header x-data="{ openMenu: false }">
    <div class="flex items-center justify-between py-8 px-10">
        <!-- 電腦版選單 -->
        <!-- logo -->
        <div class="flex space-x-4 items-center">
            <x-logo class="w-10 h-10" />
            <div class="text-sm">形象範本</div>
        </div>
        <!-- navigation -->
        <nav class="hidden lg:block">
            <ul class="flex justify-between space-x-10">
                <li class=" hover:-translate-y-1 transition-all"><a href="">關於我們</a></li>
                <li class=" hover:-translate-y-1 transition-all"><a href="">最新消息</a></li>
                <li class=" hover:-translate-y-1 transition-all"><a href="">服務流程</a></li>
                <li class=" hover:-translate-y-1 transition-all"><a href="">團隊成員</a></li>
                <li class=" hover:-translate-y-1 transition-all"><a href="">聯絡我們</a></li>
                <li class=" hover:text-amber-400 transition-all">
                    <!-- components/Icons/moon.balde.php -->
                    <a href=""><x-Icons.moon class="w-6 h-6" /></a>
                </li>
            </ul>
        </nav>

        <!-- 手機板選單 -->
        <!-- hamburger -->
        <nav class="block lg:hidden">
            <button type="button" x-on:click="openMenu = !openMenu">
                <x-Icons.hamburger class="w-6 h-6" />
            </button>
        </nav>
        <!-- dialogMenu -->
        <div class="fixed inset-0 text-white" x-show="openMenu">
            <div class="absolute inset-0 bg-black opacity-70" x-on:click="openMenu = false"></div>
            <div class="absolute top-0 left-0 max-w-xs w-2/3  h-screen bg-black">
                <ul class="p-10 space-y-10">
                    <li class=" hover:-translate-y-1 transition-all"><a href="">關於我們</a></li>
                    <li class=" hover:-translate-y-1 transition-all"><a href="">最新消息</a></li>
                    <li class=" hover:-translate-y-1 transition-all"><a href="">服務流程</a></li>
                    <li class=" hover:-translate-y-1 transition-all"><a href="">團隊成員</a></li>
                    <li class=" hover:-translate-y-1 transition-all"><a href="">聯絡我們</a></li>
                    <li class=" hover:text-amber-400 transition-all">
                        <!-- components/Icons/moon.balde.php -->
                        <a href=""><x-Icons.moon class="w-6 h-6" /></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>
