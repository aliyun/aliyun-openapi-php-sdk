<?php

namespace Ram\Request\V20150501;

/**
 * Request of CreatePolicyVersion
 *
 * @method string getSetAsDefault()
 * @method string getPolicyName()
 * @method string getPolicyDocument()
 */
class CreatePolicyVersionRequest extends \RpcAcsRequest
{

    /**
     * @var string
     */
    protected $requestScheme = 'https';

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
            'Ram',
            '2015-05-01',
            'CreatePolicyVersion',
            'ram'
        );
    }

    /**
     * @param string $setAsDefault
     *
     * @return $this
     */
    public function setSetAsDefault($setAsDefault)
    {
        $this->requestParameters['SetAsDefault'] = $setAsDefault;
        $this->queryParameters['SetAsDefault'] = $setAsDefault;

        return $this;
    }

    /**
     * @param string $policyName
     *
     * @return $this
     */
    public function setPolicyName($policyName)
    {
        $this->requestParameters['PolicyName'] = $policyName;
        $this->queryParameters['PolicyName'] = $policyName;

        return $this;
    }

    /**
     * @param string $policyDocument
     *
     * @return $this
     */
    public function setPolicyDocument($policyDocument)
    {
        $this->requestParameters['PolicyDocument'] = $policyDocument;
        $this->queryParameters['PolicyDocument'] = $policyDocument;

        return $this;
    }
}
