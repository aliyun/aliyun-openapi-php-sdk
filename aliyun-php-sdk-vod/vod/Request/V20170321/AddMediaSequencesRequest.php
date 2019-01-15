<?php

namespace vod\Request\V20170321;

/**
 * Request of AddMediaSequences
 *
 * @method string getResourceOwnerId()
 * @method string getMediaURL()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getMediaSequences()
 * @method string getOwnerId()
 * @method string getMediaId()
 * @method string getMediaType()
 */
class AddMediaSequencesRequest extends \RpcAcsRequest
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
            'AddMediaSequences',
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
     * @param string $mediaURL
     *
     * @return $this
     */
    public function setMediaURL($mediaURL)
    {
        $this->requestParameters['MediaURL'] = $mediaURL;
        $this->queryParameters['MediaURL'] = $mediaURL;

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
     * @param string $mediaSequences
     *
     * @return $this
     */
    public function setMediaSequences($mediaSequences)
    {
        $this->requestParameters['MediaSequences'] = $mediaSequences;
        $this->queryParameters['MediaSequences'] = $mediaSequences;

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
     * @param string $mediaId
     *
     * @return $this
     */
    public function setMediaId($mediaId)
    {
        $this->requestParameters['MediaId'] = $mediaId;
        $this->queryParameters['MediaId'] = $mediaId;

        return $this;
    }

    /**
     * @param string $mediaType
     *
     * @return $this
     */
    public function setMediaType($mediaType)
    {
        $this->requestParameters['MediaType'] = $mediaType;
        $this->queryParameters['MediaType'] = $mediaType;

        return $this;
    }
}
