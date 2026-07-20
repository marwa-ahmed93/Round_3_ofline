<?php
namespace Marwa\Mvc;

use PDO;

class Model
{
    protected $connection;
    protected $tableName;

    public function __construct()
    {
        $this->connection = new PDO("mysql:host=localhost;dbname=session_9_test",'root','');
    }
}