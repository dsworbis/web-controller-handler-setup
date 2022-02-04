<?php
abstract class aEntity implements iEntity{
    protected $properties = array();

    public function __construct($properties){
        array_merge($this->properties, $properties);
    }

    public function getProperty($key)
    {
        return $this->properties[$key];
    }

    public function setProperty($key, $value)
    {
        $this->properties[$key] = $value;
    }

    public function getProperties()
    {
        return $this->properties;
    }
}
?>