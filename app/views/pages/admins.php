
    <!-- <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Table - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="./assets/bootstrap/css/style.css"> -->
    <?php include_once APPROOT . '/views/inc/head.php'; ?>


<body id="page-top">
    <div id="wrapper">
    <?php include_once APPROOT . '/views/inc/sidebar.php'; ?>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
            <?php include_once APPROOT . '/views/inc/navbar.php';; ?>
                <div class="container-fluid">
                    <h3 class="text-dark mb-4">Team</h3>
                    <div class="card shadow">
                        <div class="card-header py-3 d-flex justify-content-between ">
                            <p class="text-primary m-0 fw-bold">Admins Info</p>
                            <?php require APPROOT . '/views/inc/addAdmin.php'; ?>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 text-nowrap">
                                </div>
                                <div class="col-md-6">
                                    <div class="text-md-end dataTables_filter" id="dataTable_filter"><label class="form-label"><input type="search" class="form-control form-control-sm" aria-controls="dataTable" placeholder="Search"></label></div>
                                </div>
                            </div>
                            <div class="container table-responsive contacts list-contacts">
                            <table class="table">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>full_name</th>
                                            <th>matricule</th>
                                            <th>role</th>
                                            <th>username</th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        foreach ($data as $admin):?>
                                        <tr>
                                            <td>
                                                <div class="user-info d-flex alignitems-center">
                                                    <div class="user-info__img">
                                                        <img class="me-3" src="./assets/img/avatars/avatar (1).svg" alt="User Img" width="55">
                                                    </div>
                                                </div>
                                            </td>
                                            <td><?php echo $admin['full_name']; ?></td>
                                            <td><?php echo $admin['matricule']; ?></td>
                                            <td><?php echo $admin['role']; ?></td>
                                            <td><?php echo $admin['username']; ?></td>
                                            <td></td>
                                            <td>
                                                <span class=" infoAdmin btn btn-success btn-sm text-white" data-bs-toggle="modal" data-bs-target="#modaleUpdate" data-bs-whatever="@mdo"> <span class="d-none"><?php echo $admin['idAdmin'].','.$admin['full_name'].','.$admin['matricule'].','.$admin['role'].','.$admin['username'].','.$admin['password']; ;  ?></span> update</span>
                                                <a class="text-danger btnDelete"><span class="idContact d-none"><?php echo $admin['idAdmin'];?></span><i class="fas fa-user-times h5" data-bs-toggle="modal" data-bs-target="#exampleModal2"></i></a>
                                                <?php include_once APPROOT . '/views/inc/modalDelete.php'; ?> 
                                                <?php include_once APPROOT . '/views/inc/modalUpdate.php'; ?> 
                                            </td>
                                        </tr>

                                        <?php endforeach;  ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <?php include_once APPROOT . '/views/inc/footer.php'; ?>
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>
    <!-- <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="assets/js/theme.js"></script> -->
    <?php include_once APPROOT . '/views/inc/linkJS.php'; ?>
