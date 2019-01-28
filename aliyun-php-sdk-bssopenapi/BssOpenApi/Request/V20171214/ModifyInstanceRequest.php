<?php

namespace BssOpenApi\Request\V20171214;

/**
 * Request of ModifyInstance
 *
 * @method string getProductCode()
 * @method string getInstanceId()
 * @method string getSubscriptionType()
 * @method string getModifyType()
 * @method array getParameters()
 * @method string getOwnerId()
 * @method string getProductType()
 */
class ModifyInstanceRequest extends \RpcAcsRequest
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
            'BssOpenApi',
            '2017-12-14',
            'ModifyInstance'
        );
    }

    /**
     * @param string $productCode
     *
     * @return $this
     */
    public function setProductCode($productCode)
    {
        $this->requestParameters['ProductCode'] = $productCode;
        $this->queryParameters['ProductCode'] = $productCode;

        return $this;
    }

    /**
     * @param string $instanceId
     *
     * @return $this
     */
    public function setInstanceId($instanceId)
    {
        $this->requestParameters['InstanceId'] = $instanceId;
        $this->queryParameters['InstanceId'] = $instanceId;

        return $this;
    }

    /**
     * @param string $subscriptionType
     *
     * @return $this
     */
    public function setSubscriptionType($subscriptionType)
    {
        $this->requestParameters['SubscriptionType'] = $subscriptionType;
        $this->queryParameters['SubscriptionType'] = $subscriptionType;

        return $this;
    }

    /**
     * @param string $modifyType
     *
     * @return $this
     */
    public function setModifyType($modifyType)
    {
        $this->requestParameters['ModifyType'] = $modifyType;
        $this->queryParameters['ModifyType'] = $modifyType;

        return $this;
    }

    /**
     * @param array $parameters
     *
     * @return $this
     */
    public function setParameters(array $parameters)
    {
        $this->requestParameters['Parameters'] = $parameters;
        foreach ($parameters as $i => $iValue) {
            $this->queryParameters['Parameter.' . ($i + 1) . '.Code'] = $parameters[$i]['Code'];
            $this->queryParameters['Parameter.' . ($i + 1) . '.Value'] = $parameters[$i]['Value'];
        }

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
     * @param string $productType
     *
     * @return $this
     */
    public function setProductType($productType)
    {
        $this->requestParameters['ProductType'] = $productType;
        $this->queryParameters['ProductType'] = $productType;

        return $this;
    }
}
