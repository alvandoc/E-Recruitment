<main class="main-content ">
    <div class="container my-3 py-3">
        <div class="row mb-5">
            <div class="col mt-lg-0 mt-4">
                <div class="card mt-4" id="basic-info">
                    <form action="<?=BASEURL?>psikotest/tambahSoal">
                        <div class="card-header">
                            <h5>Tambah Soal Psikotest</h5>
                        </div>
                        <div class="card-body pt-0">
                            <div class="row">
                                <div class="col">
                                    <h4>Soal</h4>
                                    <div class="input-group input-group-static">
                                        <textarea name="soal" id="" cols="30" rows="5" placeholder="Tambah Soal" class="form-control"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <h4>Pilihan Ganda</h4>
                                <div class="col-3">
                                    <div class="input-group input-group-static">
                                        <label>Pilihan A</label>
                                        <textarea name="" id="" cols="30" rows="5" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="input-group input-group-static">
                                        <label>Pilihan B</label>
                                        <textarea name="" id="" cols="30" rows="5" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="input-group input-group-static">
                                        <label>Pilihan C</label>
                                        <textarea name="" id="" cols="30" rows="5" class="form-control"></textarea></div>
                                </div>
                                <div class="col-3">
                                    <div class="input-group input-group-static">
                                        <label>Pilihan D</label>
                                        <textarea name="" id="" cols="30" rows="5" class="form-control"></textarea>                                </div>
                                </div>
                            </div>


                            <div class="row">
                                <h4></h4>
                                <div class="col">
                                    <div class="input-group input-group-static">
                                        <label>Jawaban benar</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <div class="card-body">
                                        <button class="btn btn-github" id="submit" type="submit" name="tambah">Submit
                                        </button>
                                        <button class="btn btn-youtube" type="reset">Reset</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
    </div>
</main>
