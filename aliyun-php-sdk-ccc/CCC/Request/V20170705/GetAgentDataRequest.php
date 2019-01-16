<?php

namespace CCC\Request\V20170705;

/**
 * Request of GetAgentData
 *
 * @method string getInstanceId()
 * @method string getStartDay()
 * @method string getEndDay()
 * @method string getPageSize()
 * @method string getUserId()
 * @method string getPageNumber()
 */
class GetAgentDataRequest extends \RpcAcsRequest
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
            'CCC',
            '2017-07-05',
            'GetAgentData'
        );
    }

    /**
     * @param string $instanceId
     *
     * @return $this
     */
    public function setInstanceId($instanceId)
    {
        $this->requestParameters['InstanceId'] = $instanceId;
        $this->queryParameters['InstanceId'] = $instanceId;

        return $this;
    }

    /**
     * @param string $startDay
     *
     * @return $this
     */
    public function setStartDay($startDay)
    {
        $this->requestParameters['StartDay'] = $startDay;
        $this->queryParameters['StartDay'] = $startDay;

        return $this;
    }

    /**
     * @param string $endDay
     *
     * @return $this
     */
    public function setEndDay($endDay)
    {
        $this->requestParameters['EndDay'] = $endDay;
        $this->queryParameters['EndDay'] = $endDay;

        return $this;
    }

    /**
     * @param string $pageSize
     *
     * @return $this
     */
    public function setPageSize($pageSize)
    {
        $this->requestParameters['PageSize'] = $pageSize;
        $this->queryParameters['PageSize'] = $pageSize;

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
     * @param string $pageNumber
     *
     * @return $this
     */
    public function setPageNumber($pageNumber)
    {
        $this->requestParameters['PageNumber'] = $pageNumber;
        $this->queryParameters['PageNumber'] = $pageNumber;

        return $this;
    }
}
