<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
</head>
<body>
   <h1> about us </h1>
        <h1> Home Page</h1>
        <a href="{{ url('/')}}">Home</a> |
        <a href="{{ URL::to('about') }}">About</a> |
        <a href="{{ route('con')}}">Contact</a> |
</body>
</html>