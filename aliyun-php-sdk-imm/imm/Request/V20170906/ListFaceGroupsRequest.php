<?php

namespace imm\Request\V20170906;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ListFaceGroups
 *
 * @method string getProject()
 * @method string getLimit()
 * @method string getOrder()
 * @method string getOrderBy()
 * @method string getMarker()
 * @method string getSetId()
 */
class ListFaceGroupsRequest extends \RpcAcsRequest
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
            'imm',
            '2017-09-06',
            'ListFaceGroups',
            'imm'
        );
    }

    /**
     * @param string $project
     *
     * @return $this
     */
    public function setProject($project)
    {
        $this->requestParameters['Project'] = $project;
        $this->queryParameters['Project'] = $project;

        return $this;
    }

    /**
     * @param string $limit
     *
     * @return $this
     */
    public function setLimit($limit)
    {
        $this->requestParameters['Limit'] = $limit;
        $this->queryParameters['Limit'] = $limit;

        return $this;
    }

    /**
     * @param string $order
     *
     * @return $this
     */
    public function setOrder($order)
    {
        $this->requestParameters['Order'] = $order;
        $this->queryParameters['Order'] = $order;

        return $this;
    }

    /**
     * @param string $orderBy
     *
     * @return $this
     */
    public function setOrderBy($orderBy)
    {
        $this->requestParameters['OrderBy'] = $orderBy;
        $this->queryParameters['OrderBy'] = $orderBy;

        return $this;
    }

    /**
     * @param string $marker
     *
     * @return $this
     */
    public function setMarker($marker)
    {
        $this->requestParameters['Marker'] = $marker;
        $this->queryParameters['Marker'] = $marker;

        return $this;
    }

    /**
     * @param string $setId
     *
     * @return $this
     */
    public function setSetId($setId)
    {
        $this->requestParameters['SetId'] = $setId;
        $this->queryParameters['SetId'] = $setId;

        return $this;
    }
}
