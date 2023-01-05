
<?php 
    $title = "Home";
    require_once "includes/header.php"; 
    require_once "db/conn.php";
?>

<!--
    - First Name
    - Last Name
    - Date od Birth (Use DatePicker)
    - Specialty (Database Administrator, Software Developer, Wed Administrator, AI, Other**)
    - Email Addess
    - Contact Number
-->

<h1 class="text-center">IT Conference Registration</h1>

<form method="post" action="success.php">
<div class="mb-3">
    <label for="firstname" class="form-label">First Name</label>
    <input type="text" class="form-control" id="firstname" name="firstname">
    <label for="lastname" class="form-label">Last Name</label>
    <input type="text" class="form-control" id="lastname" name="lastname">
    <label for="dob class="form-label">Date of Birth</label>
    <input type="text" class="form-control" id="dob" name="dob">
</div>
<div class="mb-3">
    <label for="specialty" class="form-label">Primary Specialty</label>
    <input class="form-control" list="datalistOptions" id="specialty" name="specialty" placeholder="Specialty Type...">
    <datalist id="datalistOptions">
    <option value="1">Database Administrator</option>
    <option value="">Software Developer</option>
    <option value="">Web Administrator</option>
    <option value="">AI</option>
    <option value="">Other</option>
    </datalist>
       
</div>
<div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
 
    <label for="phone" class="form-label">Contact Number</label>
    <input type="text" class="form-control" id="phone" name="phone"> 

    <div id="phone" class="form-text">We'll never share your contact details with any 3rd party.</div>
</div>

<button type="submit" class="btn btn-primary btn-block">Submit</button>

</form>
<br>
<br>
<br>
<br>
<br>
<?php require_once "includes/footer.php"; ?>