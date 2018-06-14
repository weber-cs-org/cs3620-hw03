<?php
/**
 * HttpResponse.php
 *
 * PHP Version 7
 *
 * @category Source
 * @package  App
 * @author   Don Stringham <donstringham@weber.edu>
 * @license  MIT https://opensource.org/licenses/MIT
 * @link     https://weber.edu
 */
declare(strict_types=1);
namespace App;

/**
 * HttpResponse models the HTTP response data structure
 *
 * @category Source
 * @package  App
 * @author   Don Stringham <donstringham@weber.edu>
 * @license  MIT https://opensource.org/licenses/MIT
 * @link     https://weber.edu
 */
class HttpResponse implements HttpResponseInterface
{

    /**
     * Response status code
     *
     * @var int
     */
    private $_statusCode = 0;

    /**
     * Response status code reason
     *
     * @var string
     */
    private $_statusCodeMsg = '';

    /**
     * ToString returns a string representation of the class
     *
     * @category Source
     * @package  App
     * @author   Don Stringham <donstringham@weber.edu>
     * @license  MIT https://opensource.org/licenses/MIT
     * @link     https://weber.edu
     * @return   string
     */
    public function __toString(): string
    {
        return '/App/HttpResponse';
    }

    /**
     * GetBody returns request/response body
     *
     * @return string
     */
    public function getBody()
    {
        return $this->_body;
    }

    /**
     * SetBody sets request/response body
     *
     * @param string $body Payload body
     *
     * @return void
     */
    public function setBody($body)
    {
        $this->_body = $body;
    }

    /**
     * GetHeaders returns request/response headers
     *
     * @return []
     */
    public function getHeaders()
    {
        return $this->_headers;
    }

    /**
     * SetHeaders sets the request/response headers
     *
     * @param array $headers hash of strings
     *
     * @return void
     */
    public function setHeaders($headers)
    {
        $this->_headers = $headers;
    }

    /**
     * SetHeader sets a request/response header
     *
     * @param string $header Header to set
     * @param string $value  Value of header
     *
     * @return void
     */
    public function setHeader($header, $value)
    {
        $this->_headers[$header] = $value;
    }

    /**
     * GetStatusCodeMsg returns the http status reason.
     *
     * @return string
     */
    public function getStatusCodeMsg(): string
    {
        return $this->_statusCodeMsg;
    }

    /**
     * SetStatusCodeMsg set the http status code.
     *
     * @param string $msg HTTP Status Code message
     *
     * @return void
     */
    public function setStatusCodeMsg($msg)
    {
        $this->_statusCodeMsg = $msg;
    }

    /**
     * GetStatusCode returns the http status code.
     *
     * @return int
     */
    public function getStatusCode(): int
    {
        return $this->_statusCode;
    }

    /**
     * SetStatusCode set the http status code.
     *
     * @param int $statusCode HTTP Status Code
     *
     * @return int
     */
    public function setStatusCode($statusCode)
    {
        $this->_statusCode = $statusCode;
    }
}
