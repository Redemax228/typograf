<html>
<head>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <title> Типограф </title>

</head>
<body>


<img src="img/1.jpg" width="80">
<form action='/redemax/public' method="post">
    <br>  <textarea id="workText" name="workText" rows="18" cols="100">{{$result or ''}}</textarea>
    <br><br><input type="submit" value="Типографувати"/>
    <input type="reset" value ="Очистити">
    <input type="submit" value ="Виділити все"/>
    <input type="submit" value ="Прибрати теги"/>
</form>

<audio  controls src="audio/mus.mp3"></audio>
<audio controls src="audio/2.mp3"></audio>



</body>
</html>


