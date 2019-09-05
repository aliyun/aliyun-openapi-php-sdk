<?php

namespace foas\Request\V20181111;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreateCluster
 *
 * @method string getorderId()
 * @method string getuserOssBucket()
 * @method string getdisplayName()
 * @method string getuserVpcId()
 * @method string getzoneId()
 * @method string getdescription()
 * @method string getuserVSwitch()
 */
class CreateClusterRequest extends \RoaAcsRequest
{

    /**
     * @var string
     */
    protected $requestScheme = 'https';

    /**
     * @var string
     */
    protected $uriPattern = '/api/v2/clusters';

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
            'foas',
            '2018-11-11',
            'CreateCluster',
            'foas'
        );
    }

    /**
     * @param string $orderId
     *
     * @return $this
     */
    public function setorderId($orderId)
    {
        $this->requestParameters['orderId'] = $orderId;
        $this->queryParameters['orderId'] = $orderId;

        return $this;
    }

    /**
     * @param string $userOssBucket
     *
     * @return $this
     */
    public function setuserOssBucket($userOssBucket)
    {
        $this->requestParameters['userOssBucket'] = $userOssBucket;
        $this->queryParameters['userOssBucket'] = $userOssBucket;

        return $this;
    }

    /**
     * @param string $displayName
     *
     * @return $this
     */
    public function setdisplayName($displayName)
    {
        $this->requestParameters['displayName'] = $displayName;
        $this->queryParameters['displayName'] = $displayName;

        return $this;
    }

    /**
     * @param string $userVpcId
     *
     * @return $this
     */
    public function setuserVpcId($userVpcId)
    {
        $this->requestParameters['userVpcId'] = $userVpcId;
        $this->queryParameters['userVpcId'] = $userVpcId;

        return $this;
    }

    /**
     * @param string $zoneId
     *
     * @return $this
     */
    public function setzoneId($zoneId)
    {
        $this->requestParameters['zoneId'] = $zoneId;
        $this->queryParameters['zoneId'] = $zoneId;

        return $this;
    }

    /**
     * @param string $description
     *
     * @return $this
     */
    public function setdescription($description)
    {
        $this->requestParameters['description'] = $description;
        $this->queryParameters['description'] = $description;

        return $this;
    }

    /**
     * @param string $userVSwitch
     *
     * @return $this
     */
    public function setuserVSwitch($userVSwitch)
    {
        $this->requestParameters['userVSwitch'] = $userVSwitch;
        $this->queryParameters['userVSwitch'] = $userVSwitch;

        return $this;
    }
}
