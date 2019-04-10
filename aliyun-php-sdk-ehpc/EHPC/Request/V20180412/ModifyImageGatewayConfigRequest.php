<?php

namespace EHPC\Request\V20180412;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ModifyImageGatewayConfig
 *
 * @method string getDefaultRepoLocation()
 * @method string getDBPassword()
 * @method array getRepos()
 * @method string getDBType()
 * @method string getDBUsername()
 * @method string getDBServerInfo()
 * @method string getPullUpdateTimeout()
 * @method string getClusterId()
 * @method string getImageExpirationTimeout()
 */
class ModifyImageGatewayConfigRequest extends \RpcAcsRequest
{

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'EHPC',
            '2018-04-12',
            'ModifyImageGatewayConfig',
            'ehs'
        );
    }

    /**
     * @param string $defaultRepoLocation
     *
     * @return $this
     */
    public function setDefaultRepoLocation($defaultRepoLocation)
    {
        $this->requestParameters['DefaultRepoLocation'] = $defaultRepoLocation;
        $this->queryParameters['DefaultRepoLocation'] = $defaultRepoLocation;

        return $this;
    }

    /**
     * @param string $dBPassword
     *
     * @return $this
     */
    public function setDBPassword($dBPassword)
    {
        $this->requestParameters['DBPassword'] = $dBPassword;
        $this->queryParameters['DBPassword'] = $dBPassword;

        return $this;
    }

    /**
     * @param array $repo
     *
     * @return $this
     */
    public function setRepos(array $repo)
    {
        $this->requestParameters['Repos'] = $repo;
        foreach ($repo as $depth1 => $depth1Value) {
            $this->queryParameters['Repo.' . ($depth1 + 1) . '.Auth'] = $depth1Value['Auth'];
            $this->queryParameters['Repo.' . ($depth1 + 1) . '.Location'] = $depth1Value['Location'];
            $this->queryParameters['Repo.' . ($depth1 + 1) . '.URL'] = $depth1Value['URL'];
        }

        return $this;
    }

    /**
     * @param string $dBType
     *
     * @return $this
     */
    public function setDBType($dBType)
    {
        $this->requestParameters['DBType'] = $dBType;
        $this->queryParameters['DBType'] = $dBType;

        return $this;
    }

    /**
     * @param string $dBUsername
     *
     * @return $this
     */
    public function setDBUsername($dBUsername)
    {
        $this->requestParameters['DBUsername'] = $dBUsername;
        $this->queryParameters['DBUsername'] = $dBUsername;

        return $this;
    }

    /**
     * @param string $dBServerInfo
     *
     * @return $this
     */
    public function setDBServerInfo($dBServerInfo)
    {
        $this->requestParameters['DBServerInfo'] = $dBServerInfo;
        $this->queryParameters['DBServerInfo'] = $dBServerInfo;

        return $this;
    }

    /**
     * @param string $pullUpdateTimeout
     *
     * @return $this
     */
    public function setPullUpdateTimeout($pullUpdateTimeout)
    {
        $this->requestParameters['PullUpdateTimeout'] = $pullUpdateTimeout;
        $this->queryParameters['PullUpdateTimeout'] = $pullUpdateTimeout;

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

    /**
     * @param string $imageExpirationTimeout
     *
     * @return $this
     */
    public function setImageExpirationTimeout($imageExpirationTimeout)
    {
        $this->requestParameters['ImageExpirationTimeout'] = $imageExpirationTimeout;
        $this->queryParameters['ImageExpirationTimeout'] = $imageExpirationTimeout;

        return $this;
    }
}
