<?php

namespace retailcloud\Request\V20180313;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of AddClusterNode
 *
 * @method array getEcsInstanceIdLists()
 * @method string getClusterInstanceId()
 */
class AddClusterNodeRequest extends \RpcAcsRequest
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
            'retailcloud',
            '2018-03-13',
            'AddClusterNode',
            'retailcloud'
        );
    }

    /**
     * @param array $ecsInstanceIdList
     *
     * @return $this
     */
	public function setEcsInstanceIdLists(array $ecsInstanceIdList)
	{
	    $this->requestParameters['EcsInstanceIdLists'] = $ecsInstanceIdList;
		foreach ($ecsInstanceIdList as $i => $iValue) {
			$this->queryParameters['EcsInstanceIdList.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param string $clusterInstanceId
     *
     * @return $this
     */
    public function setClusterInstanceId($clusterInstanceId)
    {
        $this->requestParameters['ClusterInstanceId'] = $clusterInstanceId;
        $this->queryParameters['ClusterInstanceId'] = $clusterInstanceId;

        return $this;
    }
}
