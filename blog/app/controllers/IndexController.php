<?php

class IndexController extends ControllerBase
{

    public function indexAction()
    {
        $response = new \Phalcon\Http\Response();
        $response->setStatusCode(200, "OK");
        $content = file_get_contents('sample.html');
        $response->setContent($content);
        $response->send();
    }
    
    public function landingAction()
    {
        $response = new \Phalcon\Http\Response();
        $response->setStatusCode(200, "OK");
        $response->setContent("<html><body>Hello</body></html>");
        $response->send();
    }
    
    public function angularAction()
    {
        $response = new \Phalcon\Http\Response();
        $response->setStatusCode(200, "OK");
        $response->redirect("http://en.wikipedia.org", true);
        $response->send();
    }
    
    public function catchAndServeAction()
    {
        $response = new \Phalcon\Http\Response();
        $content = file_get_contents('../../frontend/dist/index.html');
        echo $content;
        $response->setStatusCode(200, "OK");
        $response->setContent($content);
        $response->send();
    }

}

