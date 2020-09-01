<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Api\ApiResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/**
 * Class ApiController
 *
 * @package App\Http\Controllers\Api
 *
 * @OA\OpenApi(
 *      @OA\Info(
 *          version="1.0",
 *          title="API Hp Auction",
 *          @OA\Contact(name="MLH Gate"),
 *      ),
 *      @OA\Server(
 *          url="/api",
 *          description="Localhost API server",
 *      ),
 *      security={
 *        {
 *          "apiKey":{}
 *        }
 *      }
 * )
 * @OA\SecurityScheme(
 *      securityScheme="apiKey",
 *      type="apiKey",
 *      in="header",
 *      name="X-API-KEY"
 * )
 */
class ApiController extends Controller
{
    public function __construct(Request $request, ApiResponse $response)
    {
        $this->request = $request;
        $this->response = $response;
    }
}
