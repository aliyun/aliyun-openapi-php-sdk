<?php

namespace aegis\Request\V20161111;

/**
 * Request of GetStatisticsByUuid
 *
 * @method string getUuid()
 */
class GetStatisticsByUuidRequest extends \RpcAcsRequest
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
            'GetStatisticsByUuid',
            'vipaegis'
        );
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
}
