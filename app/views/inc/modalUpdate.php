<div class="button-add-student">            
              <div class="modal fade" id="modaleUpdate" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">update Admin</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                              <form class="p-3" id="formUpdate" method="POST" action="<?php echo URLROOT ?>/adminController/update">
                              <p class="vide-msg alert-danger text-center "></p>
                                <div class="mb-4 d-flex gap-4">
                                <input class="d-none" type="number" name="idAdmin">
                                  <div class="name">
                                    <label for="full_name" class="form-label">full_name</label> <span class="valid text-danger"></span>
                                    <input placeholder="Enter full_namet" type="text" class="form-control" id="full_name" aria-describedby="emailHelp" name="full_name">
                                  </div>
                                  <div class="phone">
                                    <label for="matricule" class="form-label">matricule</label> <span class="valid text-danger"></span>
                                    <input placeholder="Enter matricule" type="text" class="form-control" id="matricule" aria-describedby="emailHelp" name="matricule">
                                  </div>
                                </div>
                                <div class="mb-4 d-flex gap-4">
                                  <div class="role">
                                    <label for="role" class="form-label">role</label> <span class="valid text-danger"></span>
                                    <input placeholder="Enter role" type="text" class="form-control" id="role" aria-describedby="emailHelp" name="role">
                                  </div>
                                  <div class="phone">
                                    <label for="username" class="form-label">username</label> <span class="valid text-danger"></span>
                                    <input placeholder="Enter username" type="text" class="form-control" id="username" aria-describedby="emailHelp" name="username">
                                  </div>
                                </div>
                                <div class="mb-4 d-flex gap-4">
                                  <div class="name">
                                    <label for="password" class="form-label">password</label> <span class="valid text-danger"></span>
                                    <input placeholder="Enter Mot de Passe" type="password" class="form-control" id="name" aria-describedby="emailHelp" name="password">
                                  </div>
                                  <div class="phone">
                                    <label for="cpassword" class="form-label"> confirmer password</label> <span class="valid text-danger"></span>
                                    <input placeholder="Enter Mot de Passe" type="password" class="form-control" id="cpassword" aria-describedby="emailHelp" name="cpassword">
                                  </div>
                                </div>
                                <div class="button">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" name="submitContact" class="btn btn-primary">update</button>
                                </div>
                              </form>
                              </div>
                            </div>
                          </div>
                        </div>
                    </div>