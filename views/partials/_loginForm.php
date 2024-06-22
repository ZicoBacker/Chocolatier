<?php if (!isset($_SESSION['user'])) : ?>
    <div id="loginEl">
        <div class="inner">
            <h3>Login</h3>
            <span id="loginCloseBut">X</span>
            <form action="/Login" id="loginForm">
                <label for="username">Gebruikersnaam</label>
                <input type="text" name="username" id="username" class="custom-input-bg">

                <label for="password">Wachtwoord</label>
                <input type="password" name="password" id="password" class="custom-input-bg">
                <span id="msg"></span>
                <button type="submit" class="custom-button-bg" id="loginSubmit">Log in</button>
            </form>
        </div>
    </div>
<?php endif;
?>