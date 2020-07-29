<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="1.php" method="get">
    <input type="text" placeholder="entre o salário do diretor:" name="valor"><br>
    <input type="text" placeholder="entre o salário do funcionário comum:" name="valor2"><br>
    <input type="text" placeholder="entre o salário do estagiário:" name="valor3"><br>
    <input type="submit">
        </form>
        <?php 
$sal=0;
$bonus=0;
$string=0;
for($i=0;$i<3;$i++){
    if($i==0){
        $sal = $_GET['valor'];
        $bonus = 20;
        $string = "diretor";
    }else if($i == 1){
        $string = "comum";
        $sal = $_GET['valor2'];
        $bonus = 10;
    }else if($i == 2){
        $string = "estagiario";
        $sal = $_GET['valor3'];
        $bonus = 5;
    }
        calc($sal, $bonus, $string);
    
}
   


function calc($salar, $b, $cargo){
echo "$cargo  R$$salar e $b% <br>";
$bonus = ($b/100)*$salar;
echo "  O bonus é $bonus <br>";
}
?>
</body>
</html>
