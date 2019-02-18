<?php

namespace Edas\Request\V20170801;

/**
 * Request of GetPackageStorageCredential
 *
 */
class GetPackageStorageCredentialRequest extends \RoaAcsRequest
{

    /**
     * @var string
     */
    protected $uriPattern = '/pop/v5/package_storage_credential';

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'Edas',
            '2017-08-01',
            'GetPackageStorageCredential'
        );
    }
}
