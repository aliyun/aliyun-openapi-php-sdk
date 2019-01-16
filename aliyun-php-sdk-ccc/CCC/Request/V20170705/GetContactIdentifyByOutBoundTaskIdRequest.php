<?php

namespace CCC\Request\V20170705;

/**
 * Request of GetContactIdentifyByOutBoundTaskId
 *
 * @method string getInstanceId()
 * @method string getOutboundTaskId()
 */
class GetContactIdentifyByOutBoundTaskIdRequest extends \RpcAcsRequest
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
            'GetContactIdentifyByOutBoundTaskId'
        );
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
     * @param string $outboundTaskId
     *
     * @return $this
     */
    public function setOutboundTaskId($outboundTaskId)
    {
        $this->requestParameters['OutboundTaskId'] = $outboundTaskId;
        $this->queryParameters['OutboundTaskId'] = $outboundTaskId;

        return $this;
    }
}
