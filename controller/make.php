<?php

switch ($action) {
    case "list_makes":
        $makes = get_makes();
        include('view/make_list.php');
        break;
    case "add_make":
        add_make($make_name);
        header("Location: .?action=list_makes");
        break;
    case "delete_make":
        if ($make_id) {
            try {
                delete_make($make_id);
            } catch (PDOException $e) {
                $error = "You cannot delete a make if items exists in the make";
                include('view/error.php');
                exit();
            }
            header("Location: .?action=list_makes");
        }
        break;
    }
?>