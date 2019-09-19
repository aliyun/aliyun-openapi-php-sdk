<?php

namespace imm\Request\V20170906;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DeleteDocIndex
 *
 * @method string getProject()
 * @method string getUniqueId()
 * @method string getSet()
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
}
