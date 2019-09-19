<?php

namespace imm\Request\V20170906;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreatePornBatchDetectJob
 *
 * @method string getProject()
 * @method string getExternalID()
 * @method string getNotifyEndpoint()
 * @method string getNotifyTopicName()
 * @method string getSrcUri()
 * @method string getTgtUri()
 */
class CreatePornBatchDetectJobRequest extends \RpcAcsRequest
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
            'CreatePornBatchDetectJob',
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
     * @param string $externalID
     *
     * @return $this
     */
    public function setExternalID($externalID)
    {
        $this->requestParameters['ExternalID'] = $externalID;
        $this->queryParameters['ExternalID'] = $externalID;

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
     * @param string $srcUri
     *
     * @return $this
     */
    public function setSrcUri($srcUri)
    {
        $this->requestParameters['SrcUri'] = $srcUri;
        $this->queryParameters['SrcUri'] = $srcUri;

        return $this;
    }

    /**
     * @param string $tgtUri
     *
     * @return $this
     */
    public function setTgtUri($tgtUri)
    {
        $this->requestParameters['TgtUri'] = $tgtUri;
        $this->queryParameters['TgtUri'] = $tgtUri;

        return $this;
    }
}
