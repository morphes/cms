<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'serializer' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/serializer/SerializerInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/serializer/Normalizer/NormalizerInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/serializer/Normalizer/ContextAwareNormalizerInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/serializer/Normalizer/DenormalizerInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/serializer/Normalizer/ContextAwareDenormalizerInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/serializer/Encoder/EncoderInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/serializer/Encoder/ContextAwareEncoderInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/serializer/Encoder/DecoderInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/serializer/Encoder/ContextAwareDecoderInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/serializer/Serializer.php';
include_once $this->targetDirs[3].'/vendor/symfony/serializer/SerializerAwareInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/serializer/Normalizer/CacheableSupportsMethodInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/serializer/Normalizer/ObjectToPopulateTrait.php';
include_once $this->targetDirs[3].'/vendor/symfony/serializer/SerializerAwareTrait.php';
include_once $this->targetDirs[3].'/vendor/symfony/serializer/Normalizer/AbstractNormalizer.php';
include_once $this->targetDirs[3].'/vendor/symfony/serializer/Normalizer/JsonSerializableNormalizer.php';
include_once $this->targetDirs[3].'/vendor/symfony/serializer/Normalizer/DateTimeNormalizer.php';
include_once $this->targetDirs[3].'/vendor/symfony/serializer/Normalizer/ConstraintViolationListNormalizer.php';
include_once $this->targetDirs[3].'/vendor/symfony/serializer/Normalizer/DateIntervalNormalizer.php';
include_once $this->targetDirs[3].'/vendor/symfony/serializer/Normalizer/DataUriNormalizer.php';
include_once $this->targetDirs[3].'/vendor/symfony/serializer/Normalizer/ArrayDenormalizer.php';
include_once $this->targetDirs[3].'/vendor/symfony/serializer/Normalizer/AbstractObjectNormalizer.php';
include_once $this->targetDirs[3].'/vendor/symfony/serializer/Normalizer/ObjectNormalizer.php';
include_once $this->targetDirs[3].'/vendor/symfony/property-info/PropertyTypeExtractorInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/property-info/PropertyDescriptionExtractorInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/property-info/PropertyAccessExtractorInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/property-info/PropertyListExtractorInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/property-info/PropertyInfoExtractorInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/property-info/PropertyInfoExtractor.php';
include_once $this->targetDirs[3].'/vendor/symfony/serializer/Mapping/ClassDiscriminatorResolverInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/serializer/Mapping/ClassDiscriminatorFromClassMetadata.php';
include_once $this->targetDirs[3].'/vendor/symfony/serializer/Encoder/NormalizationAwareInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/serializer/Encoder/XmlEncoder.php';
include_once $this->targetDirs[3].'/vendor/symfony/serializer/Encoder/JsonEncoder.php';
include_once $this->targetDirs[3].'/vendor/symfony/serializer/Encoder/YamlEncoder.php';
include_once $this->targetDirs[3].'/vendor/symfony/serializer/Encoder/CsvEncoder.php';

$a = ($this->privates['serializer.mapping.class_metadata_factory'] ?? $this->load('getSerializer_Mapping_ClassMetadataFactoryService.php'));

return $this->services['serializer'] = new \Symfony\Component\Serializer\Serializer([0 => new \Symfony\Component\Serializer\Normalizer\JsonSerializableNormalizer(), 1 => new \Symfony\Component\Serializer\Normalizer\DateTimeNormalizer(), 2 => new \Symfony\Component\Serializer\Normalizer\ConstraintViolationListNormalizer(), 3 => new \Symfony\Component\Serializer\Normalizer\DateIntervalNormalizer(), 4 => new \Symfony\Component\Serializer\Normalizer\DataUriNormalizer(), 5 => new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), 6 => new \Symfony\Component\Serializer\Normalizer\ObjectNormalizer($a, NULL, ($this->services['easy_admin.property_accessor'] ?? $this->getEasyAdmin_PropertyAccessorService()), new \Symfony\Component\PropertyInfo\PropertyInfoExtractor(new RewindableGenerator(function () {
    yield 0 => ($this->privates['property_info.serializer_extractor'] ?? $this->load('getPropertyInfo_SerializerExtractorService.php'));
    yield 1 => ($this->privates['property_info.reflection_extractor'] ?? ($this->privates['property_info.reflection_extractor'] = new \Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor()));
    yield 2 => ($this->privates['doctrine.orm.default_entity_manager.property_info_extractor'] ?? $this->load('getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService.php'));
    yield 3 => ($this->privates['doctrine.orm.lp_perl_entity_manager.property_info_extractor'] ?? $this->load('getDoctrine_Orm_LpPerlEntityManager_PropertyInfoExtractorService.php'));
}, 4), new RewindableGenerator(function () {
    yield 0 => ($this->privates['doctrine.orm.default_entity_manager.property_info_extractor'] ?? $this->load('getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService.php'));
    yield 1 => ($this->privates['doctrine.orm.lp_perl_entity_manager.property_info_extractor'] ?? $this->load('getDoctrine_Orm_LpPerlEntityManager_PropertyInfoExtractorService.php'));
    yield 2 => ($this->privates['property_info.php_doc_extractor'] ?? ($this->privates['property_info.php_doc_extractor'] = new \Symfony\Component\PropertyInfo\Extractor\PhpDocExtractor()));
    yield 3 => ($this->privates['property_info.reflection_extractor'] ?? ($this->privates['property_info.reflection_extractor'] = new \Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor()));
}, 4), new RewindableGenerator(function () {
    yield 0 => ($this->privates['property_info.php_doc_extractor'] ?? ($this->privates['property_info.php_doc_extractor'] = new \Symfony\Component\PropertyInfo\Extractor\PhpDocExtractor()));
}, 1), new RewindableGenerator(function () {
    yield 0 => ($this->privates['property_info.reflection_extractor'] ?? ($this->privates['property_info.reflection_extractor'] = new \Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor()));
}, 1)), new \Symfony\Component\Serializer\Mapping\ClassDiscriminatorFromClassMetadata($a))], [0 => new \Symfony\Component\Serializer\Encoder\XmlEncoder(), 1 => new \Symfony\Component\Serializer\Encoder\JsonEncoder(), 2 => new \Symfony\Component\Serializer\Encoder\YamlEncoder(), 3 => new \Symfony\Component\Serializer\Encoder\CsvEncoder()]);
