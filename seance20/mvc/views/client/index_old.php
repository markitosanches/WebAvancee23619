<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client</title>
    <link rel="stylesheet" href="<?=ASSET;?>css/style.css">
</head>
<body>
    <main>
    <h1>Client</h1>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Address</th>
                <th>Phone</th>
                <th>Zip Code</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($select as $row) {
            ?>
             <tr>
                <td><?= $row['name'];?></td> 
                <td><?= $row['address'];?></td>
                <td><?= $row['phone'];?></td>
                <td><?= $row['zip_code'];?></td>
                <td><?= $row['email'];?></td>
            </tr>
            <?php    
            } 
            ?>
        </tbody>
    </table>
    
    </main>
</body>
</html>