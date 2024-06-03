<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($pageTitle) ? "GALISpace | " . $pageTitle : "Default Title"; ?></title>

    <!-- Styles -->
    <link rel="stylesheet" href="/css/skeuos.css">
    <link rel="stylesheet" href="/css/global.css">
    <?php echo isset($pageStyles) ? '<link rel="stylesheet" href="' . $pageStyles . '"></style>' : ""; ?>
    

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="/images/logos/star.png">
</head>

<body>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

