<?php
/**
 * HttpResponseInterface.php
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
 * HttpResponseInterface abstract data type
 *
 * @category Source
 * @package  App
 * @author   Don Stringham <donstringham@weber.edu>
 * @license  MIT https://opensource.org/licenses/MIT
 * @link     https://weber.edu
 */
interface HttpResponseInterface extends HttpInterface
{
    /**
     * GetStatusCodeMsg returns the http status code.
     *
     * @return int
     */
    public function getStatusCodeMsg();

    /**
     * SetStatusCodeMsg set the http status code.
     *
     * @param string $msg HTTP Status Code message
     *
     * @return int
     */
    public function setStatusCodeMsg($msg);

    /**
     * GetStatusCode returns the http status code.
     *
     * @return int
     */
    public function getStatusCode();

    /**
     * SetStatusCode set the http status code.
     *
     * @param int $statusCode HTTP Status Code
     *
     * @return int
     */
    public function setStatusCode($statusCode);
}
