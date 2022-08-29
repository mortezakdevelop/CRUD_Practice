<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Crud</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<body>
<div class="container">
    <button class="btn btn-primary mt-5"><a href="User.php" class="text-light">Add User</a>

    </button>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">S1 no</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Mobile</th>
            <th scope="col">Password</th>
            <th scope="col">Operations</th>
        </tr>
        </thead>
        <tbody>

        <?php
        $con = new mysqli('localhost', 'root', '', 'crud_students');
        $sql = "Select * from `crud`";
        $result = mysqli_query($con, $sql);
        if ($result) {
            //این کد result کوئری رو برمیگردونه
            while ($row = mysqli_fetch_assoc($result)) {
                $id = $row['id'];
                $name = $row['name'];
                $email = $row['email'];
                $mobile = $row['mobile'];
                $password = $row['password'];
                echo ' <tr>
            <th scope="row"> ' . $id . '</th>
            <td>' . $name . '</td>
            <td>' . $email . '</td>
            <td>' . $mobile . '</td>
            <td>' . $password . '</td>
            <td>
            <button class="btn btn-primary"><a href="update.php? updated='.$id.' " class="text-light">Update</a></button>
            <button class="btn btn-danger"><a href="delete.php? deleted='.$id.' " class="text-light">Delete</a></button>

        </td> 
        </tr>';
            }
        }
        ?>

        </tbody>
    </table>
</div>

</body>
</html>
