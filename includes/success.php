<?php 
    
    $title='Success';
    require_once 'include/header.php';
    
   
?>



    
    <h1 class="text-centre text-success">You have been registered</h1>

    <!--if(isset($_POST['submit'])){
        //extract values from the $_POST array
        $fname = $_POST['firstname'];
        $lname = $_POST['lastname'];
        $dob = $_POST['dob'];
        $email = $_POST['email'];
        $contact = $_POST['phone'];
        $specialty = $_POST['specialty'];

        $isSuccess = $crud->insertAttendees($fname, $lname, $dob, $email,$contact,$specialty,$destination);

        
        if($isSuccess){
            echo'<h1 class="text-centre text-success">You have been registered</h1>';
        }
        else{
            echo'<h1 class="text-centre text-danger">There was error in Processing</h1>';
        }

    }

    
    ?>

        

         <-- This prints out values that were passed to the action page using method="get" -->
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">
            <?php echo $_GET['firstname'] . ' ' . $_GET['lastname'];  ?>
            </h5>
            <h6 class="card-subtitle mb-2 text-muted">
                <?php echo $_GET['specialty'];  ?>    
            </h6>
            <p class="card-text">
                Date Of Birth: <?php echo $_GET['dob'];  ?>
            </p>
            <p class="card-text">
                Email Adress: <?php echo $_GET['email'];  ?>
            </p>
            <p class="card-text">
                Contact Number: <?php echo $_GET['phone'];  ?>
            </p>
    
        </div>
    </div> 


    <!--<div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">
                <?php //echo $_POST['firstname'] . ' ' . $_POST['lastname'];  ?>
            </h5>
            <h6 class="card-subtitle mb-2 text-muted">
                <?php //echo $_POST['specialty'];  ?>    
            </h6>
            <p class="card-text">
                Date Of Birth: <?php //echo $_POST['dob'];  ?>
            </p>
            <p class="card-text">
                Email Adress: <?php //echo $_POST['email'];  ?>
            </p>
            <p class="card-text">
                Contact Number: <?php //echo $_POST['phone'];  ?>
            </p>
    
        </div>
    </div> -->
    
        
    <br>
    <br>
    <br>
    <br>
    <br>
    <?php require_once'include/footer.php'; ?>

