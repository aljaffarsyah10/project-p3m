<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>

<?php if (isset($validation)) { ?>
    <div class="alert alert-danger" role="alert">
        <?php echo $validation->listErrors() ?>
    </div>
<?php } ?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <form action="<?php echo base_url('post/store') ?>" method="POST">
                <div class="mb-3 mt-3">
                    <label for="judulPenelitian" class="form-label">Judul Penelitian</label>
                    <input type="text" class="form-control" id="judul_penelitian" placeholder="Input Judul Penelitian" name="judul_penelitian">
                </div>

                <label for="judulPenelitian" class="form-label fw-bold">Ketua Tim Peneliti</label>
                <br>
                <label for="nama" class="form-label">Nama Lengkap</label>
                <div class="mb-3 mt-3">
                    <input type="text" class="form-control" id="nama_peneliti" placeholder="Input nama lengkap" name="nama_peneliti">
                </div>
                <div class="mb-3 mt-3">
                    <label for="jabatanFungsional" class="form-label">Jabatan Fungsional</label>
                    <input type="text" class="form-control" id="jabatan" placeholder="Input Jabatan Fungsional" name="jabatan">
                </div>
                <div class="mb-3 mt-3">
                    <label for="nohp" class="form-label">Nomor HP</label>
                    <input type="text" class="form-control" id="no_hp" placeholder="Input Nomor HP" name="no_hp">
                </div>
                <div class="mb-3 mt-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Input email" name="email">
                </div>




                <div class="form-check mb-3">
                    <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="remember"> Remember me
                    </label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

<?= $this->endsection() ?>