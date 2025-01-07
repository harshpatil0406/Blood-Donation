<?php
include("connect.php");
$id=$_GET['z'];
if(isset($_POST['btn']))
{
    $fn=$_POST['f_name'];
    $ln=$_POST['l_name'];
    $a=$_POST['address'];
    $ci=$_POST['city'];
    $m=$_POST['mobile'];
    $p=$_POST['password'];
    $g=$_POST['gender'];
    $b=$_POST['blood_group'];
    $s ="UPDATE blood_donor SET f_name='$fn',l_name='$ln',address='$a',city='$ci',mobile='$m',password='$p',gender='$g',blood_group='$b' WHERE id='$id'";
   // echo $s;exit;
    $f=mysqli_query($c,$s);
    if($f)
    {      //  echo "hi";exit;
           header("location:adminhome.php");
    }
}
?>
