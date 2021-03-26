<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Blank Page</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Notifications Dropdown Menu -->
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="fa fa-bell-o"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fa fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fa fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fa fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
          <i class="fa fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('asset/admin/default/profile.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->name }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-dashboard"></i>
              <p>
                Dashboard
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../../index.html" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Dashboard v1</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../../index2.html" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Dashboard v2</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../../index3.html" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Dashboard v3</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="../widgets.html" class="nav-link">
              <i class="nav-icon fa fa-th"></i>
              <p>
                Category
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../widgets.html" class="nav-link">
              <i class="nav-icon fa fa-th"></i>
              <p>
                Post
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Title</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="card-body">
          Start creating your amazing application!
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aperiam, sapiente? Laborum quas dicta est architecto incidunt natus recusandae quidem perferendis dolorem pariatur fuga necessitatibus numquam itaque omnis facere quo voluptate fugit quod consequatur laudantium deleniti, perspiciatis inventore in officiis. Reiciendis numquam eaque corporis impedit porro possimus dignissimos? Et laudantium voluptates minima ratione ab. Perferendis, vitae ab? Eius adipisci sit illo fugiat quos facere debitis quasi excepturi ducimus officia, maiores odit, fuga aspernatur! Sequi debitis laboriosam tempore aut, excepturi deleniti eum, ipsa porro quo laborum saepe minus ab tempora! Animi neque nobis ipsam ipsa asperiores accusamus libero cum sapiente obcaecati quod reiciendis, porro ex adipisci mollitia eligendi tempora necessitatibus a est quo reprehenderit! Eos, recusandae. Alias quaerat sed odit, facilis at quos eos ullam esse quo similique harum repellat consequatur iure distinctio consequuntur ab atque rerum adipisci earum exercitationem nisi iste voluptate perspiciatis. Nulla sunt eaque voluptatibus odio recusandae, consequatur amet distinctio perferendis laboriosam necessitatibus commodi, ab quas? Nesciunt, sed commodi? Eaque temporibus harum soluta reprehenderit exercitationem? Modi, molestiae. Dignissimos ipsa, dolores aspernatur ratione voluptatibus perferendis veritatis dolore similique debitis consequuntur! Corrupti voluptatibus aliquam architecto debitis error nisi aliquid, dolorem voluptatem doloribus vitae officiis laborum reiciendis neque vero ut labore quasi itaque! Dolore nostrum labore porro nobis asperiores. Iste rem dolorem corporis laboriosam vero repudiandae autem, dolores in iure maiores similique ut, aut obcaecati quaerat consequatur quasi possimus, harum ex adipisci perspiciatis blanditiis! Id molestias nemo dicta nulla ut facere, nobis illo dignissimos ea beatae odit veniam non repellendus voluptate mollitia sit voluptas neque impedit reiciendis ullam ipsa. Consequuntur nulla adipisci animi ea eaque! Mollitia repudiandae aspernatur reiciendis id iure quasi tempore consequuntur molestias, nulla ratione aut aliquid ex consectetur dignissimos officia aliquam in odit obcaecati nam! Nemo, ipsum aliquam, magni sint quibusdam enim voluptatibus provident officia officiis qui dicta fugiat omnis pariatur! Vitae dolore exercitationem magni odio, dolorum blanditiis nihil labore veniam quo molestias vel consequuntur sed reiciendis corrupti aspernatur ut commodi accusantium magnam quasi repudiandae itaque voluptas. Beatae alias ad qui veniam labore repellat laudantium, consequatur iusto non porro blanditiis ab aperiam ipsam sequi nihil magnam? Id similique dolorem perspiciatis culpa enim, blanditiis asperiores facilis obcaecati, at ducimus iure eius quo autem nostrum quasi deserunt repudiandae iusto sit quisquam aut facere distinctio maxime earum tenetur. Cupiditate temporibus odio saepe in quidem aspernatur repudiandae at eius voluptate id sequi cum, ipsa modi aliquam laborum fugit, dolorem nobis eaque maxime nesciunt!
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.0.0-alpha
    </div>
    <strong>Copyright &copy; 2014-2018 <a href="http://adminlte.io">AdminLTE.io</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
