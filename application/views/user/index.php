<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-6">
            <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary"><?= $title; ?></h6>
                </div>
                <div class="card-body">
                    <?= $this->session->flashdata('message'); ?>
                    <div class="text-center">
                        <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 10rem;" src="<?= base_url('assets/img/profile/') . $user['image']; ?>" alt="...">
                    </div>
                    <p class="text-center"><?= $user['name']; ?></p>
                    <p class="text-center"><?= $user['email']; ?></p>
                    <p class="card-text text-center"><small class="text-muted">Member since <?= date('d F Y', strtotime($user['date_created'])); ?></small></p>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <!-- Isi sebelah kanan, jika diperlukan -->
        </div>
    </div>
    <!-- /.row -->

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

