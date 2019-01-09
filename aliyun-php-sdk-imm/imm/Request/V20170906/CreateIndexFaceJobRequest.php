<?php

namespace imm\Request\V20170906;

/**
 * Request of CreateIndexFaceJob
 *
 * @method string getChain()
 * @method string getSrcUris()
 * @method string getNotifyTopicName()
 * @method string getNotifyEndpoint()
 * @method string getProject()
 * @method string getSetId()
 * @method string getForce()
 */
class CreateIndexFaceJobRequest extends \RpcAcsRequest
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
            'CreateIndexFaceJob',
            'imm'
        );
    }

    /**
     * @param string $chain
     *
     * @return $this
     */
    public function setChain($chain)
    {
        $this->requestParameters['Chain'] = $chain;
        $this->queryParameters['Chain'] = $chain;

        return $this;
    }

    /**
     * @param string $srcUris
     *
     * @return $this
     */
    public function setSrcUris($srcUris)
    {
        $this->requestParameters['SrcUris'] = $srcUris;
        $this->queryParameters['SrcUris'] = $srcUris;

        return $this;
    }

    /**
     * @param string $notifyTopicName
     *
     * @return $this
     */
    public function setNotifyTopicName($notifyTopicName)
    {
        $this->requestParameters['NotifyTopicName'] = $notifyTopicName;
        $this->queryParameters['NotifyTopicName'] = $notifyTopicName;

        return $this;
    }

    /**
     * @param string $notifyEndpoint
     *
     * @return $this
     */
    public function setNotifyEndpoint($notifyEndpoint)
    {
        $this->requestParameters['NotifyEndpoint'] = $notifyEndpoint;
        $this->queryParameters['NotifyEndpoint'] = $notifyEndpoint;

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
     * @param string $setId
     *
     * @return $this
     */
    public function setSetId($setId)
    {
        $this->requestParameters['SetId'] = $setId;
        $this->queryParameters['SetId'] = $setId;

        return $this;
    }

    /**
     * @param string $force
     *
     * @return $this
     */
    public function setForce($force)
    {
        $this->requestParameters['Force'] = $force;
        $this->queryParameters['Force'] = $force;

        return $this;
    }
}
