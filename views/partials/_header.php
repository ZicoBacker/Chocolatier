<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= isset($title) ? htmlspecialchars($title) : ''; ?> - Academie Choclatier</title>
  <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
  <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="/css/output.css">
  <?php if ($_SERVER['REQUEST_URI'] === '/') : ?>
    <link rel="stylesheet" href="/css/index.css"> <?php endif; ?>
  <?php if ($_SERVER['REQUEST_URI'] === '/Form') : ?>
    <link rel="stylesheet" href="/css/Form.css"> <?php endif; ?>
  <?php if ($_SERVER['REQUEST_URI'] === '/Academie') : ?>
    <link rel="stylesheet" href="/css/Academie.css"> <?php endif; ?>
  <?php if ($_SERVER['REQUEST_URI'] === '/About') : ?>
    <link rel="stylesheet" href="/css/About.css"> <?php endif; ?>
  <?php if ($_SERVER['REQUEST_URI'] === '/Game') : ?>
    <link rel="stylesheet" href="/css/game.css"> <?php endif; ?>
  <?php if ($_SERVER['REQUEST_URI'] === '/AdminPanel') : ?>
    <link rel="stylesheet" href="/css/Admin.css"> <?php endif; ?>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Shadows+Into+Light&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/06a2eca3f5.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-k6RqeWeci5ZR/Lv4MR0sA0FfDOMxxpwKA4NKGqv3xH5hQ3O2rKZ3OmN3BOu9DEhe" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Strait&display=swap" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="/css/style.css">
  <link rel="stylesheet" href="/css/nav.css">
  <link rel="stylesheet" href="/css/footer.css">
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            creme: '#FFFFE8',
            sugar: '#E4E4CC',
            alarm: '#FF0F00',
            pale: '#eab19b',
            pink: '#F5E4CB',
          }
        },
        screens: {
          'sm': '320px',
          'md': '768px',
          'lg': '1024px',
        }
      }
    }
  </script>
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

<body class="bg-creme">

  <header>
    <?php require_once __DIR__ . '/_nav.php'; ?>
  </header>