<html>
<body>

Thank you for signing up to weekly newsletter! We have added the following to our files regarding your interests:
<br>
First Name: <?php echo $_POST[name]; ?><br>
email: <?php echo $_POST[mail]; ?><br>
birthday:<?php echo $_POST[bday]; ?><br>
Your interests: :<?php echo $_POST[interests]; ?><br>

<?php if
(isset($_POST['interests']) && !empty($_POST['interests']))
    foreach($_POST['interests'] as $interests) echo $interests;
?>
</body>
</html>
