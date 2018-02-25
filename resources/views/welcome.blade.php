<?php
error_reporting(E_ALL);
function typograf($text){
    $search = array('°','№','«','»',' - ', '...', '(с)', '(r)', '(tm)');
    $replace = array("&deg;","$#8470;","&laquo;","&raquo;","&nbsp;&mdash;&nbsp;", "&hellip;", "&copy;", "&reg;", "&trade;");
    $text = str_ireplace($search, $replace, $text);
    $text = nl2br($text);
    return $text;
}
require_once('EMT.php');

$result = '';
if(app('request')-> has('workText'))
{
    $typograph = new EMTypograph();

    $typograph->set_text(typograf(app('request') -> input('workText')));
    $result = $typograph->apply();
}

?>

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
    <br><textarea id="workText" name="workText"  rows="15" cols="77" onclick="value='' ">{{$workText or ''}}</textarea>

    <br><br><input type="submit" value="Типографувати"/>

    <input type="reset" value ="Очистити" onclick=""/>
    <input type="submit" value ="Виділити все" />
</form>

<form method="post" action='/'>
    {{ csrf_field() }}
    <textarea id="workText" name="textResult" rows="15" cols="77">{{$result or ''}}</textarea>
    <br>
    <input type="button" id="bu3" value="Виділити все" onclick="dT.focus(); dT.select();" class="button" style="width: 10%" title="выделить текст (Ctrl+A)">
</form>

</body>
</html>


