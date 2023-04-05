<?php

namespace TallmanCode\HollywoodBundle\Api;

use Symfony\Component\PropertyInfo\Extractor\PhpDocExtractor;
use Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor;
use Symfony\Component\PropertyInfo\PropertyInfoExtractor;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\NameConverter\CamelCaseToSnakeCaseNameConverter;
use Symfony\Component\Serializer\Normalizer\AbstractNormalizer;
use Symfony\Component\Serializer\Normalizer\AbstractObjectNormalizer;
use Symfony\Component\Serializer\Normalizer\ArrayDenormalizer;
use Symfony\Component\Serializer\Normalizer\DateTimeNormalizer;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface;
use TallmanCode\HollywoodBundle\Manager\HollywoodManagerInterface;
use TallmanCode\HollywoodBundle\Model\Movie;
use TallmanCode\HollywoodBundle\Normalizer\HollywoodDenormalizer;
use TallmanCode\HollywoodBundle\Normalizer\HollywoodNormalizer;
use TallmanCode\HollywoodBundle\Response\PaginatedResponse;

class AbstractHollywoodApi
{
    private HollywoodManagerInterface $manager;

    protected ?string $model;

    public function __construct(HollywoodManagerInterface $manager)
    {
        $this->manager = $manager;
    }

    protected function get(string $path, ?string $model = null, ?callable $modelCallBack = null)
    {
        $response = $this->sendRequest($path, 'GET', $modelCallBack);
        $encoder = [new JsonEncoder()];
        $extractor = new PropertyInfoExtractor([], [new PhpDocExtractor(), new ReflectionExtractor()]);
        $normalizer = [new ArrayDenormalizer(), new DateTimeNormalizer() , new ObjectNormalizer(null, new CamelCaseToSnakeCaseNameConverter(), null, $extractor)];
        $serializer = new Serializer($normalizer, $encoder);
        $responseArray = $response->toArray();

        if (isset($responseArray['page'])) {
            return $this->paginatedResponse($serializer, $responseArray, $response, $model, $modelCallBack);
        }

        return $this->modelResponse($serializer, $responseArray, $model, $modelCallBack);
    }

    protected function post()
    {
        return null;
    }

    protected function delete()
    {
        return null;
    }

    /**
     * @throws TransportExceptionInterface
     */
    private function sendRequest($path, $method)
    {
        $client = $this->manager->getClient();
        return $client->send($path, $method);
    }

    protected function paginatedResponse($serializer, $responseArray, $response, ?string $model = null, ?callable $modelCallBack = null)
    {
        if(!$model){
            if (null !== $modelCallBack) {
                $model = $modelCallBack($responseArray, $response);
            }
        }

        $results = $serializer->deserialize(json_encode($responseArray['results']), $model . '[]', 'json');
        $paginatedResponse = new PaginatedResponse();
        $paginatedResponse->setResults($results);

        return $serializer->deserialize($response->getContent(), PaginatedResponse::class, 'json', [AbstractNormalizer::OBJECT_TO_POPULATE => $paginatedResponse, AbstractNormalizer::IGNORED_ATTRIBUTES => ['results']]);
    }

    protected function modelResponse($serializer, $responseArray, ?string $model = null, ?callable $modelCallBack = null)
    {
        if(!$model){
            if (null !== $modelCallBack) {
                $model = $modelCallBack($responseArray, null);
            }
        }

        return $serializer->deserialize(json_encode($responseArray), $model, 'json', [AbstractNormalizer::IGNORED_ATTRIBUTES => ['_id']]);
    }
}