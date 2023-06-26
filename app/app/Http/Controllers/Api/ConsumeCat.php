<?php declare(strict_types=1);
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Http;

class ConsumeCat extends Controller
{
    //
    public function randomImage( string $random = 'https://cataas.com/c?width=350' ): Response
    {
        try {
            return Http::get( $random );
        } catch (\Exception $e) {
            //  log exception
            $responseMessage = new \GuzzleHttp\Psr7\Response( 202 );
            return new Response( $responseMessage );
        }
    }

    /**
     * @param string $random
     * @return Response
     */
    public function randomFact( string $random = 'https://catfact.ninja/fact' ): Response
    {

        try {
            return Http::get( $random );
        } catch (\Exception $e) {
            //  log exception
            $responseMessage = new \GuzzleHttp\Psr7\Response( 202 );
            return new Response( $responseMessage );
        }
    }

    public function breeds( string $breed = 'https://catfact.ninja/breeds' ): Response
    {
        try {
            return Http::get( $breed );
        } catch (\Exception $e) {
            //  log exception
            $responseMessage = new \GuzzleHttp\Psr7\Response( 202 );
            return new Response( $responseMessage );
        }
    }
}
