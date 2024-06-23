<?php require_once __DIR__ . '/partials/_header.php'; ?>

<body>
    <div class="inner">
        <h1>Contact us</h1>

        <div class="formdiv">
            <form action="#" method="post" id="contactForm">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="custom-input-bg" required>

                <label for="Beschrijving">wat is er aan de hand?</label>
                <textarea type="text" required minlength="10" maxlength="50000" name="Beschrijving" id="Beschrijving" class="custom-input-bg"> </textarea>
                <span id="contactMsg"></span>
                <button type="submit" class="custom-button-bg" id="contactSubmit">Verstuur Contact Verzoek</button>
            </form>
        </div>
    </div>
</body>
<script src="/public/js/Contact.js"></script>

<?php require_once __DIR__ . '/partials/_footer.php' ?>