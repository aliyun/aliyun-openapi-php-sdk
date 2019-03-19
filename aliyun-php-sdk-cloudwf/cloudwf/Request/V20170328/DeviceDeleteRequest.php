<?php

namespace cloudwf\Request\V20170328;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DeviceDelete
 *
 * @method string getDid()
 * @method string getMac()
 */
class DeviceDeleteRequest extends \RpcAcsRequest
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
            'cloudwf',
            '2017-03-28',
            'DeviceDelete',
            'cloudwf'
        );
    }

    /**
     * @param string $did
     *
     * @return $this
     */
    public function setDid($did)
    {
        $this->requestParameters['Did'] = $did;
        $this->queryParameters['Did'] = $did;

        return $this;
    }

    /**
     * @param string $mac
     *
     * @return $this
     */
    public function setMac($mac)
    {
        $this->requestParameters['Mac'] = $mac;
        $this->queryParameters['Mac'] = $mac;

        return $this;
    }
}
