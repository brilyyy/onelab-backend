<?php

namespace App\Exceptions;

use App\Traits\ApiResponser;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Exception;
use BadMethodCallException;
use ErrorException;
use Illuminate\Validation\ValidationException;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Illuminate\Database\QueryException;

class Handler extends ExceptionHandler
{
    use ApiResponser;
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
        $this->renderable(function (Exception $e, $req) {
            if ($e instanceof NotFoundHttpException) {
                return $this->fail('The specified URL cannot be found', 404);
            }

            if ($e instanceof MethodNotAllowedException) {
                return  $this->fail('The specified method for the request is invalid', 405);
            }

            if ($e instanceof HttpException) {
                return $this->fail($e->getMessage(), $e->getStatusCode());
            }

            if ($e instanceof BadMethodCallException) {
                return $this->fail($e->getMessage(), 500);
            }
            if ($e instanceof ErrorException) {
                return $this->fail($e->getMessage(), 500);
            }
            if ($e instanceof RouteNotFoundException) {
                return $this->fail($e->getMessage(), 500);
            }
            if ($e instanceof QueryException) {
                return $this->fail($e->getMessage(), 500);
            }
            if ($e instanceof ValidationException) {
                return $this->fail($e->getMessage(), 500);
            }
        });
    }
}
