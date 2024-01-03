<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <div class="row">

        <div class="col-lg-6">

            <div class="card shadow mb-4">
                <!-- Card Header - Accordion -->
                <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
                    <h6 class="m-0 font-weight-bold text-primary"><?= $title; ?></h6>
                </a>
                <!-- Card Content - Collapse -->
                <div class="collapse show" id="collapseCardExample">
                    <div class="card-body">
                        <?= form_open_multipart('user/edit'); ?>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="email" name="email" value="<?= $user['email']; ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label for="name">Full Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="<?= $user['name']; ?>">
                            <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" class="img-thumbnail" style="max-height: 150px;">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="image" name="image">
                                <label class="custom-file-label" for="image">Choose file</label>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="card shadow mb-4">
                <!-- Card Header - Accordion -->
                <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
                    <h6 class="m-0 font-weight-bold text-primary">Origin Address Data</h6>
                </a>
                <!-- Card Content - Collapse -->
                <div class="collapse show" id="collapseCardExample">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="alamat_asal">Alamat</label>
                            <input type="text" class="form-control" id="alamat_asal" name="alamat_asal" value="<?= $user['alamat_asal']; ?>">
                            <?= form_error('alamat_asal', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <?php
                        // Mendapatkan data negara dari file JSON lokal
                        $countries_json = file_get_contents('assets/json/kec_kab_prov.json');
                        // Sesuaikan path dengan lokasi file
                        $countries = json_decode($countries_json, true);
                        // Mengurutkan negara sesuai abjad
                        usort($countries, function ($a, $b) {
                            return strcmp($a['name'], $b['name']);
                        });
                        ?>

                        <div class="form-group">
                            <label for="kec_kab_prov_asal">Kecamatan/Kabupaten/Provinsi</label>
                            <select class="form-control" id="kec_kab_prov_asal" name="kec_kab_prov_asal" aria-label="Default select example">
                                <?php
                                foreach ($countries as $country) {
                                    $countryName = $country['name'];
                                    echo '<option value="' . $countryName . '"';
                                    if ($user['kec_kab_prov_asal'] == $countryName) {
                                        echo ' selected';
                                    }
                                    echo '>' . $countryName . '</option>';
                                }
                                ?>
                            </select>
                            <?= form_error('kec_kab_prov_asal', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="kode_pos_asal">Kode Pos</label>
                            <input type="text" class="form-control" id="kode_pos_asal" name="kode_pos_asal" value="<?= $user['kode_pos_asal']; ?>">
                            <?= form_error('kode_pos_asal', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="alert alert-primary" role="alert">
                        Pastikan isian yang bertanda * sudah di lengkapi. <br> Saya setuju dengan ini, data yang sudah saya isikan di atas adalah data yang <strong> BENAR </strong> dan bisa <strong> DIPERTANGGUNGJAWABKAN. </strong>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">Edit</button>
                    </div>
                </div>
            </div>


        </div>

        <div class="col-lg-6">

            <!-- Dropdown Card Example -->
            <div class="card shadow mb-4">
                <!-- Card Header - Accordion -->
                <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
                    <h6 class="m-0 font-weight-bold text-primary">Lecturer Biodata</h6>
                </a>
                <!-- Card Content - Collapse -->
                <div class="collapse show" id="collapseCardExample">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="nik">NIK</label>
                            <input type="text" class="form-control" id="nik" name="nik" value="<?= $user['nik']; ?>">
                            <?= form_error('nik', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="full_name_dos">Nama Panjang Dosen</label>
                            <input type="text" class="form-control" id="full_name_dos" name="full_name_dos" value="<?= $user['full_name_dos']; ?>">
                            <?= form_error('full_name_dos', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="jenis_kelamin">Jenis Kelamin</label>
                            <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" value="<?= $user['jenis_kelamin']; ?>" aria-label="Default select example">
                                <option selected><?= $user['jenis_kelamin']; ?></option>
                                <option value="L">Laki-laki</option>
                                <option value="P">Perempuan</option>
                            </select>
                            <?= form_error('jenis_kelamin', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="agama">Agama</label>
                            <select class="form-control" id="agama" name="agama" aria-label="Default select example">
                                <?php
                                $agama_options = ['Islam', 'Kristen', 'Katolik', 'Hindu', 'Buddha', 'Konghucu', 'Lainnya'];
                                foreach ($agama_options as $option) {
                                    echo '<option value="' . $option . '"';
                                    if ($user['agama'] == $option) {
                                        echo ' selected';
                                    }
                                    echo '>' . $option . '</option>';
                                }
                                ?>
                            </select>
                            <?= form_error('agama', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>

                        <?php
                        // Mendapatkan data negara dari file JSON lokal
                        $countries_json = file_get_contents('assets/json/countries.json');
                        // Sesuaikan path dengan lokasi file
                        $countries = json_decode($countries_json, true);

                        // Mengurutkan negara sesuai abjad
                        usort($countries, function ($a, $b) {
                            return strcmp($a['name'], $b['name']);
                        });
                        ?>

                        <div class="form-group">
                            <label for="kewarganegaraan">Kewarganegaraan</label>
                            <select class="form-control" id="kewarganegaraan" name="kewarganegaraan" aria-label="Default select example">
                                <?php
                                foreach ($countries as $country) {
                                    $countryName = $country['name'];
                                    echo '<option value="' . $countryName . '"';
                                    if ($user['kewarganegaraan'] == $countryName) {
                                        echo ' selected';
                                    }
                                    echo '>' . $countryName . '</option>';
                                }
                                ?>
                            </select>
                            <?= form_error('kewarganegaraan', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>

                        <div class="form-group">
                            <label for="tempat_lahir">Tempat Lahir</label>
                            <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" value="<?= $user['tempat_lahir']; ?>">
                            <?= form_error('tempat_lahir', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="tanggal_lahir">Tanggal Lahir</label>
                            <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="<?= $user['tanggal_lahir']; ?>">
                            <?= form_error('tanggal_lahir', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="handphone">No Handphone</label>
                            <input type="text" class="form-control" id="handphone" name="handphone" value="<?= $user['handphone']; ?>">
                            <?= form_error('handphone', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Collapsable Card Example -->
            <div class="card shadow mb-4">
                <!-- Card Header - Accordion -->
                <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
                    <h6 class="m-0 font-weight-bold text-primary">Residential Address Data</h6>
                </a>
                <!-- Card Content - Collapse -->
                <div class="collapse show" id="collapseCardExample">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="alamat_ting">Alamat</label>
                            <input type="text" class="form-control" id="alamat_ting" name="alamat_ting" value="<?= $user['alamat_ting']; ?>">
                            <?= form_error('alamat_ting', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <?php
                        // Mendapatkan data negara dari file JSON lokal
                        $countries_json = file_get_contents('assets/json/kec_kab_prov.json');
                        // Sesuaikan path dengan lokasi file
                        $countries = json_decode($countries_json, true);
                        // Mengurutkan negara sesuai abjad
                        usort($countries, function ($a, $b) {
                            return strcmp($a['name'], $b['name']);
                        });
                        ?>

                        <div class="form-group">
                            <label for="kec_kab_prov_ting">Kecamatan/Kabupaten/Provinsi</label>
                            <select class="form-control" id="kec_kab_prov_ting" name="kec_kab_prov_ting" aria-label="Default select example">
                                <?php
                                foreach ($countries as $country) {
                                    $countryName = $country['name'];
                                    echo '<option value="' . $countryName . '"';
                                    if ($user['kec_kab_prov_ting'] == $countryName) {
                                        echo ' selected';
                                    }
                                    echo '>' . $countryName . '</option>';
                                }
                                ?>
                            </select>
                            <?= form_error('kec_kab_prov_ting', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="kode_pos_ting">Kode Pos</label>
                            <input type="text" class="form-control" id="kode_pos_ting" name="kode_pos_ting" value="<?= $user['kode_pos_ting']; ?>">
                            <?= form_error('kode_pos_ting', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

    </form>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->