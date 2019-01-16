<?php

namespace CCC\Request\V20170705;

/**
 * Request of GetNumberRegionInfo
 *
 * @method string getNumber()
 * @method string getInstanceId()
 */
class GetNumberRegionInfoRequest extends \RpcAcsRequest
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
            'GetNumberRegionInfo'
        );
    }

    /**
     * @param string $number
     *
     * @return $this
     */
    public function setNumber($number)
    {
        $this->requestParameters['Number'] = $number;
        $this->queryParameters['Number'] = $number;

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
