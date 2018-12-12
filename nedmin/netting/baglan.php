
<?php 


try {


	$db=new PDO("mysql:host=localhost;dbname=shopalis_anket;charset=utf8",'shopalis_anket','okanokan02');

/*	echo "başarılı";
*/
} catch (PDOExpception $e) {


	echo $e->getMessage();

}

require_once 'class.phpmailer.php';

 ?>