<?php

namespace Vpc\Request\V20160428;

/**
 * Request of DescribeIPv6TranslatorEntries
 *
 * @method string getBackendIpv4Port()
 * @method string getAclId()
 * @method string getResourceOwnerId()
 * @method string getIpv6TranslatorEntryId()
 * @method string getResourceOwnerAccount()
 * @method string getEntryName()
 * @method string getAllocateIpv6Addr()
 * @method string getClientToken()
 * @method string getOwnerAccount()
 * @method string getOwnerId()
 * @method string getAclStatus()
 * @method string getPageNumber()
 * @method string getAclType()
 * @method string getAllocateIpv6Port()
 * @method string getPageSize()
 * @method string getBackendIpv4Addr()
 * @method string getTransProtocol()
 * @method string getIpv6TranslatorId()
 */
class DescribeIPv6TranslatorEntriesRequest extends \RpcAcsRequest
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
            'DescribeIPv6TranslatorEntries',
            'vpc'
        );
    }

    /**
     * @param string $backendIpv4Port
     *
     * @return $this
     */
    public function setBackendIpv4Port($backendIpv4Port)
    {
        $this->requestParameters['BackendIpv4Port'] = $backendIpv4Port;
        $this->queryParameters['BackendIpv4Port'] = $backendIpv4Port;

        return $this;
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
     * @param string $ipv6TranslatorEntryId
     *
     * @return $this
     */
    public function setIpv6TranslatorEntryId($ipv6TranslatorEntryId)
    {
        $this->requestParameters['Ipv6TranslatorEntryId'] = $ipv6TranslatorEntryId;
        $this->queryParameters['Ipv6TranslatorEntryId'] = $ipv6TranslatorEntryId;

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
     * @param string $entryName
     *
     * @return $this
     */
    public function setEntryName($entryName)
    {
        $this->requestParameters['EntryName'] = $entryName;
        $this->queryParameters['EntryName'] = $entryName;

        return $this;
    }

    /**
     * @param string $allocateIpv6Addr
     *
     * @return $this
     */
    public function setAllocateIpv6Addr($allocateIpv6Addr)
    {
        $this->requestParameters['AllocateIpv6Addr'] = $allocateIpv6Addr;
        $this->queryParameters['AllocateIpv6Addr'] = $allocateIpv6Addr;

        return $this;
    }

    /**
     * @param string $clientToken
     *
     * @return $this
     */
    public function setClientToken($clientToken)
    {
        $this->requestParameters['ClientToken'] = $clientToken;
        $this->queryParameters['ClientToken'] = $clientToken;

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
     * @param string $aclStatus
     *
     * @return $this
     */
    public function setAclStatus($aclStatus)
    {
        $this->requestParameters['AclStatus'] = $aclStatus;
        $this->queryParameters['AclStatus'] = $aclStatus;

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
     * @param string $aclType
     *
     * @return $this
     */
    public function setAclType($aclType)
    {
        $this->requestParameters['AclType'] = $aclType;
        $this->queryParameters['AclType'] = $aclType;

        return $this;
    }

    /**
     * @param string $allocateIpv6Port
     *
     * @return $this
     */
    public function setAllocateIpv6Port($allocateIpv6Port)
    {
        $this->requestParameters['AllocateIpv6Port'] = $allocateIpv6Port;
        $this->queryParameters['AllocateIpv6Port'] = $allocateIpv6Port;

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
     * @param string $backendIpv4Addr
     *
     * @return $this
     */
    public function setBackendIpv4Addr($backendIpv4Addr)
    {
        $this->requestParameters['BackendIpv4Addr'] = $backendIpv4Addr;
        $this->queryParameters['BackendIpv4Addr'] = $backendIpv4Addr;

        return $this;
    }

    /**
     * @param string $transProtocol
     *
     * @return $this
     */
    public function setTransProtocol($transProtocol)
    {
        $this->requestParameters['TransProtocol'] = $transProtocol;
        $this->queryParameters['TransProtocol'] = $transProtocol;

        return $this;
    }

    /**
     * @param string $ipv6TranslatorId
     *
     * @return $this
     */
    public function setIpv6TranslatorId($ipv6TranslatorId)
    {
        $this->requestParameters['Ipv6TranslatorId'] = $ipv6TranslatorId;
        $this->queryParameters['Ipv6TranslatorId'] = $ipv6TranslatorId;

        return $this;
    }
}
