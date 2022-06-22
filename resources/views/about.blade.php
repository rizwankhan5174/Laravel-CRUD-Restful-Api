<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
@Include('include',['status' => 'complete'])
<body>
    <h2>About PAge View </h2>
    <form method="POST" action="use">
        @csrf
        <input type="text" name="txt">
        <br>
        <input type="number" name="num">
        <br>
        
        <button value="Submit">Submitt</button>
    </form>
</body>
</html>