<?php

switch ($action) {
    case "add_item":
        if ($make_id && $Description && $Title) {
            add_item($make_id, $Title, $Description);
            header("Location: .?make_id=$make_id");
        } else {
            $error = "Invalid item data. Check all fields and try again";
            include("view/error.php");
            exit();
        }
        break;
    case "delete_item":
        if ($ItemNum) {
            delete_item($ItemNum);
            header("Location: .?make_id=$make_id");
        } else {
            $error = "Missing or incorrect item id.";
            include('view/error.php');
        }
        break;
    case "list_items":
        $items =  get_items($make_id, $type_id, $class_id, $order_by);
        $makes = get_makes();
        $types = get_types();
        $classes = get_classes();
        include('view/item_list.php');
        break;
    }
?>