<header>
    <nav>
        <ul class="nav-bar flex justify-between items-center fixed top-0 w-full bg-custom-beige p-0 z-50">
            <li class="logo"><a href="/Game"><img src="/img/logo-nav.png" class="w-4/5 h-4/5 p-1" /></a></li>
            <input type="checkbox" id="check" class="hidden" />
            <span class="menu flex p-2 fixed top-0 right-0 h-screen w-3/4 bg-custom-brown transition-all duration-200 ease-in-out z-40 md:relative md:h-auto md:w-auto md:flex-row md:bg-transparent md:static md:flex">
                <li class="mt-10 md:mt-0 md:ml-28"><a class="Links text-[#2B1A12] uppercase relative after:content-[''] after:absolute after:bottom-0 after:left-0 after:w-0 after:h-[1px] after:bg-[#2B1A12] after:transition-all duration-200 ease-in-out hover:after:w-full" href="/">Home</a></li>
                <li class="mt-10 md:mt-0 md:ml-28"><a class="Links text-[#2B1A12] uppercase relative after:content-[''] after:absolute after:bottom-0 after:left-0 after:w-0 after:h-[1px] after:bg-[#2B1A12] after:transition-all duration-200 ease-in-out hover:after:w-full" href="/Academie">Info Academie</a></li>
                <li class="mt-10 md:mt-0 md:ml-28"><a class="Links text-[#2B1A12] uppercase relative after:content-[''] after:absolute after:bottom-0 after:left-0 after:w-0 after:h-[1px] after:bg-[#2B1A12] after:transition-all duration-200 ease-in-out hover:after:w-full" href="/About">Info School</a></li>
                <li class="mt-10 md:mt-0 md:ml-28"><a class="button-nav bg-custom-orange text-black uppercase transition-all duration-150 ease-in-out rounded py-2 px-4 hover:bg-custom-hover-orange" href="/Form">Inschrijven</a></li>
                <label for="check" class="close-menu absolute top-5 right-5 text-black cursor-pointer text-2xl md:hidden"><i class="fas fa-times"></i></label>
            </span>
            <label for="check" class="open-menu absolute top-1/2 right-5 transform -translate-y-1/2 text-black cursor-pointer text-2xl md:hidden"><i class="fas fa-bars"></i></label>
        </ul>
    </nav>
</header>

<?php if (!empty($flashMessages)): ?>
    <div class="alert alert-<?= htmlspecialchars($flashMessages['type']); ?> text-center mt-5 mx-auto w-72 text-green-700">
        <p><?= htmlspecialchars($flashMessages['message']); ?></p>
    </div>
<?php endif; ?>
 