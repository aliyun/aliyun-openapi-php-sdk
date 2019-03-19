<?php

namespace cloudwf\Request\V20170328;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DeviceShowList
 *
 * @method string getDirc()
 * @method string getPage()
 * @method string getPer()
 * @method string getDeviceType()
 * @method string getSid()
 */
class DeviceShowListRequest extends \RpcAcsRequest
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
            'DeviceShowList',
            'cloudwf'
        );
    }

    /**
     * @param string $dirc
     *
     * @return $this
     */
    public function setDirc($dirc)
    {
        $this->requestParameters['Dirc'] = $dirc;
        $this->queryParameters['Dirc'] = $dirc;

        return $this;
    }

    /**
     * @param string $page
     *
     * @return $this
     */
    public function setPage($page)
    {
        $this->requestParameters['Page'] = $page;
        $this->queryParameters['Page'] = $page;

        return $this;
    }

    /**
     * @param string $per
     *
     * @return $this
     */
    public function setPer($per)
    {
        $this->requestParameters['Per'] = $per;
        $this->queryParameters['Per'] = $per;

        return $this;
    }

    /**
     * @param string $deviceType
     *
     * @return $this
     */
    public function setDeviceType($deviceType)
    {
        $this->requestParameters['DeviceType'] = $deviceType;
        $this->queryParameters['DeviceType'] = $deviceType;

        return $this;
    }

    /**
     * @param string $sid
     *
     * @return $this
     */
    public function setSid($sid)
    {
        $this->requestParameters['Sid'] = $sid;
        $this->queryParameters['Sid'] = $sid;

        return $this;
    }
}
