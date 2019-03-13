<?php

namespace Vpc\Request\V20160428;

/**
 * Request of ModifyIPv6TranslatorAclListEntry
 *
 * @method string getAclId()
 * @method string getResourceOwnerId()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getAclEntryComment()
 * @method string getOwnerId()
 * @method string getAclEntryId()
 */
class ModifyIPv6TranslatorAclListEntryRequest extends \RpcAcsRequest
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
            'Vpc',
            '2016-04-28',
            'ModifyIPv6TranslatorAclListEntry',
            'vpc'
        );
    }

    /**
     * @param string $aclId
     *
     * @return $this
     */
    public function setAclId($aclId)
    {
        $this->requestParameters['AclId'] = $aclId;
        $this->queryParameters['AclId'] = $aclId;

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
     * @param string $aclEntryComment
     *
     * @return $this
     */
    public function setAclEntryComment($aclEntryComment)
    {
        $this->requestParameters['AclEntryComment'] = $aclEntryComment;
        $this->queryParameters['AclEntryComment'] = $aclEntryComment;

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
     * @param string $aclEntryId
     *
     * @return $this
     */
    public function setAclEntryId($aclEntryId)
    {
        $this->requestParameters['AclEntryId'] = $aclEntryId;
        $this->queryParameters['AclEntryId'] = $aclEntryId;

        return $this;
    }
}
