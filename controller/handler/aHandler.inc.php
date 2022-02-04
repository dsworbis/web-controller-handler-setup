<?php
abstract class aHandler implements iHandler{
    private $dbc;
    private $debug = false;

    /**
     * @param $dbc
     * @param bool $debug
     */
    public function __construct($dbc, $debug)
    {
        $this->dbc = $dbc;
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


}
?>