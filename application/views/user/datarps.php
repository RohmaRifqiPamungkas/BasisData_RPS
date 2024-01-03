<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
                <div class="col-lg-8 mb-4">
                    <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newSubMenuModal">
                        <span class="icon text-white-50">
                            <i class="fas fa-fw fa-folder-plus"></i>
                        </span>
                        <span class="text">Add New RPS</span>
                    </a>
                    <a href="" class="btn btn-success mb-3" data-toggle="modal" data-target="#newSubMateriModal">
                        <span class="icon text-white-50">
                            <i class="fas fa-fw fa-plus-square"></i>
                        </span>
                        <span class="text">Add New Materi</span>
                    </a>
                </div>
                <div class="col-lg-4 mb-4 float-end">
                    <form class="" method="POST">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border small" name="keyword" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="submit">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg">
                    <?php if (validation_errors()) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?= validation_errors(); ?>
                        </div>
                    <?php endif; ?>

                    <?= $this->session->flashdata('message'); ?>

                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Mata Kuliah</th>
                                <th scope="col">Program Studi</th>
                                <th scope="col">Deskripsi</th>
                                <th scope="col">Kode Matkul</th>
                                <th scope="col">Semester</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($datarps as $d) : ?>
                                <tr>
                                    <th scope="row"><?= $i; ?></th>
                                    <td><?= $d['mata_kuliah']; ?></td>
                                    <td><?= $d['program_studi']; ?></td>
                                    <td><?= $d['deskripsi']; ?></td>
                                    <td><?= $d['kode_matkul']; ?></td>
                                    <td><?= $d['semester']; ?></td>
                                    <td>
                                        <div class="button-row">
                                            <a href="<?= base_url() ?>user/detail/<?= $d['id_data']; ?>" class="badge badge-success float-center">Detail</a>
                                        </div>
                                        <div class="button-row">
                                            <a href="<?= base_url() ?>user/editdatarps/<?= $d['id_data']; ?>" class="badge badge-warning float-center">Edit</a>
                                        </div>
                                        <div class="button-row">
                                            <a href="<?= base_url() ?>user/hapus/<?= $d['id_data']; ?>" class="badge badge-danger float-center" onclick="return confirm('Are you sure?');">Delete</a>
                                        </div>
                                        <div class="button-row">
                                            <a href="<?= base_url() ?>user/printrps/<?= $d['id_data']; ?>" class="badge badge-primary float-center">Print</a>
                                        </div>
                                    </td>
                                </tr>
                                <?php $i++; ?>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->


