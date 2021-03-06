<div class="container mt-5">
    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash() ?>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <div class="d-flex justify-content-end">
                <a href="" class="btn btn-success mb-2 tampilModalTambah" data-bs-toggle="modal"
                    data-bs-target="#formModal">Tambah
                    data Mahasiswa</a>
            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-lg-6">
            <form action="<?= BASEURL; ?>/mahasiswa/cari"
                method="POST">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Cari Mahasiswa" name="keyword" id="keyword"
                        autocomplete="off">
                    <button class="btn btn-primary" type="submit" id="cari">Cari</button>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <h3 class="mb-3">Daftar Mahasiswa</h3>
            <ul class="list-group">
                <?php foreach ($data["mhs"] as $mhs) : ?>
                <li class="list-group-item">
                    <?= $mhs["nama"]; ?>
                    <a href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs["id"]; ?>"
                        class="badge bg-danger float-end ms-2" onclick="return confirm('Yakin?');">Hapus</a>
                    <a href="<?= BASEURL; ?>/mahasiswa/ubah/<?= $mhs["id"]; ?>"
                        class="badge bg-success float-end ms-2 tampilModalUbah" data-bs-toggle="modal"
                        data-bs-target="#formModal"
                        data-id="<?= $mhs["id"]; ?>">Ubah</a>
                    <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs["id"]; ?>"
                        class="badge bg-primary float-end ms-2">Detail</a>
                </li>

                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>

<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="formModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="formModalLabel">Tambah Data Mahasiswa</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?= BASEURL; ?>/mahasiswa/tambah"
                method="POST">
                <input type="hidden" name="id" id="id">
                <div class="modal-body">
                    <label for="nama" class="form-label">Nama</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" id="nama" name="nama">
                    </div>
                    <label for="nrp" class="form-label">NRP</label>
                    <div class="input-group mb-3">
                        <input type="number" class="form-control" id="nrp" name="nrp">
                    </div>
                    <label for="email" class="form-label">Email</label>
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <label for="jurusan" class="form-label">Jurusan</label>
                    <select class="form-select" aria-label="Default select example" id="jurusan" name="jurusan">
                        <option selected>Pilih Jurusan</option>
                        <option value="Teknik Informatika">Teknik Informatika</option>
                        <option value="Teknik Industri">Teknik Industri</option>
                        <option value="Teknik Pangan">Teknik Pangan</option>
                        <option value="Teknik Planologi">Teknik Planologi</option>
                        <option value="Teknik Lingkungan">Teknik Lingkungan</option>
                    </select>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Tambah Data</button>
                </div>
            </form>
        </div>
    </div>
</div>