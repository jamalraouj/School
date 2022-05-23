<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Table - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="./assets/bootstrap/css/style.css">
</head>

<body id="page-top">
 

    <div id="wrapper">
    <?php include_once APPROOT . '/views/inc/sidebar.php'; ?>        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
            <link rel="stylesheet" href="./assets/bootstrap/css/style.css"> 
    <?php include_once APPROOT . '/views/inc/head.php'; ?>
                <div class="container-fluid">
                    <h3 class="text-dark mb-4">Team</h3>
                    <div class="card shadow">
                        <div class="card-header py-3 d-flex justify-content-between ">
                            <p class="text-primary m-0 fw-bold">Parents Info</p>
                            <div class="button-add-student">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">add admin</button>
                        <!-- Model add -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Add Parents</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                              <form class="p-3" id="formAdd" method="POST" action="<?php echo URLROOT ?>/parentcontroller/addParent">
                              <p class="vide-msg alert-danger text-center "></p>
                                <div class="mb-4 d-flex gap-4">
                                  <div class="name">
                                    <label for="full_name" class="form-label">nom_complet</label> <span class="valid text-danger"></span>
                                    <input placeholder="Enter full_namet" type="text" class="form-control" id="full_name" aria-describedby="emailHelp" name="nom_complet">
                                  </div>
                                  <div class="phone">
                                    <label for="matricule" class="form-label">matricule</label> <span class="valid text-danger"></span>
                                    <input placeholder="Enter matricule" type="text" class="form-control" id="matricule" aria-describedby="emailHelp" name="matricule">
                                  </div>
                                </div>
                                <div class="mb-4 d-flex gap-4">
                                  <div class="role">
                                    <label for="role" class="form-label">address</label> <span class="valid text-danger"></span>
                                    <input placeholder="Enter role" type="text" class="form-control" id="role" aria-describedby="emailHelp" name="adresse">
                                  </div>
                                  <div class="phone">
                                    <label for="username" class="form-label">phone</label> <span class="valid text-danger"></span>
                                    <input placeholder="Enter username" type="text" class="form-control" id="username" aria-describedby="emailHelp" name="phone">
                                  </div>
                                </div>
                                <div class="mb-4 d-flex gap-4">
                                  <div class="name">
                                    <label for="text" class="form-label">genre</label> <span class="valid text-danger"></span>
                                    <input placeholder="Enter Mot de Passe" type="text" class="form-control" id="name" aria-describedby="emailHelp" name="genre">
                                  </div>
                                  <div class="phone">
                                    <label for="text" class="form-label"> jobs</label> <span class="valid text-danger"></span>
                                    <input placeholder="Enter Mot de Passe" type="text" class="form-control" id="cpassword" aria-describedby="emailHelp" name="job">
                                  </div>
                          
                                </div>
                                <div class="button">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" name="submitContact" class="btn btn-primary">add</button>

                                </div>
                              </form>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- end model add -->


                        <!-- Model update -->
                       
                        <!-- end model update -->
                    </div>
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
                             
                             <th>Nom-complet</th>
                             <th>Matricule</th>
                             <th>Genre</th>
                             <th>jobe</th>
                             <th>Adresse</th>
                             <th>phone</th>

    


                         </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        // var_dump($data);
                                         for($i=0; $i <count($data) ; $i++) {?>
                                        <tr>
                                         
                                            </td>
                                            <td><?php echo $data[$i]->nom_complet; ?></td>
                                            <td><?php echo $data[$i]->matricule; ?></td>
                                            <td><?php echo $data[$i]->genre ?></td>
                                            <td><?php echo $data[$i]->job; ?></td>
                                            <td><?php echo $data[$i]->adresse; ?></td>
                                            <td><?php echo $data[$i]->phone; ?></td>
                                            <td></td>
                                            <td>
                                                <a href="<?php echo URLROOT.'/ParentController/getParent?id='.$data[$i]->id_parent;?>"><button class=" infoAdmin btn btn-success btn-sm text-white"> <span class="d-none">
                                                    </span> update</button></a>
                                                <a href="<?php echo URLROOT.'/ParentController/delete?id='.$data[$i]->id_parent;?>" >  <button  class="  btn btn-danger btn-sm">Delete</button></a>                                     
                                            </td>
                                        </tr>

                                        <?php }  ?>
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
    <?php include_once APPROOT . '/views/inc/linkJS.php'; ?>