<?php

namespace CCC\Request\V20170705;

/**
 * Request of ListPhoneNumbers
 *
 * @method string getOutboundOnly()
 * @method string getInstanceId()
 */
class ListPhoneNumbersRequest extends \RpcAcsRequest
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
            'ListPhoneNumbers'
        );
    }

    /**
     * @param string $outboundOnly
     *
     * @return $this
     */
    public function setOutboundOnly($outboundOnly)
    {
        $this->requestParameters['OutboundOnly'] = $outboundOnly;
        $this->queryParameters['OutboundOnly'] = $outboundOnly;

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
}
