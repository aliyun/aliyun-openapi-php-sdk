<?php

namespace CCC\Request\V20170705;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ListCallDetailRecords
 *
 * @method string getContactType()
 * @method string getContactId()
 * @method string getCriteria()
 * @method string getPhoneNumber()
 * @method string getOrderBy()
 * @method string getStartTime()
 * @method string getStopTime()
 * @method string getPageNumber()
 * @method string getInstanceId()
 * @method string getContactDisposition()
 * @method string getPageSize()
 * @method string getWithRecording()
 */
class ListCallDetailRecordsRequest extends \RpcAcsRequest
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
            'ListCallDetailRecords'
        );
    }

    /**
     * @param string $contactType
     *
     * @return $this
     */
    public function setContactType($contactType)
    {
        $this->requestParameters['ContactType'] = $contactType;
        $this->queryParameters['ContactType'] = $contactType;

        return $this;
    }

    /**
     * @param string $contactId
     *
     * @return $this
     */
    public function setContactId($contactId)
    {
        $this->requestParameters['ContactId'] = $contactId;
        $this->queryParameters['ContactId'] = $contactId;

        return $this;
    }

    /**
     * @param string $criteria
     *
     * @return $this
     */
    public function setCriteria($criteria)
    {
        $this->requestParameters['Criteria'] = $criteria;
        $this->queryParameters['Criteria'] = $criteria;

        return $this;
    }

    /**
     * @param string $phoneNumber
     *
     * @return $this
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->requestParameters['PhoneNumber'] = $phoneNumber;
        $this->queryParameters['PhoneNumber'] = $phoneNumber;

        return $this;
    }

    /**
     * @param string $orderBy
     *
     * @return $this
     */
    public function setOrderBy($orderBy)
    {
        $this->requestParameters['OrderBy'] = $orderBy;
        $this->queryParameters['OrderBy'] = $orderBy;

        return $this;
    }

    /**
     * @param string $startTime
     *
     * @return $this
     */
    public function setStartTime($startTime)
    {
        $this->requestParameters['StartTime'] = $startTime;
        $this->queryParameters['StartTime'] = $startTime;

        return $this;
    }

    /**
     * @param string $stopTime
     *
     * @return $this
     */
    public function setStopTime($stopTime)
    {
        $this->requestParameters['StopTime'] = $stopTime;
        $this->queryParameters['StopTime'] = $stopTime;

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
     * @param string $contactDisposition
     *
     * @return $this
     */
    public function setContactDisposition($contactDisposition)
    {
        $this->requestParameters['ContactDisposition'] = $contactDisposition;
        $this->queryParameters['ContactDisposition'] = $contactDisposition;

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
     * @param string $withRecording
     *
     * @return $this
     */
    public function setWithRecording($withRecording)
    {
        $this->requestParameters['WithRecording'] = $withRecording;
        $this->queryParameters['WithRecording'] = $withRecording;

        return $this;
    }
}
