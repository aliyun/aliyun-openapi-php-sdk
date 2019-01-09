<?php

namespace imm\Request\V20170906;

/**
 * Request of DetectQRCodes
 *
 * @method string getSrcUris()
 * @method string getProject()
 */
class DetectQRCodesRequest extends \RpcAcsRequest
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
            'DetectQRCodes',
            'imm'
        );
    }

    /**
     * @param string $srcUris
     *
     * @return $this
     */
    public function setSrcUris($srcUris)
    {
        $this->requestParameters['SrcUris'] = $srcUris;
        $this->queryParameters['SrcUris'] = $srcUris;

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
