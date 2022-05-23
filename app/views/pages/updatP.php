<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
  <link rel="stylesheet" href="<?php echo URLROOT; ?>/public/bootstrap/css/style.css">
  <link rel="stylesheet" href="<?php echo URLROOT; ?>/public/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo URLROOT; ?>/public/fontawesome/css/fontawesome.min.css">
  <title><?php echo SITENAME; ?></title>
</head>

<body class="bg-info">
<div style="margin-top:120px">
                          <div class="modal-dialog ">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel"> Update Parent</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                              </div>
                              <div class="modal-body">
                              <form class="p-3" id="formAdd" method="POST" action="<?php echo URLROOT ?>/parentcontroller/update?id=<?php echo $data->id_parent?>">
                              <p class="vide-msg alert-danger text-center "></p>
                                <div class="mb-4 d-flex gap-4">
                                  <div class="name">
                                    <label for="full_name" class="form-label">nom_complet</label> <span class="valid text-danger"></span>
                                    <input 
                                    placeholder="Enter full_namet" 
                                    type="text" 
                                    class="form-control" 
                                    id="full_name" 
                                    value="<?php echo $data->nom_complet; ?>"
                              
                                    aria-describedby="emailHelp" name="nom_complet">
                                  </div>
                                  <div class="role">
                                    <label for="role" class="form-label">Matricule</label> <span class="valid text-danger"></span>
                                    <input placeholder="Enter matricule" type="text" class="form-control" id="role" aria-describedby="emailHelp" name="matricule" value="<?php echo $data->matricule; ?>">
                                  </div>
                              
                                </div>
                                <div class="mb-4 d-flex gap-4">
                                  <div class="role">
                                    <label for="role" class="form-label">address</label> <span class="valid text-danger"></span>
                                    <input placeholder="Enter adresse" type="text" class="form-control" id="role" aria-describedby="emailHelp" name="adresse" value="<?php echo $data->adresse; ?>">
                                  </div>
                                  <div class="phone">
                                    <label for="username" class="form-label">phone</label> <span class="valid text-danger"></span>
                                    <input placeholder="Enter phone" type="text" class="form-control" id="username" aria-describedby="emailHelp" name="phone"value="<?php echo $data->phone; ?>" >
                                  </div>
                                </div>
                                <div class="mb-4 d-flex gap-4">
                                  <div class="name">
                                    <label for="text" class="form-label">genre</label> <span class="valid text-danger"></span>
                                    <input placeholder="Enter le gonre" type="text" class="form-control" id="name" aria-describedby="emailHelp" name="genre"value="<?php echo $data->genre; ?>">
                                  </div>
                                  <div class="phone">
                                    <label for="text" class="form-label"> jobs</label> <span class="valid text-danger"></span>
                                    <input placeholder="Enter le gob" type="text" class="form-control" id="cpassword" aria-describedby="emailHelp" name="job"value="<?php echo $data->job; ?>">
                                  </div>
                          
                                </div>
                                <div class="button">
                                    <button type="submit" name="submitContact" class="btn btn-primary">Update</button>

                                </div>
                              </form>
                              </div>
                            </div>
                          </div>
                        </div>
 </body>

</html>


   