<?php
interface iHandler
{
    /**
     * @param $template
    'handler' => 'example',
    'entity' => 'example',
    'id' => 452
     */
    public function getElementById($template);
    public function getElementCollectionById($template);
    //extendable with further generic functionality
}
?>