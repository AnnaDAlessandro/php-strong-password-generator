<?php
$letters='abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
$numbers='0123456789';
$simboli='!@#$%^&*?()[]{}-_;:';
if(isset($_GET['lunghezzapassword'])){
    $lunghezzapassword=$_GET['lunghezzapassword'];
    function generaPassword($lunghezzapassword){

    }
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Strong password</title>
</head>
<body class="p-5">
    <header class="p-3">
       <h1 class="text-center">Strong Password Generator</h1>
       <h2 class="text-center font-weight-bold">Genera una password sicura</h2> 
    </header>
    <main>
        <form action="index.php" method="get">
            <div class="row mb-5">
               <div class="col-2">
                  <label 
                  for="lunghezzapassword" 
                  class="form-label">Lunghezza Password</label>
                
                  <input 
                  type="number" 
                  class="form-control"
                  name="lunghezzapassword"
                  placeholder=""
                  id="lunghezzapassword">
                
                
                
              </div>
            </div>
            

             <div>
                 <button class="btn btn-primary">Invia</button>
                 <button class="btn btn-secondary">Annulla</button>
             </div>
           
        </form>
    </main>
   







<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>