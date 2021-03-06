<?php

/**
 * Class BBC_Service_Bamboo_Exception_FlagpoleNotFound
 *
 * @category BBC
 * @package BBC_Service_Bamboo
 * @copyright Copyright (c) 2014 BBC (http://www.bbc.co.uk)
 */
class BBC_Service_Bamboo_Exception_FlagpoleNotFound
    extends BBC_Service_Bamboo_Exception
{

    /**
     * @param $flagpoleName String name of the flagpole
     */
    public function __construct($flagpoleName) {
        $message = sprintf("Flagpole '%s' was not found.", $flagpoleName);
        parent::__construct($message);
    }

}
