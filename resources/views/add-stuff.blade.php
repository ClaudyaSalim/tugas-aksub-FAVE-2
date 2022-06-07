<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Store</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <h1>Add Stuff</h1>
    <div class="form">
        <form action="/create/stuff" method="post">
            @csrf
            <label id="name">Name: </label>
            <input type="text" name="name">
            <br>
            <label>Quantity: </label>
            <input type="text" name="qty">
            <br>
            <div class="button">
                <button type="submit">Add</button>
            </div>
        </form>
    </div>
</body>
</html>