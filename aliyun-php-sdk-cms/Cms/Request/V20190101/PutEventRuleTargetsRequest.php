<?php

namespace Cms\Request\V20190101;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of PutEventRuleTargets
 *
 * @method array getWebhookParameterss()
 * @method array getContactParameterss()
 * @method array getSlsParameterss()
 * @method array getFcParameterss()
 * @method string getRuleName()
 * @method array getMnsParameterss()
 */
class PutEventRuleTargetsRequest extends \RpcAcsRequest
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
            'PutEventRuleTargets',
            'cms'
        );
    }

    /**
     * @param array $webhookParameters
     *
     * @return $this
     */
    public function setWebhookParameterss(array $webhookParameters)
    {
        $this->requestParameters['WebhookParameterss'] = $webhookParameters;
        foreach ($webhookParameters as $depth1 => $depth1Value) {
            $this->queryParameters['WebhookParameters.' . ($depth1 + 1) . '.Protocol'] = $depth1Value['Protocol'];
            $this->queryParameters['WebhookParameters.' . ($depth1 + 1) . '.Method'] = $depth1Value['Method'];
            $this->queryParameters['WebhookParameters.' . ($depth1 + 1) . '.Id'] = $depth1Value['Id'];
            $this->queryParameters['WebhookParameters.' . ($depth1 + 1) . '.Url'] = $depth1Value['Url'];
        }

        return $this;
    }

    /**
     * @param array $contactParameters
     *
     * @return $this
     */
    public function setContactParameterss(array $contactParameters)
    {
        $this->requestParameters['ContactParameterss'] = $contactParameters;
        foreach ($contactParameters as $depth1 => $depth1Value) {
            $this->queryParameters['ContactParameters.' . ($depth1 + 1) . '.Level'] = $depth1Value['Level'];
            $this->queryParameters['ContactParameters.' . ($depth1 + 1) . '.Id'] = $depth1Value['Id'];
            $this->queryParameters['ContactParameters.' . ($depth1 + 1) . '.ContactGroupName'] = $depth1Value['ContactGroupName'];
        }

        return $this;
    }

    /**
     * @param array $slsParameters
     *
     * @return $this
     */
    public function setSlsParameterss(array $slsParameters)
    {
        $this->requestParameters['SlsParameterss'] = $slsParameters;
        foreach ($slsParameters as $depth1 => $depth1Value) {
            $this->queryParameters['SlsParameters.' . ($depth1 + 1) . '.Project'] = $depth1Value['Project'];
            $this->queryParameters['SlsParameters.' . ($depth1 + 1) . '.Id'] = $depth1Value['Id'];
            $this->queryParameters['SlsParameters.' . ($depth1 + 1) . '.Region'] = $depth1Value['Region'];
            $this->queryParameters['SlsParameters.' . ($depth1 + 1) . '.LogStore'] = $depth1Value['LogStore'];
        }

        return $this;
    }

    /**
     * @param array $fcParameters
     *
     * @return $this
     */
    public function setFcParameterss(array $fcParameters)
    {
        $this->requestParameters['FcParameterss'] = $fcParameters;
        foreach ($fcParameters as $depth1 => $depth1Value) {
            $this->queryParameters['FcParameters.' . ($depth1 + 1) . '.FunctionName'] = $depth1Value['FunctionName'];
            $this->queryParameters['FcParameters.' . ($depth1 + 1) . '.ServiceName'] = $depth1Value['ServiceName'];
            $this->queryParameters['FcParameters.' . ($depth1 + 1) . '.Id'] = $depth1Value['Id'];
            $this->queryParameters['FcParameters.' . ($depth1 + 1) . '.Region'] = $depth1Value['Region'];
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
     * @param array $mnsParameters
     *
     * @return $this
     */
    public function setMnsParameterss(array $mnsParameters)
    {
        $this->requestParameters['MnsParameterss'] = $mnsParameters;
        foreach ($mnsParameters as $depth1 => $depth1Value) {
            $this->queryParameters['MnsParameters.' . ($depth1 + 1) . '.Id'] = $depth1Value['Id'];
            $this->queryParameters['MnsParameters.' . ($depth1 + 1) . '.Region'] = $depth1Value['Region'];
            $this->queryParameters['MnsParameters.' . ($depth1 + 1) . '.Queue'] = $depth1Value['Queue'];
        }

        return $this;
    }
}
