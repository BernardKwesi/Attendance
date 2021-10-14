<?php
$title = "Success";
require_once "includes/header.php";



?>
<h1 class="display-2 text-center text-success">Registration Successful!!!</h1>
<?php
if (isset($_POST['submit'])) {

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    $contact = $_POST['contact'];
    $speciality = $_POST['speciality'];
}
/* echo $_GET['firstname'];
echo $_GET['lastname'];
echo $_GET['email'];
echo  $_GET['dob'];
echo $_GET['contact'];
echo $_GET['speciality']; */







?>

<div class="card" style="width: 18rem;">
    <div class="card-body">
        <p class="card-text"><?php echo $firstname . " " . $lastname ?></p>
        <p class="card-text"><?php echo $email ?></p>
        <p class="card-text"><?php echo $dob ?></p>
        <p class="card-text"><?php echo $contact ?></p>
        <p class="card-text"><?php echo $speciality ?></p>
    </div>
</div>


<?php require_once "includes/footer.php"; ?>