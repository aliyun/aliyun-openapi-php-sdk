<?php

namespace CCC\Request\V20170705;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CommitContactFlowVersionModification
 *
 * @method string getCanvas()
 * @method string getContent()
 * @method string getInstanceId()
 * @method string getContactFlowVersionId()
 */
class CommitContactFlowVersionModificationRequest extends \RpcAcsRequest
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
            'CCC',
            '2017-07-05',
            'CommitContactFlowVersionModification'
        );
    }

    /**
     * @param string $canvas
     *
     * @return $this
     */
    public function setCanvas($canvas)
    {
        $this->requestParameters['Canvas'] = $canvas;
        $this->queryParameters['Canvas'] = $canvas;

        return $this;
    }

    /**
     * @param string $content
     *
     * @return $this
     */
    public function setContent($content)
    {
        $this->requestParameters['Content'] = $content;
        $this->queryParameters['Content'] = $content;

        return $this;
    }

    /**
     * @param string $instanceId
     *
     * @return $this
     */
    public function setInstanceId($instanceId)
    {
        $this->requestParameters['InstanceId'] = $instanceId;
        $this->queryParameters['InstanceId'] = $instanceId;

        return $this;
    }

    /**
     * @param string $contactFlowVersionId
     *
     * @return $this
     */
    public function setContactFlowVersionId($contactFlowVersionId)
    {
        $this->requestParameters['ContactFlowVersionId'] = $contactFlowVersionId;
        $this->queryParameters['ContactFlowVersionId'] = $contactFlowVersionId;

        return $this;
    }
}
