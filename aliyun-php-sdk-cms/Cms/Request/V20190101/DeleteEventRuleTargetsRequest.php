<?php

namespace Cms\Request\V20190101;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DeleteEventRuleTargets
 *
 * @method array getIdss()
 * @method string getRuleName()
 */
class DeleteEventRuleTargetsRequest extends \RpcAcsRequest
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
            'DeleteEventRuleTargets',
            'cms'
        );
    }

    /**
     * @param array $ids
     *
     * @return $this
     */
    public function setIdss(array $ids)
    {
        $this->requestParameters['Idss'] = $ids;
        foreach ($ids as $i => $iValue) {
            $this->queryParameters['Ids.' . ($i + 1)] = $iValue;
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
}
