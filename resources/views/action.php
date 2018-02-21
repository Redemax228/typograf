<?php if (isset($_POST['name']))
{
//здесь прописываем код обработки формы
    $str_out =$_POST['name'] ;
    $str_out=mb_strtoupper ($str_out);
    echo $str_out;

}
?>
