<!DOCTYPE html>
<html>
<head>
<title>Generation adjective</title>
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link href="stil/css/bootstrap.min.css" rel="stylesheet">
 <link href="stil/css/mystyle.css" rel="stylesheet">
 <link href="stils.css" rel="stylesheet">
</head>
<body>
    <form>
        <ul class="nav nav-pills">
  <li role="presentation"><a href="admin.php">Авторы</a></li>
  <li role="presentation" class="active"><a href="index.html">Генератор/Стемматизатор</a></li>
</ul>
    </form>
<form align="center">
    <tx><h1><b>Морфологический генератор / стемматизатор</b></h1></tx></br>
	
	<ul class="nav nav-tabs nav-justified nav nav-pills">
	    <li></li>
        <li role="presentation"><a href="generationV.php">Генератор глаголов</a></li>
        <li role="presentation"><a href="StemulatorV.php">Стемматизатор глаголов</a></li>
        <li role="presentation"><a href="generationN.php">Генератор сущест-ных</a></li>
        <li role="presentation"><a href="StemulatorN.php">Стемматизатор сущест-ных</a></li>
        <li role="presentation" class="active"><a href="adjective.php">Прилагательное</a></li>
		<li></li>
    </ul>
	</br>
    <?php
    /*$file123 = file('file123.txt');
    $file1234 = file('file1234.txt');
    $file12 = file('file12.txt');*/
 
echo "<table align='center' ><tr>
                <td width='600' align='center'><h2><b>Создание прилагательных</b></h2></td>
                </tr></table>";
echo "<table border='1' align='center' class='table-striped'><tr>
                <td width='600' align='center'><h4><b>Морфологический метод</b></h4></td>
                <td width='600' align='center'><h4><b>Синтаксический метод</b></h4></td>
                </tr></table>";
echo "<table border='1' align='center' class='table-striped'><tr>
                <td width='600' align='center'><h4>Создание новых прилагательных путем добавления окончаниях в основу слова называется методом морфологического. В этом методе мы можем создавать прилагательные, используя префиксы и постфиксы. В основном этот метод используется для создания прилагательных путем добавления суффиксов к существительным и глаголам.
</h4></td>
                <td width='600' align='center'><h4>Синтаксический метод образования прилагательных заключается в слиянии слов. В этом методе прилагательные часто образуются путем добавление существительных к существительным или глаголам.
</h4></td>
                </tr></table>";
    ?>
    <br>
    <input type="text" name="suz" id="javob" size="60" height="30" maxlength="90" placeholder="введите слово для анализа" autofocus />
    <input type="submit" name="click" value="Анализация" /></br></br>
</form>
<table align="center">
<?php

