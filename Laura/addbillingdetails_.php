<?php

 include_once 'config[1].php'
?>

<?php

 $fname = $_POST["fname"];
 $lname = $_POST["lname"];
 $streetname = $_POST["street"];
 $apt = $_POST["Apt"];
 $district = $_POST["district"];
 $phone = $_POST["phone"];
 $email = $_POST["email"];
 $notes = $_POST["notes"];
 
 

 $sql = "INSERT INTO billingdetails (b_FirstName,b_LastName,b_StreetAddress,b_LocationType,b_State,b_Phone,b_Email,b_OrderNotes) values ('$fname','$lname','$streetname','$apt','$district',' $phone','$email','$notes')";

 if(mysqli_query($conn,$sql)){
    echo "<script>
    alert('record inserted succesfully');
    window.location.href='pm.php';
    </script>";
 }
 else{
    echo "<script>
    alert ('insertion failed');
    </script>";
 }
?>