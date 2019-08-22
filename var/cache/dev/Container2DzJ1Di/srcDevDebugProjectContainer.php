<?php

namespace Container2DzJ1Di;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;

/**
 * This class has been auto-generated
 * by the Symfony Dependency Injection Component.
 *
 * @final since Symfony 3.3
 */
class srcDevDebugProjectContainer extends Container
{
    private $buildParameters;
    private $containerDir;
    private $parameters;
    private $targetDirs = [];

    /**
     * @internal but protected for BC on cache:clear
     */
    protected $privates = [];

    public function __construct(array $buildParameters = [], $containerDir = __DIR__)
    {
        $dir = $this->targetDirs[0] = \dirname($containerDir);
        for ($i = 1; $i <= 4; ++$i) {
            $this->targetDirs[$i] = $dir = \dirname($dir);
        }
        $this->buildParameters = $buildParameters;
        $this->containerDir = $containerDir;
        $this->parameters = $this->getDefaultParameters();

        $this->services = $this->privates = [];
        $this->syntheticIds = [
            'kernel' => true,
        ];
        $this->methodMap = [
            'App\\Service\\Twig\\Basket' => 'getBasketService',
            'cache.app' => 'getCache_AppService',
            'cache.system' => 'getCache_SystemService',
            'data_collector.dump' => 'getDataCollector_DumpService',
            'doctrine' => 'getDoctrineService',
            'doctrine.dbal.default_connection' => 'getDoctrine_Dbal_DefaultConnectionService',
            'doctrine.orm.default_entity_manager' => 'getDoctrine_Orm_DefaultEntityManagerService',
            'doctrine_cache.providers.doctrine.orm.default_metadata_cache' => 'getDoctrineCache_Providers_Doctrine_Orm_DefaultMetadataCacheService',
            'doctrine_cache.providers.doctrine.orm.default_query_cache' => 'getDoctrineCache_Providers_Doctrine_Orm_DefaultQueryCacheService',
            'doctrine_cache.providers.doctrine.orm.default_result_cache' => 'getDoctrineCache_Providers_Doctrine_Orm_DefaultResultCacheService',
            'easy_admin.property_accessor' => 'getEasyAdmin_PropertyAccessorService',
            'easyadmin.cache.manager' => 'getEasyadmin_Cache_ManagerService',
            'easyadmin.config.manager' => 'getEasyadmin_Config_ManagerService',
            'easyadmin.listener.controller' => 'getEasyadmin_Listener_ControllerService',
            'easyadmin.router' => 'getEasyadmin_RouterService',
            'event_dispatcher' => 'getEventDispatcherService',
            'http_kernel' => 'getHttpKernelService',
            'overblog_graphql.cache_compiler' => 'getOverblogGraphql_CacheCompilerService',
            'overblog_graphql.event_listener.classloader_listener' => 'getOverblogGraphql_EventListener_ClassloaderListenerService',
            'profiler' => 'getProfilerService',
            'request_stack' => 'getRequestStackService',
            'router' => 'getRouterService',
            'security.authorization_checker' => 'getSecurity_AuthorizationCheckerService',
            'security.token_storage' => 'getSecurity_TokenStorageService',
            'translator' => 'getTranslatorService',
            'twig' => 'getTwigService',
            'validator' => 'getValidatorService',
            'var_dumper.cloner' => 'getVarDumper_ClonerService',
            'vich_uploader.templating.helper.uploader_helper' => 'getVichUploader_Templating_Helper_UploaderHelperService',
            'vich_uploader.upload_handler' => 'getVichUploader_UploadHandlerService',
        ];
        $this->fileMap = [
            'App\\Controller\\AdminController' => 'getAdminControllerService.php',
            'App\\Controller\\Admin\\ConfigurationController' => 'getConfigurationControllerService.php',
            'App\\Controller\\Admin\\ImportProductController' => 'getImportProductControllerService.php',
            'App\\Controller\\Admin\\ItemsController' => 'getItemsControllerService.php',
            'App\\Controller\\Admin\\OrderController' => 'getOrderControllerService.php',
            'App\\Controller\\Admin\\ProductController' => 'getProductControllerService.php',
            'App\\Controller\\Admin\\ProductTagController' => 'getProductTagControllerService.php',
            'App\\Controller\\RootController' => 'getRootControllerService.php',
            'App\\Controller\\SecurityController'          => 'getSecurityControllerService.php',
            'App\\GraphQL\\Mutation\\AuthMutation'         => 'getAuthMutationService.php',
            'App\\GraphQL\\Mutation\\BasketMutation'       => 'getBasketMutationService.php',
            'App\\GraphQL\\Mutation\\OrderMutation'        => 'getOrderMutationService.php',
            'App\\GraphQL\\Mutation\\UserMutation'           => 'getUserMutationService.php',
            'App\\GraphQL\\Resolver\\AddressField'           => 'getAddressFieldService.php',
            'App\\GraphQL\\Resolver\\AddressesResolver'      => 'getAddressResolverService.php',
            'App\\GraphQL\\Resolver\\AuthAlias'              => 'getAuthAliasService.php',
            'App\\GraphQL\\Resolver\\BannerResolver'         => 'getBannerResolverService.php',
            'App\\GraphQL\\Resolver\\BasketResolver'         => 'getBasketResolverService.php',
            'App\\GraphQL\\Resolver\\CatalogsResolver'       => 'getCatalogResolverService.php',
            'App\\GraphQL\\Resolver\\ProductFieldResolver'   => 'getProductFieldResolverService.php',
            'App\\GraphQL\\Resolver\\ProductItemResolver'    => 'getProductItemResolverService.php',
            'App\\GraphQL\\Resolver\\ProductResolver'        => 'getProductResolverService.php',
            'App\\GraphQL\\Resolver\\ProductsFieldsResolver' => 'getProductsFieldsResolverService.php',
            'App\\GraphQL\\Resolver\\SalesResolver'          => 'getSalesResolverService.php',
            'App\\GraphQL\\Resolver\\UserResolver' => 'getUserResolverService.php',
            'App\\GraphQL\\Resolver\\UsersOrdersResolver' => 'getUsersOrdersResolverService.php',
            'App\\GraphQL\\Type\\DateTimeType' => 'getDateTimeTypeService.php',
            'App\\Lp\\BasketBundle\\Controller\\BasketController' => 'getBasketControllerService.php',
            'App\\Lp\\CatalogBundle\\Controller\\CatalogController' => 'getCatalogControllerService.php',
            'App\\Lp\\CatalogBundle\\Controller\\ProductController' => 'getProductController2Service.php',
            'App\\Lp\\CmsBundle\\Controller\\CmsController' => 'getCmsControllerService.php',
            'App\\Lp\\Framework\\LpController' => 'getLpControllerService.php',
            'App\\Lp\\ProfileBundle\\Controller\\ProfileController' => 'getProfileControllerService.php',
            'App\\Lp\\UrlsBundle\\Controller\\UrlController' => 'getUrlControllerService.php',
            'App\\Service\\BasketService' => 'getBasketServiceService.php',
            'App\\Service\\BeguService' => 'getBeguServiceService.php',
            'App\\Service\\ConfigService' => 'getConfigServiceService.php',
            'App\\Service\\DoctrineService' => 'getDoctrineServiceService.php',
            'App\\Service\\ImportParser' => 'getImportParserService.php',
            'App\\Service\\Import\\Importer' => 'getImporterService.php',
            'App\\Service\\LpService' => 'getLpServiceService.php',
            'App\\Service\\Manager\\TagManager' => 'getTagManagerService.php',
            'App\\Service\\OrderService' => 'getOrderServiceService.php',
            'App\\Service\\TagService' => 'getTagServiceService.php',
            'App\\Service\\UrlParseService' => 'getUrlParseServiceService.php',
            'Overblog\\GraphQLBundle\\EventListener\\ErrorHandlerListener' => 'getErrorHandlerListenerService.php',
            'Overblog\\GraphQLBundle\\EventListener\\ErrorLoggerListener' => 'getErrorLoggerListenerService.php',
            'Overblog\\GraphQLBundle\\EventListener\\RequestFilesListener' => 'getRequestFilesListenerService.php',
            'Overblog\\GraphQLBundle\\GraphQL\\Relay\\Mutation\\MutationFieldResolver' => 'getMutationFieldResolverService.php',
            'Overblog\\GraphQLBundle\\GraphQL\\Relay\\Node\\GlobalIdFieldResolver' => 'getGlobalIdFieldResolverService.php',
            'Overblog\\GraphQLBundle\\GraphQL\\Relay\\Node\\NodeFieldResolver' => 'getNodeFieldResolverService.php',
            'Overblog\\GraphQLBundle\\GraphQL\\Relay\\Node\\PluralIdentifyingRootFieldResolver' => 'getPluralIdentifyingRootFieldResolverService.php',
            'Overblog\\GraphQLBundle\\__DEFINITIONS__\\AddBasketInputType' => 'getAddBasketInputTypeService.php',
            'Overblog\\GraphQLBundle\\__DEFINITIONS__\\AddressConnectionType' => 'getAddressConnectionTypeService.php',
            'Overblog\\GraphQLBundle\\__DEFINITIONS__\\AddressEdgeType' => 'getAddressEdgeTypeService.php',
            'Overblog\\GraphQLBundle\\__DEFINITIONS__\\AddressType' => 'getAddressTypeService.php',
            'Overblog\\GraphQLBundle\\__DEFINITIONS__\\AddressesType' => 'getAddressesTypeService.php',
            'Overblog\\GraphQLBundle\\__DEFINITIONS__\\AuthorizedUserType' => 'getAuthorizedUserTypeService.php',
            'Overblog\\GraphQLBundle\\__DEFINITIONS__\\BannerItemType' => 'getBannerItemTypeService.php',
            'Overblog\\GraphQLBundle\\__DEFINITIONS__\\BannerType' => 'getBannerTypeService.php',
            'Overblog\\GraphQLBundle\\__DEFINITIONS__\\BasketProductType' => 'getBasketProductTypeService.php',
            'Overblog\\GraphQLBundle\\__DEFINITIONS__\\BasketType' => 'getBasketTypeService.php',
            'Overblog\\GraphQLBundle\\__DEFINITIONS__\\CatalogFilterItemType' => 'getCatalogFilterItemTypeService.php',
            'Overblog\\GraphQLBundle\\__DEFINITIONS__\\CatalogFiltersType' => 'getCatalogFiltersTypeService.php',
            'Overblog\\GraphQLBundle\\__DEFINITIONS__\\CatalogType' => 'getCatalogTypeService.php',
            'Overblog\\GraphQLBundle\\__DEFINITIONS__\\DateTimeType' => 'getDateTimeType2Service.php',
            'Overblog\\GraphQLBundle\\__DEFINITIONS__\\ItemConnectionType' => 'getItemConnectionTypeService.php',
            'Overblog\\GraphQLBundle\\__DEFINITIONS__\\ItemEdgeType' => 'getItemEdgeTypeService.php',
            'Overblog\\GraphQLBundle\\__DEFINITIONS__\\MutationType' => 'getMutationTypeService.php',
            'Overblog\\GraphQLBundle\\__DEFINITIONS__\\OrderItemType' => 'getOrderItemTypeService.php',
            'Overblog\\GraphQLBundle\\__DEFINITIONS__\\OrderType' => 'getOrderTypeService.php',
            'Overblog\\GraphQLBundle\\__DEFINITIONS__\\PageInfoType' => 'getPageInfoTypeService.php',
            'Overblog\\GraphQLBundle\\__DEFINITIONS__\\ProductConnectionType' => 'getProductConnectionTypeService.php',
            'Overblog\\GraphQLBundle\\__DEFINITIONS__\\ProductEdgeType' => 'getProductEdgeTypeService.php',
            'Overblog\\GraphQLBundle\\__DEFINITIONS__\\ProductFiltersType' => 'getProductFiltersTypeService.php',
            'Overblog\\GraphQLBundle\\__DEFINITIONS__\\ProductItemType' => 'getProductItemTypeService.php',
            'Overblog\\GraphQLBundle\\__DEFINITIONS__\\ProductType' => 'getProductTypeService.php',
            'Overblog\\GraphQLBundle\\__DEFINITIONS__\\QueryType' => 'getQueryTypeService.php',
            'Overblog\\GraphQLBundle\\__DEFINITIONS__\\SaleItemType' => 'getSaleItemTypeService.php',
            'Overblog\\GraphQLBundle\\__DEFINITIONS__\\SaleType' => 'getSaleTypeService.php',
            'Overblog\\GraphQLBundle\\__DEFINITIONS__\\UpdateBasketInputType' => 'getUpdateBasketInputTypeService.php',
            'Overblog\\GraphQLBundle\\__DEFINITIONS__\\UserInputType' => 'getUserInputTypeService.php',
            'Overblog\\GraphQLBundle\\__DEFINITIONS__\\UserOrderType' => 'getUserOrderTypeService.php',
            'Overblog\\GraphQLBundle\\__DEFINITIONS__\\UserType' => 'getUserTypeService.php',
            'Overblog\\GraphQLBundle\\__DEFINITIONS__\\UsersOrdersType' => 'getUsersOrdersTypeService.php',
            'Overblog\\GraphQLBundle\\__DEFINITIONS__\\createOrderInputType' => 'getCreateOrderInputTypeService.php',
            'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController' => 'getRedirectControllerService.php',
            'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController' => 'getTemplateControllerService.php',
            'Vich\\UploaderBundle\\Naming\\Base64Namer' => 'getBase64NamerService.php',
            'Vich\\UploaderBundle\\Naming\\CurrentDateTimeDirectoryNamer' => 'getCurrentDateTimeDirectoryNamerService.php',
            'Vich\\UploaderBundle\\Naming\\HashNamer' => 'getHashNamerService.php',
            'Vich\\UploaderBundle\\Naming\\OrignameNamer' => 'getOrignameNamerService.php',
            'Vich\\UploaderBundle\\Naming\\PropertyDirectoryNamer' => 'getPropertyDirectoryNamerService.php',
            'Vich\\UploaderBundle\\Naming\\PropertyNamer' => 'getPropertyNamerService.php',
            'Vich\\UploaderBundle\\Naming\\SubdirDirectoryNamer' => 'getSubdirDirectoryNamerService.php',
            'Vich\\UploaderBundle\\Naming\\UniqidNamer' => 'getUniqidNamerService.php',
            'assoconnect_graphql_mutation_validator.validator' => 'getAssoconnectGraphqlMutationValidator_ValidatorService.php',
            'cache.app_clearer' => 'getCache_AppClearerService.php',
            'cache.global_clearer' => 'getCache_GlobalClearerService.php',
            'cache.system_clearer' => 'getCache_SystemClearerService.php',
            'cache_clearer' => 'getCacheClearerService.php',
            'cache_warmer' => 'getCacheWarmerService.php',
            'console.command.public_alias.doctrine_cache.contains_command' => 'getConsole_Command_PublicAlias_DoctrineCache_ContainsCommandService.php',
            'console.command.public_alias.doctrine_cache.delete_command' => 'getConsole_Command_PublicAlias_DoctrineCache_DeleteCommandService.php',
            'console.command.public_alias.doctrine_cache.flush_command' => 'getConsole_Command_PublicAlias_DoctrineCache_FlushCommandService.php',
            'console.command.public_alias.doctrine_cache.stats_command' => 'getConsole_Command_PublicAlias_DoctrineCache_StatsCommandService.php',
            'console.command.public_alias.doctrine_migrations.diff_command' => 'getConsole_Command_PublicAlias_DoctrineMigrations_DiffCommandService.php',
            'console.command.public_alias.doctrine_migrations.dump_schema_command' => 'getConsole_Command_PublicAlias_DoctrineMigrations_DumpSchemaCommandService.php',
            'console.command.public_alias.doctrine_migrations.execute_command' => 'getConsole_Command_PublicAlias_DoctrineMigrations_ExecuteCommandService.php',
            'console.command.public_alias.doctrine_migrations.generate_command' => 'getConsole_Command_PublicAlias_DoctrineMigrations_GenerateCommandService.php',
            'console.command.public_alias.doctrine_migrations.latest_command' => 'getConsole_Command_PublicAlias_DoctrineMigrations_LatestCommandService.php',
            'console.command.public_alias.doctrine_migrations.migrate_command' => 'getConsole_Command_PublicAlias_DoctrineMigrations_MigrateCommandService.php',
            'console.command.public_alias.doctrine_migrations.rollup_command' => 'getConsole_Command_PublicAlias_DoctrineMigrations_RollupCommandService.php',
            'console.command.public_alias.doctrine_migrations.status_command' => 'getConsole_Command_PublicAlias_DoctrineMigrations_StatusCommandService.php',
            'console.command.public_alias.doctrine_migrations.up_to_date_command' => 'getConsole_Command_PublicAlias_DoctrineMigrations_UpToDateCommandService.php',
            'console.command.public_alias.doctrine_migrations.version_command' => 'getConsole_Command_PublicAlias_DoctrineMigrations_VersionCommandService.php',
            'console.command_loader' => 'getConsole_CommandLoaderService.php',
            'doctrine.dbal.lp_perl_connection' => 'getDoctrine_Dbal_LpPerlConnectionService.php',
            'doctrine.orm.lp_perl_entity_manager' => 'getDoctrine_Orm_LpPerlEntityManagerService.php',
            'doctrine_cache.providers.doctrine.orm.lp_perl_metadata_cache' => 'getDoctrineCache_Providers_Doctrine_Orm_LpPerlMetadataCacheService.php',
            'doctrine_cache.providers.doctrine.orm.lp_perl_query_cache' => 'getDoctrineCache_Providers_Doctrine_Orm_LpPerlQueryCacheService.php',
            'doctrine_cache.providers.doctrine.orm.lp_perl_result_cache' => 'getDoctrineCache_Providers_Doctrine_Orm_LpPerlResultCacheService.php',
            'easyadmin.autocomplete' => 'getEasyadmin_AutocompleteService.php',
            'easyadmin.form.guesser.missing_doctrine_orm_type_guesser' => 'getEasyadmin_Form_Guesser_MissingDoctrineOrmTypeGuesserService.php',
            'easyadmin.listener.request_post_initialize' => 'getEasyadmin_Listener_RequestPostInitializeService.php',
            'easyadmin.paginator' => 'getEasyadmin_PaginatorService.php',
            'easyadmin.query_builder' => 'getEasyadmin_QueryBuilderService.php',
            'filesystem' => 'getFilesystemService.php',
            'form.factory' => 'getForm_FactoryService.php',
            'lexik_jwt_authentication.check_config_command' => 'getLexikJwtAuthentication_CheckConfigCommandService.php',
            'lexik_jwt_authentication.encoder' => 'getLexikJwtAuthentication_EncoderService.php',
            'lexik_jwt_authentication.generate_token_command' => 'getLexikJwtAuthentication_GenerateTokenCommandService.php',
            'lexik_jwt_authentication.jwt_manager' => 'getLexikJwtAuthentication_JwtManagerService.php',
            'lexik_jwt_authentication.key_loader' => 'getLexikJwtAuthentication_KeyLoaderService.php',
            'overblog_graphiql.controller' => 'getOverblogGraphiql_ControllerService.php',
            'overblog_graphql.access_resolver' => 'getOverblogGraphql_AccessResolverService.php',
            'overblog_graphql.command.compile' => 'getOverblogGraphql_Command_CompileService.php',
            'overblog_graphql.command.debug' => 'getOverblogGraphql_Command_DebugService.php',
            'overblog_graphql.command.dump_schema' => 'getOverblogGraphql_Command_DumpSchemaService.php',
            'overblog_graphql.controller.graphql' => 'getOverblogGraphql_Controller_GraphqlService.php',
            'overblog_graphql.definition.boolean_type' => 'getOverblogGraphql_Definition_BooleanTypeService.php',
            'overblog_graphql.definition.float_type' => 'getOverblogGraphql_Definition_FloatTypeService.php',
            'overblog_graphql.definition.id_type' => 'getOverblogGraphql_Definition_IdTypeService.php',
            'overblog_graphql.definition.int_type' => 'getOverblogGraphql_Definition_IntTypeService.php',
            'overblog_graphql.definition.string_type' => 'getOverblogGraphql_Definition_StringTypeService.php',
            'overblog_graphql.mutation_resolver' => 'getOverblogGraphql_MutationResolverService.php',
            'overblog_graphql.request_executor' => 'getOverblogGraphql_RequestExecutorService.php',
            'overblog_graphql.request_parser' => 'getOverblogGraphql_RequestParserService.php',
            'overblog_graphql.resolver_resolver' => 'getOverblogGraphql_ResolverResolverService.php',
            'overblog_graphql.type_resolver' => 'getOverblogGraphql_TypeResolverService.php',
            'phpexcel' => 'getPhpexcelService.php',
            'phpspreadsheet' => 'getPhpspreadsheetService.php',
            'routing.loader' => 'getRouting_LoaderService.php',
            'security.authentication_utils' => 'getSecurity_AuthenticationUtilsService.php',
            'security.csrf.token_manager' => 'getSecurity_Csrf_TokenManagerService.php',
            'security.password_encoder' => 'getSecurity_PasswordEncoderService.php',
            'serializer' => 'getSerializerService.php',
            'services_resetter' => 'getServicesResetterService.php',
            'session' => 'getSessionService.php',
            'swiftmailer.mailer.default' => 'getSwiftmailer_Mailer_DefaultService.php',
            'swiftmailer.mailer.default.plugin.messagelogger' => 'getSwiftmailer_Mailer_Default_Plugin_MessageloggerService.php',
            'swiftmailer.mailer.default.transport.real' => 'getSwiftmailer_Mailer_Default_Transport_RealService.php',
            'swiftmailer.transport' => 'getSwiftmailer_TransportService.php',
            'twig.controller.exception' => 'getTwig_Controller_ExceptionService.php',
            'twig.controller.preview_error' => 'getTwig_Controller_PreviewErrorService.php',
            'vich_uploader.download_handler' => 'getVichUploader_DownloadHandlerService.php',
            'vich_uploader.form.type.file' => 'getVichUploader_Form_Type_FileService.php',
            'vich_uploader.form.type.image' => 'getVichUploader_Form_Type_ImageService.php',
            'web_profiler.controller.exception' => 'getWebProfiler_Controller_ExceptionService.php',
            'web_profiler.controller.profiler' => 'getWebProfiler_Controller_ProfilerService.php',
            'web_profiler.controller.router' => 'getWebProfiler_Controller_RouterService.php',
        ];
        $this->aliases = [
            'Overblog\\GraphQLBundle\\Controller\\GraphController' => 'overblog_graphql.controller.graphql',
            'Overblog\\GraphiQLBundle\\Controller\\GraphiQLController' => 'overblog_graphiql.controller',
            'database_connection' => 'doctrine.dbal.default_connection',
            'doctrine.orm.default_metadata_cache' => 'doctrine_cache.providers.doctrine.orm.default_metadata_cache',
            'doctrine.orm.default_query_cache' => 'doctrine_cache.providers.doctrine.orm.default_query_cache',
            'doctrine.orm.default_result_cache' => 'doctrine_cache.providers.doctrine.orm.default_result_cache',
            'doctrine.orm.entity_manager' => 'doctrine.orm.default_entity_manager',
            'doctrine.orm.lp_perl_metadata_cache' => 'doctrine_cache.providers.doctrine.orm.lp_perl_metadata_cache',
            'doctrine.orm.lp_perl_query_cache' => 'doctrine_cache.providers.doctrine.orm.lp_perl_query_cache',
            'doctrine.orm.lp_perl_result_cache' => 'doctrine_cache.providers.doctrine.orm.lp_perl_result_cache',
            'mailer' => 'swiftmailer.mailer.default',
            'vich_uploader.directory_namer_subdir' => 'Vich\\UploaderBundle\\Naming\\SubdirDirectoryNamer',
            'vich_uploader.namer_base64' => 'Vich\\UploaderBundle\\Naming\\Base64Namer',
            'vich_uploader.namer_directory_current_date_time' => 'Vich\\UploaderBundle\\Naming\\CurrentDateTimeDirectoryNamer',
            'vich_uploader.namer_directory_property' => 'Vich\\UploaderBundle\\Naming\\PropertyDirectoryNamer',
            'vich_uploader.namer_hash' => 'Vich\\UploaderBundle\\Naming\\HashNamer',
            'vich_uploader.namer_origname' => 'Vich\\UploaderBundle\\Naming\\OrignameNamer',
            'vich_uploader.namer_property' => 'Vich\\UploaderBundle\\Naming\\PropertyNamer',
            'vich_uploader.namer_uniqid' => 'Vich\\UploaderBundle\\Naming\\UniqidNamer',
        ];

        $this->privates['service_container'] = function () {
            include_once $this->targetDirs[3].'/vendor/symfony/dependency-injection/ServiceSubscriberInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/framework-bundle/Controller/ControllerTrait.php';
            include_once $this->targetDirs[3].'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
            include_once $this->targetDirs[3].'/src/Service/LpService.php';
            include_once $this->targetDirs[3].'/src/Service/Twig/Basket.php';
            include_once $this->targetDirs[3].'/vendor/symfony/dependency-injection/ServiceLocator.php';
            include_once $this->targetDirs[3].'/vendor/symfony/framework-bundle/Controller/ControllerNameParser.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/ControllerMetadata/ArgumentMetadataFactoryInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/ControllerMetadata/ArgumentMetadataFactory.php';
            include_once $this->targetDirs[3].'/vendor/symfony/event-dispatcher/EventSubscriberInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/EventListener/ResponseListener.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/EventListener/StreamedResponseListener.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/EventListener/LocaleListener.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/EventListener/ValidateRequestListener.php';
            include_once $this->targetDirs[3].'/vendor/symfony/framework-bundle/EventListener/ResolveControllerNameSubscriber.php';
            include_once $this->targetDirs[3].'/vendor/symfony/dependency-injection/ParameterBag/ParameterBagInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/dependency-injection/ParameterBag/ParameterBag.php';
            include_once $this->targetDirs[3].'/vendor/symfony/dependency-injection/ParameterBag/FrozenParameterBag.php';
            include_once $this->targetDirs[3].'/vendor/symfony/dependency-injection/ParameterBag/ContainerBagInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/dependency-injection/ParameterBag/ContainerBag.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/HttpKernelInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/TerminableInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/HttpKernel.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/Controller/ArgumentResolverInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/Controller/TraceableArgumentResolver.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/Controller/ArgumentResolver.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-foundation/RequestStack.php';
            include_once $this->targetDirs[3].'/vendor/symfony/config/ConfigCacheFactoryInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/config/ResourceCheckerConfigCacheFactory.php';
            include_once $this->targetDirs[3].'/vendor/psr/cache/src/CacheItemPoolInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/cache/Adapter/AdapterInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/cache/PruneableInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/cache/ResettableInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/cache/Adapter/TraceableAdapter.php';
            include_once $this->targetDirs[3].'/vendor/psr/log/Psr/Log/LoggerAwareInterface.php';
            include_once $this->targetDirs[3].'/vendor/psr/log/Psr/Log/LoggerAwareTrait.php';
            include_once $this->targetDirs[3].'/vendor/symfony/cache/Traits/AbstractTrait.php';
            include_once $this->targetDirs[3].'/vendor/symfony/cache/Adapter/AbstractAdapter.php';
            include_once $this->targetDirs[3].'/vendor/symfony/cache/Traits/FilesystemCommonTrait.php';
            include_once $this->targetDirs[3].'/vendor/symfony/cache/Traits/FilesystemTrait.php';
            include_once $this->targetDirs[3].'/vendor/symfony/cache/Adapter/FilesystemAdapter.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/EventListener/AbstractSessionListener.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/EventListener/SessionListener.php';
            include_once $this->targetDirs[3].'/vendor/symfony/form/ResolvedFormTypeFactoryInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/form/Extension/DataCollector/Proxy/ResolvedTypeFactoryDataCollectorProxy.php';
            include_once $this->targetDirs[3].'/vendor/symfony/form/ResolvedFormTypeFactory.php';
            include_once $this->targetDirs[3].'/vendor/symfony/form/FormRegistryInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/form/FormRegistry.php';
            include_once $this->targetDirs[3].'/vendor/symfony/form/FormExtensionInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/form/Extension/DependencyInjection/DependencyInjectionExtension.php';
            include_once $this->targetDirs[3].'/vendor/symfony/validator/Validation.php';
            include_once $this->targetDirs[3].'/vendor/symfony/validator/ConstraintValidatorFactoryInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/validator/ContainerConstraintValidatorFactory.php';
            include_once $this->targetDirs[3].'/vendor/symfony/validator/ObjectInitializerInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/doctrine-bridge/Validator/DoctrineInitializer.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/EventListener/TranslatorListener.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/Profiler/Profiler.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/Profiler/ProfilerStorageInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/Profiler/FileProfilerStorage.php';
            include_once $this->targetDirs[3].'/vendor/psr/log/Psr/Log/LoggerInterface.php';
            include_once $this->targetDirs[3].'/vendor/monolog/monolog/src/Monolog/ResettableInterface.php';
            include_once $this->targetDirs[3].'/vendor/monolog/monolog/src/Monolog/Logger.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/Log/DebugLoggerInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/monolog-bridge/Logger.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/DataCollector/DataCollectorInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/DataCollector/DataCollector.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/DataCollector/LateDataCollectorInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/DataCollector/TimeDataCollector.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/DataCollector/MemoryDataCollector.php';
            include_once $this->targetDirs[3].'/vendor/symfony/validator/DataCollector/ValidatorDataCollector.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/DataCollector/AjaxDataCollector.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/DataCollector/ExceptionDataCollector.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/DataCollector/LoggerDataCollector.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/DataCollector/EventDataCollector.php';
            include_once $this->targetDirs[3].'/vendor/symfony/cache/DataCollector/CacheDataCollector.php';
            include_once $this->targetDirs[3].'/vendor/symfony/translation/DataCollector/TranslationDataCollector.php';
            include_once $this->targetDirs[3].'/vendor/symfony/security-bundle/DataCollector/SecurityDataCollector.php';
            include_once $this->targetDirs[3].'/vendor/symfony/twig-bridge/DataCollector/TwigDataCollector.php';
            include_once $this->targetDirs[3].'/vendor/symfony/doctrine-bridge/DataCollector/DoctrineDataCollector.php';
            include_once $this->targetDirs[3].'/vendor/doctrine/doctrine-bundle/DataCollector/DoctrineDataCollector.php';
            include_once $this->targetDirs[3].'/vendor/symfony/swiftmailer-bundle/DataCollector/MessageDataCollector.php';
            include_once $this->targetDirs[3].'/vendor/easycorp/easyadmin-bundle/src/DataCollector/EasyAdminDataCollector.php';
            include_once $this->targetDirs[3].'/vendor/vich/uploader-bundle/DataCollector/MappingCollector.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/DataCollector/ConfigDataCollector.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/EventListener/ProfilerListener.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/DataCollector/RequestDataCollector.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/DataCollector/RouterDataCollector.php';
            include_once $this->targetDirs[3].'/vendor/symfony/framework-bundle/DataCollector/RouterDataCollector.php';
            include_once $this->targetDirs[3].'/vendor/symfony/form/Extension/DataCollector/FormDataCollectorInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/form/Extension/DataCollector/FormDataCollector.php';
            include_once $this->targetDirs[3].'/vendor/symfony/form/Extension/DataCollector/FormDataExtractorInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/form/Extension/DataCollector/FormDataExtractor.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/EventListener/DebugHandlersListener.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/Debug/FileLinkFormatter.php';
            include_once $this->targetDirs[3].'/vendor/symfony/stopwatch/Stopwatch.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/Controller/ControllerResolverInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/Controller/TraceableControllerResolver.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/Controller/ControllerResolver.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/Controller/ContainerControllerResolver.php';
            include_once $this->targetDirs[3].'/vendor/symfony/framework-bundle/Controller/ControllerResolver.php';
            include_once $this->targetDirs[3].'/vendor/symfony/monolog-bridge/Processor/DebugProcessor.php';
            include_once $this->targetDirs[3].'/vendor/symfony/routing/RequestContext.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/EventListener/RouterListener.php';
            include_once $this->targetDirs[3].'/vendor/doctrine/annotations/lib/Doctrine/Common/Annotations/Reader.php';
            include_once $this->targetDirs[3].'/vendor/doctrine/annotations/lib/Doctrine/Common/Annotations/AnnotationReader.php';
            include_once $this->targetDirs[3].'/vendor/doctrine/annotations/lib/Doctrine/Common/Annotations/AnnotationRegistry.php';
            include_once $this->targetDirs[3].'/vendor/symfony/web-link/EventListener/AddLinkHeaderListener.php';
            include_once $this->targetDirs[3].'/vendor/sensio/framework-extra-bundle/EventListener/ControllerListener.php';
            include_once $this->targetDirs[3].'/vendor/sensio/framework-extra-bundle/EventListener/ParamConverterListener.php';
            include_once $this->targetDirs[3].'/vendor/sensio/framework-extra-bundle/Request/ParamConverter/ParamConverterManager.php';
            include_once $this->targetDirs[3].'/vendor/sensio/framework-extra-bundle/Request/ParamConverter/ParamConverterInterface.php';
            include_once $this->targetDirs[3].'/vendor/sensio/framework-extra-bundle/Request/ParamConverter/DoctrineParamConverter.php';
            include_once $this->targetDirs[3].'/vendor/symfony/expression-language/ExpressionLanguage.php';
            include_once $this->targetDirs[3].'/vendor/sensio/framework-extra-bundle/Request/ParamConverter/DateTimeParamConverter.php';
            include_once $this->targetDirs[3].'/vendor/sensio/framework-extra-bundle/EventListener/TemplateListener.php';
            include_once $this->targetDirs[3].'/vendor/sensio/framework-extra-bundle/Templating/TemplateGuesser.php';
            include_once $this->targetDirs[3].'/vendor/sensio/framework-extra-bundle/EventListener/HttpCacheListener.php';
            include_once $this->targetDirs[3].'/vendor/sensio/framework-extra-bundle/EventListener/SecurityListener.php';
            include_once $this->targetDirs[3].'/vendor/symfony/security/Core/Authorization/ExpressionLanguage.php';
            include_once $this->targetDirs[3].'/vendor/sensio/framework-extra-bundle/Security/ExpressionLanguage.php';
            include_once $this->targetDirs[3].'/vendor/sensio/framework-extra-bundle/EventListener/IsGrantedListener.php';
            include_once $this->targetDirs[3].'/vendor/sensio/framework-extra-bundle/Request/ArgumentNameConverter.php';
            include_once $this->targetDirs[3].'/vendor/doctrine/dbal/lib/Doctrine/DBAL/Logging/SQLLogger.php';
            include_once $this->targetDirs[3].'/vendor/symfony/doctrine-bridge/Logger/DbalLogger.php';
            include_once $this->targetDirs[3].'/vendor/doctrine/doctrine-bundle/ConnectionFactory.php';
            include_once $this->targetDirs[3].'/vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/ConnectionRegistry.php';
            include_once $this->targetDirs[3].'/vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/ManagerRegistry.php';
            include_once $this->targetDirs[3].'/vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/AbstractManagerRegistry.php';
            include_once $this->targetDirs[3].'/vendor/symfony/doctrine-bridge/ManagerRegistry.php';
            include_once $this->targetDirs[3].'/vendor/symfony/doctrine-bridge/RegistryInterface.php';
            include_once $this->targetDirs[3].'/vendor/doctrine/doctrine-bundle/Registry.php';
            include_once $this->targetDirs[3].'/vendor/doctrine/dbal/lib/Doctrine/DBAL/Logging/DebugStack.php';
            include_once $this->targetDirs[3].'/vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/Connection.php';
            include_once $this->targetDirs[3].'/vendor/doctrine/dbal/lib/Doctrine/DBAL/Connection.php';
            include_once $this->targetDirs[3].'/vendor/doctrine/dbal/lib/Doctrine/DBAL/Configuration.php';
            include_once $this->targetDirs[3].'/vendor/doctrine/dbal/lib/Doctrine/DBAL/Logging/LoggerChain.php';
            include_once $this->targetDirs[3].'/vendor/doctrine/event-manager/lib/Doctrine/Common/EventManager.php';
            include_once $this->targetDirs[3].'/vendor/symfony/doctrine-bridge/ContainerAwareEventManager.php';
            include_once $this->targetDirs[3].'/vendor/doctrine/orm/lib/Doctrine/ORM/Tools/AttachEntityListenersListener.php';
            include_once $this->targetDirs[3].'/vendor/doctrine/orm/lib/Doctrine/ORM/Repository/RepositoryFactory.php';
            include_once $this->targetDirs[3].'/vendor/doctrine/doctrine-bundle/Repository/ContainerRepositoryFactory.php';
            include_once $this->targetDirs[3].'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/NamingStrategy.php';
            include_once $this->targetDirs[3].'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/DefaultNamingStrategy.php';
            include_once $this->targetDirs[3].'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/QuoteStrategy.php';
            include_once $this->targetDirs[3].'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/DefaultQuoteStrategy.php';
            include_once $this->targetDirs[3].'/vendor/doctrine/orm/lib/Doctrine/ORM/Configuration.php';
            include_once $this->targetDirs[3].'/vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/Mapping/Driver/MappingDriver.php';
            include_once $this->targetDirs[3].'/vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/Mapping/Driver/MappingDriverChain.php';
            include_once $this->targetDirs[3].'/vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/Mapping/Driver/AnnotationDriver.php';
            include_once $this->targetDirs[3].'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/Driver/AnnotationDriver.php';
            include_once $this->targetDirs[3].'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/EntityListenerResolver.php';
            include_once $this->targetDirs[3].'/vendor/doctrine/doctrine-bundle/Mapping/EntityListenerServiceResolver.php';
            include_once $this->targetDirs[3].'/vendor/doctrine/doctrine-bundle/Mapping/ContainerAwareEntityListenerResolver.php';
            include_once $this->targetDirs[3].'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/Cache.php';
            include_once $this->targetDirs[3].'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/FlushableCache.php';
            include_once $this->targetDirs[3].'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/ClearableCache.php';
            include_once $this->targetDirs[3].'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/MultiGetCache.php';
            include_once $this->targetDirs[3].'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/MultiDeleteCache.php';
            include_once $this->targetDirs[3].'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/MultiPutCache.php';
            include_once $this->targetDirs[3].'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/MultiOperationCache.php';
            include_once $this->targetDirs[3].'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/CacheProvider.php';
            include_once $this->targetDirs[3].'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/ArrayCache.php';
            include_once $this->targetDirs[3].'/vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/ObjectManager.php';
            include_once $this->targetDirs[3].'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
            include_once $this->targetDirs[3].'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';
            include_once $this->targetDirs[3].'/vendor/doctrine/doctrine-bundle/ManagerConfigurator.php';
            include_once $this->targetDirs[3].'/vendor/symfony/security/Core/Authorization/AuthorizationCheckerInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/security/Core/Authorization/AuthorizationChecker.php';
            include_once $this->targetDirs[3].'/vendor/symfony/security/Core/Authentication/Token/Storage/TokenStorageInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/security/Core/Authentication/Token/Storage/TokenStorage.php';
            include_once $this->targetDirs[3].'/vendor/symfony/security/Core/Authentication/AuthenticationManagerInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/security/Core/Authentication/AuthenticationProviderManager.php';
            include_once $this->targetDirs[3].'/vendor/symfony/security/Core/Authentication/AuthenticationTrustResolverInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/security/Core/Authentication/AuthenticationTrustResolver.php';
            include_once $this->targetDirs[3].'/vendor/symfony/security/Core/Role/RoleHierarchyInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/security/Core/Role/RoleHierarchy.php';
            include_once $this->targetDirs[3].'/vendor/symfony/security/Http/FirewallMapInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/security-bundle/Security/FirewallMap.php';
            include_once $this->targetDirs[3].'/vendor/symfony/security/Http/Logout/LogoutUrlGenerator.php';
            include_once $this->targetDirs[3].'/vendor/symfony/security/Http/RememberMe/ResponseListener.php';
            include_once $this->targetDirs[3].'/vendor/symfony/security/Core/Authorization/AccessDecisionManagerInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/security/Core/Authorization/TraceableAccessDecisionManager.php';
            include_once $this->targetDirs[3].'/vendor/symfony/security/Core/Authorization/AccessDecisionManager.php';
            include_once $this->targetDirs[3].'/vendor/symfony/security/Http/Firewall.php';
            include_once $this->targetDirs[3].'/vendor/symfony/security-bundle/EventListener/FirewallListener.php';
            include_once $this->targetDirs[3].'/vendor/symfony/security-bundle/Debug/TraceableFirewallListener.php';
            include_once $this->targetDirs[3].'/vendor/symfony/web-profiler-bundle/Csp/ContentSecurityPolicyHandler.php';
            include_once $this->targetDirs[3].'/vendor/symfony/web-profiler-bundle/Csp/NonceGenerator.php';
            include_once $this->targetDirs[3].'/vendor/symfony/web-profiler-bundle/EventListener/WebDebugToolbarListener.php';
            include_once $this->targetDirs[3].'/vendor/twig/twig/src/Environment.php';
            include_once $this->targetDirs[3].'/vendor/twig/twig/src/Extension/ExtensionInterface.php';
            include_once $this->targetDirs[3].'/vendor/twig/twig/src/Extension/AbstractExtension.php';
            include_once $this->targetDirs[3].'/vendor/symfony/twig-bridge/Extension/CsrfExtension.php';
            include_once $this->targetDirs[3].'/vendor/symfony/twig-bridge/Extension/LogoutUrlExtension.php';
            include_once $this->targetDirs[3].'/vendor/symfony/twig-bridge/Extension/SecurityExtension.php';
            include_once $this->targetDirs[3].'/vendor/twig/twig/src/Extension/ProfilerExtension.php';
            include_once $this->targetDirs[3].'/vendor/symfony/twig-bridge/Extension/ProfilerExtension.php';
            include_once $this->targetDirs[3].'/vendor/symfony/twig-bridge/Extension/TranslationExtension.php';
            include_once $this->targetDirs[3].'/vendor/symfony/twig-bridge/Extension/AssetExtension.php';
            include_once $this->targetDirs[3].'/vendor/symfony/asset/Packages.php';
            include_once $this->targetDirs[3].'/vendor/symfony/asset/PackageInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/asset/Package.php';
            include_once $this->targetDirs[3].'/vendor/symfony/asset/PathPackage.php';
            include_once $this->targetDirs[3].'/vendor/symfony/asset/VersionStrategy/VersionStrategyInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/asset/VersionStrategy/EmptyVersionStrategy.php';
            include_once $this->targetDirs[3].'/vendor/symfony/asset/Context/ContextInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/asset/Context/RequestStackContext.php';
            include_once $this->targetDirs[3].'/vendor/symfony/twig-bridge/Extension/CodeExtension.php';
            include_once $this->targetDirs[3].'/vendor/symfony/twig-bridge/Extension/RoutingExtension.php';
            include_once $this->targetDirs[3].'/vendor/symfony/twig-bridge/Extension/YamlExtension.php';
            include_once $this->targetDirs[3].'/vendor/symfony/twig-bridge/Extension/StopwatchExtension.php';
            include_once $this->targetDirs[3].'/vendor/symfony/twig-bridge/Extension/ExpressionExtension.php';
            include_once $this->targetDirs[3].'/vendor/symfony/twig-bridge/Extension/HttpKernelExtension.php';
            include_once $this->targetDirs[3].'/vendor/symfony/twig-bridge/Extension/HttpFoundationExtension.php';
            include_once $this->targetDirs[3].'/vendor/symfony/twig-bridge/Extension/WebLinkExtension.php';
            include_once $this->targetDirs[3].'/vendor/symfony/twig-bridge/Extension/FormExtension.php';
            include_once $this->targetDirs[3].'/vendor/symfony/twig-bridge/Extension/DumpExtension.php';
            include_once $this->targetDirs[3].'/vendor/doctrine/doctrine-bundle/Twig/DoctrineExtension.php';
            include_once $this->targetDirs[3].'/vendor/symfony/web-profiler-bundle/Twig/WebProfilerExtension.php';
            include_once $this->targetDirs[3].'/vendor/symfony/var-dumper/Dumper/DataDumperInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/var-dumper/Cloner/DumperInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/var-dumper/Dumper/AbstractDumper.php';
            include_once $this->targetDirs[3].'/vendor/symfony/var-dumper/Dumper/CliDumper.php';
            include_once $this->targetDirs[3].'/vendor/symfony/var-dumper/Dumper/HtmlDumper.php';
            include_once $this->targetDirs[3].'/vendor/easycorp/easyadmin-bundle/src/Twig/EasyAdminTwigExtension.php';
            include_once $this->targetDirs[3].'/vendor/vich/uploader-bundle/Twig/Extension/UploaderExtension.php';
            include_once $this->targetDirs[3].'/vendor/symfony/twig-bridge/AppVariable.php';
            include_once $this->targetDirs[3].'/vendor/twig/twig/src/RuntimeLoader/RuntimeLoaderInterface.php';
            include_once $this->targetDirs[3].'/vendor/twig/twig/src/RuntimeLoader/ContainerRuntimeLoader.php';
            include_once $this->targetDirs[3].'/src/Service/Twig/Tags.php';
            include_once $this->targetDirs[3].'/vendor/symfony/twig-bundle/DependencyInjection/Configurator/EnvironmentConfigurator.php';
            include_once $this->targetDirs[3].'/vendor/twig/twig/src/Loader/LoaderInterface.php';
            include_once $this->targetDirs[3].'/vendor/twig/twig/src/Loader/ExistsLoaderInterface.php';
            include_once $this->targetDirs[3].'/vendor/twig/twig/src/Loader/SourceContextLoaderInterface.php';
            include_once $this->targetDirs[3].'/vendor/twig/twig/src/Loader/FilesystemLoader.php';
            include_once $this->targetDirs[3].'/vendor/twig/twig/src/Profiler/Profile.php';
            include_once $this->targetDirs[3].'/vendor/monolog/monolog/src/Monolog/Handler/HandlerInterface.php';
            include_once $this->targetDirs[3].'/vendor/monolog/monolog/src/Monolog/Handler/AbstractHandler.php';
            include_once $this->targetDirs[3].'/vendor/monolog/monolog/src/Monolog/Handler/AbstractProcessingHandler.php';
            include_once $this->targetDirs[3].'/vendor/monolog/monolog/src/Monolog/Handler/StreamHandler.php';
            include_once $this->targetDirs[3].'/vendor/monolog/monolog/src/Monolog/Processor/ProcessorInterface.php';
            include_once $this->targetDirs[3].'/vendor/monolog/monolog/src/Monolog/Processor/PsrLogMessageProcessor.php';
            include_once $this->targetDirs[3].'/vendor/symfony/monolog-bridge/Handler/ConsoleHandler.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/DataCollector/DumpDataCollector.php';
            include_once $this->targetDirs[3].'/vendor/symfony/var-dumper/Cloner/ClonerInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/var-dumper/Cloner/AbstractCloner.php';
            include_once $this->targetDirs[3].'/vendor/symfony/var-dumper/Cloner/VarCloner.php';
            include_once $this->targetDirs[3].'/vendor/symfony/var-dumper/Server/Connection.php';
            include_once $this->targetDirs[3].'/vendor/symfony/var-dumper/Dumper/ContextProvider/ContextProviderInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/var-dumper/Dumper/ContextProvider/SourceContextProvider.php';
            include_once $this->targetDirs[3].'/vendor/symfony/var-dumper/Dumper/ContextProvider/RequestContextProvider.php';
            include_once $this->targetDirs[3].'/vendor/symfony/var-dumper/Dumper/ContextProvider/CliContextProvider.php';
            include_once $this->targetDirs[3].'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/FileCache.php';
            include_once $this->targetDirs[3].'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/FilesystemCache.php';
            include_once $this->targetDirs[3].'/vendor/easycorp/easyadmin-bundle/src/Cache/CacheManager.php';
            include_once $this->targetDirs[3].'/vendor/easycorp/easyadmin-bundle/src/Configuration/ConfigManager.php';
            include_once $this->targetDirs[3].'/vendor/easycorp/easyadmin-bundle/src/Configuration/ConfigPassInterface.php';
            include_once $this->targetDirs[3].'/vendor/easycorp/easyadmin-bundle/src/Configuration/NormalizerConfigPass.php';
            include_once $this->targetDirs[3].'/vendor/easycorp/easyadmin-bundle/src/Configuration/DesignConfigPass.php';
            include_once $this->targetDirs[3].'/vendor/easycorp/easyadmin-bundle/src/Configuration/MenuConfigPass.php';
            include_once $this->targetDirs[3].'/vendor/easycorp/easyadmin-bundle/src/Configuration/ActionConfigPass.php';
            include_once $this->targetDirs[3].'/vendor/easycorp/easyadmin-bundle/src/Configuration/MetadataConfigPass.php';
            include_once $this->targetDirs[3].'/vendor/easycorp/easyadmin-bundle/src/Configuration/PropertyConfigPass.php';
            include_once $this->targetDirs[3].'/vendor/easycorp/easyadmin-bundle/src/Configuration/ViewConfigPass.php';
            include_once $this->targetDirs[3].'/vendor/easycorp/easyadmin-bundle/src/Configuration/TemplateConfigPass.php';
            include_once $this->targetDirs[3].'/vendor/easycorp/easyadmin-bundle/src/Configuration/DefaultConfigPass.php';
            include_once $this->targetDirs[3].'/vendor/easycorp/easyadmin-bundle/src/Router/EasyAdminRouter.php';
            include_once $this->targetDirs[3].'/vendor/easycorp/easyadmin-bundle/src/EventListener/ControllerListener.php';
            include_once $this->targetDirs[3].'/vendor/vich/uploader-bundle/Adapter/AdapterInterface.php';
            include_once $this->targetDirs[3].'/vendor/vich/uploader-bundle/Adapter/ORM/DoctrineORMAdapter.php';
            include_once $this->targetDirs[3].'/vendor/vich/uploader-bundle/Storage/StorageInterface.php';
            include_once $this->targetDirs[3].'/vendor/vich/uploader-bundle/Storage/AbstractStorage.php';
            include_once $this->targetDirs[3].'/vendor/vich/uploader-bundle/Storage/FileSystemStorage.php';
            include_once $this->targetDirs[3].'/vendor/vich/uploader-bundle/Metadata/MetadataReader.php';
            include_once $this->targetDirs[3].'/vendor/jms/metadata/src/MetadataFactoryInterface.php';
            include_once $this->targetDirs[3].'/vendor/jms/metadata/src/AdvancedMetadataFactoryInterface.php';
            include_once $this->targetDirs[3].'/vendor/jms/metadata/src/MetadataFactory.php';
            include_once $this->targetDirs[3].'/vendor/jms/metadata/src/Driver/DriverInterface.php';
            include_once $this->targetDirs[3].'/vendor/jms/metadata/src/Driver/AdvancedDriverInterface.php';
            include_once $this->targetDirs[3].'/vendor/jms/metadata/src/Driver/DriverChain.php';
            include_once $this->targetDirs[3].'/vendor/jms/metadata/src/Driver/AbstractFileDriver.php';
            include_once $this->targetDirs[3].'/vendor/vich/uploader-bundle/Metadata/Driver/XmlDriver.php';
            include_once $this->targetDirs[3].'/vendor/jms/metadata/src/Driver/FileLocatorInterface.php';
            include_once $this->targetDirs[3].'/vendor/jms/metadata/src/Driver/AdvancedFileLocatorInterface.php';
            include_once $this->targetDirs[3].'/vendor/jms/metadata/src/Driver/FileLocator.php';
            include_once $this->targetDirs[3].'/vendor/vich/uploader-bundle/Metadata/Driver/AnnotationDriver.php';
            include_once $this->targetDirs[3].'/vendor/vich/uploader-bundle/Metadata/Driver/YamlDriver.php';
            include_once $this->targetDirs[3].'/vendor/jms/metadata/src/Cache/CacheInterface.php';
            include_once $this->targetDirs[3].'/vendor/jms/metadata/src/Cache/FileCache.php';
            include_once $this->targetDirs[3].'/vendor/vich/uploader-bundle/Mapping/PropertyMappingFactory.php';
            include_once $this->targetDirs[3].'/vendor/vich/uploader-bundle/Handler/AbstractHandler.php';
            include_once $this->targetDirs[3].'/vendor/vich/uploader-bundle/Handler/UploadHandler.php';
            include_once $this->targetDirs[3].'/vendor/vich/uploader-bundle/Injector/FileInjectorInterface.php';
            include_once $this->targetDirs[3].'/vendor/vich/uploader-bundle/Injector/FileInjector.php';
            include_once $this->targetDirs[3].'/vendor/symfony/templating/Helper/HelperInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/templating/Helper/Helper.php';
            include_once $this->targetDirs[3].'/vendor/vich/uploader-bundle/Templating/Helper/UploaderHelper.php';
            include_once $this->targetDirs[3].'/vendor/doctrine/event-manager/lib/Doctrine/Common/EventSubscriber.php';
            include_once $this->targetDirs[3].'/vendor/vich/uploader-bundle/EventListener/Doctrine/BaseListener.php';
            include_once $this->targetDirs[3].'/vendor/vich/uploader-bundle/EventListener/Doctrine/CleanListener.php';
            include_once $this->targetDirs[3].'/vendor/vich/uploader-bundle/EventListener/Doctrine/RemoveListener.php';
            include_once $this->targetDirs[3].'/vendor/vich/uploader-bundle/EventListener/Doctrine/UploadListener.php';
            include_once $this->targetDirs[3].'/vendor/overblog/graphql-bundle/lib/generator/src/Generator/AbstractClassGenerator.php';
            include_once $this->targetDirs[3].'/vendor/overblog/graphql-bundle/lib/generator/src/Generator/AbstractTypeGenerator.php';
            include_once $this->targetDirs[3].'/vendor/overblog/graphql-bundle/lib/generator/src/Generator/TypeGenerator.php';
            include_once $this->targetDirs[3].'/vendor/overblog/graphql-bundle/src/Generator/TypeGenerator.php';
            include_once $this->targetDirs[3].'/vendor/overblog/graphql-bundle/src/ExpressionLanguage/ExpressionLanguage.php';
            include_once $this->targetDirs[3].'/vendor/symfony/expression-language/ExpressionFunction.php';
            include_once $this->targetDirs[3].'/vendor/overblog/graphql-bundle/src/ExpressionLanguage/ExpressionFunction.php';
            include_once $this->targetDirs[3].'/vendor/overblog/graphql-bundle/src/ExpressionLanguage/ExpressionFunction/Security/GetUser.php';
            include_once $this->targetDirs[3].'/vendor/overblog/graphql-bundle/src/ExpressionLanguage/ExpressionFunction/Security/HasAnyPermission.php';
            include_once $this->targetDirs[3].'/vendor/overblog/graphql-bundle/src/ExpressionLanguage/ExpressionFunction/Security/HasAnyRole.php';
            include_once $this->targetDirs[3].'/vendor/overblog/graphql-bundle/src/ExpressionLanguage/ExpressionFunction/Security/HasPermission.php';
            include_once $this->targetDirs[3].'/vendor/overblog/graphql-bundle/src/ExpressionLanguage/ExpressionFunction/Security/HasRole.php';
            include_once $this->targetDirs[3].'/vendor/overblog/graphql-bundle/src/ExpressionLanguage/ExpressionFunction/Security/IsAnonymous.php';
            include_once $this->targetDirs[3].'/vendor/overblog/graphql-bundle/src/ExpressionLanguage/ExpressionFunction/Security/IsAuthenticated.php';
            include_once $this->targetDirs[3].'/vendor/overblog/graphql-bundle/src/ExpressionLanguage/ExpressionFunction/Security/IsFullyAuthenticated.php';
            include_once $this->targetDirs[3].'/vendor/overblog/graphql-bundle/src/ExpressionLanguage/ExpressionFunction/Security/IsRememberMe.php';
            include_once $this->targetDirs[3].'/vendor/overblog/graphql-bundle/src/ExpressionLanguage/ExpressionFunction/DependencyInjection/Parameter.php';
            include_once $this->targetDirs[3].'/vendor/overblog/graphql-bundle/src/ExpressionLanguage/ExpressionFunction/DependencyInjection/Service.php';
            include_once $this->targetDirs[3].'/vendor/overblog/graphql-bundle/src/ExpressionLanguage/ExpressionFunction/GraphQL/IsTypeOf.php';
            include_once $this->targetDirs[3].'/vendor/overblog/graphql-bundle/src/ExpressionLanguage/ExpressionFunction/GraphQL/Mutation.php';
            include_once $this->targetDirs[3].'/vendor/overblog/graphql-bundle/src/ExpressionLanguage/ExpressionFunction/GraphQL/Resolver.php';
            include_once $this->targetDirs[3].'/vendor/overblog/graphql-bundle/src/ExpressionLanguage/ExpressionFunction/NewObject.php';
            include_once $this->targetDirs[3].'/vendor/overblog/graphql-bundle/src/ExpressionLanguage/ExpressionFunction/GraphQL/Relay/FromGlobalID.php';
            include_once $this->targetDirs[3].'/vendor/overblog/graphql-bundle/src/ExpressionLanguage/ExpressionFunction/GraphQL/Relay/GlobalID.php';
            include_once $this->targetDirs[3].'/vendor/overblog/graphql-bundle/src/ExpressionLanguage/ExpressionFunction/GraphQL/Relay/IdFetcherCallback.php';
            include_once $this->targetDirs[3].'/vendor/overblog/graphql-bundle/src/ExpressionLanguage/ExpressionFunction/GraphQL/Relay/MutateAndGetPayloadCallback.php';
            include_once $this->targetDirs[3].'/vendor/overblog/graphql-bundle/src/ExpressionLanguage/ExpressionFunction/GraphQL/Relay/ResolveSingleInputCallback.php';
            include_once $this->targetDirs[3].'/vendor/overblog/graphql-bundle/src/EventListener/ClassLoaderListener.php';
            include_once $this->targetDirs[3].'/vendor/symfony/translation/TranslatorInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/translation/TranslatorBagInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/translation/DataCollectorTranslator.php';
            include_once $this->targetDirs[3].'/vendor/symfony/translation/Translator.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/CacheWarmer/WarmableInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/framework-bundle/Translation/Translator.php';
            include_once $this->targetDirs[3].'/vendor/symfony/translation/Formatter/MessageFormatterInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/translation/Formatter/ChoiceMessageFormatterInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/translation/Formatter/MessageFormatter.php';
            include_once $this->targetDirs[3].'/vendor/symfony/translation/MessageSelector.php';
            include_once $this->targetDirs[3].'/vendor/symfony/routing/RequestContextAwareInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/routing/Matcher/UrlMatcherInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/routing/Generator/UrlGeneratorInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/routing/RouterInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/routing/Matcher/RequestMatcherInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/routing/Router.php';
            include_once $this->targetDirs[3].'/vendor/symfony/framework-bundle/Routing/Router.php';
            include_once $this->targetDirs[3].'/vendor/symfony/property-access/PropertyAccessorInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/property-access/PropertyAccessor.php';
            include_once $this->targetDirs[3].'/vendor/symfony/cache/Traits/ArrayTrait.php';
            include_once $this->targetDirs[3].'/vendor/symfony/cache/Adapter/ArrayAdapter.php';
            include_once $this->targetDirs[3].'/vendor/symfony/validator/Mapping/Factory/MetadataFactoryInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/validator/Validator/ValidatorInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/validator/Validator/TraceableValidator.php';
            include_once $this->targetDirs[3].'/vendor/symfony/event-dispatcher/EventDispatcherInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/event-dispatcher/Debug/TraceableEventDispatcherInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/event-dispatcher/Debug/TraceableEventDispatcher.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/Debug/TraceableEventDispatcher.php';
            include_once $this->targetDirs[3].'/vendor/symfony/event-dispatcher/EventDispatcher.php';
            include_once $this->targetDirs[3].'/vendor/monolog/monolog/src/Monolog/Handler/NullHandler.php';
            include_once $this->targetDirs[3].'/vendor/doctrine/annotations/lib/Doctrine/Common/Annotations/CachedReader.php';
        };
    }

