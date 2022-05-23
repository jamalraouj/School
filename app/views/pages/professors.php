
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
            <?php include_once APPROOT . '/views/inc/navbar.php';?>
                <div class="container-fluid">
                    <h3 class="text-dark mb-4">Team</h3>
                    <div class="card shadow">
                        <div class="card-header py-3 d-flex justify-content-between ">
                            <p class="text-primary m-0 fw-bold">Professor Info</p>
                            <a href="<?php echo URLROOT?>/pages/addProfessor" class="btn btn-primary ">Add Professor</a>
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
                                        <!-- <?php //var_dump($data); ?> -->
                                        <tr>
                                            <th></th>
                                            <th>Nom complet</th>
                                            <th>Genre</th>
                                            <th>Matricule</th>
                                            <th>Class</th>
                                            <th>Matière</th>
                                            <th>Phone</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody> <?php echo (APPROOT) ?>
                                        <?php for($i=0; $i <count($data) ; $i++) {

                                                
                                           ?>
                                        <tr>
                                            <td>
                                                <div class="user-info d-flex alignitems-center">
                                                    <div class="user-info__img">
                                                        <img class="me-3" src="<?php echo dirname(APPROOT) ?>/public/images/profile.png" alt="User Img" width="55">
                                                    </div>
                                                    
                                                </div>
                                            </td>
                                            
                                            <td><?php echo $data[$i]->nom_complet?></td>
                                            <td><?php echo $data[$i]->genre?></td>
                                            <td><?php echo $data[$i]->matricule?></td>
                                            <td><?php echo $data[$i]->class?></td>
                                            <td><?php echo $data[$i]->matiere?></td>
                                            <td><?php echo $data[$i]->phone?></td>
                                            <td><span class=" btn btn-success btn-sm text-white">update</span></td>
                                            <td>
                                                <a href="<?php echo URLROOT?>/ProfessorController/deletePro?id=<?php echo $data[$i]->id_pro ?>" class="btn btn-danger btn-sm">Delete</a>
                                            </td>
                                            
                                        </tr>
                    <?php  } ?>
                                        
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