<!-- Modal -->
<div class="modal fade" id="newSubMenuModal" tabindex="-1" role="dialog" aria-labelledby="newSubMenuModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newSubMenuModalLabel">Add New Data Rps</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?= form_open_multipart('user/datarps'); ?>

            <div class="modal-body">
                <div class="card-header">
                    <div class="row">
                        <ul class="nav nav-tabs justify-content-center" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#headerRps" role="tab">
                                    <i class="now-ui-icons objects_umbrella-13"></i> Header RPS
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#identitasRps" role="tab">
                                    <i class="now-ui-icons shopping_cart-simple"></i> Identitas RPS
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#GambaranUmum" role="tab">
                                    <i class="now-ui-icons shopping_shop"></i> Gambaran Umum
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#CapaianPembelajaran" role="tab">
                                    <i class="now-ui-icons ui-2_settings-90"></i> Capaian Pembelajaran
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#Prasyarat" role="tab">
                                    <i class="now-ui-icons ui-2_settings-90"></i> Prasyarat
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#Pembelajaran" role="tab">
                                    <i class="now-ui-icons ui-2_settings-90"></i> Pembelajaran dan Pengetahuan Awal
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#UnitPembelajaran" role="tab">
                                    <i class="now-ui-icons ui-2_settings-90"></i> Unit Pembelajaran
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#TugasAktivitasPenilaian" role="tab">
                                    <i class="now-ui-icons ui-2_settings-90"></i> Tugas/Aktivitas dan Penilaian
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#Referensi" role="tab">
                                    <i class="now-ui-icons ui-2_settings-90"></i> Referensi
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#RencanaPelaksanaanPembelajaran" role="tab">
                                    <i class="now-ui-icons ui-2_settings-90"></i> Rencana Pelaksanaan Pembelajaran
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Tab panes -->

                <div class="tab-content text-center">
                    <div class="tab-pane active" id="headerRps" role="tabpanel">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <input type="text" class="form-control" id="mata_kuliah" name="mata_kuliah" placeholder="Mata Kuliah" />
                                <small class="form-text text-danger"><?= form_error('mata_kuliah'); ?></small>
                            </div>
                            <div class="col-md-6 mb-3">
                                <select class="form-select form-control" aria-label="Default select example" id="program_studi" name="program_studi" placeholder="Program Studi">
                                    <option selected>Program Studi</option>
                                    <option value="D3 - Teknik Informatika">D3 - Teknik Informatika</option>
                                    <option value="S1 - Teknik Informatika">S1 - Teknik Informatika</option>
                                    <option value="S1 - Sistem Informasi">S1 - Sistem Informasi</option>
                                    <option value="D3 - Manajemen Informatika">D3 - Manajemen Informatika</option>
                                    <option value="S1 - Sistem Informasi Akuntansi">S1 - Sistem Informasi Akuntansi</option>
                                    <option value="S1 - Ilmu Pemerintahan">S1 - Ilmu Pemerintahan</option>
                                    <option value="S1 - Kewirausahaan">S1 - Kewirausahaan</option>
                                    <option value="S1 - Hubungan Internasional">S1 - Hubungan Internasional</option>
                                    <option value="S1 - Arsitektur">S1 - Arsitektur</option>
                                    <option value="S1 - Teknologi Informasi">S1 - Teknologi Informasi</option>
                                </select>
                            </div>
                            <div class="col-md-12 mb-3">
                                <textarea class="form-control" id="deskripsi" name="deskripsi" style="height: 100px" placeholder="Deskripsi"></textarea>
                                <small class="form-text text-danger"><?= form_error('deskripsi'); ?></small>
                            </div>
                            <div class="col-md-6 mb-3">
                                <select class="form-select form-control" aria-label="Default select example" id="semester" name="semester">
                                    <option selected>Semester</option>
                                    <option value="Genap">Genap</option>
                                    <option value="Ganjil">Ganjil</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <input type="text" class="form-control" id="nik_dos" name="nik_dos" placeholder="NIK Dosen" />
                                <small class="form-text text-danger"><?= form_error('nik_dos'); ?></small>
                            </div>
                            <div class="col-md-5 mb-3">
                                <input type="text" class="form-control" id="kode_matkul" name="kode_matkul" placeholder="Kode Mata Kuliah" />
                                <small class="form-text text-danger"><?= form_error('kode_matkul'); ?></small>
                            </div>
                            <div class="col-md-7 mb-3">
                                <input type="text" type="text" class="form-control" id="dosen_pengampu" name="dosen_pengampu" placeholder="Dosen Pengampu" />
                                <small class="form-text text-danger"><?= form_error('dosen_pengampu'); ?></small>
                            </div>
                            <div class="col-md-12 mb-3">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="tanda_tangan" name="tanda_tangan">
                                    <label class="custom-file-label" for="tanda_tangan">Tanda Tangan</label>
                                </div>
                            </div>
                            <input type="hidden" name="created" value="<?= date('Y-m-d H:i:s'); ?>">
                        </div>
                    </div>
                    <div class="tab-pane" id="identitasRps" role="tabpanel">
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <input type="text" class="form-control" id="presentase_nilai" name="presentase_nilai" placeholder="Presentase Nilai" />
                                <small class="form-text text-danger"><?= form_error('presentase_nilai'); ?></small>
                            </div>
                            <div class="col-md-6 mb-3">
                                <select class="form-select form-control" aria-label="Default select example" id="jumlah_semester" name="jumlah_semester">
                                    <option value="(1)">(1) Ganjil</option>
                                    <option value="(2)">(2) Genap</option>
                                    <option value="(3)">(3) Ganjil</option>
                                    <option value="(4)">(4) Genap</option>
                                    <option value="(5)">(5) Ganjil</option>
                                    <option value="(6)">(6) Genap</option>
                                    <option value="(7)">(7) Ganjil</option>
                                    <option value="(8)">(8) Genap</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <input type="text" class="form-control" id="bobot_sks" name="bobot_sks" placeholder="Bobot SKS" />
                                <small class="form-text text-danger"><?= form_error('bobot_sks'); ?></small>
                            </div>
                            <div class="col-md-5 mb-3">
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="GambaranUmum" role="tabpanel">
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <textarea class="form-control" id="gambaran_umum" name="gambaran_umum" style="height: 100px" placeholder="Gambaran Umum"></textarea>
                                <small class="form-text text-danger"><?= form_error('gambaran_umum'); ?></small>
                            </div>
                            <div class="col-md-5 mb-3">
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="CapaianPembelajaran" role="tabpanel">
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <textarea class="form-control" id="capaian_pembelajaran" name="capaian_pembelajaran" style="height: 100px" placeholder="Capaian Pembelajaran"></textarea>
                                <small class="form-text text-danger"><?= form_error('capaian_pembelajaran'); ?></small>
                            </div>
                            <div class="col-md-5 mb-3">
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="Prasyarat" role="tabpanel">
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <textarea class="form-control" id="Prasyarat" name="prasyarat" style="height: 100px" placeholder="Prasyarat dan Pengetahuan Awal"></textarea>
                                <small class="form-text text-danger"><?= form_error('prasyarat'); ?></small>
                            </div>
                            <div class="col-md-5 mb-3">
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="Pembelajaran" role="tabpanel">
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <textarea class="form-control" id="pembelajaran" name="pembelajaran" style="height: 100px" placeholder="Pembelajaran dan Pengetahuan Awal (Prior Knowledge)"></textarea>
                                <small class="form-text text-danger"><?= form_error('pembelajaran'); ?></small>
                            </div>
                            <div class="col-md-5 mb-3">
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="UnitPembelajaran" role="tabpanel">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <input type="text" class="form-control" id="kemampuan_akhir" name="kemampuan_akhir" placeholder="Kemampuan Akhir yang Diharapkan" />
                                <small class="form-text text-danger"><?= form_error('kemampuan_akhir'); ?></small>
                            </div>
                            <div class="col-md-6 mb-3">
                                <input type="text" class="form-control" id="indikator" name="indikator" placeholder="Indikator" />
                                <small class="form-text text-danger"><?= form_error('indikator'); ?></small>
                            </div>
                            <div class="col-md-6 mb-3">
                                <input type="text" class="form-control" id="bahan_kajian" name="bahan_kajian" placeholder="Bahan Kajian" />
                                <small class="form-text text-danger"><?= form_error('bahan_kajian'); ?></small>
                            </div>
                            <div class="col-md-6 mb-3">
                                <input type="text" class="form-control" id="metode_pembelajaran" name="metode_pembelajaran" placeholder="Metode Pembelajaran" />
                                <small class="form-text text-danger"><?= form_error('metode_pembelajaran'); ?></small>
                            </div>
                            <div class="col-md-6 mb-3">
                                <input type="text" class="form-control" id="waktu_unit" name="waktu_unit" placeholder="Waktu" />
                                <small class="form-text text-danger"><?= form_error('waktu_unit'); ?></small>
                            </div>
                            <div class="col-md-6 mb-3">
                                <input type="text" class="form-control" id="metode_penilaian" name="metode_penilaian" placeholder="Metode Penilaian" />
                                <small class="form-text text-danger"><?= form_error('metode_penilaian'); ?></small>
                            </div>
                            <div class="col-md-12 mb-3">
                                <textarea class="form-control" id="bahan_ajar" name="bahan_ajar" style="height: 100px" placeholder="Bahan Ajar"></textarea>
                                <small class="form-text text-danger"><?= form_error('bahan_ajar'); ?></small>
                            </div>
                            <div class="col-md-5 mb-3">
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="TugasAktivitasPenilaian" role="tabpanel">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <input type="text" class="form-control" id="tugas_aktivitas" name="tugas_aktivitas" placeholder="Tugas dan Aktivitas" />
                                <small class="form-text text-danger"><?= form_error('tugas_aktivitas'); ?></small>
                            </div>
                            <div class="col-md-6 mb-3">
                                <input type="text" class="form-control" id="kemampuan_akhir_tap" name="kemampuan_akhir_tap" placeholder="Kemampuan Akhir yang Diharapkan" />
                                <small class="form-text text-danger"><?= form_error('kemampuan_akhir_tap'); ?></small>
                            </div>
                            <div class="col-md-6 mb-3">
                                <input type="text" class="form-control" id="waktu_tap" name="waktu_tap" placeholder="Waktu" />
                                <small class="form-text text-danger"><?= form_error('waktu_tap'); ?></small>
                            </div>
                            <div class="col-md-6 mb-3">
                                <input type="text" class="form-control" id="bobot_tap" name="bobot_tap" placeholder="Bobot" />
                                <small class="form-text text-danger"><?= form_error('bobot_tap'); ?></small>
                            </div>
                            <div class="col-md-12 mb-3">
                                <input type="text" class="form-control" id="kriteria_penilaian" name="kriteria_penilaian" placeholder="Kriterian Penilaian" />
                                <small class="form-text text-danger"><?= form_error('kriteria_penilaian'); ?></small>
                            </div>
                            <div class="col-md-12 mb-3">
                                <textarea class="form-control" id="indikator_penilaian" name="indikator_penilaian" style="height: 100px" placeholder="Indikator Penilaian"></textarea>
                                <small class="form-text text-danger"><?= form_error('indikator_penilaian'); ?></small>
                            </div>
                            <div class="col-md-5 mb-3">
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="Referensi" role="tabpanel">
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <textarea class="form-control" id="referensi" name="referensi" style="height: 100px" placeholder="Referensi"></textarea>
                                <small class="form-text text-danger"><?= form_error('referensi'); ?></small>
                            </div>
                            <div class="col-md-5 mb-3">
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="RencanaPelaksanaanPembelajaran" role="tabpanel">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <input type="text" class="form-control" id="minggu_pertemuan" name="minggu_pertemuan" placeholder="Minggu Pertemuan" />
                                <small class="form-text text-danger"><?= form_error('minggu_pertemuan'); ?></small>
                            </div>
                            <div class="col-md-6 mb-3">
                                <input type="text" class="form-control" id="kemampuan_akhir_rpp" name="kemampuan_akhir_rpp" placeholder="Kemampuan Akhir yang Diharapkan" />
                                <small class="form-text text-danger"><?= form_error('kemampuan_akhir_rpp'); ?></small>
                            </div>
                            <div class="col-md-6 mb-3">
                                <input type="text" class="form-control" id="indikator_rpp" name="indikator_rpp" placeholder="Indikator" />
                                <small class="form-text text-danger"><?= form_error('indikator_rpp'); ?></small>
                            </div>
                            <div class="col-md-6 mb-3">
                                <input type="text" class="form-control" id="topik_subtopik" name="topik_subtopik" placeholder="Topik & Sub Topik" />
                                <small class="form-text text-danger"><?= form_error('topik_subtopik'); ?></small>
                            </div>
                            <div class="col-md-12 mb-3">
                                <input type="text" class="form-control" id="strategi_pembelajaran" name="strategi_pembelajaran" placeholder="Strategi Pembelajaran" />
                                <small class="form-text text-danger"><?= form_error('strategi_pembelajaran'); ?></small>
                            </div>
                            <div class="col-md-12 mb-3">
                                <input type="text" class="form-control" id="waktu_rpp" name="waktu_rpp" placeholder="Waktu" />
                                <small class="form-text text-danger"><?= form_error('waktu_rpp'); ?></small>
                            </div>
                            <div class="col-md-12 mb-3">
                                <textarea class="form-control" id="penilaian_rpp" name="penilaian_rpp" style="height: 100px" placeholder="Penilaian"></textarea>
                                <small class="form-text text-danger"><?= form_error('penilaian_rpp'); ?></small>
                            </div>
                            <div class="col-md-12 mb-3">
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Add</button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="newSubMenuModal" tabindex="-1" role="dialog" aria-labelledby="newSubMenuModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newSubMenuModalLabel">Add New Sub Menu</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?= form_open_multipart('user/datarps'); ?>

            <div class="modal-body">

                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <ul class="nav nav-tabs justify-content-center" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#headerRps" role="tab">
                                            <i class="now-ui-icons objects_umbrella-13"></i> Header RPS
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#identitasRps" role="tab">
                                            <i class="now-ui-icons shopping_cart-simple"></i> Identitas RPS
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#messages" role="tab">
                                            <i class="now-ui-icons shopping_shop"></i> Gambaran Umum
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#settings" role="tab">
                                            <i class="now-ui-icons ui-2_settings-90"></i> Capaian Pembelajaran
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#settings" role="tab">
                                            <i class="now-ui-icons ui-2_settings-90"></i> Prasyarat
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#settings" role="tab">
                                            <i class="now-ui-icons ui-2_settings-90"></i> Unit Pembelajaran
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#settings" role="tab">
                                            <i class="now-ui-icons ui-2_settings-90"></i> Tugas/Aktivitas dan Penilaian
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#settings" role="tab">
                                            <i class="now-ui-icons ui-2_settings-90"></i> Referensi
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#settings" role="tab">
                                            <i class="now-ui-icons ui-2_settings-90"></i> Rencana Pelaksanaan Pembelajaran
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body">
                                <!-- Tab panes -->
                                <div class="tab-content text-center">
                                    <div class="tab-pane active" id="headerRps" role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <input type="text" class="form-control" id="mata_kuliah" name="mata_kuliah" placeholder="Mata Kuliah" />
                                                <small class="form-text text-danger"><?= form_error('mata_kuliah'); ?></small>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <select class="form-select form-control" aria-label="Default select example" id="program_studi" name="program_studi" placeholder="Program Studi">
                                                    <option selected>Program Studi</option>
                                                    <option value="D3 - Teknik Informatika">D3 - Teknik Informatika</option>
                                                    <option value="S1 - Teknik Informatika">S1 - Teknik Informatika</option>
                                                    <option value="S1 - Sistem Informasi">S1 - Sistem Informasi</option>
                                                    <option value="D3 - Manajemen Informatika">D3 - Manajemen Informatika</option>
                                                    <option value="S1 - Sistem Informasi Akuntansi">S1 - Sistem Informasi Akuntansi</option>
                                                    <option value="S1 - Ilmu Pemerintahan">S1 - Ilmu Pemerintahan</option>
                                                    <option value="S1 - Kewirausahaan">S1 - Kewirausahaan</option>
                                                    <option value="S1 - Hubungan Internasional">S1 - Hubungan Internasional</option>
                                                    <option value="S1 - Arsitektur">S1 - Arsitektur</option>
                                                    <option value="S1 - Teknologi Informasi">S1 - Teknologi Informasi</option>
                                                </select>
                                            </div>
                                            <div class="col-md-12 mb-3">
                                                <textarea class="form-control" id="deskripsi" name="deskripsi" style="height: 100px" placeholder="Deskripsi"></textarea>
                                                <small class="form-text text-danger"><?= form_error('deskripsi'); ?></small>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <select class="form-select form-control" aria-label="Default select example" id="semester" name="semester">
                                                    <option selected>Semester</option>
                                                    <option value="Genap">Genap</option>
                                                    <option value="Ganjil">Ganjil</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <input type="text" class="form-control" id="nik_dos" name="nik_dos" placeholder="NIK Dosen" />
                                                <small class="form-text text-danger"><?= form_error('nik_dos'); ?></small>
                                            </div>
                                            <div class="col-md-5 mb-3">
                                                <input type="text" class="form-control" id="kode_matkul" name="kode_matkul" placeholder="Kode Mata Kuliah" />
                                                <small class="form-text text-danger"><?= form_error('kode_matkul'); ?></small>
                                            </div>
                                            <div class="col-md-7 mb-3">
                                                <input type="text" type="text" class="form-control" id="dosen_pengampu" name="dosen_pengampu" placeholder="Dosen Pengampu" />
                                                <small class="form-text text-danger"><?= form_error('dosen_pengampu'); ?></small>
                                            </div>
                                            <div class="col-md-12 mb-3">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="tanda_tangan" name="tanda_tangan">
                                                    <label class="custom-file-label" for="tanda_tangan">Choose file</label>
                                                </div>
                                            </div>
                                            <input type="hidden" name="created" value="<?= date('Y-m-d H:i:s'); ?>">
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Add</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="identitasRps" role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-12 mb-3">
                                                <input type="text" class="form-control" id="presentase_nilai" name="presentase_nilai" placeholder="Presentase Nilai" />
                                                <small class="form-text text-danger"><?= form_error('presentase_nilai'); ?></small>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <select class="form-select form-control" aria-label="Default select example" id="jumlah_semester" name="jumlah_semester">
                                                    <option value="Ganjil">(1) Ganjil</option>
                                                    <option value="Genap">(2) Genap</option>
                                                    <option value="Ganjil">(3) Ganjil</option>
                                                    <option value="Genap">(4) Genap</option>
                                                    <option value="Ganjil">(5) Ganjil</option>
                                                    <option value="Genap">(6) Genap</option>
                                                    <option value="Ganjil">(7) Ganjil</option>
                                                    <option value="Genap">(8) Genap</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <input type="text" class="form-control" id="bobot_sks" name="bobot_sks" placeholder="Bobot SKS" />
                                                <small class="form-text text-danger"><?= form_error('bobot_sks'); ?></small>
                                            </div>
                                            <div class="col-md-5 mb-3">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="newSubMateriModal" tabindex="-1" role="dialog" aria-labelledby="newSubMateriModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newSubMateriModal">Add New Materi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form method="post" action="<?= base_url('user/addMateri'); ?>" enctype="multipart/form-data">

                <div class="modal-body">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <!-- Tab panes -->
                                    <div class="tab-content text-center">
                                        <div class="tab-pane active" id="headerRps" role="tabpanel">
                                            <div class="row">
                                                <div class="col-md-12 mb-3">
                                                    <input type="text" class="form-control" id="materi" name="materi" placeholder="Materi" />
                                                    <small class="form-text text-danger"><?= form_error('materi'); ?></small>
                                                </div>
                                                <div class="col-md-12 mb-3">
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" id="file_path_materi" name="file_path_materi">
                                                        <label class="custom-file-label" for="file_path_materi">Choose file</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Add</button>
                    </div>

                </div>
            </form>

        </div>
    </div>
</div>
</div>