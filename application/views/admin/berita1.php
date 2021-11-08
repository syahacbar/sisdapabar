<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css" integrity="sha384-AysaV+vQoT3kOAXZkl02PThvDr8HYKPZhNT5h/CXfBThSRXQ6jW5DO2ekP5ViFdi" crossorigin="anonymous">

<link href='https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/dropzone.css' type='text/css' rel='stylesheet'>
<script src='https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/dropzone.js' type='text/javascript'></script>


<div class="main">
    <!-- Begin Page Content -->
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="col-lg-6">
                        <!-- DataTales Example -->
                        <div class="card shadow mb-4">

                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Berita</h6>
                            </div>
                            <div class="card-body">
                                <div id="alert"></div>
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="newsTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th width="10">No.</th>
                                                <th>Agama</th>
                                                <th width="150">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            foreach ($berita as $news) : ?>
                                                <tr>
                                                    <td><?php echo $no++; ?></td>
                                                    <td><?php echo $news['berita']; ?></td>
                                                    <td>
                                                        <a href="#" class="btn btn-info btn-icon-split btn-sm editform" data-berita="<?php echo $news['judul'] ?>" data-idberita="<?php echo $news['id'] ?>">
                                                            <span class="icon text-white-50">
                                                                <i class="fas fa-edit"></i>
                                                            </span>
                                                            <span class="text">Edit</span>
                                                        </a>
                                                        <a href="#" class="btn btn-danger btn-icon-split btn-sm deletedata" data-idberita="<?php echo $news['id'] ?>">
                                                            <span class="icon text-white-50">
                                                                <i class="fas fa-trash"></i>
                                                            </span>
                                                            <span class="text">Hapus</span>
                                                        </a>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <!-- DataTales Example -->
                        <div class="card shadow mb-4">

                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Tambah/Edit Data Berita</h6>
                            </div>
                            <div class="card-body">
                                <?php echo $this->session->flashdata('notif'); ?>
                                <form id="formberita" action="<?php echo site_url($linkform); ?>" method="post">
                                    <div class="form-group">
                                        <label>Berita</label>
                                        <input id="txtJudul" type="text" class="form-control" name="judul" placeholder="Berita" required>
                                        <input type="hidden" id="id" name="id">
                                    </div>
                                    <button type="reset" class="btn btn-secondary" data-dismiss="modal">Reset</button>
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
</div>
</section>
<!-- /.container-fluid -->
</div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        var newsTable = $('#newsTable').DataTable();
        $("#newsTable").on("click", ".editform", function() {
            event.preventDefault();
            $("input#txtJudul").val($(this).data('judul'));
            $("input#id").val($(this).data('id'));
            $('#formberita').attr('action', '<?php echo site_url('berita/berita/edit'); ?>');
        });

        $("#newsTable").on('click', '.deletedata', function() {
            var id = $(this).data("id");
            if (confirm("Are you sure you want to delete this?")) {
                $.ajax({
                    url: "<?php echo site_url(); ?>berita/berita/delete",
                    method: "POST",
                    data: {
                        id: id
                    },
                    success: function(data) {
                        $('#alert').html('<div class="alert alert-warning alert-dismissible" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>Data berhasil dihapus.</div>');
                        $(".alert").fadeTo(5000, 0).slideUp(100, function() {
                            $(this).remove();
                        });
                        location.reload();
                    }
                });
            } else {
                return false;
            }
        });
        window.setTimeout(function() {
            $(".alert").fadeTo(5000, 0).slideUp(100, function() {
                $(this).remove();
            });
        }, 4000);
    });
</script>