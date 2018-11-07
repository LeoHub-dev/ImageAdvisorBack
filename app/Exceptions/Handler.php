<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Auth\AuthenticationException;

class Handler extends ExceptionHandler
{
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
        'password',
        'password_confirmation',
    ];

    /**
     * Report or log an exception.
     *
     * @param  \Exception  $exception
     * @return void
     */
    public function report(Exception $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $exception
     * @return \Illuminate\Http\Response
     */
    public function render($request, Exception $e)
    {
        /*if ($exception instanceof HttpException && $exception->getStatusCode() == 403) {
            return redirect('/app/dashboard');
        }*/



        if ($e instanceof \Symfony\Component\HttpKernel\Exception\HttpException) {
            //var_dump("hello");

            $statusCode = $e->getStatusCode();

            if (view()->exists('errors.'.$statusCode)) {
                return response(view('errors.'.$statusCode, [
                    'msg' => $e->getMessage(), 
                    'code' => $statusCode
                ]), $statusCode);
            }
            else
            {
                //return redirect('/app/dashboard');
            }
        }

        return parent::render($request, $e);
    }

    protected function unauthenticated($request, AuthenticationException $exception)
    {
        if ($request->expectsJson()) {
            return response()->error('Unauthenticated.', 401);
        }

        return redirect()->guest(route('login'));
    }

}
