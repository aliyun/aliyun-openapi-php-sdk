<?php

namespace CloudAPI\Request\V20160714;

/**
 * Request of ModifyTrafficControl
 *
 * @method string getTrafficControlId()
 * @method string getApiDefault()
 * @method string getSecurityToken()
 * @method string getTrafficControlName()
 * @method string getTrafficControlUnit()
 * @method string getDescription()
 * @method string getUserDefault()
 * @method string getAppDefault()
 */
class ModifyTrafficControlRequest extends \RpcAcsRequest
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
            'CloudAPI',
            '2016-07-14',
            'ModifyTrafficControl',
            'apigateway'
        );
    }

    /**
     * @param string $trafficControlId
     *
     * @return $this
     */
    public function setTrafficControlId($trafficControlId)
    {
        $this->requestParameters['TrafficControlId'] = $trafficControlId;
        $this->queryParameters['TrafficControlId'] = $trafficControlId;

        return $this;
    }

    /**
     * @param string $apiDefault
     *
     * @return $this
     */
    public function setApiDefault($apiDefault)
    {
        $this->requestParameters['ApiDefault'] = $apiDefault;
        $this->queryParameters['ApiDefault'] = $apiDefault;

        return $this;
    }

    /**
     * @param string $securityToken
     *
     * @return $this
     */
    public function setSecurityToken($securityToken)
    {
        $this->requestParameters['SecurityToken'] = $securityToken;
        $this->queryParameters['SecurityToken'] = $securityToken;

        return $this;
    }

    /**
     * @param string $trafficControlName
     *
     * @return $this
     */
    public function setTrafficControlName($trafficControlName)
    {
        $this->requestParameters['TrafficControlName'] = $trafficControlName;
        $this->queryParameters['TrafficControlName'] = $trafficControlName;

        return $this;
    }

    /**
     * @param string $trafficControlUnit
     *
     * @return $this
     */
    public function setTrafficControlUnit($trafficControlUnit)
    {
        $this->requestParameters['TrafficControlUnit'] = $trafficControlUnit;
        $this->queryParameters['TrafficControlUnit'] = $trafficControlUnit;

        return $this;
    }

    /**
     * @param string $description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->requestParameters['Description'] = $description;
        $this->queryParameters['Description'] = $description;

        return $this;
    }

    /**
     * @param string $userDefault
     *
     * @return $this
     */
    public function setUserDefault($userDefault)
    {
        $this->requestParameters['UserDefault'] = $userDefault;
        $this->queryParameters['UserDefault'] = $userDefault;

        return $this;
    }

    /**
     * @param string $appDefault
     *
     * @return $this
     */
    public function setAppDefault($appDefault)
    {
        $this->requestParameters['AppDefault'] = $appDefault;
        $this->queryParameters['AppDefault'] = $appDefault;

        return $this;
    }
}
