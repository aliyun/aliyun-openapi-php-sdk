<?php

namespace Ram\Request\V20150501;

/**
 * Request of SetDefaultPolicyVersion
 *
 * @method string getVersionId()
 * @method string getPolicyName()
 */
class SetDefaultPolicyVersionRequest extends \RpcAcsRequest
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
            'SetDefaultPolicyVersion',
            'ram'
        );
    }

    /**
     * @param string $versionId
     *
     * @return $this
     */
    public function setVersionId($versionId)
    {
        $this->requestParameters['VersionId'] = $versionId;
        $this->queryParameters['VersionId'] = $versionId;

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
}
