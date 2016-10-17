<?php
require_once (dirname(__FILE__).DIRECTORY_SEPARATOR.'dbconfig.php');

/**
 * Class Database
 * @package oop
 * This class handles the basic operation of mysql query
 */
class Database
{
    /**
     * @var DbConnection|string
     */
    private $db = '';
    /**
     * @var PDO|string
     */
    private $conn = null;
    /**
     * @var null
     */
    private $stmt = null;

    /**
     * Database constructor.
     */
    public function __construct()
    {
        $this->db = new Db();
        $this->conn = $this->db->getConnection();
    }

    /**
     * @param $query
     * @return $this
     */
    public function query($query)
    {
        $this->stmt = $this->conn->prepare($query);
        return $this;
    }

    /**
     * @return $this
     * array $bindValue binds necessary values
     */
    public function execute(array $bindValue = null)
    {
        try {
            if (is_null($bindValue)) {
                $this->stmt->execute();
            } else {
                $this->stmt->execute($bindValue);
            }

        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
        return $this;
    }

    public function executeUpdate($bindValue){
        try {
            if (is_null($bindValue)) {
                $stmt = $this->stmt->execute();
            } else {
                $stmt = $this->stmt->execute($bindValue);
            }

        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
        return $stmt;
    }
    /**
     * @param $param
     * @param $value
     * @param null $type
     * @return $this
     */
    public function bind($param, $value, $type = null)
    {
        if (is_null($type)) {
            switch (true) {
                case is_int($value):
                    $type = PDO::PARAM_INT;
                    break;
                case is_bool($value):
                    $type = PDO::PARAM_BOOL;
                    break;
                case is_null($value):
                    $type = PDO::PARAM_NULL;
                    break;
                default:
                    $type = PDO::PARAM_STR;
            }
        }
        $this->stmt->bindValue($param, $value, $type);
        return $this;
    }

    /**
     * @param null $obj
     * @return $this
     */
    public function FetchMode($obj = null)
    {
        if (is_null($obj)) {
            $this->stmt->setFetchMode(PDO::FETCH_OBJ);
        } else {
            $this->stmt->setFetchMode($obj);
        }
        return $this;
    }

    /**
     * @return mixed
     */
    public function fetchOne()
    {
        return $this->stmt->fetch();
    }

    /**
     * @return mixed
     */
    public function fetchAll()
    {
        return $this->stmt->fetchAll();
    }

    /**
     * @return mixed
     */
    public function rowCount()
    {
        return $this->stmt->rowCount();
    }

    public function lastInsertId()
    {
        return $this->conn->lastInsertId();
    }

    public function fetchColumn()
    {
        return $this->stmt->fetchColumn();
    }


    public function update($query)
    {
//        $query = 'UPDATE jos_officer_profile SET do_name = :do_name WHERE id = :id and office_pin = :pin';
        $stmt = $this->conn->prepare($query);
        $stmt->execute([
                ':id' => 88366,
                ':pin' => 6621,
                ':do_name' => 'namess'
            ]);
        $result = $stmt->rowCount();
        return $result;
    }

//    public function insertPin(){
////        $stmt = $this->conn->prepare("SELECT COUNT (*) FROM jos_officer_profile");
//        $stmt = $this->conn->prepare('SELECT count(*) FROM jos_officer_profile');
//        $stmt->execute();
////        $stmt->setFetchMode(PDO::FETCH_ASSOC);
//        $result = $stmt->fetchColumn();
//        return $result;

//        if (count($result)) {
//            return $result;
//        }else {
//            return 'no result';
//        }
//        $query = 'SELECT COUNT (*) FROM jos_officer_profile';
//        $result = $this->conn->prepare($query);
//        $result->execute();
////        $stmt->setFetchMode(PDO::FETCH_LAZY);
//        $result = $result->fetch();
//        if (count($result)) {
//            return $result;
//        } else {
//            return null;
//        }
//    }

    /**
     * @param $id
     * @return array|mixed
     */
    public function getById($id)
    {
        $query = 'SELECT * FROM joom_users WHERE id = :id';
        $result = $this->query($query)
            ->bind(':id', $id)
            ->execute()
            ->FetchMode(PDO::FETCH_LAZY)
            ->fetchOne();
        if (count($result)) {
            return $result;
        } else {
            return [];
        }
    }
//    public function getById($id)
//    {
//        $stmt = $this->conn->prepare('SELECT * FROM joom_users WHERE id = :id');
//        $stmt->bindParam(':id', $id);
//        $stmt->execute();
//        $stmt->setFetchMode(PDO::FETCH_LAZY);
//        $result = $stmt->fetch();
//        if (count($result)) {
//            return $result;
//        }
//    }
    /**
     * @return array|mixed
     */
    public function getAll()
    {
        $query = 'SELECT * FROM resume';
        $result = $this->query($query)
            ->execute()
            ->FetchMode(PDO::FETCH_ASSOC)
            ->fetchAll();
        if (count($result)) {
            return $result;
        } else {
            return [];
        }
    }
}
//$db = new Database();
//echo '<pre>';
//$r = $db->getAll();
//print_r($r);
//
//echo '</pre>';