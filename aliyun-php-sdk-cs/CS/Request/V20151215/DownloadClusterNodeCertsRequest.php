<?php

namespace CS\Request\V20151215;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DownloadClusterNodeCerts
 *
 * @method string getNodeId()
 * @method string getToken()
 */
class DownloadClusterNodeCertsRequest extends \RoaAcsRequest
{

    /**
     * @var string
     */
    protected $uriPattern = '/token/[Token]/nodes/[NodeId]/certs';

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'CS',
            '2015-12-15',
            'DownloadClusterNodeCerts'
        );
    }

    /**
     * @param string $nodeId
     *
     * @return $this
     */
    public function setNodeId($nodeId)
    {
        $this->requestParameters['NodeId'] = $nodeId;
        $this->pathParameters['NodeId'] = $nodeId;

        return $this;
    }

    /**
     * @param string $token
     *
     * @return $this
     */
    public function setToken($token)
    {
        $this->requestParameters['Token'] = $token;
        $this->pathParameters['Token'] = $token;

        return $this;
    }
}
