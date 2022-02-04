<?php
abstract class aController implements IController
{
    private $debug = false;
    private $dbc;
    private $handler = array();

    public function __construct($debug, $dbc){
        $this->debug = $debug;
        $this->dbc = $dbc;
    }

    public function addHandler($key, $handler)
    {
        $this->handler[$key] = $handler;
    }
    public function getHandler($key)
    {
        return $this->handler[$key];
    }

    /**
     * @return bool
     */
    public function isDebug()
    {
        return $this->debug;
    }

    /**
     * @param bool $debug
     */
    public function setDebug($debug)
    {
        $this->debug = $debug;
    }

    /**
     * @return mixed
     */
    public function getDbc()
    {
        return $this->dbc;
    }

    /**
     * @param mixed $dbc
     */
    public function setDbc($dbc)
    {
        $this->dbc = $dbc;
    }

}
?>