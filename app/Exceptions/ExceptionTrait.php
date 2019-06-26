<?php

namespace App\Exceptions;

use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Illuminate\Database\Eloquent\ModelNotFoundException;

trait ExceptionTrait
{
	/**
	 * @param $request
	 * @param $e
	 *
	 * @return \Illuminate\Http\JsonResponse
	 */
	protected function apiException($request,$e)
	{
		if($this->isModel($e))
		{
			return $this->modelResponse($e);
		}

		if($this->isHttp($e))
		{
		    return $this->httpResponse($e);
		}

		return parent::render($request, $exception);

	}

	/**
	 * @param $e
	 *
	 * @return bool
	 */
	protected function isModel($e)
	{
		return $e instanceof ModelNotFoundException;
	}

	/**
	 * @param $e
	 *
	 * @return bool
	 */
	protected function isHttp($e)
	{
		return $e instanceof NotFoundHttpException;
	}


	/**
	 * @param $e
	 *
	 * @return \Illuminate\Http\JsonResponse
	 */
	protected function modelResponse($e)
	{
		return response()->json(['errors'=> 'Product not found'],404);
	}

	/**
	 * @param $e
	 *
	 * @return \Illuminate\Http\JsonResponse
	 */
	protected function httpResponse($e)
	{
		return response()->json(['errors'=> 'Incorect route'],404);

	}
}
