<?php 

require "database.php";

?>

<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    
   <link rel="stylesheet" type="text/css" href="styles.css">

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>  
    
    <title>Shoutbox</title>
  </head>
  <body>

    <div class="container">
         <div class="row">
           
            <div class="col-sm-10 mt-5 mx-auto p-2">
              
              <h1 class="text-center">Shoutbox</h1>
              
              <div id="shouts">
                
                <ul class="list-group">

                  <?php 
                      $query="SELECT * FROM shouts ORDER BY id DESC";
                      $result=mysqli_query($conn,$query);
                      
                      $row=mysqli_fetch_all($result,MYSQLI_ASSOC);
                      foreach ($row as $key) 
                      {
                        $name=$key['name'];
                        $shout=$key['shout'];
                        $date=$key['date'];

                       ?> 
                     <li class="list-group-item"> <?php echo $name.': '.$shout.'['.$date.']' ?> </li> 

                     <?php } ?>
                  
                </ul>
              
              </div>

              <div id="form" class="">
                
                <form id="shout-form" class="form-inline">
                  
                  <div class="form-group col-sm-3">
                      <label class="mr-2">Name</label>
                      <input type="text" name="name" id="name" class="form-control w-50">
                    
                  </div>

                   <div class="form-group col-sm-7">
                      <label class="mr-2">Shout Text</label>
                      <input type="text" name="shout" id="shout" class="form-control w-75">
                    
                  </div>

                  <input type="submit" class="btn btn-dark" value="Shout">
                  
                </form>

              </div>

            </div>

         </div>


    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script type="text/javascript" src="app.js"></script>

  </body>
</html>