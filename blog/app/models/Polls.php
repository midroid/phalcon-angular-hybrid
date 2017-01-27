<?php

class Polls extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=true)
     */
    public $id;

    /**
     *
     * @var string
     * @Column(type="string", length=500, nullable=true)
     */
    public $question;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("blog");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'polls';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Polls[]|Polls
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Polls
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
