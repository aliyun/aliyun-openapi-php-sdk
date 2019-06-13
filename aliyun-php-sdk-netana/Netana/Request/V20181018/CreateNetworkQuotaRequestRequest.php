<?php

namespace Netana\Request\V20181018;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreateNetworkQuotaRequest
 *
 * @method string getRequestReason()
 * @method string getResourceOwnerId()
 * @method string getProduct()
 * @method string getQuotaPublicityName()
 * @method string getResourceOwnerAccount()
 * @method string getRequestQuantity()
 * @method string getMobilePhone()
 * @method string getResourceType()
 * @method string getEmail()
 */
class CreateNetworkQuotaRequestRequest extends \RpcAcsRequest
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
            'Netana',
            '2018-10-18',
            'CreateNetworkQuotaRequest',
            'Netana'
        );
    }

    /**
     * @param string $requestReason
     *
     * @return $this
     */
    public function setRequestReason($requestReason)
    {
        $this->requestParameters['RequestReason'] = $requestReason;
        $this->queryParameters['RequestReason'] = $requestReason;

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
     * @param string $product
     *
     * @return $this
     */
    public function setProduct($product)
    {
        $this->requestParameters['Product'] = $product;
        $this->queryParameters['Product'] = $product;

        return $this;
    }

    /**
     * @param string $quotaPublicityName
     *
     * @return $this
     */
    public function setQuotaPublicityName($quotaPublicityName)
    {
        $this->requestParameters['QuotaPublicityName'] = $quotaPublicityName;
        $this->queryParameters['QuotaPublicityName'] = $quotaPublicityName;

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
     * @param string $requestQuantity
     *
     * @return $this
     */
    public function setRequestQuantity($requestQuantity)
    {
        $this->requestParameters['RequestQuantity'] = $requestQuantity;
        $this->queryParameters['RequestQuantity'] = $requestQuantity;

        return $this;
    }

    /**
     * @param string $mobilePhone
     *
     * @return $this
     */
    public function setMobilePhone($mobilePhone)
    {
        $this->requestParameters['MobilePhone'] = $mobilePhone;
        $this->queryParameters['MobilePhone'] = $mobilePhone;

        return $this;
    }

    /**
     * @param string $resourceType
     *
     * @return $this
     */
    public function setResourceType($resourceType)
    {
        $this->requestParameters['ResourceType'] = $resourceType;
        $this->queryParameters['ResourceType'] = $resourceType;

        return $this;
    }

    /**
     * @param string $email
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->requestParameters['Email'] = $email;
        $this->queryParameters['Email'] = $email;

        return $this;
    }
}
