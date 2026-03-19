<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/css/main.css" rel="stylesheet">
    <title>Test IronSoftware</title>
</head>

<body class="bg-black">
    <nav>
        <div class="bg-black">
                <img src="<?= base_url('images/LOGO.png') ?>" alt="Logo" />
            </div>
        </div>
    </nav>

    <main class="min-vh-100">
        <div class="container mt-5">
            <?= $this->renderSection('content') ?>
        </div>
    </main>
</body>

</html>