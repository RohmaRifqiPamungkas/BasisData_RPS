<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
                <div class="col-lg-12">
                    <?= $this->session->flashdata('message'); ?>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 mb-4">
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
          
                <!-- Show Materi -->
                <?php foreach ($materi as $m) : ?>
                    <div class="col-md-3 mb-3">
                        <div class="card">
                            <div class="card-header">
                                <?= $m['materi']; ?>
                            </div>
                            <div class="card-body">
                                <p class="card-text">Created on: <?= $m['created_materi']; ?></p>

                                <?php
                                $file_path = 'assets/file/' . $m['file_path_materi']; // Menggunakan path relatif

                                // Check if the file extension is in the allowed list
                                $file_extension = strtolower(pathinfo($file_path, PATHINFO_EXTENSION));
                                if (in_array($file_extension, ['pdf', 'doc', 'docx', 'ppt', 'pptx'])) {
                                    // Display the iframe for supported file types
                                    echo '<iframe src="' . base_url($file_path) . '" width="100%" height="150px"></iframe>';
                                    echo '<div class="mt-2"><a href="' . base_url($file_path) . '" class="btn btn-secondary" target="_blank"><i class="fas fa-eye"></i> Full Preview</a></div>';
                                } else {
                                    // Generate a link for unsupported file types using Google Docs Viewer
                                    $google_docs_viewer_url = 'https://docs.google.com/viewerng/viewer?url=' . urlencode(base_url($file_path));
                                    echo '<div class="mt-2"><a href="' . $google_docs_viewer_url . '" class="btn btn-secondary" target="_blank"><i class="fas fa-eye"></i> Full Preview</a></div>';
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>

            </div>
        </div>

        <div class="modal fade" id="newSubMateriModal" tabindex="-1" role="dialog" aria-labelledby="newSubMateriModal" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="newSubMateriModal">Add New Sub Menu</h5>
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
        <script>
            function openPreview(url) {
                window.open(url, '_blank');
            }
        </script>

    </div>
</div>