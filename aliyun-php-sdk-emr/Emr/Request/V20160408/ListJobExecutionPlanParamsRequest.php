<?php

namespace Emr\Request\V20160408;

/**
 * Request of ListJobExecutionPlanParams
 *
 * @method string getResourceOwnerId()
 * @method string getRelateId()
 * @method string getParamBizType()
 */
class ListJobExecutionPlanParamsRequest extends \RpcAcsRequest
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
            'Emr',
            '2016-04-08',
            'ListJobExecutionPlanParams',
            'emr'
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
     * @param string $relateId
     *
     * @return $this
     */
    public function setRelateId($relateId)
    {
        $this->requestParameters['RelateId'] = $relateId;
        $this->queryParameters['RelateId'] = $relateId;

        return $this;
    }

    /**
     * @param string $paramBizType
     *
     * @return $this
     */
    public function setParamBizType($paramBizType)
    {
        $this->requestParameters['ParamBizType'] = $paramBizType;
        $this->queryParameters['ParamBizType'] = $paramBizType;

        return $this;
    }
}
