<?php

namespace Mts\Request\V20140618;

/**
 * Request of AddMedia
 *
 * @method string getResourceOwnerId()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getDescription()
 * @method string getOverrideParams()
 * @method string getOwnerId()
 * @method string getTitle()
 * @method string getInputUnbind()
 * @method string getTags()
 * @method string getCoverURL()
 * @method string getCateId()
 * @method string getFileURL()
 * @method string getMediaWorkflowId()
 * @method string getMediaWorkflowUserData()
 */
class AddMediaRequest extends \RpcAcsRequest
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
            'AddMedia',
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
     * @param string $overrideParams
     *
     * @return $this
     */
    public function setOverrideParams($overrideParams)
    {
        $this->requestParameters['OverrideParams'] = $overrideParams;
        $this->queryParameters['OverrideParams'] = $overrideParams;

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
     * @param string $inputUnbind
     *
     * @return $this
     */
    public function setInputUnbind($inputUnbind)
    {
        $this->requestParameters['InputUnbind'] = $inputUnbind;
        $this->queryParameters['InputUnbind'] = $inputUnbind;

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
     * @param string $fileURL
     *
     * @return $this
     */
    public function setFileURL($fileURL)
    {
        $this->requestParameters['FileURL'] = $fileURL;
        $this->queryParameters['FileURL'] = $fileURL;

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
     * @param string $mediaWorkflowUserData
     *
     * @return $this
     */
    public function setMediaWorkflowUserData($mediaWorkflowUserData)
    {
        $this->requestParameters['MediaWorkflowUserData'] = $mediaWorkflowUserData;
        $this->queryParameters['MediaWorkflowUserData'] = $mediaWorkflowUserData;

        return $this;
    }
}
