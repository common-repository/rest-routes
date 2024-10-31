<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6077ce3189e4720eddc7d944088bcefa
{
    public static $files = array (
        '7b11c4dc42b3b3023073cb14e519683c' => __DIR__ . '/..' . '/ralouphie/getallheaders/src/getallheaders.php',
        'c964ee0ededf28c96ebd9db5099ef910' => __DIR__ . '/..' . '/guzzlehttp/promises/src/functions_include.php',
        '6e3fae29631ef280660b3cdad06f25a8' => __DIR__ . '/..' . '/symfony/deprecation-contracts/function.php',
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        '37a3dc5111fe8f707ab4c132ef1dbc62' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/functions_include.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
        ),
        'R' => 
        array (
            'RestRoutes\\' => 11,
        ),
        'P' => 
        array (
            'Psr\\Http\\Message\\' => 17,
            'Psr\\Http\\Client\\' => 16,
            'PhpMyAdmin\\SqlParser\\' => 21,
        ),
        'G' => 
        array (
            'GuzzleHttp\\Psr7\\' => 16,
            'GuzzleHttp\\Promise\\' => 19,
            'GuzzleHttp\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'RestRoutes\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes',
        ),
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-factory/src',
            1 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        'Psr\\Http\\Client\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-client/src',
        ),
        'PhpMyAdmin\\SqlParser\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmyadmin/sql-parser/src',
        ),
        'GuzzleHttp\\Psr7\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/psr7/src',
        ),
        'GuzzleHttp\\Promise\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/promises/src',
        ),
        'GuzzleHttp\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/guzzle/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'GuzzleHttp\\BodySummarizer' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/BodySummarizer.php',
        'GuzzleHttp\\BodySummarizerInterface' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/BodySummarizerInterface.php',
        'GuzzleHttp\\Client' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Client.php',
        'GuzzleHttp\\ClientInterface' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/ClientInterface.php',
        'GuzzleHttp\\ClientTrait' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/ClientTrait.php',
        'GuzzleHttp\\Cookie\\CookieJar' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Cookie/CookieJar.php',
        'GuzzleHttp\\Cookie\\CookieJarInterface' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Cookie/CookieJarInterface.php',
        'GuzzleHttp\\Cookie\\FileCookieJar' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Cookie/FileCookieJar.php',
        'GuzzleHttp\\Cookie\\SessionCookieJar' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Cookie/SessionCookieJar.php',
        'GuzzleHttp\\Cookie\\SetCookie' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Cookie/SetCookie.php',
        'GuzzleHttp\\Exception\\BadResponseException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/BadResponseException.php',
        'GuzzleHttp\\Exception\\ClientException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/ClientException.php',
        'GuzzleHttp\\Exception\\ConnectException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/ConnectException.php',
        'GuzzleHttp\\Exception\\GuzzleException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/GuzzleException.php',
        'GuzzleHttp\\Exception\\InvalidArgumentException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/InvalidArgumentException.php',
        'GuzzleHttp\\Exception\\RequestException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/RequestException.php',
        'GuzzleHttp\\Exception\\ServerException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/ServerException.php',
        'GuzzleHttp\\Exception\\TooManyRedirectsException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/TooManyRedirectsException.php',
        'GuzzleHttp\\Exception\\TransferException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/TransferException.php',
        'GuzzleHttp\\HandlerStack' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/HandlerStack.php',
        'GuzzleHttp\\Handler\\CurlFactory' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Handler/CurlFactory.php',
        'GuzzleHttp\\Handler\\CurlFactoryInterface' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Handler/CurlFactoryInterface.php',
        'GuzzleHttp\\Handler\\CurlHandler' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Handler/CurlHandler.php',
        'GuzzleHttp\\Handler\\CurlMultiHandler' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Handler/CurlMultiHandler.php',
        'GuzzleHttp\\Handler\\EasyHandle' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Handler/EasyHandle.php',
        'GuzzleHttp\\Handler\\HeaderProcessor' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Handler/HeaderProcessor.php',
        'GuzzleHttp\\Handler\\MockHandler' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Handler/MockHandler.php',
        'GuzzleHttp\\Handler\\Proxy' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Handler/Proxy.php',
        'GuzzleHttp\\Handler\\StreamHandler' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Handler/StreamHandler.php',
        'GuzzleHttp\\MessageFormatter' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/MessageFormatter.php',
        'GuzzleHttp\\MessageFormatterInterface' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/MessageFormatterInterface.php',
        'GuzzleHttp\\Middleware' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Middleware.php',
        'GuzzleHttp\\Pool' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Pool.php',
        'GuzzleHttp\\PrepareBodyMiddleware' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/PrepareBodyMiddleware.php',
        'GuzzleHttp\\Promise\\AggregateException' => __DIR__ . '/..' . '/guzzlehttp/promises/src/AggregateException.php',
        'GuzzleHttp\\Promise\\CancellationException' => __DIR__ . '/..' . '/guzzlehttp/promises/src/CancellationException.php',
        'GuzzleHttp\\Promise\\Coroutine' => __DIR__ . '/..' . '/guzzlehttp/promises/src/Coroutine.php',
        'GuzzleHttp\\Promise\\Create' => __DIR__ . '/..' . '/guzzlehttp/promises/src/Create.php',
        'GuzzleHttp\\Promise\\Each' => __DIR__ . '/..' . '/guzzlehttp/promises/src/Each.php',
        'GuzzleHttp\\Promise\\EachPromise' => __DIR__ . '/..' . '/guzzlehttp/promises/src/EachPromise.php',
        'GuzzleHttp\\Promise\\FulfilledPromise' => __DIR__ . '/..' . '/guzzlehttp/promises/src/FulfilledPromise.php',
        'GuzzleHttp\\Promise\\Is' => __DIR__ . '/..' . '/guzzlehttp/promises/src/Is.php',
        'GuzzleHttp\\Promise\\Promise' => __DIR__ . '/..' . '/guzzlehttp/promises/src/Promise.php',
        'GuzzleHttp\\Promise\\PromiseInterface' => __DIR__ . '/..' . '/guzzlehttp/promises/src/PromiseInterface.php',
        'GuzzleHttp\\Promise\\PromisorInterface' => __DIR__ . '/..' . '/guzzlehttp/promises/src/PromisorInterface.php',
        'GuzzleHttp\\Promise\\RejectedPromise' => __DIR__ . '/..' . '/guzzlehttp/promises/src/RejectedPromise.php',
        'GuzzleHttp\\Promise\\RejectionException' => __DIR__ . '/..' . '/guzzlehttp/promises/src/RejectionException.php',
        'GuzzleHttp\\Promise\\TaskQueue' => __DIR__ . '/..' . '/guzzlehttp/promises/src/TaskQueue.php',
        'GuzzleHttp\\Promise\\TaskQueueInterface' => __DIR__ . '/..' . '/guzzlehttp/promises/src/TaskQueueInterface.php',
        'GuzzleHttp\\Promise\\Utils' => __DIR__ . '/..' . '/guzzlehttp/promises/src/Utils.php',
        'GuzzleHttp\\Psr7\\AppendStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/AppendStream.php',
        'GuzzleHttp\\Psr7\\BufferStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/BufferStream.php',
        'GuzzleHttp\\Psr7\\CachingStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/CachingStream.php',
        'GuzzleHttp\\Psr7\\DroppingStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/DroppingStream.php',
        'GuzzleHttp\\Psr7\\Exception\\MalformedUriException' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/Exception/MalformedUriException.php',
        'GuzzleHttp\\Psr7\\FnStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/FnStream.php',
        'GuzzleHttp\\Psr7\\Header' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/Header.php',
        'GuzzleHttp\\Psr7\\HttpFactory' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/HttpFactory.php',
        'GuzzleHttp\\Psr7\\InflateStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/InflateStream.php',
        'GuzzleHttp\\Psr7\\LazyOpenStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/LazyOpenStream.php',
        'GuzzleHttp\\Psr7\\LimitStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/LimitStream.php',
        'GuzzleHttp\\Psr7\\Message' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/Message.php',
        'GuzzleHttp\\Psr7\\MessageTrait' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/MessageTrait.php',
        'GuzzleHttp\\Psr7\\MimeType' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/MimeType.php',
        'GuzzleHttp\\Psr7\\MultipartStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/MultipartStream.php',
        'GuzzleHttp\\Psr7\\NoSeekStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/NoSeekStream.php',
        'GuzzleHttp\\Psr7\\PumpStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/PumpStream.php',
        'GuzzleHttp\\Psr7\\Query' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/Query.php',
        'GuzzleHttp\\Psr7\\Request' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/Request.php',
        'GuzzleHttp\\Psr7\\Response' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/Response.php',
        'GuzzleHttp\\Psr7\\Rfc7230' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/Rfc7230.php',
        'GuzzleHttp\\Psr7\\ServerRequest' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/ServerRequest.php',
        'GuzzleHttp\\Psr7\\Stream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/Stream.php',
        'GuzzleHttp\\Psr7\\StreamDecoratorTrait' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/StreamDecoratorTrait.php',
        'GuzzleHttp\\Psr7\\StreamWrapper' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/StreamWrapper.php',
        'GuzzleHttp\\Psr7\\UploadedFile' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/UploadedFile.php',
        'GuzzleHttp\\Psr7\\Uri' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/Uri.php',
        'GuzzleHttp\\Psr7\\UriComparator' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/UriComparator.php',
        'GuzzleHttp\\Psr7\\UriNormalizer' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/UriNormalizer.php',
        'GuzzleHttp\\Psr7\\UriResolver' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/UriResolver.php',
        'GuzzleHttp\\Psr7\\Utils' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/Utils.php',
        'GuzzleHttp\\RedirectMiddleware' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/RedirectMiddleware.php',
        'GuzzleHttp\\RequestOptions' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/RequestOptions.php',
        'GuzzleHttp\\RetryMiddleware' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/RetryMiddleware.php',
        'GuzzleHttp\\TransferStats' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/TransferStats.php',
        'GuzzleHttp\\Utils' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Utils.php',
        'PhpMyAdmin\\SqlParser\\Component' => __DIR__ . '/..' . '/phpmyadmin/sql-parser/src/Component.php',
        'PhpMyAdmin\\SqlParser\\Components\\AlterOperation' => __DIR__ . '/..' . '/phpmyadmin/sql-parser/src/Components/AlterOperation.php',
        'PhpMyAdmin\\SqlParser\\Components\\Array2d' => __DIR__ . '/..' . '/phpmyadmin/sql-parser/src/Components/Array2d.php',
        'PhpMyAdmin\\SqlParser\\Components\\ArrayObj' => __DIR__ . '/..' . '/phpmyadmin/sql-parser/src/Components/ArrayObj.php',
        'PhpMyAdmin\\SqlParser\\Components\\CaseExpression' => __DIR__ . '/..' . '/phpmyadmin/sql-parser/src/Components/CaseExpression.php',
        'PhpMyAdmin\\SqlParser\\Components\\Condition' => __DIR__ . '/..' . '/phpmyadmin/sql-parser/src/Components/Condition.php',
        'PhpMyAdmin\\SqlParser\\Components\\CreateDefinition' => __DIR__ . '/..' . '/phpmyadmin/sql-parser/src/Components/CreateDefinition.php',
        'PhpMyAdmin\\SqlParser\\Components\\DataType' => __DIR__ . '/..' . '/phpmyadmin/sql-parser/src/Components/DataType.php',
        'PhpMyAdmin\\SqlParser\\Components\\Expression' => __DIR__ . '/..' . '/phpmyadmin/sql-parser/src/Components/Expression.php',
        'PhpMyAdmin\\SqlParser\\Components\\ExpressionArray' => __DIR__ . '/..' . '/phpmyadmin/sql-parser/src/Components/ExpressionArray.php',
        'PhpMyAdmin\\SqlParser\\Components\\FunctionCall' => __DIR__ . '/..' . '/phpmyadmin/sql-parser/src/Components/FunctionCall.php',
        'PhpMyAdmin\\SqlParser\\Components\\GroupKeyword' => __DIR__ . '/..' . '/phpmyadmin/sql-parser/src/Components/GroupKeyword.php',
        'PhpMyAdmin\\SqlParser\\Components\\IndexHint' => __DIR__ . '/..' . '/phpmyadmin/sql-parser/src/Components/IndexHint.php',
        'PhpMyAdmin\\SqlParser\\Components\\IntoKeyword' => __DIR__ . '/..' . '/phpmyadmin/sql-parser/src/Components/IntoKeyword.php',
        'PhpMyAdmin\\SqlParser\\Components\\JoinKeyword' => __DIR__ . '/..' . '/phpmyadmin/sql-parser/src/Components/JoinKeyword.php',
        'PhpMyAdmin\\SqlParser\\Components\\Key' => __DIR__ . '/..' . '/phpmyadmin/sql-parser/src/Components/Key.php',
        'PhpMyAdmin\\SqlParser\\Components\\Limit' => __DIR__ . '/..' . '/phpmyadmin/sql-parser/src/Components/Limit.php',
        'PhpMyAdmin\\SqlParser\\Components\\LockExpression' => __DIR__ . '/..' . '/phpmyadmin/sql-parser/src/Components/LockExpression.php',
        'PhpMyAdmin\\SqlParser\\Components\\OptionsArray' => __DIR__ . '/..' . '/phpmyadmin/sql-parser/src/Components/OptionsArray.php',
        'PhpMyAdmin\\SqlParser\\Components\\OrderKeyword' => __DIR__ . '/..' . '/phpmyadmin/sql-parser/src/Components/OrderKeyword.php',
        'PhpMyAdmin\\SqlParser\\Components\\ParameterDefinition' => __DIR__ . '/..' . '/phpmyadmin/sql-parser/src/Components/ParameterDefinition.php',
        'PhpMyAdmin\\SqlParser\\Components\\PartitionDefinition' => __DIR__ . '/..' . '/phpmyadmin/sql-parser/src/Components/PartitionDefinition.php',
        'PhpMyAdmin\\SqlParser\\Components\\Reference' => __DIR__ . '/..' . '/phpmyadmin/sql-parser/src/Components/Reference.php',
        'PhpMyAdmin\\SqlParser\\Components\\RenameOperation' => __DIR__ . '/..' . '/phpmyadmin/sql-parser/src/Components/RenameOperation.php',
        'PhpMyAdmin\\SqlParser\\Components\\SetOperation' => __DIR__ . '/..' . '/phpmyadmin/sql-parser/src/Components/SetOperation.php',
        'PhpMyAdmin\\SqlParser\\Components\\UnionKeyword' => __DIR__ . '/..' . '/phpmyadmin/sql-parser/src/Components/UnionKeyword.php',
        'PhpMyAdmin\\SqlParser\\Components\\WithKeyword' => __DIR__ . '/..' . '/phpmyadmin/sql-parser/src/Components/WithKeyword.php',
        'PhpMyAdmin\\SqlParser\\Context' => __DIR__ . '/..' . '/phpmyadmin/sql-parser/src/Context.php',
        'PhpMyAdmin\\SqlParser\\Contexts\\ContextMariaDb100000' => __DIR__ . '/..' . '/phpmyadmin/sql-parser/src/Contexts/ContextMariaDb100000.php',
        'PhpMyAdmin\\SqlParser\\Contexts\\ContextMariaDb100100' => __DIR__ . '/..' . '/phpmyadmin/sql-parser/src/Contexts/ContextMariaDb100100.php',
        'PhpMyAdmin\\SqlParser\\Contexts\\ContextMariaDb100200' => __DIR__ . '/..' . '/phpmyadmin/sql-parser/src/Contexts/ContextMariaDb100200.php',
        'PhpMyAdmin\\SqlParser\\Contexts\\ContextMariaDb100300' => __DIR__ . '/..' . '/phpmyadmin/sql-parser/src/Contexts/ContextMariaDb100300.php',
        'PhpMyAdmin\\SqlParser\\Contexts\\ContextMariaDb100400' => __DIR__ . '/..' . '/phpmyadmin/sql-parser/src/Contexts/ContextMariaDb100400.php',
        'PhpMyAdmin\\SqlParser\\Contexts\\ContextMariaDb100500' => __DIR__ . '/..' . '/phpmyadmin/sql-parser/src/Contexts/ContextMariaDb100500.php',
        'PhpMyAdmin\\SqlParser\\Contexts\\ContextMariaDb100600' => __DIR__ . '/..' . '/phpmyadmin/sql-parser/src/Contexts/ContextMariaDb100600.php',
        'PhpMyAdmin\\SqlParser\\Contexts\\ContextMySql50000' => __DIR__ . '/..' . '/phpmyadmin/sql-parser/src/Contexts/ContextMySql50000.php',
        'PhpMyAdmin\\SqlParser\\Contexts\\ContextMySql50100' => __DIR__ . '/..' . '/phpmyadmin/sql-parser/src/Contexts/ContextMySql50100.php',
        'PhpMyAdmin\\SqlParser\\Contexts\\ContextMySql50500' => __DIR__ . '/..' . '/phpmyadmin/sql-parser/src/Contexts/ContextMySql50500.php',
        'PhpMyAdmin\\SqlParser\\Contexts\\ContextMySql50600' => __DIR__ . '/..' . '/phpmyadmin/sql-parser/src/Contexts/ContextMySql50600.php',
        'PhpMyAdmin\\SqlParser\\Contexts\\ContextMySql50700' => __DIR__ . '/..' . '/phpmyadmin/sql-parser/src/Contexts/ContextMySql50700.php',
        'PhpMyAdmin\\SqlParser\\Contexts\\ContextMySql80000' => __DIR__ . '/..' . '/phpmyadmin/sql-parser/src/Contexts/ContextMySql80000.php',
        'PhpMyAdmin\\SqlParser\\Core' => __DIR__ . '/..' . '/phpmyadmin/sql-parser/src/Core.php',
        'PhpMyAdmin\\SqlParser\\Exceptions\\LexerException' => __DIR__ . '/..' . '/phpmyadmin/sql-parser/src/Exceptions/LexerException.php',
        'PhpMyAdmin\\SqlParser\\Exceptions\\LoaderException' => __DIR__ . '/..' . '/phpmyadmin/sql-parser/src/Exceptions/LoaderException.php',
        'PhpMyAdmin\\SqlParser\\Exceptions\\ParserException' => __DIR__ . '/..' . '/phpmyadmin/sql-parser/src/Exceptions/ParserException.php',
        'PhpMyAdmin\\SqlParser\\Lexer' => __DIR__ . '/..' . '/phpmyadmin/sql-parser/src/Lexer.php',
        'PhpMyAdmin\\SqlParser\\Parser' => __DIR__ . '/..' . '/phpmyadmin/sql-parser/src/Parser.php',
        'PhpMyAdmin\\SqlParser\\Statement' => __DIR__ . '/..' . '/phpmyadmin/sql-parser/src/Statement.php',
        'PhpMyAdmin\\SqlParser\\Statements\\AlterStatement' => __DIR__ . '/..' . '/phpmyadmin/sql-parser/src/Statements/AlterStatement.php',
        'PhpMyAdmin\\SqlParser\\Statements\\AnalyzeStatement' => __DIR__ . '/..' . '/phpmyadmin/sql-parser/src/Statements/AnalyzeStatement.php',
        'PhpMyAdmin\\SqlParser\\Statements\\BackupStatement' => __DIR__ . '/..' . '/phpmyadmin/sql-parser/src/Statements/BackupStatement.php',
        'PhpMyAdmin\\SqlParser\\Statements\\CallStatement' => __DIR__ . '/..' . '/phpmyadmin/sql-parser/src/Statements/CallStatement.php',
        'PhpMyAdmin\\SqlParser\\Statements\\CheckStatement' => __DIR__ . '/..' . '/phpmyadmin/sql-parser/src/Statements/CheckStatement.php',
        'PhpMyAdmin\\SqlParser\\Statements\\ChecksumStatement' => __DIR__ . '/..' . '/phpmyadmin/sql-parser/src/Statements/ChecksumStatement.php',
        'PhpMyAdmin\\SqlParser\\Statements\\CreateStatement' => __DIR__ . '/..' . '/phpmyadmin/sql-parser/src/Statements/CreateStatement.php',
        'PhpMyAdmin\\SqlParser\\Statements\\DeleteStatement' => __DIR__ . '/..' . '/phpmyadmin/sql-parser/src/Statements/DeleteStatement.php',
        'PhpMyAdmin\\SqlParser\\Statements\\DropStatement' => __DIR__ . '/..' . '/phpmyadmin/sql-parser/src/Statements/DropStatement.php',
        'PhpMyAdmin\\SqlParser\\Statements\\ExplainStatement' => __DIR__ . '/..' . '/phpmyadmin/sql-parser/src/Statements/ExplainStatement.php',
        'PhpMyAdmin\\SqlParser\\Statements\\InsertStatement' => __DIR__ . '/..' . '/phpmyadmin/sql-parser/src/Statements/InsertStatement.php',
        'PhpMyAdmin\\SqlParser\\Statements\\LoadStatement' => __DIR__ . '/..' . '/phpmyadmin/sql-parser/src/Statements/LoadStatement.php',
        'PhpMyAdmin\\SqlParser\\Statements\\LockStatement' => __DIR__ . '/..' . '/phpmyadmin/sql-parser/src/Statements/LockStatement.php',
        'PhpMyAdmin\\SqlParser\\Statements\\MaintenanceStatement' => __DIR__ . '/..' . '/phpmyadmin/sql-parser/src/Statements/MaintenanceStatement.php',
        'PhpMyAdmin\\SqlParser\\Statements\\NotImplementedStatement' => __DIR__ . '/..' . '/phpmyadmin/sql-parser/src/Statements/NotImplementedStatement.php',
        'PhpMyAdmin\\SqlParser\\Statements\\OptimizeStatement' => __DIR__ . '/..' . '/phpmyadmin/sql-parser/src/Statements/OptimizeStatement.php',
        'PhpMyAdmin\\SqlParser\\Statements\\PurgeStatement' => __DIR__ . '/..' . '/phpmyadmin/sql-parser/src/Statements/PurgeStatement.php',
        'PhpMyAdmin\\SqlParser\\Statements\\RenameStatement' => __DIR__ . '/..' . '/phpmyadmin/sql-parser/src/Statements/RenameStatement.php',
        'PhpMyAdmin\\SqlParser\\Statements\\RepairStatement' => __DIR__ . '/..' . '/phpmyadmin/sql-parser/src/Statements/RepairStatement.php',
        'PhpMyAdmin\\SqlParser\\Statements\\ReplaceStatement' => __DIR__ . '/..' . '/phpmyadmin/sql-parser/src/Statements/ReplaceStatement.php',
        'PhpMyAdmin\\SqlParser\\Statements\\RestoreStatement' => __DIR__ . '/..' . '/phpmyadmin/sql-parser/src/Statements/RestoreStatement.php',
        'PhpMyAdmin\\SqlParser\\Statements\\SelectStatement' => __DIR__ . '/..' . '/phpmyadmin/sql-parser/src/Statements/SelectStatement.php',
        'PhpMyAdmin\\SqlParser\\Statements\\SetStatement' => __DIR__ . '/..' . '/phpmyadmin/sql-parser/src/Statements/SetStatement.php',
        'PhpMyAdmin\\SqlParser\\Statements\\ShowStatement' => __DIR__ . '/..' . '/phpmyadmin/sql-parser/src/Statements/ShowStatement.php',
        'PhpMyAdmin\\SqlParser\\Statements\\TransactionStatement' => __DIR__ . '/..' . '/phpmyadmin/sql-parser/src/Statements/TransactionStatement.php',
        'PhpMyAdmin\\SqlParser\\Statements\\TruncateStatement' => __DIR__ . '/..' . '/phpmyadmin/sql-parser/src/Statements/TruncateStatement.php',
        'PhpMyAdmin\\SqlParser\\Statements\\UpdateStatement' => __DIR__ . '/..' . '/phpmyadmin/sql-parser/src/Statements/UpdateStatement.php',
        'PhpMyAdmin\\SqlParser\\Statements\\WithStatement' => __DIR__ . '/..' . '/phpmyadmin/sql-parser/src/Statements/WithStatement.php',
        'PhpMyAdmin\\SqlParser\\Token' => __DIR__ . '/..' . '/phpmyadmin/sql-parser/src/Token.php',
        'PhpMyAdmin\\SqlParser\\TokensList' => __DIR__ . '/..' . '/phpmyadmin/sql-parser/src/TokensList.php',
        'PhpMyAdmin\\SqlParser\\Tools\\ContextGenerator' => __DIR__ . '/..' . '/phpmyadmin/sql-parser/src/Tools/ContextGenerator.php',
        'PhpMyAdmin\\SqlParser\\Tools\\TestGenerator' => __DIR__ . '/..' . '/phpmyadmin/sql-parser/src/Tools/TestGenerator.php',
        'PhpMyAdmin\\SqlParser\\Translator' => __DIR__ . '/..' . '/phpmyadmin/sql-parser/src/Translator.php',
        'PhpMyAdmin\\SqlParser\\UtfString' => __DIR__ . '/..' . '/phpmyadmin/sql-parser/src/UtfString.php',
        'PhpMyAdmin\\SqlParser\\Utils\\BufferedQuery' => __DIR__ . '/..' . '/phpmyadmin/sql-parser/src/Utils/BufferedQuery.php',
        'PhpMyAdmin\\SqlParser\\Utils\\CLI' => __DIR__ . '/..' . '/phpmyadmin/sql-parser/src/Utils/CLI.php',
        'PhpMyAdmin\\SqlParser\\Utils\\Error' => __DIR__ . '/..' . '/phpmyadmin/sql-parser/src/Utils/Error.php',
        'PhpMyAdmin\\SqlParser\\Utils\\Formatter' => __DIR__ . '/..' . '/phpmyadmin/sql-parser/src/Utils/Formatter.php',
        'PhpMyAdmin\\SqlParser\\Utils\\Misc' => __DIR__ . '/..' . '/phpmyadmin/sql-parser/src/Utils/Misc.php',
        'PhpMyAdmin\\SqlParser\\Utils\\Query' => __DIR__ . '/..' . '/phpmyadmin/sql-parser/src/Utils/Query.php',
        'PhpMyAdmin\\SqlParser\\Utils\\Routine' => __DIR__ . '/..' . '/phpmyadmin/sql-parser/src/Utils/Routine.php',
        'PhpMyAdmin\\SqlParser\\Utils\\Table' => __DIR__ . '/..' . '/phpmyadmin/sql-parser/src/Utils/Table.php',
        'PhpMyAdmin\\SqlParser\\Utils\\Tokens' => __DIR__ . '/..' . '/phpmyadmin/sql-parser/src/Utils/Tokens.php',
        'Psr\\Http\\Client\\ClientExceptionInterface' => __DIR__ . '/..' . '/psr/http-client/src/ClientExceptionInterface.php',
        'Psr\\Http\\Client\\ClientInterface' => __DIR__ . '/..' . '/psr/http-client/src/ClientInterface.php',
        'Psr\\Http\\Client\\NetworkExceptionInterface' => __DIR__ . '/..' . '/psr/http-client/src/NetworkExceptionInterface.php',
        'Psr\\Http\\Client\\RequestExceptionInterface' => __DIR__ . '/..' . '/psr/http-client/src/RequestExceptionInterface.php',
        'Psr\\Http\\Message\\MessageInterface' => __DIR__ . '/..' . '/psr/http-message/src/MessageInterface.php',
        'Psr\\Http\\Message\\RequestFactoryInterface' => __DIR__ . '/..' . '/psr/http-factory/src/RequestFactoryInterface.php',
        'Psr\\Http\\Message\\RequestInterface' => __DIR__ . '/..' . '/psr/http-message/src/RequestInterface.php',
        'Psr\\Http\\Message\\ResponseFactoryInterface' => __DIR__ . '/..' . '/psr/http-factory/src/ResponseFactoryInterface.php',
        'Psr\\Http\\Message\\ResponseInterface' => __DIR__ . '/..' . '/psr/http-message/src/ResponseInterface.php',
        'Psr\\Http\\Message\\ServerRequestFactoryInterface' => __DIR__ . '/..' . '/psr/http-factory/src/ServerRequestFactoryInterface.php',
        'Psr\\Http\\Message\\ServerRequestInterface' => __DIR__ . '/..' . '/psr/http-message/src/ServerRequestInterface.php',
        'Psr\\Http\\Message\\StreamFactoryInterface' => __DIR__ . '/..' . '/psr/http-factory/src/StreamFactoryInterface.php',
        'Psr\\Http\\Message\\StreamInterface' => __DIR__ . '/..' . '/psr/http-message/src/StreamInterface.php',
        'Psr\\Http\\Message\\UploadedFileFactoryInterface' => __DIR__ . '/..' . '/psr/http-factory/src/UploadedFileFactoryInterface.php',
        'Psr\\Http\\Message\\UploadedFileInterface' => __DIR__ . '/..' . '/psr/http-message/src/UploadedFileInterface.php',
        'Psr\\Http\\Message\\UriFactoryInterface' => __DIR__ . '/..' . '/psr/http-factory/src/UriFactoryInterface.php',
        'Psr\\Http\\Message\\UriInterface' => __DIR__ . '/..' . '/psr/http-message/src/UriInterface.php',
        'RestRoutes\\Bootstrap\\App' => __DIR__ . '/../..' . '/includes/Bootstrap/App.php',
        'RestRoutes\\Capabilities\\CapList' => __DIR__ . '/../..' . '/includes/Capabilities/CapList.php',
        'RestRoutes\\Compatibility\\ACF' => __DIR__ . '/../..' . '/includes/Compatibility/ACF.php',
        'RestRoutes\\Compatibility\\ToolsetTypes' => __DIR__ . '/../..' . '/includes/Compatibility/ToolsetTypes.php',
        'RestRoutes\\Compatibility\\WPRestCache' => __DIR__ . '/../..' . '/includes/Compatibility/WPRestCache.php',
        'RestRoutes\\CustomTable\\DbConnection' => __DIR__ . '/../..' . '/includes/CustomTable/DbConnection.php',
        'RestRoutes\\Helpers\\ColumnParser' => __DIR__ . '/../..' . '/includes/Helpers/ColumnParser.php',
        'RestRoutes\\Helpers\\DynamicSourcesParser' => __DIR__ . '/../..' . '/includes/Helpers/DynamicSourcesParser.php',
        'RestRoutes\\Helpers\\EndpointFinder' => __DIR__ . '/../..' . '/includes/Helpers/EndpointFinder.php',
        'RestRoutes\\Helpers\\FieldValueParser' => __DIR__ . '/../..' . '/includes/Helpers/FieldValueParser.php',
        'RestRoutes\\Helpers\\HideEmptyProcessor' => __DIR__ . '/../..' . '/includes/Helpers/HideEmptyProcessor.php',
        'RestRoutes\\Helpers\\Normalizer' => __DIR__ . '/../..' . '/includes/Helpers/Normalizer.php',
        'RestRoutes\\Helpers\\OutputSorter' => __DIR__ . '/../..' . '/includes/Helpers/OutputSorter.php',
        'RestRoutes\\Helpers\\ParameterConditionalChecker' => __DIR__ . '/../..' . '/includes/Helpers/ParameterConditionalChecker.php',
        'RestRoutes\\Helpers\\RouteFactory' => __DIR__ . '/../..' . '/includes/Helpers/RouteFactory.php',
        'RestRoutes\\Helpers\\RoutesCollection' => __DIR__ . '/../..' . '/includes/Helpers/RoutesCollection.php',
        'RestRoutes\\Helpers\\StripTagsProcessor' => __DIR__ . '/../..' . '/includes/Helpers/StripTagsProcessor.php',
        'RestRoutes\\Helpers\\TrimProcessor' => __DIR__ . '/../..' . '/includes/Helpers/TrimProcessor.php',
        'RestRoutes\\Hooks\\Authentication\\BasicAuthentication' => __DIR__ . '/../..' . '/includes/Hooks/Authentication/BasicAuthentication.php',
        'RestRoutes\\Hooks\\IHook' => __DIR__ . '/../..' . '/includes/Hooks/IHook.php',
        'RestRoutes\\Hooks\\Menu\\Admin' => __DIR__ . '/../..' . '/includes/Hooks/Menu/Admin.php',
        'RestRoutes\\Hooks\\PostType\\PostLinks' => __DIR__ . '/../..' . '/includes/Hooks/PostType/PostLinks.php',
        'RestRoutes\\Hooks\\PostType\\Registration' => __DIR__ . '/../..' . '/includes/Hooks/PostType/Registration.php',
        'RestRoutes\\Hooks\\PostType\\RouteDuplication' => __DIR__ . '/../..' . '/includes/Hooks/PostType/RouteDuplication.php',
        'RestRoutes\\Hooks\\REST\\Actions\\CreateCustomTable\\Callback' => __DIR__ . '/../..' . '/includes/Hooks/REST/Actions/CreateCustomTable/Callback.php',
        'RestRoutes\\Hooks\\REST\\Actions\\CreateCustomTable\\QueryBuilder' => __DIR__ . '/../..' . '/includes/Hooks/REST/Actions/CreateCustomTable/QueryBuilder.php',
        'RestRoutes\\Hooks\\REST\\Actions\\CreatePosts\\Callback' => __DIR__ . '/../..' . '/includes/Hooks/REST/Actions/CreatePosts/Callback.php',
        'RestRoutes\\Hooks\\REST\\Actions\\CreatePosts\\Handler\\CustomFields' => __DIR__ . '/../..' . '/includes/Hooks/REST/Actions/CreatePosts/Handler/CustomFields.php',
        'RestRoutes\\Hooks\\REST\\Actions\\CreatePosts\\Handler\\IHandler' => __DIR__ . '/../..' . '/includes/Hooks/REST/Actions/CreatePosts/Handler/IHandler.php',
        'RestRoutes\\Hooks\\REST\\Actions\\CreatePosts\\Handler\\Taxonomies' => __DIR__ . '/../..' . '/includes/Hooks/REST/Actions/CreatePosts/Handler/Taxonomies.php',
        'RestRoutes\\Hooks\\REST\\Actions\\CreatePosts\\PostCreation' => __DIR__ . '/../..' . '/includes/Hooks/REST/Actions/CreatePosts/PostCreation.php',
        'RestRoutes\\Hooks\\REST\\Actions\\CreateTaxonomies\\Callback' => __DIR__ . '/../..' . '/includes/Hooks/REST/Actions/CreateTaxonomies/Callback.php',
        'RestRoutes\\Hooks\\REST\\Actions\\CreateTaxonomies\\Handler\\CustomFields' => __DIR__ . '/../..' . '/includes/Hooks/REST/Actions/CreateTaxonomies/Handler/CustomFields.php',
        'RestRoutes\\Hooks\\REST\\Actions\\CreateTaxonomies\\Handler\\IHandler' => __DIR__ . '/../..' . '/includes/Hooks/REST/Actions/CreateTaxonomies/Handler/IHandler.php',
        'RestRoutes\\Hooks\\REST\\Actions\\CreateTaxonomies\\TaxonomyCreation' => __DIR__ . '/../..' . '/includes/Hooks/REST/Actions/CreateTaxonomies/TaxonomyCreation.php',
        'RestRoutes\\Hooks\\REST\\Actions\\CreateUsers\\Callback' => __DIR__ . '/../..' . '/includes/Hooks/REST/Actions/CreateUsers/Callback.php',
        'RestRoutes\\Hooks\\REST\\Actions\\CreateUsers\\UserCreation' => __DIR__ . '/../..' . '/includes/Hooks/REST/Actions/CreateUsers/UserCreation.php',
        'RestRoutes\\Hooks\\REST\\Actions\\CustomSQLQuery\\Callback' => __DIR__ . '/../..' . '/includes/Hooks/REST/Actions/CustomSQLQuery/Callback.php',
        'RestRoutes\\Hooks\\REST\\Actions\\DeleteCustomTable\\Callback' => __DIR__ . '/../..' . '/includes/Hooks/REST/Actions/DeleteCustomTable/Callback.php',
        'RestRoutes\\Hooks\\REST\\Actions\\DeleteCustomTable\\QueryBuilder' => __DIR__ . '/../..' . '/includes/Hooks/REST/Actions/DeleteCustomTable/QueryBuilder.php',
        'RestRoutes\\Hooks\\REST\\Actions\\DisplayCustomTable\\Callback' => __DIR__ . '/../..' . '/includes/Hooks/REST/Actions/DisplayCustomTable/Callback.php',
        'RestRoutes\\Hooks\\REST\\Actions\\DisplayCustomTable\\QueryBuilder' => __DIR__ . '/../..' . '/includes/Hooks/REST/Actions/DisplayCustomTable/QueryBuilder.php',
        'RestRoutes\\Hooks\\REST\\Actions\\DisplayData\\Callback' => __DIR__ . '/../..' . '/includes/Hooks/REST/Actions/DisplayData/Callback.php',
        'RestRoutes\\Hooks\\REST\\Actions\\DisplayData\\MetaGroupRelation' => __DIR__ . '/../..' . '/includes/Hooks/REST/Actions/DisplayData/MetaGroupRelation.php',
        'RestRoutes\\Hooks\\REST\\Actions\\DisplayData\\Parser\\CustomFields' => __DIR__ . '/../..' . '/includes/Hooks/REST/Actions/DisplayData/Parser/CustomFields.php',
        'RestRoutes\\Hooks\\REST\\Actions\\DisplayData\\Parser\\DefaultFields' => __DIR__ . '/../..' . '/includes/Hooks/REST/Actions/DisplayData/Parser/DefaultFields.php',
        'RestRoutes\\Hooks\\REST\\Actions\\DisplayData\\Parser\\OffsetLimit' => __DIR__ . '/../..' . '/includes/Hooks/REST/Actions/DisplayData/Parser/OffsetLimit.php',
        'RestRoutes\\Hooks\\REST\\Actions\\DisplayData\\Parser\\Ordering' => __DIR__ . '/../..' . '/includes/Hooks/REST/Actions/DisplayData/Parser/Ordering.php',
        'RestRoutes\\Hooks\\REST\\Actions\\DisplayData\\Parser\\Output' => __DIR__ . '/../..' . '/includes/Hooks/REST/Actions/DisplayData/Parser/Output.php',
        'RestRoutes\\Hooks\\REST\\Actions\\DisplayData\\Parser\\Paged' => __DIR__ . '/../..' . '/includes/Hooks/REST/Actions/DisplayData/Parser/Paged.php',
        'RestRoutes\\Hooks\\REST\\Actions\\DisplayData\\Parser\\Taxonomies' => __DIR__ . '/../..' . '/includes/Hooks/REST/Actions/DisplayData/Parser/Taxonomies.php',
        'RestRoutes\\Hooks\\REST\\Actions\\DisplayData\\QueryBuilder' => __DIR__ . '/../..' . '/includes/Hooks/REST/Actions/DisplayData/QueryBuilder.php',
        'RestRoutes\\Hooks\\REST\\Actions\\DisplayTaxonomies\\Parser\\Output' => __DIR__ . '/../..' . '/includes/Hooks/REST/Actions/DisplayTaxonomies/Parser/Output.php',
        'RestRoutes\\Hooks\\REST\\Actions\\DisplayTaxonomies\\QueryBuilder' => __DIR__ . '/../..' . '/includes/Hooks/REST/Actions/DisplayTaxonomies/QueryBuilder.php',
        'RestRoutes\\Hooks\\REST\\Actions\\DisplayUsers\\Parser\\Output' => __DIR__ . '/../..' . '/includes/Hooks/REST/Actions/DisplayUsers/Parser/Output.php',
        'RestRoutes\\Hooks\\REST\\Actions\\DisplayUsers\\QueryBuilder' => __DIR__ . '/../..' . '/includes/Hooks/REST/Actions/DisplayUsers/QueryBuilder.php',
        'RestRoutes\\Hooks\\REST\\Actions\\EditCustomTable\\Callback' => __DIR__ . '/../..' . '/includes/Hooks/REST/Actions/EditCustomTable/Callback.php',
        'RestRoutes\\Hooks\\REST\\Actions\\EditCustomTable\\QueryBuilder' => __DIR__ . '/../..' . '/includes/Hooks/REST/Actions/EditCustomTable/QueryBuilder.php',
        'RestRoutes\\Hooks\\REST\\Actions\\EditPost\\Callback' => __DIR__ . '/../..' . '/includes/Hooks/REST/Actions/EditPost/Callback.php',
        'RestRoutes\\Hooks\\REST\\Actions\\EditPost\\EditPost' => __DIR__ . '/../..' . '/includes/Hooks/REST/Actions/EditPost/EditPost.php',
        'RestRoutes\\Hooks\\REST\\Actions\\EditUser\\Callback' => __DIR__ . '/../..' . '/includes/Hooks/REST/Actions/EditUser/Callback.php',
        'RestRoutes\\Hooks\\REST\\Actions\\EditUser\\EditUser' => __DIR__ . '/../..' . '/includes/Hooks/REST/Actions/EditUser/EditUser.php',
        'RestRoutes\\Hooks\\REST\\Actions\\ICallbackParser' => __DIR__ . '/../..' . '/includes/Hooks/REST/Actions/ICallbackParser.php',
        'RestRoutes\\Hooks\\REST\\Actions\\IQueryBuilder' => __DIR__ . '/../..' . '/includes/Hooks/REST/Actions/IQueryBuilder.php',
        'RestRoutes\\Hooks\\REST\\Actions\\IRouteCallback' => __DIR__ . '/../..' . '/includes/Hooks/REST/Actions/IRouteCallback.php',
        'RestRoutes\\Hooks\\REST\\Actions\\RestApiCall\\Callback' => __DIR__ . '/../..' . '/includes/Hooks/REST/Actions/RestApiCall/Callback.php',
        'RestRoutes\\Hooks\\REST\\Actions\\RestApiCall\\RestApiCall' => __DIR__ . '/../..' . '/includes/Hooks/REST/Actions/RestApiCall/RestApiCall.php',
        'RestRoutes\\Hooks\\REST\\Actions\\RouteCallbackFactory' => __DIR__ . '/../..' . '/includes/Hooks/REST/Actions/RouteCallbackFactory.php',
        'RestRoutes\\Hooks\\REST\\CustomRoutes' => __DIR__ . '/../..' . '/includes/Hooks/REST/CustomRoutes.php',
        'RestRoutes\\Hooks\\REST\\CustomTables' => __DIR__ . '/../..' . '/includes/Hooks/REST/CustomTables.php',
        'RestRoutes\\Hooks\\REST\\NewRoute' => __DIR__ . '/../..' . '/includes/Hooks/REST/NewRoute.php',
        'RestRoutes\\Hooks\\Scripts\\Scripts' => __DIR__ . '/../..' . '/includes/Hooks/Scripts/Scripts.php',
        'RestRoutes\\Models\\Endpoint' => __DIR__ . '/../..' . '/includes/Models/Endpoint.php',
        'RestRoutes\\Models\\Parameter' => __DIR__ . '/../..' . '/includes/Models/Parameter.php',
        'RestRoutes\\Models\\Route' => __DIR__ . '/../..' . '/includes/Models/Route.php',
        'RestRoutes\\Repository\\CustomTable' => __DIR__ . '/../..' . '/includes/Repository/CustomTable.php',
        'Symfony\\Polyfill\\Mbstring\\Mbstring' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/Mbstring.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6077ce3189e4720eddc7d944088bcefa::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6077ce3189e4720eddc7d944088bcefa::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit6077ce3189e4720eddc7d944088bcefa::$classMap;

        }, null, ClassLoader::class);
    }
}