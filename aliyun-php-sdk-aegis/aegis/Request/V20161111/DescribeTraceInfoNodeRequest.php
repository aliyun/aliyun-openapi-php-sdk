<?php

namespace aegis\Request\V20161111;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DescribeTraceInfoNode
 *
 * @method string getSourceIp()
 * @method string getVertexId()
 * @method string getFrom()
 * @method string getLang()
 * @method string getType()
 * @method string getUuid()
 * @method string getEventName()
 */
class DescribeTraceInfoNodeRequest extends \RpcAcsRequest
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
            'aegis',
            '2016-11-11',
            'DescribeTraceInfoNode',
            'vipaegis'
        );
    }

    /**
     * @param string $sourceIp
     *
     * @return $this
     */
    public function setSourceIp($sourceIp)
    {
        $this->requestParameters['SourceIp'] = $sourceIp;
        $this->queryParameters['SourceIp'] = $sourceIp;

        return $this;
    }

    /**
     * @param string $vertexId
     *
     * @return $this
     */
    public function setVertexId($vertexId)
    {
        $this->requestParameters['VertexId'] = $vertexId;
        $this->queryParameters['VertexId'] = $vertexId;

        return $this;
    }

    /**
     * @param string $from
     *
     * @return $this
     */
    public function setFrom($from)
    {
        $this->requestParameters['From'] = $from;
        $this->queryParameters['From'] = $from;

        return $this;
    }

    /**
     * @param string $lang
     *
     * @return $this
     */
    public function setLang($lang)
    {
        $this->requestParameters['Lang'] = $lang;
        $this->queryParameters['Lang'] = $lang;

        return $this;
    }

    /**
     * @param string $type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->requestParameters['Type'] = $type;
        $this->queryParameters['Type'] = $type;

        return $this;
    }

    /**
     * @param string $uuid
     *
     * @return $this
     */
    public function setUuid($uuid)
    {
        $this->requestParameters['Uuid'] = $uuid;
        $this->queryParameters['Uuid'] = $uuid;

        return $this;
    }

    /**
     * @param string $eventName
     *
     * @return $this
     */
    public function setEventName($eventName)
    {
        $this->requestParameters['EventName'] = $eventName;
        $this->queryParameters['EventName'] = $eventName;

        return $this;
    }
}
