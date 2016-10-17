<?php
    /**
     * Class DbConnection
     */
class db
{
    /**
     * @var string
     * ex:localhost
     */
    public $dbHost = '';
    /**
     * @var string
     * user:root
     */
    public $dbUser = '';
    /**
     * @var string
     * password:
     */
    public $dbPassword = '';
    /**
     * @var string
     * Database Name
     */
    public $dbName = '';
    /**
     * @var PDO|string
     * stor the connection
     */
    public $conn = null;
    /**
     * DbConnection constructor.
     */
    public function __construct()
    {
        $this->dbHost = '192.168.3.36';
        $this->dbUser = 'manoz';
        $this->dbPassword = 'manoz@user#';
        $this->dbName = 'resume';
        $dsn = 'mysql:host=' . $this->dbHost . ';dbname=' . $this->dbName .';charset=utf8';
        $options = [
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ];
        try {
            $this->conn = new PDO($dsn, $this->dbUser, $this->dbPassword, $options);
        } catch (PDOException $ex) {
            $this->dbError = $ex->getMessage();
        }
    }
    /**
     *
     */
    /*public function __destruct()
    {
        $this->closeConnection();
    }*/
    /**
     * @return PDO|string
     */
    public function getConnection()
    {
        return $this->conn;
    }
    /**
     *Destroy database DbConnection
     */
    public function closeConnection()
    {
        if ($this->conn) {
            $this->conn = null;
        }
    }
}

//$db = new Db();
//$conn = $db->getConnection();

//var_dump($conn);

