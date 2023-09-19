<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>
</head>
<body>
    <h2>Admin Panel</h2>
    <form action="upload_package.php" method="POST" enctype="multipart/form-data">
        <label for="name">Package Name:</label>
        <input type="text" name="name" required><br><br>
        <label for="description">Package Description:</label><br>
        <textarea name="description" rows="4" cols="50" required></textarea><br><br>
        <label for="image">Package Image:</label>
        <input type="file" name="image" required><br><br>
        <input type="submit" value="Upload Package">
    </form>
</body>
</html>