<!-- <nav class="navbar navbar-expand-lg navbar-dark bg-primary bg_blue"> -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->
<script type="text/javascript" src="<?= base_url('js/jquery.min.js') ?>"></script>
<script type="text/javascript" src="<?= base_url('js/bootstrap.min.js') ?>"></script>
<script type="text/javascript" src="<?= base_url('js/bootstrap.js') ?>"></script>

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>" />

<nav class="navbar navbar-expand-lg navbar-dark bg_blue">
    <div class="container">
        <a class="navbar-brand" href="<?= base_url() ?>">Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('anggaran') ?>">Anggaran</a>
                </li>
                <!-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        Dropdown
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="dkfhdifds">Penelitian</a>
                        <a class="dropdown-item" href="dlfsdf">PKM</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="dkfdsf">Something else here</a>
                    </div>
                </li> -->
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('penelitian') ?>">Penelitian</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('pkm') ?>">PKM</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('reimburse') ?>">Reimburse</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('profile') ?>">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('news') ?>">News</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('about') ?>">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('contact') ?>">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('faqs') ?>">Faqs</a>
                </li>

            </ul>
        </div>
    </div>
</nav>

<style>
    .bg_blue {
        background-color: #033276;
    }
</style>