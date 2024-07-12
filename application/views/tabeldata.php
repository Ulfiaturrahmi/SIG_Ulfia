<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
        </nav>

        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-2 text-gray-800">Kelola Data Puskesmas</h1>
                <a href="<?= site_url('tabel/create') ?>" class="btn btn-primary">Tambah Puskesmas</a>

            </div>

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Puskesmas Tanah Laut</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table " id="dataTable">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Deskripsi</th>
                                    <th>Latitude</th>
                                    <th>Longitude</th>
                                    <th>Foto</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <style>
                            .img-thumbnail {
                                object-fit: cover;
                                width: 100px;
                                height: 60px;
                            }
                            </style>
                            <tbody>
                                <?php foreach ($puskesmas as $p): ?>
                                <tr>
                                    <td><?= $p->nama; ?></td>
                                    <td><?= $p->deskripsi; ?></td>
                                    <td><?= $p->latitude; ?></td>
                                    <td><?= $p->longitude; ?></td>
                                    <td><img src="<?= base_url('image/foto/' . $p->id); ?>" alt="Foto Puskesmas"
                                            class="img-thumbnail"></td>
                                    <td>
                                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                            <a href="<?= base_url('tabel/edit/' . $p->id); ?>"
                                                class="btn btn-warning btn-circle btn-sm">
                                                <i class="fa fa-pencil-alt"></i>
                                            </a>
                                            <button class="btn btn-danger btn-circle btn-sm delete-button"
                                                data-bs-toggle="modal" data-bs-target="#deleteModal">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <?php endforeach; ?>


                            </tbody>

                        </table>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- Delete Confirmation Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel">Konfirmasi Penghapusan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Apakah Anda yakin ingin menghapus data ini?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <a href="<?= base_url('tabel/delete/' . $p->id); ?>" id="deleteConfirmButton"
                    class="btn btn-danger">Hapus</a>
            </div>
        </div>
    </div>
</div>