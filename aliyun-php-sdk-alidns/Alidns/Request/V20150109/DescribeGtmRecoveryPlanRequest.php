<?php

namespace Alidns\Request\V20150109;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DescribeGtmRecoveryPlan
 *
 * @method string getUserClientIp()
 * @method string getRecoveryPlanId()
 * @method string getLang()
 */
class DescribeGtmRecoveryPlanRequest extends \RpcAcsRequest
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
            'DescribeGtmRecoveryPlan',
            'alidns'
        );
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
