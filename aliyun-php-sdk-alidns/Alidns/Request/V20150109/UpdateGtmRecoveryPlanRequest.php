<?php

namespace Alidns\Request\V20150109;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of UpdateGtmRecoveryPlan
 *
 * @method string getFaultAddrPool()
 * @method string getRemark()
 * @method string getUserClientIp()
 * @method string getName()
 * @method string getRecoveryPlanId()
 * @method string getLang()
 */
class UpdateGtmRecoveryPlanRequest extends \RpcAcsRequest
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
            'Alidns',
            '2015-01-09',
            'UpdateGtmRecoveryPlan',
            'alidns'
        );
    }

    /**
     * @param string $faultAddrPool
     *
     * @return $this
     */
    public function setFaultAddrPool($faultAddrPool)
    {
        $this->requestParameters['FaultAddrPool'] = $faultAddrPool;
        $this->queryParameters['FaultAddrPool'] = $faultAddrPool;

        return $this;
    }

    /**
     * @param string $remark
     *
     * @return $this
     */
    public function setRemark($remark)
    {
        $this->requestParameters['Remark'] = $remark;
        $this->queryParameters['Remark'] = $remark;

        return $this;
    }

    /**
     * @param string $userClientIp
     *
     * @return $this
     */
    public function setUserClientIp($userClientIp)
    {
        $this->requestParameters['UserClientIp'] = $userClientIp;
        $this->queryParameters['UserClientIp'] = $userClientIp;

        return $this;
    }

    /**
     * @param string $name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->requestParameters['Name'] = $name;
        $this->queryParameters['Name'] = $name;

        return $this;
    }

    /**
     * @param string $recoveryPlanId
     *
     * @return $this
     */
    public function setRecoveryPlanId($recoveryPlanId)
    {
        $this->requestParameters['RecoveryPlanId'] = $recoveryPlanId;
        $this->queryParameters['RecoveryPlanId'] = $recoveryPlanId;

        return $this;
    }

    /**
     * @param string $lang
     *
     * @return $this
     */
    public function setLang($lang)
    {
        $this->requestParameters['Lang'] = $lang;
        $this->queryParameters['Lang'] = $lang;

        return $this;
    }
}
