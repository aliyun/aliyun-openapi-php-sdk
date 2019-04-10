<?php

namespace EHPC\Request\V20180412;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of RecoverCluster
 *
 * @method string getImageId()
 * @method string getOsTag()
 * @method string getClientVersion()
 * @method string getAccountType()
 * @method string getSchedulerType()
 * @method string getClusterId()
 * @method string getImageOwnerAlias()
 */
class RecoverClusterRequest extends \RpcAcsRequest
{

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'EHPC',
            '2018-04-12',
            'RecoverCluster',
            'ehs'
        );
    }

    /**
     * @param string $imageId
     *
     * @return $this
     */
    public function setImageId($imageId)
    {
        $this->requestParameters['ImageId'] = $imageId;
        $this->queryParameters['ImageId'] = $imageId;

        return $this;
    }

    /**
     * @param string $osTag
     *
     * @return $this
     */
    public function setOsTag($osTag)
    {
        $this->requestParameters['OsTag'] = $osTag;
        $this->queryParameters['OsTag'] = $osTag;

        return $this;
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
     * @param string $accountType
     *
     * @return $this
     */
    public function setAccountType($accountType)
    {
        $this->requestParameters['AccountType'] = $accountType;
        $this->queryParameters['AccountType'] = $accountType;

        return $this;
    }

    /**
     * @param string $schedulerType
     *
     * @return $this
     */
    public function setSchedulerType($schedulerType)
    {
        $this->requestParameters['SchedulerType'] = $schedulerType;
        $this->queryParameters['SchedulerType'] = $schedulerType;

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
     * @param string $imageOwnerAlias
     *
     * @return $this
     */
    public function setImageOwnerAlias($imageOwnerAlias)
    {
        $this->requestParameters['ImageOwnerAlias'] = $imageOwnerAlias;
        $this->queryParameters['ImageOwnerAlias'] = $imageOwnerAlias;

        return $this;
    }
}
