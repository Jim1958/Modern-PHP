<?php 
$title = "Success";
require_once "includes/header.php";
require_once "db/conn.php";

if(isset($_POST['submit'])){
  // Extract values from the $_POST array
  $fname = $_POST['firstname'];
  $lname = $_POST['lastname'];
  $dob = $_POST['dob'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $specialty = $_POST['specialty'];
  // Call functin to insert and track if successful or not
  $isSuccess = $crud->insert($fname,$lname,$dob,$email,$phone,$specialty);

if($isSuccess){
  echo '<h1 class="text-center text-success">You are now registered</h1>';
}
else{
  echo '<h1 class="text-center text-danger">There was an error in processing</h1>';
}
} 
?> 


<div class="card" style="width: 18rem;">
<img src="images/logo-05.png" class="card-img-top" alt="...">
<h4 class="card">Your Details</h4>
<div class="card-body">
<p class="card-title">Name - <?php echo $_POST['firstname'] . ' ' . $_POST['lastname']; ?></p>
<p class="card-subtitle">DoB: <?php echo $_POST['dob']; ?></p> 
<h5>Contact Details</h5>
<p class="card-text">Email: <?php echo $_POST['email']; ?></p>
<p class="card-text">Phone: <?php echo $_POST['phone']; ?></p>


</div>
</div>


<br>
<br>
<br>
<br>
<?php require_once "includes/footer.php"; ?>