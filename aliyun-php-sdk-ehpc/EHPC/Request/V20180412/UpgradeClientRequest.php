<?php

namespace EHPC\Request\V20180412;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of UpgradeClient
 *
 * @method string getClientVersion()
 * @method string getClusterId()
 */
class UpgradeClientRequest extends \RpcAcsRequest
{

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'EHPC',
            '2018-04-12',
            'UpgradeClient',
            'ehs'
        );
    }

    /**
     * @param string $clientVersion
     *
     * @return $this
     */
    public function setClientVersion($clientVersion)
    {
        $this->requestParameters['ClientVersion'] = $clientVersion;
        $this->queryParameters['ClientVersion'] = $clientVersion;

        return $this;
    }

    /**
     * @param string $clusterId
     *
     * @return $this
     */
    public function setClusterId($clusterId)
    {
        $this->requestParameters['ClusterId'] = $clusterId;
        $this->queryParameters['ClusterId'] = $clusterId;

        return $this;
    }
}
