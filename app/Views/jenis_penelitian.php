<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>
<div class="container-fluid">
    <div class="row m-3">
        <div class="col-sm-3 col-md-6 col-lg-4">
            <a href="<?= base_url('form_penelitian/1') ?>" class="container p-5 my-3 bg-secondary fw-bold btn btn-sm">Penelitian Mandiri</a>
        </div>
        <div class="col-sm-3 col-md-6 col-lg-4">
            <a href="<?= base_url('form_penelitian/2') ?>" class="container p-5 my-3 bg-secondary fw-bold btn btn-sm">Penelitian Semi Mandiri</a>
        </div>
        <div class="col-sm-3 col-md-6 col-lg-4">
            <a href="<?= base_url('form_penelitian/3') ?>" class="container p-5 my-3 bg-secondary fw-bold btn btn-sm">Penelitian Didanai Institusi</a>
        </div>
        <div class="col-sm-3 col-md-6 col-lg-4">
            <a href="<?= base_url('form_penelitian/4') ?>" class="container p-5 my-3 bg-secondary fw-bold btn btn-sm">Penelitian Institusi</a>
        </div>
        <div class="col-sm-3 col-md-6 col-lg-4">
            <a href="<?= base_url('form_penelitian/5') ?>" class="container p-5 my-3 bg-secondary fw-bold btn btn-sm">Penelitian Kerja Sama</a>
        </div>

    </div>
</div>

<?= $this->endsection() ?>