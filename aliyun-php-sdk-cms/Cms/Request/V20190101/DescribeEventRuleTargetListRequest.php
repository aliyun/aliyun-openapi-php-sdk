<?php

namespace Cms\Request\V20190101;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DescribeEventRuleTargetList
 *
 * @method string getRuleName()
 */
class DescribeEventRuleTargetListRequest extends \RpcAcsRequest
{

    /**
     * @var string
     */
    protected $method = 'PUT';

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'Cms',
            '2019-01-01',
            'DescribeEventRuleTargetList',
            'cms'
        );
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
}
