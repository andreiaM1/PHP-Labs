<?php
class DatabaseController{
    private $host = "localhost";
    private $user = "root";
    private $password = "";
    private $database = "project_store";
    private static $connection;
    public $stmt;
    function __construct(){
        $this->connection = mysqli_connect(
            $this->host, 
            $this->user, 
            $this->password, 
            $this->database);
    }

    public function getConnection(){
        if(empty($this->connection)){
            new DatabaseController();
        }
    }

    function bindParameters($sql_statement, $params)
    {
    $param_type = "";
    foreach ($params as $query_param) {
        $param_type .= $query_param["param_type"];
    }

    $bind_params[] = & $param_type;
    foreach ($params as $k => $query_param) {
    $bind_params[] = & $params[$k]["param_value"];
    }

    call_user_func_array(array(
    $sql_statement,
    'bind_param'
    ), $bind_params);
    }

    function getResult($query, $params = array()){
        $statement = $this->connection->prepare($query);
        if(!empty($params)){
            $this->bindParameters($statement, $params);
        }
        $statement->execute();
        $result = $statement->get_result();
        if(!empty($result)){
            while($row = $result->fetch_assoc())
            $resultset[] = $row;
        }
        if(!empty($resultset)){
            return $resultset;
        }
    }

    function update($query, $params){
        $statement = $this->connection->prepare($query);
        if(!empty($params)){
            $this->bindParameters($statement, $params);
        }
        $statement->execute();
    }
}

?>