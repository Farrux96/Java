<!DOCTYPE html>
<html>
<head>
<title>Stimulator Verbs</title>
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
        <li role="presentation" class="active"><a href="StemulatorV.php">Стемматизатор глаголов</a></li>
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
        $glagolokon = file('glagolokon.txt'); //here's the filename
        $file = file('file.txt'); //here's the filename
        $suz = $_GET["suz"];
        $moq='moq';
		
		//$suz = "putinvova";
        $num = strlen($suz);
		//echo"$num";

        $suz1 = substr($suz ,0,$num-3); // ??? ??? "putin"
		$fel1 = substr($suz ,$num-3,$num); // ??? ??? "putin"
		//echo"$fel1";
        //$part2 = substr($word ,-$num_right_chars); // ??? ??? "vova"
		
        $s="aa";
        if (strlen($suz) <= strlen($s))
        {
            echo "Error! It is no Verb!";
        }
        elseif($fel1 == 'moq')
        {
            $suzz = $suz1;
        }
		else
		{
            foreach ($glagolokon as $line) {
                list($a, $a1, $a2, $a3, $a4, $a5, $a6, $a7, $a8, $a9, $a10, $a11, $a12, $a13, $a14) = explode(',',$line);
                //echo "$a";
                $i=2;
                //echo "$num";
                while ($i <= $num)
                {
                    //echo "$fel";
                    $fel = substr($suz, $num-$i, $num);
                    //echo "$a";
                    //echo "$fel";
                    if($fel == $a || $fel == $a1 || $fel == $a2 || $fel == $a3 || $fel == $a4 || $fel == $a5 || $fel == $a6 || $fel == $a7 || $fel == $a8 || $fel == $a9 || $fel == $a10|| $fel == $a11 || $fel == $a12 || $fel == $a13 || $fel == $a14) 
                    {
                        //echo "$a";
                        $suzz = substr($suz, 0, $num-$i);
                        //echo "$suzz";
                        $suz = $suzz;
                        $num = strlen($suz);
                        $i=1;
                    }
                    else{$i=$i+1;}
                }
                
		    }
        }
      
        foreach ($file as $line)
            {
                list($c,$d) = explode(',', $line);
                print "<tr>
                <td width='600' align='center'><h4><b>Конфигурация слово образования</b></h4></td>
                <td width='250' align='center'><h4><b>Форма слова</b></h4></td>
                </tr>
                <tr>
                <td width='600' align='center'><h4>stem</h4></td>
                <td width='250' align='center'><h4>$suzz$moq</h4></td>
                </tr>";
            }    
        
    }
?>
</table>
</body>
</html>