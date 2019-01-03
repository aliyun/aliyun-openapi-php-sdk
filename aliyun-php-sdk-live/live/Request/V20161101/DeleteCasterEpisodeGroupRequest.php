<?php

namespace live\Request\V20161101;

/**
 * Request of DeleteCasterEpisodeGroup
 *
 * @method string getOwnerId()
 * @method string getProgramId()
 */
class DeleteCasterEpisodeGroupRequest extends \RpcAcsRequest
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
            'live',
            '2016-11-01',
            'DeleteCasterEpisodeGroup',
            'live'
        );
    }

    /**
     * @param string $ownerId
     *
     * @return $this
     */
    public function setOwnerId($ownerId)
    {
        $this->requestParameters['OwnerId'] = $ownerId;
        $this->queryParameters['OwnerId'] = $ownerId;

        return $this;
    }

    /**
     * @param string $programId
     *
     * @return $this
     */
    public function setProgramId($programId)
    {
        $this->requestParameters['ProgramId'] = $programId;
        $this->queryParameters['ProgramId'] = $programId;

        return $this;
    }
}
