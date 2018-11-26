<?php
class dbModel{
    private static $instance;
    public $servername;
    public $username;
    public $password;
    public $dbname;
    private static $query_str = '';
    private $connection;
    public function __construct()
    {

        $env = fopen(".env","r");
        if ($env) {
            $i = 0;
            while (($line = fgets($env)) !== false) {
                $e[$i] = explode("=",$line);
                $i++;
            }
        }
        $this->servername = trim($e[0][1]);
        $this->username = trim($e[1][1]);
        $this->password = trim($e[2][1]);
        $this->dbname = trim( $e[3][1]);


        $this->connection = new mysqli($this->servername,$this->username,$this->password,$this->dbname);
        if ($this->connection->connect_error) {
            die("Connection failed: " . $this->connection->connect_error);
        }
    }
    public static function getInstance()
    {
        if ( is_null( self::$instance ) )
        {
            self::$instance = new self();
        }
        return self::$instance;
    }
    public static function selectRaw($name){
        self::$query_str = $name;
        return self::getInstance();
    }
    static function select($name){
        self::$query_str = "select". "*" ."from " . $name . " ";
        return self::getInstance();
    }
    public static function update($name,$cd){
        $d = array_values($cd);
        $c = array_keys($cd);
        $count = count($d);
        $i = 0;
        $da = [];
        while ($i<=$count-1){
            if($d[$i] == "now()"){
                $da[$i] ="`" . $c[$i] . "`=" . $d[$i];;
            }else{
                $da[$i] ="`" . $c[$i] . "`=" . "'" . $d[$i] . "'";
            }
            $i++;
        }

        $data = implode("," , $da);
        self::$query_str = "UPDATE " . $name . " SET " . $data;
        return self::getInstance();

    }
    public static function insert($name,$cd){
        $d = array_values($cd);
        $c = array_keys($cd);
        $count = count($d);
        $i = 0;
        $da = [];
        $co = [];

        while ($i<=$count-1){
            if($d[$i] == "now()"){
                $da[$i] =$d[$i];
            }else{
                $da[$i] ="'" . $d[$i] . "'";

            }
            $co[$i] ="`" . $c[$i] . "`";

            $i++;
        }

        $data = implode("," , $da);
        $column = implode("," , $co);
        self::$query_str = "INSERT INTO " . $name . " (" . $column . ") " . "VALUES" . " (" . $data . ")";

        return self::getInstance();
    }
    public function create($name,$cd){
        $d = array_values($cd);
        $c = array_keys($cd);
        $count = count($d);
        $i = 0;
        $da = [];
        $co = [];

        while ($i<=$count-1){

            $da[$i] ="'" . $d[$i] . "'";
            $co[$i] ="`" . $c[$i] . "`";

            $i++;
        }
        $co[$count] = "`" . "created_at" . "`";
        $co[$count+1] = "`" . "updated_at" . "`";
        $da[$count] = "now()";
        $da[$count+1] = "now()";
        $data = implode("," , $da);
        $column = implode("," , $co);
        self::$query_str = "INSERT INTO " . $name . " (" . $column . ") " . "VALUES" . " (" . $data . ")";
        return self::getInstance();


    }

    public static function delete($name){
        self::$query_str = "DELETE FROM " . $name ." " ;
        return self::getInstance();


    }
    public function Where($column,$equal){
        self::$query_str = self::$query_str . " where " . $column . " = " . $equal;
        return self::getInstance();

    }
    public function orWhere($column,$equal){
        self::$query_str = self::$query_str . " and " . $column . " = " . $equal;
        return self::getInstance();

    }
    public function orderBy($column,$ad){
        self::$query_str = self::$query_str . " ORDER BY " . $column . " " . $ad;
        return self::getInstance();


    }
    public function Limit($number){
        self::$query_str = self::$query_str . " LIMIT " . $number;
        return self::getInstance();

    }
    public function join($table1,$table2,$column){
        self::$query_str = self::$query_str . " INNER JOIN " . $table2 . " ON " . $table1 . "." . $column . "=" . $table2 . "." . $column;
        return self::getInstance();
    }
    public function get(){
        $query = $this->connection->query(self::$query_str);

        if (preg_match("/select/",self::$query_str)){
            $dataArray = [];
            while($data = $query->fetch_assoc())
            {
                $dataArray = $data;
            }
            return $dataArray;
        }

    }
}
