<?php


namespace app\modules\websocket\controllers;


use Amp\Http\Server\Request;
use Amp\Http\Server\Response;
use Amp\Promise;
use Amp\Success;
use Amp\Websocket\Client;
use Amp\Websocket\Message;
use Amp\Websocket\Server\ClientHandler;
use Amp\Websocket\Server\Endpoint;
use function Amp\call;
use app\models\Telemetry;

/**
 * Class WsHandler
 * @package app\modules\websocket\controllers
 */
class WsHandler implements ClientHandler
{

    private const ALLOWED_ORIGINS = [
        'http://localhost:1337',
        'http://localhost:8500',
        'http://0.0.0.0:1337',
    ];

    public function handleHandshake(Endpoint $endpoint, Request $request, Response $response): Promise
    {
        if (!\in_array($request->getHeader('origin'), self::ALLOWED_ORIGINS, true)) {
            echo $request->getHeader('origin');
            return $endpoint->getErrorHandler()->handleError(403);
        }

        return new Success($response);
    }

    /**
     * Обработка запросов на websocket
     * @return Promise
     */
    public function handleClient(Endpoint $endpoint, Client $client, Request $request, Response $response): Promise
    {
        return call(function () use ($endpoint, $client): \Generator {
            while ($message = yield $client->receive()) {
                assert($message instanceof Message);
                $telemetry = new Telemetry();
                $telemetry->id = null;
                $telemetry->data = yield $message->buffer();
                $telemetry->save(false);
            }
        });
    }
}