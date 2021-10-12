<?php require_once "includes/header.php";

$title = "index";
?>


<h1 class="mt-2 mb-3" style="text-align: center;">Registration For Conference.</h1>
<form>

    <div class="mb-3">
        <label for="firstName" class="form-label">First Name</label>
        <input type="text" class="form-control" id="firstName">

    </div>
    <div class="mb-3">
        <label for="lastName" class="form-label">Last Name</label>
        <input type="text" class="form-control" id="lastName">

    </div>

    <div class="mb-3">
        <label for="dob" class="form-label">Date of Birth</label>
        <input type="text" class="form-control" id="dob" placeholder="MM/DD/YYYY">

    </div>

    <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>

    <div class="mb-3">
        <label for="contact" class="form-label">Contact Number</label>
        <input type="number" class="form-control" id="contact">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>

    </div>
    <div class="mb-3">
        <label for="speciality" class="form-label">Speciality</label>
        <select class="form-select" aria-label="Default select example">

            <option selected value="1">Software Developer</option>
            <option value="2">Database Administrator</option>
            <option value="3">Web Administrator</option>
            <option value="">Other</option>
        </select>
    </div>
    <div class="d-grid ">
        <button type="submit" class="btn btn-primary  mb-5 btn-block">Submit</button>

    </div>
</form>

<?php require_once "includes/footer.php"; ?>