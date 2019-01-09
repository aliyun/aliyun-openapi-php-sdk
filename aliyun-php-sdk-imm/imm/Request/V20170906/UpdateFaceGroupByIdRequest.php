<?php

namespace imm\Request\V20170906;

/**
 * Request of UpdateFaceGroupById
 *
 * @method string getProject()
 * @method string getSetId()
 * @method string getNewGroupId()
 * @method string getFaceIds()
 */
class UpdateFaceGroupByIdRequest extends \RpcAcsRequest
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
            'UpdateFaceGroupById',
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
     * @param string $newGroupId
     *
     * @return $this
     */
    public function setNewGroupId($newGroupId)
    {
        $this->requestParameters['NewGroupId'] = $newGroupId;
        $this->queryParameters['NewGroupId'] = $newGroupId;

        return $this;
    }

    /**
     * @param string $faceIds
     *
     * @return $this
     */
    public function setFaceIds($faceIds)
    {
        $this->requestParameters['FaceIds'] = $faceIds;
        $this->queryParameters['FaceIds'] = $faceIds;

        return $this;
    }
}
