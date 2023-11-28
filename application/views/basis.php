<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Project</title>
    <meta content="width=device-width, initial-scale=1.0, shrink-to-fit=no" name="viewport" />
    <link rel="icon" href="../assets/img/icon.ico" type="image/x-icon" />

    <!-- Fonts and icons -->
    <script src="../assets/js/plugin/webfont/webfont.min.js"></script>
    <script>
      WebFont.load({
        google: { families: ["Lato:300,400,700,900"] },
        custom: { families: ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ["../assets/css/fonts.min.css"] },
        active: function () {
          sessionStorage.fonts = true;
        },
      });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../assets/css/atlantis.min.css" />

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="../assets/css/demo.css" />

    <style>
      .modal-dialog{padding: 30px;}
    </style>
  </head>
  <body>
    <div class="wrapper">
      <div class="main-header">
        <!-- Logo Header -->
        <div class="logo-header" data-background-color="blue">
          <a href="index.html" class="logo">
            <img src="../assets/img/logo.svg" alt="navbar brand" class="navbar-brand" />
          </a>
          <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">
              <i class="icon-menu"></i>
            </span>
          </button>
          <button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
          <div class="nav-toggle">
            <button class="btn btn-toggle toggle-sidebar">
              <i class="icon-menu"></i>
            </button>
          </div>
        </div>
        <!-- End Logo Header -->

        <!-- Navbar Header -->
        <nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue2">
          <div class="container-fluid">
          </div>
        </nav>
        <!-- End Navbar -->
      </div>

      <!-- Sidebar -->
      <div class="sidebar sidebar-style-2">
        <div class="sidebar-wrapper scrollbar scrollbar-inner">
          <div class="sidebar-content">
            <div class="user">
              <div class="avatar-sm float-left mr-2">
                <img src="../assets/img/profile.jpg" alt="..." class="avatar-img rounded-circle" />
              </div>
              <div class="info">
                <a data-toggle="collapse" href="#" aria-expanded="true">
                  <span>
                    <?php echo $this->session->userdata['nama']; ?>
                    <span class="user-level"><?php echo $this->session->userdata['namaS']; ?></span>
                    <!-- <span class="caret"></span> -->
                  </span>
                </a>
                <!-- <div class="clearfix"></div> -->
              </div>
            </div>
            <ul class="nav nav-primary">
              <li class="nav-item active">
                <a data-toggle="collapse" href="#dashboard" class="collapsed" aria-expanded="false">
                  <i class="fas fa-th-list"></i>
                  <p>Data Karyawan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('Login/logout'); ?>">
                  <i class="fas fa-desktop"></i>
                  <p class="link-collapse">Log Out</p>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <!-- End Sidebar -->

      <div class="main-panel">
        <div class="content">
          <div class="panel-header bg-primary-gradient">
            <div class="page-inner py-5">

            </div>
          </div>
          <div class="page-inner mt--5">
          <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <h4 class="card-title">Data Karyawan</h4>
                        <!-- Tombol Tambah Data -->
                        <?php if($_SESSION['role']==5): ?>
                        <button type='button' class='btn btn-primary btn-round ml-auto' data-toggle='modal' data-target='#md_tbh' >
                          <i class="fa fa-plus"></i>
                            Tambah Data
                         </button>
                        <?php endif; ?>
                        <!-- Awal Tambah Data -->
                        <div class="modal fade" id="md_tbh">
                            <div class="modal-dialog">
                              <div class="modal-content" style="padding=30px;">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="<?= base_url('Dashboard/tambah');?>" method="post">
                                    <div class="row">
                                        <div class="col-xxl-6 col-lg-6 col-md-6">
                                            <div class="panel">
                                                <div class="panel-heading"><h3 class="panel-title" id="lbljudul">Form Tambah Data</h3></div>
                                                <div class="panel-body">
                                                  <div class="form-row">
                                                        <div class="form-group col-md-12 jedaobyek">
                                                            <label class="form-control-label">NIK*</label>
                                                            <input type="text" class="form-control khusus_abjad jedaobyek" name="nik" placeholder="Masukkan NIK" autocomplete="off">
                                                        </div>
                                                        <div class="form-group col-md-12 jedaobyek">
                                                            <label class="form-control-label">Nama*</label>
                                                            <input type="text" class="form-control khusus_abjad jedaobyek" name="nama" placeholder="Masukkan Nama" autocomplete="off">
                                                        </div>
                                                        <div class="form-group col-md-12 jedaobyek">
                                                            <label class="form-control-label">Alamat*</label>
                                                            <input type="text" class="form-control khusus_abjad jedaobyek" name="alamat" placeholder="Masukkan Alamat" autocomplete="off">
                                                        </div>
                                                        <div class="form-group col-md-12 jedaobyek">
                                                            <label class="form-control-label">Tanggal Lahir*</label>
                                                            <input type="date" class="form-control khusus_abjad jedaobyek" name="ttl" placeholder="Masukkan Tanggal Lahir" autocomplete="off">
                                                        </div>
                                                        <div class="form-group col-md-12 jedaobyek">
                                                            <label class="form-control-label">Pendidikan*</label>
                                                            <input type="text" class="form-control khusus_abjad jedaobyek" name="pendidikan" placeholder="Masukkan Pendidikanr" autocomplete="off">
                                                        </div>
                                                        <div class="form-group col-md-12 jedaobyek">
                                                            <label class="form-control-label">Status*</label>
                                                            <select class="form-control select2" name="status">
                                                                <option value="">Silahkan Pilih</option>
                                                                <option value="Aktif">Aktif</option>
                                                                <option value="Tidak">Tidak</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-6 col-lg-6 col-md-6">
                                            <div class="panel">
                                                <div class="panel-body">
                                                    <div class="form-row">
                                                        <div class="form-group col-md-12 jedaobyek">
                                                            <label class="form-control-label">Departemen ID*</label>
                                                            <select class="form-control select2" name="DepartementID">
                                                                <option value="">Silahkan Pilih</option>
                                                                <option value="1">IT</option>
                                                                <option value="2">Finance</option>
                                                                <option value="3">Logistic </option>
                                                                <option value="4">Purchasing</option>
                                                                <option value="5">HR</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group col-md-12 jedaobyek">
                                                            <label class="form-control-label">Level*</label>
                                                            <select class="form-control select2" name="level">
                                                                <option value="">Silahkan Pilih</option>
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5">5</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group col-md-12 jedaobyek">
                                                            <label class="form-control-label">Grade*</label>
                                                            <select class="form-control select2" name="grade">
                                                                <option value="">Silahkan Pilih</option>
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5">5</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group col-md-12 jedaobyek">
                                                            <label class="form-control-label">Username*</label>
                                                            <input type="text" class="form-control khusus_abjad jedaobyek" name="username" placeholder="Masukkan username" autocomplete="off">
                                                        </div>
                                                        <div class="form-group col-md-12 jedaobyek">
                                                            <label class="form-control-label">Password*</label>
                                                            <input type="password" class="form-control khusus_abjad jedaobyek" name="password" placeholder="Masukkan Password" autocomplete="off">
                                                        </div>
                                                        <div class="form-group col-md-12 jedaobyek">
                                                          <button class="btn btn-primary btn-round ml-auto" type="submit">
                                                          Tambahkan
                                                          </button>
                                                          </div>
                                                          <div class="form-group col-md-12 jedaobyek">
                                                          <button class="btn btn-danger btn-round ml-auto" data-toggle="modal" data-target="#addRowModal">
                                                          Batalkan
                                                          </button>
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
                        <!-- Akhir Tambah Data -->
                        <!-- Awal Edit Data -->
                          <div class="modal fade" id="md_edit">
                            <div class="modal-dialog">
                              <div class="modal-content" style="padding=30px;">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="<?= base_url('Dashboard/edit');?>" method="post">
                                    <div class="row">
                                        <div class="col-md-6 ml-auto mr-auto">
                                            <div class="panel">
                                                <div class="panel-heading"><h3 class="panel-title" id="lbljudul">Form Edit Data</h3></div>
                                                <div class="panel-body">
                                                  <input type="hidden" id="editid" name="id">
                                                  <div class="form-row">
                                                        <div class="form-group col-md-12 jedaobyek">
                                                            <label class="form-control-label">NIK*</label>
                                                            <input type="text" class="form-control khusus_abjad jedaobyek" name="nik" id="nik" placeholder="Masukkan NIK" autocomplete="off">
                                                        </div>
                                                        <div class="form-group col-md-12 jedaobyek">
                                                            <label class="form-control-label">Nama*</label>
                                                            <input type="text" class="form-control khusus_abjad jedaobyek" name="nama" id="nama" placeholder="Masukkan Nama" autocomplete="off">
                                                        </div>
                                                        <div class="form-group col-md-12 jedaobyek">
                                                            <label class="form-control-label">Alamat*</label>
                                                            <input type="text" class="form-control khusus_abjad jedaobyek" name="alamat" id="alamat" placeholder="Masukkan Alamat" autocomplete="off">
                                                        </div>
                                                        <div class="form-group col-md-12 jedaobyek">
                                                            <label class="form-control-label">Tanggal Lahir*</label>
                                                            <input type="date" class="form-control khusus_abjad jedaobyek" name="ttl" id="ttl" placeholder="Masukkan Tanggal Lahir" autocomplete="off">
                                                        </div>
                                                        <div class="form-group col-md-12 jedaobyek">
                                                            <label class="form-control-label">Pendidikan*</label>
                                                            <input type="text" class="form-control khusus_abjad jedaobyek" name="pendidikan" id="pendidikan" placeholder="Masukkan Pendidikanr" autocomplete="off">
                                                        </div>
                                                        <div class="form-group col-md-12 jedaobyek">
                                                            <label class="form-control-label">Status*</label>
                                                            <select class="form-control select2" name="status" id="status">
                                                                <option value="">Silahkan Pilih</option>
                                                                <option value="Aktif">Aktif</option>
                                                                <option value="Tidak">Tidak</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 ml-auto mr-auto">
                                            <div class="panel">
                                                <div class="panel-body">
                                                    <div class="form-row">
                                                        <div class="form-group col-md-12 jedaobyek">
                                                            <label class="form-control-label">Departemen ID*</label>
                                                            <select class="form-control select2" name="DepartementID" id="departemenid">
                                                                <option value="">Silahkan Pilih</option>
                                                                <option value="1">IT</option>
                                                                <option value="2">Finance</option>
                                                                <option value="3">Logistic </option>
                                                                <option value="4">Purchasing</option>
                                                                <option value="5">HR</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group col-md-12 jedaobyek">
                                                            <label class="form-control-label">Level*</label>
                                                            <select class="form-control select2" name="level" id="level">
                                                                <option value="">Silahkan Pilih</option>
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5">5</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group col-md-12 jedaobyek">
                                                            <label class="form-control-label">Grade*</label>
                                                            <select class="form-control select2" name="grade" id="grade">
                                                                <option value="">Silahkan Pilih</option>
                                                                <option value="1">1</option>
                                                                <option valcue="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5">5</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group col-md-12 jedaobyek">
                                                            <label class="form-control-label">Username*</label>
                                                            <input type="text" class="form-control khusus_abjad jedaobyek" name="username" id="username" placeholder="Masukkan username" autocomplete="off">
                                                        </div>
                                                        <div class="form-group col-md-12 jedaobyek">
                                                            <label class="form-control-label">Password*</label>
                                                            <input type="password" class="form-control khusus_abjad jedaobyek" name="password" id="password" placeholder="Masukkan Password" autocomplete="off">
                                                        </div>
                                                        <div class="form-group col-md-12 jedaobyek">
                                                          <button class="btn btn-primary btn-round ml-auto" type="submit">
                                                          Edit
                                                          </button>
                                                          </div>
                                                          <div class="form-group col-md-12 jedaobyek">
                                                          <button class="btn btn-danger btn-round ml-auto" data-toggle="modal" data-target="#addRowModal">
                                                          Batal
                                                          </button>
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
                        <!-- Akhir Edit Data -->
                    </div>
                </div>
                <div class="card-body">
                    <!-- Modal -->
                    <div class="table-responsive">
                        <table id="add-row" class="display table table-striped table-hover" >
                            <thead>
                                <tr>
                                    <th>NIK</th>
                                    <th>Name</th>
                                    <th>Alamat</th>
                                    <th>TTL</th>
                                    <th>Pendidikan</th>
                                    <th>Status</th>
                                    <th>Departemen</th>
                                    <th>Level</th>
                                    <th>Grade</th>
                                    <?php if($_SESSION['role']==5): ?>
                                    <th style="width: 10%">Action</th>
                                    <?php endif; ?>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>NIK</th>
                                    <th>Name</th>
                                    <th>Alamat</th>
                                    <th>TTL</th>
                                    <th>Pendidikan</th>
                                    <th>Status</th>
                                    <th>Departemen</th>
                                    <th>Level</th>
                                    <th>Grade</th>
                                    <?php if($_SESSION['role']==5): ?>
                                    <th>Action</th>
                                    <?php endif; ?>
                                </tr>
                            </tfoot>
                            <!-- Menampilkan Data Karyawan -->
                            <tbody>
                                <?php foreach($data as $karyawan):?>
                                <tr>
                                    <td><?=$karyawan->NIK?></td>
                                    <td><?=$karyawan->Nama?></td>
                                    <td><?=$karyawan->Alamat?></td>
                                    <td><?=$karyawan->TTL?></td>
                                    <td><?=$karyawan->Pendidikan?></td>
                                    <td><?=$karyawan->Status?></td>
                                    <td><?=$karyawan->NamaDepartemen?></td>
                                    <td><?=$karyawan->Level?></td>
                                    <td><?=$karyawan->Grade?></td>
                                    <td>
                                        <?php if($_SESSION['role']==5): ?>
                                        <div class="form-button-action">
                                            <button type="button" data-id="<?=$karyawan->id?>" data-nik="<?=$karyawan->NIK?>" data-nama="<?=$karyawan->Nama?>" data-Alamat="<?=$karyawan->Alamat?>" data-TTL="<?=$karyawan->TTL?>" data-Pendidikan="<?=$karyawan->Pendidikan?>" data-Status="<?=$karyawan->Status?>" data-DepartemenID="<?=$karyawan->DepartemenID?>" data-Level="<?=$karyawan->Level?>" data-Grade="<?=$karyawan->Grade?>" data-username="<?=$karyawan->username?>" data-password="<?=$karyawan->password?>"  onclick="edit(this)" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task" data-target='#md_edit'>
                                                <i class="fa fa-edit"></i>
                                            </button>
                                            <a href="<?= base_url('Dashboard/hapus/').$karyawan->id; ?>" type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove">
                                                <i class="fa fa-times"></i>
                                            </a>
                                            <?php endif; ?>
                                        </div>
                                    </td>
                                </tr>
                                <?php endforeach?>
                            </tbody>
                            <!-- Akhir Data Karyawan -->
                        </table>
                    </div>
                </div>
            </div>
          <!-- </div> -->
          </div>
        </div>
        <footer class="footer">
          <div class="site-footer-right">© <?php $tgl=date('Y'); echo $tgl; ?><a href="javascript:void(0)"> Atlantis </a>Made by <i class="red-600 wb wb-heart"></i> <a href="https://instagram.com/ael_ahyar">Ael Ahyar</a></div>
        </footer>
      </div>

      <!-- Custom template | don't include it in your project! -->
      <div class="custom-template">
        <div class="title">Settings</div>
        <div class="custom-content">
          <div class="switcher">
            <div class="switch-block">
              <h4>Logo Header</h4>
              <div class="btnSwitch">
                <button type="button" class="changeLogoHeaderColor" data-color="dark"></button>
                <button type="button" class="selected changeLogoHeaderColor" data-color="blue"></button>
                <button type="button" class="changeLogoHeaderColor" data-color="purple"></button>
                <button type="button" class="changeLogoHeaderColor" data-color="light-blue"></button>
                <button type="button" class="changeLogoHeaderColor" data-color="green"></button>
                <button type="button" class="changeLogoHeaderColor" data-color="orange"></button>
                <button type="button" class="changeLogoHeaderColor" data-color="red"></button>
                <button type="button" class="changeLogoHeaderColor" data-color="white"></button>
                <br />
                <button type="button" class="changeLogoHeaderColor" data-color="dark2"></button>
                <button type="button" class="changeLogoHeaderColor" data-color="blue2"></button>
                <button type="button" class="changeLogoHeaderColor" data-color="purple2"></button>
                <button type="button" class="changeLogoHeaderColor" data-color="light-blue2"></button>
                <button type="button" class="changeLogoHeaderColor" data-color="green2"></button>
                <button type="button" class="changeLogoHeaderColor" data-color="orange2"></button>
                <button type="button" class="changeLogoHeaderColor" data-color="red2"></button>
              </div>
            </div>
            <div class="switch-block">
              <h4>Navbar Header</h4>
              <div class="btnSwitch">
                <button type="button" class="changeTopBarColor" data-color="dark"></button>
                <button type="button" class="changeTopBarColor" data-color="blue"></button>
                <button type="button" class="changeTopBarColor" data-color="purple"></button>
                <button type="button" class="changeTopBarColor" data-color="light-blue"></button>
                <button type="button" class="changeTopBarColor" data-color="green"></button>
                <button type="button" class="changeTopBarColor" data-color="orange"></button>
                <button type="button" class="changeTopBarColor" data-color="red"></button>
                <button type="button" class="changeTopBarColor" data-color="white"></button>
                <br />
                <button type="button" class="changeTopBarColor" data-color="dark2"></button>
                <button type="button" class="selected changeTopBarColor" data-color="blue2"></button>
                <button type="button" class="changeTopBarColor" data-color="purple2"></button>
                <button type="button" class="changeTopBarColor" data-color="light-blue2"></button>
                <button type="button" class="changeTopBarColor" data-color="green2"></button>
                <button type="button" class="changeTopBarColor" data-color="orange2"></button>
                <button type="button" class="changeTopBarColor" data-color="red2"></button>
              </div>
            </div>
            <div class="switch-block">
              <h4>Sidebar</h4>
              <div class="btnSwitch">
                <button type="button" class="selected changeSideBarColor" data-color="white"></button>
                <button type="button" class="changeSideBarColor" data-color="dark"></button>
                <button type="button" class="changeSideBarColor" data-color="dark2"></button>
              </div>
            </div>
            <div class="switch-block">
              <h4>Background</h4>
              <div class="btnSwitch">
                <button type="button" class="changeBackgroundColor" data-color="bg2"></button>
                <button type="button" class="changeBackgroundColor selected" data-color="bg1"></button>
                <button type="button" class="changeBackgroundColor" data-color="bg3"></button>
                <button type="button" class="changeBackgroundColor" data-color="dark"></button>
              </div>
            </div>
          </div>
        </div>
        <div class="custom-toggle">
          <i class="flaticon-settings"></i>
        </div>
      </div>
      <!-- End Custom template -->
    </div>
    <!--   Core JS Files   -->
    <script src="../assets/js/core/jquery.3.2.1.min.js"></script>
    <script src="../assets/js/core/popper.min.js"></script>
    <script src="../assets/js/core/bootstrap.min.js"></script>

    <!-- jQuery UI -->
    <script src="../assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
    <script src="../assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

    <!-- jQuery Scrollbar -->
    <script src="../assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>

    <!-- Chart JS -->
    <script src="../assets/js/plugin/chart.js/chart.min.js"></script>

    <!-- jQuery Sparkline -->
    <script src="../assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

    <!-- Chart Circle -->
    <script src="../assets/js/plugin/chart-circle/circles.min.js"></script>

    <!-- Datatables -->
    <script src="../assets/js/plugin/datatables/datatables.min.js"></script>

    <!-- Bootstrap Notify -->
    <!-- <script src="../assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script> -->

    <!-- jQuery Vector Maps -->
    <script src="../assets/js/plugin/jqvmap/jquery.vmap.min.js"></script>
    <script src="../assets/js/plugin/jqvmap/maps/jquery.vmap.world.js"></script>

    <!-- Sweet Alert -->
    <script src="../assets/js/plugin/sweetalert/sweetalert.min.js"></script>

    <!-- Atlantis JS -->
    <script src="../assets/js/atlantis.min.js"></script>

    <!-- Atlantis DEMO methods, don't include it in your project! -->
    <script src="../assets/js/setting-demo.js"></script>
    <script src="../assets/js/demo.js"></script>
    <script>
      Circles.create({
        id: "circles-1",
        radius: 45,
        value: 60,
        maxValue: 100,
        width: 7,
        text: 5,
        colors: ["#f1f1f1", "#FF9E27"],
        duration: 400,
        wrpClass: "circles-wrp",
        textClass: "circles-text",
        styleWrapper: true,
        styleText: true,
      });

      Circles.create({
        id: "circles-2",
        radius: 45,
        value: 70,
        maxValue: 100,
        width: 7,
        text: 36,
        colors: ["#f1f1f1", "#2BB930"],
        duration: 400,
        wrpClass: "circles-wrp",
        textClass: "circles-text",
        styleWrapper: true,
        styleText: true,
      });

      Circles.create({
        id: "circles-3",
        radius: 45,
        value: 40,
        maxValue: 100,
        width: 7,
        text: 12,
        colors: ["#f1f1f1", "#F25961"],
        duration: 400,
        wrpClass: "circles-wrp",
        textClass: "circles-text",
        styleWrapper: true,
        styleText: true,
      });

      var totalIncomeChart = document.getElementById("totalIncomeChart").getContext("2d");

      var mytotalIncomeChart = new Chart(totalIncomeChart, {
        type: "bar",
        data: {
          labels: ["S", "M", "T", "W", "T", "F", "S", "S", "M", "T"],
          datasets: [
            {
              label: "Total Income",
              backgroundColor: "#ff9e27",
              borderColor: "rgb(23, 125, 255)",
              data: [6, 4, 9, 5, 4, 6, 4, 3, 8, 10],
            },
          ],
        },
        options: {
          responsive: true,
          maintainAspectRatio: false,
          legend: {
            display: false,
          },
          scales: {
            yAxes: [
              {
                ticks: {
                  display: false, //this will remove only the label
                },
                gridLines: {
                  drawBorder: false,
                  display: false,
                },
              },
            ],
            xAxes: [
              {
                gridLines: {
                  drawBorder: false,
                  display: false,
                },
              },
            ],
          },
        },
      });

      $("#lineChart").sparkline([105, 103, 123, 100, 95, 105, 115], {
        type: "line",
        height: "70",
        width: "100%",
        lineWidth: "2",
        lineColor: "#ffa534",
        fillColor: "rgba(255, 165, 52, .14)",
      });

      function edit(element){
        var id=$(element).data('id');
        var nik=$(element).data('nik');
        var nama=$(element).data('nama');
        var alamat=$(element).data('alamat');
        var ttl=$(element).data('ttl');
        var pendidikan=$(element).data('pendidikan');
        var status=$(element).data('status');
        var departemenid=$(element).data('departemenid');
        var level=$(element).data('level');
        var grade=$(element).data('grade');
        var username=$(element).data('username');
        var password=$(element).data('password');

        $('#editid').val(id);
        $('#nik').val(nik);
        $('#nama').val(nama);
        $('#alamat').val(alamat);
        $('#ttl').val(ttl);
        $('#pendidikan').val(pendidikan);
        $('#status').val(status);
        $('#departemenid').val(departemenid);
        $('#level').val(level);
        $('#grade').val(grade);
        $('#username').val(username);
        $('#password').val(password);
        $('#md_edit').modal('show');
      } 
    </script>
  </body>
</html>
