<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
<!-- mettre css et js -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <script src="{{asset('js/maing.js')}}"></script>



    <title>Document</title>
</head>
<body>
    @yield("header")
    @yield("content")
    @yield("footer")
</body>
</html>