<footer class="text-black py-16 mt-12">
    <div class="container mx-auto flex justify-between items-center px-6">
        <!-- Left side -->
        <div class="flex items-center space-x-4 mt-12">
            <img src="img/logo-nav.png" alt="Chocolatier Logo" class="h-16">
            <ul class="space-y-2">
                <li><a href="#" class="text-lg">Home</a></li>
                <li><a href="#" class="text-lg">Info opleiding</a></li>
                <li><a href="#" class="text-lg">Info school</a></li>
            </ul>
        </div>
        <!-- Right side -->
        <div class="text-lg mt-12">
            <div>Adres: Daltonlaan 300</div>
            <div>Plaats: Utrecht</div>
            <div>Tel: 030 243 234 1</div>
        </div>
        <div class="text-lg mt-12">
            <div class="flex space-x-4 mt-2">
                <a href="#" class="inline-block"><img src="img/insta-icon.png" alt="Instagram" class="h-16 w-16"></a>
                <a href="#" class="inline-block"><img src="img/facebook-icon.png" alt="Facebook" class="h-16 w-16"></a>
                <a href="#" class="inline-block"><img src="img/tiktok-icon.png" alt="TikTok" class="h-16 w-16"></a>
            </div>
        </div>
    </div>
</footer>
</body>
<?php if (isset($_SESSION['user'])) : ?>
    <script src="/public/js/Logout.js"></script>
<?php else : ?>
    <script src="/public/js/LoginForm.js"></script>
<?php endif; ?>

</html>