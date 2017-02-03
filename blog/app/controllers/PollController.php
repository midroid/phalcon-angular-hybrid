<?php

class PollController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
        $this->view->polls = Polls::find();
    }
    
    public function pollsApiAction()
    {
        $this->view->disable();
        
        $response = new \Phalcon\Http\Response();
        $response->setStatusCode(200, "OK");
        $response->setContentType('application/json', 'UTF-8');
        $pollsArray = Polls::find();
        $response->setJsonContent($pollsArray);
        $response->send();
        
    }
    
    public function showAction($pollId)
    {
        $this->view->poll = Polls::findFirstById($pollId);
        $this->view->options = PollsOptions::findByPollsId($pollId);
    }
    
    public function voteAction($optionId)
    {
        $option = PollsOptions::findFirstById($optionId);  
        $option->number_votes++;
        $option->save();
        
        return $this->dispatcher->forward(array(
            'action' => 'show',
            'params' => array($option->polls_id)
        ));
    }

}