    public function reset()
    {
        $this->privates = [];
        parent::reset();
    }

    public function compile()
    {
        throw new LogicException('You cannot compile a dumped container that was already compiled.');
    }

    public function isCompiled()
    {
        return true;
    }

    public function getRemovedIds()
    {
        return require $this->containerDir.\DIRECTORY_SEPARATOR.'removed-ids.php';
    }

    protected function load($file, $lazyLoad = true)
    {
        return require $this->containerDir.\DIRECTORY_SEPARATOR.$file;
    }

    /**
     * Gets the public 'App\Service\Twig\Basket' shared autowired service.
     *
     * @return \App\Service\Twig\Basket
     */
    protected function getBasketService()
    {
        $this->services['App\Service\Twig\Basket'] = $instance = new \App\Service\Twig\Basket();

        $instance->setContainer(($this->privates['.service_locator.ychIlgF'] ?? $this->get_ServiceLocator_YchIlgFService())->withContext('App\\Service\\Twig\\Basket', $this));

        return $instance;
    }

    /**
     * Gets the public 'cache.app' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_AppService()
    {
        $a = new \Symfony\Component\Cache\Adapter\FilesystemAdapter('1sGhzchoOt', 0, ($this->targetDirs[0].'/pools'));
        $a->setLogger(($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService()));

        return $this->services['cache.app'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter($a);
    }

    /**
     * Gets the public 'cache.system' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_SystemService()
    {
        return $this->services['cache.system'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(\Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('d1srnbdUSx', 0, $this->getParameter('container.build_id'), ($this->targetDirs[0].'/pools'), ($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService())));
    }

    /**
     * Gets the public 'data_collector.dump' shared service.
     *
     * @return \Symfony\Component\HttpKernel\DataCollector\DumpDataCollector
     */
    protected function getDataCollector_DumpService()
    {
        return $this->services['data_collector.dump'] = new \Symfony\Component\HttpKernel\DataCollector\DumpDataCollector(($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))), ($this->privates['debug.file_link_formatter'] ?? $this->getDebug_FileLinkFormatterService()), 'UTF-8', ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($this->privates['var_dumper.server_connection'] ?? $this->getVarDumper_ServerConnectionService()));
    }

    /**
     * Gets the public 'doctrine' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Registry
     */
    protected function getDoctrineService()
    {
        return $this->services['doctrine'] = new \Doctrine\Bundle\DoctrineBundle\Registry($this, $this->parameters['doctrine.connections'], $this->parameters['doctrine.entity_managers'], 'default', 'default');
    }

    /**
     * Gets the public 'doctrine.dbal.default_connection' shared service.
     *
     * @return \Doctrine\DBAL\Connection
     */
    protected function getDoctrine_Dbal_DefaultConnectionService()
    {
        $a = new \Doctrine\DBAL\Configuration();

        $b = new \Doctrine\DBAL\Logging\LoggerChain();
        $b->addLogger(($this->privates['doctrine.dbal.logger'] ?? $this->getDoctrine_Dbal_LoggerService()));
        $b->addLogger(($this->privates['doctrine.dbal.logger.profiling.default'] ?? ($this->privates['doctrine.dbal.logger.profiling.default'] = new \Doctrine\DBAL\Logging\DebugStack())));

        $a->setSQLLogger($b);
        $c = new \Symfony\Bridge\Doctrine\ContainerAwareEventManager($this);
        $c->addEventSubscriber(($this->privates['vich_uploader.listener.clean.product_images'] ?? $this->getVichUploader_Listener_Clean_ProductImagesService()));
        $c->addEventSubscriber(($this->privates['vich_uploader.listener.remove.product_images'] ?? $this->getVichUploader_Listener_Remove_ProductImagesService()));
        $c->addEventSubscriber(($this->privates['vich_uploader.listener.upload.product_images'] ?? $this->getVichUploader_Listener_Upload_ProductImagesService()));
        $c->addEventListener([0 => 'loadClassMetadata'], new \Doctrine\ORM\Tools\AttachEntityListenersListener());

        return $this->services['doctrine.dbal.default_connection'] = ($this->privates['doctrine.dbal.connection_factory'] ?? ($this->privates['doctrine.dbal.connection_factory'] = new \Doctrine\Bundle\DoctrineBundle\ConnectionFactory([])))->createConnection(['url' => $this->getEnv('resolve:DATABASE_URL'), 'driver' => 'pdo_pgsql', 'host' => 'localhost', 'port' => NULL, 'user' => 'root', 'password' => NULL, 'driverOptions' => [], 'serverVersion' => '5.7', 'defaultTableOptions' => ['charset' => 'utf8mb4', 'collate' => 'utf8mb4_unicode_ci']], $a, $c, []);
    }

    /**
     * Gets the public 'doctrine.orm.default_entity_manager' shared service.
     *
     * @return \Doctrine\ORM\EntityManager
     */
    protected function getDoctrine_Orm_DefaultEntityManagerService($lazyLoad = true)
    {
        $this->services['doctrine.orm.default_entity_manager'] = $instance = \Doctrine\ORM\EntityManager::create(($this->services['doctrine.dbal.default_connection'] ?? $this->getDoctrine_Dbal_DefaultConnectionService()), ($this->privates['doctrine.orm.default_configuration'] ?? $this->getDoctrine_Orm_DefaultConfigurationService()));

        (new \Doctrine\Bundle\DoctrineBundle\ManagerConfigurator([], []))->configure($instance);

        return $instance;
    }

    /**
     * Gets the public 'doctrine_cache.providers.doctrine.orm.default_metadata_cache' shared service.
     *
     * @return \Doctrine\Common\Cache\ArrayCache
     */
    protected function getDoctrineCache_Providers_Doctrine_Orm_DefaultMetadataCacheService()
    {
        $this->services['doctrine_cache.providers.doctrine.orm.default_metadata_cache'] = $instance = new \Doctrine\Common\Cache\ArrayCache();

        $instance->setNamespace('sf_orm_default_75d4f1420d7a988ebf1bf046c412008428119cecddf6c98512519edbe343b103');

        return $instance;
    }

    /**
     * Gets the public 'doctrine_cache.providers.doctrine.orm.default_query_cache' shared service.
     *
     * @return \Doctrine\Common\Cache\ArrayCache
     */
    protected function getDoctrineCache_Providers_Doctrine_Orm_DefaultQueryCacheService()
    {
        $this->services['doctrine_cache.providers.doctrine.orm.default_query_cache'] = $instance = new \Doctrine\Common\Cache\ArrayCache();

        $instance->setNamespace('sf_orm_default_75d4f1420d7a988ebf1bf046c412008428119cecddf6c98512519edbe343b103');

        return $instance;
    }

    /**
     * Gets the public 'doctrine_cache.providers.doctrine.orm.default_result_cache' shared service.
     *
     * @return \Doctrine\Common\Cache\ArrayCache
     */
    protected function getDoctrineCache_Providers_Doctrine_Orm_DefaultResultCacheService()
    {
        $this->services['doctrine_cache.providers.doctrine.orm.default_result_cache'] = $instance = new \Doctrine\Common\Cache\ArrayCache();

        $instance->setNamespace('sf_orm_default_75d4f1420d7a988ebf1bf046c412008428119cecddf6c98512519edbe343b103');

        return $instance;
    }

    /**
     * Gets the public 'easy_admin.property_accessor' shared service.
     *
     * @return \Symfony\Component\PropertyAccess\PropertyAccessor
     */
    protected function getEasyAdmin_PropertyAccessorService()
    {
        return $this->services['easy_admin.property_accessor'] = new \Symfony\Component\PropertyAccess\PropertyAccessor(false, false, new \Symfony\Component\Cache\Adapter\ArrayAdapter(0, false));
    }

    /**
     * Gets the public 'easyadmin.cache.manager' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Cache\CacheManager
     */
    protected function getEasyadmin_Cache_ManagerService()
    {
        return $this->services['easyadmin.cache.manager'] = new \EasyCorp\Bundle\EasyAdminBundle\Cache\CacheManager(($this->targetDirs[0].'/easy_admin'));
    }

    /**
     * Gets the public 'easyadmin.config.manager' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Configuration\ConfigManager
     */
    protected function getEasyadmin_Config_ManagerService()
    {
        $this->services['easyadmin.config.manager'] = $instance = new \EasyCorp\Bundle\EasyAdminBundle\Configuration\ConfigManager(($this->services['easyadmin.cache.manager'] ?? ($this->services['easyadmin.cache.manager'] = new \EasyCorp\Bundle\EasyAdminBundle\Cache\CacheManager(($this->targetDirs[0].'/easy_admin')))), ($this->services['easy_admin.property_accessor'] ?? $this->getEasyAdmin_PropertyAccessorService()), $this->parameters['easyadmin.config'], true);

        $instance->addConfigPass(new \EasyCorp\Bundle\EasyAdminBundle\Configuration\NormalizerConfigPass($this));
        $instance->addConfigPass(new \EasyCorp\Bundle\EasyAdminBundle\Configuration\DesignConfigPass($this, true, 'en'));
        $instance->addConfigPass(new \EasyCorp\Bundle\EasyAdminBundle\Configuration\MenuConfigPass());
        $instance->addConfigPass(new \EasyCorp\Bundle\EasyAdminBundle\Configuration\ActionConfigPass());
        $instance->addConfigPass(new \EasyCorp\Bundle\EasyAdminBundle\Configuration\MetadataConfigPass(($this->services['doctrine'] ?? $this->getDoctrineService())));
        $instance->addConfigPass(new \EasyCorp\Bundle\EasyAdminBundle\Configuration\PropertyConfigPass(($this->privates['form.registry'] ?? $this->getForm_RegistryService())));
        $instance->addConfigPass(new \EasyCorp\Bundle\EasyAdminBundle\Configuration\ViewConfigPass());
        $instance->addConfigPass(new \EasyCorp\Bundle\EasyAdminBundle\Configuration\TemplateConfigPass(($this->privates['twig.loader.native_filesystem'] ?? $this->getTwig_Loader_NativeFilesystemService())));
        $instance->addConfigPass(new \EasyCorp\Bundle\EasyAdminBundle\Configuration\DefaultConfigPass());

        return $instance;
    }

    /**
     * Gets the public 'easyadmin.listener.controller' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\EventListener\ControllerListener
     */
    protected function getEasyadmin_Listener_ControllerService()
    {
        return $this->services['easyadmin.listener.controller'] = new \EasyCorp\Bundle\EasyAdminBundle\EventListener\ControllerListener(($this->services['easyadmin.config.manager'] ?? $this->getEasyadmin_Config_ManagerService()), ($this->privates['debug.controller_resolver'] ?? $this->getDebug_ControllerResolverService()));
    }

    /**
     * Gets the public 'easyadmin.router' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Router\EasyAdminRouter
     */
    protected function getEasyadmin_RouterService()
    {
        return $this->services['easyadmin.router'] = new \EasyCorp\Bundle\EasyAdminBundle\Router\EasyAdminRouter(($this->services['easyadmin.config.manager'] ?? $this->getEasyadmin_Config_ManagerService()), ($this->services['router'] ?? $this->getRouterService()), ($this->services['easy_admin.property_accessor'] ?? $this->getEasyAdmin_PropertyAccessorService()), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
    }

    /**
     * Gets the public 'event_dispatcher' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher
     */
    protected function getEventDispatcherService()
    {
        $a = new \Symfony\Bridge\Monolog\Logger('event');
        $a->pushProcessor(($this->privates['debug.log_processor'] ?? $this->getDebug_LogProcessorService()));
        $a->pushHandler(new \Monolog\Handler\NullHandler());

        $this->services['event_dispatcher'] = $instance = new \Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher(new \Symfony\Component\EventDispatcher\EventDispatcher(), ($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))), $a);

        $instance->addListener('kernel.controller', [0 => function () {
            return ($this->privates['data_collector.router'] ?? ($this->privates['data_collector.router'] = new \Symfony\Bundle\FrameworkBundle\DataCollector\RouterDataCollector()));
        }, 1 => 'onKernelController'], 0);
        $instance->addListener('kernel.controller', [0 => function () {
            return ($this->services['easyadmin.listener.controller'] ?? $this->getEasyadmin_Listener_ControllerService());
        }, 1 => 'onKernelController'], 0);
        $instance->addListener('easy_admin.post_initialize', [0 => function () {
            return ($this->services['easyadmin.listener.request_post_initialize'] ?? $this->load('getEasyadmin_Listener_RequestPostInitializeService.php'));
        }, 1 => 'initializeRequest'], 0);
        $instance->addListener('graphql.executor.context', [0 => function () {
            return ($this->services['Overblog\GraphQLBundle\EventListener\RequestFilesListener'] ?? $this->load('getRequestFilesListenerService.php'));
        }, 1 => 'onExecutorContextEvent'], 0);
        $instance->addListener('graphql.post_executor', [0 => function () {
            return ($this->services['Overblog\GraphQLBundle\EventListener\ErrorHandlerListener'] ?? $this->load('getErrorHandlerListenerService.php'));
        }, 1 => 'onPostExecutor'], 0);
        $instance->addListener('graphql.error_formatting', [0 => function () {
            return ($this->services['Overblog\GraphQLBundle\EventListener\ErrorLoggerListener'] ?? $this->load('getErrorLoggerListenerService.php'));
        }, 1 => 'onErrorFormatting'], 0);
        $instance->addListener('graphql.pre_executor', [0 => function () {
            return ($this->privates['Overblog\GraphQLBundle\EventListener\DebugListener'] ?? ($this->privates['Overblog\GraphQLBundle\EventListener\DebugListener'] = new \Overblog\GraphQLBundle\EventListener\DebugListener()));
        }, 1 => 'onPreExecutor'], 0);
        $instance->addListener('graphql.post_executor', [0 => function () {
            return ($this->privates['Overblog\GraphQLBundle\EventListener\DebugListener'] ?? ($this->privates['Overblog\GraphQLBundle\EventListener\DebugListener'] = new \Overblog\GraphQLBundle\EventListener\DebugListener()));
        }, 1 => 'onPostExecutor'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->services['overblog_graphql.event_listener.classloader_listener'] ?? $this->getOverblogGraphql_EventListener_ClassloaderListenerService());
        }, 1 => 'load'], 255);
        $instance->addListener('console.command', [0 => function () {
            return ($this->services['overblog_graphql.event_listener.classloader_listener'] ?? $this->getOverblogGraphql_EventListener_ClassloaderListenerService());
        }, 1 => 'load'], 255);
        $instance->addListener('graphql.error_formatting', [0 => function () {
            return ($this->privates['assoconnect_graphql_mutation_validator.formatter'] ?? ($this->privates['assoconnect_graphql_mutation_validator.formatter'] = new \AssoConnect\GraphQLMutationValidatorBundle\Formatter\Formatter()));
        }, 1 => 'onErrorFormatting'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['response_listener'] ?? ($this->privates['response_listener'] = new \Symfony\Component\HttpKernel\EventListener\ResponseListener('UTF-8')));
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['streamed_response_listener'] ?? ($this->privates['streamed_response_listener'] = new \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener()));
        }, 1 => 'onKernelResponse'], -1024);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['locale_listener'] ?? $this->getLocaleListenerService());
        }, 1 => 'onKernelRequest'], 16);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ($this->privates['locale_listener'] ?? $this->getLocaleListenerService());
        }, 1 => 'onKernelFinishRequest'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['validate_request_listener'] ?? ($this->privates['validate_request_listener'] = new \Symfony\Component\HttpKernel\EventListener\ValidateRequestListener()));
        }, 1 => 'onKernelRequest'], 256);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['resolve_controller_name_subscriber'] ?? $this->getResolveControllerNameSubscriberService());
        }, 1 => 'onKernelRequest'], 24);
        $instance->addListener('console.error', [0 => function () {
            return ($this->privates['console.error_listener'] ?? $this->load('getConsole_ErrorListenerService.php'));
        }, 1 => 'onConsoleError'], -128);
        $instance->addListener('console.terminate', [0 => function () {
            return ($this->privates['console.error_listener'] ?? $this->load('getConsole_ErrorListenerService.php'));
        }, 1 => 'onConsoleTerminate'], -128);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['session_listener'] ?? $this->getSessionListenerService());
        }, 1 => 'onKernelRequest'], 128);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['session_listener'] ?? $this->getSessionListenerService());
        }, 1 => 'onKernelResponse'], -1000);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ($this->privates['session_listener'] ?? $this->getSessionListenerService());
        }, 1 => 'onFinishRequest'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['translator_listener'] ?? $this->getTranslatorListenerService());
        }, 1 => 'onKernelRequest'], 10);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ($this->privates['translator_listener'] ?? $this->getTranslatorListenerService());
        }, 1 => 'onKernelFinishRequest'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['profiler_listener'] ?? $this->getProfilerListenerService());
        }, 1 => 'onKernelResponse'], -100);
        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->privates['profiler_listener'] ?? $this->getProfilerListenerService());
        }, 1 => 'onKernelException'], 0);
        $instance->addListener('kernel.terminate', [0 => function () {
            return ($this->privates['profiler_listener'] ?? $this->getProfilerListenerService());
        }, 1 => 'onKernelTerminate'], -1024);
        $instance->addListener('kernel.controller', [0 => function () {
            return ($this->privates['data_collector.request'] ?? ($this->privates['data_collector.request'] = new \Symfony\Component\HttpKernel\DataCollector\RequestDataCollector()));
        }, 1 => 'onKernelController'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['data_collector.request'] ?? ($this->privates['data_collector.request'] = new \Symfony\Component\HttpKernel\DataCollector\RequestDataCollector()));
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['debug.debug_handlers_listener'] ?? $this->getDebug_DebugHandlersListenerService());
        }, 1 => 'configure'], 2048);
        $instance->addListener('console.command', [0 => function () {
            return ($this->privates['debug.debug_handlers_listener'] ?? $this->getDebug_DebugHandlersListenerService());
        }, 1 => 'configure'], 2048);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['router_listener'] ?? $this->getRouterListenerService());
        }, 1 => 'onKernelRequest'], 32);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ($this->privates['router_listener'] ?? $this->getRouterListenerService());
        }, 1 => 'onKernelFinishRequest'], 0);
        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->privates['router_listener'] ?? $this->getRouterListenerService());
        }, 1 => 'onKernelException'], -64);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['web_link.add_link_header_listener'] ?? ($this->privates['web_link.add_link_header_listener'] = new \Symfony\Component\WebLink\EventListener\AddLinkHeaderListener()));
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('kernel.controller', [0 => function () {
            return ($this->privates['sensio_framework_extra.controller.listener'] ?? $this->getSensioFrameworkExtra_Controller_ListenerService());
        }, 1 => 'onKernelController'], 0);
        $instance->addListener('kernel.controller', [0 => function () {
            return ($this->privates['sensio_framework_extra.converter.listener'] ?? $this->getSensioFrameworkExtra_Converter_ListenerService());
        }, 1 => 'onKernelController'], 0);
        $instance->addListener('kernel.controller', [0 => function () {
            return ($this->privates['sensio_framework_extra.view.listener'] ?? $this->getSensioFrameworkExtra_View_ListenerService());
        }, 1 => 'onKernelController'], -128);
        $instance->addListener('kernel.view', [0 => function () {
            return ($this->privates['sensio_framework_extra.view.listener'] ?? $this->getSensioFrameworkExtra_View_ListenerService());
        }, 1 => 'onKernelView'], 0);
        $instance->addListener('kernel.controller', [0 => function () {
            return ($this->privates['sensio_framework_extra.cache.listener'] ?? ($this->privates['sensio_framework_extra.cache.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener()));
        }, 1 => 'onKernelController'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['sensio_framework_extra.cache.listener'] ?? ($this->privates['sensio_framework_extra.cache.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener()));
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('kernel.controller_arguments', [0 => function () {
            return ($this->privates['sensio_framework_extra.security.listener'] ?? $this->getSensioFrameworkExtra_Security_ListenerService());
        }, 1 => 'onKernelControllerArguments'], 0);
        $instance->addListener('kernel.controller_arguments', [0 => function () {
            return ($this->privates['framework_extra_bundle.event.is_granted'] ?? $this->getFrameworkExtraBundle_Event_IsGrantedService());
        }, 1 => 'onKernelControllerArguments'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['security.rememberme.response_listener'] ?? ($this->privates['security.rememberme.response_listener'] = new \Symfony\Component\Security\Http\RememberMe\ResponseListener()));
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['debug.security.firewall'] ?? $this->getDebug_Security_FirewallService());
        }, 1 => 'onKernelRequest'], 8);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ($this->privates['debug.security.firewall'] ?? $this->getDebug_Security_FirewallService());
        }, 1 => 'onKernelFinishRequest'], 0);
        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->privates['swiftmailer.email_sender.listener'] ?? $this->load('getSwiftmailer_EmailSender_ListenerService.php'));
        }, 1 => 'onException'], 0);
        $instance->addListener('kernel.terminate', [0 => function () {
            return ($this->privates['swiftmailer.email_sender.listener'] ?? $this->load('getSwiftmailer_EmailSender_ListenerService.php'));
        }, 1 => 'onTerminate'], 0);
        $instance->addListener('console.error', [0 => function () {
            return ($this->privates['swiftmailer.email_sender.listener'] ?? $this->load('getSwiftmailer_EmailSender_ListenerService.php'));
        }, 1 => 'onException'], 0);
        $instance->addListener('console.terminate', [0 => function () {
            return ($this->privates['swiftmailer.email_sender.listener'] ?? $this->load('getSwiftmailer_EmailSender_ListenerService.php'));
        }, 1 => 'onTerminate'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['web_profiler.debug_toolbar'] ?? $this->getWebProfiler_DebugToolbarService());
        }, 1 => 'onKernelResponse'], -128);
        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->privates['twig.exception_listener'] ?? $this->load('getTwig_ExceptionListenerService.php'));
        }, 1 => 'logKernelException'], 0);
        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->privates['twig.exception_listener'] ?? $this->load('getTwig_ExceptionListenerService.php'));
        }, 1 => 'onKernelException'], -128);
        $instance->addListener('console.command', [0 => function () {
            return ($this->privates['monolog.handler.console'] ?? ($this->privates['monolog.handler.console'] = new \Symfony\Bridge\Monolog\Handler\ConsoleHandler(NULL, true, [])));
        }, 1 => 'onCommand'], 255);
        $instance->addListener('console.terminate', [0 => function () {
            return ($this->privates['monolog.handler.console'] ?? ($this->privates['monolog.handler.console'] = new \Symfony\Bridge\Monolog\Handler\ConsoleHandler(NULL, true, [])));
        }, 1 => 'onTerminate'], -255);
        $instance->addListener('console.command', [0 => function () {
            return ($this->privates['debug.dump_listener'] ?? $this->load('getDebug_DumpListenerService.php'));
        }, 1 => 'configure'], 1024);
        $instance->addListener('console.error', [0 => function () {
            return ($this->privates['maker.console_error_listener'] ?? ($this->privates['maker.console_error_listener'] = new \Symfony\Bundle\MakerBundle\Event\ConsoleErrorSubscriber()));
        }, 1 => 'onConsoleError'], 0);
        $instance->addListener('console.terminate', [0 => function () {
            return ($this->privates['maker.console_error_listener'] ?? ($this->privates['maker.console_error_listener'] = new \Symfony\Bundle\MakerBundle\Event\ConsoleErrorSubscriber()));
        }, 1 => 'onConsoleTerminate'], 0);

        return $instance;
    }

    /**
     * Gets the public 'http_kernel' shared service.
     *
     * @return \Symfony\Component\HttpKernel\HttpKernel
     */
    protected function getHttpKernelService()
    {
        return $this->services['http_kernel'] = new \Symfony\Component\HttpKernel\HttpKernel(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), ($this->privates['debug.controller_resolver'] ?? $this->getDebug_ControllerResolverService()), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), new \Symfony\Component\HttpKernel\Controller\TraceableArgumentResolver(new \Symfony\Component\HttpKernel\Controller\ArgumentResolver(($this->privates['argument_metadata_factory'] ?? ($this->privates['argument_metadata_factory'] = new \Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory())), new RewindableGenerator(function () {
            yield 0 => ($this->privates['debug.argument_resolver.request_attribute'] ?? $this->load('getDebug_ArgumentResolver_RequestAttributeService.php'));
            yield 1 => ($this->privates['debug.argument_resolver.request'] ?? $this->load('getDebug_ArgumentResolver_RequestService.php'));
            yield 2 => ($this->privates['debug.argument_resolver.session'] ?? $this->load('getDebug_ArgumentResolver_SessionService.php'));
            yield 3 => ($this->privates['debug.security.user_value_resolver'] ?? $this->load('getDebug_Security_UserValueResolverService.php'));
            yield 4 => ($this->privates['debug.argument_resolver.service'] ?? $this->load('getDebug_ArgumentResolver_ServiceService.php'));
            yield 5 => ($this->privates['debug.argument_resolver.default'] ?? $this->load('getDebug_ArgumentResolver_DefaultService.php'));
            yield 6 => ($this->privates['debug.argument_resolver.variadic'] ?? $this->load('getDebug_ArgumentResolver_VariadicService.php'));
        }, 7)), ($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true)))));
    }

    /**
     * Gets the public 'overblog_graphql.cache_compiler' shared service.
     *
     * @return \Overblog\GraphQLBundle\Generator\TypeGenerator
     */
    protected function getOverblogGraphql_CacheCompilerService()
    {
        $this->services['overblog_graphql.cache_compiler'] = $instance = new \Overblog\GraphQLBundle\Generator\TypeGenerator('Overblog\\GraphQLBundle\\__DEFINITIONS__', [0 => ($this->targetDirs[3].'/vendor/overblog/graphql-bundle/src/Resources/skeleton')], NULL, $this->parameters['overblog_graphql_types.config'], true, NULL, $this->targetDirs[0], NULL);

        $a = new \Overblog\GraphQLBundle\ExpressionLanguage\ExpressionLanguage(NULL);
        $a->addGlobalName('globalVariable->get(\'typeResolver\')', 'typeResolver');
        $a->addFunction(new \Overblog\GraphQLBundle\ExpressionLanguage\ExpressionFunction\Security\GetUser());
        $a->addFunction(new \Overblog\GraphQLBundle\ExpressionLanguage\ExpressionFunction\Security\HasAnyPermission());
        $a->addFunction(new \Overblog\GraphQLBundle\ExpressionLanguage\ExpressionFunction\Security\HasAnyRole());
        $a->addFunction(new \Overblog\GraphQLBundle\ExpressionLanguage\ExpressionFunction\Security\HasPermission());
        $a->addFunction(new \Overblog\GraphQLBundle\ExpressionLanguage\ExpressionFunction\Security\HasRole());
        $a->addFunction(new \Overblog\GraphQLBundle\ExpressionLanguage\ExpressionFunction\Security\IsAnonymous());
        $a->addFunction(new \Overblog\GraphQLBundle\ExpressionLanguage\ExpressionFunction\Security\IsAuthenticated());
        $a->addFunction(new \Overblog\GraphQLBundle\ExpressionLanguage\ExpressionFunction\Security\IsFullyAuthenticated());
        $a->addFunction(new \Overblog\GraphQLBundle\ExpressionLanguage\ExpressionFunction\Security\IsRememberMe());
        $a->addFunction(new \Overblog\GraphQLBundle\ExpressionLanguage\ExpressionFunction\DependencyInjection\Parameter());
        $a->addFunction(new \Overblog\GraphQLBundle\ExpressionLanguage\ExpressionFunction\DependencyInjection\Service());
        $a->addFunction(new \Overblog\GraphQLBundle\ExpressionLanguage\ExpressionFunction\GraphQL\IsTypeOf());
        $a->addFunction(new \Overblog\GraphQLBundle\ExpressionLanguage\ExpressionFunction\GraphQL\Mutation());
        $a->addFunction(new \Overblog\GraphQLBundle\ExpressionLanguage\ExpressionFunction\GraphQL\Resolver());
        $a->addFunction(new \Overblog\GraphQLBundle\ExpressionLanguage\ExpressionFunction\NewObject());
        $a->addFunction(new \Overblog\GraphQLBundle\ExpressionLanguage\ExpressionFunction\GraphQL\Relay\FromGlobalID());
        $a->addFunction(new \Overblog\GraphQLBundle\ExpressionLanguage\ExpressionFunction\GraphQL\Relay\GlobalID());
        $a->addFunction(new \Overblog\GraphQLBundle\ExpressionLanguage\ExpressionFunction\GraphQL\Relay\IdFetcherCallback());
        $a->addFunction(new \Overblog\GraphQLBundle\ExpressionLanguage\ExpressionFunction\GraphQL\Relay\MutateAndGetPayloadCallback());
        $a->addFunction(new \Overblog\GraphQLBundle\ExpressionLanguage\ExpressionFunction\GraphQL\Relay\ResolveSingleInputCallback());
        $a->addFunction(new \Overblog\GraphQLBundle\ExpressionLanguage\ExpressionFunction\DependencyInjection\Parameter('param'));
        $a->addFunction(new \Overblog\GraphQLBundle\ExpressionLanguage\ExpressionFunction\DependencyInjection\Service('serv'));
        $a->addFunction(new \Overblog\GraphQLBundle\ExpressionLanguage\ExpressionFunction\GraphQL\Mutation('mut'));
        $a->addFunction(new \Overblog\GraphQLBundle\ExpressionLanguage\ExpressionFunction\GraphQL\Resolver('res'));

        $instance->addUseStatement('Overblog\\GraphQLBundle\\Definition\\ConfigProcessor');
        $instance->addUseStatement('Overblog\\GraphQLBundle\\Definition\\LazyConfig');
        $instance->addUseStatement('Overblog\\GraphQLBundle\\Definition\\GlobalVariables');
        $instance->addImplement('Overblog\\GraphQLBundle\\Definition\\Type\\GeneratedTypeInterface');
        $instance->setExpressionLanguage($a);

        return $instance;
    }

    /**
     * Gets the public 'overblog_graphql.event_listener.classloader_listener' shared service.
     *
     * @return \Overblog\GraphQLBundle\EventListener\ClassLoaderListener
     */
    protected function getOverblogGraphql_EventListener_ClassloaderListenerService()
    {
        return $this->services['overblog_graphql.event_listener.classloader_listener'] = new \Overblog\GraphQLBundle\EventListener\ClassLoaderListener(($this->services['overblog_graphql.cache_compiler'] ?? $this->getOverblogGraphql_CacheCompilerService()));
    }

    /**
     * Gets the public 'profiler' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Profiler\Profiler
     */
    protected function getProfilerService()
    {
        $a = new \Symfony\Bridge\Monolog\Logger('profiler');
        $a->pushProcessor(($this->privates['debug.log_processor'] ?? $this->getDebug_LogProcessorService()));
        $a->pushHandler(($this->privates['monolog.handler.console'] ?? ($this->privates['monolog.handler.console'] = new \Symfony\Bridge\Monolog\Handler\ConsoleHandler(NULL, true, []))));
        $a->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));

        $this->services['profiler'] = $instance = new \Symfony\Component\HttpKernel\Profiler\Profiler(new \Symfony\Component\HttpKernel\Profiler\FileProfilerStorage(('file:'.$this->targetDirs[0].'/profiler')), $a, true);

        $b = ($this->services['kernel'] ?? $this->get('kernel'));
        $c = new \Symfony\Component\Cache\DataCollector\CacheDataCollector();
        $c->addInstance('cache.app', ($this->services['cache.app'] ?? $this->getCache_AppService()));
        $c->addInstance('cache.system', ($this->services['cache.system'] ?? $this->getCache_SystemService()));
        $c->addInstance('cache.validator', ($this->privates['cache.validator'] ?? $this->getCache_ValidatorService()));
        $c->addInstance('cache.serializer', ($this->privates['cache.serializer'] ?? $this->getCache_SerializerService()));
        $c->addInstance('cache.annotations', ($this->privates['cache.annotations'] ?? $this->getCache_AnnotationsService()));
        $c->addInstance('cache.security_expression_language', ($this->privates['cache.security_expression_language'] ?? $this->getCache_SecurityExpressionLanguageService()));
        $d = new \Doctrine\Bundle\DoctrineBundle\DataCollector\DoctrineDataCollector(($this->services['doctrine'] ?? $this->getDoctrineService()));
        $d->addLogger('default', ($this->privates['doctrine.dbal.logger.profiling.default'] ?? ($this->privates['doctrine.dbal.logger.profiling.default'] = new \Doctrine\DBAL\Logging\DebugStack())));
        $d->addLogger('lp_perl', ($this->privates['doctrine.dbal.logger.profiling.lp_perl'] ?? ($this->privates['doctrine.dbal.logger.profiling.lp_perl'] = new \Doctrine\DBAL\Logging\DebugStack())));
        $e = new \Symfony\Component\HttpKernel\DataCollector\ConfigDataCollector();
        if ($this->has('kernel')) {
            $e->setKernel($b);
        }

        $instance->add(($this->privates['data_collector.request'] ?? ($this->privates['data_collector.request'] = new \Symfony\Component\HttpKernel\DataCollector\RequestDataCollector())));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\TimeDataCollector($b, ($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true)))));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\MemoryDataCollector());
        $instance->add(new \Symfony\Component\Validator\DataCollector\ValidatorDataCollector(($this->services['validator'] ?? $this->getValidatorService())));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\AjaxDataCollector());
        $instance->add(($this->privates['data_collector.form'] ?? $this->getDataCollector_FormService()));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\ExceptionDataCollector());
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\LoggerDataCollector($a, ($this->targetDirs[0].'/srcDevDebugProjectContainer'), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()))));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\EventDataCollector(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService())));
        $instance->add(($this->privates['data_collector.router'] ?? ($this->privates['data_collector.router'] = new \Symfony\Bundle\FrameworkBundle\DataCollector\RouterDataCollector())));
        $instance->add($c);
        $instance->add(new \Symfony\Component\Translation\DataCollector\TranslationDataCollector(($this->services['translator'] ?? $this->getTranslatorService())));
        $instance->add(new \Symfony\Bundle\SecurityBundle\DataCollector\SecurityDataCollector(($this->services['security.token_storage'] ?? ($this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())), ($this->privates['security.role_hierarchy'] ?? ($this->privates['security.role_hierarchy'] = new \Symfony\Component\Security\Core\Role\RoleHierarchy([]))), ($this->privates['security.logout_url_generator'] ?? $this->getSecurity_LogoutUrlGeneratorService()), ($this->privates['debug.security.access.decision_manager'] ?? $this->getDebug_Security_Access_DecisionManagerService()), ($this->privates['security.firewall.map'] ?? $this->getSecurity_Firewall_MapService()), ($this->privates['debug.security.firewall'] ?? $this->getDebug_Security_FirewallService())));
        $instance->add(new \Symfony\Bridge\Twig\DataCollector\TwigDataCollector(($this->privates['twig.profile'] ?? ($this->privates['twig.profile'] = new \Twig\Profiler\Profile())), ($this->services['twig'] ?? $this->getTwigService())));
        $instance->add($d);
        $instance->add(new \Symfony\Bundle\SwiftmailerBundle\DataCollector\MessageDataCollector($this));
        $instance->add(($this->services['data_collector.dump'] ?? $this->getDataCollector_DumpService()));
        $instance->add(new \EasyCorp\Bundle\EasyAdminBundle\DataCollector\EasyAdminDataCollector(($this->services['easyadmin.config.manager'] ?? $this->getEasyadmin_Config_ManagerService())));
        $instance->add(new \Vich\UploaderBundle\DataCollector\MappingCollector(($this->privates['vich_uploader.metadata_reader'] ?? $this->getVichUploader_MetadataReaderService())));
        $instance->add($e);

        return $instance;
    }

    /**
     * Gets the public 'request_stack' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\RequestStack
     */
    protected function getRequestStackService()
    {
        return $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack();
    }

    /**
     * Gets the public 'router' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Routing\Router
     */
    protected function getRouterService()
    {
        $a = new \Symfony\Bridge\Monolog\Logger('router');
        $a->pushProcessor(($this->privates['debug.log_processor'] ?? $this->getDebug_LogProcessorService()));
        $a->pushHandler(($this->privates['monolog.handler.console'] ?? ($this->privates['monolog.handler.console'] = new \Symfony\Bridge\Monolog\Handler\ConsoleHandler(NULL, true, []))));
        $a->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));

        $this->services['router'] = $instance = new \Symfony\Bundle\FrameworkBundle\Routing\Router((new \Symfony\Component\DependencyInjection\ServiceLocator(['routing.loader' => function (): \Symfony\Component\Config\Loader\LoaderInterface {
            return ($this->services['routing.loader'] ?? $this->load('getRouting_LoaderService.php'));
        }]))->withContext('router.default', $this), 'kernel::loadRoutes', ['cache_dir' => $this->targetDirs[0], 'debug' => true, 'generator_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator', 'generator_base_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator', 'generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\PhpGeneratorDumper', 'generator_cache_class' => 'srcDevDebugProjectContainerUrlGenerator', 'matcher_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher', 'matcher_base_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher', 'matcher_dumper_class' => 'Symfony\\Component\\Routing\\Matcher\\Dumper\\PhpMatcherDumper', 'matcher_cache_class' => 'srcDevDebugProjectContainerUrlMatcher', 'strict_requirements' => true, 'resource_type' => 'service'], ($this->privates['router.request_context'] ?? $this->getRouter_RequestContextService()), ($this->privates['parameter_bag'] ?? ($this->privates['parameter_bag'] = new \Symfony\Component\DependencyInjection\ParameterBag\ContainerBag($this))), $a);

        $instance->setConfigCacheFactory(($this->privates['config_cache_factory'] ?? $this->getConfigCacheFactoryService()));

        return $instance;
    }

    /**
     * Gets the public 'security.authorization_checker' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\AuthorizationChecker
     */
    protected function getSecurity_AuthorizationCheckerService()
    {
        return $this->services['security.authorization_checker'] = new \Symfony\Component\Security\Core\Authorization\AuthorizationChecker(($this->services['security.token_storage'] ?? ($this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())), ($this->privates['security.authentication.manager'] ?? $this->getSecurity_Authentication_ManagerService()), ($this->privates['debug.security.access.decision_manager'] ?? $this->getDebug_Security_Access_DecisionManagerService()), false);
    }

    /**
     * Gets the public 'security.token_storage' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage
     */
    protected function getSecurity_TokenStorageService()
    {
        return $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage();
    }

    /**
     * Gets the public 'translator' shared service.
     *
     * @return \Symfony\Component\Translation\DataCollectorTranslator
     */
    protected function getTranslatorService()
    {
        $a = new \Symfony\Bundle\FrameworkBundle\Translation\Translator(new \Symfony\Component\DependencyInjection\ServiceLocator(['translation.loader.csv' => function () {
            return ($this->privates['translation.loader.csv'] ?? ($this->privates['translation.loader.csv'] = new \Symfony\Component\Translation\Loader\CsvFileLoader()));
        }, 'translation.loader.dat' => function () {
            return ($this->privates['translation.loader.dat'] ?? ($this->privates['translation.loader.dat'] = new \Symfony\Component\Translation\Loader\IcuDatFileLoader()));
        }, 'translation.loader.ini' => function () {
            return ($this->privates['translation.loader.ini'] ?? ($this->privates['translation.loader.ini'] = new \Symfony\Component\Translation\Loader\IniFileLoader()));
        }, 'translation.loader.json' => function () {
            return ($this->privates['translation.loader.json'] ?? ($this->privates['translation.loader.json'] = new \Symfony\Component\Translation\Loader\JsonFileLoader()));
        }, 'translation.loader.mo' => function () {
            return ($this->privates['translation.loader.mo'] ?? ($this->privates['translation.loader.mo'] = new \Symfony\Component\Translation\Loader\MoFileLoader()));
        }, 'translation.loader.php' => function () {
            return ($this->privates['translation.loader.php'] ?? ($this->privates['translation.loader.php'] = new \Symfony\Component\Translation\Loader\PhpFileLoader()));
        }, 'translation.loader.po' => function () {
            return ($this->privates['translation.loader.po'] ?? ($this->privates['translation.loader.po'] = new \Symfony\Component\Translation\Loader\PoFileLoader()));
        }, 'translation.loader.qt' => function () {
            return ($this->privates['translation.loader.qt'] ?? ($this->privates['translation.loader.qt'] = new \Symfony\Component\Translation\Loader\QtFileLoader()));
        }, 'translation.loader.res' => function () {
            return ($this->privates['translation.loader.res'] ?? ($this->privates['translation.loader.res'] = new \Symfony\Component\Translation\Loader\IcuResFileLoader()));
        }, 'translation.loader.xliff' => function () {
            return ($this->privates['translation.loader.xliff'] ?? ($this->privates['translation.loader.xliff'] = new \Symfony\Component\Translation\Loader\XliffFileLoader()));
        }, 'translation.loader.yml' => function () {
            return ($this->privates['translation.loader.yml'] ?? ($this->privates['translation.loader.yml'] = new \Symfony\Component\Translation\Loader\YamlFileLoader()));
        }]), new \Symfony\Component\Translation\Formatter\MessageFormatter(new \Symfony\Component\Translation\MessageSelector()), 'en', ['translation.loader.php' => [0 => 'php'], 'translation.loader.yml' => [0 => 'yaml', 1 => 'yml'], 'translation.loader.xliff' => [0 => 'xlf', 1 => 'xliff'], 'translation.loader.po' => [0 => 'po'], 'translation.loader.mo' => [0 => 'mo'], 'translation.loader.qt' => [0 => 'ts'], 'translation.loader.csv' => [0 => 'csv'], 'translation.loader.res' => [0 => 'res'], 'translation.loader.dat' => [0 => 'dat'], 'translation.loader.ini' => [0 => 'ini'], 'translation.loader.json' => [0 => 'json']], ['cache_dir' => ($this->targetDirs[0].'/translations'), 'debug' => true, 'resource_files' => ['af' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.af.xlf')], 'ar' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.ar.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.ar.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.ar.xlf'), 3 => ($this->targetDirs[3].'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.ar.xlf'), 4 => ($this->targetDirs[3].'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/messages.ar.xlf'), 5 => ($this->targetDirs[3].'/vendor/vich/uploader-bundle/Resources/translations/VichUploaderBundle.ar.yml')], 'az' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.az.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.az.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.az.xlf')], 'bg' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.bg.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.bg.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.bg.xlf'), 3 => ($this->targetDirs[3].'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.bg.xlf'), 4 => ($this->targetDirs[3].'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/messages.bg.xlf'), 5 => ($this->targetDirs[3].'/vendor/vich/uploader-bundle/Resources/translations/VichUploaderBundle.bg.yml')], 'ca' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.ca.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.ca.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.ca.xlf'), 3 => ($this->targetDirs[3].'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.ca.xlf'), 4 => ($this->targetDirs[3].'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/messages.ca.xlf'), 5 => ($this->targetDirs[3].'/vendor/vich/uploader-bundle/Resources/translations/VichUploaderBundle.ca.yml')], 'cs' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.cs.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.cs.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.cs.xlf'), 3 => ($this->targetDirs[3].'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.cs.xlf'), 4 => ($this->targetDirs[3].'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/messages.cs.xlf'), 5 => ($this->targetDirs[3].'/vendor/vich/uploader-bundle/Resources/translations/VichUploaderBundle.cs.yml')], 'cy' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.cy.xlf')], 'da' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.da.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.da.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.da.xlf'), 3 => ($this->targetDirs[3].'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.da.xlf'), 4 => ($this->targetDirs[3].'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/messages.da.xlf')], 'de' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.de.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.de.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.de.xlf'), 3 => ($this->targetDirs[3].'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.de.xlf'), 4 => ($this->targetDirs[3].'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/messages.de.xlf'), 5 => ($this->targetDirs[3].'/vendor/vich/uploader-bundle/Resources/translations/VichUploaderBundle.de.yml')], 'el' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.el.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.el.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.el.xlf'), 3 => ($this->targetDirs[3].'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.el.xlf'), 4 => ($this->targetDirs[3].'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/messages.el.xlf')], 'en' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.en.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.en.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.en.xlf'), 3 => ($this->targetDirs[3].'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.en.xlf'), 4 => ($this->targetDirs[3].'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/messages.en.xlf'), 5 => ($this->targetDirs[3].'/vendor/vich/uploader-bundle/Resources/translations/VichUploaderBundle.en.yml')], 'es' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.es.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.es.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.es.xlf'), 3 => ($this->targetDirs[3].'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.es.xlf'), 4 => ($this->targetDirs[3].'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/messages.es.xlf'), 5 => ($this->targetDirs[3].'/vendor/vich/uploader-bundle/Resources/translations/VichUploaderBundle.es.yml')], 'et' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.et.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.et.xlf')], 'eu' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.eu.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.eu.xlf'), 2 => ($this->targetDirs[3].'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.eu.xlf'), 3 => ($this->targetDirs[3].'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/messages.eu.xlf')], 'fa' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.fa.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.fa.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.fa.xlf'), 3 => ($this->targetDirs[3].'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.fa.xlf'), 4 => ($this->targetDirs[3].'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/messages.fa.xlf')], 'fi' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.fi.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.fi.xlf'), 2 => ($this->targetDirs[3].'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.fi.xlf'), 3 => ($this->targetDirs[3].'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/messages.fi.xlf'), 4 => ($this->targetDirs[3].'/vendor/vich/uploader-bundle/Resources/translations/VichUploaderBundle.fi.yml')], 'fr' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.fr.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.fr.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.fr.xlf'), 3 => ($this->targetDirs[3].'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.fr.xlf'), 4 => ($this->targetDirs[3].'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/messages.fr.xlf'), 5 => ($this->targetDirs[3].'/vendor/vich/uploader-bundle/Resources/translations/VichUploaderBundle.fr.yml')], 'gl' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.gl.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.gl.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.gl.xlf'), 3 => ($this->targetDirs[3].'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.gl.xlf'), 4 => ($this->targetDirs[3].'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/messages.gl.xlf')], 'he' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.he.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.he.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.he.xlf')], 'hr' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.hr.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.hr.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.hr.xlf'), 3 => ($this->targetDirs[3].'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.hr.xlf'), 4 => ($this->targetDirs[3].'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/messages.hr.xlf')], 'hu' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.hu.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.hu.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.hu.xlf'), 3 => ($this->targetDirs[3].'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.hu.xlf'), 4 => ($this->targetDirs[3].'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/messages.hu.xlf'), 5 => ($this->targetDirs[3].'/vendor/vich/uploader-bundle/Resources/translations/VichUploaderBundle.hu.yml')], 'hy' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.hy.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.hy.xlf')], 'id' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.id.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.id.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.id.xlf')], 'it' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.it.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.it.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.it.xlf'), 3 => ($this->targetDirs[3].'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.it.xlf'), 4 => ($this->targetDirs[3].'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/messages.it.xlf'), 5 => ($this->targetDirs[3].'/vendor/vich/uploader-bundle/Resources/translations/VichUploaderBundle.it.yml')], 'ja' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.ja.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.ja.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.ja.xlf')], 'lb' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.lb.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.lb.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.lb.xlf')], 'lt' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.lt.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.lt.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.lt.xlf'), 3 => ($this->targetDirs[3].'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.lt.xlf'), 4 => ($this->targetDirs[3].'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/messages.lt.xlf')], 'lv' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.lv.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.lv.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.lv.xlf')], 'mn' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.mn.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.mn.xlf')], 'nb' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.nb.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.nb.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.nb.xlf')], 'nl' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.nl.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.nl.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.nl.xlf'), 3 => ($this->targetDirs[3].'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.nl.xlf'), 4 => ($this->targetDirs[3].'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/messages.nl.xlf')], 'nn' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.nn.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.nn.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.nn.xlf')], 'no' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.no.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.no.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.no.xlf')], 'pl' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.pl.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.pl.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.pl.xlf'), 3 => ($this->targetDirs[3].'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.pl.xlf'), 4 => ($this->targetDirs[3].'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/messages.pl.xlf'), 5 => ($this->targetDirs[3].'/vendor/vich/uploader-bundle/Resources/translations/VichUploaderBundle.pl.yml')], 'pt' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.pt.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.pt.xlf'), 2 => ($this->targetDirs[3].'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.pt.xlf'), 3 => ($this->targetDirs[3].'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/messages.pt.xlf'), 4 => ($this->targetDirs[3].'/vendor/vich/uploader-bundle/Resources/translations/VichUploaderBundle.pt.yml')], 'pt_BR' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.pt_BR.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.pt_BR.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.pt_BR.xlf')], 'ro' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.ro.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.ro.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.ro.xlf'), 3 => ($this->targetDirs[3].'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.ro.xlf'), 4 => ($this->targetDirs[3].'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/messages.ro.xlf')], 'ru' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.ru.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.ru.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.ru.xlf'), 3 => ($this->targetDirs[3].'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.ru.xlf'), 4 => ($this->targetDirs[3].'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/messages.ru.xlf'), 5 => ($this->targetDirs[3].'/vendor/vich/uploader-bundle/Resources/translations/VichUploaderBundle.ru.yml')], 'sk' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.sk.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.sk.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.sk.xlf')], 'sl' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.sl.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.sl.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.sl.xlf'), 3 => ($this->targetDirs[3].'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.sl.xlf'), 4 => ($this->targetDirs[3].'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/messages.sl.xlf'), 5 => ($this->targetDirs[3].'/vendor/vich/uploader-bundle/Resources/translations/VichUploaderBundle.sl.yml')], 'sq' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.sq.xlf')], 'sr_Cyrl' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.sr_Cyrl.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.sr_Cyrl.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.sr_Cyrl.xlf')], 'sr_Latn' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.sr_Latn.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.sr_Latn.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.sr_Latn.xlf')], 'sv' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.sv.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.sv.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.sv.xlf'), 3 => ($this->targetDirs[3].'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.sv.xlf'), 4 => ($this->targetDirs[3].'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/messages.sv.xlf')], 'th' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.th.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.th.xlf')], 'tl' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.tl.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.tl.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.tl.xlf')], 'tr' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.tr.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.tr.xlf'), 2 => ($this->targetDirs[3].'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.tr.xlf'), 3 => ($this->targetDirs[3].'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/messages.tr.xlf'), 4 => ($this->targetDirs[3].'/vendor/vich/uploader-bundle/Resources/translations/VichUploaderBundle.tr.yml')], 'uk' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.uk.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.uk.xlf'), 2 => ($this->targetDirs[3].'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.uk.xlf'), 3 => ($this->targetDirs[3].'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/messages.uk.xlf'), 4 => ($this->targetDirs[3].'/vendor/vich/uploader-bundle/Resources/translations/VichUploaderBundle.uk.yml')], 'vi' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.vi.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.vi.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.vi.xlf')], 'zh_CN' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.zh_CN.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.zh_CN.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.zh_CN.xlf'), 3 => ($this->targetDirs[3].'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.zh_CN.xlf'), 4 => ($this->targetDirs[3].'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/messages.zh_CN.xlf')], 'zh_TW' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.zh_TW.xlf')], 'pt_PT' => [0 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.pt_PT.xlf')], 'ua' => [0 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.ua.xlf')], 'sr_RS' => [0 => ($this->targetDirs[3].'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.sr_RS.xlf'), 1 => ($this->targetDirs[3].'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/messages.sr_RS.xlf')]]]);
        $a->setConfigCacheFactory(($this->privates['config_cache_factory'] ?? $this->getConfigCacheFactoryService()));
        $a->setFallbackLocales([0 => 'en']);

        return $this->services['translator'] = new \Symfony\Component\Translation\DataCollectorTranslator($a);
    }

    /**
     * Gets the public 'twig' shared service.
     *
     * @return \Twig\Environment
     */
    protected function getTwigService()
    {
        $this->services['twig'] = $instance = new \Twig\Environment(($this->privates['twig.loader.native_filesystem'] ?? $this->getTwig_Loader_NativeFilesystemService()), ['default_path' => ($this->targetDirs[3].'/templates'), 'debug' => true, 'strict_variables' => true, 'exception_controller' => 'twig.controller.exception::showAction', 'form_themes' => [0 => 'form_div_layout.html.twig'], 'autoescape' => 'name', 'cache' => ($this->targetDirs[0].'/twig'), 'charset' => 'UTF-8', 'paths' => [], 'date' => ['format' => 'F j, Y H:i', 'interval_format' => '%d days', 'timezone' => NULL], 'number_format' => ['decimals' => 0, 'decimal_point' => '.', 'thousands_separator' => ',']]);

        $a = ($this->privates['security.logout_url_generator'] ?? $this->getSecurity_LogoutUrlGeneratorService());
        $b = ($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true)));
        $c = ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()));
        $d = ($this->privates['debug.file_link_formatter'] ?? $this->getDebug_FileLinkFormatterService());
        $e = new \Symfony\Component\VarDumper\Dumper\HtmlDumper(NULL, 'UTF-8', 1);
        $e->setDisplayOptions(['maxStringLength' => 4096, 'fileLinkFormat' => $d]);
        $f = new \Symfony\Bridge\Twig\AppVariable();
        $f->setEnvironment('dev');
        $f->setDebug(true);
        if ($this->has('security.token_storage')) {
            $f->setTokenStorage(($this->services['security.token_storage'] ?? ($this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())));
        }
        if ($this->has('request_stack')) {
            $f->setRequestStack($c);
        }

        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\CsrfExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\LogoutUrlExtension($a));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\SecurityExtension(($this->services['security.authorization_checker'] ?? $this->getSecurity_AuthorizationCheckerService())));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\ProfilerExtension(($this->privates['twig.profile'] ?? ($this->privates['twig.profile'] = new \Twig\Profiler\Profile())), $b));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\TranslationExtension(($this->services['translator'] ?? $this->getTranslatorService())));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\AssetExtension(new \Symfony\Component\Asset\Packages(new \Symfony\Component\Asset\PathPackage('', new \Symfony\Component\Asset\VersionStrategy\EmptyVersionStrategy(), new \Symfony\Component\Asset\Context\RequestStackContext($c, '', false)), [])));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\CodeExtension($d, ($this->targetDirs[3].'/src'), 'UTF-8'));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\RoutingExtension(($this->services['router'] ?? $this->getRouterService())));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\YamlExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\StopwatchExtension($b, true));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\ExpressionExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\HttpKernelExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\HttpFoundationExtension($c, ($this->privates['router.request_context'] ?? $this->getRouter_RequestContextService())));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\WebLinkExtension($c));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\FormExtension([0 => $this, 1 => 'twig.form.renderer']));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\DumpExtension(($this->services['var_dumper.cloner'] ?? $this->getVarDumper_ClonerService()), ($this->privates['var_dumper.html_dumper'] ?? $this->getVarDumper_HtmlDumperService())));
        $instance->addExtension(new \Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension());
        $instance->addExtension(new \Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension($e));
        $instance->addExtension(new \EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension(($this->services['easyadmin.config.manager'] ?? $this->getEasyadmin_Config_ManagerService()), ($this->services['easy_admin.property_accessor'] ?? $this->getEasyAdmin_PropertyAccessorService()), ($this->services['easyadmin.router'] ?? $this->getEasyadmin_RouterService()), true, $a));
        $instance->addExtension(new \Vich\UploaderBundle\Twig\Extension\UploaderExtension(($this->services['vich_uploader.templating.helper.uploader_helper'] ?? $this->getVichUploader_Templating_Helper_UploaderHelperService())));
        $instance->addGlobal('app', $f);
        $instance->addRuntimeLoader(new \Twig\RuntimeLoader\ContainerRuntimeLoader(new \Symfony\Component\DependencyInjection\ServiceLocator(['Symfony\\Bridge\\Twig\\Extension\\CsrfRuntime' => function () {
            return ($this->privates['twig.runtime.security_csrf'] ?? $this->load('getTwig_Runtime_SecurityCsrfService.php'));
        }, 'Symfony\\Bridge\\Twig\\Extension\\HttpKernelRuntime' => function () {
            return ($this->privates['twig.runtime.httpkernel'] ?? $this->load('getTwig_Runtime_HttpkernelService.php'));
        }, 'Symfony\\Component\\Form\\FormRenderer' => function () {
            return ($this->privates['twig.form.renderer'] ?? $this->load('getTwig_Form_RendererService.php'));
        }])));
        $instance->addGlobal('basket', ($this->services['App\Service\Twig\Basket'] ?? $this->getBasketService()));
        $instance->addGlobal('tags', new \App\Service\Twig\Tags(($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService())));
        (new \Symfony\Bundle\TwigBundle\DependencyInjection\Configurator\EnvironmentConfigurator('F j, Y H:i', '%d days', NULL, 0, '.', ','))->configure($instance);

        return $instance;
    }

    /**
     * Gets the public 'validator' shared service.
     *
     * @return \Symfony\Component\Validator\Validator\TraceableValidator
     */
    protected function getValidatorService()
    {
        return $this->services['validator'] = new \Symfony\Component\Validator\Validator\TraceableValidator(($this->privates['validator.builder'] ?? $this->getValidator_BuilderService())->getValidator());
    }

    /**
     * Gets the public 'var_dumper.cloner' shared service.
     *
     * @return \Symfony\Component\VarDumper\Cloner\VarCloner
     */
    protected function getVarDumper_ClonerService()
    {
        $this->services['var_dumper.cloner'] = $instance = new \Symfony\Component\VarDumper\Cloner\VarCloner();

        $instance->setMaxItems(2500);
        $instance->setMinDepth(1);
        $instance->setMaxString(-1);

        return $instance;
    }

    /**
     * Gets the public 'vich_uploader.templating.helper.uploader_helper' shared service.
     *
     * @return \Vich\UploaderBundle\Templating\Helper\UploaderHelper
     */
    protected function getVichUploader_Templating_Helper_UploaderHelperService()
    {
        return $this->services['vich_uploader.templating.helper.uploader_helper'] = new \Vich\UploaderBundle\Templating\Helper\UploaderHelper(($this->privates['vich_uploader.storage.file_system'] ?? $this->getVichUploader_Storage_FileSystemService()));
    }

    /**
     * Gets the public 'vich_uploader.upload_handler' shared service.
     *
     * @return \Vich\UploaderBundle\Handler\UploadHandler
     */
    protected function getVichUploader_UploadHandlerService()
    {
        $a = ($this->privates['vich_uploader.storage.file_system'] ?? $this->getVichUploader_Storage_FileSystemService());

        return $this->services['vich_uploader.upload_handler'] = new \Vich\UploaderBundle\Handler\UploadHandler(($this->privates['vich_uploader.property_mapping_factory'] ?? $this->getVichUploader_PropertyMappingFactoryService()), $a, new \Vich\UploaderBundle\Injector\FileInjector($a), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()));
    }

    /**
     * Gets the private '.service_locator.ychIlgF' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_YchIlgFService()
    {
        return $this->privates['.service_locator.ychIlgF'] = new \Symfony\Component\DependencyInjection\ServiceLocator(['doctrine' => function () {
            return ($this->services['doctrine'] ?? $this->getDoctrineService());
        }, 'form.factory' => function () {
            return ($this->services['form.factory'] ?? $this->load('getForm_FactoryService.php'));
        }, 'http_kernel' => function () {
            return ($this->services['http_kernel'] ?? $this->getHttpKernelService());
        }, 'parameter_bag' => function () {
            return ($this->privates['parameter_bag'] ?? ($this->privates['parameter_bag'] = new \Symfony\Component\DependencyInjection\ParameterBag\ContainerBag($this)));
        }, 'request_stack' => function () {
            return ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()));
        }, 'router' => function () {
            return ($this->services['router'] ?? $this->getRouterService());
        }, 'security.authorization_checker' => function () {
            return ($this->services['security.authorization_checker'] ?? $this->getSecurity_AuthorizationCheckerService());
        }, 'security.csrf.token_manager' => function () {
            return ($this->services['security.csrf.token_manager'] ?? $this->load('getSecurity_Csrf_TokenManagerService.php'));
        }, 'security.token_storage' => function () {
            return ($this->services['security.token_storage'] ?? ($this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage()));
        }, 'serializer' => function () {
            return ($this->services['serializer'] ?? $this->load('getSerializerService.php'));
        }, 'session' => function () {
            return ($this->services['session'] ?? $this->load('getSessionService.php'));
        }, 'twig' => function () {
            return ($this->services['twig'] ?? $this->getTwigService());
        }]);
    }

    /**
     * Gets the private 'annotations.cached_reader' shared service.
     *
     * @return \Doctrine\Common\Annotations\CachedReader
     */
    protected function getAnnotations_CachedReaderService()
    {
        return $this->privates['annotations.cached_reader'] = new \Doctrine\Common\Annotations\CachedReader(($this->privates['annotations.reader'] ?? $this->getAnnotations_ReaderService()), ($this->privates['annotations.cache'] ?? $this->load('getAnnotations_CacheService.php')), true);
    }

    /**
     * Gets the private 'annotations.reader' shared service.
     *
     * @return \Doctrine\Common\Annotations\AnnotationReader
     */
    protected function getAnnotations_ReaderService()
    {
        $this->privates['annotations.reader'] = $instance = new \Doctrine\Common\Annotations\AnnotationReader();

        $a = new \Doctrine\Common\Annotations\AnnotationRegistry();
        $a->registerUniqueLoader('class_exists');

        $instance->addGlobalIgnoredName('required', $a);

        return $instance;
    }

    /**
     * Gets the private 'cache.annotations' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_AnnotationsService()
    {
        return $this->privates['cache.annotations'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(\Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('grZEzMqNUP', 0, $this->getParameter('container.build_id'), ($this->targetDirs[0].'/pools'), ($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService())));
    }

    /**
     * Gets the private 'cache.security_expression_language' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_SecurityExpressionLanguageService()
    {
        return $this->privates['cache.security_expression_language'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(\Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('+oxPAH45zq', 0, $this->getParameter('container.build_id'), ($this->targetDirs[0].'/pools'), ($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService())));
    }

    /**
     * Gets the private 'cache.serializer' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_SerializerService()
    {
        return $this->privates['cache.serializer'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(\Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('zv+8GSbTe9', 0, $this->getParameter('container.build_id'), ($this->targetDirs[0].'/pools'), ($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService())));
    }

    /**
     * Gets the private 'cache.validator' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_ValidatorService()
    {
        return $this->privates['cache.validator'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(\Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('-kObdeJ+QJ', 0, $this->getParameter('container.build_id'), ($this->targetDirs[0].'/pools'), ($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService())));
    }

    /**
     * Gets the private 'config_cache_factory' shared service.
     *
     * @return \Symfony\Component\Config\ResourceCheckerConfigCacheFactory
     */
    protected function getConfigCacheFactoryService()
    {
        return $this->privates['config_cache_factory'] = new \Symfony\Component\Config\ResourceCheckerConfigCacheFactory(new RewindableGenerator(function () {
            yield 0 => ($this->privates['dependency_injection.config.container_parameters_resource_checker'] ?? ($this->privates['dependency_injection.config.container_parameters_resource_checker'] = new \Symfony\Component\DependencyInjection\Config\ContainerParametersResourceChecker($this)));
            yield 1 => ($this->privates['config.resource.self_checking_resource_checker'] ?? ($this->privates['config.resource.self_checking_resource_checker'] = new \Symfony\Component\Config\Resource\SelfCheckingResourceChecker()));
        }, 2));
    }

    /**
     * Gets the private 'data_collector.form' shared service.
     *
     * @return \Symfony\Component\Form\Extension\DataCollector\FormDataCollector
     */
    protected function getDataCollector_FormService()
    {
        return $this->privates['data_collector.form'] = new \Symfony\Component\Form\Extension\DataCollector\FormDataCollector(new \Symfony\Component\Form\Extension\DataCollector\FormDataExtractor());
    }

    /**
     * Gets the private 'debug.controller_resolver' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\TraceableControllerResolver
     */
    protected function getDebug_ControllerResolverService()
    {
        return $this->privates['debug.controller_resolver'] = new \Symfony\Component\HttpKernel\Controller\TraceableControllerResolver(new \Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver($this, ($this->privates['controller_name_converter'] ?? ($this->privates['controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser(($this->services['kernel'] ?? $this->get('kernel', 1))))), ($this->privates['monolog.logger.request'] ?? $this->getMonolog_Logger_RequestService())), ($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))));
    }

    /**
     * Gets the private 'debug.debug_handlers_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener
     */
    protected function getDebug_DebugHandlersListenerService()
    {
        $a = new \Symfony\Bridge\Monolog\Logger('php');
        $a->pushProcessor(($this->privates['debug.log_processor'] ?? $this->getDebug_LogProcessorService()));
        $a->pushHandler(($this->privates['monolog.handler.console'] ?? ($this->privates['monolog.handler.console'] = new \Symfony\Bridge\Monolog\Handler\ConsoleHandler(NULL, true, []))));
        $a->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));

        return $this->privates['debug.debug_handlers_listener'] = new \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener(NULL, $a, NULL, -1, true, ($this->privates['debug.file_link_formatter'] ?? $this->getDebug_FileLinkFormatterService()), true);
    }

    /**
     * Gets the private 'debug.file_link_formatter' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Debug\FileLinkFormatter
     */
    protected function getDebug_FileLinkFormatterService()
    {
        return $this->privates['debug.file_link_formatter'] = new \Symfony\Component\HttpKernel\Debug\FileLinkFormatter(NULL, ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), $this->targetDirs[3], function () {
            return ($this->privates['debug.file_link_formatter.url_format'] ?? $this->load('getDebug_FileLinkFormatter_UrlFormatService.php'));
        });
    }

    /**
     * Gets the private 'debug.log_processor' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Processor\DebugProcessor
     */
    protected function getDebug_LogProcessorService()
    {
        return $this->privates['debug.log_processor'] = new \Symfony\Bridge\Monolog\Processor\DebugProcessor(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
    }

    /**
     * Gets the private 'debug.security.access.decision_manager' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\TraceableAccessDecisionManager
     */
    protected function getDebug_Security_Access_DecisionManagerService()
    {
        return $this->privates['debug.security.access.decision_manager'] = new \Symfony\Component\Security\Core\Authorization\TraceableAccessDecisionManager(new \Symfony\Component\Security\Core\Authorization\AccessDecisionManager(new RewindableGenerator(function () {
            yield 0 => ($this->privates['security.access.authenticated_voter'] ?? $this->load('getSecurity_Access_AuthenticatedVoterService.php'));
            yield 1 => ($this->privates['security.access.simple_role_voter'] ?? ($this->privates['security.access.simple_role_voter'] = new \Symfony\Component\Security\Core\Authorization\Voter\RoleVoter()));
            yield 2 => ($this->privates['security.access.expression_voter'] ?? $this->load('getSecurity_Access_ExpressionVoterService.php'));
        }, 3), 'affirmative', false, true));
    }

    /**
     * Gets the private 'debug.security.firewall' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Debug\TraceableFirewallListener
     */
    protected function getDebug_Security_FirewallService()
    {
        return $this->privates['debug.security.firewall'] = new \Symfony\Bundle\SecurityBundle\Debug\TraceableFirewallListener(($this->privates['security.firewall.map'] ?? $this->getSecurity_Firewall_MapService()), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), ($this->privates['security.logout_url_generator'] ?? $this->getSecurity_LogoutUrlGeneratorService()));
    }

    /**
     * Gets the private 'doctrine.dbal.logger' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\Logger\DbalLogger
     */
    protected function getDoctrine_Dbal_LoggerService()
    {
        $a = new \Symfony\Bridge\Monolog\Logger('doctrine');
        $a->pushProcessor(($this->privates['debug.log_processor'] ?? $this->getDebug_LogProcessorService()));
        $a->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));

        return $this->privates['doctrine.dbal.logger'] = new \Symfony\Bridge\Doctrine\Logger\DbalLogger($a, ($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))));
    }

    /**
     * Gets the private 'doctrine.orm.container_repository_factory' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Repository\ContainerRepositoryFactory
     */
    protected function getDoctrine_Orm_ContainerRepositoryFactoryService()
    {
        return $this->privates['doctrine.orm.container_repository_factory'] = new \Doctrine\Bundle\DoctrineBundle\Repository\ContainerRepositoryFactory(new \Symfony\Component\DependencyInjection\ServiceLocator(['App\\Repository\\AccountRepository' => function () {
            return ($this->privates['App\Repository\AccountRepository'] ?? $this->load('getAccountRepositoryService.php'));
        }, 'App\\Repository\\AddressRepository' => function () {
            return ($this->privates['App\Repository\AddressRepository'] ?? $this->load('getAddressRepositoryService.php'));
        }, 'App\\Repository\\BannerRepository' => function () {
            return ($this->privates['App\Repository\BannerRepository'] ?? $this->load('getBannerRepositoryService.php'));
        }, 'App\\Repository\\BasketItemRepository' => function () {
            return ($this->privates['App\Repository\BasketItemRepository'] ?? $this->load('getBasketItemRepositoryService.php'));
        }, 'App\\Repository\\BasketRepository' => function () {
            return ($this->privates['App\Repository\BasketRepository'] ?? $this->load('getBasketRepositoryService.php'));
        }, 'App\\Repository\\CatalogRepository' => function () {
            return ($this->privates['App\Repository\CatalogRepository'] ?? $this->load('getCatalogRepositoryService.php'));
        }, 'App\\Repository\\CatalogTagItemRepository' => function () {
            return ($this->privates['App\Repository\CatalogTagItemRepository'] ?? $this->load('getCatalogTagItemRepositoryService.php'));
        }, 'App\\Repository\\CatalogTagItemValueRepository' => function () {
            return ($this->privates['App\Repository\CatalogTagItemValueRepository'] ?? $this->load('getCatalogTagItemValueRepositoryService.php'));
        }, 'App\\Repository\\CatalogTagRepository' => function () {
            return ($this->privates['App\Repository\CatalogTagRepository'] ?? $this->load('getCatalogTagRepositoryService.php'));
        }, 'App\\Repository\\CatalogUrlRepository' => function () {
            return ($this->privates['App\Repository\CatalogUrlRepository'] ?? $this->load('getCatalogUrlRepositoryService.php'));
        }, 'App\\Repository\\ConfigurationRepository' => function () {
            return ($this->privates['App\Repository\ConfigurationRepository'] ?? $this->load('getConfigurationRepositoryService.php'));
        }, 'App\\Repository\\DeliveryRepository' => function () {
            return ($this->privates['App\Repository\DeliveryRepository'] ?? $this->load('getDeliveryRepositoryService.php'));
        }, 'App\\Repository\\ImagesRepository' => function () {
            return ($this->privates['App\Repository\ImagesRepository'] ?? $this->load('getImagesRepositoryService.php'));
        }, 'App\\Repository\\ImportProductRepository' => function () {
            return ($this->privates['App\Repository\ImportProductRepository'] ?? $this->load('getImportProductRepositoryService.php'));
        }, 'App\\Repository\\ImportQueueRelationRepository' => function () {
            return ($this->privates['App\Repository\ImportQueueRelationRepository'] ?? $this->load('getImportQueueRelationRepositoryService.php'));
        }, 'App\\Repository\\ImportQueueRepository' => function () {
            return ($this->privates['App\Repository\ImportQueueRepository'] ?? $this->load('getImportQueueRepositoryService.php'));
        }, 'App\\Repository\\ImportRelationRepository' => function () {
            return ($this->privates['App\Repository\ImportRelationRepository'] ?? $this->load('getImportRelationRepositoryService.php'));
        }, 'App\\Repository\\MenuItemRepository' => function () {
            return ($this->privates['App\Repository\MenuItemRepository'] ?? $this->load('getMenuItemRepositoryService.php'));
        }, 'App\\Repository\\MenuRepository' => function () {
            return ($this->privates['App\Repository\MenuRepository'] ?? $this->load('getMenuRepositoryService.php'));
        }, 'App\\Repository\\OrderItemRepository' => function () {
            return ($this->privates['App\Repository\OrderItemRepository'] ?? $this->load('getOrderItemRepositoryService.php'));
        }, 'App\\Repository\\OrdersRepository' => function () {
            return ($this->privates['App\Repository\OrdersRepository'] ?? $this->load('getOrdersRepositoryService.php'));
        }, 'App\\Repository\\PaymentMethodRepository' => function () {
            return ($this->privates['App\Repository\PaymentMethodRepository'] ?? $this->load('getPaymentMethodRepositoryService.php'));
        }, 'App\\Repository\\ProductItemImageRepository' => function () {
            return ($this->privates['App\Repository\ProductItemImageRepository'] ?? $this->load('getProductItemImageRepositoryService.php'));
        }, 'App\\Repository\\ProductItemRepository' => function () {
            return ($this->privates['App\Repository\ProductItemRepository'] ?? $this->load('getProductItemRepositoryService.php'));
        }, 'App\\Repository\\ProductRepository' => function () {
            return ($this->privates['App\Repository\ProductRepository'] ?? $this->load('getProductRepositoryService.php'));
        }, 'App\\Repository\\ProductTagItemRepository' => function () {
            return ($this->privates['App\Repository\ProductTagItemRepository'] ?? $this->load('getProductTagItemRepositoryService.php'));
        }, 'App\\Repository\\ProductTagItemValueRepository' => function () {
            return ($this->privates['App\Repository\ProductTagItemValueRepository'] ?? $this->load('getProductTagItemValueRepositoryService.php'));
        }, 'App\\Repository\\ProductTagRepository' => function () {
            return ($this->privates['App\Repository\ProductTagRepository'] ?? $this->load('getProductTagRepositoryService.php'));
        }, 'App\\Repository\\ProductTagValueRepository' => function () {
            return ($this->privates['App\Repository\ProductTagValueRepository'] ?? $this->load('getProductTagValueRepositoryService.php'));
        }, 'App\\Repository\\ProductUrlRepository' => function () {
            return ($this->privates['App\Repository\ProductUrlRepository'] ?? $this->load('getProductUrlRepositoryService.php'));
        }, 'App\\Repository\\SaleRepository' => function () {
            return ($this->privates['App\Repository\SaleRepository'] ?? $this->load('getSaleRepositoryService.php'));
        }, 'App\\Repository\\TagsRepository' => function () {
            return ($this->privates['App\Repository\TagsRepository'] ?? $this->load('getTagsRepositoryService.php'));
        }, 'App\\Repository\\UrlsRepository' => function () {
            return ($this->privates['App\Repository\UrlsRepository'] ?? $this->load('getUrlsRepositoryService.php'));
        }, 'App\\Repository\\UsersRepository' => function () {
            return ($this->privates['App\Repository\UsersRepository'] ?? $this->load('getUsersRepositoryService.php'));
        }]));
    }

    /**
     * Gets the private 'doctrine.orm.default_configuration' shared service.
     *
     * @return \Doctrine\ORM\Configuration
     */
    protected function getDoctrine_Orm_DefaultConfigurationService()
    {
        $this->privates['doctrine.orm.default_configuration'] = $instance = new \Doctrine\ORM\Configuration();

        $a = new \Doctrine\Common\Persistence\Mapping\Driver\MappingDriverChain();
        $a->addDriver(new \Doctrine\ORM\Mapping\Driver\AnnotationDriver(($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService()), [0 => ($this->targetDirs[3].'/src/Entity')]), 'App\\Entity');

        $instance->setEntityNamespaces(['App' => 'App\\Entity']);
        $instance->setMetadataCacheImpl(($this->services['doctrine_cache.providers.doctrine.orm.default_metadata_cache'] ?? $this->getDoctrineCache_Providers_Doctrine_Orm_DefaultMetadataCacheService()));
        $instance->setQueryCacheImpl(($this->services['doctrine_cache.providers.doctrine.orm.default_query_cache'] ?? $this->getDoctrineCache_Providers_Doctrine_Orm_DefaultQueryCacheService()));
        $instance->setResultCacheImpl(($this->services['doctrine_cache.providers.doctrine.orm.default_result_cache'] ?? $this->getDoctrineCache_Providers_Doctrine_Orm_DefaultResultCacheService()));
        $instance->setMetadataDriverImpl($a);
        $instance->setProxyDir(($this->targetDirs[0].'/doctrine/orm/Proxies'));
        $instance->setProxyNamespace('Proxies');
        $instance->setAutoGenerateProxyClasses(false);
        $instance->setClassMetadataFactoryName('Doctrine\\ORM\\Mapping\\ClassMetadataFactory');
        $instance->setDefaultRepositoryClassName('Doctrine\\ORM\\EntityRepository');
        $instance->setNamingStrategy(($this->privates['doctrine.orm.naming_strategy.default'] ?? ($this->privates['doctrine.orm.naming_strategy.default'] = new \Doctrine\ORM\Mapping\DefaultNamingStrategy())));
        $instance->setQuoteStrategy(($this->privates['doctrine.orm.quote_strategy.default'] ?? ($this->privates['doctrine.orm.quote_strategy.default'] = new \Doctrine\ORM\Mapping\DefaultQuoteStrategy())));
        $instance->setEntityListenerResolver(new \Doctrine\Bundle\DoctrineBundle\Mapping\ContainerAwareEntityListenerResolver($this));
        $instance->setRepositoryFactory(($this->privates['doctrine.orm.container_repository_factory'] ?? $this->getDoctrine_Orm_ContainerRepositoryFactoryService()));

        return $instance;
    }

    /**
     * Gets the private 'form.registry' shared service.
     *
     * @return \Symfony\Component\Form\FormRegistry
     */
    protected function getForm_RegistryService()
    {
        return $this->privates['form.registry'] = new \Symfony\Component\Form\FormRegistry([0 => new \Symfony\Component\Form\Extension\DependencyInjection\DependencyInjectionExtension(new \Symfony\Component\DependencyInjection\ServiceLocator(['App\\Form\\Type\\Image' => function () {
            return ($this->privates['App\Form\Type\Image'] ?? ($this->privates['App\Form\Type\Image'] = new \App\Form\Type\Image()));
        }, 'App\\Form\\Type\\MultipleImage' => function () {
            return ($this->privates['App\Form\Type\MultipleImage'] ?? ($this->privates['App\Form\Type\MultipleImage'] = new \App\Form\Type\MultipleImage()));
        }, 'App\\Form\\Type\\ShippingType' => function () {
            return ($this->privates['App\Form\Type\ShippingType'] ?? ($this->privates['App\Form\Type\ShippingType'] = new \App\Form\Type\ShippingType()));
        }, 'EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\EasyAdminAutocompleteType' => function () {
            return ($this->privates['easyadmin.form.type.autocomplete'] ?? $this->load('getEasyadmin_Form_Type_AutocompleteService.php'));
        }, 'EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\EasyAdminDividerType' => function () {
            return ($this->privates['easyadmin.form.type.divider'] ?? ($this->privates['easyadmin.form.type.divider'] = new \EasyCorp\Bundle\EasyAdminBundle\Form\Type\EasyAdminDividerType()));
        }, 'EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\EasyAdminFormType' => function () {
            return ($this->privates['easyadmin.form.type'] ?? $this->load('getEasyadmin_Form_TypeService.php'));
        }, 'EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\EasyAdminGroupType' => function () {
            return ($this->privates['easyadmin.form.type.group'] ?? ($this->privates['easyadmin.form.type.group'] = new \EasyCorp\Bundle\EasyAdminBundle\Form\Type\EasyAdminGroupType()));
        }, 'EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\EasyAdminSectionType' => function () {
            return ($this->privates['easyadmin.form.type.section'] ?? ($this->privates['easyadmin.form.type.section'] = new \EasyCorp\Bundle\EasyAdminBundle\Form\Type\EasyAdminSectionType()));
        }, 'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType' => function () {
            return ($this->privates['form.type.entity'] ?? $this->load('getForm_Type_EntityService.php'));
        }, 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType' => function () {
            return ($this->privates['form.type.choice'] ?? $this->load('getForm_Type_ChoiceService.php'));
        }, 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => function () {
            return ($this->privates['form.type.form'] ?? $this->load('getForm_Type_FormService.php'));
        }, 'Vich\\UploaderBundle\\Form\\Type\\VichFileType' => function () {
            return ($this->services['vich_uploader.form.type.file'] ?? $this->load('getVichUploader_Form_Type_FileService.php'));
        }, 'Vich\\UploaderBundle\\Form\\Type\\VichImageType' => function () {
            return ($this->services['vich_uploader.form.type.image'] ?? $this->load('getVichUploader_Form_Type_ImageService.php'));
        }]), ['Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => new RewindableGenerator(function () {
            yield 0 => ($this->privates['form.type_extension.form.transformation_failure_handling'] ?? $this->load('getForm_TypeExtension_Form_TransformationFailureHandlingService.php'));
            yield 1 => ($this->privates['form.type_extension.form.http_foundation'] ?? $this->load('getForm_TypeExtension_Form_HttpFoundationService.php'));
            yield 2 => ($this->privates['form.type_extension.form.validator'] ?? $this->load('getForm_TypeExtension_Form_ValidatorService.php'));
            yield 3 => ($this->privates['form.type_extension.upload.validator'] ?? $this->load('getForm_TypeExtension_Upload_ValidatorService.php'));
            yield 4 => ($this->privates['form.type_extension.csrf'] ?? $this->load('getForm_TypeExtension_CsrfService.php'));
            yield 5 => ($this->privates['form.type_extension.form.data_collector'] ?? $this->load('getForm_TypeExtension_Form_DataCollectorService.php'));
            yield 6 => ($this->privates['easyadmin.form.type.extension'] ?? $this->load('getEasyadmin_Form_Type_ExtensionService.php'));
        }, 7), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\RepeatedType' => new RewindableGenerator(function () {
            yield 0 => ($this->privates['form.type_extension.repeated.validator'] ?? ($this->privates['form.type_extension.repeated.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension()));
        }, 1), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\SubmitType' => new RewindableGenerator(function () {
            yield 0 => ($this->privates['form.type_extension.submit.validator'] ?? ($this->privates['form.type_extension.submit.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension()));
        }, 1)], new RewindableGenerator(function () {
            yield 0 => ($this->privates['form.type_guesser.validator'] ?? $this->load('getForm_TypeGuesser_ValidatorService.php'));
            yield 1 => ($this->privates['form.type_guesser.doctrine'] ?? $this->load('getForm_TypeGuesser_DoctrineService.php'));
            yield 2 => ($this->services['easyadmin.form.guesser.missing_doctrine_orm_type_guesser'] ?? $this->load('getEasyadmin_Form_Guesser_MissingDoctrineOrmTypeGuesserService.php'));
        }, 3))], ($this->privates['form.resolved_type_factory'] ?? $this->getForm_ResolvedTypeFactoryService()));
    }

    /**
     * Gets the private 'form.resolved_type_factory' shared service.
     *
     * @return \Symfony\Component\Form\Extension\DataCollector\Proxy\ResolvedTypeFactoryDataCollectorProxy
     */
    protected function getForm_ResolvedTypeFactoryService()
    {
        return $this->privates['form.resolved_type_factory'] = new \Symfony\Component\Form\Extension\DataCollector\Proxy\ResolvedTypeFactoryDataCollectorProxy(new \Symfony\Component\Form\ResolvedFormTypeFactory(), ($this->privates['data_collector.form'] ?? $this->getDataCollector_FormService()));
    }

    /**
     * Gets the private 'framework_extra_bundle.argument_name_convertor' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Request\ArgumentNameConverter
     */
    protected function getFrameworkExtraBundle_ArgumentNameConvertorService()
    {
        return $this->privates['framework_extra_bundle.argument_name_convertor'] = new \Sensio\Bundle\FrameworkExtraBundle\Request\ArgumentNameConverter(($this->privates['argument_metadata_factory'] ?? ($this->privates['argument_metadata_factory'] = new \Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory())));
    }

    /**
     * Gets the private 'framework_extra_bundle.event.is_granted' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\IsGrantedListener
     */
    protected function getFrameworkExtraBundle_Event_IsGrantedService()
    {
        return $this->privates['framework_extra_bundle.event.is_granted'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\IsGrantedListener(($this->privates['framework_extra_bundle.argument_name_convertor'] ?? $this->getFrameworkExtraBundle_ArgumentNameConvertorService()), ($this->services['security.authorization_checker'] ?? $this->getSecurity_AuthorizationCheckerService()));
    }

    /**
     * Gets the private 'locale_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\LocaleListener
     */
    protected function getLocaleListenerService()
    {
        return $this->privates['locale_listener'] = new \Symfony\Component\HttpKernel\EventListener\LocaleListener(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), 'en', ($this->services['router'] ?? $this->getRouterService()));
    }

    /**
     * Gets the private 'monolog.handler.main' shared service.
     *
     * @return \Monolog\Handler\StreamHandler
     */
    protected function getMonolog_Handler_MainService()
    {
        $this->privates['monolog.handler.main'] = $instance = new \Monolog\Handler\StreamHandler(($this->targetDirs[2].'/log/dev.log'), 100, true, NULL);

        $instance->pushProcessor(new \Monolog\Processor\PsrLogMessageProcessor());

        return $instance;
    }

    /**
     * Gets the private 'monolog.logger' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_LoggerService()
    {
        $this->privates['monolog.logger'] = $instance = new \Symfony\Bridge\Monolog\Logger('app');

        $instance->pushProcessor(($this->privates['debug.log_processor'] ?? $this->getDebug_LogProcessorService()));
        $instance->useMicrosecondTimestamps(true);
        $instance->pushHandler(($this->privates['monolog.handler.console'] ?? ($this->privates['monolog.handler.console'] = new \Symfony\Bridge\Monolog\Handler\ConsoleHandler(NULL, true, []))));
        $instance->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));

        return $instance;
    }

    /**
     * Gets the private 'monolog.logger.cache' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_CacheService()
    {
        $this->privates['monolog.logger.cache'] = $instance = new \Symfony\Bridge\Monolog\Logger('cache');

        $instance->pushProcessor(($this->privates['debug.log_processor'] ?? $this->getDebug_LogProcessorService()));
        $instance->pushHandler(($this->privates['monolog.handler.console'] ?? ($this->privates['monolog.handler.console'] = new \Symfony\Bridge\Monolog\Handler\ConsoleHandler(NULL, true, []))));
        $instance->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));

        return $instance;
    }

    /**
     * Gets the private 'monolog.logger.request' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_RequestService()
    {
        $this->privates['monolog.logger.request'] = $instance = new \Symfony\Bridge\Monolog\Logger('request');

        $instance->pushProcessor(($this->privates['debug.log_processor'] ?? $this->getDebug_LogProcessorService()));
        $instance->pushHandler(($this->privates['monolog.handler.console'] ?? ($this->privates['monolog.handler.console'] = new \Symfony\Bridge\Monolog\Handler\ConsoleHandler(NULL, true, []))));
        $instance->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));

        return $instance;
    }

    /**
     * Gets the private 'profiler_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ProfilerListener
     */
    protected function getProfilerListenerService()
    {
        return $this->privates['profiler_listener'] = new \Symfony\Component\HttpKernel\EventListener\ProfilerListener(($this->services['profiler'] ?? $this->getProfilerService()), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), NULL, false, false);
    }

    /**
     * Gets the private 'resolve_controller_name_subscriber' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\EventListener\ResolveControllerNameSubscriber
     */
    protected function getResolveControllerNameSubscriberService()
    {
        return $this->privates['resolve_controller_name_subscriber'] = new \Symfony\Bundle\FrameworkBundle\EventListener\ResolveControllerNameSubscriber(($this->privates['controller_name_converter'] ?? ($this->privates['controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser(($this->services['kernel'] ?? $this->get('kernel', 1))))));
    }

    /**
     * Gets the private 'router.request_context' shared service.
     *
     * @return \Symfony\Component\Routing\RequestContext
     */
    protected function getRouter_RequestContextService()
    {
        return $this->privates['router.request_context'] = new \Symfony\Component\Routing\RequestContext('', 'GET', 'localhost', 'http', 80, 443);
    }

    /**
     * Gets the private 'router_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\RouterListener
     */
    protected function getRouterListenerService()
    {
        return $this->privates['router_listener'] = new \Symfony\Component\HttpKernel\EventListener\RouterListener(($this->services['router'] ?? $this->getRouterService()), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($this->privates['router.request_context'] ?? $this->getRouter_RequestContextService()), ($this->privates['monolog.logger.request'] ?? $this->getMonolog_Logger_RequestService()), $this->targetDirs[3], true);
    }

    /**
     * Gets the private 'security.authentication.manager' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager
     */
    protected function getSecurity_Authentication_ManagerService()
    {
        $this->privates['security.authentication.manager'] = $instance = new \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager(new RewindableGenerator(function () {
            yield 0 => ($this->privates['security.authentication.provider.guard.main'] ?? $this->load('getSecurity_Authentication_Provider_Guard_MainService.php'));
            yield 1 => ($this->privates['security.authentication.provider.anonymous.main'] ?? ($this->privates['security.authentication.provider.anonymous.main'] = new \Symfony\Component\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider($this->getParameter('container.build_hash'))));
        }, 2), true);

        $instance->setEventDispatcher(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()));

        return $instance;
    }

    /**
     * Gets the private 'security.firewall.map' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallMap
     */
    protected function getSecurity_Firewall_MapService()
    {
        return $this->privates['security.firewall.map'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallMap(new \Symfony\Component\DependencyInjection\ServiceLocator(['security.firewall.map.context.dev' => function () {
            return ($this->privates['security.firewall.map.context.dev'] ?? $this->load('getSecurity_Firewall_Map_Context_DevService.php'));
        }, 'security.firewall.map.context.main' => function () {
            return ($this->privates['security.firewall.map.context.main'] ?? $this->load('getSecurity_Firewall_Map_Context_MainService.php'));
        }]), new RewindableGenerator(function () {
            yield 'security.firewall.map.context.dev' => ($this->privates['.security.request_matcher.zfHj2lW'] ?? ($this->privates['.security.request_matcher.zfHj2lW'] = new \Symfony\Component\HttpFoundation\RequestMatcher('^/(_(profiler|wdt)|css|images|js)/')));
            yield 'security.firewall.map.context.main' => NULL;
        }, 2));
    }

    /**
     * Gets the private 'security.logout_url_generator' shared service.
     *
     * @return \Symfony\Component\Security\Http\Logout\LogoutUrlGenerator
     */
    protected function getSecurity_LogoutUrlGeneratorService()
    {
        $this->privates['security.logout_url_generator'] = $instance = new \Symfony\Component\Security\Http\Logout\LogoutUrlGenerator(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($this->services['router'] ?? $this->getRouterService()), ($this->services['security.token_storage'] ?? ($this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())));

        $instance->registerListener('main', 'app_logout', 'logout', '_csrf_token', NULL, NULL);

        return $instance;
    }

    /**
     * Gets the private 'sensio_framework_extra.controller.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener
     */
    protected function getSensioFrameworkExtra_Controller_ListenerService()
    {
        return $this->privates['sensio_framework_extra.controller.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener(($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService()));
    }

    /**
     * Gets the private 'sensio_framework_extra.converter.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener
     */
    protected function getSensioFrameworkExtra_Converter_ListenerService()
    {
        $a = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager();
        $a->add(new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter(($this->services['doctrine'] ?? $this->getDoctrineService()), new \Symfony\Component\ExpressionLanguage\ExpressionLanguage()), 0, 'doctrine.orm');
        $a->add(new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter(), 0, 'datetime');

        return $this->privates['sensio_framework_extra.converter.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener($a, true);
    }

    /**
     * Gets the private 'sensio_framework_extra.security.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener
     */
    protected function getSensioFrameworkExtra_Security_ListenerService()
    {
        return $this->privates['sensio_framework_extra.security.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener(($this->privates['framework_extra_bundle.argument_name_convertor'] ?? $this->getFrameworkExtraBundle_ArgumentNameConvertorService()), new \Sensio\Bundle\FrameworkExtraBundle\Security\ExpressionLanguage(), ($this->privates['security.authentication.trust_resolver'] ?? ($this->privates['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver('Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken', 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken'))), ($this->privates['security.role_hierarchy'] ?? ($this->privates['security.role_hierarchy'] = new \Symfony\Component\Security\Core\Role\RoleHierarchy([]))), ($this->services['security.token_storage'] ?? ($this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())), ($this->services['security.authorization_checker'] ?? $this->getSecurity_AuthorizationCheckerService()), ($this->privates['monolog.logger'] ?? $this->getMonolog_LoggerService()));
    }

    /**
     * Gets the private 'sensio_framework_extra.view.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener
     */
    protected function getSensioFrameworkExtra_View_ListenerService()
    {
        return $this->privates['sensio_framework_extra.view.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener(new \Sensio\Bundle\FrameworkExtraBundle\Templating\TemplateGuesser(($this->services['kernel'] ?? $this->get('kernel', 1))), ($this->services['twig'] ?? $this->getTwigService()));
    }

    /**
     * Gets the private 'session_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\SessionListener
     */
    protected function getSessionListenerService()
    {
        return $this->privates['session_listener'] = new \Symfony\Component\HttpKernel\EventListener\SessionListener(new \Symfony\Component\DependencyInjection\ServiceLocator(['initialized_session' => function () {
            return ($this->services['session'] ?? null);
        }, 'session' => function () {
            return ($this->services['session'] ?? $this->load('getSessionService.php'));
        }]));
    }

    /**
     * Gets the private 'translator_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\TranslatorListener
     */
    protected function getTranslatorListenerService()
    {
        return $this->privates['translator_listener'] = new \Symfony\Component\HttpKernel\EventListener\TranslatorListener(($this->services['translator'] ?? $this->getTranslatorService()), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
    }

    /**
     * Gets the private 'twig.loader.native_filesystem' shared service.
     *
     * @return \Twig\Loader\FilesystemLoader
     */
    protected function getTwig_Loader_NativeFilesystemService()
    {
        $this->privates['twig.loader.native_filesystem'] = $instance = new \Twig\Loader\FilesystemLoader([], $this->targetDirs[3]);

        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/framework-bundle/Resources/views'), 'Framework');
        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/framework-bundle/Resources/views'), '!Framework');
        $instance->addPath(($this->targetDirs[3].'/vendor/doctrine/doctrine-bundle/Resources/views'), 'Doctrine');
        $instance->addPath(($this->targetDirs[3].'/vendor/doctrine/doctrine-bundle/Resources/views'), '!Doctrine');
        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/security-bundle/Resources/views'), 'Security');
        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/security-bundle/Resources/views'), '!Security');
        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/swiftmailer-bundle/Resources/views'), 'Swiftmailer');
        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/swiftmailer-bundle/Resources/views'), '!Swiftmailer');
        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/web-profiler-bundle/Resources/views'), 'WebProfiler');
        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/web-profiler-bundle/Resources/views'), '!WebProfiler');
        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/twig-bundle/Resources/views'), 'Twig');
        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/twig-bundle/Resources/views'), '!Twig');
        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/debug-bundle/Resources/views'), 'Debug');
        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/debug-bundle/Resources/views'), '!Debug');
        $instance->addPath(($this->targetDirs[3].'/src/Lp/CatalogBundle/Resources/views'), 'LpCatalog');
        $instance->addPath(($this->targetDirs[3].'/src/Lp/CatalogBundle/Resources/views'), '!LpCatalog');
        $instance->addPath(($this->targetDirs[3].'/vendor/easycorp/easyadmin-bundle/src/Resources/views'), 'EasyAdmin');
        $instance->addPath(($this->targetDirs[3].'/vendor/easycorp/easyadmin-bundle/src/Resources/views'), '!EasyAdmin');
        $instance->addPath(($this->targetDirs[3].'/vendor/vich/uploader-bundle/Resources/views'), 'VichUploader');
        $instance->addPath(($this->targetDirs[3].'/vendor/vich/uploader-bundle/Resources/views'), '!VichUploader');
        $instance->addPath(($this->targetDirs[3].'/vendor/overblog/graphiql-bundle/Resources/views'), 'OverblogGraphiQL');
        $instance->addPath(($this->targetDirs[3].'/vendor/overblog/graphiql-bundle/Resources/views'), '!OverblogGraphiQL');
        $instance->addPath(($this->targetDirs[3].'/src/Resources/views'));
        $instance->addPath(($this->targetDirs[3].'/templates'));
        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/twig-bridge/Resources/views/Form'));

        return $instance;
    }

    /**
     * Gets the private 'validator.builder' shared service.
     *
     * @return \Symfony\Component\Validator\ValidatorBuilderInterface
     */
    protected function getValidator_BuilderService()
    {
        $this->privates['validator.builder'] = $instance = \Symfony\Component\Validator\Validation::createValidatorBuilder();

        $instance->setConstraintValidatorFactory(new \Symfony\Component\Validator\ContainerConstraintValidatorFactory(new \Symfony\Component\DependencyInjection\ServiceLocator(['Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator' => function () {
            return ($this->privates['doctrine.orm.validator.unique'] ?? $this->load('getDoctrine_Orm_Validator_UniqueService.php'));
        }, 'Symfony\\Component\\Security\\Core\\Validator\\Constraints\\UserPasswordValidator' => function () {
            return ($this->privates['security.validator.user_password'] ?? $this->load('getSecurity_Validator_UserPasswordService.php'));
        }, 'Symfony\\Component\\Validator\\Constraints\\EmailValidator' => function () {
            return ($this->privates['validator.email'] ?? ($this->privates['validator.email'] = new \Symfony\Component\Validator\Constraints\EmailValidator('html5')));
        }, 'Symfony\\Component\\Validator\\Constraints\\ExpressionValidator' => function () {
            return ($this->privates['validator.expression'] ?? ($this->privates['validator.expression'] = new \Symfony\Component\Validator\Constraints\ExpressionValidator()));
        }, 'doctrine.orm.validator.unique' => function () {
            return ($this->privates['doctrine.orm.validator.unique'] ?? $this->load('getDoctrine_Orm_Validator_UniqueService.php'));
        }, 'security.validator.user_password' => function () {
            return ($this->privates['security.validator.user_password'] ?? $this->load('getSecurity_Validator_UserPasswordService.php'));
        }, 'validator.expression' => function () {
            return ($this->privates['validator.expression'] ?? ($this->privates['validator.expression'] = new \Symfony\Component\Validator\Constraints\ExpressionValidator()));
        }])));
        $instance->setTranslator(($this->services['translator'] ?? $this->getTranslatorService()));
        $instance->setTranslationDomain('validators');
        $instance->addXmlMappings([0 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/config/validation.xml')]);
        $instance->enableAnnotationMapping(($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService()));
        $instance->addMethodMapping('loadValidatorMetadata');
        $instance->addObjectInitializers([0 => new \Symfony\Bridge\Doctrine\Validator\DoctrineInitializer(($this->services['doctrine'] ?? $this->getDoctrineService()))]);

        return $instance;
    }

    /**
     * Gets the private 'var_dumper.html_dumper' shared service.
     *
     * @return \Symfony\Component\VarDumper\Dumper\HtmlDumper
     */
    protected function getVarDumper_HtmlDumperService()
    {
        $this->privates['var_dumper.html_dumper'] = $instance = new \Symfony\Component\VarDumper\Dumper\HtmlDumper(NULL, 'UTF-8', 0);

        $instance->setDisplayOptions(['fileLinkFormat' => ($this->privates['debug.file_link_formatter'] ?? $this->getDebug_FileLinkFormatterService())]);

        return $instance;
    }

    /**
     * Gets the private 'var_dumper.server_connection' shared service.
     *
     * @return \Symfony\Component\VarDumper\Server\Connection
     */
    protected function getVarDumper_ServerConnectionService()
    {
        return $this->privates['var_dumper.server_connection'] = new \Symfony\Component\VarDumper\Server\Connection('tcp://'.$this->getEnv('string:VAR_DUMPER_SERVER'), ['source' => new \Symfony\Component\VarDumper\Dumper\ContextProvider\SourceContextProvider('UTF-8', $this->targetDirs[3], ($this->privates['debug.file_link_formatter'] ?? $this->getDebug_FileLinkFormatterService())), 'request' => new \Symfony\Component\VarDumper\Dumper\ContextProvider\RequestContextProvider(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()))), 'cli' => new \Symfony\Component\VarDumper\Dumper\ContextProvider\CliContextProvider()]);
    }

    /**
     * Gets the private 'vich_uploader.listener.clean.product_images' shared service.
     *
     * @return \Vich\UploaderBundle\EventListener\Doctrine\CleanListener
     */
    protected function getVichUploader_Listener_Clean_ProductImagesService()
    {
        return $this->privates['vich_uploader.listener.clean.product_images'] = new \Vich\UploaderBundle\EventListener\Doctrine\CleanListener('product_images', ($this->privates['vich_uploader.adapter.orm'] ?? ($this->privates['vich_uploader.adapter.orm'] = new \Vich\UploaderBundle\Adapter\ORM\DoctrineORMAdapter())), ($this->privates['vich_uploader.metadata_reader'] ?? $this->getVichUploader_MetadataReaderService()), ($this->services['vich_uploader.upload_handler'] ?? $this->getVichUploader_UploadHandlerService()));
    }

    /**
     * Gets the private 'vich_uploader.listener.remove.product_images' shared service.
     *
     * @return \Vich\UploaderBundle\EventListener\Doctrine\RemoveListener
     */
    protected function getVichUploader_Listener_Remove_ProductImagesService()
    {
        return $this->privates['vich_uploader.listener.remove.product_images'] = new \Vich\UploaderBundle\EventListener\Doctrine\RemoveListener('product_images', ($this->privates['vich_uploader.adapter.orm'] ?? ($this->privates['vich_uploader.adapter.orm'] = new \Vich\UploaderBundle\Adapter\ORM\DoctrineORMAdapter())), ($this->privates['vich_uploader.metadata_reader'] ?? $this->getVichUploader_MetadataReaderService()), ($this->services['vich_uploader.upload_handler'] ?? $this->getVichUploader_UploadHandlerService()));
    }

    /**
     * Gets the private 'vich_uploader.listener.upload.product_images' shared service.
     *
     * @return \Vich\UploaderBundle\EventListener\Doctrine\UploadListener
     */
    protected function getVichUploader_Listener_Upload_ProductImagesService()
    {
        return $this->privates['vich_uploader.listener.upload.product_images'] = new \Vich\UploaderBundle\EventListener\Doctrine\UploadListener('product_images', ($this->privates['vich_uploader.adapter.orm'] ?? ($this->privates['vich_uploader.adapter.orm'] = new \Vich\UploaderBundle\Adapter\ORM\DoctrineORMAdapter())), ($this->privates['vich_uploader.metadata_reader'] ?? $this->getVichUploader_MetadataReaderService()), ($this->services['vich_uploader.upload_handler'] ?? $this->getVichUploader_UploadHandlerService()));
    }

    /**
     * Gets the private 'vich_uploader.metadata_reader' shared service.
     *
     * @return \Vich\UploaderBundle\Metadata\MetadataReader
     */
    protected function getVichUploader_MetadataReaderService()
    {
        $a = new \Metadata\Driver\FileLocator([]);

        $b = new \Metadata\MetadataFactory(new \Metadata\Driver\DriverChain([0 => new \Vich\UploaderBundle\Metadata\Driver\XmlDriver($a), 1 => new \Vich\UploaderBundle\Metadata\Driver\AnnotationDriver(($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService())), 2 => new \Vich\UploaderBundle\Metadata\Driver\YamlDriver($a)]), 'Metadata\\ClassHierarchyMetadata', true);
        $b->setCache(new \Metadata\Cache\FileCache(($this->targetDirs[0].'/vich_uploader')));

        return $this->privates['vich_uploader.metadata_reader'] = new \Vich\UploaderBundle\Metadata\MetadataReader($b);
    }

    /**
     * Gets the private 'vich_uploader.property_mapping_factory' shared service.
     *
     * @return \Vich\UploaderBundle\Mapping\PropertyMappingFactory
     */
    protected function getVichUploader_PropertyMappingFactoryService()
    {
        return $this->privates['vich_uploader.property_mapping_factory'] = new \Vich\UploaderBundle\Mapping\PropertyMappingFactory($this, ($this->privates['vich_uploader.metadata_reader'] ?? $this->getVichUploader_MetadataReaderService()), $this->getParameter('vich_uploader.mappings'), '_name');
    }

    /**
     * Gets the private 'vich_uploader.storage.file_system' shared service.
     *
     * @return \Vich\UploaderBundle\Storage\FileSystemStorage
     */
    protected function getVichUploader_Storage_FileSystemService()
    {
        return $this->privates['vich_uploader.storage.file_system'] = new \Vich\UploaderBundle\Storage\FileSystemStorage(($this->privates['vich_uploader.property_mapping_factory'] ?? $this->getVichUploader_PropertyMappingFactoryService()));
    }

    /**
     * Gets the private 'web_profiler.csp.handler' shared service.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\Csp\ContentSecurityPolicyHandler
     */
    protected function getWebProfiler_Csp_HandlerService()
    {
        return $this->privates['web_profiler.csp.handler'] = new \Symfony\Bundle\WebProfilerBundle\Csp\ContentSecurityPolicyHandler(new \Symfony\Bundle\WebProfilerBundle\Csp\NonceGenerator());
    }

    /**
     * Gets the private 'web_profiler.debug_toolbar' shared service.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\EventListener\WebDebugToolbarListener
     */
    protected function getWebProfiler_DebugToolbarService()
    {
        return $this->privates['web_profiler.debug_toolbar'] = new \Symfony\Bundle\WebProfilerBundle\EventListener\WebDebugToolbarListener(($this->services['twig'] ?? $this->getTwigService()), false, 2, ($this->services['router'] ?? $this->getRouterService()), '^/((index|app(_[\\w]+)?)\\.php/)?_wdt', ($this->privates['web_profiler.csp.handler'] ?? $this->getWebProfiler_Csp_HandlerService()));
    }

    public function getParameter($name)
    {
        $name = (string) $name;
        if (isset($this->buildParameters[$name])) {
            return $this->buildParameters[$name];
        }

        if (!(isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters))) {
            throw new InvalidArgumentException(sprintf('The parameter "%s" must be defined.', $name));
        }
        if (isset($this->loadedDynamicParameters[$name])) {
            return $this->loadedDynamicParameters[$name] ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
        }

        return $this->parameters[$name];
    }

    public function hasParameter($name)
    {
        $name = (string) $name;
        if (isset($this->buildParameters[$name])) {
            return true;
        }

        return isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters);
    }

    public function setParameter($name, $value)
    {
        throw new LogicException('Impossible to call set() on a frozen ParameterBag.');
    }

    public function getParameterBag()
    {
        if (null === $this->parameterBag) {
            $parameters = $this->parameters;
            foreach ($this->loadedDynamicParameters as $name => $loaded) {
                $parameters[$name] = $loaded ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
            }
            foreach ($this->buildParameters as $name => $value) {
                $parameters[$name] = $value;
            }
            $this->parameterBag = new FrozenParameterBag($parameters);
        }

        return $this->parameterBag;
    }

    private $loadedDynamicParameters = [
        'kernel.root_dir' => false,
        'kernel.project_dir' => false,
        'kernel.cache_dir' => false,
        'kernel.logs_dir' => false,
        'kernel.bundles_metadata' => false,
        'kernel.secret' => false,
        'session.save_path' => false,
        'validator.mapping.cache.file' => false,
        'translator.default_path' => false,
        'profiler.storage.dsn' => false,
        'debug.container.dump' => false,
        'serializer.mapping.cache.file' => false,
        'doctrine.orm.proxy_dir' => false,
        'doctrine_migrations.dir_name' => false,
        'swiftmailer.spool.default.memory.path' => false,
        'twig.default_path' => false,
        'easyadmin.cache.dir' => false,
        'vich_uploader.mappings' => false,
        'overblog_graphql.resources_dir' => false,
        'lexik_jwt_authentication.pass_phrase' => false,
    ];
    private $dynamicParameters = [];

    /**
     * Computes a dynamic parameter.
     *
     * @param string $name The name of the dynamic parameter to load
     *
     * @return mixed The value of the dynamic parameter
     *
     * @throws InvalidArgumentException When the dynamic parameter does not exist
     */
    private function getDynamicParameter($name)
    {
        switch ($name) {
            case 'kernel.root_dir': $value = ($this->targetDirs[3].'/src'); break;
            case 'kernel.project_dir': $value = $this->targetDirs[3]; break;
            case 'kernel.cache_dir': $value = $this->targetDirs[0]; break;
            case 'kernel.logs_dir': $value = ($this->targetDirs[2].'/log'); break;
            case 'kernel.bundles_metadata': $value = [
                'FrameworkBundle' => [
                    'path' => ($this->targetDirs[3].'/vendor/symfony/framework-bundle'),
                    'namespace' => 'Symfony\\Bundle\\FrameworkBundle',
                ],
                'DoctrineCacheBundle' => [
                    'path' => ($this->targetDirs[3].'/vendor/doctrine/doctrine-cache-bundle'),
                    'namespace' => 'Doctrine\\Bundle\\DoctrineCacheBundle',
                ],
                'SensioFrameworkExtraBundle' => [
                    'path' => ($this->targetDirs[3].'/vendor/sensio/framework-extra-bundle'),
                    'namespace' => 'Sensio\\Bundle\\FrameworkExtraBundle',
                ],
                'DoctrineBundle' => [
                    'path' => ($this->targetDirs[3].'/vendor/doctrine/doctrine-bundle'),
                    'namespace' => 'Doctrine\\Bundle\\DoctrineBundle',
                ],
                'DoctrineMigrationsBundle' => [
                    'path' => ($this->targetDirs[3].'/vendor/doctrine/doctrine-migrations-bundle'),
                    'namespace' => 'Doctrine\\Bundle\\MigrationsBundle',
                ],
                'SecurityBundle' => [
                    'path' => ($this->targetDirs[3].'/vendor/symfony/security-bundle'),
                    'namespace' => 'Symfony\\Bundle\\SecurityBundle',
                ],
                'SwiftmailerBundle' => [
                    'path' => ($this->targetDirs[3].'/vendor/symfony/swiftmailer-bundle'),
                    'namespace' => 'Symfony\\Bundle\\SwiftmailerBundle',
                ],
                'WebProfilerBundle' => [
                    'path' => ($this->targetDirs[3].'/vendor/symfony/web-profiler-bundle'),
                    'namespace' => 'Symfony\\Bundle\\WebProfilerBundle',
                ],
                'TwigBundle' => [
                    'path' => ($this->targetDirs[3].'/vendor/symfony/twig-bundle'),
                    'namespace' => 'Symfony\\Bundle\\TwigBundle',
                ],
                'MonologBundle' => [
                    'path' => ($this->targetDirs[3].'/vendor/symfony/monolog-bundle'),
                    'namespace' => 'Symfony\\Bundle\\MonologBundle',
                ],
                'DebugBundle' => [
                    'path' => ($this->targetDirs[3].'/vendor/symfony/debug-bundle'),
                    'namespace' => 'Symfony\\Bundle\\DebugBundle',
                ],
                'MakerBundle' => [
                    'path' => ($this->targetDirs[3].'/vendor/symfony/maker-bundle/src'),
                    'namespace' => 'Symfony\\Bundle\\MakerBundle',
                ],
                'WebServerBundle' => [
                    'path' => ($this->targetDirs[3].'/vendor/symfony/web-server-bundle'),
                    'namespace' => 'Symfony\\Bundle\\WebServerBundle',
                ],
                'LpCmsBundle' => [
                    'path' => ($this->targetDirs[3].'/src/Lp/CmsBundle'),
                    'namespace' => 'App\\Lp\\CmsBundle',
                ],
                'LpCatalogBundle' => [
                    'path' => ($this->targetDirs[3].'/src/Lp/CatalogBundle'),
                    'namespace' => 'App\\Lp\\CatalogBundle',
                ],
                'LpUrlsBundle' => [
                    'path' => ($this->targetDirs[3].'/src/Lp/UrlsBundle'),
                    'namespace' => 'App\\Lp\\UrlsBundle',
                ],
                'LpBasketBundle' => [
                    'path' => ($this->targetDirs[3].'/src/Lp/BasketBundle'),
                    'namespace' => 'App\\Lp\\BasketBundle',
                ],
                'LpProfileBundle' => [
                    'path' => ($this->targetDirs[3].'/src/Lp/ProfileBundle'),
                    'namespace' => 'App\\Lp\\ProfileBundle',
                ],
                'EasyAdminBundle' => [
                    'path' => ($this->targetDirs[3].'/vendor/easycorp/easyadmin-bundle/src'),
                    'namespace' => 'EasyCorp\\Bundle\\EasyAdminBundle',
                ],
                'DoctrineFixturesBundle' => [
                    'path' => ($this->targetDirs[3].'/vendor/doctrine/doctrine-fixtures-bundle'),
                    'namespace' => 'Doctrine\\Bundle\\FixturesBundle',
                ],
                'VichUploaderBundle' => [
                    'path' => ($this->targetDirs[3].'/vendor/vich/uploader-bundle'),
                    'namespace' => 'Vich\\UploaderBundle',
                ],
                'OverblogGraphQLBundle' => [
                    'path' => ($this->targetDirs[3].'/vendor/overblog/graphql-bundle/src'),
                    'namespace' => 'Overblog\\GraphQLBundle',
                ],
                'OverblogGraphiQLBundle' => [
                    'path' => ($this->targetDirs[3].'/vendor/overblog/graphiql-bundle'),
                    'namespace' => 'Overblog\\GraphiQLBundle',
                ],
                'OnurbExcelBundle' => [
                    'path' => ($this->targetDirs[3].'/vendor/onurb/excel-bundle/lib/ExcelBundle'),
                    'namespace' => 'Onurb\\Bundle\\ExcelBundle',
                ],
                'LexikJWTAuthenticationBundle' => [
                    'path' => ($this->targetDirs[3].'/vendor/lexik/jwt-authentication-bundle'),
                    'namespace' => 'Lexik\\Bundle\\JWTAuthenticationBundle',
                ],
                'AssoConnectGraphQLMutationValidatorBundle' => [
                    'path' => ($this->targetDirs[3].'/vendor/assoconnect/graphql-mutation-validator-bundle'),
                    'namespace' => 'AssoConnect\\GraphQLMutationValidatorBundle',
                ],
            ]; break;
            case 'kernel.secret': $value = $this->getEnv('APP_SECRET'); break;
            case 'session.save_path': $value = ($this->targetDirs[0].'/sessions'); break;
            case 'validator.mapping.cache.file': $value = ($this->targetDirs[0].'/validation.php'); break;
            case 'translator.default_path': $value = ($this->targetDirs[3].'/translations'); break;
            case 'profiler.storage.dsn': $value = ('file:'.$this->targetDirs[0].'/profiler'); break;
            case 'debug.container.dump': $value = ($this->targetDirs[0].'/srcDevDebugProjectContainer.xml'); break;
            case 'serializer.mapping.cache.file': $value = ($this->targetDirs[0].'/serialization.php'); break;
            case 'doctrine.orm.proxy_dir': $value = ($this->targetDirs[0].'/doctrine/orm/Proxies'); break;
            case 'doctrine_migrations.dir_name': $value = ($this->targetDirs[3].'/src/Migrations'); break;
            case 'swiftmailer.spool.default.memory.path': $value = ($this->targetDirs[0].'/swiftmailer/spool/default'); break;
            case 'twig.default_path': $value = ($this->targetDirs[3].'/templates'); break;
            case 'easyadmin.cache.dir': $value = ($this->targetDirs[0].'/easy_admin'); break;
            case 'vich_uploader.mappings': $value = [
                'product_images' => [
                    'uri_prefix' => '/uploads/images/products',
                    'upload_destination' => ($this->targetDirs[3].'/public/uploads/images/products'),
                    'namer' => [
                        'service' => NULL,
                        'options' => NULL,
                    ],
                    'directory_namer' => [
                        'service' => NULL,
                        'options' => NULL,
                    ],
                    'delete_on_remove' => true,
                    'delete_on_update' => true,
                    'inject_on_load' => false,
                    'db_driver' => 'orm',
                ],
            ]; break;
            case 'overblog_graphql.resources_dir': $value = ($this->targetDirs[3].'/vendor/overblog/graphql-bundle/src/Resources'); break;
            case 'lexik_jwt_authentication.pass_phrase': $value = $this->getEnv('JWT_PASSPHRASE'); break;
            default: throw new InvalidArgumentException(sprintf('The dynamic parameter "%s" must be defined.', $name));
        }
        $this->loadedDynamicParameters[$name] = true;

        return $this->dynamicParameters[$name] = $value;
    }

    /**
     * Gets the default parameters.
     *
     * @return array An array of the default parameters
     */
    protected function getDefaultParameters()
    {
        return [
            'kernel.environment' => 'dev',
            'kernel.debug' => true,
            'kernel.name' => 'src',
            'kernel.bundles' => [
                'FrameworkBundle' => 'Symfony\\Bundle\\FrameworkBundle\\FrameworkBundle',
                'DoctrineCacheBundle' => 'Doctrine\\Bundle\\DoctrineCacheBundle\\DoctrineCacheBundle',
                'SensioFrameworkExtraBundle' => 'Sensio\\Bundle\\FrameworkExtraBundle\\SensioFrameworkExtraBundle',
                'DoctrineBundle' => 'Doctrine\\Bundle\\DoctrineBundle\\DoctrineBundle',
                'DoctrineMigrationsBundle' => 'Doctrine\\Bundle\\MigrationsBundle\\DoctrineMigrationsBundle',
                'SecurityBundle' => 'Symfony\\Bundle\\SecurityBundle\\SecurityBundle',
                'SwiftmailerBundle' => 'Symfony\\Bundle\\SwiftmailerBundle\\SwiftmailerBundle',
                'WebProfilerBundle' => 'Symfony\\Bundle\\WebProfilerBundle\\WebProfilerBundle',
                'TwigBundle' => 'Symfony\\Bundle\\TwigBundle\\TwigBundle',
                'MonologBundle' => 'Symfony\\Bundle\\MonologBundle\\MonologBundle',
                'DebugBundle' => 'Symfony\\Bundle\\DebugBundle\\DebugBundle',
                'MakerBundle' => 'Symfony\\Bundle\\MakerBundle\\MakerBundle',
                'WebServerBundle' => 'Symfony\\Bundle\\WebServerBundle\\WebServerBundle',
                'LpCmsBundle' => 'App\\Lp\\CmsBundle\\LpCmsBundle',
                'LpCatalogBundle' => 'App\\Lp\\CatalogBundle\\LpCatalogBundle',
                'LpUrlsBundle' => 'App\\Lp\\UrlsBundle\\LpUrlsBundle',
                'LpBasketBundle' => 'App\\Lp\\BasketBundle\\LpBasketBundle',
                'LpProfileBundle' => 'App\\Lp\\ProfileBundle\\LpProfileBundle',
                'EasyAdminBundle' => 'EasyCorp\\Bundle\\EasyAdminBundle\\EasyAdminBundle',
                'DoctrineFixturesBundle' => 'Doctrine\\Bundle\\FixturesBundle\\DoctrineFixturesBundle',
                'VichUploaderBundle' => 'Vich\\UploaderBundle\\VichUploaderBundle',
                'OverblogGraphQLBundle' => 'Overblog\\GraphQLBundle\\OverblogGraphQLBundle',
                'OverblogGraphiQLBundle' => 'Overblog\\GraphiQLBundle\\OverblogGraphiQLBundle',
                'OnurbExcelBundle' => 'Onurb\\Bundle\\ExcelBundle\\OnurbExcelBundle',
                'LexikJWTAuthenticationBundle' => 'Lexik\\Bundle\\JWTAuthenticationBundle\\LexikJWTAuthenticationBundle',
                'AssoConnectGraphQLMutationValidatorBundle' => 'AssoConnect\\GraphQLMutationValidatorBundle\\AssoConnectGraphQLMutationValidatorBundle',
            ],
            'kernel.charset' => 'UTF-8',
            'kernel.container_class' => 'srcDevDebugProjectContainer',
            'container.autowiring.strict_mode' => true,
            'container.dumper.inline_class_loader' => true,
            'env(DATABASE_URL)' => '',
            'locale' => 'en',
            'app.path.product_images' => '/uploads/images/products',
            'app.path.import_product' => '/public/uploads/import/',
            'fragment.renderer.hinclude.global_template' => '',
            'fragment.path' => '/_fragment',
            'kernel.http_method_override' => true,
            'kernel.trusted_hosts' => [

            ],
            'kernel.default_locale' => 'en',
            'templating.helper.code.file_link_format' => NULL,
            'debug.file_link_format' => NULL,
            'session.metadata.storage_key' => '_sf2_meta',
            'session.storage.options' => [
                'cache_limiter' => '0',
                'cookie_httponly' => true,
                'gc_probability' => 1,
            ],
            'session.metadata.update_threshold' => '0',
            'form.type_extension.csrf.enabled' => true,
            'form.type_extension.csrf.field_name' => '_token',
            'asset.request_context.base_path' => '',
            'asset.request_context.secure' => false,
            'validator.mapping.cache.prefix' => '',
            'validator.translation_domain' => 'validators',
            'translator.logging' => false,
            'profiler_listener.only_exceptions' => false,
            'profiler_listener.only_master_requests' => false,
            'debug.error_handler.throw_at' => -1,
            'router.request_context.host' => 'localhost',
            'router.request_context.scheme' => 'http',
            'router.request_context.base_url' => '',
            'router.resource' => 'kernel::loadRoutes',
            'router.cache_class_prefix' => 'srcDevDebugProjectContainer',
            'request_listener.http_port' => 80,
            'request_listener.https_port' => 443,
            'serializer.mapping.cache.prefix' => '',
            'doctrine_cache.apc.class' => 'Doctrine\\Common\\Cache\\ApcCache',
            'doctrine_cache.apcu.class' => 'Doctrine\\Common\\Cache\\ApcuCache',
            'doctrine_cache.array.class' => 'Doctrine\\Common\\Cache\\ArrayCache',
            'doctrine_cache.chain.class' => 'Doctrine\\Common\\Cache\\ChainCache',
            'doctrine_cache.couchbase.class' => 'Doctrine\\Common\\Cache\\CouchbaseCache',
            'doctrine_cache.couchbase.connection.class' => 'Couchbase',
            'doctrine_cache.couchbase.hostnames' => 'localhost:8091',
            'doctrine_cache.file_system.class' => 'Doctrine\\Common\\Cache\\FilesystemCache',
            'doctrine_cache.php_file.class' => 'Doctrine\\Common\\Cache\\PhpFileCache',
            'doctrine_cache.memcache.class' => 'Doctrine\\Common\\Cache\\MemcacheCache',
            'doctrine_cache.memcache.connection.class' => 'Memcache',
            'doctrine_cache.memcache.host' => 'localhost',
            'doctrine_cache.memcache.port' => 11211,
            'doctrine_cache.memcached.class' => 'Doctrine\\Common\\Cache\\MemcachedCache',
            'doctrine_cache.memcached.connection.class' => 'Memcached',
            'doctrine_cache.memcached.host' => 'localhost',
            'doctrine_cache.memcached.port' => 11211,
            'doctrine_cache.mongodb.class' => 'Doctrine\\Common\\Cache\\MongoDBCache',
            'doctrine_cache.mongodb.collection.class' => 'MongoCollection',
            'doctrine_cache.mongodb.connection.class' => 'MongoClient',
            'doctrine_cache.mongodb.server' => 'localhost:27017',
            'doctrine_cache.predis.client.class' => 'Predis\\Client',
            'doctrine_cache.predis.scheme' => 'tcp',
            'doctrine_cache.predis.host' => 'localhost',
            'doctrine_cache.predis.port' => 6379,
            'doctrine_cache.redis.class' => 'Doctrine\\Common\\Cache\\RedisCache',
            'doctrine_cache.redis.connection.class' => 'Redis',
            'doctrine_cache.redis.host' => 'localhost',
            'doctrine_cache.redis.port' => 6379,
            'doctrine_cache.riak.class' => 'Doctrine\\Common\\Cache\\RiakCache',
            'doctrine_cache.riak.bucket.class' => 'Riak\\Bucket',
            'doctrine_cache.riak.connection.class' => 'Riak\\Connection',
            'doctrine_cache.riak.bucket_property_list.class' => 'Riak\\BucketPropertyList',
            'doctrine_cache.riak.host' => 'localhost',
            'doctrine_cache.riak.port' => 8087,
            'doctrine_cache.sqlite3.class' => 'Doctrine\\Common\\Cache\\SQLite3Cache',
            'doctrine_cache.sqlite3.connection.class' => 'SQLite3',
            'doctrine_cache.void.class' => 'Doctrine\\Common\\Cache\\VoidCache',
            'doctrine_cache.wincache.class' => 'Doctrine\\Common\\Cache\\WinCacheCache',
            'doctrine_cache.xcache.class' => 'Doctrine\\Common\\Cache\\XcacheCache',
            'doctrine_cache.zenddata.class' => 'Doctrine\\Common\\Cache\\ZendDataCache',
            'doctrine_cache.security.acl.cache.class' => 'Doctrine\\Bundle\\DoctrineCacheBundle\\Acl\\Model\\AclCache',
            'doctrine.dbal.logger.chain.class' => 'Doctrine\\DBAL\\Logging\\LoggerChain',
            'doctrine.dbal.logger.profiling.class' => 'Doctrine\\DBAL\\Logging\\DebugStack',
            'doctrine.dbal.logger.class' => 'Symfony\\Bridge\\Doctrine\\Logger\\DbalLogger',
            'doctrine.dbal.configuration.class' => 'Doctrine\\DBAL\\Configuration',
            'doctrine.data_collector.class' => 'Doctrine\\Bundle\\DoctrineBundle\\DataCollector\\DoctrineDataCollector',
            'doctrine.dbal.connection.event_manager.class' => 'Symfony\\Bridge\\Doctrine\\ContainerAwareEventManager',
            'doctrine.dbal.connection_factory.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ConnectionFactory',
            'doctrine.dbal.events.mysql_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\MysqlSessionInit',
            'doctrine.dbal.events.oracle_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\OracleSessionInit',
            'doctrine.class' => 'Doctrine\\Bundle\\DoctrineBundle\\Registry',
            'doctrine.entity_managers' => [
                'default' => 'doctrine.orm.default_entity_manager',
                'lp_perl' => 'doctrine.orm.lp_perl_entity_manager',
            ],
            'doctrine.default_entity_manager' => 'default',
            'doctrine.dbal.connection_factory.types' => [

            ],
            'doctrine.connections' => [
                'default' => 'doctrine.dbal.default_connection',
                'lp_perl' => 'doctrine.dbal.lp_perl_connection',
            ],
            'doctrine.default_connection' => 'default',
            'doctrine.orm.configuration.class' => 'Doctrine\\ORM\\Configuration',
            'doctrine.orm.entity_manager.class' => 'Doctrine\\ORM\\EntityManager',
            'doctrine.orm.manager_configurator.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ManagerConfigurator',
            'doctrine.orm.cache.array.class' => 'Doctrine\\Common\\Cache\\ArrayCache',
            'doctrine.orm.cache.apc.class' => 'Doctrine\\Common\\Cache\\ApcCache',
            'doctrine.orm.cache.memcache.class' => 'Doctrine\\Common\\Cache\\MemcacheCache',
            'doctrine.orm.cache.memcache_host' => 'localhost',
            'doctrine.orm.cache.memcache_port' => 11211,
            'doctrine.orm.cache.memcache_instance.class' => 'Memcache',
            'doctrine.orm.cache.memcached.class' => 'Doctrine\\Common\\Cache\\MemcachedCache',
            'doctrine.orm.cache.memcached_host' => 'localhost',
            'doctrine.orm.cache.memcached_port' => 11211,
            'doctrine.orm.cache.memcached_instance.class' => 'Memcached',
            'doctrine.orm.cache.redis.class' => 'Doctrine\\Common\\Cache\\RedisCache',
            'doctrine.orm.cache.redis_host' => 'localhost',
            'doctrine.orm.cache.redis_port' => 6379,
            'doctrine.orm.cache.redis_instance.class' => 'Redis',
            'doctrine.orm.cache.xcache.class' => 'Doctrine\\Common\\Cache\\XcacheCache',
            'doctrine.orm.cache.wincache.class' => 'Doctrine\\Common\\Cache\\WinCacheCache',
            'doctrine.orm.cache.zenddata.class' => 'Doctrine\\Common\\Cache\\ZendDataCache',
            'doctrine.orm.metadata.driver_chain.class' => 'Doctrine\\Common\\Persistence\\Mapping\\Driver\\MappingDriverChain',
            'doctrine.orm.metadata.annotation.class' => 'Doctrine\\ORM\\Mapping\\Driver\\AnnotationDriver',
            'doctrine.orm.metadata.xml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedXmlDriver',
            'doctrine.orm.metadata.yml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedYamlDriver',
            'doctrine.orm.metadata.php.class' => 'Doctrine\\ORM\\Mapping\\Driver\\PHPDriver',
            'doctrine.orm.metadata.staticphp.class' => 'Doctrine\\ORM\\Mapping\\Driver\\StaticPHPDriver',
            'doctrine.orm.proxy_cache_warmer.class' => 'Symfony\\Bridge\\Doctrine\\CacheWarmer\\ProxyCacheWarmer',
            'form.type_guesser.doctrine.class' => 'Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser',
            'doctrine.orm.validator.unique.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator',
            'doctrine.orm.validator_initializer.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\DoctrineInitializer',
            'doctrine.orm.security.user.provider.class' => 'Symfony\\Bridge\\Doctrine\\Security\\User\\EntityUserProvider',
            'doctrine.orm.listeners.resolve_target_entity.class' => 'Doctrine\\ORM\\Tools\\ResolveTargetEntityListener',
            'doctrine.orm.listeners.attach_entity_listeners.class' => 'Doctrine\\ORM\\Tools\\AttachEntityListenersListener',
            'doctrine.orm.naming_strategy.default.class' => 'Doctrine\\ORM\\Mapping\\DefaultNamingStrategy',
            'doctrine.orm.naming_strategy.underscore.class' => 'Doctrine\\ORM\\Mapping\\UnderscoreNamingStrategy',
            'doctrine.orm.quote_strategy.default.class' => 'Doctrine\\ORM\\Mapping\\DefaultQuoteStrategy',
            'doctrine.orm.quote_strategy.ansi.class' => 'Doctrine\\ORM\\Mapping\\AnsiQuoteStrategy',
            'doctrine.orm.entity_listener_resolver.class' => 'Doctrine\\Bundle\\DoctrineBundle\\Mapping\\ContainerAwareEntityListenerResolver',
            'doctrine.orm.second_level_cache.default_cache_factory.class' => 'Doctrine\\ORM\\Cache\\DefaultCacheFactory',
            'doctrine.orm.second_level_cache.default_region.class' => 'Doctrine\\ORM\\Cache\\Region\\DefaultRegion',
            'doctrine.orm.second_level_cache.filelock_region.class' => 'Doctrine\\ORM\\Cache\\Region\\FileLockRegion',
            'doctrine.orm.second_level_cache.logger_chain.class' => 'Doctrine\\ORM\\Cache\\Logging\\CacheLoggerChain',
            'doctrine.orm.second_level_cache.logger_statistics.class' => 'Doctrine\\ORM\\Cache\\Logging\\StatisticsCacheLogger',
            'doctrine.orm.second_level_cache.cache_configuration.class' => 'Doctrine\\ORM\\Cache\\CacheConfiguration',
            'doctrine.orm.second_level_cache.regions_configuration.class' => 'Doctrine\\ORM\\Cache\\RegionsConfiguration',
            'doctrine.orm.auto_generate_proxy_classes' => false,
            'doctrine.orm.proxy_namespace' => 'Proxies',
            'doctrine_migrations.namespace' => 'DoctrineMigrations',
            'doctrine_migrations.table_name' => 'migration_versions',
            'doctrine_migrations.column_name' => 'version',
            'doctrine_migrations.column_length' => 14,
            'doctrine_migrations.executed_at_column_name' => 'executed_at',
            'doctrine_migrations.all_or_nothing' => false,
            'doctrine_migrations.name' => 'Application Migrations',
            'doctrine_migrations.custom_template' => NULL,
            'doctrine_migrations.organize_migrations' => false,
            'security.authentication.trust_resolver.anonymous_class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken',
            'security.authentication.trust_resolver.rememberme_class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken',
            'security.role_hierarchy.roles' => [

            ],
            'security.access.denied_url' => NULL,
            'security.authentication.manager.erase_credentials' => true,
            'security.authentication.session_strategy.strategy' => 'migrate',
            'security.access.always_authenticate_before_granting' => false,
            'security.authentication.hide_user_not_found' => true,
            'swiftmailer.mailer.default.transport.name' => 'dynamic',
            'swiftmailer.mailer.default.spool.enabled' => true,
            'swiftmailer.mailer.default.plugin.impersonate' => NULL,
            'swiftmailer.mailer.default.single_address' => NULL,
            'swiftmailer.mailer.default.delivery.enabled' => true,
            'swiftmailer.spool.enabled' => true,
            'swiftmailer.delivery.enabled' => true,
            'swiftmailer.single_address' => NULL,
            'swiftmailer.mailers' => [
                'default' => 'swiftmailer.mailer.default',
            ],
            'swiftmailer.default_mailer' => 'default',
            'web_profiler.debug_toolbar.intercept_redirects' => false,
            'web_profiler.debug_toolbar.mode' => 2,
            'twig.exception_listener.controller' => 'twig.controller.exception::showAction',
            'twig.form.resources' => [
                0 => '@VichUploader/Form/fields.html.twig',
                1 => 'form_div_layout.html.twig',
            ],
            'monolog.use_microseconds' => true,
            'monolog.swift_mailer.handlers' => [

            ],
            'monolog.handlers_to_channels' => [
                'monolog.handler.console' => [
                    'type' => 'exclusive',
                    'elements' => [
                        0 => 'event',
                        1 => 'doctrine',
                        2 => 'console',
                    ],
                ],
                'monolog.handler.main' => [
                    'type' => 'exclusive',
                    'elements' => [
                        0 => 'event',
                    ],
                ],
            ],
            'env(VAR_DUMPER_SERVER)' => '127.0.0.1:9912',
            'easyadmin.config' => [
                'site_name' => 'Laparfumerie',
                'entities' => [
                    'Tags' => [
                        'class' => 'App\\Entity\\Tags',
                        'form' => [
                            'fields' => [
                                0 => 'guid',
                            ],
                        ],
                        'name' => 'Tags',
                    ],
                    'Urls' => [
                        'class' => 'App\\Entity\\Urls',
                        'list' => [
                            'fields' => [
                                0 => 'id',
                                1 => 'url',
                                2 => 'created',
                            ],
                        ],
                        'name' => 'Urls',
                    ],
                    'ProductUrl' => [
                        'class' => 'App\\Entity\\ProductUrl',
                        'list' => [
                            'fields' => [
                                0 => 'id',
                                1 => 'url',
                                2 => 'created',
                            ],
                        ],
                        'form' => [
                            'fields' => [
                                0 => 'url',
                            ],
                        ],
                        'name' => 'ProductUrl',
                    ],
                    'CatalogUrl' => [
                        'class' => 'App\\Entity\\CatalogUrl',
                        'list' => [
                            'fields' => [
                                0 => 'id',
                                1 => 'url',
                                2 => 'created',
                            ],
                        ],
                        'name' => 'CatalogUrl',
                    ],
                    'Users' => [
                        'class' => 'App\\Entity\\Users',
                        'list' => [
                            'fields' => [
                                0 => 'id',
                                1 => 'email',
                                2 => 'roles',
                            ],
                        ],
                        'name' => 'Users',
                    ],
                    'Menu' => [
                        'class' => 'App\\Entity\\Menu',
                        'list' => [
                            'fields' => [
                                0 => 'id',
                                1 => 'name',
                                2 => 'title',
                            ],
                        ],
                        'name' => 'Menu',
                    ],
                    'MenuItem' => [
                        'class' => 'App\\Entity\\MenuItem',
                        'list' => [
                            'fields' => [
                                0 => 'id',
                                1 => 'title',
                            ],
                        ],
                        'name' => 'MenuItem',
                    ],
                    'Catalog' => [
                        'class' => 'App\\Entity\\Catalog',
                        'list' => [
                            'fields' => [
                                0 => 'id',
                                1 => 'name',
                                2 => 'visible',
                            ],
                        ],
                        'form' => [
                            'fields' => [
                                0 => [
                                    'type' => 'tab',
                                    'label' => 'General',
                                ],
                                1 => 'visible',
                                2 => 'name',
                                3 => 'created',
                                4 => 'updated',
                                5 => [
                                    'type' => 'tab',
                                    'label' => 'Virtual Urls',
                                ],
                                6 => [
                                    'property' => 'catalogUrls',
                                    'type' => 'easyadmin_autocomplete',
                                ],
                            ],
                        ],
                        'name' => 'Catalog',
                    ],
                    'Items' => [
                        'class' => 'App\\Entity\\ProductItem',
                        'controller' => 'App\\Controller\\Admin\\ItemsController',
                        'list' => [
                            'fields' => [
                                0 => 'id',
                                1 => 'name',
                                2 => 'visible',
                            ],
                        ],
                        'form' => [
                            'fields' => [
                                0 => 'name',
                                1 => 'price',
                                2 => [
                                    'property' => 'imageFile',
                                    'type' => 'App\\Form\\Type\\MultipleImage',
                                    'type_options' => [
                                        'multiple' => true,
                                        'block_name' => 'custom_title',
                                    ],
                                ],
                            ],
                        ],
                        'name' => 'Items',
                    ],
                    'Product' => [
                        'class' => 'App\\Entity\\Product',
                        'controller' => 'App\\Controller\\Admin\\ProductController',
                        'list' => [
                            'fields' => [
                                0 => 'id',
                                1 => 'name',
                                2 => 'visible',
                            ],
                        ],
                        'form' => [
                            'fields' => [
                                0 => [
                                    'type' => 'tab',
                                    'label' => 'General',
                                ],
                                1 => 'visible',
                                2 => 'name',
                                3 => 'created',
                                4 => 'updated',
                                5 => [
                                    'type' => 'tab',
                                    'label' => 'Categories',
                                ],
                                6 => [
                                    'property' => 'catalogs',
                                    'type' => 'easyadmin_autocomplete',
                                ],
                                7 => [
                                    'type' => 'tab',
                                    'label' => 'Product Items',
                                ],
                                8 => [
                                    'property' => 'productItems',
                                    'type' => 'easyadmin_autocomplete',
                                ],
                                9 => [
                                    'type' => 'tab',
                                    'label' => 'Virtual Urls',
                                ],
                                10 => [
                                    'property' => 'productUrls',
                                    'type' => 'easyadmin_autocomplete',
                                ],
                                11 => [
                                    'type' => 'tab',
                                    'label' => 'Tags',
                                ],
                                12 => [
                                    'property' => 'producttagitem',
                                    'type_options' => [
                                        'block_name' => 'products_tags_items',
                                    ],
                                ],
                            ],
                        ],
                        'name' => 'Product',
                    ],
                    'Order' => [
                        'class' => 'App\\Entity\\Orders',
                        'controller' => 'App\\Controller\\Admin\\OrderController',
                        'list' => [
                            'fields' => [
                                0 => 'id',
                                1 => 'name',
                                2 => 'visible',
                            ],
                        ],
                        'name' => 'Order',
                    ],
                    'Delivery' => [
                        'class' => 'App\\Entity\\Delivery',
                        'list' => [
                            'fields' => [
                                0 => 'id',
                                1 => 'name',
                                2 => 'visible',
                            ],
                        ],
                        'name' => 'Delivery',
                    ],
                    'PaymentMethod' => [
                        'class' => 'App\\Entity\\PaymentMethod',
                        'list' => [
                            'fields' => [
                                0 => 'id',
                                1 => 'name',
                            ],
                        ],
                        'name' => 'PaymentMethod',
                    ],
                    'ImportProduct' => [
                        'class' => 'App\\Entity\\ImportProduct',
                        'controller' => 'App\\Controller\\Admin\\ImportProductController',
                        'name' => 'ImportProduct',
                    ],
                    'ProductTag' => [
                        'class' => 'App\\Entity\\ProductTag',
                        'controller' => 'App\\Controller\\Admin\\ProductTagController',
                        'form' => [
                            'fields' => [
                                0 => 'name',
                                1 => [
                                    'property' => 'type',
                                    'type' => 'choice',
                                    'type_options' => [
                                        'multiple' => false,
                                        'choices' => [
                                            'bool' => 'bool',
                                            'string' => 'string',
                                            'int' => 'int',
                                            'float' => 'float',
                                            'enum' => 'enum',
                                        ],
                                    ],
                                ],
                                2 => [
                                    'property' => 'visible',
                                    'type' => 'choice',
                                    'type_options' => [
                                        'multiple' => false,
                                        'choices' => [
                                            'No' => 'No',
                                            'Yes' => 'Yes',
                                        ],
                                    ],
                                ],
                                3 => [
                                    'property' => 'productTagItems',
                                    'type_options' => [
                                        'block_name' => 'products_tags_items',
                                    ],
                                ],
                            ],
                        ],
                        'name' => 'ProductTag',
                    ],
                    'CatalogTag' => [
                        'class' => 'App\\Entity\\CatalogTag',
                        'controller' => 'App\\Controller\\Admin\\ProductTagController',
                        'form' => [
                            'fields' => [
                                0 => 'name',
                                1 => [
                                    'property' => 'type',
                                    'type' => 'choice',
                                    'type_options' => [
                                        'multiple' => false,
                                        'choices' => [
                                            'bool' => 'bool',
                                            'string' => 'string',
                                            'int' => 'int',
                                            'float' => 'float',
                                            'enum' => 'enum',
                                        ],
                                    ],
                                ],
                                2 => [
                                    'property' => 'visible',
                                    'type' => 'choice',
                                    'type_options' => [
                                        'multiple' => false,
                                        'choices' => [
                                            'No' => 'No',
                                            'Yes' => 'Yes',
                                        ],
                                    ],
                                ],
                                3 => [
                                    'property' => 'catalogTagItems',
                                    'type_options' => [
                                        'block_name' => 'catalogs_tags_items',
                                    ],
                                ],
                            ],
                        ],
                        'name' => 'CatalogTag',
                    ],
                    'Configuration' => [
                        'class' => 'App\\Entity\\ProductTag',
                        'controller' => 'App\\Controller\\Admin\\ConfigurationController',
                        'name' => 'Configuration',
                    ],
                    'Address' => [
                        'class' => 'App\\Entity\\Address',
                        'list' => [
                            'fields' => [
                                0 => 'id',
                                1 => 'city',
                                2 => 'street',
                            ],
                        ],
                        'form' => [
                            'fields' => [
                                0 => 'person',
                                1 => 'user_id',
                                2 => 'zip',
                                3 => 'region_id',
                                4 => 'city',
                                5 => 'street',
                                6 => 'house',
                                7 => 'corp',
                                8 => 'level',
                                9 => 'flat',
                                10 => 'code',
                                11 => 'comment',
                                12 => 'active',
                            ],
                        ],
                        'name' => 'Address',
                    ],
                    'Banner' => [
                        'class' => 'App\\Entity\\Banner',
                        'list' => [
                            'fields' => [
                                0 => 'id',
                                1 => 'path',
                                2 => 'link',
                            ],
                        ],
                        'form' => [
                            'fields' => [
                                0 => [
                                    'property' => 'pathFile',
                                    'type' => 'App\\Form\\Type\\MultipleImage',
                                    'type_options' => [
                                        'multiple' => true,
                                        'block_name' => 'custom_title',
                                    ],
                                ],
                                1 => 'link',
                            ],
                        ],
                        'name' => 'Banner',
                    ],
                    'Sale' => [
                        'class' => 'App\\Entity\\Sale',
                        'form' => [
                            'fields' => [
                                0 => 'start',
                                1 => 'finish',
                                2 => 'category',
                                3 => 'discount',
                                4 => 'enabled',
                                5 => 'featured',
                                6 => 'type',
                                7 => 'prior',
                                8 => [
                                    'property' => 'imagePath',
                                    'type' => 'App\\Form\\Type\\MultipleImage',
                                    'type_options' => [
                                        'multiple' => true,
                                        'block_name' => 'custom_image',
                                    ],
                                ],
                            ],
                        ],
                        'name' => 'Sale',
                    ],
                ],
                'design' => [
                    'brand_color' => 'black',
                    'form_theme' => [
                        0 => 'admin/form/bootstrap_3_layout.html.twig',
                        1 => 'admin/form/bootstrap_3_horizontal_layout.html.twig',
                        2 => 'admin/form/images.html.twig',
                        3 => 'admin/form/tags.html.twig',
                        4 => 'admin/form/products_tags_items.html.twig',
                    ],
                    'menu' => [
                        0 => [
                            'label' => 'Urls',
                            'children' => [
                                0 => 'ProductUrl',
                                1 => 'CatalogUrl',
                            ],
                        ],
                        1 => [
                            'label' => 'Catalog',
                            'children' => [
                                0 => 'Catalog',
                                1 => 'CatalogTag',
                                2 => 'Product',
                                3 => 'Items',
                                4 => 'ProductTag',
                            ],
                        ],
                        2 => [
                            'label' => 'Order',
                            'children' => [
                                0 => 'Order',
                                1 => 'Delivery',
                                2 => 'PaymentMethod',
                                3 => 'ProductTag',
                            ],
                        ],
                        3 => [
                            'label' => 'User',
                            'children' => [
                                0 => 'Users',
                                1 => 'Address',
                            ],
                        ],
                        4 => 'ImportProduct',
                        5 => [
                            'label' => 'Menu',
                            'children' => [
                                0 => 'Menu',
                                1 => 'MenuItem',
                            ],
                        ],
                        6 => 'Banner',
                        7 => 'Sale',
                        8 => 'Configuration',
                        9 => 'Tags',
                    ],
                    'assets' => [
                        'css' => [
                            0 => '/bundles/lp/css/lp.css',
                        ],
                        'js' => [

                        ],
                        'favicon' => [
                            'path' => 'favicon.ico',
                            'mime_type' => 'image/x-icon',
                        ],
                    ],
                    'theme' => 'default',
                    'color_scheme' => 'dark',
                ],
                'formats' => [
                    'date' => 'Y-m-d',
                    'time' => 'H:i:s',
                    'datetime' => 'F j, Y H:i',
                    'dateinterval' => '%y Year(s) %m Month(s) %d Day(s)',
                ],
                'disabled_actions' => [

                ],
                'translation_domain' => 'messages',
                'list' => [
                    'actions' => [

                    ],
                    'max_results' => 15,
                ],
                'search' => [

                ],
                'edit' => [
                    'actions' => [

                    ],
                ],
                'new' => [
                    'actions' => [

                    ],
                ],
                'show' => [
                    'actions' => [

                    ],
                    'max_results' => 10,
                ],
            ],
            'vich_uploader.default_filename_attribute_suffix' => '_name',
            'vich_uploader.file_injector.class' => 'Vich\\UploaderBundle\\Injector\\FileInjector',
            'overblog_graphql_types.config' => [
                'Query' => [
                    'type' => 'object',
                    'class_name' => 'QueryType',
                    'inherits' => [

                    ],
                    'decorator' => false,
                    'config' => [
                        'description' => 'Product Item ORM repository',
                        'fields' => [
                            'productitem' => [
                                'type' => 'ProductItem',
                                'args' => [
                                    'id' => [
                                        'description' => 'Resolves using the product item id.',
                                        'type' => 'Int',
                                    ],
                                ],
                                'resolve' => '@=resolver(\'ProductItem\', [args])',
                            ],
                            'user' => [
                                'type' => 'User',
                                'args' => [
                                    'id' => [
                                        'description' => 'Resolves using the user id.',
                                        'type' => 'Int',
                                    ],
                                ],
                                'resolve' => '@=resolver(\'User\', [args])',
                            ],
                            'product' => [
                                'type' => 'Product',
                                'args' => [
                                    'id' => [
                                        'description' => 'Resolves using the product ID.',
                                        'type' => 'Int',
                                    ],
                                    'slug' => [
                                        'description' => 'Resolves using the product slug.',
                                        'type' => 'String',
                                    ],
                                ],
                                'resolve' => '@=resolver(\'Product\', [args])',
                            ],
                            'catalog' => [
                                'type' => 'Catalog',
                                'args' => [
                                    'id' => [
                                        'description' => 'Resolves using the catalog ID.',
                                        'type' => 'Int',
                                    ],
                                    'slug' => [
                                        'description' => 'Resolves using the catalog slug.',
                                        'type' => 'String',
                                    ],
                                    'products' => [
                                        'description' => 'Products',
                                        'type' => 'String',
                                    ],
                                    'tags' => [
                                        'description' => 'Tags',
                                        'type' => '[Int]',
                                    ],
                                ],
                                'resolve' => '@=resolver(\'Catalog\', [args])',
                            ],
                            'addresses' => [
                                'type' => 'Addresses',
                                'args' => [
                                    'token' => [
                                        'description' => 'User Token',
                                        'type' => 'String',
                                    ],
                                ],
                                'resolve' => '@=resolver(\'Address\', [args])',
                            ],
                            'basket' => [
                                'type' => 'Basket',
                                'resolve' => '@=resolver(\'Basket\', [args])',
                                'args' => [

                                ],
                            ],
                            'users_orders' => [
                                'type' => 'UsersOrders',
                                'resolve' => '@=resolver(\'UsersOrders\', [args])',
                                'args' => [

                                ],
                            ],
                            'banner' => [
                                'type' => 'Banner',
                                'resolve' => '@=resolver(\'Banner\', [args])',
                                'args' => [

                                ],
                            ],
                            'sale' => [
                                'type' => 'Sale',
                                'args' => [
                                    'limit' => [
                                        'description' => 'Sale Limit',
                                        'type' => 'Int',
                                    ],
                                ],
                                'resolve' => '@=resolver(\'Sales\', [args])',
                            ],
                        ],
                        'name' => 'Query',
                        'interfaces' => [

                        ],
                    ],
                ],
                'DateTime' => [
                    'type' => 'custom-scalar',
                    'class_name' => 'DateTimeType',
                    'inherits' => [

                    ],
                    'decorator' => false,
                    'config' => [
                        'serialize' => [
                            0 => 'App\\GraphQL\\Type\\DateTimeType',
                            1 => 'serialize',
                        ],
                        'parseValue' => [
                            0 => 'App\\GraphQL\\Type\\DateTimeType',
                            1 => 'parseValue',
                        ],
                        'parseLiteral' => [
                            0 => 'App\\GraphQL\\Type\\DateTimeType',
                            1 => 'parseLiteral',
                        ],
                        'name' => 'DateTime',
                    ],
                ],
                'User' => [
                    'type' => 'object',
                    'class_name' => 'UserType',
                    'inherits' => [

                    ],
                    'decorator' => false,
                    'config' => [
                        'description' => 'User',
                        'fields' => [
                            'id' => [
                                'type' => 'Int!',
                                'description' => 'User Id.',
                                'args' => [

                                ],
                            ],
                            'email' => [
                                'type' => 'String',
                                'description' => 'Email',
                                'args' => [

                                ],
                            ],
                        ],
                        'name' => 'User',
                        'interfaces' => [

                        ],
                    ],
                ],
                'AuthorizedUser' => [
                    'type' => 'object',
                    'class_name' => 'AuthorizedUserType',
                    'inherits' => [

                    ],
                    'decorator' => false,
                    'config' => [
                        'description' => 'Authorized User',
                        'fields' => [
                            'id' => [
                                'type' => 'Int!',
                                'description' => 'User Id.',
                                'args' => [

                                ],
                            ],
                            'email' => [
                                'type' => 'String!',
                                'description' => 'Email',
                                'args' => [

                                ],
                            ],
                            'hash' => [
                                'type' => 'String',
                                'description' => 'Hash',
                                'args' => [

                                ],
                            ],
                        ],
                        'name' => 'AuthorizedUser',
                        'interfaces' => [

                        ],
                    ],
                ],
                'createOrderInput' => [
                    'type' => 'input-object',
                    'class_name' => 'createOrderInputType',
                    'inherits' => [

                    ],
                    'decorator' => false,
                    'config' => [
                        'fields' => [
                            'item_id' => [
                                'type' => 'Int!',
                                'description' => 'Item ID',
                            ],
                            'qty' => [
                                'type' => 'Int',
                                'description' => 'Qty',
                            ],
                        ],
                        'name' => 'createOrderInput',
                    ],
                ],
                'Sale' => [
                    'type' => 'object',
                    'class_name' => 'SaleType',
                    'inherits' => [

                    ],
                    'decorator' => false,
                    'config' => [
                        'description' => 'Sale',
                        'fields' => [
                            'data' => [
                                'type' => '[SaleItem]',
                                'args' => [

                                ],
                            ],
                        ],
                        'name' => 'Sale',
                        'interfaces' => [

                        ],
                    ],
                ],
                'SaleItem' => [
                    'type' => 'object',
                    'class_name' => 'SaleItemType',
                    'inherits' => [

                    ],
                    'decorator' => false,
                    'config' => [
                        'description' => 'Sale Item',
                        'fields' => [
                            'id' => [
                                'type' => 'Int!',
                                'description' => 'Banner Id.',
                                'args' => [

                                ],
                            ],
                            'start' => [
                                'type' => 'String',
                                'description' => 'Start',
                                'args' => [

                                ],
                            ],
                            'finish' => [
                                'type' => 'String',
                                'description' => 'Finish',
                                'args' => [

                                ],
                            ],
                            'category' => [
                                'type' => 'String',
                                'description' => 'Category',
                                'args' => [

                                ],
                            ],
                            'discount' => [
                                'type' => 'Int!',
                                'description' => 'Discount',
                                'args' => [

                                ],
                            ],
                            'enabled' => [
                                'type' => 'String',
                                'description' => 'Enabled',
                                'args' => [

                                ],
                            ],
                            'featured' => [
                                'type' => 'String',
                                'description' => 'Featured',
                                'args' => [

                                ],
                            ],
                            'type' => [
                                'type' => 'String',
                                'description' => 'Type',
                                'args' => [

                                ],
                            ],
                            'prior' => [
                                'type' => 'Int!',
                                'description' => 'Prior',
                                'args' => [

                                ],
                            ],
                            'created' => [
                                'type' => 'DateTime',
                                'description' => 'Created',
                                'args' => [

                                ],
                            ],
                        ],
                        'name' => 'SaleItem',
                        'interfaces' => [

                        ],
                    ],
                ],
                'AddressConnection' => [
                    'type' => 'object',
                    'class_name' => 'AddressConnectionType',
                    'inherits' => [

                    ],
                    'decorator' => false,
                    'config' => [
                        'name' => 'AddressConnection',
                        'description' => 'A connection to a list of items.',
                        'fields' => [
                            'pageInfo' => [
                                'type' => 'PageInfo!',
                                'description' => 'Information to aid in pagination.',
                                'args' => [

                                ],
                            ],
                            'edges' => [
                                'type' => '[AddressEdge]',
                                'description' => 'Information to aid in pagination.',
                                'args' => [

                                ],
                            ],
                        ],
                        'interfaces' => [

                        ],
                    ],
                ],
                'ProductConnection' => [
                    'type' => 'object',
                    'class_name' => 'ProductConnectionType',
                    'inherits' => [

                    ],
                    'decorator' => false,
                    'config' => [
                        'name' => 'ProductConnection',
                        'description' => 'A connection to a list of items.',
                        'fields' => [
                            'pageInfo' => [
                                'type' => 'PageInfo!',
                                'description' => 'Information to aid in pagination.',
                                'args' => [

                                ],
                            ],
                            'edges' => [
                                'type' => '[ProductEdge]',
                                'description' => 'Information to aid in pagination.',
                                'args' => [

                                ],
                            ],
                        ],
                        'interfaces' => [

                        ],
                    ],
                ],
                'Banner' => [
                    'type' => 'object',
                    'class_name' => 'BannerType',
                    'inherits' => [

                    ],
                    'decorator' => false,
                    'config' => [
                        'description' => 'Banners',
                        'fields' => [
                            'data' => [
                                'type' => '[BannerItem]',
                                'args' => [

                                ],
                            ],
                        ],
                        'name' => 'Banner',
                        'interfaces' => [

                        ],
                    ],
                ],
                'BannerItem' => [
                    'type' => 'object',
                    'class_name' => 'BannerItemType',
                    'inherits' => [

                    ],
                    'decorator' => false,
                    'config' => [
                        'description' => 'Banner Item',
                        'fields' => [
                            'id' => [
                                'type' => 'Int!',
                                'description' => 'Banner Id.',
                                'args' => [

                                ],
                            ],
                            'path' => [
                                'type' => 'String',
                                'description' => 'Path',
                                'args' => [

                                ],
                            ],
                            'link' => [
                                'type' => 'String',
                                'description' => 'Link',
                                'args' => [

                                ],
                            ],
                        ],
                        'name' => 'BannerItem',
                        'interfaces' => [

                        ],
                    ],
                ],
                'UsersOrders' => [
                    'type' => 'object',
                    'class_name' => 'UsersOrdersType',
                    'inherits' => [

                    ],
                    'decorator' => false,
                    'config' => [
                        'description' => 'Users Orders',
                        'fields' => [
                            'orders' => [
                                'type' => '[UserOrder]',
                                'args' => [

                                ],
                            ],
                        ],
                        'name' => 'UsersOrders',
                        'interfaces' => [

                        ],
                    ],
                ],
                'UserOrder' => [
                    'type' => 'object',
                    'class_name' => 'UserOrderType',
                    'inherits' => [

                    ],
                    'decorator' => false,
                    'config' => [
                        'description' => 'User Order',
                        'fields' => [
                            'id' => [
                                'type' => 'Int',
                                'description' => 'Order Id',
                                'args' => [

                                ],
                            ],
                            'orderItems' => [
                                'type' => '[OrderItem]',
                                'description' => 'Order Item Id.',
                                'args' => [

                                ],
                            ],
                        ],
                        'name' => 'UserOrder',
                        'interfaces' => [

                        ],
                    ],
                ],
                'OrderItem' => [
                    'type' => 'object',
                    'class_name' => 'OrderItemType',
                    'inherits' => [

                    ],
                    'decorator' => false,
                    'config' => [
                        'description' => 'Order Item',
                        'fields' => [
                            'id' => [
                                'type' => 'Int',
                                'description' => 'Order Item Id',
                                'args' => [

                                ],
                            ],
                            'qty' => [
                                'type' => 'Int',
                                'description' => 'Order Item Qty',
                                'args' => [

                                ],
                            ],
                            'item' => [
                                'type' => 'ProductItem',
                                'description' => 'Order Item Product Item',
                                'args' => [

                                ],
                            ],
                        ],
                        'name' => 'OrderItem',
                        'interfaces' => [

                        ],
                    ],
                ],
                'Addresses' => [
                    'type' => 'object',
                    'class_name' => 'AddressesType',
                    'inherits' => [

                    ],
                    'decorator' => false,
                    'config' => [
                        'description' => 'User Addresses',
                        'resolveField' => '@=resolver("App\\\\GraphQL\\\\Resolver\\\\AddressField", [info, value, args])',
                        'fields' => [
                            'data' => [
                                'type' => 'AddressConnection',
                                'args' => [
                                    'limit' => [
                                        'type' => 'Int!',
                                        'defaultValue' => 20,
                                    ],
                                    'offset' => [
                                        'type' => 'Int!',
                                        'defaultValue' => 0,
                                    ],
                                ],
                            ],
                        ],
                        'name' => 'Addresses',
                        'interfaces' => [

                        ],
                    ],
                ],
                'AddBasketInput' => [
                    'type' => 'input-object',
                    'class_name' => 'AddBasketInputType',
                    'inherits' => [

                    ],
                    'decorator' => false,
                    'config' => [
                        'fields' => [
                            'item_id' => [
                                'type' => 'Int!',
                            ],
                        ],
                        'name' => 'AddBasketInput',
                    ],
                ],
                'ProductItem' => [
                    'type' => 'object',
                    'class_name' => 'ProductItemType',
                    'inherits' => [

                    ],
                    'decorator' => false,
                    'config' => [
                        'description' => 'Product Item',
                        'fields' => [
                            'id' => [
                                'type' => 'Int!',
                                'description' => 'Product Item Id.',
                                'args' => [

                                ],
                            ],
                            'name' => [
                                'type' => 'String',
                                'description' => 'Product Item Name',
                                'args' => [

                                ],
                            ],
                        ],
                        'name' => 'ProductItem',
                        'interfaces' => [

                        ],
                    ],
                ],
                'Product' => [
                    'type' => 'object',
                    'class_name' => 'ProductType',
                    'inherits' => [

                    ],
                    'decorator' => false,
                    'config' => [
                        'description' => 'Product',
                        'resolveField' => '@=resolver("App\\\\GraphQL\\\\Resolver\\\\ProductFieldResolver", [info, value, args])',
                        'fields' => [
                            'id' => [
                                'type' => 'Int!',
                                'description' => 'Product Id.',
                                'args' => [

                                ],
                            ],
                            'name' => [
                                'type' => 'String',
                                'description' => 'Product Name',
                                'args' => [

                                ],
                            ],
                            'url' => [
                                'type' => 'String',
                                'description' => 'Product Url',
                                'args' => [

                                ],
                            ],
                            'items' => [
                                'type' => 'ItemConnection',
                                'args' => [
                                    'limit' => [
                                        'type' => 'Int!',
                                        'defaultValue' => 20,
                                    ],
                                    'offset' => [
                                        'type' => 'Int!',
                                        'defaultValue' => 0,
                                    ],
                                ],
                            ],
                            'tags' => [
                                'type' => '[ProductFilters]',
                                'description' => 'Product Filter',
                                'args' => [

                                ],
                            ],
                        ],
                        'name' => 'Product',
                        'interfaces' => [

                        ],
                    ],
                ],
                'ProductFilters' => [
                    'type' => 'object',
                    'class_name' => 'ProductFiltersType',
                    'inherits' => [

                    ],
                    'decorator' => false,
                    'config' => [
                        'description' => 'Product Filter Item',
                        'fields' => [
                            'name' => [
                                'type' => 'String',
                                'description' => 'Product Filter Name.',
                                'args' => [

                                ],
                            ],
                            'value' => [
                                'type' => 'String',
                                'description' => 'Product Filter Value',
                                'args' => [

                                ],
                            ],
                        ],
                        'name' => 'ProductFilters',
                        'interfaces' => [

                        ],
                    ],
                ],
                'Address' => [
                    'type' => 'object',
                    'class_name' => 'AddressType',
                    'inherits' => [

                    ],
                    'decorator' => false,
                    'config' => [
                        'description' => 'User Address',
                        'fields' => [
                            'id' => [
                                'type' => 'Int!',
                                'description' => 'Product Id.',
                                'args' => [

                                ],
                            ],
                            'name' => [
                                'type' => 'String',
                                'description' => 'Address Name',
                                'args' => [

                                ],
                            ],
                            'user_id_id' => [
                                'type' => 'Int',
                                'description' => 'User ID',
                                'args' => [

                                ],
                            ],
                            'person' => [
                                'type' => 'String',
                                'description' => 'Person Address Name',
                                'args' => [

                                ],
                            ],
                            'zip' => [
                                'type' => 'String',
                                'description' => 'Post Code',
                                'args' => [

                                ],
                            ],
                            'region_id' => [
                                'type' => 'String',
                                'description' => 'Region ID',
                                'args' => [

                                ],
                            ],
                            'city' => [
                                'type' => 'String',
                                'description' => 'City',
                                'args' => [

                                ],
                            ],
                            'street' => [
                                'type' => 'String',
                                'description' => 'Street',
                                'args' => [

                                ],
                            ],
                            'house' => [
                                'type' => 'String',
                                'description' => 'House',
                                'args' => [

                                ],
                            ],
                            'corp' => [
                                'type' => 'String',
                                'description' => 'Corp',
                                'args' => [

                                ],
                            ],
                            'level' => [
                                'type' => 'String',
                                'description' => 'Level',
                                'args' => [

                                ],
                            ],
                            'flat' => [
                                'type' => 'String',
                                'description' => 'Flat',
                                'args' => [

                                ],
                            ],
                            'code' => [
                                'type' => 'String',
                                'description' => 'Code',
                                'args' => [

                                ],
                            ],
                            'active' => [
                                'type' => 'String',
                                'description' => 'Active',
                                'args' => [

                                ],
                            ],
                        ],
                        'name' => 'Address',
                        'interfaces' => [

                        ],
                    ],
                ],
                'ItemConnection' => [
                    'type' => 'object',
                    'class_name' => 'ItemConnectionType',
                    'inherits' => [

                    ],
                    'decorator' => false,
                    'config' => [
                        'name' => 'ItemConnection',
                        'description' => 'A connection to a list of items.',
                        'fields' => [
                            'pageInfo' => [
                                'type' => 'PageInfo!',
                                'description' => 'Information to aid in pagination.',
                                'args' => [

                                ],
                            ],
                            'edges' => [
                                'type' => '[ItemEdge]',
                                'description' => 'Information to aid in pagination.',
                                'args' => [

                                ],
                            ],
                        ],
                        'interfaces' => [

                        ],
                    ],
                ],
                'Basket' => [
                    'type' => 'object',
                    'class_name' => 'BasketType',
                    'inherits' => [

                    ],
                    'decorator' => false,
                    'config' => [
                        'description' => 'Basket',
                        'fields' => [
                            'products' => [
                                'type' => '[BasketProduct]',
                                'description' => 'Basket Id.',
                                'args' => [

                                ],
                            ],
                        ],
                        'name' => 'Basket',
                        'interfaces' => [

                        ],
                    ],
                ],
                'BasketProduct' => [
                    'type' => 'object',
                    'class_name' => 'BasketProductType',
                    'inherits' => [

                    ],
                    'decorator' => false,
                    'config' => [
                        'description' => 'Basket Product',
                        'fields' => [
                            'item_id' => [
                                'type' => 'Int',
                                'description' => 'Item Id',
                                'args' => [

                                ],
                            ],
                            'qty' => [
                                'type' => 'Int',
                                'description' => 'Qty',
                                'args' => [

                                ],
                            ],
                            'name' => [
                                'type' => 'String',
                                'description' => 'Basket Product Name',
                                'args' => [

                                ],
                            ],
                            'product_name' => [
                                'type' => 'String',
                                'description' => 'Basket Product Name',
                                'args' => [

                                ],
                            ],
                        ],
                        'name' => 'BasketProduct',
                        'interfaces' => [

                        ],
                    ],
                ],
                'UpdateBasketInput' => [
                    'type' => 'input-object',
                    'class_name' => 'UpdateBasketInputType',
                    'inherits' => [

                    ],
                    'decorator' => false,
                    'config' => [
                        'fields' => [
                            'item_id' => [
                                'type' => 'Int!',
                                'description' => 'Item ID',
                            ],
                            'qty' => [
                                'type' => 'Int',
                                'description' => 'Qty',
                            ],
                        ],
                        'name' => 'UpdateBasketInput',
                    ],
                ],
                'UserInput' => [
                    'type' => 'input-object',
                    'class_name' => 'UserInputType',
                    'inherits' => [

                    ],
                    'decorator' => false,
                    'config' => [
                        'fields' => [
                            'email' => [
                                'type' => 'String',
                            ],
                            'password' => [
                                'type' => 'String',
                            ],
                        ],
                        'name' => 'UserInput',
                    ],
                ],
                'Catalog' => [
                    'type' => 'object',
                    'class_name' => 'CatalogType',
                    'inherits' => [

                    ],
                    'decorator' => false,
                    'config' => [
                        'description' => 'Catalog',
                        'resolveField' => '@=resolver("App\\\\GraphQL\\\\Resolver\\\\CatalogResolver", [info, value, args])',
                        'fields' => [
                            'id' => [
                                'type' => 'Int!',
                                'description' => 'Catalog Id.',
                                'args' => [

                                ],
                            ],
                            'name' => [
                                'type' => 'String',
                                'description' => 'Catalog Name',
                                'args' => [

                                ],
                            ],
                            'products' => [
                                'type' => 'ProductConnection',
                                'args' => [
                                    'limit' => [
                                        'type' => 'Int!',
                                        'defaultValue' => 20,
                                    ],
                                    'offset' => [
                                        'type' => 'Int!',
                                        'defaultValue' => 0,
                                    ],
                                ],
                            ],
                            'count' => [
                                'type' => 'Int!',
                                'description' => 'Count of products',
                                'args' => [

                                ],
                            ],
                            'tags' => [
                                'type' => '[CatalogFilters]',
                                'description' => 'Catalog Filter',
                                'args' => [

                                ],
                            ],
                        ],
                        'name' => 'Catalog',
                        'interfaces' => [

                        ],
                    ],
                ],
                'CatalogFilters' => [
                    'type' => 'object',
                    'class_name' => 'CatalogFiltersType',
                    'inherits' => [

                    ],
                    'decorator' => false,
                    'config' => [
                        'description' => 'Catalog Filter Item',
                        'fields' => [
                            'id' => [
                                'type' => 'Int!',
                                'description' => 'Catalog Id.',
                                'args' => [

                                ],
                            ],
                            'name' => [
                                'type' => 'String',
                                'description' => 'Catalog Filter Item Name',
                                'args' => [

                                ],
                            ],
                            'childrens' => [
                                'type' => '[CatalogFilterItem]',
                                'description' => 'Catalog Filter Items Childrens',
                                'args' => [

                                ],
                            ],
                        ],
                        'name' => 'CatalogFilters',
                        'interfaces' => [

                        ],
                    ],
                ],
                'CatalogFilterItem' => [
                    'type' => 'object',
                    'class_name' => 'CatalogFilterItemType',
                    'inherits' => [

                    ],
                    'decorator' => false,
                    'config' => [
                        'description' => 'Catalog Filter Item',
                        'fields' => [
                            'id' => [
                                'type' => 'Int!',
                                'description' => 'Catalog Filter Item Id.',
                                'args' => [

                                ],
                            ],
                            'name' => [
                                'type' => 'String',
                                'description' => 'Catalog Filter Item Name',
                                'args' => [

                                ],
                            ],
                            'count' => [
                                'type' => 'Int',
                                'description' => 'Count products in selected filter',
                                'args' => [

                                ],
                            ],
                        ],
                        'name' => 'CatalogFilterItem',
                        'interfaces' => [

                        ],
                    ],
                ],
                'Mutation' => [
                    'type' => 'object',
                    'class_name' => 'MutationType',
                    'inherits' => [

                    ],
                    'decorator' => false,
                    'config' => [
                        'fields' => [
                            'auth' => [
                                'type' => 'AuthorizedUser!',
                                'resolve' => '@=mutation("App\\\\GraphQL\\\\Mutation\\\\UserMutation::auth", [args])',
                                'args' => [
                                    'input' => [
                                        'type' => 'UserInput!',
                                    ],
                                ],
                            ],
                            'addBasket' => [
                                'type' => 'Basket!',
                                'resolve' => '@=mutation("App\\\\GraphQL\\\\Mutation\\\\BasketMutation::add", [args])',
                                'args' => [
                                    'input' => [
                                        'type' => 'AddBasketInput!',
                                    ],
                                ],
                            ],
                            'removeBasket' => [
                                'type' => 'Basket!',
                                'resolve' => '@=mutation("App\\\\GraphQL\\\\Mutation\\\\BasketMutation::remove", [args])',
                                'args' => [
                                    'input' => [
                                        'type' => 'AddBasketInput!',
                                    ],
                                ],
                            ],
                            'updateBasket' => [
                                'type' => 'Basket!',
                                'resolve' => '@=mutation("App\\\\GraphQL\\\\Mutation\\\\BasketMutation::update", [args])',
                                'args' => [
                                    'input' => [
                                        'type' => 'UpdateBasketInput!',
                                    ],
                                ],
                            ],
                            'order' => [
                                'type' => 'Order!',
                                'resolve' => '@=mutation("App\\\\GraphQL\\\\Mutation\\\\OrderMutation::create", [args])',
                                'args' => [

                                ],
                            ],
                        ],
                        'name' => 'Mutation',
                        'interfaces' => [

                        ],
                    ],
                ],
                'Order' => [
                    'type' => 'object',
                    'class_name' => 'OrderType',
                    'inherits' => [

                    ],
                    'decorator' => false,
                    'config' => [
                        'description' => 'Order',
                        'fields' => [
                            'id' => [
                                'type' => 'Int',
                                'description' => 'Order Id.',
                                'args' => [

                                ],
                            ],
                        ],
                        'name' => 'Order',
                        'interfaces' => [

                        ],
                    ],
                ],
                'PageInfo' => [
                    'type' => 'object',
                    'class_name' => 'PageInfoType',
                    'inherits' => [

                    ],
                    'decorator' => false,
                    'config' => [
                        'description' => 'Information about pagination in a connection.',
                        'fields' => [
                            'hasNextPage' => [
                                'type' => 'Boolean!',
                                'description' => 'When paginating forwards, are there more items?',
                                'args' => [

                                ],
                            ],
                            'hasPreviousPage' => [
                                'type' => 'Boolean!',
                                'description' => 'When paginating backwards, are there more items?',
                                'args' => [

                                ],
                            ],
                            'startCursor' => [
                                'type' => 'String',
                                'description' => 'When paginating backwards, the cursor to continue.',
                                'args' => [

                                ],
                            ],
                            'endCursor' => [
                                'type' => 'String',
                                'description' => 'When paginating forwards, the cursor to continue.',
                                'args' => [

                                ],
                            ],
                        ],
                        'name' => 'PageInfo',
                        'interfaces' => [

                        ],
                    ],
                ],
                'AddressEdge' => [
                    'type' => 'object',
                    'class_name' => 'AddressEdgeType',
                    'inherits' => [

                    ],
                    'decorator' => false,
                    'config' => [
                        'name' => 'AddressEdge',
                        'description' => 'An edge in a connection.',
                        'fields' => [
                            'node' => [
                                'type' => 'Address!',
                                'resolve' => NULL,
                                'description' => 'The item at the end of the edge.',
                                'args' => [

                                ],
                            ],
                            'cursor' => [
                                'type' => 'String!',
                                'resolve' => NULL,
                                'description' => 'A cursor for use in pagination.',
                                'args' => [

                                ],
                            ],
                        ],
                        'interfaces' => [

                        ],
                    ],
                ],
                'ProductEdge' => [
                    'type' => 'object',
                    'class_name' => 'ProductEdgeType',
                    'inherits' => [

                    ],
                    'decorator' => false,
                    'config' => [
                        'name' => 'ProductEdge',
                        'description' => 'An edge in a connection.',
                        'fields' => [
                            'node' => [
                                'type' => 'Product!',
                                'resolve' => NULL,
                                'description' => 'The item at the end of the edge.',
                                'args' => [

                                ],
                            ],
                            'cursor' => [
                                'type' => 'String!',
                                'resolve' => NULL,
                                'description' => 'A cursor for use in pagination.',
                                'args' => [

                                ],
                            ],
                        ],
                        'interfaces' => [

                        ],
                    ],
                ],
                'ItemEdge' => [
                    'type' => 'object',
                    'class_name' => 'ItemEdgeType',
                    'inherits' => [

                    ],
                    'decorator' => false,
                    'config' => [
                        'name' => 'ItemEdge',
                        'description' => 'An edge in a connection.',
                        'fields' => [
                            'node' => [
                                'type' => 'ProductItem!',
                                'resolve' => NULL,
                                'description' => 'The item at the end of the edge.',
                                'args' => [

                                ],
                            ],
                            'cursor' => [
                                'type' => 'String!',
                                'resolve' => NULL,
                                'description' => 'A cursor for use in pagination.',
                                'args' => [

                                ],
                            ],
                        ],
                        'interfaces' => [

                        ],
                    ],
                ],
            ],
            'overblog_graphql.batching_method' => 'relay',
            'overblog_graphql.handle_cors' => true,
            'overblog_graphql.query_max_depth' => false,
            'overblog_graphql.query_max_complexity' => false,
            'overblog_graphql.enable_introspection' => true,
            'overblog_graphql.auto_mapping.enabled' => true,
            'overblog_graphql.auto_mapping.directories' => [

            ],
            'overblog_graphql.default_resolver' => [
                0 => 'Overblog\\GraphQLBundle\\Resolver\\Resolver',
                1 => 'defaultResolveFn',
            ],
            'overblog_graphql.class_namespace' => 'Overblog\\GraphQLBundle\\__DEFINITIONS__',
            'overblog_graphql.cache_dir' => NULL,
            'overblog_graphql.cache_dir_permissions' => NULL,
            'overblog_graphql.use_classloader_listener' => true,
            'overblog_graphiql.endpoint_resolver' => 'Overblog\\GraphiQLBundle\\Config\\GraphQLEndpoint\\Helpers\\OverblogGraphQLBundleEndpointResolver',
            'lexik_jwt_authentication.token_ttl' => 3600,
            'lexik_jwt_authentication.clock_skew' => 0,
            'lexik_jwt_authentication.user_identity_field' => 'username',
            'lexik_jwt_authentication.user_id_claim' => 'username',
            'lexik_jwt_authentication.encoder.signature_algorithm' => 'RS256',
            'lexik_jwt_authentication.encoder.crypto_engine' => 'openssl',
            'data_collector.templates' => [
                'data_collector.request' => [
                    0 => 'request',
                    1 => '@WebProfiler/Collector/request.html.twig',
                ],
                'data_collector.time' => [
                    0 => 'time',
                    1 => '@WebProfiler/Collector/time.html.twig',
                ],
                'data_collector.memory' => [
                    0 => 'memory',
                    1 => '@WebProfiler/Collector/memory.html.twig',
                ],
                'data_collector.validator' => [
                    0 => 'validator',
                    1 => '@WebProfiler/Collector/validator.html.twig',
                ],
                'data_collector.ajax' => [
                    0 => 'ajax',
                    1 => '@WebProfiler/Collector/ajax.html.twig',
                ],
                'data_collector.form' => [
                    0 => 'form',
                    1 => '@WebProfiler/Collector/form.html.twig',
                ],
                'data_collector.exception' => [
                    0 => 'exception',
                    1 => '@WebProfiler/Collector/exception.html.twig',
                ],
                'data_collector.logger' => [
                    0 => 'logger',
                    1 => '@WebProfiler/Collector/logger.html.twig',
                ],
                'data_collector.events' => [
                    0 => 'events',
                    1 => '@WebProfiler/Collector/events.html.twig',
                ],
                'data_collector.router' => [
                    0 => 'router',
                    1 => '@WebProfiler/Collector/router.html.twig',
                ],
                'data_collector.cache' => [
                    0 => 'cache',
                    1 => '@WebProfiler/Collector/cache.html.twig',
                ],
                'data_collector.translation' => [
                    0 => 'translation',
                    1 => '@WebProfiler/Collector/translation.html.twig',
                ],
                'data_collector.security' => [
                    0 => 'security',
                    1 => '@Security/Collector/security.html.twig',
                ],
                'data_collector.twig' => [
                    0 => 'twig',
                    1 => '@WebProfiler/Collector/twig.html.twig',
                ],
                'data_collector.doctrine' => [
                    0 => 'db',
                    1 => '@Doctrine/Collector/db.html.twig',
                ],
                'swiftmailer.data_collector' => [
                    0 => 'swiftmailer',
                    1 => '@Swiftmailer/Collector/swiftmailer.html.twig',
                ],
                'data_collector.dump' => [
                    0 => 'dump',
                    1 => '@Debug/Profiler/dump.html.twig',
                ],
                'easyadmin.data_collector' => [
                    0 => 'easyadmin',
                    1 => '@EasyAdmin/data_collector/easyadmin.html.twig',
                ],
                'Vich\\UploaderBundle\\DataCollector\\MappingCollector' => [
                    0 => 'vich_uploader.mapping_collector',
                    1 => '@VichUploader/Collector/mapping_collector.html.twig',
                ],
                'data_collector.config' => [
                    0 => 'config',
                    1 => '@WebProfiler/Collector/config.html.twig',
                ],
            ],
            'console.command.ids' => [
                0 => 'console.command.public_alias.doctrine_cache.contains_command',
                1 => 'console.command.public_alias.doctrine_cache.delete_command',
                2 => 'console.command.public_alias.doctrine_cache.flush_command',
                3 => 'console.command.public_alias.doctrine_cache.stats_command',
                4 => 'console.command.public_alias.doctrine_migrations.diff_command',
                5 => 'console.command.public_alias.doctrine_migrations.dump_schema_command',
                6 => 'console.command.public_alias.doctrine_migrations.execute_command',
                7 => 'console.command.public_alias.doctrine_migrations.generate_command',
                8 => 'console.command.public_alias.doctrine_migrations.latest_command',
                9 => 'console.command.public_alias.doctrine_migrations.migrate_command',
                10 => 'console.command.public_alias.doctrine_migrations.rollup_command',
                11 => 'console.command.public_alias.doctrine_migrations.status_command',
                12 => 'console.command.public_alias.doctrine_migrations.up_to_date_command',
                13 => 'console.command.public_alias.doctrine_migrations.version_command',
                14 => 'overblog_graphql.command.dump_schema',
                15 => 'overblog_graphql.command.debug',
                16 => 'overblog_graphql.command.compile',
            ],
        ];
    }
}
