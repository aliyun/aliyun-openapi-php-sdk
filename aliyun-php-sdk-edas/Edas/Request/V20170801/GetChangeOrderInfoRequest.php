<?php

namespace Edas\Request\V20170801;

/**
 * Request of GetChangeOrderInfo
 *
 * @method string getChangeOrderId()
 */
class GetChangeOrderInfoRequest extends \RoaAcsRequest
{

    /**
     * @var string
     */
    protected $uriPattern = '/pop/v5/changeorder/change_order_info';

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
            'Edas',
            '2017-08-01',
            'GetChangeOrderInfo'
        );
    }

    /**
     * @param string $changeOrderId
     *
     * @return $this
     */
    public function setChangeOrderId($changeOrderId)
    {
        $this->requestParameters['ChangeOrderId'] = $changeOrderId;
        $this->queryParameters['ChangeOrderId'] = $changeOrderId;

        return $this;
    }
}
