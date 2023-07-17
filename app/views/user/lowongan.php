<!-- Main Data -->
<div class="main-content  my-5">

    <div class="container ">
        <div class="row">
            <div class="col-3">
                <div class="body-left">
                    <div class="row">
                        <h4 class="font-weight-bold ">Cari Lowongan</h4>
                        <div class="searchbar">
                            <div class="input-group input-group-outline">
                                <label class="material-icons-round form-label">search</label>
                                <input type="text" name="" id="search" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row my-4 ">
                        <h4>Kategori Pekerjaan</h4>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" name="fresh" id="customCheck1">
                            <label for="customCheck1" class="form-check-label text-dark">Fresh Graduate</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" name="fresh" id="customCheck2">
                            <label for="customCheck2" class="form-check-label text-dark">Magang</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" name="fresh" id="customCheck3">
                            <label for="customCheck3" class="form-check-label text-dark">mitra</label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-9">
                <div class="row">
                    <div class="col-12 body- ">
                        <div class="card">
                            <div class="card-header">
                                <span class="text-dark font-weight-bold">Menampilkan 10 Lowongan</span>
                            </div>
                        </div>
                    </div>

                    <?php foreach ($data['lowongan'] as $lowongan) { ?>
                        <div class="col-6 my-3">
                            <a href="<?= BASEURL ?>user_lowongan/apply/<?= $lowongan['id_lowongan'] ?>/<?= $_SESSION['id'] ?>">
                                <div class="card ">
                                    <div class="card-header">
                                        <div class="text-dark">

                                            <?= $lowongan['nama_lowongan'] ?>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="text-info font-weight-bold"><h5>Posisi
                                                : <?= $lowongan['posisi'] ?></h5>
                                        </div>
                                        <div class="text-info font-weight-bold"><h5>Kualifikasi
                                                : <?= $lowongan['kualifikasi'] ?></h5>
                                        </div>
                                        <div class="font-weight-bold link-dark"><p>Deskripsi
                                                : <?= substr($lowongan['posisi'], 0, 20) ?></p>
                                        </div>

                                    </div>
                                    <div class="card-footer">
                                        <div class="d-flex align-items-center py-1">
                                            <span class="material-icons">place</span>
                                            <div class="ms-2">
                                                <h6 class="text-sm font-weight-normal my-auto">
                                                    Jakarta . <?= $lowongan['created_at'] ?>
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php } ?>


                </div>
            </div>
        </div>
    </div>

</div>