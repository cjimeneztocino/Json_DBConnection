<?php
namespace MySQLConnection;


class MySQLConnection
{
    private $user = '';

    private $password = '';

    private $servername = "";

    private  $db = "";


    public function __construct($user, $password, $servername, $db)
    {
        echo "<p>Estamos Dentro</p>";
        $this->setUser($user);
        $this->setPassword($password);
        $this->setServername($servername);
        $this->setDb($db);
    }

    private function getConnection() {
        echo "<p>inside getConneciton</p>";

        $conn = new \mysqli($this->servername, $this->getUser(), $this->getPassword(), $this->getDb());
        if ($conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
            return (false);
        }
        echo "<p>Connected successfully</p>";
        return $conn;
    }

    public function insertProduct($description, $material, $price, $coin) {

        $conn = $this->getConnection();
        $query = "INSERT INTO Products (description, material, price, coin) VALUES ('$description', '$material', '$price', '$coin')";
        var_dump($query);
        if ( $conn->query($query) === true){
            echo "<p>Succesfully inserted</p>";
        }else {
            echo "<p>failure by instert</p>";
        }
    }

    public function selectProducts() {
        $conn = $this->getConnection();
        $query = "Select * from Products";
        $result =  $conn->query($query);
        return $result;
    }
    /**
     * @return string
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param string $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return string
     */
    public function getServername()
    {
        return $this->servername;
    }

    /**
     * @param string $servername
     */
    public function setServername($servername)
    {
        $this->servername = $servername;
    }

    /**
     * @return string
     */
    public function getDb()
    {
        return $this->db;
    }

    /**
     * @param string $db
     */
    public function setDb($db)
    {
        $this->db = $db;
    }


}