<?php require_once __DIR__ . '/partials/_header.php'; ?>


<div class="relative">
    <img class="object-cover h-[52vh] w-full" src="IMG/AcademiaCookie1.png">
    <h2 class="absolute text-3xl text-white top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-center">
        Registreren
    </h2>
</div>




<div class="flex justify-center mt-8">
    <div class="w-full max-w-6xl p-8 bg-amber-50 rounded-lg shadow-lg">
        <h2 class="text-3xl font-bold text-black mb-4 text-left">Start aanmelding</h2>
        <p class="text-lg text-black mb-4 text-left">Bedankt voor je interesse in een mbo-opleiding bij Chocolatier Academie.</p>
        <p class="text-lg text-black mb-4 text-left">Je gaat je nu aanmelden voor de opleiding Chocolatier.</p>
        <ul class="list-disc list-inside text-lg ml-12  text-black mb-4 max-w-lg">
            <li>Niveau: 4</li>
            <li>Crebonummer: 25998</li>
            <li>Leerweg: BOL</li>
            <li>Locatie: Utrecht (Onderwijsboulevard, Daltonlaan 300)</li>
            <li>Schooljaar: 2024 - 2025</li>
        </ul>
        <p class="text-lg text-black mb-4 text-left">Om te kunnen starten met je aanmelding hebben we de volgende gegevens nodig:</p>
        <ul class="list-disc list-inside text-lg text-black mb-4 mo max-w-lg ml-12">
            <li>Burgerservicenummer (BSN). Dit kan je vinden op je identiteitsbewijs.</li>
            <li>Een geldig e-mailadres. Hiermee kunnen we met jou communiceren gedurende de aanmelding en de kennismaking.</li>
            <li>Roepnaam, geboortedatum en telefoonnummer.</li>
        </ul>

        <form action="#" method="post" class="w-full">
            <div class="mb-6">
                <label for="bsn" class="block text-gray-700">Burgerservicenummer</label>
                <input type="text" id="bsn" name="bsn" class="mt-1 block w-full h-8 rounded-md custom-input-bg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
            </div>
            <div class="mb-6 flex space-x-3">
                <div class="w-1/2">
                    <label for="email" class="block text-gray-700">E-mailadres</label>
                    <input type="email" id="email" name="email" class="mt-1 block w-full h-8 rounded-md custom-input-bg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                </div>
                <div class="w-1/2">
                    <label for="email_confirm" class="block text-gray-700">E-mailadres (ter controle)</label>
                    <input type="email" id="email_confirm" name="email_confirm" class="mt-1 block w-full h-8 rounded-md custom-input-bg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                </div>
            </div>
            <div class="mb-6 flex space-x-3">
                <div class="w-1/2">
                    <label for="firstname" class="block text-gray-700">Voornaam</label>
                    <input type="text" id="firstname" name="firstname" class="mt-1 block w-full h-8 rounded-md custom-input-bg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                </div>
                <div class="w-1/2">
                    <label for="lastname" class="block text-gray-700">Achternaam</label>
                    <input type="text" id="lastname" name="lastname" class="mt-1 block w-full h-8 rounded-md custom-input-bg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                </div>
            </div>
            <div class="mb-6">
                <label for="birthdate" class="block text-gray-700">Geboortedatum</label>
                <input type="date" id="birthdate" name="birthdate" class="mt-1 block w-full h-8 rounded-md custom-input-bg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
            </div>
            <div class="mb-6">
                <label for="phone" class="block text-gray-700">Mobiel nummer</label>
                <input type="tel" id="phone" name="phone" class="mt-1 block w-full h-8 rounded-md custom-input-bg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
            </div>
            <div class="mb-6">
                <label class="inline-flex items-center">
                    <input type="checkbox" class="form-checkbox text-indigo-600" required>
                    <span class="ml-2">Ik ga akkoord met de algemene voorwaarden.</span>
                </label>
            </div>
            <div class="mb-6"><span id="msgForm"></span></div>
            <div class="flex justify-center">
                <button type="submit" class="custom-button-bg text-white font-bold py-2 px-4 rounded hover:custom-button-bg">Verzend</button>
            </div>
        </form>
        <script src="/public/js/form.js"></script>








        <?php require_once __DIR__ . '/partials/_footer.php'; ?>