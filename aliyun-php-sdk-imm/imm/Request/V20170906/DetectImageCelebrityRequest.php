<?php

namespace imm\Request\V20170906;

/**
 * Request of DetectImageCelebrity
 *
 * @method string getImageUri()
 * @method string getLibrary()
 * @method string getProject()
 */
class DetectImageCelebrityRequest extends \RpcAcsRequest
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
            'DetectImageCelebrity',
            'imm'
        );
    }

    /**
     * @param string $imageUri
     *
     * @return $this
     */
    public function setImageUri($imageUri)
    {
        $this->requestParameters['ImageUri'] = $imageUri;
        $this->queryParameters['ImageUri'] = $imageUri;

        return $this;
    }

    /**
     * @param string $library
     *
     * @return $this
     */
    public function setLibrary($library)
    {
        $this->requestParameters['Library'] = $library;
        $this->queryParameters['Library'] = $library;

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
}
