<?php

namespace imm\Request\V20170906;

/**
 * Request of CompareImageFaces
 *
 * @method string getImageUriB()
 * @method string getImageUriA()
 * @method string getProject()
 * @method string getSetId()
 * @method string getFaceIdA()
 * @method string getFaceIdB()
 */
class CompareImageFacesRequest extends \RpcAcsRequest
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
            'CompareImageFaces',
            'imm'
        );
    }

    /**
     * @param string $imageUriB
     *
     * @return $this
     */
    public function setImageUriB($imageUriB)
    {
        $this->requestParameters['ImageUriB'] = $imageUriB;
        $this->queryParameters['ImageUriB'] = $imageUriB;

        return $this;
    }

    /**
     * @param string $imageUriA
     *
     * @return $this
     */
    public function setImageUriA($imageUriA)
    {
        $this->requestParameters['ImageUriA'] = $imageUriA;
        $this->queryParameters['ImageUriA'] = $imageUriA;

        return $this;
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
     * @param string $faceIdA
     *
     * @return $this
     */
    public function setFaceIdA($faceIdA)
    {
        $this->requestParameters['FaceIdA'] = $faceIdA;
        $this->queryParameters['FaceIdA'] = $faceIdA;

        return $this;
    }

    /**
     * @param string $faceIdB
     *
     * @return $this
     */
    public function setFaceIdB($faceIdB)
    {
        $this->requestParameters['FaceIdB'] = $faceIdB;
        $this->queryParameters['FaceIdB'] = $faceIdB;

        return $this;
    }
}
