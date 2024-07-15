<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client Show</title>
    <link rel="stylesheet" href="{{asset}}css/style.css">
</head>
<body>
    <main>
    <div class="container">
        <h1>Client</h1>
        <p><strong>Name:</strong>{{ client.name }}</p>
        <p><strong>Address:</strong>{{ client.address }}</p>
        <p><strong>Phone:</strong>{{ client.phone }}</p>
        <p><strong>Zip Code:</strong>{{ client.zip_code }}</p>
        <p><strong>email:</strong>{{ client.email }}</p>
        <a class="btn" href="{{base}}/client/edit?id={{ client.id }}">Edit</a>
        <form action="client-delete.php" method="post">
            <input type="hidden" name="id" value="{{ client.id }}">
            <button class="btn red">Delete</button>
        </form>    
    </div>
</main>
</body>
</html>