
<?php require('db.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Automobili</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/template.css" rel="stylesheet">
    <![endif]-->
</head>

<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">Automobili</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="index.php">Početna</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>

<div class="container">

    <div class="starter-template">
        <h1>Automobili</h1>
        <p class="lead">Aplikacija za automobile.</p>
    </div>

    <div>
        <p>
            <?php
            if (!isset($_SESSION['count'])) {
                $_SESSION['count'] = 0;
            } else {
                $_SESSION['count']++;
            }
            $sql = "SELECT name, genre FROM games";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                // output data of each row
                echo('<table>');
                echo('<tr><th>Steam Library</th></tr>');
                while($row = $result->fetch_assoc()) {
                    echo('<tr>');
                    //echo "id: " . $row["id"]. " - registracija: " . $row["registracija"]. " -> " . $row["ime"]. "<br>";
                    echo('<td>' . $row['name'] . '</td>');
                    echo('<td>' . $row['genre'] . '</td>');
                    echo('<td>' . '<a href="delete.php?id=' . $row['id'] . '"><img src="img/delete.gif"></a>' . '</td>');
                    echo('<td>' . '<a href="edit.php?id=' . $row['id'] . '"><img src="img/edit.gif"></a>' . '</td>');
                    echo('</tr>');
                }
                echo('</table>');
            } else {
                echo "Nema igrica";
            }
            $conn->close();
            ?>
        </p>
    </div>

</div><!-- /.container -->


</body>
</html>