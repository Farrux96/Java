<!DOCTYPE html>
<html>
<head>
<title>Stimulator Nouns</title>
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
        <li role="presentation" class="active"><a href="StemulatorN.php">Стемматизатор сущест-ных</a></li>
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
        $glagolokon = file('nounokon.txt'); //here's the filename
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
            echo "Error! It is no Noun!";
        }
        elseif($fel1 == 'moq')
        {
            echo "Error! It is Verb!";
        }
        else
        {
            foreach ($glagolokon as $line) {
                list($a, $a1, $a2, $a3, $a4, $a5, $a6, $a7, $a8, $a9, $a10, $a11, $a12,$a13) = explode(',',$line);
                //echo "$a";
                $i=2;
                //echo "$num";
                while ($i <= $num)
                {
                    //echo "$ot";
                    $ot = substr($suz, $num-$i, $num);
                    //echo "$a";
                    //echo "$ot";
                    if($ot == $a || $ot == $a1 || $ot == $a2 || $ot == $a3 || $ot == $a4 || $ot == $a5 || $ot == $a6 || $ot == $a7 || $ot == $a8 || $ot == $a9 || $ot == $a10 || $ot == $a11 || $ot == $a12 || $ot == $a13) 
                    {
                        //echo "$a";
                        $suzz = substr($suz, 0, $num-$i);
                        //echo "$suzz";
                        $suz = $suzz;
                        $num = strlen($suz);
                        $i=1;
                    }
                    else{$i=$i+1;}
                    $suzz = $suz;
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
                <td width='250' align='center'><h4>$suzz</h4></td>
                </tr>";
            }    
        
    }
?>
</table>
</body>
</html>