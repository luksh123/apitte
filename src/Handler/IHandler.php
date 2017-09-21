<?php

namespace Apitte\Core\Handler;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

interface IHandler
{

	/**
	 * @param ServerRequestInterface $request
	 * @param ResponseInterface $response
	 * @return ResponseInterface
	 */
	public function handle(ServerRequestInterface $request, ResponseInterface $response);

}
