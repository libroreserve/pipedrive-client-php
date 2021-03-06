<?php
/*
 * Pipedrive
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace Pipedrive\Exceptions;

use Pipedrive\APIException;
use Pipedrive\APIHelper;

/**
 * OAuth 2 Authorization endpoint exception
 */
class OAuthProviderException extends APIException
{
    /**
     * Error code
     * @required
     * @var string $error public property
     */
    public $error;

    /**
     * Human-readable text providing additional information on error.
     * Used to assist the client developer in understanding the error that occurred.
     * @maps error_description
     * @var string|null $errorDescription public property
     */
    public $errorDescription;

    /**
     * A URI identifying a human-readable web page with information about the error, used to provide the
     * client developer with additional information about the error
     * @maps error_uri
     * @var string|null $errorUri public property
     */
    public $errorUri;

    /**
     * Constructor to set initial or default values of member properties
     */
    public function __construct($reason, $context)
    {
        parent::__construct($reason, $context);
    }

    /**
     * Unbox response into this exception class
     */
    public function unbox()
    {
        APIHelper::deserialize(self::getResponseBody(), $this, false, false);
    }
}
