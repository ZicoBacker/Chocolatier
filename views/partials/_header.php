<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= isset($title) ? htmlspecialchars($title) : ''; ?> - Academie Choclatier</title>
    <link rel= "stylesheet" href= "https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css" >
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="/css/output.css">
    <?php if($_SERVER['REQUEST_URI'] === '/'): ?><link rel="stylesheet" href="/css/index.css"> <?php endif; ?>   
    <?php if($_SERVER['REQUEST_URI'] === '/Form'): ?><link rel="stylesheet" href="/css/Form.css"> <?php endif; ?>
    <?php if($_SERVER['REQUEST_URI'] === '/Academie'): ?><link rel="stylesheet" href="/css/Academie.css"> <?php endif; ?>
    <?php if($_SERVER['REQUEST_URI'] === '/AboutUs'): ?><link rel="stylesheet" href="/css/AboutUs.css"> <?php endif; ?>
    <?php if($_SERVER['REQUEST_URI'] === '/Game'): ?><link rel="stylesheet" href="/css/game.css"> <?php endif; ?>
    <link rel="stylesheet" href="/css/nav.css">
    <link rel="stylesheet" href="/css/footer.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Shadows+Into+Light&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/06a2eca3f5.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .custom-bg {
            background-color: #FDF4E4;
        }
        .custom-input-bg {
            background-color: #D2B49B;
        }
        .custom-button-bg {
            background-color: #F4A460;
        }
        .custom-button-bg:hover {
            background-color: #E08E3C;
        }
    </style>
</head>
<body class= "flex flex-col min-h-screen relative">




<header>
    <?php require_once __DIR__. '/_nav.php'; ?>
</header>