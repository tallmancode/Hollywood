<?php

namespace TallmanCode\HollywoodBundle\Api;

use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\AbstractNormalizer;
use Symfony\Component\Serializer\Normalizer\ArrayDenormalizer;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use TallmanCode\HollywoodBundle\Manager\HollywoodManagerInterface;
use TallmanCode\HollywoodBundle\Response\PaginatedResponse;

class AbstractHollywoodApi
{
    private HollywoodManagerInterface $manager;

    protected ?string $model;

    public function __construct(HollywoodManagerInterface $manager, ?string $model = null)
    {
        $this->manager = $manager;
        $this->model = $model;
    }

    protected function get(string $path, ?callable $modelCallBack = null)
    {
        $response =  $this->sendRequest($path, 'GET', $modelCallBack);
        $normalizers = [new ObjectNormalizer(), new ArrayDenormalizer()];
        $serializer = new Serializer($normalizers, [new JsonEncoder()]);
        $responseArray = $response->toArray();

        if (isset($responseArray['page'])) {
            return $this->paginatedResponse($serializer, $responseArray, $response, $modelCallBack);
        }

        return $this->modelResponse($serializer, $responseArray, $modelCallBack);
    }

    /**
     * @throws \Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface
     */
    private function sendRequest($path, $method, ?callable $modelCallBack = null)
    {
        $client = $this->manager->getClient();
        return $client->send($path, $method);
    }

    protected function paginatedResponse($serializer, $responseArray, $response, ?callable $modelCallBack = null)
    {
        if (null !== $modelCallBack) {
            $model = $modelCallBack($responseArray, $response);
        } elseif (null !== $this->model) {
            $model = $this->model;
        } else {
            // TODO Throw model not found error
        }

        $results = $serializer->deserialize(json_encode($responseArray['results']), $model.'[]', 'json');
        $paginatedResponse = new PaginatedResponse();
        $paginatedResponse->setResults($results);

        return $serializer->deserialize($response->getContent(), PaginatedResponse::class, 'json', [AbstractNormalizer::OBJECT_TO_POPULATE => $paginatedResponse, AbstractNormalizer::IGNORED_ATTRIBUTES => ['results']]);
    }

    protected function modelResponse($serializer, $responseArray, ?callable $modelCallBack = null)
    {
        if (null !== $modelCallBack) {
            $model = $modelCallBack($responseArray, null);
        } elseif (null !== $this->model) {
            $model = $this->model;
        } else {
            // TODO Throw model not found error
        }

        return $serializer->deserialize(json_encode($responseArray), $model ?? $this->model, 'json');
    }
}