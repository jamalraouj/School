<?php include_once APPROOT . '/views/inc/head.php'; ?>

<body id="page-top">
    <div id="wrapper">
        <?php include_once APPROOT . '/views/inc/sidebar.php'; ?>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content position-relative">
                <?php include APPROOT . '/views/inc/navbar.php'; ?>
                <div class="container-fluid">
                    <h3 class="text-dark mb-4">Team</h3>
                    <div class="card shadow">
                        <div class="card-header py-3 d-flex justify-content-between ">
                            <p class="text-primary m-0 fw-bold">Students Info</p>
                            <?php include APPROOT . '/views/inc/addstudent.php';  ?>
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
                                            <th>Nom complet</th>
                                            <th>Matricule</th>
                                            <th>Genre</th>
                                            <th>Class</th>
                                            <th>Parents</th>
                                            <th>Adresse</th>
                                            <th>Date de naissance</th>
                                            <th>Email</th>
                                            <th>nom du parents</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        // var_dump($data);
                                        foreach ($data as $Student) :
                                        ?>
                                            <tr>
                                                <td>
                                                    <div class="user-info d-flex alignitems-center">
                                                        <div class="user-info__img">
                                                            <img class="me-3" src="./assets/img/avatars/avatar (1).svg" alt="User Img" width="55">
                                                        </div>
                                                        <div class="user-info__basic">
                                                            <h5 class="mb-0">jamal raouj</h5>
                                                        </div>
                                                    </div>

                                                </td>
                                                <td><?php echo $Student['nom_complet']; ?></td>
                                                <td><?php echo $Student['genre']; ?></td>
                                                <td><?php echo $Student['matricule']; ?></td>
                                                <td><?php echo $Student['parents']; ?></td>
                                                <td><?php echo $Student['adresse']; ?></td>
                                                <td><?php echo $Student['date_naissance']; ?></td>
                                                <td><?php echo $Student['email']; ?></td>
                                                <td><?php echo $Student['nom_parents']; ?></td>
                                             <td> <a href="<?php echo URLROOT . '/StudentController/Update?id=' . $Student['id_stu']; ?>"> <button class=" btn btn-success btn-sm text-white">update</button> </td> </a>
                                                <td>
                                                    <a href="<?php echo URLROOT . '/StudentController/delete?id=' . $Student['id_stu']; ?>"> <button class="  btn btn-danger btn-sm">Delete</button></a>
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
            <?php include APPROOT . '/includes/footer.php'; ?>
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>
    <?php include_once APPROOT . '/views/inc/linkJS.php'; ?>