<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css" integrity="sha384-AysaV+vQoT3kOAXZkl02PThvDr8HYKPZhNT5h/CXfBThSRXQ6jW5DO2ekP5ViFdi" crossorigin="anonymous">

<link href='https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/dropzone.css' type='text/css' rel='stylesheet'>
<script src='https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/dropzone.js' type='text/javascript'></script>

<style>
/*    div#newsTable_filter,
    input.dataTable-input,
    .dataTable-top .dataTable-dropdown,
    .dataTable-top .dataTable-search {
        display: none;
    }*/

    .panel-heading {
        padding: 0;
        margin: 0 !important;
    }


    /* Toggle CSS */

.toggle-btn {
    width: 40px;
    height: 21px;
    background: grey;
    border-radius: 50px;
    padding: 3px;
    cursor: pointer;
    -webkit-transition: all 0.3s 0.1s ease-in-out;
    -moz-transition: all 0.3s 0.1s ease-in-out;
    -o-transition: all 0.3s 0.1s ease-in-out;
    transition: all 0.3s 0.1s ease-in-out
}

.toggle-btn>.inner-circle {
    width: 15px;
    height: 15px;
    background: #fff;
    border-radius: 50%;
    -webkit-transition: all 0.3s 0.1s ease-in-out;
    -moz-transition: all 0.3s 0.1s ease-in-out;
    -o-transition: all 0.3s 0.1s ease-in-out;
    transition: all 0.3s 0.1s ease-in-out
}

.toggle-btn.active {
    background: blue !important
}

.toggle-btn.active>.inner-circle {
    margin-left: 19px
}
</style>

    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Berita</h1>
        </div>
        <!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"></h5>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 mb-3">
                                <button type="button" class="btn btn-info text-white" data-toggle="modal" data-target="#addNewNews">Tambah Berita</button>
                                </div>

<!--                                 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 mb-3">
                                    <div class="panel-heading mt-2">
                                    <input class="form-control border-1 border-info" type="text" id="kolomcari" placeholder="Ketik kata kunci di sini" >
                                </div>
                                </div> -->
                            </div>

                            <!-- Table with stripped rows -->
                            <table class="table datatable" id="newsTable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Tanggal</th>
                                        <th>Judul</th>
                                        <th>Kategori</th>
                                        <th>Slider</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                            foreach ($berita AS $news) : 
                                    ?>
                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $news->tanggal; ?></td>
                                            <td><?php echo $news->judul; ?></td>
                                            <td><?php echo $news->kategori; ?></td>
                                            <td class="text-center">
                                                <div class="toggle-btn">
                                                    <div class="inner-circle"></div>
                                                </div>
                                            </td>
                                            <td>
                                                <button class="btn btn-primary btn-sm btnEdit" data-userid=""><i class="bi bi-pencil-square"></i> Edit</button>
                                                <button class="btn btn-danger btn-sm btnDelete" data-userid=""><i class="bi bi-trash"></i> Hapus</button>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                            <!-- End Table with stripped rows -->

                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main>
    <!-- End #main -->

<!-- Modal -->
<!-- Modal -->
<div class="modal fade" id="addNewNews" tabindex="-1" role="dialog" aria-labelledby="addNewNewsLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="addNewNewsLabel">Tambah Berita</h5>
        </div>
            <div class="modal-body">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <input type="text" class="form-control" id="judul_berita" name="judul_berita" placeholder="Judul Berita" required>
                  </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                       <select id="kategori" name="kategori" aria-controls="kategori" class="custom-select form-control form-select">
                            <option value="0">- Pilih Kategori Berita - </option>
                            <option value="Irigasi">Irigasi</option>
                            <option value="Sungai">Sungai</option>
                            <option value="Pantai">Pantai</option>
                        </select>
                  </div>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <textarea type="text" class="form-control" rows="3" id="isi_berita" name="isi_berita" placeholder="Ketik isi berita di sini" required></textarea>
                  </div>
                </div>

                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group mt-0">
                      <div id="gambar_berita" class="dropzone gambar_berita" requireda>
                        <div class="dz-message">Klik atau drop foto KTP ke sini</div>
                      </div>
                    </div>
                  </div>

            </div>

            </div>
            <div class="modal-footer">
                <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
            </div>

    </div>
  </div>
</div>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js" integrity="sha384-BLiI7JTZm+JWlgKa0M0kGRpJbF2J8q+qreVrKBC47e3K6BW78kGLrCkeRX6I9RoK" crossorigin="anonymous"></script>

<script>
// Custom search bar
cari_berita = $('#newsTable').DataTable();
$('#judul_berita').keyup(function(){
      cari_berita.search($(this).val()).draw() ;
})
</script>

<script type='text/javascript'>
    $(document).ready(function(){
    $('.toggle-btn').click(function() {
    $(this).toggleClass('active').siblings().removeClass('active');
    });
    });
</script>