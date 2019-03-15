<?php

namespace Mts\Request\V20140618;

/**
 * Request of RegisterMediaDetailPerson
 *
 * @method string getResourceOwnerId()
 * @method string getImages()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getPersonLib()
 * @method string getOwnerId()
 * @method string getCategory()
 * @method string getPersonName()
 */
class RegisterMediaDetailPersonRequest extends \RpcAcsRequest
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
            'RegisterMediaDetailPerson',
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
     * @param string $images
     *
     * @return $this
     */
    public function setImages($images)
    {
        $this->requestParameters['Images'] = $images;
        $this->queryParameters['Images'] = $images;

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
     * @param string $personLib
     *
     * @return $this
     */
    public function setPersonLib($personLib)
    {
        $this->requestParameters['PersonLib'] = $personLib;
        $this->queryParameters['PersonLib'] = $personLib;

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
     * @param string $category
     *
     * @return $this
     */
    public function setCategory($category)
    {
        $this->requestParameters['Category'] = $category;
        $this->queryParameters['Category'] = $category;

        return $this;
    }

    /**
     * @param string $personName
     *
     * @return $this
     */
    public function setPersonName($personName)
    {
        $this->requestParameters['PersonName'] = $personName;
        $this->queryParameters['PersonName'] = $personName;

        return $this;
    }
}
