<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>P3M</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="<?= base_url('js/bootstrap.min.js') ?>"></script>
    <script type="text/javascript" src="<?= base_url('js/jquery.js') ?>"></script>
    <script type="text/javascript" src="<?= base_url('js/bootstrap.js') ?>"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>" />
</head>

<body>

    <?= $this->include('layout/navbar') ?>
    <?= $this->include('layout/header') ?>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <?= $this->renderSection('content') ?>
            </div>
            <div class="col-md-6">
                <?= $this->renderSection('contentside') ?>
            </div>
        </div>
    </div>

    <?= $this->include('layout/footer') ?>

    <!-- Jquery dan Bootsrap JS -->
    <script src="<?= base_url('js/jquery.min.js') ?>"></script>
    <script src="<?= base_url('js/bootstrap.min.js') ?>"></script>

</body>

</html>