<div class="main-content">

    <div class="container my-3">
        <div class="card card-frame ">
            <div class="card-body">
            </div>
        </div>
    </div>


    <!-- dashboard profile and Status Lamaran-->
    <div class="container my-4">
        <div class="nav-wrapper position-relative end-0">
            <ul class="nav nav-pills nav-fill p-1" role="tablist">
                <li class="nav-item">
                    <a class="nav-link mb-0 active" id="tabs-iconpricing-tab-1" data-bs-toggle="tab" href="#dashboard"
                       role="tab" aria-controls="monthly" aria-selected="true">
                        Dashboard Profile
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mb-0" id="tabs-iconpricing-tab-2" data-bs-toggle="tab" href="#profile" role="tab"
                       aria-controls="annual" aria-selected="false">
                        Status Lamaran
                    </a>
                </li>
            </ul>
        </div>
    </div>


    <!-- Main Data -->
    <div class="container mb-7">
        <div class="tab-content">
            <div class="tab-pane active" id="dashboard">
                <div class="row">
                    <div class="col-3 removePhone">
                        <div class="col">
                            <div class="card border shadow ">
                                <div class="card-header card-header-primary headerMain">
                                    <h5>Kelengkapan Profile</h5>
                                </div>
                                <div class="card-body">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">
                                            <label>Data Pribadi</label>
                                            <i class="fa fa-solid fa-check" style="color: #005eff"></i>
                                        </li>
                                        <li class="list-group-item">
                                            <label for="">Latar Pendidikan</label>

                                            <i class="fa fa-solid fa-check" style="color: #005eff"></i>
                                        </li>
                                        <li class="list-group-item">
                                            <label for="">Pengalaman Kerja</label>
                                            <i class="fa fa-solid fa-check" style="color: #005eff"></i>
                                        </li>
                                        <li class="list-group-item">
                                            <label for="">Dokumen Wajib </label>
                                            <i class="fa fa-solid fa-check" style="color: #005eff"></i>
                                        </li>
                                        <li class="list-group-item">
                                            <label for="">Dokumen Pendukung</label>
                                            <i class="fa fa-solid fa-check" style="color: #005eff"></i>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-9 col-sm-12 mb-5">
                        <div class="col">
                            <div class="card border border-dashed border-3">
                                <div class="card-header card-header-primary text-center">
                                    <div class="card-icon">
                                        <i class="material-icons">library_books</i>
                                    </div>
                                    <h4 class="card-title">Data Pribadi</h4>
                                </div>
                                <div class="card-body ">
                                    <form action="<?= BASEURL ?>bioUser/insertBioData" id="myForm"
                                          class="text-start"
                                          method="POST">
                                        <div class="row ">
                                            <div class="col-sm-12 col-lg-6">
                                                <div class="input-group input-group-static">
                                                    <label for="ktp" class="bmd-label-floating">NIK KTP</label>
                                                    <input type="text" required="required" max="6" name="nikKtp"
                                                           class="form-control"
                                                           id="ktp"
                                                           placeholder="Input Here">
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-lg-6">
                                                <div class="input-group input-group-static">
                                                    <label for="jenisKl">Jenis kelamin</label>
                                                    <select required="required" class="form-control selectpicker"
                                                            title="Jenis Kelamin"
                                                            name="jenisKl"
                                                            data-style="btn btn-link" id="jenisKl">
                                                        <option>laki-Laki</option>
                                                        <option>Perempuan</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class=" col-sm-12 col-md-6">
                                                <div class="input-group input-group-static ">
                                                    <label for="nomor">Nomor Hp</label>
                                                    <input required="required" class="form-control" type="nomor"
                                                           id="nomor"
                                                           name="nomorHp">
                                                </div>
                                            </div>

                                            <div class=" col-sm-12 col-md-6">
                                                <div class="input-group input-group-static">
                                                    <label for="datetimepicker3">Tanggal Lahir</label>
                                                    <input type="date" required="required"
                                                           class="form-control datetimepicker"
                                                           id="datetimepicker3"
                                                           name="tglLahir" placeholder="Input Here">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col">

                                                <div class="input-group input-group-static">
                                                    <label for="alamat">Alamat</label>
                                                    <textarea class="form-control" id="alamat" required="required"
                                                              rows="3" name="alamat"
                                                    ></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="card-body">
                                                    <button class="btn btn-github " type="submit"
                                                            name="submit">Submit
                                                    </button>
                                                    <button class="btn btn-youtube" type="reset">Reset</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="col mt-3">
                            <div class="card card border border-dashed border-3">
                                <div class="card-header card-header-primary text-center">
                                    <div class="card-icon">
                                        <i class="material-icons">library_books</i>
                                    </div>
                                    <div class="card-title d-flex flex-row justify-content-between ">
                                        <h4>Latar Belakang Pendidikan</h4>
                                        <!-- Trigger Modal Tambah Pendidikan -->
                                        <button type="button" class="btn btn-tumblr btn-round" data-bs-toggle="modal"
                                                data-bs-target="#addPendidikan">
                                            Tambah Pendidikan
                                        </button>
                                    </div>

                                </div>


                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table
                                                class="display table table-striped table-hover"

                                        >
                                            <thead>
                                            <tr>
                                                <th>Pendidikan</th>
                                                <th>Nama Universitas / Sekolah</th>
                                                <th>Jurusan</th>
                                                <th>IPK / Nilai Akhir</th>
                                                <th>Tahun Mulai</th>
                                                <th>Tahun Keluar</th>
                                            </tr>
                                            </thead>

                                            <tbody>
                                            <tr>
                                                <td>Tiger Nixon</td>
                                                <td>System Architect</td>
                                                <td>Edinburgh</td>
                                                <td>61</td>
                                                <td>2011/04/25</td>
                                                <td>$320,800</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col mt-3">
                            <div class="card card border border-dashed border-3">
                                <div class="card-header card-header-primary text-center">
                                    <div class="card-icon">
                                        <i class="material-icons">library_books</i>
                                    </div>
                                    <div class="card-title d-flex flex-row justify-content-between">
                                        <h4 class="card-title">Riwayat pekerjaan</h4>
                                        <!--                            Trigger Button Modal Tambah Latar Belakang Pekerjaan-->
                                        <button type="button" class="btn btn-tumblr btn-round" data-bs-toggle="modal"
                                                data-bs-target="#addPekerjaan">
                                            Tambah Pengalaman
                                        </button>
                                    </div>

                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table
                                                class="display table table-striped table-hover"
                                                id="example"
                                        >
                                            <thead>
                                            <tr>
                                                <th>Perusahaan</th>
                                                <th>Tanggal Masuk</th>
                                                <th>Tanggal Keluar</th>
                                                <th>Posisi</th>
                                            </tr>
                                            </thead>

                                            <tbody>
                                            <tr>
                                                <td>Tiger Nixon</td>
                                                <td>System Architect</td>
                                                <td>Edinburgh</td>
                                                <td>61</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col mt-3">
                            <div class="card card border border-dashed border-3">
                                <div class="card-header card-header-primary text-center">
                                    <div class="card-icon">
                                        <i class="material-icons">library_books</i>
                                        <h4 class="card-title">Dokumen Wajib</h4>
                                        <div class="card-body">
                                            <form id="myForm" action="<?= BASEURL ?>bioUser/addDokumenWajib"
                                                  enctype="multipart/form-data" method="POST">
                                                <div class="row">
                                                    <div class="col-sm-12 col-lg-6">
                                                        <div class="input-group input-group-outline">
                                                            <div class="btn btn-tumblr">
                                                                <label for="nikKtp" class="text-white">Curiculum
                                                                    Vitae</label>
                                                                <input
                                                                        class="form-control-file form-control-sm"
                                                                        name="ktp_file"
                                                                        type="file">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-lg-6">
                                                        <div class="input-group input-group-outline">
                                                            <div class="btn btn-tumblr">
                                                                <label for="nikKtp" class="text-white">Kartu Tanda
                                                                    Penduduk</label>
                                                                <input
                                                                        class="form-control-file form-control-sm"
                                                                        name="ktp_file"
                                                                        type="file">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="row">
                                                    <div class="col-sm-12 col-lg-6">
                                                        <div class="input-group input-group-outline my-3">
                                                            <div class="btn btn-tumblr">
                                                                <label class="form-check-label"><span
                                                                            class="text-white">Lampiran Ijazah</span></label>
                                                                <input
                                                                        class="form-control-sm form-control-file"
                                                                        name="ktp_file"
                                                                        type="file">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-lg-6">
                                                        <div class="input-group input-group-outline my-3">
                                                            <div class="btn btn-tumblr">
                                                                <label class="form-check-label"><span
                                                                            class="text-white">Transkrip Nilai</span></label>
                                                                <input
                                                                        class="form-control-sm form-control-file"
                                                                        name="transkrip_file"
                                                                        type="file">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-sm-12 col-lg-6">
                                                        <div class="input-group input-group-outline my-3">
                                                            <div class="btn btn-tumblr">
                                                                <label class="form-check-label"><span
                                                                            class="text-white">Surat Keterangan Polisi</span></label>
                                                                <input
                                                                        class="form-control-sm form-control-file"
                                                                        name="transkrip_file"
                                                                        type="file">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-lg-6">
                                                        <div class="input-group input-group-outline my-3">
                                                            <div class="btn btn-tumblr">
                                                                <label class="form-check-label"><span
                                                                            class="text-white">Nomor Wajib Pajak</span></label>
                                                                <input
                                                                        class="form-control-sm form-control-file"
                                                                        name="npwp_file"
                                                                        type="file">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="card-body">
                                                            <button class="btn btn-github" id="submit" type="submit"
                                                                    name="submit">Submit
                                                            </button>
                                                            <button class="btn btn-youtube" type="reset">Reset</button>
                                                        </div>
                                                    </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col mt-3">
                        <div class="card card border border-dashed border-3">
                            <div class="card-header card-header-primary text-center" id="data">
                                <div class="card-icon">
                                    <i class="material-icons">library_books</i>
                                </div>

                                <h4 class="card-title">Dokumen Pendukung</h4>

                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-12 col-lg-6">
                                            <div class="input-group input-group-outline my-3">
                                                <div class="btn btn-tumblr">
                                                    <label class="form-check-label"><span class="text-white">Surat lamaran</span></label>
                                                    <input
                                                            class="form-control-sm  form-control-file"
                                                            type="file">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-lg-6">
                                            <div class="input-group input-group-outline my-3">
                                                <div class="btn btn-tumblr">
                                                    <label class="form-check-label"><span class="text-white">Surat Izin Mengemudi</span></label>
                                                    <input
                                                            class="form-control-sm  form-control-file"
                                                            type="file">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-12 col-lg-6">
                                            <div class="input-group input-group-outline my-3">
                                                <button class="btn btn-tumblr">
                                                    <label class="form-check-label"><span class="text-white">Pasport Kewarganegaraan</span></label>
                                                    <input
                                                            class="form-control-sm form-control-file"
                                                            type="file">
                                                </button>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-lg-6">
                                            <div class="input-group input-group-outline my-3">
                                                <button class="btn btn-tumblr">
                                                    <label class="form-check-label"><span class="text-white">Surat Vaksin</span></label>
                                                    <input
                                                            class="form-control-sm  form-control-file"
                                                            type="file">
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-12 col-lg-6">
                                            <div class="input-group input-group-outline my-3">
                                                <button class="btn btn-tumblr">
                                                    <label class="form-check-label"><span class="text-white">Surat Pernyataan Orang tua</span></label>
                                                    <input
                                                            class="form-control-sm  form-control-file"
                                                            type="file">
                                                </button>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-lg-6">
                                            <div class="input-group input-group-outline my-3">
                                                <button class="btn btn-tumblr">
                                                    <label class="form-check-label"><span class="text-white">Cover buku tabungan</span></label>
                                                    <input
                                                            class="form-control-sm  form-control-file"
                                                            type="file">
                                                </button>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="card-body">
                                                <button class="btn btn-github" id="submit" type="submit" name="submit">
                                                    Submit
                                                </button>
                                                <button class="btn btn-youtube" type="reset">Reset</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane py-2" id="profile">
            <div class="container">
                <div class="card vh-100 p-3">
                    <div class="row">
                        <div class="col-3">
                            <select class="form-control selectpicker" title="Judul Lowongan"
                                    name="jenisKl"
                                    data-style="btn btn-link" id="jenisKl">
                                <option value="" disabled selected>Judul Lowongan</option>
                                <option>laki-Laki</option>
                                <option>Perempuan</option>
                            </select>
                        </div>
                        <div class="col-9">
                            <div class="row">
                                <div class="searchbar">
                                    <div class="col d-flex">
                                        <div class="input-group input-group-outline">
                                            <label for="" class="material-icons-round form-label">search</label>
                                            <input type="text" class="form-control" placeholder="         Cari Dsiini">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="card">
                                        <div class="card-header"><h1>Nama Lowongan</h1>
                                            <span class="badge badge-success">Shortlisted</span> . <span class="small">diupdate terakhir kali 8 Januari</span>
                                        </div>
                                        <div class="card-body">
                                            <div class="bg-gradient-dark shadow-primary border-radius-lg pt-4 pb-3">
                                                <div class="multisteps-form__progress">
                                                    <button class="multisteps-form__progress-btn js-active"
                                                            type="button" title="Product Info">
                                                        1. Lamaran Terkirim
                                                    </button>
                                                    <button class="multisteps-form__progress-btn" type="button"
                                                            title="Media">2.Shortlisted
                                                    </button>
                                                    <button class="multisteps-form__progress-btn" type="button"
                                                            title="Socials">3. Psikotest
                                                    </button>
                                                    <button class="multisteps-form__progress-btn" type="button"
                                                            title="Pricing">4. Interview
                                                    </button>
                                                    <button class="multisteps-form__progress-btn" type="button"
                                                            title="Pricing">5. Hasil Akhir
                                                    </button>
                                                </div>
                                            </div>

                                            <form class="multisteps-form__form">

                                                <div class="multisteps-form__panel pt-3 border-radius-xl bg-white js-active"
                                                     data-animation="FadeIn">
                                                    <h5 class="font-weight-bolder">Lamaran Terkirim</h5>
                                                    <div class="multisteps-form__content">
                                                        <p>
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                            Alias animi cupiditate debitis, deleniti deserunt
                                                            dignissimos dolorum enim eum expedita fugiat fugit incidunt
                                                            ipsum iste laboriosam minus, nam nemo non perspiciatis
                                                            placeat quia quidem quo repudiandae similique sunt suscipit
                                                            ullam ut! Aspernatur at dicta, est fugit libero
                                                            necessitatibus odio qui quis quod totam. Animi architecto
                                                            assumenda aut debitis deleniti dolorem dolorum esse et,
                                                            excepturi exercitationem expedita explicabo harum, id illo
                                                            illum impedit ipsam modi molestias nam nulla numquam, optio
                                                            possimus quibusdam sapiente sed tempora tempore? Autem eaque
                                                            ex explicabo, facilis hic impedit iusto, quis quisquam quo
                                                            sequi sint ut velit vero?
                                                        </p>
                                                    </div>
                                                </div>

                                                <div class="multisteps-form__panel pt-3 border-radius-xl bg-white"
                                                     data-animation="FadeIn">
                                                    <h5 class="font-weight-bolder">Shortlisted</h5>
                                                    <div class="multisteps-form__content">
                                                        <p>
                                                            <a href="<?= BASEURL ?>ujian">Link Psikotest</a>
                                                        </p>>
                                                    </div>
                                                </div>

                                                <div class="multisteps-form__panel pt-3 border-radius-xl bg-white"
                                                     data-animation="FadeIn">
                                                    <h5 class="font-weight-bolder">Psikotest</h5>
                                                    <div class="multisteps-form__content">
                                                        <p>
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                            Amet commodi culpa cumque debitis dolor dolore, doloremque
                                                            ducimus eaque error ex fuga hic impedit laborum magni minus
                                                            molestiae neque nostrum odio optio perspiciatis porro
                                                            praesentium quae reprehenderit rerum unde velit veniam
                                                            vitae. Accusamus aspernatur culpa exercitationem incidunt
                                                            nisi odio omnis qui repellendus sed tenetur. Cumque dolores
                                                            dolorum eaque enim eum id iure nam, nemo non quidem
                                                            reiciendis sapiente tempora voluptas! Blanditiis eveniet
                                                            inventore libero modi non praesentium quae quia, tempore! A
                                                            accusamus aspernatur autem consequatur debitis et illo
                                                            itaque iusto maiores natus porro quasi quidem, sapiente
                                                            temporibus voluptatibus. Dignissimos, modi similique!
                                                        </p>
                                                    </div>
                                                </div>

                                                <div class="multisteps-form__panel pt-3 border-radius-xl bg-white h-100"
                                                     data-animation="FadeIn">
                                                    <h5 class="font-weight-bolder">Interview</h5>
                                                    <div class="multisteps-form__content mt-3">
                                                        <p>
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab
                                                            aperiam autem consectetur dicta dignissimos dolor dolorum ea
                                                            et, eum excepturi, in ipsam itaque molestiae nemo nesciunt
                                                            numquam praesentium provident quaerat quibusdam quis
                                                            recusandae reprehenderit voluptas. Beatae blanditiis
                                                            consequatur, dolorum esse magni molestiae repellat tempora!
                                                            Assumenda aut consequatur cumque, deserunt dicta dignissimos
                                                            distinctio doloribus eligendi explicabo facere harum
                                                            inventore itaque iure magnam maiores nam nobis odit officiis
                                                            quam quasi qui quidem quis, quisquam repudiandae sapiente
                                                            sequi sit voluptatem! Aut eveniet officiis saepe soluta
                                                            totam. Ad animi aspernatur delectus eligendi et fuga id
                                                            illum labore laboriosam libero nihil placeat, possimus sed
                                                            ullam.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="multisteps-form__panel pt-3 border-radius-xl bg-white h-100"
                                                     data-animation="FadeIn">
                                                    <h5 class="font-weight-bolder">Hasil Akhir</h5>
                                                    <div class="multisteps-form__content mt-3">
                                                        <p>
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. A
                                                            adipisci aliquam at autem commodi dignissimos doloribus
                                                            ducimus eius fugiat itaque iusto, laboriosam, nam nemo
                                                            numquam optio perspiciatis porro, provident quidem saepe
                                                            sapiente sint sunt suscipit. Deleniti eaque incidunt odio
                                                            quasi quos vel voluptatibus? Aliquid architecto dolor
                                                            explicabo incidunt nobis. Accusantium aliquam, animi commodi
                                                            consectetur culpa dignissimos doloribus eaque et hic
                                                            incidunt iure labore laudantium libero, praesentium, quidem
                                                            repellendus sapiente soluta ut voluptate voluptatem. A
                                                            architecto cum cumque delectus deserunt dignissimos dolorem
                                                            eligendi eos esse exercitationem explicabo, ipsam laboriosam
                                                            libero maxime nobis numquam obcaecati, quis ratione sit
                                                            tempora vitae, voluptas voluptates!
                                                        </p>
                                                    </div>
                                                </div>
                                            </form>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

</div>
</div>