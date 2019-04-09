<?php

namespace Cms\Request\V20190101;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of PutMonitorGroupDynamicRule
 *
 * @method array getGroupRuless()
 * @method string getGroupId()
 */
class PutMonitorGroupDynamicRuleRequest extends \RpcAcsRequest
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
            'Cms',
            '2019-01-01',
            'PutMonitorGroupDynamicRule',
            'cms'
        );
    }

    /**
     * @param array $groupRules
     *
     * @return $this
     */
    public function setGroupRuless(array $groupRules)
    {
        $this->requestParameters['GroupRuless'] = $groupRules;
        foreach ($groupRules as $depth1 => $depth1Value) {
            $this->queryParameters['GroupRules.' . ($depth1 + 1) . '.FilterRelation'] = $depth1Value['FilterRelation'];
            foreach ($depth1Value['Filters'] as $depth2 => $depth2Value) {
                $this->queryParameters['GroupRules.' . ($depth1 + 1) . '.Filters.' . ($depth2 + 1) . '.Function'] = $depth2Value['Function'];
                $this->queryParameters['GroupRules.' . ($depth1 + 1) . '.Filters.' . ($depth2 + 1) . '.Name'] = $depth2Value['Name'];
                $this->queryParameters['GroupRules.' . ($depth1 + 1) . '.Filters.' . ($depth2 + 1) . '.Value'] = $depth2Value['Value'];
            }
            $this->queryParameters['GroupRules.' . ($depth1 + 1) . '.Category'] = $depth1Value['Category'];
        }

        return $this;
    }

    /**
     * @param string $groupId
     *
     * @return $this
     */
    public function setGroupId($groupId)
    {
        $this->requestParameters['GroupId'] = $groupId;
        $this->queryParameters['GroupId'] = $groupId;

        return $this;
    }
}
