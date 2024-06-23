<?php require_once __DIR__ . '/partials/_header.php'; ?>

<body>
    <div class="inner">
        <section id="userInfo">
            <h1>User: <?php echo $title; ?></h1>
        </section>
        <section id="SubmissionTable">
            <h2>Inscrhijvingen:</h2>
            <div class="innertable">
                <table>
                    <tr>
                        <th>ID</th>
                        <th>email</th>
                        <th>naam</th>
                        <th>geboorte</th>
                        <th>BSN</th>
                        <th>telefoonNummer</th>
                    </tr>
                    <?php echo $subTable; ?>
                </table>
            </div>
        </section>
        <section id="ContactTable">
            <h2>Contact Vragen:</h2>
            <div class="innertable">

                <table>
                    <tr>
                        <th>Id</th>
                        <th>email</th>
                        <th>vraag</th>
                    </tr>
                    <?php echo $contactTable; ?>
                </table>
            </div>
        </section>
    </div>
</body>

<?php require_once __DIR__ . '/partials/_footer.php'; ?>