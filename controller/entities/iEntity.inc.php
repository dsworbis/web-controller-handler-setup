<?php
interface iEntity{
    public function getProperty($key);
    public function setProperty($key, $value);
    public function getProperties();
}
?>