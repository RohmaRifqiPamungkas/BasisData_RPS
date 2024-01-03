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
                        <span class="text">Add New Dosen</span>
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
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Role</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($users as $u) : ?>
                            <tr>
                                <th scope="row"><?= $i; ?></th>
                                <td><?= $u['name']; ?></td>
                                <td><?= $u['email']; ?></td>
                                <td><?= $u['role_id']; ?></td>
                                <td>
                                    <div class="button-row">
                                        <a href="<?= base_url() ?>user/detail/<?= $u['id']; ?>" class="badge badge-success float-center">Detail</a>
                                    </div>
                                    <div class="button-row">
                                        <a href="<?= base_url() ?>user/editdatarps/<?= $u['id']; ?>" class="badge badge-warning float-center">Edit</a>
                                    </div>
                                    <div class="button-row">
                                        <a href="<?= base_url() ?>user/hapus/<?= $u['id']; ?>" class="badge badge-danger float-center" onclick="return confirm('Are you sure?');">Delete</a>
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
                <h5 class="modal-title" id="newSubMenuModalLabel">Add New Dosen</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?= form_open_multipart('auth/createDosenAccount'); ?>

            <div class="modal-body">

                <!-- Tab panes -->

                <div class="tab-content text-center">
                    <div class="tab-pane active" id="" role="tabpanel">
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email Dosen" />
                                <small class="form-text text-danger"><?= form_error('email'); ?></small>
                            </div>
                            <div class="col-md-6 mb-3">
                                <input type="password" class="form-control" id="password1" name="password1" placeholder="Password">
                                <small class="form-text text-danger"><?= form_error('password1'); ?></small>
                            </div>
                            <div class="col-md-6 mb-3">
                                <input type="password" class="form-control" id="password2" name="password2" placeholder="Repeat Password">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>