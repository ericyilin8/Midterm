<?php

function get_types() { 
    global $db;
    $query = 'SELECT * FROM types ORDER BY ID';
    $statement = $db->prepare($query); $statement->execute();
    $types = $statement->fetchAll(); $statement->closeCursor(); 
    return $types;
}

function get_type_name($type_id) { 
    global $db;
    $query = 'SELECT * FROM types WHERE ID = :type_id'; $statement = $db->prepare($query);
    $statement->bindValue(':type_id', $type_id); $statement->execute();
    $type = $statement->fetch(); $statement->closeCursor();
    if($type) {
        $type_name = $type['type']; return $type_name;
        }
} 

function add_type($name)
{
    global $db;
    $query = 'INSERT INTO types (typeName)
              VALUES (:type_name)';
    $statement = $db->prepare($query);
    $statement->bindValue(':type_name', $name);
    $statement->execute();
    $statement->closeCursor();
}

function delete_type($type_id)
{
    global $db;
    $query = 'DELETE FROM types 
              WHERE ID = :type_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':type_id', $type_id);
    $statement->execute();
    $statement->closeCursor();
}

?>