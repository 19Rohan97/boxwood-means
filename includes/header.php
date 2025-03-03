<?php include 'includes/config.php'; ?>
<!doctype html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>My PHP Project</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:ital,wght@0,200..900;1,200..900&display=swap"
        rel="stylesheet">

    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <style type="text/tailwindcss">
        @theme {
        --color-primary: #008998;
        --color-boxwood-dark-teal: #04303F;
        --color-secondary: #62B200;
        --color-accent: #FF8A00;
        --color-dark: #111111;
        --color-light: #D2D2D2;
        --color-lighter: #F6F6F6;

        --font-source-sans-pro: "Source Code Pro", monospace;
      }
      @layer utilities {
    .max-w-1440 {
      max-width: 1440px; /* Replace with your custom value */
    }
    .max-w-650 {
      max-width: 650px; /* Replace with your custom value */
    }
    .min-h-vh {
      min-height: calc(100vh - 80px);
    }
  }
    </style>

    <!-- Favicon -->
    <link rel="icon" href="<?php echo ASSETS_PATH; ?>/images/favicon.ico" type="image/x-icon">
</head>

<body class="bg-lighter">

    <?php include 'includes/navbar.php'; ?>