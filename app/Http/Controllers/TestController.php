<?php

namespace App\Http\Controllers;

class TestController extends Controller
{

    /**
     * @OA\Get(
     * path="/test",
     * summary="get test",
     * description="get test",
     * operationId="showTest",
     * tags={"test"},
     * @OA\Response(
     *    response=200,
     *    description="descrition list"
     *     ),
     * @OA\Response(
     *          response="default",
     *          description="An error has occurred."
     *      )
     * )
     */
    public function index()
    {
        return response()->json([
            'invite'  =>"test",
        ]);

    }

}
