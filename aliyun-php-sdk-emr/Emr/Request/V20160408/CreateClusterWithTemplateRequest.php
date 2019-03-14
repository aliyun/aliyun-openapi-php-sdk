<?php

namespace Emr\Request\V20160408;

/**
 * Request of CreateClusterWithTemplate
 *
 * @method string getResourceOwnerId()
 * @method string getUniqueTag()
 * @method string getTemplateBizId()
 */
class CreateClusterWithTemplateRequest extends \RpcAcsRequest
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
            'CreateClusterWithTemplate',
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
     * @param string $uniqueTag
     *
     * @return $this
     */
    public function setUniqueTag($uniqueTag)
    {
        $this->requestParameters['UniqueTag'] = $uniqueTag;
        $this->queryParameters['UniqueTag'] = $uniqueTag;

        return $this;
    }

    /**
     * @param string $templateBizId
     *
     * @return $this
     */
    public function setTemplateBizId($templateBizId)
    {
        $this->requestParameters['TemplateBizId'] = $templateBizId;
        $this->queryParameters['TemplateBizId'] = $templateBizId;

        return $this;
    }
}
