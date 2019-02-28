<?php

namespace vod\Request\V20170321;

/**
 * Request of CreateUploadVideo
 *
 * @method string getResourceOwnerId()
 * @method string getResourceOwnerAccount()
 * @method string getTranscodeMode()
 * @method string getIP()
 * @method string getDescription()
 * @method string getFileSize()
 * @method string getOwnerId()
 * @method string getTitle()
 * @method string getTags()
 * @method string getStorageLocation()
 * @method string getCoverURL()
 * @method string getUserData()
 * @method string getFileName()
 * @method string getTemplateGroupId()
 * @method string getCateId()
 * @method string getWorkflowId()
 * @method string getCustomMediaInfo()
 */
class CreateUploadVideoRequest extends \RpcAcsRequest
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
            'CreateUploadVideo',
            'vod'
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
     * @param string $transcodeMode
     *
     * @return $this
     */
    public function setTranscodeMode($transcodeMode)
    {
        $this->requestParameters['TranscodeMode'] = $transcodeMode;
        $this->queryParameters['TranscodeMode'] = $transcodeMode;

        return $this;
    }

    /**
     * @param string $iP
     *
     * @return $this
     */
    public function setIP($iP)
    {
        $this->requestParameters['IP'] = $iP;
        $this->queryParameters['IP'] = $iP;

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
     * @param string $fileSize
     *
     * @return $this
     */
    public function setFileSize($fileSize)
    {
        $this->requestParameters['FileSize'] = $fileSize;
        $this->queryParameters['FileSize'] = $fileSize;

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
     * @param string $title
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->requestParameters['Title'] = $title;
        $this->queryParameters['Title'] = $title;

        return $this;
    }

    /**
     * @param string $tags
     *
     * @return $this
     */
    public function setTags($tags)
    {
        $this->requestParameters['Tags'] = $tags;
        $this->queryParameters['Tags'] = $tags;

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

    /**
     * @param string $coverURL
     *
     * @return $this
     */
    public function setCoverURL($coverURL)
    {
        $this->requestParameters['CoverURL'] = $coverURL;
        $this->queryParameters['CoverURL'] = $coverURL;

        return $this;
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
     * @param string $fileName
     *
     * @return $this
     */
    public function setFileName($fileName)
    {
        $this->requestParameters['FileName'] = $fileName;
        $this->queryParameters['FileName'] = $fileName;

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
     * @param string $cateId
     *
     * @return $this
     */
    public function setCateId($cateId)
    {
        $this->requestParameters['CateId'] = $cateId;
        $this->queryParameters['CateId'] = $cateId;

        return $this;
    }

    /**
     * @param string $workflowId
     *
     * @return $this
     */
    public function setWorkflowId($workflowId)
    {
        $this->requestParameters['WorkflowId'] = $workflowId;
        $this->queryParameters['WorkflowId'] = $workflowId;

        return $this;
    }

    /**
     * @param string $customMediaInfo
     *
     * @return $this
     */
    public function setCustomMediaInfo($customMediaInfo)
    {
        $this->requestParameters['CustomMediaInfo'] = $customMediaInfo;
        $this->queryParameters['CustomMediaInfo'] = $customMediaInfo;

        return $this;
    }
}
