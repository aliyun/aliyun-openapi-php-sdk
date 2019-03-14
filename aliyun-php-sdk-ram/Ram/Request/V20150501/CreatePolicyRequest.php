<?php

namespace Ram\Request\V20150501;

/**
 * Request of CreatePolicy
 *
 * @method string getDescription()
 * @method string getPolicyName()
 * @method string getPolicyDocument()
 */
class CreatePolicyRequest extends \RpcAcsRequest
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
            'CreatePolicy',
            'ram'
        );
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
