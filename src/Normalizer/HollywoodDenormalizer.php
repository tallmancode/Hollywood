<?php

namespace TallmanCode\HollywoodBundle\Normalizer;

use Symfony\Component\Serializer\Exception\BadMethodCallException;
use Symfony\Component\Serializer\Exception\CircularReferenceException;
use Symfony\Component\Serializer\Exception\ExceptionInterface;
use Symfony\Component\Serializer\Exception\ExtraAttributesException;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Exception\LogicException;
use Symfony\Component\Serializer\Exception\RuntimeException;
use Symfony\Component\Serializer\Exception\UnexpectedValueException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use TallmanCode\HollywoodBundle\Model\HollywoodModelInterface;

class HollywoodDenormalizer implements DenormalizerInterface
{

    public function denormalize(mixed $data, string $type, string $format = null, array $context = [])
    {
        $class = new $type;

        if(!empty($data)){
            foreach($data as $key => $value){
                if(!null){

                }

            }
        }
        dd($data);
    }

    public function supportsDenormalization(mixed $data, string $type, string $format = null)
    {
        $class = new \ReflectionClass($type);
        return $class->implementsInterface(HollywoodModelInterface::class);
    }
}