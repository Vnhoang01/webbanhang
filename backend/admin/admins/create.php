<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Thêm quản trị viên</title>
</head>
<body>
    <?php
        include_once "../../Layout/header.php";
    ?>
     <form method="post" action="store.php">
        <label for="name">Name: </label><input type="text" name="name" id="name"><br>
        <label for="email">Email: </label><input type="text" name="email" id="email"><br>
        <label for="password">Password: </label><input type="text" name="password" id="password"><br>
        <label for="role">Role: </label><input type="text" name="role" id="role"><br>
        <label for="phone">Phone: </label><input type="text" name="phone" id="phone"><br>
        <label for="address">Address: </label><input type="text" name="address" id="address"><br>
        <button>Thêm</button>
    </form>
</body>
<footer>
    <?php
        include_once "../../Layout/footer.php";
    ?>
</footer>
</html>
