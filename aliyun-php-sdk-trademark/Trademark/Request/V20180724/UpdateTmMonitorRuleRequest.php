<?php

namespace Trademark\Request\V20180724;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of UpdateTmMonitorRule
 *
 * @method array getNotifyStatuss()
 * @method string getRuleName()
 * @method string getId()
 */
class UpdateTmMonitorRuleRequest extends \RpcAcsRequest
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
            'Trademark',
            '2018-07-24',
            'UpdateTmMonitorRule',
            'trademark'
        );
    }

    /**
     * @param array $notifyStatus
     *
     * @return $this
     */
    public function setNotifyStatuss(array $notifyStatus)
    {
        $this->requestParameters['NotifyStatuss'] = $notifyStatus;
        foreach ($notifyStatus as $i => $iValue) {
            $this->queryParameters['NotifyStatus.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param string $ruleName
     *
     * @return $this
     */
    public function setRuleName($ruleName)
    {
        $this->requestParameters['RuleName'] = $ruleName;
        $this->queryParameters['RuleName'] = $ruleName;

        return $this;
    }

    /**
     * @param string $id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->requestParameters['Id'] = $id;
        $this->queryParameters['Id'] = $id;

        return $this;
    }
}
