<?php

namespace dms_enterprise\Request\V20181101;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of GetInstance
 *
 * @method string getPort()
 * @method string getHost()
 * @method string getTid()
 * @method string getSid()
 */
class GetInstanceRequest extends \RpcAcsRequest
{

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'dms-enterprise',
            '2018-11-01',
            'GetInstance'
        );
    }

    /**
     * @param string $port
     *
     * @return $this
     */
    public function setPort($port)
    {
        $this->requestParameters['Port'] = $port;
        $this->queryParameters['Port'] = $port;

        return $this;
    }

    /**
     * @param string $host
     *
     * @return $this
     */
    public function setHost($host)
    {
        $this->requestParameters['Host'] = $host;
        $this->queryParameters['Host'] = $host;

        return $this;
    }

    /**
     * @param string $tid
     *
     * @return $this
     */
    public function setTid($tid)
    {
        $this->requestParameters['Tid'] = $tid;
        $this->queryParameters['Tid'] = $tid;

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
