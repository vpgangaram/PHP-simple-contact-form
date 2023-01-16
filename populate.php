<?php

ini_set('error_reporting', 6135);
ini_set('display_errors', 'On');
    $servername = "localhost";
    $username = "root";
    $password = "V#Carem9";
    $dbname="myDB";

    $conn = new mysqli($servername, $username, $password, $dbname);
    $sql="INSERT INTO contacts(firstName, lastName, email, addres, selectOption, comment) VALUES
    ('chan', 'hbwjn', 'eicjk@ex.com', 'wdhv', 'query', '1vnmbjgfkj'),
    ('chan', 'hbwjn', 'eicjk@ex.com', 'wdhv', 'query', '2vnmbjgfkj'),
    ('chan', 'hbwjn', 'eicjk@ex.com', 'wdhv', 'query', '3vnmbjgfkj'),
    ('chan', 'hbwjn', 'eicjk@ex.com', 'wdhv', 'query', '4vnmbjgfkj'),
    ('chan', 'hbwjn', 'eicjk@ex.com', 'wdhv', 'query', '5vnmbjgfkj'),
    ('chan', 'hbwjn', 'eicjk@ex.com', 'wdhv', 'query', '6vnmbjgfkj'),
    ('chan', 'hbwjn', 'eicjk@ex.com', 'wdhv', 'query', '7vnmbjgfkj'),
    ('chan', 'hbwjn', 'eicjk@ex.com', 'wdhv', 'query', '8vnmbjgfkj'),
    ('chan', 'hbwjn', 'eicjk@ex.com', 'wdhv', 'query', '9vnmbjgfkj'),
    ('chan', 'hbwjn', 'eicjk@ex.com', 'wdhv', 'query', '0vnmbjgfkj'),
    ('chan', 'hbwjn', 'eicjk@ex.com', 'wdhv', 'query', '9vnmbjgfkj'),
    ('chan', 'hbwjn', 'eicjk@ex.com', 'wdhv', 'query', '8vnmbjgfkj'),
    ('chan', 'hbwjn', 'eicjk@ex.com', 'wdhv', 'query', '7vnmbjgfkj'),
    ('chan', 'hbwjn', 'eicjk@ex.com', 'wdhv', 'query', '6vnmbjgfkj'),
    ('chan', 'hbwjn', 'eicjk@ex.com', 'wdhv', 'query', '5vnmbjgfkj'),
    ('chan', 'hbwjn', 'eicjk@ex.com', 'wdhv', 'query', '4vnmbjgfkj'),
    ('chan', 'hbwjn', 'eicjk@ex.com', 'wdhv', 'query', '3vnmbjgfkj')";
   
    $conn->query($sql);
    $conn->close();