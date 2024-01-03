<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><?= $title; ?></h6>
        </div>
        <div class="card-body">
            <?= $this->session->flashdata('message'); ?>
            <form action="" method="POST">
                <div class="row">
                    <div class="mb-3 col-lg-4">
                        <label for="mata_kuliah" class="form-label">Mata Kuliah</label>
                        <input type="text" name="mata_kuliah" class="form-control" id="mata_kuliah" value="<?= $datarps['mata_kuliah']; ?>">
                    </div>
                    <div class="mb-3 col-lg-4">
                        <label for="program_studi" class="form-label">Program Studi</label>
                        <input type="text" name="program_studi" class="form-control" id="program_studi" value="<?= $datarps['program_studi']; ?>">
                    </div>
                    <div class="mb-3 col-lg-4">
                        <label for="dosen_pengampu" class="form-label">Dosen Pengampu</label>
                        <input type="text" name="dosen_pengampu" class="form-control" id="dosen_pengampu" value="<?= $datarps['dosen_pengampu']; ?>">
                    </div>
                    <div class="mb-3 col-lg-12">
                        <label for="deskripsi">Deskripsi</label>
                        <textarea class="form-control" name="deskripsi" id="deskripsi" style="height: 100px"><?= $datarps['deskripsi']; ?></textarea>
                    </div>
                    <div class="mb-3 col-lg-4">
                        <label for="semester" class="form-label">Semester</label>
                        <input type="text" name="semester" class="form-control" id="semester" value="<?= $datarps['semester']; ?>">
                    </div>
                    <div class="mb-3 col-lg-4">
                        <label for="nik_dos" class="form-label">NID Dosen</label>
                        <input type="text" name="nik_dos" class="form-control" id="nik_dos" value="<?= $datarps['nik_dos']; ?>">
                    </div>
                    <div class="mb-3 col-lg-4">
                        <label for="kode_matkul" class="form-label">Kode Matkul</label>
                        <input type="text" name="kode_matkul" class="form-control" id="kode_matkul" value="<?= $datarps['kode_matkul']; ?>">
                    </div>
                    <div class="mb-3 col-lg-12">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="tanda_tangan" name="tanda_tangan" src=""<?= base_url('assets/img/ttd/') . $datarps['tanda_tangan']; ?>"" >
                            <label class="custom-file-label" for="tanda_tangan">Choose file</label>
                        </div>
                    </div>
                    <div class="mb-3 col-lg-4">
                        <button type="submit" class="btn btn-primary mb-3 justify-content-end">
                            <span class="icon text-white-50">
                                <i class="fas fa-edit"></i>
                            </span>
                            <span class="text">Edit Data RPS</span>
                        </button>
                    </div>
                </div>
            </form>

        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->