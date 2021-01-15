<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= $title; ?></title>

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url('assets/');?>fontawesome/css/all.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="<?= base_url('assets/');?>css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= base_url('assets/');?>tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <link rel="stylesheet" href="<?= base_url('assets/');?>sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url('assets/');?>css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?= base_url('assets/');?>overlayScrollbars/css/OverlayScrollbars.min.css">
</head>
<body class="hold-transition sidebar-mini sidebar-collapse">
  <div class="wrapper">
    <aside class="main-sidebar sidebar-light-primary elevation-4">
      <!-- Brand Logo -->
      <a href="#" class="brand-link">
        <i class="fas fa-user ml-4"></i>
        <span class="brand-text font-weight-light ml-4">MAN 7</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <?php if ($this->session->userdata('role_id') != 2) :?>
              <li class="nav-header">Dashboard</li>
              <li class="nav-item">
                <a href="<?= base_url('Anggota'); ?>" class="nav-link active">
                  <i class="nav-icon fas fa-users"></i>
                  <p>
                    Anggota
                  </p>
                </a>
              </li>
            <?php endif;?>
            <li class="nav-header">Jadwal</li>
            <li class="nav-item">
              <a href="<?= base_url('Jadwal'); ?>" class="nav-link">
                <i class="nav-icon fas fa-calendar-alt"></i>
                <p>
                  Jadwal
                </p>
              </a>
            </li>
            <li class="nav-header">Home</li>
            <li class="nav-item">
              <a href="<?= base_url('welcome'); ?>" class="nav-link">
                <i class="nav-icon fas fa-home"></i>
                <p>
                  Home
                </p>
              </a>
            </li>
            <li class="nav-header"></li>
            <li class="nav-item">
              <a href="<?= base_url('login/logout'); ?>" class="nav-link">
                <i class="nav-icon fas fa-sign-out-alt"></i>
                <p>
                  Logout
                </p>
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </aside>
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown user-menu">
          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
            <img src="<?= base_url('assets/');?>img/profile/default.jpg" class="user-image img-circle elevation-2" alt="User Image">
            <span class="d-none d-md-inline"><?= $user['name']; ?></span>
          </a>
          <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <li class="user-header bg-primary">
              <img src="<?= base_url('assets/');?>img/profile/default.jpg" class="img-circle elevation-2" alt="User Image">

              <p>
                <?= $user['name']; ?> - 
              </p>
            </li>
            <li class="user-footer">
              <a href="#" class="btn btn-default btn-flat">Profile</a>
              <a href="<?= base_url('login/logout'); ?>" class="btn btn-danger btn-flat float-right">Logout</a>
            </li>
          </ul>
        </li>
      </ul>
    </nav>
    <div class="content-wrapper">
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm">
              <div class="row">
                <div class="col-lg">

                  <table class="table table-hover" id="datatable">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Email</th>
                        <th scope="col">Posisi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $i = 1; ?>
                      <?php foreach($login as $l) : ?>
                        <tr>
                          <th scope="row"><?= $i; ?></th>
                          <td><?= $l['name']; ?></td>
                          <td><?= $l['email']; ?></td>
                          <td>
                            <?php if ($l['role_id'] == 1): ?>
                              <?php echo "Admin"; ?>
                              <?php else : ?>
                                <?php echo "User"; ?>
                              <?php endif; ?>
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
          </div>
        </div>
        <!-- /.container-fluid -->
      </section>
    </div>
    <footer class="main-footer">
      <strong>Copyright &copy;</strong>
    </footer>

  </div>
  <!-- jQuery -->
  <script src="<?= base_url('assets/');?>plugins/jquery/jquery.min.js"></script>
  <script src="<?= base_url('assets/');?>js/jquery-3.3.1.slim.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="<?= base_url('assets/');?>jquery-ui/jquery-ui.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="<?= base_url('assets/');?>js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="<?= base_url('assets/');?>js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="<?= base_url('assets/');?>js/demo.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="<?= base_url('assets/');?>js/pages/dashboard.js"></script>
  <script src="<?= base_url('assets/');?>sweetalert2/sweetalert2.min.js"></script>
  <script>
    $(function() {
      var Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000
      });

      $('.swalDefaultSuccess').click(function() {
        Toast.fire({
          icon: 'success',
          title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
      });
    });
  </script>
  <script type="text/javascript">
    (function( $ ) {
      $(document).ready(function() {
        $('.edit-data').on('click',function(){
            // get data from button edit
            const id = $(this).data('id');
            const name = $(this).data('name');
            const jumlah = $(this).data('jumlah');
            // Set data to Form Edit
            $('#edit_id').val(id);
            $('#edit_name').val(name);
            $('#edit_jumlah').val(jumlah);
            $('#ubahModal').modal('show');
            // Call Modal Edit
          });
      });
    })(jQuery);

  </script>
</body>
</html>