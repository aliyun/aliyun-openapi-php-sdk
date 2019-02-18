<?php

namespace Edas\Request\V20170801;

/**
 * Request of ListBuildPack
 *
 */
class ListBuildPackRequest extends \RoaAcsRequest
{

    /**
     * @var string
     */
    protected $uriPattern = '/pop/v5/app/build_pack_list';

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
            'ListBuildPack'
        );
    }
}
