<html>
<head>
    <title>Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <H1>Form</H1>
    <div class="row">
        <div class="col-4">
            <?php include('form_sql.php')?>
            <?php
            if(isset($error)){
                echo '<div class="alert alert-danger">' .$error.'</div>';
            }
            elseif(isset($success)) {
                echo '<div class="alert alert-success">' .$success.'</div>';
            }
            ?>
            <form method="POST" action="">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input name="name" type="text" class="form-control" id="name">
                </div>
                <div class="form-group">
                    <label for="surname">Surname</label>
                    <input name="surname" type="text" class="form-control" id="surname">
                </div>
                <div class="form-group">
                    <label for="tel">Tel</label>
                    <input name="tel" type="tel" value="+370" class="form-control" id="tel">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input name="email" type="email" class="form-control" id="email">
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <input name="address" type="text" class="form-control" id="address">
                </div>
                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                <br><a href="form_select.php">User's that used this form</a>
            </form>
        </div>