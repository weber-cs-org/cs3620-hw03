<?php
/**
 * HttpRequest.php
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
 * HttpRequest models the HTTP request data structure
 *
 * @category Source
 * @package  App
 * @author   Don Stringham <donstringham@weber.edu>
 * @license  MIT https://opensource.org/licenses/MIT
 * @link     https://weber.edu
 */
class HttpRequest implements HttpRequestInterface
{
    /**
     * Allow an HTTP redirect
     *
     * @var bool
     */
    private $_allow_redirect = true;

    /**
     * Request body
     *
     * @var string
     */
    private $_body = '';

    /**
     * Request headers
     *
     * @var array
     */
    private $_headers = [];

    /**
     * Request host IP
     *
     * @var string
     */
    private $_hostip = '';

    /**
     * Request HTTP method
     *
     * @var string
     */
    private $_method = 'GET';

    /**
     * Request port, for HTTP should be 80
     *
     * @var string
     */
    private $_port = 80;

    /**
     * Request HTTP url
     *
     * @var string
     */
    private $_url = '';

    /**
     * Request url information
     *
     * @var array
     */
    private $_url_info = [];

    /**
     * Construct
     *
     * @param string $url    Web address
     * @param string $method HTTP request method
     *
     * @category Source
     * @package  App
     * @author   Don Stringham <donstringham@weber.edu>
     * @license  MIT https://opensource.org/licenses/MIT
     * @link     https://weber.edu
     * @return   void
     */
    public function __construct($url, $method = 'GET')
    {
        $this->setUrl($url);
        $this->setMethod($method);
    }

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
        return '/App/HttpRequest';
    }

    /**
     * GetMethod returns the request method, ie. GET, POST, etc...
     *
     * @return string
     */
    public function getMethod()
    {
        return $this->_method;
    }

    /**
     * SetMethod sets the request method, ie. GET, POST, etc...
     *
     * @param string $method HTTP method
     *
     * @return void
     */
    public function setMethod($method)
    {
        $this->_method = $method;
    }

    /**
     * Send issues the HTTP request
     *
     * @return /App/HttpResponse
     */
    public function send(): HttpResponse
    {
        // TODO Implement method
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
     * GetUrl returns the request's url.
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->_url;
    }

    /**
     * SetUrl sets the request's url.
     *
     * @param string $url HTTP request url
     *
     * @return void
     */
    public function setUrl($url)
    {
        // TODO Implement missing part of the method.

        $this->_headers['Host'] = $this->_hostname;
        $this->_headers['Connection'] = 'close';
    }

    /**
     * ToString turns the request into a string.
     *
     * @return string
     */
    protected function toString(): string
    {
        // TODO Implement missing part of the method.

        return urlencode($this->_request);
    }

    /**
     * ReadLine reads a line from a file pointer
     *
     * @param string $fp file pointer
     *
     * @return string
     */
    protected function readLine($fp): string
    {
        return $line;
    }
}
