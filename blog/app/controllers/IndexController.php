<?php

class IndexController extends ControllerBase
{

    public function indexAction()
    {
        
    }
    
    public function landingAction()
    {
        $response = new \Phalcon\Http\Response();
        $response->setStatusCode(200, "OK");
        $response->setContent("<html><body>Hello</body></html>");
        $response->send();
    }

}

