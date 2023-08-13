
<?php 
require_once('header.php')

?>
<div class="container">
    <div class="row">
        <div class="col-lg-8 m-auto mt-5">
           <div class="card">
            <div class="card-header"> calcullator</div>
            <div class="card-body">
            <form action="" method="post">
                 <div class="mb-4">
                       <label  class="form-label"> Number one</label>
                          <input type="number" class="form-control" name="number_one">
                  </div>
                 <div class="mb-3">
                       <label  class="form-label"> Number two</label>
                          <input type="number" class="form-control"  name="number_two">
                  </div>
                     <button type="submit" name="add_btn" class="btn btn-primary">add(+)</button>
                     <button type="submit" name="sub_btn" class="btn btn-primary">sub(-)</button>
                     <button type="submit" name="multi_btn" class="btn btn-primary">multi(*)</button>
                     <button type="submit" name="divi_btn" class="btn btn-primary">divi(/)</button>
            </form>
            <?php if (isset($_POST['number_one'])&& isset($_POST['number_two'])): ?>
            <div class="alert alert-success mt-3">
              Results:
              <?php


    if ($_POST['number_one']) {
        if ($_POST['number_two']) {
         if (isset($_POST['add_btn'])) {
             echo $_POST['number_one']+$_POST['number_two'] ;
         }
         if (isset($_POST['sub_btn'])) {
             echo $_POST['number_one']-$_POST['number_two'] ;
         }
         if (isset($_POST['multi_btn'])) {
             echo $_POST['number_one']*$_POST['number_two'] ;
         }
         if (isset($_POST['divi_btn'])) {
             echo $_POST['number_one']/$_POST['number_two'] ;
         }
        }
        else{
         echo'type number two';
        }
     }
     else{
         echo'type number one';
     }


?>
            </div>
            <?php endif; ?>
            </div>
           </div> 

        </div>
    </div>
  </div>


  
<?php 
require_once('footer.php')

?>