<?php


class database
{
    const hostname = 'localhost';
    const username = 'admin';
    const password = '12345678';
    const dbname = "admin";
    private $conn;

    public function __construct()
    {
        $this->conn = mysqli_connect(self::hostname,self::username,self::password,self::dbname);
    }
    public function DBreturn($query){
        return mysqli_query($this->conn,$query);
    }
}
/*$a =  new database();
$b = $a->DBreturn("SELECT * FROM `table1");
while($r=mysqli_fetch_object($b))
{
    $res[]=$r;
}

print_r($res);
?>
*/

