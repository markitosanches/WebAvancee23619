<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ title }}</title>
    <link rel="stylesheet" href="{{asset}}css/style.css">
</head>
<body>
    <nav>
        <ul>
            <li><a href="{{base}}/client">Clients</a></li>
            {% if  guest %}
            <li><a href="{{base}}/login">Login</a></li>
            {% else %} 
                {% if session.privilege_id == 1 %} 
                <li><a href="{{base}}/user/create">Users</a></li>
                {% endif %}
            <li><a href="{{base}}/logout">Logout</a></li>
            {% endif %}
        </ul>
    </nav>
    <main>
        {% if guest is empty %}
            Hello {{ session.name }}
        {% endif %}