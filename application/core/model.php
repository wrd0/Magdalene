<?php
 
class Model 
{
    protected $db;
     
    public function __construct()
    {
        $this->db = Db::init();
    }
 
    public function getAll($sql, $data = null)
    {
        if(!sql){
            throw new Exception("No SQL query!");
        }         
        $query = $this->_db->prepare($this->_sql);
        $query->execute($data);
        return $sth->fetchAll();
    }
     
    public function getRow($sql, $data = null)
    {
        if(!sql){
            throw new Exception("No SQL query!");
        }         
        $query = $this->_db->prepare($this->_sql);
        $query->execute($data);
        return $sth->fetch();
    }

}