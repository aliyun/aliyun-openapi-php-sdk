<?php

namespace dms_enterprise\Request\V20181101;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreateOrder
 *
 * @method string getPluginType()
 * @method string getComment()
 * @method string getTid()
 * @method string getPluginParam()
 * @method string getRelatedUserList()
 */
class CreateOrderRequest extends \RpcAcsRequest
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
            'dms-enterprise',
            '2018-11-01',
            'CreateOrder'
        );
    }

    /**
     * @param string $pluginType
     *
     * @return $this
     */
    public function setPluginType($pluginType)
    {
        $this->requestParameters['PluginType'] = $pluginType;
        $this->queryParameters['PluginType'] = $pluginType;

        return $this;
    }

    /**
     * @param string $comment
     *
     * @return $this
     */
    public function setComment($comment)
    {
        $this->requestParameters['Comment'] = $comment;
        $this->queryParameters['Comment'] = $comment;

        return $this;
    }

    /**
     * @param string $tid
     *
     * @return $this
     */
    public function setTid($tid)
    {
        $this->requestParameters['Tid'] = $tid;
        $this->queryParameters['Tid'] = $tid;

        return $this;
    }

    /**
     * @param string $pluginParam
     *
     * @return $this
     */
    public function setPluginParam($pluginParam)
    {
        $this->requestParameters['PluginParam'] = $pluginParam;
        $this->queryParameters['PluginParam'] = $pluginParam;

        return $this;
    }

    /**
     * @param string $relatedUserList
     *
     * @return $this
     */
    public function setRelatedUserList($relatedUserList)
    {
        $this->requestParameters['RelatedUserList'] = $relatedUserList;
        $this->queryParameters['RelatedUserList'] = $relatedUserList;

        return $this;
    }
}
