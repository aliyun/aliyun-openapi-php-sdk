<?php

namespace Emr\Request\V20160408;

/**
 * Request of ListEmrMainVersion
 *
 * @method string getResourceOwnerId()
 * @method string getPageSize()
 * @method string getEmrVersion()
 * @method string getStackName()
 * @method string getStackVersion()
 * @method string getPageNumber()
 */
class ListEmrMainVersionRequest extends \RpcAcsRequest
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
            'ListEmrMainVersion',
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
     * @param string $emrVersion
     *
     * @return $this
     */
    public function setEmrVersion($emrVersion)
    {
        $this->requestParameters['EmrVersion'] = $emrVersion;
        $this->queryParameters['EmrVersion'] = $emrVersion;

        return $this;
    }

    /**
     * @param string $stackName
     *
     * @return $this
     */
    public function setStackName($stackName)
    {
        $this->requestParameters['StackName'] = $stackName;
        $this->queryParameters['StackName'] = $stackName;

        return $this;
    }

    /**
     * @param string $stackVersion
     *
     * @return $this
     */
    public function setStackVersion($stackVersion)
    {
        $this->requestParameters['StackVersion'] = $stackVersion;
        $this->queryParameters['StackVersion'] = $stackVersion;

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
