<header>
    <?php require_once __DIR__ . '/_loginForm.php'; ?>
    <nav>
        <ul class='nav-bar'>
            <li id="logo" class='logo'><a href='/Game'><img src='/img/logo-nav.png' /></a></li>
            <input type='checkbox' id='check' />
            <span class="menu">
                <li><a class="Links" href="/">Home</a></li>
                <li><a class="Links" href="/Academie">Info Academie</a></li>
                <li><a class="Links" href="/About">Info School</a></li>
                <li><a class="Links" href="/Contact">Contact us</a></li>
                <?php if (isset($_SESSION['user'])) : ?>
                    <li><a class="Links" href="/AdminPanel">Dashboard</a></li>
                    <li><a class="button-nav" href="/Logout" id="logoutElBut">Logout</a></li>
                <?php else : ?>
                    <li><a class="button-nav" href="/Login" id="loginElBut">Inloggen</a></li>
                <?php endif; ?>
                <li><a class="button-nav" href="/Form">Inschrijven</a></li>

                <label for="check" class="close-menu"><i class="fas fa-times"></i></label>
            </span>
            <label for="check" class="open-menu"><i class="fas fa-bars"></i></label>
        </ul>
    </nav>
</header>


<?php if (!empty($flashMessages)) : ?>
    <div class="alert alert-<?= htmlspecialchars($flashMessages['type']); ?> text-center mt-5" role="alert" style="width: 300px; margin: 0 auto; color: green;">
        <p><?= htmlspecialchars($flashMessages['message']); ?></p>
    </div>
<?php endif; ?>