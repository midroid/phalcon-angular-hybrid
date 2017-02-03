<?php

class IndexController extends ControllerBase
{

    public function indexAction()
    {
        // $response = new \Phalcon\Http\Response();
        // $response->setStatusCode(200, "OK");
        // $response->redirect("dist/index.html", true);
        // $response->send();
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
        $file = __DIR__ + 'abc.text';
        $content = file_get_contents('/../library/test.html', true);
        echo $content;
        $response->setStatusCode(200, "OK");
        $response->setContent($content);
        $response->send();
    }

}