if(isset($_GET['click']))
{
    
	generatorA();
}
    function generatorA()
    {
        $adjective_li = file('adjective_li.txt'); //here's the filename
        $suz = $_GET["suz"];

        $num = strlen($suz);
        $siff22 = $num - 2;
        $siff33 = $num - 3;
        //echo"$num";

        // orqa qo`shimchalar
        $sif2 = substr($suz ,$num-2,$num); // Первая часть "putin"
        $sifat2 = substr($suz ,0,$num-2); 
        $sif3 = substr($suz ,$num-3,$num); 
        $sifat3 = substr($suz ,0,$num-3); 
        $sif4 = substr($suz ,$num-4,$num); 
        $sifat4 = substr($suz ,0,$num-4);
        $sif5 = substr($suz ,$num-5,$num); 
        $sifat5 = substr($suz ,0,$num-5);

        //old qo`shimchalar
        $sif22 = substr($suz ,0,$num-$siff22);
        $sifat22 = substr($suz ,$num-$siff22,$num);
        $sif33 = substr($suz ,0,$num-$siff33);
        $sifat33 = substr($suz ,$num-$siff33,$num);  

        $s="aa";
        if (strlen($suz) <= strlen($s))
        {
            echo "Error! It is no Adjective!";
        }
        elseif($sif2 == 'li')
        {
            print "<tr>
                <td><h4>прилагательное: <b>$suz</b><h4></td>
                </tr>
                <tr>
                <td><h4>основное слово: <b>$sifat2</b></h4></td>
                </tr>
                <tr>
                <td><h4>окончание: <b>li</b> - <i>это в узбекском языке прилагательное наиболее продуктивным окончание</i></h4></td>
                </tr>
                <tr>
                <td><h4>другие примеры: <b>bilimli</b> - <i>знающий</i>, <b>mevali</b> - <i>фруктовый</i></h4></td>
                </tr>";
        }
        elseif($sif3 == 'siz')
        {
            print "<tr>
                <td><h4>прилагательное: <b>$suz</b><h4></td>
                </tr>
                <tr>
                <td><h4>основное слово: <b>$sifat3</b></h4></td>
                </tr>
                <tr>
                <td><h4>окончание: <b>siz</b> - <i>это сушествителные соединяется с основами и делает прилагательные в смысле отсутствия объекта, выраженного основанием</i></h4></td>
                </tr>
                <tr>
                <td><h4>другие примеры: <b>shakarsiz</b> - <i>без сахара</i>, <b>suvsiz</b> - <i>без воды</i></h4></td>
                </tr>";
        }
        elseif($sif3 == 'viy')
        {
            print "<tr>
                <td><h4>прилагательное: <b>$suz</b><h4></td>
                </tr>
                <tr>
                <td><h4>основное слово: <b>$sifat3</b></h4></td>
                </tr>
                <tr>
                <td><h4>окончание: <b>viy</b> - <i>это он соединяется с сушествительным создает прилагательные в том смысле, что сушествительные ​​взаимо с выражаемым объектом</i></h4></td>
                </tr>
                <tr>
                <td><h4>другие примеры: <b>tarixiy</b> - <i>исторический</i>, <b>ilmiy</b> - <i>научный</i></h4></td>
                </tr>";
        }
        elseif($sif2 == 'iy')
        {
            print "<tr>
                <td><h4>прилагательное: <b>$suz</b><h4></td>
                </tr>
                <tr>
                <td><h4>основное слово: <b>$sifat2</b></h4></td>
                </tr>
                <tr>
                <td><h4>окончание: <b>$sif2</b> - <i>это он соединяется с сушествительным создает прилагательные в том смысле, что сушествительные ​​взаимо с выражаемым объектом</i></h4></td>
                </tr>
                <tr>
                <td><h4>другие примеры: <b>tarixiy</b> - <i>исторический</i>, <b>ilmiy</b> - <i>научный</i></h4></td>
                </tr>";
        }
        elseif($sif2 == 'gi')
        {
            print "<tr>
                <td><h4>прилагательное: <b>$suz</b><h4></td>
                </tr>
                <tr>
                <td><h4>основное слово: <b>$sifat2</b></h4></td>
                </tr>
                <tr>
                <td><h4>окончание: <b>$sif2</b> - <i>это время и место сушествительных </i></h4></td>
                </tr>
                <tr>
                <td><h4>другие примеры: <b>yozgi</b> - <i>летний</i>, <b>tashqi</b> - <i>внешний</i></h4></td>
                </tr>";
        }
        elseif($sif4 == 'rang')
        {
            print "<tr>
                <td><h4>прилагательное: <b>$suz</b><h4></td>
                </tr>
                <tr>
                <td><h4>основное слово: <b>$sifat4</b></h4></td>
                </tr>
                <tr>
                <td><h4>окончание: <b>$sif4</b> - <i>слово существительное синтаксического метода</i></h4></td>
                </tr>
                <tr>
                <td><h4>другие примеры: <b>havorang</b></h4></td>
                </tr>";
        }
        elseif($sif5 == 'do`st')
        {
            print "<tr>
                <td><h4>прилагательное: <b>$suz</b><h4></td>
                </tr>
                <tr>
                <td><h4>основное слово: <b>$sifat5</b></h4></td>
                </tr>
                <tr>
                <td><h4>окончание: <b>$sif5</b> - <i>слово существительное синтаксического метода</i></h4></td>
                </tr>
                <tr>
                <td><h4>другие примеры: <b>sohibjamol</b></h4></td>
                </tr>";
        }
        elseif($sif5 == 'jamol')
        {
            print "<tr>
                <td><h4>прилагательное: <b>$suz</b><h4></td>
                </tr>
                <tr>
                <td><h4>основное слово: <b>$sifat5</b></h4></td>
                </tr>
                <tr>
                <td><h4>окончание: <b>$sif5</b> - <i>слово существительное синтаксического метода</i></h4></td>
                </tr>
                <tr>
                <td><h4>другие примеры: <b>mehmondo`st</b></h4></td>
                </tr>";
        }
        elseif($sif22 == 'no')
        {
            print "<tr>
                <td><h4>прилагательное: <b>$suz</b><h4></td>
                </tr>
                <tr>
                <td><h4>основное слово: <b>$sifat22</b></h4></td>
                </tr>
                <tr>
                <td><h4>окончание: <b>$sif22</b> - <i>добавляющий аффикс перед основанием</i></h4></td>
                </tr>
                <tr>
                <td><h4>другие примеры: <b>nohaq, noqulay</b></h4></td>
                </tr>";
        }
        elseif($sif33 == 'ser')
        {
            print "<tr>
                <td><h4>прилагательное: <b>$suz</b><h4></td>
                </tr>
                <tr>
                <td><h4>основное слово: <b>$sifat33</b></h4></td>
                </tr>
                <tr>
                <td><h4>окончание: <b>$sif33</b> - <i>добавляющий аффикс перед основанием</i></h4></td>
                </tr>
                <tr>
                <td><h4>другие примеры: <b>serdavlat</b></h4></td>
                </tr>";
        }
        else{
            print "<tr>
                <td><h4>прилагательное: <b>$suz</b><h4></td>
                </tr>
                <tr>
                <td><h4>основное слово: $suz</h4></td>
                </tr>
                <tr>
                <td><h4>окончание: <b>-</b></h4></td>
                </tr>
                <tr>
                <td><h4>описание: - <i>Относится к типу прилагательных не имеют суффикса. Мы можем узнать, что такие прилагательные относятся к категории прилагательных, только по значению слова и его месту в предложении.</i></h4></td>
                </tr>
                <tr>
                <td><h4>другие примеры: <b>go`zal</b> - <i>красивый</i>, <b>issiq</b> - <i>теплый</i>, <b>chaqqon</b> - <i>подвижный</i></h4></td>
                </tr>";
        }
    }
?>
</table>
</body>
</html>