<?php

namespace Emr\Request\V20160408;

/**
 * Request of RunClusterServiceAction
 *
 * @method string getExecuteStrategy()
 * @method array getHostGroupIdLists()
 * @method string getResourceOwnerId()
 * @method string getOnlyRestartStaleConfigNodes()
 * @method string getNodeCountPerBatch()
 * @method string getClusterId()
 * @method string getCustomCommand()
 * @method string getComponentNameList()
 * @method string getServiceActionName()
 * @method string getIsRolling()
 * @method string getTotlerateFailCount()
 * @method string getServiceName()
 * @method string getComment()
 * @method string getCustomParams()
 * @method string getInterval()
 * @method string getHostIdList()
 * @method string getTurnOnMaintenanceMode()
 */
class RunClusterServiceActionRequest extends \RpcAcsRequest
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
            'RunClusterServiceAction',
            'emr'
        );
    }

    /**
     * @param string $executeStrategy
     *
     * @return $this
     */
    public function setExecuteStrategy($executeStrategy)
    {
        $this->requestParameters['ExecuteStrategy'] = $executeStrategy;
        $this->queryParameters['ExecuteStrategy'] = $executeStrategy;

        return $this;
    }

    /**
     * @param array $hostGroupIdLists
     *
     * @return $this
     */
    public function setHostGroupIdLists(array $hostGroupIdLists)
    {
        $this->requestParameters['HostGroupIdLists'] = $hostGroupIdLists;
        foreach ($hostGroupIdLists as $i => $iValue) {
            $this->queryParameters['HostGroupIdList.' . ($i + 1)] = $iValue;
        }

        return $this;
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
     * @param string $onlyRestartStaleConfigNodes
     *
     * @return $this
     */
    public function setOnlyRestartStaleConfigNodes($onlyRestartStaleConfigNodes)
    {
        $this->requestParameters['OnlyRestartStaleConfigNodes'] = $onlyRestartStaleConfigNodes;
        $this->queryParameters['OnlyRestartStaleConfigNodes'] = $onlyRestartStaleConfigNodes;

        return $this;
    }

    /**
     * @param string $nodeCountPerBatch
     *
     * @return $this
     */
    public function setNodeCountPerBatch($nodeCountPerBatch)
    {
        $this->requestParameters['NodeCountPerBatch'] = $nodeCountPerBatch;
        $this->queryParameters['NodeCountPerBatch'] = $nodeCountPerBatch;

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
     * @param string $customCommand
     *
     * @return $this
     */
    public function setCustomCommand($customCommand)
    {
        $this->requestParameters['CustomCommand'] = $customCommand;
        $this->queryParameters['CustomCommand'] = $customCommand;

        return $this;
    }

    /**
     * @param string $componentNameList
     *
     * @return $this
     */
    public function setComponentNameList($componentNameList)
    {
        $this->requestParameters['ComponentNameList'] = $componentNameList;
        $this->queryParameters['ComponentNameList'] = $componentNameList;

        return $this;
    }

    /**
     * @param string $serviceActionName
     *
     * @return $this
     */
    public function setServiceActionName($serviceActionName)
    {
        $this->requestParameters['ServiceActionName'] = $serviceActionName;
        $this->queryParameters['ServiceActionName'] = $serviceActionName;

        return $this;
    }

    /**
     * @param string $isRolling
     *
     * @return $this
     */
    public function setIsRolling($isRolling)
    {
        $this->requestParameters['IsRolling'] = $isRolling;
        $this->queryParameters['IsRolling'] = $isRolling;

        return $this;
    }

    /**
     * @param string $totlerateFailCount
     *
     * @return $this
     */
    public function setTotlerateFailCount($totlerateFailCount)
    {
        $this->requestParameters['TotlerateFailCount'] = $totlerateFailCount;
        $this->queryParameters['TotlerateFailCount'] = $totlerateFailCount;

        return $this;
    }

    /**
     * @param string $serviceName
     *
     * @return $this
     */
    public function setServiceName($serviceName)
    {
        $this->requestParameters['ServiceName'] = $serviceName;
        $this->queryParameters['ServiceName'] = $serviceName;

        return $this;
    }

    /**
     * @param string $comment
     *
     * @return $this
     */
    public function setComment($comment)
    {
        $this->requestParameters['Comment'] = $comment;
        $this->queryParameters['Comment'] = $comment;

        return $this;
    }

    /**
     * @param string $customParams
     *
     * @return $this
     */
    public function setCustomParams($customParams)
    {
        $this->requestParameters['CustomParams'] = $customParams;
        $this->queryParameters['CustomParams'] = $customParams;

        return $this;
    }

    /**
     * @param string $interval
     *
     * @return $this
     */
    public function setInterval($interval)
    {
        $this->requestParameters['Interval'] = $interval;
        $this->queryParameters['Interval'] = $interval;

        return $this;
    }

    /**
     * @param string $hostIdList
     *
     * @return $this
     */
    public function setHostIdList($hostIdList)
    {
        $this->requestParameters['HostIdList'] = $hostIdList;
        $this->queryParameters['HostIdList'] = $hostIdList;

        return $this;
    }

    /**
     * @param string $turnOnMaintenanceMode
     *
     * @return $this
     */
    public function setTurnOnMaintenanceMode($turnOnMaintenanceMode)
    {
        $this->requestParameters['TurnOnMaintenanceMode'] = $turnOnMaintenanceMode;
        $this->queryParameters['TurnOnMaintenanceMode'] = $turnOnMaintenanceMode;

        return $this;
    }
}
