<?php
if (!isset($_COOKIE['isLogin'])) {
    header("location: ../login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<?php include 'header.php'; ?>

    <!-- page content here -->
    <div class="content">
        <!-- CONTENTS OF DASHBOARD HERE -->
    </div>


</main>
<!-- END OF MAIN -->

</div>

<script src="./index.js"></script>
<script src="../js/logout.js"></script>
</body>

</html>