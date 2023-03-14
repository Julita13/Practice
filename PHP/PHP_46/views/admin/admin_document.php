<!DOCTYPE html>
<html lang="en">

<head>
  <?php include('partials/head.php') ?>
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
 
        <?php include('partials/navigations.php') ?>
  
        <?php include('partials/sidebar.php') ?>
  

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>DataTables</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Data Tables</li>
                        </ol>
                    </div>
                    </div>
                </div><!-- /.container-fluid -->
                </section>

                <section class="content">
                <div class="container-fluid">
                    <?= ($content ?? ''); ?>
                    </div>
                </section>
            </div>
            
        <?php include('partials/footer.php') ?>

        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
    </div>

        <?php include('partials/javascripts.php') ?>
</body>
</html>
