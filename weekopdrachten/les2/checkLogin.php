<html>
<body>

<?php

define('DB_HOST',"db");
define('DB_PORT', "3306"); // 8889 voor mamp mysql, 3306 voor docker mysql
define('DB_USERNAME',"avans"); 
define('DB_PASSWORD',"plus");
define('DB_DATABASE',"phpcursus"); 

$connection = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE, DB_PORT);

if (!$connection) {
	die('Verbinding met de database is mislukt.');
}
else {
	echo 'Verbinding met de database is gelukt';
}



echo "<br><br>";






if(isset($_POST["username"], $_POST["password"])) 
    {     

        $name = $_POST["username"]; 
        $password = $_POST["password"]; 

				$result1 = $connection->query("SELECT username, password FROM users WHERE username = '$_POST[username]' AND password = '$_POST[password]'");
        #$result1 = $connection->query("SELECT username, password FROM users WHERE username = '$_POST[username]' AND  password = '$_POST[username]'");

		if ($result1->num_rows > 0)
     
        { 
			echo 'Hallo admin!';
			
			
        }
        else
        {
            echo 'Wachtwoord en/of username is fout!!';
        }
}





?>






</body>
</html>