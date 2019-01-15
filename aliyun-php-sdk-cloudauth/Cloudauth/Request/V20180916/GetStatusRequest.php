<?php

namespace Cloudauth\Request\V20180916;

/**
 * Request of GetStatus
 *
 * @method string getResourceOwnerId()
 * @method string getBiz()
 * @method string getSourceIp()
 * @method string getTicketId()
 */
class GetStatusRequest extends \RpcAcsRequest
{

    /**
     * @var string
     */
    protected $requestScheme = 'https';

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
            'Cloudauth',
            '2018-09-16',
            'GetStatus',
            'CloudAuth'
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
     * @param string $biz
     *
     * @return $this
     */
    public function setBiz($biz)
    {
        $this->requestParameters['Biz'] = $biz;
        $this->queryParameters['Biz'] = $biz;

        return $this;
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
     * @param string $ticketId
     *
     * @return $this
     */
    public function setTicketId($ticketId)
    {
        $this->requestParameters['TicketId'] = $ticketId;
        $this->queryParameters['TicketId'] = $ticketId;

        return $this;
    }
}
