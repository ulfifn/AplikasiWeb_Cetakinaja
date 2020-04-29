<?php $this->load->view('komponen/header');

 ?>
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tambah Profil</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Tambah Profil</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tambah Profil</h3>
              </div>
              <!-- /.card-header -->


              <!-- form start -->
              <form role="form">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Toko</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Nama">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Alamat Toko</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Alamat">
                  </div>

        </div>
        <div class="card-body pad table-responsive">
                  <div class="col-md-2">
                  <td>
                  <button type="button" class="btn btn-block btn-primary">Tambah</button>
                  </td>
                  </div>
                </div>
      </form>
    </div>
    </div>
    </div>
    </div>
  </section>
</div>


<?php $this->load->view('komponen/footer');

 ?>
