<div class="button-add-student">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">add admin</button>
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Add Student</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                              <form class="p-3" id="formAdd" method="POST" action="<?php echo URLROOT ?>/StudentController/add">
                              <p class="vide-msg alert-danger text-center "></p>
                                <div class="mb-4 d-flex gap-4">
                                  <div class="name">
                                    <label for="full_name" class="form-label">fullname</label> <span class="valid text-danger"></span>
                                    <input placeholder="Enter full_namet"  name="nom_complet" type="text" class="form-control" id="full_name" aria-describedby="emailHelp" >
                                  </div>
                                  <div class="phone">
                                    <label for="matricule" class="form-label">genre</label> <span class="valid text-danger"></span>
                                    <input placeholder="Enter matricule" type="text" class="form-control" id="matricule" aria-describedby="emailHelp" name="genre">
                                  </div>
                                </div>
                                <div class="mb-4 d-flex gap-4">
                                  <div class="role">
                                    <label for="role" class="form-label">matricule</label> <span class="valid text-danger"></span>
                                    <input placeholder="Enter role" type="text" class="form-control" id="role" aria-describedby="emailHelp" name="matricule">
                                  </div>
                                  <div class="phone">
                                    <label for="username" class="form-label">class</label> <span class="valid text-danger"></span>
                                    <input placeholder="Enter username" type="text" class="form-control" id="username" aria-describedby="emailHelp" name="class">
                                  </div>
                                </div>
                              
                                  <div class="name">
                                    <label for="password" class="form-label">parents</label> <span class="valid text-danger"></span>
                                    <input placeholder="Enter Mot de Passe" type="password" class="form-control" id="name" aria-describedby="emailHelp" name="parents">
                                  </div>
                                  <div class="phone">
                                    <label for="cpassword" class="form-label"> adresse</label> <span class="valid text-danger"></span>
                                    <input placeholder="Enter Mot de Passe" type="password" class="form-control" id="cpassword" aria-describedby="emailHelp" name="adresse">
                                  </div>
                                <div class="phone">
                                    <label for="cpassword" class="form-label"> date_naissance</label> <span class="valid text-danger"></span>
                                    <input placeholder="Enter Mot de Passe" type="password" class="form-control" id="cpassword" aria-describedby="emailHelp" name="date_naissance">
                                  </div>
                            
                                

                                <div class="email">

                                    <label for="cpassword" class="form-label"> email</label> <span class="valid text-danger"></span>
                                    <input placeholder="Enter Mot de Passe" type="text" class="form-control" id="cpassword" aria-describedby="emailHelp" name="email">
                                  </div>
                            
                              <div class="phone">
                                    <label for="cpassword" class="form-label"> nom_parents</label> <span class="valid text-danger"></span>
                                    <input placeholder="Enter Mot de Passe" type="password" class="form-control" id="cpassword" aria-describedby="emailHelp" name="nom_parents">
                                  </div>
                                
                                <div class="button">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" name="submit" class="btn btn-primary">add</button>
                                </div>
                              </form>
                              </div>
                            </div>
                          </div>
                        </div>
                    </div>