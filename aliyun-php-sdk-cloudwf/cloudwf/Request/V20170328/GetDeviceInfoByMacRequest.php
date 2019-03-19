<?php

namespace cloudwf\Request\V20170328;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of GetDeviceInfoByMac
 *
 * @method string getMac()
 */
class GetDeviceInfoByMacRequest extends \RpcAcsRequest
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
            'GetDeviceInfoByMac',
            'cloudwf'
        );
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
