<?php

namespace Market\Request\V20151101;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreateCommodity
 *
 * @method string getApplicationId()
 * @method string getContent()
 */
class CreateCommodityRequest extends \RpcAcsRequest
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
            'Market',
            '2015-11-01',
            'CreateCommodity',
            'yunmarket'
        );
    }

    /**
     * @param string $applicationId
     *
     * @return $this
     */
    public function setApplicationId($applicationId)
    {
        $this->requestParameters['ApplicationId'] = $applicationId;
        $this->queryParameters['ApplicationId'] = $applicationId;

        return $this;
    }

    /**
     * @param string $content
     *
     * @return $this
     */
    public function setContent($content)
    {
        $this->requestParameters['Content'] = $content;
        $this->queryParameters['Content'] = $content;

        return $this;
    }
}
