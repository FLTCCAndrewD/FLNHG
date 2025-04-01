<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ERROR);
?>

<!DOCTYPE>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../myStyles.css">
<title> Andrew J. Dressing Portfolio</title>
</head>
<body>
<table width="100%">
<tr><td align="center">

<table width="1000px" border="1">
<tr><td colspan="3">
<!-- Begin header section -->
<?PHP include '../includes/header.php' ?>
<!-- End header section -->
</td></tr>
<tr><td>
<!-- Begin leftNav section -->
<?PHP include '../includes/leftNav.php' ?>
<!-- End leftNav section -->
</td><td>
<!-- Begin content section -->
<?PHP include '../includes/mainContent.php' ?>
<!-- End content section --></td>
<td>
<!-- Begin rightNav section -->
<?PHP include '../includes/rightNav.php' ?>
<!-- End rightNav section -->
</td></tr>
<tr><td colspan="3">
<!-- Begin footer section -->
<?PHP include '../includes/footer.php' ?>
<!-- End footer section -->
</td></tr>
</table>

</td></tr>
</table>
<body>
</html>