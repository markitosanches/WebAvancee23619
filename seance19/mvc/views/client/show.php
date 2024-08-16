{{ include('layouts/header.php', {title:'Show Client'})}}
    <div class="container">
        <h1>Client</h1>
        <p><strong>Name:</strong>{{ client.name }}</p>
        <p><strong>Address:</strong>{{ client.address }}</p>
        <p><strong>Phone:</strong>{{ client.phone }}</p>
        <p><strong>Zip Code:</strong>{{ client.zip_code }}</p>
        <p><strong>email:</strong>{{ client.email }}</p>
        <a class="btn" href="{{base}}/client/edit?id={{ client.id }}">Edit</a>
        <form action="{{base}}/client/delete" method="post">
            <input type="hidden" name="id" value="{{ client.id }}">
            <button class="btn red">Delete</button>
        </form>    
    </div>
{{ include('layouts/footer.php')}}