<?php

namespace Emr\Request\V20160408;

/**
 * Request of CreateFlow
 *
 * @method string getCronExpr()
 * @method string getParentFlowList()
 * @method string getAlertDingDingGroupBizId()
 * @method string getStartSchedule()
 * @method string getDescription()
 * @method string getClusterId()
 * @method string getAlertUserGroupBizId()
 * @method string getHostName()
 * @method string getApplication()
 * @method string getCreateCluster()
 * @method string getName()
 * @method string getEndSchedule()
 * @method string getAlertConf()
 * @method string getProjectId()
 * @method string getParentCategory()
 */
class CreateFlowRequest extends \RpcAcsRequest
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
            'CreateFlow',
            'emr'
        );
    }

    /**
     * @param string $cronExpr
     *
     * @return $this
     */
    public function setCronExpr($cronExpr)
    {
        $this->requestParameters['CronExpr'] = $cronExpr;
        $this->queryParameters['CronExpr'] = $cronExpr;

        return $this;
    }

    /**
     * @param string $parentFlowList
     *
     * @return $this
     */
    public function setParentFlowList($parentFlowList)
    {
        $this->requestParameters['ParentFlowList'] = $parentFlowList;
        $this->queryParameters['ParentFlowList'] = $parentFlowList;

        return $this;
    }

    /**
     * @param string $alertDingDingGroupBizId
     *
     * @return $this
     */
    public function setAlertDingDingGroupBizId($alertDingDingGroupBizId)
    {
        $this->requestParameters['AlertDingDingGroupBizId'] = $alertDingDingGroupBizId;
        $this->queryParameters['AlertDingDingGroupBizId'] = $alertDingDingGroupBizId;

        return $this;
    }

    /**
     * @param string $startSchedule
     *
     * @return $this
     */
    public function setStartSchedule($startSchedule)
    {
        $this->requestParameters['StartSchedule'] = $startSchedule;
        $this->queryParameters['StartSchedule'] = $startSchedule;

        return $this;
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
     * @param string $alertUserGroupBizId
     *
     * @return $this
     */
    public function setAlertUserGroupBizId($alertUserGroupBizId)
    {
        $this->requestParameters['AlertUserGroupBizId'] = $alertUserGroupBizId;
        $this->queryParameters['AlertUserGroupBizId'] = $alertUserGroupBizId;

        return $this;
    }

    /**
     * @param string $hostName
     *
     * @return $this
     */
    public function setHostName($hostName)
    {
        $this->requestParameters['HostName'] = $hostName;
        $this->queryParameters['HostName'] = $hostName;

        return $this;
    }

    /**
     * @param string $application
     *
     * @return $this
     */
    public function setApplication($application)
    {
        $this->requestParameters['Application'] = $application;
        $this->queryParameters['Application'] = $application;

        return $this;
    }

    /**
     * @param string $createCluster
     *
     * @return $this
     */
    public function setCreateCluster($createCluster)
    {
        $this->requestParameters['CreateCluster'] = $createCluster;
        $this->queryParameters['CreateCluster'] = $createCluster;

        return $this;
    }

    /**
     * @param string $name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->requestParameters['Name'] = $name;
        $this->queryParameters['Name'] = $name;

        return $this;
    }

    /**
     * @param string $endSchedule
     *
     * @return $this
     */
    public function setEndSchedule($endSchedule)
    {
        $this->requestParameters['EndSchedule'] = $endSchedule;
        $this->queryParameters['EndSchedule'] = $endSchedule;

        return $this;
    }

    /**
     * @param string $alertConf
     *
     * @return $this
     */
    public function setAlertConf($alertConf)
    {
        $this->requestParameters['AlertConf'] = $alertConf;
        $this->queryParameters['AlertConf'] = $alertConf;

        return $this;
    }

    /**
     * @param string $projectId
     *
     * @return $this
     */
    public function setProjectId($projectId)
    {
        $this->requestParameters['ProjectId'] = $projectId;
        $this->queryParameters['ProjectId'] = $projectId;

        return $this;
    }

    /**
     * @param string $parentCategory
     *
     * @return $this
     */
    public function setParentCategory($parentCategory)
    {
        $this->requestParameters['ParentCategory'] = $parentCategory;
        $this->queryParameters['ParentCategory'] = $parentCategory;

        return $this;
    }
}
