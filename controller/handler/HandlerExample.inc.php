<?php

class HandlerExample extends aHandler
{

    public function getElementById($template)
    {
        $output = "no data";
        try{
            $dbo = $this->getDbc()->connect();
            $entity = &$template['entity'];
            $class = new ReflectionClass($entity);
            $query = $dbo->prepare("SELECT * FROM :entity WHERE id = :id");
            $query->bindParam(':id', $template['id'], PDO::PARAM_INT);
            $query->execute();
            $rawOutput = $query->fetchAll();

            if($rawOutput){
                foreach($rawOutput as $row){
                    foreach ($row as $attribute => $attrValue) {
                        if(is_numeric($attribute)){
                            unset($row[$attribute]);
                        }
                    }
                }
                $args = array();
                array_push($args,$row);
                $output = $class->newInstanceArgs($row);
            }
        }catch (Exception $e){

        }
        // TODO: Implement getElementById() method.
    }

    public function getElementCollectionById($template)
    {
        // TODO: Implement getElementCollectionById() method.
    }
}