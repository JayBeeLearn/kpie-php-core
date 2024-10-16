<?php 

class Database {
    public $connection;
    public $statement;
    public function __construct($config)
    {
        // $dsn = 'mysql:host=localhost;port=3306;dbname=phpbeginner';
        $dsn = 'mysql:' . http_build_query($config, '', ';');

        $this->connection = new PDO($dsn, 'root', '', [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }

    public function query($query, $params = []){
        $this->statement = $this->connection->prepare($query);
        $this->statement->execute($params);

        return $this;
    }


    public function findOne()
    {
        return $this->statement->fetch();
    }

    public function findOrFail(){
        $result = $this->findOne();
        if(! $result){
        die();
        }

        return $result;
    }

    public function get(){
        return $this->statement->fetchAll();
    }
}


?>