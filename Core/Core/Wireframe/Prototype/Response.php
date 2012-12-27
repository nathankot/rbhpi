<?php
/**
 * @version 0.1.0
 */

namespace Core\Wireframe\Prototype;

/**
 * The response object takes a route and provides the means for responding to it.
 */
interface Response
{
	public function init(\Core\Prototype\Route $route);
	public function setFormat($format);
	public function setStatus($status);
	public function addHeader($header);
	public function getResult();
}
