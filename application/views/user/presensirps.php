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
                            <i class="fas fa-fw fa-id-card-alt"></i>
                        </span>
                        <span class="text">Add Presensi</span>
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
                                <th scope="col">Nama</th>
                                <th scope="col">NIM</th>
                                <th scope="col">Status</th>
                                <th scope="col">Waktu</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($presensi as $d) : ?>
                                <tr>
                                    <th scope="row"><?= $i; ?></th>
                                    <td><?= $d['nama']; ?></td>
                                    <td><?= $d['nim']; ?></td>
                                    <td>
                                        <div class="button-row">
                                            <a class="<?= ($d['status'] == 'Hadir') ? 'badge badge-success' : 'badge badge-danger'; ?> float-center">
                                                <?= ($d['status'] == 'Hadir') ? 'Hadir' : 'Tidak Hadir'; ?>
                                            </a>
                                        </div>
                                    </td>
                                    <td><?= $d['waktu']; ?></td>
                                </tr>
                                <?php $i++; ?>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
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
                <h5 class="modal-title" id="newSubMenuModalLabel">Add New Presensi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <!-- Form Opening Tag -->
            <?= form_open_multipart('user/presensirps'); ?>

            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="tab-content text-center">
                                    <!-- Header RPS Tab Pane -->
                                    <div class="tab-pane active" id="headerRps" role="tabpanel">
                                        <div class="row">
                                            <!-- Rencana Pelaksanaan Pembelajaran Tab Pane -->
                                            <div class="tab-pane" id="RencanaPelaksanaanPembelajaran" role="tabpanel">
                                                <div class="row">

                                                    <div class="col-md-12 mb-3">
                                                        <input type="text" class="form-control" id="nim" name="nim" placeholder="Nim Mahasiswa" />
                                                        <small class="form-text text-danger"><?= form_error('nim'); ?></small>
                                                    </div>
                                                    <div class="col-md-6 mb-3">
                                                        <input type="hidden" id="status" name="status" value="Tidak Hadir">
                                                    </div>
                                                    <input type="hidden" name="waktu" value="<?= date('Y-m-d H:i:s'); ?>">
                                                    <div class="col-md-5 mb-3">
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-primary">Add</button>
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
                <!-- Form Closing Tag -->
                <?= form_close(); ?>
            </div>
        </div>
    </div>
</div>