<html>
<head>

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <title> Типограф </title>

</head>
<body>

<img src="img/1.jpg" width="80" >
<form method="post" action='/'>
    {{ csrf_field() }}
    <br><textarea id="workText" name="workText"  rows="15" cols="77">{{$workText or ''}}</textarea>

    <br><br><input type="submit" value="Типографувати"/>
    <input type="button" value ="Виділити все" onclick="getElementById('workText').select();" />
    <input type="button" value=" Очистити" onclick="getElementById('workText').value='';">
</form>

<form method="post" action='/'>
    {{ csrf_field() }}
    <textarea id="result" name="textResult" rows="15" cols="77">{{$result or ''}}</textarea>
    <br>
    <input type="button" id="bu3" value="Виділити все" onclick="getElementById('result').select();">
    <input type="button" value=" Очистити" onclick="getElementById('result').value='';">
</form>

</body>
</html>


