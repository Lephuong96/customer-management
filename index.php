<?php
require "master.php";
require "model/DBConnection.php";
require "model/CustomerDB.php";
require "model/Customer.php";
require "controller/CustomerController.php";

use \Controller\CustomerController;
?>

<div class="container">
    <?php
    $controller = new CustomerController();
    $page = isset($_REQUEST['page'])? $_REQUEST['page'] : NULL;
    switch ($page){
        case 'add':
            $controller->add();
            break;
        case 'delete':
            $controller->delete();
            break;
        case 'edit':
            $controller->edit();
            break;
        case 'update':
            $controller->update();
            break;
        default:
            $controller->index();
            break;
    }
    ?>
</div>

