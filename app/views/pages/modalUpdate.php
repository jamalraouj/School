
<?php require APPROOT . '/views/inc/head.php'; ?>
<body>
<div class="border border-primary bg-primary text-white w-50 position-absolute top-50 start-50 translate-middle">
    
                    <form  method="POST" action="<?php echo URLROOT ?>/StudentController/Update">
                                                <h3 class="text-center ">modifier</h3>
                                

                        <div class="form-group">
                            <label for="exampleInputEmail1">nom_complet</label>
                            <input name="nom_complet" type="email" value="<?php echo  $data->nom_complet; ?>"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
                          
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">genre</label>
                            <input name="genre" type="text"  class="form-control" id="exampleInputPassword1" >
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">matricule</label>
                            <input name="matricule" type="text" class="form-control" id="exampleInputPassword1" >
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">class</label>
                            <input name="class" type="text" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">parents</label>
                            <input name="parents" type="text" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">adresse</label>
                            <input name="adresse"  type="text" class="form-control" id="exampleInputPassword1" >
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">date_naissance</label>
                            <input name="date_naissance" type="text" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">email</label>
                            <input name="email" type="text" class="form-control" id="exampleInputPassword1" >
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">nom_parents</label>
                            <input name="nom_parents" type="text" class="form-control" id="exampleInputPassword1">
                        </div>
                    </form>
                    
                </div>
                
                 <?php require APPROOT . '/views/inc/footer.php'; ?>
  <?php require APPROOT . '/views/inc/linkJS.php'; ?>

      
  </body>