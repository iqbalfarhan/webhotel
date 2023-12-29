<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.4.24/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <?php include('partial/navbar.php') ?>

    <div class="container w-full max-w-5xl mx-auto p-6 space-y-6">
    <?php
    switch ($_GET['page']) {
        case 'home':
            include('pages/home.php');
            break;

        case 'about':
            include('pages/about.php');
            break;
        
        default:
            include('pages/notfound.php');
            break;
    }
    ?>
    </div>

    <?php include('partial/footer.php') ?>
</body>
</html>