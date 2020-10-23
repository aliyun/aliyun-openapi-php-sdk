<?php

namespace imm\Request\V20170906;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ListFaceGroups
 *
 * @method string getProject()
 * @method string getRemarksBQuery()
 * @method string getExternalId()
 * @method string getLimit()
 * @method string getRemarksArrayBQuery()
 * @method string getOrder()
 * @method string getRemarksAQuery()
 * @method string getOrderBy()
 * @method string getRemarksDQuery()
 * @method string getRemarksArrayAQuery()
 * @method string getMarker()
 * @method string getSetId()
 * @method string getRemarksCQuery()
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
     * @param string $remarksBQuery
     *
     * @return $this
     */
    public function setRemarksBQuery($remarksBQuery)
    {
        $this->requestParameters['RemarksBQuery'] = $remarksBQuery;
        $this->queryParameters['RemarksBQuery'] = $remarksBQuery;

        return $this;
    }

    /**
     * @param string $externalId
     *
     * @return $this
     */
    public function setExternalId($externalId)
    {
        $this->requestParameters['ExternalId'] = $externalId;
        $this->queryParameters['ExternalId'] = $externalId;

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
     * @param string $remarksArrayBQuery
     *
     * @return $this
     */
    public function setRemarksArrayBQuery($remarksArrayBQuery)
    {
        $this->requestParameters['RemarksArrayBQuery'] = $remarksArrayBQuery;
        $this->queryParameters['RemarksArrayBQuery'] = $remarksArrayBQuery;

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
     * @param string $remarksAQuery
     *
     * @return $this
     */
    public function setRemarksAQuery($remarksAQuery)
    {
        $this->requestParameters['RemarksAQuery'] = $remarksAQuery;
        $this->queryParameters['RemarksAQuery'] = $remarksAQuery;

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
     * @param string $remarksDQuery
     *
     * @return $this
     */
    public function setRemarksDQuery($remarksDQuery)
    {
        $this->requestParameters['RemarksDQuery'] = $remarksDQuery;
        $this->queryParameters['RemarksDQuery'] = $remarksDQuery;

        return $this;
    }

    /**
     * @param string $remarksArrayAQuery
     *
     * @return $this
     */
    public function setRemarksArrayAQuery($remarksArrayAQuery)
    {
        $this->requestParameters['RemarksArrayAQuery'] = $remarksArrayAQuery;
        $this->queryParameters['RemarksArrayAQuery'] = $remarksArrayAQuery;

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

    /**
     * @param string $remarksCQuery
     *
     * @return $this
     */
    public function setRemarksCQuery($remarksCQuery)
    {
        $this->requestParameters['RemarksCQuery'] = $remarksCQuery;
        $this->queryParameters['RemarksCQuery'] = $remarksCQuery;

        return $this;
    }
}
