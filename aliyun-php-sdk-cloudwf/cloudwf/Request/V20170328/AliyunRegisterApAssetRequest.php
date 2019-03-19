<?php

namespace cloudwf\Request\V20170328;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of AliyunRegisterApAsset
 *
 * @method string getApgroupId()
 * @method string getMac()
 * @method string getSerialNo()
 */
class AliyunRegisterApAssetRequest extends \RpcAcsRequest
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
            'AliyunRegisterApAsset',
            'cloudwf'
        );
    }

    /**
     * @param string $apgroupId
     *
     * @return $this
     */
    public function setApgroupId($apgroupId)
    {
        $this->requestParameters['ApgroupId'] = $apgroupId;
        $this->queryParameters['ApgroupId'] = $apgroupId;

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

    /**
     * @param string $serialNo
     *
     * @return $this
     */
    public function setSerialNo($serialNo)
    {
        $this->requestParameters['SerialNo'] = $serialNo;
        $this->queryParameters['SerialNo'] = $serialNo;

        return $this;
    }
}
