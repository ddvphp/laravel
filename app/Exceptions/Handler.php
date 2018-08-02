<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;

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
        // 不使用 自带异常模块
        // parent::report($exception);
        if($exception instanceof \Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException||
            $exception instanceof \Symfony\Component\HttpKernel\Exception\NotFoundHttpException){
            \DdvPhp\DdvRestfulApi::getInstance()->echo404();
        }else{
            if(PHP_SAPI === 'cli' OR defined('STDIN')){
                parent::report($exception);
            }else{
                \DdvPhp\DdvException\Handler::exceptionHandler($exception);
            }
        }
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $exception
     * @return \Illuminate\Http\Response
     */
    public function render($request, Exception $exception)
    {
        return parent::render($request, $exception);
    }
}
