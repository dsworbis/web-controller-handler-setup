<?php

/*
 * Author: Daniel Scott Worbis
 * Index.php is the initial file, which stores general information.
 * It defines the session and calls all web files.
 */

//General Information
$session_Name = "Name";

//Start session
session_name($session_Name);
session_start();

//Set session options
ini_set('memory_limit', '-1');

//Include libs
//include('lib/');

//Include controller-setup
include('controller/controller.inc.php');



function init(){
    $_SESSION['controller'] = new Controller(true, new PGDatabaseConnection("localhost",3542,"postgres", "postgresuser", "password"));

    $c = &$_SESSION['controller'];
    //Adding Handler
    $c->addHandler('example', new HandlerExample($c->getDbc(),$c->isDebug()));
}
function includeIncs(){

}
//Start
includeIncs();
init();

include "index.html.php";

if(isset($_POST['example'])){
    //reacting on posts and calling controller
    $_SESSION['controller']->getEntity(array(
            'handler' => 'example',
            'entity' => 'example',
            'id' => 452
        )
    );
}

?>