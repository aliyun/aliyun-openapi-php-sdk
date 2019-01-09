<?php

namespace imm\Request\V20170906;

/**
 * Request of DeleteDocIndex
 *
 * @method string getSet()
 * @method string getProject()
 * @method string getUniqueId()
 */
class DeleteDocIndexRequest extends \RpcAcsRequest
{

    /**
     * @var string
     */
    protected $method = 'POST';

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'imm',
            '2017-09-06',
            'DeleteDocIndex',
            'imm'
        );
    }

    /**
     * @param string $set
     *
     * @return $this
     */
    public function setSet($set)
    {
        $this->requestParameters['Set'] = $set;
        $this->queryParameters['Set'] = $set;

        return $this;
    }

    /**
     * @param string $project
     *
     * @return $this
     */
    public function setProject($project)
    {
        $this->requestParameters['Project'] = $project;
        $this->queryParameters['Project'] = $project;

        return $this;
    }

    /**
     * @param string $uniqueId
     *
     * @return $this
     */
    public function setUniqueId($uniqueId)
    {
        $this->requestParameters['UniqueId'] = $uniqueId;
        $this->queryParameters['UniqueId'] = $uniqueId;

        return $this;
    }
}
