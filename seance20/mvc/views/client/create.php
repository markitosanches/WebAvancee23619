{{ include('layouts/header.php', {title:'Create Client'})}}
    <div class="container">
        <form  method="post">
            <h2>New Client</h2>
            <label>Name
                <input type="text" name="name" value="{{ client.name}}">
            </label>
            {% if errors.name is defined %}
                <span class="error">{{ errors.name }}</span>
            {% endif %}
            <label>Address
                <input type="text" name="address" value="{{ client.address}}">
            </label>
            {% if errors.address is defined %}
                <span class="error">{{ errors.address }}</span>
            {% endif %}
            <label>Phone
                <input type="text" name="phone" value="{{ client.phone}}">
            </label>
            {% if errors.phone is defined %}
                <span class="error">{{ errors.phone }}</span>
            {% endif %}
            <label>Zip Code
                <input type="text" name="zip_code" value="{{ client.zip_code}}">
            </label>
            {% if errors.zip_code is defined %}
                <span class="error">{{ errors.zip_code }}</span>
            {% endif %}
            <label>Email
                <input type="text" name="email"  value="{{ client.email}}">
            </label>
            {% if errors.email is defined %}
                <span class="error">{{ errors.email }}</span>
            {% endif %}
            <input type="submit" class="btn" value="Save">
        </form>
    </div>
{{ include('layouts/footer.php')}}