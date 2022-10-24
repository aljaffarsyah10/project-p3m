<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>
<div class="container my-5">

    <a href="<?= base_url('jenis_penelitian') ?>" class="mb-5 btn btn-sm btn-primary">Ajukan Penelitian</a>
    <a href="<?= base_url('tesread_penelitian') ?>" class="mb-5 btn btn-sm btn-primary">Lihat test read penelitianx</a>

    <div class="row">
        <div class="col-md-12">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">ID Penelitian</th>
                        <th scope="col">Jenis</th>
                        <th scope="col">Tanggal Pengajuan</th>
                        <th scope="col">Judul Penelitian</th>
                        <th scope="col">Status</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td>@mdo</td>
                        <td>@mdo</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-primary">Detail</a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                        <td>@mdo</td>
                        <td>@mdo</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-primary">Detail</a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td colspan="2">Larry the Bird</td>
                        <td>@twitter</td>
                        <td>@mdo</td>
                        <td>@mdo</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-primary">Detail</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endsection() ?>