<?php

namespace Mts\Request\V20140618;

/**
 * Request of ListMediaWorkflowExecutions
 *
 * @method string getResourceOwnerId()
 * @method string getResourceOwnerAccount()
 * @method string getInputFileURL()
 * @method string getNextPageToken()
 * @method string getOwnerAccount()
 * @method string getMaximumPageSize()
 * @method string getMediaWorkflowId()
 * @method string getOwnerId()
 * @method string getMediaWorkflowName()
 */
class ListMediaWorkflowExecutionsRequest extends \RpcAcsRequest
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
            'Mts',
            '2014-06-18',
            'ListMediaWorkflowExecutions',
            'mts'
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
     * @param string $resourceOwnerAccount
     *
     * @return $this
     */
    public function setResourceOwnerAccount($resourceOwnerAccount)
    {
        $this->requestParameters['ResourceOwnerAccount'] = $resourceOwnerAccount;
        $this->queryParameters['ResourceOwnerAccount'] = $resourceOwnerAccount;

        return $this;
    }

    /**
     * @param string $inputFileURL
     *
     * @return $this
     */
    public function setInputFileURL($inputFileURL)
    {
        $this->requestParameters['InputFileURL'] = $inputFileURL;
        $this->queryParameters['InputFileURL'] = $inputFileURL;

        return $this;
    }

    /**
     * @param string $nextPageToken
     *
     * @return $this
     */
    public function setNextPageToken($nextPageToken)
    {
        $this->requestParameters['NextPageToken'] = $nextPageToken;
        $this->queryParameters['NextPageToken'] = $nextPageToken;

        return $this;
    }

    /**
     * @param string $ownerAccount
     *
     * @return $this
     */
    public function setOwnerAccount($ownerAccount)
    {
        $this->requestParameters['OwnerAccount'] = $ownerAccount;
        $this->queryParameters['OwnerAccount'] = $ownerAccount;

        return $this;
    }

    /**
     * @param string $maximumPageSize
     *
     * @return $this
     */
    public function setMaximumPageSize($maximumPageSize)
    {
        $this->requestParameters['MaximumPageSize'] = $maximumPageSize;
        $this->queryParameters['MaximumPageSize'] = $maximumPageSize;

        return $this;
    }

    /**
     * @param string $mediaWorkflowId
     *
     * @return $this
     */
    public function setMediaWorkflowId($mediaWorkflowId)
    {
        $this->requestParameters['MediaWorkflowId'] = $mediaWorkflowId;
        $this->queryParameters['MediaWorkflowId'] = $mediaWorkflowId;

        return $this;
    }

    /**
     * @param string $ownerId
     *
     * @return $this
     */
    public function setOwnerId($ownerId)
    {
        $this->requestParameters['OwnerId'] = $ownerId;
        $this->queryParameters['OwnerId'] = $ownerId;

        return $this;
    }

    /**
     * @param string $mediaWorkflowName
     *
     * @return $this
     */
    public function setMediaWorkflowName($mediaWorkflowName)
    {
        $this->requestParameters['MediaWorkflowName'] = $mediaWorkflowName;
        $this->queryParameters['MediaWorkflowName'] = $mediaWorkflowName;

        return $this;
    }
}
