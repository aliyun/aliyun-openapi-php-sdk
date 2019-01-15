<?php

namespace vod\Request\V20170321;

/**
 * Request of UploadMediaByURL
 *
 * @method string getUserData()
 * @method string getResourceOwnerId()
 * @method string getTemplateGroupId()
 * @method string getUploadMetadatas()
 * @method string getResourceOwnerAccount()
 * @method string getUploadURLs()
 * @method string getMessageCallback()
 * @method string getOwnerId()
 * @method string getPriority()
 * @method string getStorageLocation()
 */
class UploadMediaByURLRequest extends \RpcAcsRequest
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
            'vod',
            '2017-03-21',
            'UploadMediaByURL',
            'vod'
        );
    }

    /**
     * @param string $userData
     *
     * @return $this
     */
    public function setUserData($userData)
    {
        $this->requestParameters['UserData'] = $userData;
        $this->queryParameters['UserData'] = $userData;

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
     * @param string $templateGroupId
     *
     * @return $this
     */
    public function setTemplateGroupId($templateGroupId)
    {
        $this->requestParameters['TemplateGroupId'] = $templateGroupId;
        $this->queryParameters['TemplateGroupId'] = $templateGroupId;

        return $this;
    }

    /**
     * @param string $uploadMetadatas
     *
     * @return $this
     */
    public function setUploadMetadatas($uploadMetadatas)
    {
        $this->requestParameters['UploadMetadatas'] = $uploadMetadatas;
        $this->queryParameters['UploadMetadatas'] = $uploadMetadatas;

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
     * @param string $uploadURLs
     *
     * @return $this
     */
    public function setUploadURLs($uploadURLs)
    {
        $this->requestParameters['UploadURLs'] = $uploadURLs;
        $this->queryParameters['UploadURLs'] = $uploadURLs;

        return $this;
    }

    /**
     * @param string $messageCallback
     *
     * @return $this
     */
    public function setMessageCallback($messageCallback)
    {
        $this->requestParameters['MessageCallback'] = $messageCallback;
        $this->queryParameters['MessageCallback'] = $messageCallback;

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
     * @param string $priority
     *
     * @return $this
     */
    public function setPriority($priority)
    {
        $this->requestParameters['Priority'] = $priority;
        $this->queryParameters['Priority'] = $priority;

        return $this;
    }

    /**
     * @param string $storageLocation
     *
     * @return $this
     */
    public function setStorageLocation($storageLocation)
    {
        $this->requestParameters['StorageLocation'] = $storageLocation;
        $this->queryParameters['StorageLocation'] = $storageLocation;

        return $this;
    }
}
