<?php

namespace CloudAPI\Request\V20160714;

/**
 * Request of AddCatalogRelation
 *
 * @method string getCatalogId()
 * @method string getSecurityToken()
 * @method string getApiId()
 */
class AddCatalogRelationRequest extends \RpcAcsRequest
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
            'CloudAPI',
            '2016-07-14',
            'AddCatalogRelation',
            'apigateway'
        );
    }

    /**
     * @param string $catalogId
     *
     * @return $this
     */
    public function setCatalogId($catalogId)
    {
        $this->requestParameters['CatalogId'] = $catalogId;
        $this->queryParameters['CatalogId'] = $catalogId;

        return $this;
    }

    /**
     * @param string $securityToken
     *
     * @return $this
     */
    public function setSecurityToken($securityToken)
    {
        $this->requestParameters['SecurityToken'] = $securityToken;
        $this->queryParameters['SecurityToken'] = $securityToken;

        return $this;
    }

    /**
     * @param string $apiId
     *
     * @return $this
     */
    public function setApiId($apiId)
    {
        $this->requestParameters['ApiId'] = $apiId;
        $this->queryParameters['ApiId'] = $apiId;

        return $this;
    }
}
