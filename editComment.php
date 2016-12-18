<?php
	include 'header.php';
	include 'includes/comments.inc.php';
	date_default_timezone_set('Europe/Dublin');
?>
<body style="background-color:#C0C0C0;">

<?php
$cid = $_POST['cid'];
$username = $_POST['username'];
$date = $_POST['date'];
$message = $_POST['message'];

echo "<form method='POST' action='".editComment($conn)."'>
        <input type='hidden' name='cid' value='".$cid."'/> 
        <input type='hidden' name='username' value='".$username."'/> 
        <input type='hidden' name='date' value='".$date ."'/> 
        <textarea name='message' class='form-control' rows='5' maxlength='1000' style='resize:none;'>".$message."</textarea><br>
        <button type='submit' name='commentSubmit' class='btn btn-default'>Edit</button>
    </form>";
?>

</body>
</html>