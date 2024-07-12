<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
        </nav>
        <div class="container-fluid">
            <h2>Edit Data Puskesmas</h2>
            <form action="<?= site_url('tabel/update/' . $puskesmas->id); ?>" method="post"
                enctype="multipart/form-data">
                <div class="form-group">
                    <label for="nama">Nama:</label>
                    <input type="text" class="form-control" name="nama" id="nama" value="<?= $puskesmas->nama; ?>"
                        required>
                </div>

                <div class="form-group">
                    <label for="deskripsi">Deskripsi:</label>
                    <textarea class="form-control" name="deskripsi" id="deskripsi" rows="3"
                        required><?= $puskesmas->deskripsi; ?></textarea>
                </div>

                <div class="form-group">
                    <label for="latitude">Latitude:</label>
                    <input type="text" class="form-control" name="latitude" id="latitude"
                        value="<?= $puskesmas->latitude; ?>" required>
                </div>

                <div class="form-group">
                    <label for="longitude">Longitude:</label>
                    <input type="text" class="form-control" name="longitude" id="longitude"
                        value="<?= $puskesmas->longitude; ?>" required>
                </div>

                <div class="form-group">
                    <label for="foto">Foto (biarkan kosong jika tidak ingin mengubah):</label>
                    <input type="file" class="form-control" aria-describedby="inputGroupFileAddon04" aria-label="Upload"
                        name="foto" id="foto">
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
            </form>
            <br>
        </div>
    </div>
</div>