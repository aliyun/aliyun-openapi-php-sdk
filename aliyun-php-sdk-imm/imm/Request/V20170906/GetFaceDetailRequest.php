<?php

namespace imm\Request\V20170906;

/**
 * Request of GetFaceDetail
 *
 * @method string getProject()
 * @method string getSetId()
 * @method string getFaceId()
 */
class GetFaceDetailRequest extends \RpcAcsRequest
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
            'imm',
            '2017-09-06',
            'GetFaceDetail',
            'imm'
        );
    }

    /**
     * @param string $project
     *
     * @return $this
     */
    public function setProject($project)
    {
        $this->requestParameters['Project'] = $project;
        $this->queryParameters['Project'] = $project;

        return $this;
    }

    /**
     * @param string $setId
     *
     * @return $this
     */
    public function setSetId($setId)
    {
        $this->requestParameters['SetId'] = $setId;
        $this->queryParameters['SetId'] = $setId;

        return $this;
    }

    /**
     * @param string $faceId
     *
     * @return $this
     */
    public function setFaceId($faceId)
    {
        $this->requestParameters['FaceId'] = $faceId;
        $this->queryParameters['FaceId'] = $faceId;

        return $this;
    }
}
