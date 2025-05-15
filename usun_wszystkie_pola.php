<?php
	session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: logowanie.php");
    exit;
}
?>
<!DOCTYPE html>
<meta charset="utf-8">
<html>
<head>
<title>Usuwanie bazy</title>
<style>
body{background-color:powderblue;}
h1{text-align:center;}
.column1{float:left; width:21%; margin: 2%;}
.column2{float:left; width:29%; margin: 2%;}
.ftekst{margin:4%;}
p{text-align:center;}
img{
	display: block;
	margin-left: auto;
	margin-right: auto;
	width: 50%;
}
.btn{
  text-decoration: none;
  padding: 0.5rem;
  border: 1px solid #333333;
}
</style>

</head>
<body>
<?php
   class MyDB extends SQLite3 {
      function __construct() {
         $this->open('test.db');
      }
   }
   
   $db = new MyDB();
    $sql =<<<EOF
        DROP TABLE STUDENCI;
    EOF;
   
   $ret = $db->exec($sql);
   if(!$ret){
     echo $db->lastErrorMsg();
   } else {
      echo " Usunięto tabele\n";
   }
   $db->close();
?>

</br>
</br>
</br>
<a href="lab8.php" class="btn">
	Przejdź do bazy
</a></br></br></br></br>
</body>
</html> 