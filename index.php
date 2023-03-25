<?php
require('model/database.php');
require('model/make.php');
require('model/type.php');
require('model/class.php');
require('model/item_db.php');


$make_name = filter_input(INPUT_POST, 'make_name', FILTER_UNSAFE_RAW);

$make_id = filter_input(INPUT_POST, 'make_id', FILTER_VALIDATE_INT);
if (!$make_id) {
    $make_id = filter_input(INPUT_GET, 'make_id', FILTER_VALIDATE_INT);
}
$type_id = filter_input(INPUT_POST, 'type_id', FILTER_VALIDATE_INT);
if (!$type_id) {
    $type_id = filter_input(INPUT_GET, 'type_id', FILTER_VALIDATE_INT);
}
$class_id = filter_input(INPUT_POST, 'class_id', FILTER_VALIDATE_INT);
if (!$class_id ) {
    $class_id  = filter_input(INPUT_GET, 'class_id', FILTER_VALIDATE_INT);
}
$order_by = filter_input(INPUT_POST, 'order_by', FILTER_UNSAFE_RAW);
if (!$order_by) {
    $order_by = filter_input(INPUT_GET, 'order_by', FILTER_UNSAFE_RAW);
}


$action = filter_input(INPUT_POST, 'action', FILTER_UNSAFE_RAW);
if (!$action) {
    $action = filter_input(INPUT_GET, 'action', FILTER_UNSAFE_RAW);
    if (!$action) {
        $action = 'list_items';
    }
}

require('controller/make.php');

require('controller/type.php');

require('controller/class.php');

require('controller/item_db.php');

?>