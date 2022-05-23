
<?php require APPROOT . '/views/inc/head.php'; ?>
<body>
<div class="border border-primary bg-primary text-white w-50 position-absolute top-50 start-50 translate-middle">
<?php echo $data['id_stu'] ?>
                    <form  method="POST" action="<?php echo URLROOT ?>/StudentController/Update?id="<?php echo $data['id_stu'] ?>>
                                                <h3 class="text-center ">modifier</h3>
                                

                        <div class="form-group">
                            <label for="exampleInputEmail1">nom_complet</label>
                            <input name="nom_complet" type="text" value="<?php echo  $data['nom_complet']; ?>"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
                          
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">genre</label>
                            <input name="genre" type="text" value="<?php echo  $data['genre']; ?>"   class="form-control" id="exampleInputPassword1" >
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">matricule</label>
                            <input name="matricule" type="text" value="<?php echo  $data['matricule']; ?>"  class="form-control" id="exampleInputPassword1" >
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">class</label>
                            <input name="class" type="text" value="<?php echo  $data['class']; ?>"  class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">parents</label>
                            <input name="parents" type="text" value="<?php echo  $data['parents']; ?>"  class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">adresse</label>
                            <input name="adresse"  type="text" value="<?php echo  $data['adresse']; ?>"  class="form-control" id="exampleInputPassword1" >
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">date_naissance</label>
                            <input name="date_naissance" value="<?php echo  $data['date_naissance']; ?>"  type="text" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">email</label>
                            <input name="email" type="text" value="<?php echo  $data['email']; ?>"  class="form-control" id="exampleInputPassword1" >
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">nom_parents</label>
                            <input name="nom_parents" type="text"  value="<?php echo  $data['nom_parents']; ?>"  class="form-control" id="exampleInputPassword1">
                        </div>
                        
                        <input type="submit" name="sub" value="Update" class=" btn btn-success btn-sm text-white">
                    </form>
                    
                </div>
                
                 <?php require APPROOT . '/views/inc/footer.php'; ?>
  <?php require APPROOT . '/views/inc/linkJS.php'; ?>

      
  </body>