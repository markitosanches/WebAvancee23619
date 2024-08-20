{{ include('layouts/header.php', {title:'Create User'})}}
    <div class="container">
        <form  method="post">
            <h2>New User</h2>
            <label>Name
                <input type="text" name="name" value="{{ user.name}}">
            </label>
            {% if errors.name is defined %}
                <span class="error">{{ errors.name }}</span>
            {% endif %}
            <label>Username
                <input type="email" name="username" value="{{ user.username}}">
            </label>
            {% if errors.username is defined %}
                <span class="error">{{ errors.username }}</span>
            {% endif %}
            <label>Password
                <input type="password" name="password" value="{{ user.password}}">
            </label>
            {% if errors.password is defined %}
                <span class="error">{{ errors.password }}</span>
            {% endif %}
            <label>Email
                <input type="email" name="email" value="{{ user.email}}">
            </label>
            {% if errors.email is defined %}
                <span class="error">{{ errors.email }}</span>
            {% endif %}
            <label>Privilege
                <select name="privilege_id">
                    <option value="">Select Privilege</option>
                    {% for privilege in privileges %}
                    <option value="{{privilege.id}}" {% if privilege.id==user.privilege_id %} selected {% endif %}>{{privilege.privilege}}</option>
                    {% endfor %}
                </select>
            </label>
            {% if errors.privilege_id is defined %}
                <span class="error">{{ errors.privilege_id }}</span>
            {% endif %}

            <input type="submit" class="btn" value="Save">
        </form>
    </div>
{{ include('layouts/footer.php')}}