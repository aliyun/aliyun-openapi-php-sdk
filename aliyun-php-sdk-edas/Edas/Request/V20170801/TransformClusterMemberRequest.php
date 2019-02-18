<?php

namespace Edas\Request\V20170801;

/**
 * Request of TransformClusterMember
 *
 * @method string getPassword()
 * @method string getInstanceIds()
 * @method string getTargetClusterId()
 */
class TransformClusterMemberRequest extends \RoaAcsRequest
{

    /**
     * @var string
     */
    protected $uriPattern = '/pop/v5/resource/transform_cluster_member';

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
            'Edas',
            '2017-08-01',
            'TransformClusterMember'
        );
    }

    /**
     * @param string $password
     *
     * @return $this
     */
    public function setPassword($password)
    {
        $this->requestParameters['Password'] = $password;
        $this->queryParameters['Password'] = $password;

        return $this;
    }

    /**
     * @param string $instanceIds
     *
     * @return $this
     */
    public function setInstanceIds($instanceIds)
    {
        $this->requestParameters['InstanceIds'] = $instanceIds;
        $this->queryParameters['InstanceIds'] = $instanceIds;

        return $this;
    }

    /**
     * @param string $targetClusterId
     *
     * @return $this
     */
    public function setTargetClusterId($targetClusterId)
    {
        $this->requestParameters['TargetClusterId'] = $targetClusterId;
        $this->queryParameters['TargetClusterId'] = $targetClusterId;

        return $this;
    }
}
