<?php

switch ($action) {
    case "list_types":
        $types = get_types();
        include('view/type_list.php');
        break;
    case "add_type":
        add_type($type_name);
        header("Location: .?action=list_types");
        break;
    case "delete_type":
        if ($type_id) {
            try {
                delete_type($type_id);
            } catch (PDOException $e) {
                $error = "You cannot delete a type if items exists in the type";
                include('view/error.php');
                exit();
            }
            header("Location: .?action=list_types");
        }
        break;
    }
?>