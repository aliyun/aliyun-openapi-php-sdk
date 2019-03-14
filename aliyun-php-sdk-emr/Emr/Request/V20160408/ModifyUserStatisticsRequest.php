<?php

namespace Emr\Request\V20160408;

/**
 * Request of ModifyUserStatistics
 *
 * @method string getJobMigratedNum()
 * @method string getResourceOwnerId()
 * @method string getExecutePlanNum()
 * @method string getJobNum()
 * @method string getExecutePlanMigratedNum()
 * @method string getInteractionJobMigratedNum()
 * @method string getUserId()
 * @method string getInteractionJobNum()
 */
class ModifyUserStatisticsRequest extends \RpcAcsRequest
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
            'ModifyUserStatistics',
            'emr'
        );
    }

    /**
     * @param string $jobMigratedNum
     *
     * @return $this
     */
    public function setJobMigratedNum($jobMigratedNum)
    {
        $this->requestParameters['JobMigratedNum'] = $jobMigratedNum;
        $this->queryParameters['JobMigratedNum'] = $jobMigratedNum;

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
     * @param string $executePlanNum
     *
     * @return $this
     */
    public function setExecutePlanNum($executePlanNum)
    {
        $this->requestParameters['ExecutePlanNum'] = $executePlanNum;
        $this->queryParameters['ExecutePlanNum'] = $executePlanNum;

        return $this;
    }

    /**
     * @param string $jobNum
     *
     * @return $this
     */
    public function setJobNum($jobNum)
    {
        $this->requestParameters['JobNum'] = $jobNum;
        $this->queryParameters['JobNum'] = $jobNum;

        return $this;
    }

    /**
     * @param string $executePlanMigratedNum
     *
     * @return $this
     */
    public function setExecutePlanMigratedNum($executePlanMigratedNum)
    {
        $this->requestParameters['ExecutePlanMigratedNum'] = $executePlanMigratedNum;
        $this->queryParameters['ExecutePlanMigratedNum'] = $executePlanMigratedNum;

        return $this;
    }

    /**
     * @param string $interactionJobMigratedNum
     *
     * @return $this
     */
    public function setInteractionJobMigratedNum($interactionJobMigratedNum)
    {
        $this->requestParameters['InteractionJobMigratedNum'] = $interactionJobMigratedNum;
        $this->queryParameters['InteractionJobMigratedNum'] = $interactionJobMigratedNum;

        return $this;
    }

    /**
     * @param string $userId
     *
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->requestParameters['UserId'] = $userId;
        $this->queryParameters['UserId'] = $userId;

        return $this;
    }

    /**
     * @param string $interactionJobNum
     *
     * @return $this
     */
    public function setInteractionJobNum($interactionJobNum)
    {
        $this->requestParameters['InteractionJobNum'] = $interactionJobNum;
        $this->queryParameters['InteractionJobNum'] = $interactionJobNum;

        return $this;
    }
}
