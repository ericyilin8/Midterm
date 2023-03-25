<?php

function get_items($make_id, $type_id, $class_id, $order_by)
{
    global $db;
    $query = 'select v.year, v.model, v.price, m.Make, t.Type, c.Class
    from makes m, vehicles v, types t, classes c
    where v.make_id = m.ID and v.type_id=t.ID and v.class_id=c.ID';

    if($make_id) $query .= ' and v.make_id=:make_id';
    else if($type_id) $query .= ' and v.type_id=:type_id';
    else if($class_id) $query .= ' and v.class_id=:class_id';

    if($order_by) $query .= ' order by ' . $order_by;

    $statement = $db->prepare($query);

    if($make_id) $statement->bindValue(':make_id', $make_id);
    else if($type_id) $statement->bindValue(':type_id', $type_id);
    else if($class_id) $statement->bindValue(':class_id', $class_id);

    $statement->execute(); 
    $items = $statement->fetchAll(); 
    $statement->closeCursor(); 
    return $items;
}

function delete_item($ID)
{
    global $db;
    $query = 'DELETE FROM vehicles
              WHERE ID = :ID';
    $statement = $db->prepare($query);
    $statement->bindValue(':ID', $ID);
    $success = $statement->execute();
    $statement->closeCursor();   
}

function add_item($Title, $Description)
{
    global $db;
    $query = 'INSERT INTO vehicles
                 (Title, Description)
              VALUES
                 (:Title, :Description)';
    $statement = $db->prepare($query);
    $statement->bindValue(':Title', $Title);
    $statement->bindValue(':Description', $Description);
    $statement->execute();
    $statement->closeCursor();
}

?>