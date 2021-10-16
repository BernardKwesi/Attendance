<?php
$title = "View Records";
require_once "includes/header.php";
require_once 'db/conn.php';

$results = $crud->getAttendees();
?>

<table class="table table-striped table-hover mt-5">
    <tr>
        <th>#ID</th>
        <th> FIRST NAME</th>
        <th>LAST NAME</th>
        <th>SPECIALITY</th>
        <th>ACTIONS</th>
    </tr>
    <?php while ($row = $results->fetch(PDO::FETCH_ASSOC)) { ?>

        <tr>
            <td> <?php echo $row['attendee_ID'] ?></td>
            <td> <?php echo $row['Firstname'] ?></td>
            <td> <?php echo $row['Lastname'] ?></td>
            <td> <?php echo $row['Expertise'] ?></td>
            <td><a href="view.php?id=<?php echo $row['attendee_ID'] ?>" class="btn btn-primary">Details</a></td>
        </tr>

    <?php } ?>
</table>
<?php require_once "includes/footer.php"; ?>