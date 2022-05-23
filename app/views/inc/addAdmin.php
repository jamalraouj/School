<div class="button-add-student">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">add admin</button>
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Add Admin</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                              <form class="p-3" id="formAdd" method="POST" action="<?php echo URLROOT ?>/adminController/add">
                              <p class="vide-msg alert-danger text-center "></p>
                                <div class="mb-4 d-flex gap-4">
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
                                    <select class="form-select" aria-label="Default select example" name="role">
                                      <option selected>Role</option>
                                      <option value="update/delete/add">update/delete/add</option>
                                      <option value="View">View</option>
                                      <option value="Add">Add</option>
                                    </select>
                                    <!-- <input placeholder="Enter role" type="text" class="form-control" id="role" aria-describedby="emailHelp" name="role"> -->
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
                                    <button type="submit" name="submitContact" class="btn btn-primary">add</button>
                                </div>
                              </form>
                              </div>
                            </div>
                          </div>
                        </div>
                    </div>