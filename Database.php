<?php

class Database 
{
    public $connection;

    public function __construct(array $config, string $username = 'root', string $password = '')
    {
        $dsn = $this->getDsn($config);
        
        $this->connection = new PDO($dsn, $username, $password, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }

    public function query(string $query)
    {
        $statement = $this->connection->prepare($query);
        $statement->execute();
        return $statement;
    }

    private function getDsn(array $config)
    {
        $data = '';

        foreach ($config['database'] as $key => $value) {
            $data = $data . $key . '=' . $value . ';';
        }

        return $config['db'] . ':' . $data; 
    }
};