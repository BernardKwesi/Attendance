<footer class="text-center mt-5">
    <div>
        <p>COPYRIGHT @ <?php echo date('y') ?></p>
    </div>
</footer>


</div>


<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> -->
<link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
<!-- <link rel="stylesheet" href="/resources/demos/style.css"> -->
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
<script>
    $(function() {
        $("#dob").datepicker({
            changeMonth: true,
            changeYear: true,
            yearRange: "-75:+0",
            dateFormat: "yy-mm-dd",
        });
    });
</script>
</body>

</html>