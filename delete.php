<?php
    require_once 'db/conn.php';
    if(!isset($_GET['id'])){
        echo 'error';
        header("Location: viewrecords.php");
    }else{
        // Get ID values
        $id = $_GET['id'];

        //Call Delete function
        $result = $crud->deleteAttendee($id);
        //Redirect to list
        if($result)
        {
            header("Location: viewrecords.php");
        }
        else{
            echo 'error';
        }
    }

?>