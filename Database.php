<?php
class Database
{
    private $database;
    public function __construct($config)
    {
        $connection = $config['driver'].':'.$config['database'];
        $this->database = new PDO($connection);
    }

    public function query($query, $class = null, $params = []){
        $prepare = $this->database->prepare($query);
        if ($class) {
            $prepare->setFetchMode(PDO::FETCH_CLASS, $class);
        }
        $prepare->execute($params);
        return $prepare;
    }
}
$database = new Database(config('database'));
