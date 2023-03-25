<?php

switch ($action) {
    case "list_classes":
        $classes = get_classes();
        include('view/class_list.php');
        break;
    case "add_class":
        add_class($class_name);
        header("Location: .?action=list_classes");
        break;
    case "delete_class":
        if ($class_id) {
            try {
                delete_class($class_id);
            } catch (PDOException $e) {
                $error = "You cannot delete a class if items exists in the class";
                include('view/error.php');
                exit();
            }
            header("Location: .?action=list_classes");
        }
        break;
    }
?>