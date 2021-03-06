<?php
/**
 * @author Artem Naumenko
 *
 * Atlassian BitBucket can't send more then 1mb json response, and send just first 1mb of data. At this case
 * we receive error "cURL error 56: Problem (3) in the Chunked-Encoded data", and they will be translated to
 * this exeption
 */
namespace PhpCsBitBucket\Exception;

use \GuzzleHttp\Exception\RequestException;

class BitBucketJsonFailure extends RequestException
{

}
