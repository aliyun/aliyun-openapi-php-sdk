<?php

namespace Emr\Request\V20160408;

/**
 * Request of ModifyScalingTaskGroup
 *
 * @method string getResourceOwnerId()
 * @method string getHostGroupId()
 * @method string getActiveRuleCategory()
 * @method string getClusterId()
 * @method string getMinSize()
 * @method string getMaxSize()
 * @method string getDefaultCooldown()
 */
class ModifyScalingTaskGroupRequest extends \RpcAcsRequest
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
            'Emr',
            '2016-04-08',
            'ModifyScalingTaskGroup',
            'emr'
        );
    }

    /**
     * @param string $resourceOwnerId
     *
     * @return $this
     */
    public function setResourceOwnerId($resourceOwnerId)
    {
        $this->requestParameters['ResourceOwnerId'] = $resourceOwnerId;
        $this->queryParameters['ResourceOwnerId'] = $resourceOwnerId;

        return $this;
    }

    /**
     * @param string $hostGroupId
     *
     * @return $this
     */
    public function setHostGroupId($hostGroupId)
    {
        $this->requestParameters['HostGroupId'] = $hostGroupId;
        $this->queryParameters['HostGroupId'] = $hostGroupId;

        return $this;
    }

    /**
     * @param string $activeRuleCategory
     *
     * @return $this
     */
    public function setActiveRuleCategory($activeRuleCategory)
    {
        $this->requestParameters['ActiveRuleCategory'] = $activeRuleCategory;
        $this->queryParameters['ActiveRuleCategory'] = $activeRuleCategory;

        return $this;
    }

    /**
     * @param string $clusterId
     *
     * @return $this
     */
    public function setClusterId($clusterId)
    {
        $this->requestParameters['ClusterId'] = $clusterId;
        $this->queryParameters['ClusterId'] = $clusterId;

        return $this;
    }

    /**
     * @param string $minSize
     *
     * @return $this
     */
    public function setMinSize($minSize)
    {
        $this->requestParameters['MinSize'] = $minSize;
        $this->queryParameters['MinSize'] = $minSize;

        return $this;
    }

    /**
     * @param string $maxSize
     *
     * @return $this
     */
    public function setMaxSize($maxSize)
    {
        $this->requestParameters['MaxSize'] = $maxSize;
        $this->queryParameters['MaxSize'] = $maxSize;

        return $this;
    }

    /**
     * @param string $defaultCooldown
     *
     * @return $this
     */
    public function setDefaultCooldown($defaultCooldown)
    {
        $this->requestParameters['DefaultCooldown'] = $defaultCooldown;
        $this->queryParameters['DefaultCooldown'] = $defaultCooldown;

        return $this;
    }
}
