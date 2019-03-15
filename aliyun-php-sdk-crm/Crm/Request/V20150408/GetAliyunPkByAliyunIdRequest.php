<?php

namespace Crm\Request\V20150408;

/**
 * Request of GetAliyunPkByAliyunId
 *
 * @method string getAliyunId()
 */
class GetAliyunPkByAliyunIdRequest extends \RpcAcsRequest
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
            'Crm',
            '2015-04-08',
            'GetAliyunPkByAliyunId',
            'crm'
        );
    }

    /**
     * @param string $aliyunId
     *
     * @return $this
     */
    public function setAliyunId($aliyunId)
    {
        $this->requestParameters['AliyunId'] = $aliyunId;
        $this->queryParameters['AliyunId'] = $aliyunId;

        return $this;
    }
}
