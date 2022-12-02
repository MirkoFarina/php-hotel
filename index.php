<?php
    $hotels = [
        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],
    ];
    // creo un array vuoto in cui inserirò le chiavi dei valori
    $arrayKey = [];
    // faccio un foreach di hotels per ottenere il singolo hotel
    foreach ($hotels as $hotel){
        // nel singolo hotel faccio un controllo di univocità e pusho le key nell'array prima creato, per poi stamparle nel th
        foreach ($hotel as $key => $value){
            if(!in_array($key, $arrayKey)) {
                $arrayKey[] = $key;
                }
            }}
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css' integrity='sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==' crossorigin='anonymous'/>
    <title>PHP Hotel</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex align-items-center py-3 px-4">
            <form action="./index.php" method="$_GET" class="d-flex align-items-center justify-content-between w-100">
                <div>
                    <input type="radio" name="parking" id="yes"> 
                    <label for="yes">Parcheggio si</label>
                    <input type="radio" name="parking" id="no">
                    <label for="no">Parcheggio no</label>
                </div>
                <div>
                    <label for="vote"> VOTO </label>
                    <input type="number" name="vote" id="vote" min="0" max="5" >
                </div>
                <div>
                    <button type="submit" class="btn btn-primary"> CERCA</button>
                    <button type="reset" class="btn btn-danger"> RESET </button>
                </div>
            </form>
            </div>
        </div>

        <table class="table table-dark table-striped">
            <thead>
                <tr>
                <?php 
                // CICLO IL MIO ARRAY CHE CONTIENE LE CHIAVI UNIVOCHE
                foreach($arrayKey as $key){ ?>
                <th scope="col">
                    
                    <?php 
                    // STAMPO LE CHIAVI NEL TH
                    echo $key ?>
                </th>
                <?php } ?>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($hotels as $hotel){ ?>
                <tr>

                <?php foreach ($hotel as $key => $value){ ?>
                <td>
                    <?php 
                        if($key === 'parking'){
                            if($value) {
                                $value = 'si';
                            }else {
                                $value = 'no';
                            }
                        }
                        echo  $value 
                    ?>  
                </td>
                <?php } ?>

                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>