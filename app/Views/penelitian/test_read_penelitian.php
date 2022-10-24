<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>
<div class="container my-5">

    <a href="<?= base_url('jenis_penelitian') ?>" class="mb-5 btn btn-sm btn-primary">Ajukan Penelitian</a>

    <div class="row">
        <div class="col-md-12">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">Id.</th>
                        <th scope="col">Judul Penelitian</th>
                        <th scope="col">Nama Peneliti</th>
                        <th scope="col">Jabatan</th>
                        <th scope="col">Nomor HP</th>
                        <th scope="col">Email</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($penelitian as $key => $post) : ?>

                        <tr>
                            <td><?php echo $post['id_penelitian'] ?></td>
                            <td><?php echo $post['judul_penelitian'] ?></td>
                            <td><?php echo $post['nama_peneliti'] ?></td>
                            <td><?php echo $post['jabatan'] ?></td>
                            <td><?php echo $post['no_hp'] ?></td>
                            <td><?php echo $post['email'] ?></td>
                        </tr>

                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endsection() ?>