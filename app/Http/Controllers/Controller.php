<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
/**
     *  @OA\Get(
     *      path="ROUTE API",
     *      summary="Title",
     *      security={{"bearer_token":{}}},
     *
     *      @OA\Response(
     *          response=200,
     *          description="Donec sollicitudin molestie malesuada."
     *      ),
     *      @OA\Response(
     *          response="default",
     *          description="An error has occurred."
     *      )
     *  )
     */
 /** @OA\Info(
 *      version="1.0.0",
 *      title="PayCard documentation",
 *      description="Implementation de swagger en laravel pour paycard",
 * ),
 *
 * * @OA\SecurityScheme(
 *      type="http",
 *      description="Authentication Bearer Token",
 *      name="Authentication Bearer Token",
 *      in="header",
 *      scheme="bearer",
 *      bearerFormat="JWT",
 *      securityScheme="apiAuth",
*)
*/



class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
