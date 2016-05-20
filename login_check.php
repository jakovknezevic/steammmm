<?php require('check.php'); ?>
<?php require('db.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Automobili</title>
</head>

<body>
<h1>
    Automobili
</h1>

<p>
    <?php
    $sql = "SELECT * FROM users WHERE username='" . $_POST['username'] . "' AND password='" . $_POST['password'] . "'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        session_start();
        $_SESSION['id'] = $row['id'];
        header('Location: index2.php');
    } else {
        header('Location: login.php?login=fail');
    }
    ?>
</p>
</body>
</html>