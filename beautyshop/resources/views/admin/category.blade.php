<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Add category</h1>
    <form action ="{{url('add_category')}}" method=post >
        <label for`="categoryName">Category Namme:</label><br>
        <input type="text" id="categoryName" name="categoryName"><br><br>
        <button type="submit">Add </button>
</form>
</body>
</html>