<?php
//Controller includes
include('database/iDatabaseConnection.inc.php');
include('database/aDatabaseConnection.inc.php');
//
include('database/connection/PGDatabaseConnection.inc.php');

include('entities/iEntity.inc.php');
include('entities/aEntity.inc.php');
//
include('entities/models/DDModel.inc.php');

include('handler/iHandler.inc.php');
include('handler/aHandler.inc.php');

include('handler/HandlerExample.inc.php');
//

include('iController.inc.php');
include('aController.inc.php');
//


class Controller extends aController {



    /**
     * @param $dbc
     */
    public function __construct($debug, $dbc)
    {
        $this->setDebug($debug);
        $this->setDbc($dbc);
        //Declaring handler
    }

    /**
     * @param $template
    'handler' => 'example',
    'entity' => 'example',
    'id' => 452
     */
    function getEntity($template){
        $this->getHandler($template['handler'])->getElementById($template);
    }








}
?>