<?php
namespace Betfair\Client\Guzzle\Location;

use GuzzleHttp\Command\CommandInterface;
use GuzzleHttp\Command\Guzzle\Parameter;
use GuzzleHttp\Command\Guzzle\ResponseLocation\AbstractLocation;
use GuzzleHttp\Command\Guzzle\ResponseLocation\ResponseLocationInterface;
use GuzzleHttp\Command\ResultInterface;
use Psr\Http\Message\ResponseInterface;

/**
 * Class ResponseLocation
 * Return the entire Response Object
 * @package Betfair\Client\Guzzle\Location
 */
class ResponseLocation extends AbstractLocation implements ResponseLocationInterface
{
    public function __construct($locationName)
    {
        parent::__construct($locationName);
    }

    public function visit(
        ResultInterface $result,
        ResponseInterface $response, 
        Parameter $param
    ) {
        //$response=$result;
        return $result;
        //$result = $response;
    }
}
