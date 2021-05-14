<!DOCTYPE html>
<html>
<head>
<title>Generator Verbs</title>
 <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        <li role="presentation"class="active"><a href="generationV.php">Генератор глаголов</a></li>
        <li role="presentation"><a href="StemulatorV.php">Стемматизатор глаголов</a></li>
        <li role="presentation"><a href="generationN.php">Генератор сущест-ных</a></li>
        <li role="presentation"><a href="StemulatorN.php">Стемматизатор сущест-ных</a></li>
        <li role="presentation"><a href="adjective.php">Прилагательное</a></li>
        <li></li>
    </ul>
	</br>
    <input type="text" name="suz" id="javob" size="60" height="30" maxlength="90" placeholder="введите слово для анализа" autofocus />
    <input type="submit" name="click" value="Анализация" /></br></br>
</form>
<table border="2" align="center" class="table-striped">
<?php
if(isset($_GET['click']))
{
	stimulatorV(); 
}
    function stimulatorV()
    {
        $glagol = file('glagol.txt'); //here's the filename
        $file = file('file.txt'); //here's the filename
        $suz = $_GET["suz"];
		
		//$suz = "putinvova";
        $num = strlen($suz);
		//echo"$num";
        $suzz = substr($suz ,0,$num-3); // ??? ??? "putin"
		$fel = substr($suz ,$num-3,$num); // ??? ??? "putin"
		//echo"$fel";
        //$part2 = substr($word ,-$num_right_chars); // ??? ??? "vova"
		
        $s="aa";
        if (strlen($suz) <= strlen($s))
        {
            echo "Error! It is no Verb!";
        }
		elseif($fel != 'moq')
		{
			echo "Error! It is no Verb!";
		}
        else
        {
        foreach ($file as $line)
            {
                list($c,$d) = explode(',', $line);
                print "<tr>
                <td width='600' align='center'><h4><b>$c</b></h4></td>
                <td width='250' align='center'><h4><b>$d</b></h4></td>
                </tr>";
            }    
        foreach ($glagol as $line) 
            {
                list($a,$b) = explode(',', $line);
                print "<tr>
                <td><h5>&nbsp;&nbsp;&nbsp;$a</h5></td>
                <td><b>&nbsp;&nbsp;&nbsp;$suzz$b</b></td>
                </tr>";
            }
        }
    }
?>
</table>
</body>
</html>