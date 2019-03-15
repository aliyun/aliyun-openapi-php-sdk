<?php

namespace openanalytics\Request\V20180301;

/**
 * Request of CloseProductAccount
 *
 * @method string getProductCode()
 * @method string getProductAccessKey()
 * @method string getTargetUid()
 * @method string getTargetArnRole()
 */
class CloseProductAccountRequest extends \RpcAcsRequest
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
            'openanalytics',
            '2018-03-01',
            'CloseProductAccount',
            'openanalytics'
        );
    }

    /**
     * @param string $productCode
     *
     * @return $this
     */
    public function setProductCode($productCode)
    {
        $this->requestParameters['ProductCode'] = $productCode;
        $this->queryParameters['ProductCode'] = $productCode;

        return $this;
    }

    /**
     * @param string $productAccessKey
     *
     * @return $this
     */
    public function setProductAccessKey($productAccessKey)
    {
        $this->requestParameters['ProductAccessKey'] = $productAccessKey;
        $this->queryParameters['ProductAccessKey'] = $productAccessKey;

        return $this;
    }

    /**
     * @param string $targetUid
     *
     * @return $this
     */
    public function setTargetUid($targetUid)
    {
        $this->requestParameters['TargetUid'] = $targetUid;
        $this->queryParameters['TargetUid'] = $targetUid;

        return $this;
    }

    /**
     * @param string $targetArnRole
     *
     * @return $this
     */
    public function setTargetArnRole($targetArnRole)
    {
        $this->requestParameters['TargetArnRole'] = $targetArnRole;
        $this->queryParameters['TargetArnRole'] = $targetArnRole;

        return $this;
    }
}
