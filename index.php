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

$select_value = $_GET['parking'];
$parking_preference = $select_value === 'no-preference' ? null : $select_value;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotels</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <!-- <?php foreach ($hotels as $hotel) { ?>
        <div class="hotel">
            <h4><?php echo $hotel['name'] ?></h4>
            <ul>
                <li><?php echo $hotel['description'] ?></li>
                <li><?php echo $hotel['parking'] ? 'True' : 'False' ?></li>
                <li><?php echo $hotel['vote'] ?></li>
                <li><?php echo $hotel['distance_to_center'] ?></li>
            </ul>
        </div>
    <?php } ?> -->

    <form class="p-3" action="index.php" method="get">
        <select class="form-select w-50 d-inline" name="parking">
            <option value="no-preference" selected>No preference</option>
            <option value="1">Parking</option>
            <option value="0">No Parking</option>
        </select>
        <button type="submit" class="btn btn-primary">Confirm</button>
    </form>


    <table class="table">
        <thead>
            <tr>
                <?php foreach ($hotels[0] as $key => $hotel_option) { ?>
                    <th scope="col"><?php echo ucwords($key) ?></th>
                <?php } ?>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($hotels as $key => $hotel) { ?>
                <tr class="<?= ($hotel['parking'] == $parking_preference) || ($parking_preference == null) ? '' : 'd-none' ?>">
                    <td scope="col"><?php echo $hotel['name'] ?></td>
                    <td scope="col"><?php echo $hotel['description'] ?></td>
                    <td scope="col"><?php echo $hotel['parking'] ? 'Yes' : 'No' ?></td>
                    <td scope="col"><?php echo $hotel['vote'] ?></td>
                    <td scope="col"><?php echo $hotel['distance_to_center'] ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>