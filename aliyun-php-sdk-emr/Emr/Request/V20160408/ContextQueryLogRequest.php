<?php

namespace Emr\Request\V20160408;

/**
 * Request of ContextQueryLog
 *
 * @method string getPackId()
 * @method string getResourceOwnerId()
 * @method string getTotalOffset()
 * @method string getSize()
 * @method string getPackMeta()
 * @method string getFrom()
 * @method string getClusterId()
 * @method string getTo()
 * @method string getReverse()
 * @method string getLogStore()
 */
class ContextQueryLogRequest extends \RpcAcsRequest
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
            'ContextQueryLog',
            'emr'
        );
    }

    /**
     * @param string $packId
     *
     * @return $this
     */
    public function setPackId($packId)
    {
        $this->requestParameters['PackId'] = $packId;
        $this->queryParameters['PackId'] = $packId;

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
     * @param string $totalOffset
     *
     * @return $this
     */
    public function setTotalOffset($totalOffset)
    {
        $this->requestParameters['TotalOffset'] = $totalOffset;
        $this->queryParameters['TotalOffset'] = $totalOffset;

        return $this;
    }

    /**
     * @param string $size
     *
     * @return $this
     */
    public function setSize($size)
    {
        $this->requestParameters['Size'] = $size;
        $this->queryParameters['Size'] = $size;

        return $this;
    }

    /**
     * @param string $packMeta
     *
     * @return $this
     */
    public function setPackMeta($packMeta)
    {
        $this->requestParameters['PackMeta'] = $packMeta;
        $this->queryParameters['PackMeta'] = $packMeta;

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
     * @param string $clusterId
     *
     * @return $this
     */
    public function setClusterId($clusterId)
    {
        $this->requestParameters['ClusterId'] = $clusterId;
        $this->queryParameters['ClusterId'] = $clusterId;

        return $this;
    }

    /**
     * @param string $to
     *
     * @return $this
     */
    public function setTo($to)
    {
        $this->requestParameters['To'] = $to;
        $this->queryParameters['To'] = $to;

        return $this;
    }

    /**
     * @param string $reverse
     *
     * @return $this
     */
    public function setReverse($reverse)
    {
        $this->requestParameters['Reverse'] = $reverse;
        $this->queryParameters['Reverse'] = $reverse;

        return $this;
    }

    /**
     * @param string $logStore
     *
     * @return $this
     */
    public function setLogStore($logStore)
    {
        $this->requestParameters['LogStore'] = $logStore;
        $this->queryParameters['LogStore'] = $logStore;

        return $this;
    }
}
