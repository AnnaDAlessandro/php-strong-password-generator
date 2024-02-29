<?php

include_once __DIR__ . '/partials/functions/functions.php';
$letters='abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
$numbers='0123456789';
$simboli='!@#$%^&*?()[]{}-_;:';
if(isset($_GET['lunghezzapassword'])){
  $lunghezzapassword=$_GET['lunghezzapassword']; 
  $consentiDuplicazione= $_GET['consentiDuplicazione'];
  $response= generaPassword($lunghezzapassword, $letters, $numbers,$simboli,$consentiDuplicazione);
}




?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <title>Strong password</title>
</head>
<body class="p-5">
    <header class="p-3">
       <h1 class="text-center">Strong Password Generator</h1>
       <h2 class="text-center font-weight-bold">Genera una password sicura</h2> 
    </header>
    <main class="container">
        <form action="index.php" method="get">
            <div class="row mb-5 d-flex flex-column gap-4">
               <div class="col-7 d-flex justify-content-between my-5">
                  <label 
                  for="lunghezzapassword" 
                  class="form-label">Lunghezza Password</label>
                
                  <input 
                  type="number" 
                  class="form-control w-50"
                  name="lunghezzapassword"
                  placeholder="Inserisci un numero"
                  id="lunghezzapassword"
                 
                  >
                
                
                
              </div>
              <div class="col-2 col-4 d-flex justify-content-between mb-5">
                <span>Consenti ripetizioni di uno o più caratteri</span>
                <div>
                    <div class="form-check">
                    
                    <input 
                    class="form-check-input" 
                    type="radio" 
                    name="consentiDuplicazione" 
                    id="consentiDuplicazione"
                    value="1"
                    checked >
                    <label 
                    class="form-check-label" 
                    for="consentiDuplicazione">Si</label>
                </div>
                <div class="form-check">
                    
                    <input 
                    class="form-check-input" 
                    type="radio" 
                    name="consentiDuplicazione" 
                    id="consentiDuplicazione" 
                    value="0">
                    <label 
                  class="form-check-label" 
                  for="consentiDuplicazione">No</label>
                </div>
                </div>
                

              </div>
            </div>
            

             <div>
                 <button class="btn btn-primary">Invia</button>
                 <button class="btn btn-secondary">Annulla</button>
             </div>

             <p class="my-5">
                La Password generata è : <?= $response ?>
             </p>
           
        </form>
    </main>
   







<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>