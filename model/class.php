<?php

function get_classes() { 
    global $db;
    $query = 'SELECT * FROM classes ORDER BY ID';
    $statement = $db->prepare($query); $statement->execute();
    $classes = $statement->fetchAll(); $statement->closeCursor(); 
    return $classes;
}

function get_class_name($class_id) { 
    global $db;
    $query = 'SELECT * FROM classes WHERE ID = :class_id'; $statement = $db->prepare($query);
    $statement->bindValue(':class_id', $class_id); $statement->execute();
    $class = $statement->fetch(); $statement->closeCursor();
    if($class) {
        $class_name = $class['class']; return $class_name;
        }
} 

function add_class($name)
{
    global $db;
    $query = 'INSERT INTO classes (className)
              VALUES (:class_name)';
    $statement = $db->prepare($query);
    $statement->bindValue(':class_name', $name);
    $statement->execute();
    $statement->closeCursor();
}

function delete_class($class_id)
{
    global $db;
    $query = 'DELETE FROM classes 
              WHERE ID = :class_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':class_id', $class_id);
    $statement->execute();
    $statement->closeCursor();
}

?>