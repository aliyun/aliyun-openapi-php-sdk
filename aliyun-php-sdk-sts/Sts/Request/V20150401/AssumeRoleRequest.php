<?php

namespace Sts\Request\V20150401;

/**
 * Request of AssumeRole
 *
 * @method string getRoleArn()
 * @method string getRoleSessionName()
 * @method string getDurationSeconds()
 * @method string getPolicy()
 */
class AssumeRoleRequest extends \RpcAcsRequest
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
            'Sts',
            '2015-04-01',
            'AssumeRole',
            'sts'
        );
    }

    /**
     * @param string $roleArn
     *
     * @return $this
     */
    public function setRoleArn($roleArn)
    {
        $this->requestParameters['RoleArn'] = $roleArn;
        $this->queryParameters['RoleArn'] = $roleArn;

        return $this;
    }

    /**
     * @param string $roleSessionName
     *
     * @return $this
     */
    public function setRoleSessionName($roleSessionName)
    {
        $this->requestParameters['RoleSessionName'] = $roleSessionName;
        $this->queryParameters['RoleSessionName'] = $roleSessionName;

        return $this;
    }

    /**
     * @param string $durationSeconds
     *
     * @return $this
     */
    public function setDurationSeconds($durationSeconds)
    {
        $this->requestParameters['DurationSeconds'] = $durationSeconds;
        $this->queryParameters['DurationSeconds'] = $durationSeconds;

        return $this;
    }

    /**
     * @param string $policy
     *
     * @return $this
     */
    public function setPolicy($policy)
    {
        $this->requestParameters['Policy'] = $policy;
        $this->queryParameters['Policy'] = $policy;

        return $this;
    }
}
