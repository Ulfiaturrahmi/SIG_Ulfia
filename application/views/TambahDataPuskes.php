<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
        </nav>

        <div class="container-fluid">
            <h1 class="h3 mb-2 text-gray-800">Tambah Puskesmas</h1>

            <form action="<?= base_url('tabel/store'); ?>" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="nama">Nama:</label>
                    <input type="text" class="form-control" name="nama" id="nama" required>
                </div>

                <div class="form-group">
                    <label for="deskripsi">Deskripsi:</label>
                    <textarea class="form-control" name="deskripsi" id="deskripsi" rows="3" required></textarea>
                </div>

                <div class="form-group">
                    <label for="latitude">Latitude:</label>
                    <input type="text" class="form-control" name="latitude" id="latitude" required>
                </div>

                <div class="form-group">
                    <label for="longitude">Longitude:</label>
                    <input type="text" class="form-control" name="longitude" id="longitude" required>
                </div>

                <div class="form-group">
                    <label for="foto">Foto:</label>
                    <input type="file" class="form-control" id="inputGroupFile04 foto"
                        aria-describedby="inputGroupFileAddon04" aria-label="Upload" name="foto">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            <br>

        </div>
    </div>
</div>