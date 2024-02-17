<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="Backend.php" method="post">
        <input type="number" name="num1" id="num1" placeholder="Enter Number:">
        <select name="op">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <input type="number" name="num2" id="num2" placeholder="Enter Number:">
        <button type="submit">Submit</button>
    </form>
</body>
</html>