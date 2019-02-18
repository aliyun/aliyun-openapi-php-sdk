<?php

namespace Edas\Request\V20170801;

/**
 * Request of DeleteEcu
 *
 * @method string getEcuId()
 */
class DeleteEcuRequest extends \RoaAcsRequest
{

    /**
     * @var string
     */
    protected $uriPattern = '/pop/v5/resource/delete_ecu';

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
            'DeleteEcu'
        );
    }

    /**
     * @param string $ecuId
     *
     * @return $this
     */
    public function setEcuId($ecuId)
    {
        $this->requestParameters['EcuId'] = $ecuId;
        $this->queryParameters['EcuId'] = $ecuId;

        return $this;
    }
}
