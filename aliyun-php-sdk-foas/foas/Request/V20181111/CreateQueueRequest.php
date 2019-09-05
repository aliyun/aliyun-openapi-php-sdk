<?php

namespace foas\Request\V20181111;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreateQueue
 *
 * @method string getqueueName()
 * @method string getmaxMemMB()
 * @method string getclusterId()
 * @method string getgpu()
 * @method string getmaxVcore()
 */
class CreateQueueRequest extends \RoaAcsRequest
{

    /**
     * @var string
     */
    protected $requestScheme = 'https';

    /**
     * @var string
     */
    protected $uriPattern = '/api/v2/clusters/[clusterId]/queue';

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
            'foas',
            '2018-11-11',
            'CreateQueue',
            'foas'
        );
    }

    /**
     * @param string $queueName
     *
     * @return $this
     */
    public function setqueueName($queueName)
    {
        $this->requestParameters['queueName'] = $queueName;
        $this->queryParameters['queueName'] = $queueName;

        return $this;
    }

    /**
     * @param string $maxMemMB
     *
     * @return $this
     */
    public function setmaxMemMB($maxMemMB)
    {
        $this->requestParameters['maxMemMB'] = $maxMemMB;
        $this->queryParameters['maxMemMB'] = $maxMemMB;

        return $this;
    }

    /**
     * @param string $clusterId
     *
     * @return $this
     */
    public function setclusterId($clusterId)
    {
        $this->requestParameters['clusterId'] = $clusterId;
        $this->pathParameters['clusterId'] = $clusterId;

        return $this;
    }

    /**
     * @param string $gpu
     *
     * @return $this
     */
    public function setgpu($gpu)
    {
        $this->requestParameters['gpu'] = $gpu;
        $this->queryParameters['gpu'] = $gpu;

        return $this;
    }

    /**
     * @param string $maxVcore
     *
     * @return $this
     */
    public function setmaxVcore($maxVcore)
    {
        $this->requestParameters['maxVcore'] = $maxVcore;
        $this->queryParameters['maxVcore'] = $maxVcore;

        return $this;
    }
}
