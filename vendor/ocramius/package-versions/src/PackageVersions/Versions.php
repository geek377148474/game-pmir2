<?php

declare(strict_types=1);

namespace PackageVersions;

/**
 * This class is generated by ocramius/package-versions, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 */
final class Versions
{
    public const ROOT_PACKAGE_NAME = 'hyperf/hyperf-skeleton';
    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    public const VERSIONS          = array (
  'doctrine/annotations' => '1.10.1@5eb79f3dbdffed6544e1fc287572c0f462bd29bb',
  'doctrine/inflector' => '1.3.1@ec3a55242203ffa6a4b27c58176da97ff0a7aec1',
  'doctrine/instantiator' => '1.3.0@ae466f726242e637cebdd526a7d991b9433bacf1',
  'doctrine/lexer' => '1.2.0@5242d66dbeb21a30dd8a3e66bf7a73b66e05e1f6',
  'duncan3dc/blade' => '4.8.0@76e2abd7c22f4e54bac181e14bdaddc782fa0941',
  'elasticsearch/elasticsearch' => 'v6.7.2@9ba89f905ebf699e72dacffa410331c7fecc8255',
  'fig/http-message-util' => '1.1.4@3242caa9da7221a304b8f84eb9eaddae0a7cf422',
  'guzzlehttp/guzzle' => '6.5.2@43ece0e75098b7ecd8d13918293029e555a50f82',
  'guzzlehttp/promises' => 'v1.3.1@a59da6cf61d80060647ff4d3eb2c03a2bc694646',
  'guzzlehttp/psr7' => '1.6.1@239400de7a173fe9901b9ac7c06497751f00727a',
  'guzzlehttp/ringphp' => '1.1.1@5e2a174052995663dd68e6b5ad838afd47dd615b',
  'guzzlehttp/streams' => '3.0.0@47aaa48e27dae43d39fc1cea0ccf0d84ac1a2ba5',
  'hyperf/amqp' => 'v1.1.26@290e05c8df0b5dd06e170f8f5476023f6327a8d1',
  'hyperf/async-queue' => 'v1.1.26@f6829680ec8989340107eec366491e16edd8f72c',
  'hyperf/cache' => 'v1.1.26@a329798f2d2d985d4708304b1f79f3daeb53b9be',
  'hyperf/command' => 'v1.1.26@8653e839d12c4dd0e8dd6756661ad0f3db8780ac',
  'hyperf/config' => 'v1.1.26@8b882c9e057544a62fda130a272938be3f9784ef',
  'hyperf/constants' => 'v1.1.26@6c3194785367f22af4d894b4ef0d3fd8ef3cf93e',
  'hyperf/consul' => 'v1.1.26@f5d4afa117bef32d246b79de61ed83773a8d705d',
  'hyperf/contract' => 'v1.1.26@6673f08bbdb62721d358852537fd19ea9496c35c',
  'hyperf/crontab' => 'v1.1.26@89956e4fe2aee2d77a34ae6832b8667cf88429dd',
  'hyperf/database' => 'v1.1.26@8ace43edb41c548f3b50865ed9961bf3bb517a33',
  'hyperf/db-connection' => 'v1.1.26@6a66c0cc5fc8377092eff6edfeedea977fa78ce6',
  'hyperf/devtool' => 'v1.1.26@a8121a9d5deedacf6ad198a4cf07df39b991e3d8',
  'hyperf/di' => 'v1.1.26@9e7c7e7a020ddbb76ee767acb3e3475504e45b45',
  'hyperf/dispatcher' => 'v1.1.26@0a20af0373f3a59901719ef568eb95d55eef27eb',
  'hyperf/elasticsearch' => 'v1.1.26@d4f81a1ae5ac4d1886edb417f4fc5350a2d437bb',
  'hyperf/event' => 'v1.1.26@bd9dc52c2cb99c90058a7ddc828b93777d8d92b8',
  'hyperf/exception-handler' => 'v1.1.26@4c5299013a76fd74112308a870e1e5cef89fcb9a',
  'hyperf/framework' => 'v1.1.26@0b3be5224408f4921be727f1dfa5ca571aa3f1f8',
  'hyperf/guzzle' => 'v1.1.26@9cd50c250669a7e4100411adcfdc3664a9cc8b11',
  'hyperf/http-message' => 'v1.1.26@932f25bbadc03056baf631e4ce9a9e5bfbb5900e',
  'hyperf/http-server' => 'v1.1.26@cfe3438559e95087195533b0af71a0350c731723',
  'hyperf/json-rpc' => 'v1.1.26@32b4647be321dd03b73b798dea77e05088670063',
  'hyperf/load-balancer' => 'v1.1.26@b16fcb86f98ea2d346f864b382db9f57ed0b515e',
  'hyperf/logger' => 'v1.1.26@42553fe23a883cef71cd1272f22eb3014ac314dc',
  'hyperf/memory' => 'v1.1.26@43120425a0180a6ab7223f3bdeb51326abad6c66',
  'hyperf/model-cache' => 'v1.1.26@ddefcbdf8a6e7a4962091452e206ee946ea59268',
  'hyperf/model-listener' => 'v1.1.26@06e1b7411660df834a9c8a53111612c3f7d0bf9e',
  'hyperf/paginator' => 'v1.1.26@80a946b58a94fb427f83232a4c990b32583379a3',
  'hyperf/pool' => 'v1.1.26@909b8155f3ad2b651360374595a98c2326913f9a',
  'hyperf/process' => 'v1.1.26@a629e2bbec3ecb146f3f991c6c7935e86592db3a',
  'hyperf/redis' => 'v1.1.26@7778027f413aed50c59f0b95df0aa904767007a9',
  'hyperf/rpc' => 'v1.1.26@792e41734b5e054c848ffc1f5bedc826474f3201',
  'hyperf/rpc-client' => 'v1.1.26@4ac480370654e35f9d8051c4a3cff2928058f893',
  'hyperf/rpc-server' => 'v1.1.26@2fb3b12c44379aad7b711baf28f6e2c6b28b6f73',
  'hyperf/server' => 'v1.1.26@ca348e07e7aa35b63cf52230261c068dbdcbb0f9',
  'hyperf/service-governance' => 'v1.1.26@faff82406543e7f00fa9afedda8c2bd0f31b73df',
  'hyperf/session' => 'v1.1.26@a0a1f6a7a3e8511cc370b9791325aed2ea9dd771',
  'hyperf/task' => 'v1.1.26@feff576be6d9c0409a0f92f19b7a75395d4fa3d9',
  'hyperf/tracer' => 'v1.1.26@8b1ff3840b8d11ff205d688f15a55c4c8911643f',
  'hyperf/utils' => 'v1.1.26@86701a09d4663b5e79b6befa0fe50aa63282a05e',
  'hyperf/view' => 'v1.1.26@2d8b2deb8524923e7fb986eb91ffb54ef3a1d95c',
  'illuminate/container' => 'v6.18.8@4078808892a7a40cbbfa5dec57c2efa1f170097d',
  'illuminate/contracts' => 'v6.18.8@e08ea83602d96cdfd7106a15f07878935c1a7675',
  'illuminate/events' => 'v6.18.8@fbcc805c869521b3fa90eee9175bb5b15ec8ffd4',
  'illuminate/filesystem' => 'v6.18.8@799a3af9435458d56e9f3647e09e11ffc9ace896',
  'illuminate/support' => 'v6.18.8@6955d0c254ae55ede96be71309b5fb09693441cd',
  'illuminate/view' => 'v6.18.8@1b691e94f8fe8c2e3f05d14a2f63e98cdb332ea4',
  'jcchavezs/zipkin-opentracing' => '0.1.4@d2c05915c3628610eeed4d2acec14e96d56ff056',
  'jetbrains/phpstorm-stubs' => 'v2019.3@883b6facd78e01c0743b554af86fa590c2573f40',
  'laminas/laminas-mime' => '2.7.4@e45a7d856bf7b4a7b5bd00d6371f9961dc233add',
  'laminas/laminas-stdlib' => '3.2.1@2b18347625a2f06a1a485acfbc870f699dbe51c6',
  'laminas/laminas-zendframework-bridge' => '1.0.3@bfbbdb6c998d50dbf69d2187cb78a5f1fa36e1e9',
  'markrogoyski/math-php' => 'v0.49.0@41d56a7542233cbb0489e7982facdb1d88d8c08b',
  'monolog/monolog' => '1.25.3@fa82921994db851a8becaf3787a9e73c5976b6f1',
  'nesbot/carbon' => '2.32.2@f10e22cf546704fab1db4ad4b9dedbc5c797a0dc',
  'nikic/fast-route' => 'v1.3.0@181d480e08d9476e61381e04a71b34dc0432e812',
  'nikic/php-parser' => 'v4.4.0@bd43ec7152eaaab3bd8c6d0aa95ceeb1df8ee120',
  'opentracing/opentracing' => '1.0.0-beta6@42eb0e58c68054fd7c994b58831ea4cc207e8a0e',
  'openzipkin/zipkin' => '1.3.4@fe8a275068d909efe1c13b21ee989a1474ae074c',
  'php-amqplib/php-amqplib' => 'v2.11.1@cfbfaf6262cd8d017f29862164f75e265d832434',
  'php-di/phpdoc-reader' => '2.1.1@15678f7451c020226807f520efb867ad26fbbfcf',
  'phpdocumentor/reflection-common' => '2.0.0@63a995caa1ca9e5590304cd845c15ad6d482a62a',
  'phpdocumentor/reflection-docblock' => '5.1.0@cd72d394ca794d3466a3b2fc09d5a6c1dc86b47e',
  'phpdocumentor/type-resolver' => '1.1.0@7462d5f123dfc080dfdf26897032a6513644fc95',
  'phpoption/phpoption' => '1.7.3@4acfd6a4b33a509d8c88f50e5222f734b6aeebae',
  'phpseclib/phpseclib' => '2.0.27@34620af4df7d1988d8f0d7e91f6c8a3bf931d8dc',
  'psr/container' => '1.0.0@b7ce3b176482dbbc1245ebf52b181af44c2cf55f',
  'psr/event-dispatcher' => '1.0.0@dbefd12671e8a14ec7f180cab83036ed26714bb0',
  'psr/http-message' => '1.0.1@f6561bf28d520154e4b0ec72be95418abe6d9363',
  'psr/http-server-handler' => '1.0.1@aff2f80e33b7f026ec96bb42f63242dc50ffcae7',
  'psr/http-server-middleware' => '1.0.1@2296f45510945530b9dceb8bcedb5cb84d40c5f5',
  'psr/log' => '1.1.3@0f73288fd15629204f9d42b7055f72dacbe811fc',
  'psr/simple-cache' => '1.0.1@408d5eafb83c57f6365a3ca330ff23aa4a5fa39b',
  'ralouphie/getallheaders' => '3.0.3@120b605dfeb996808c31b6477290a714d356e822',
  'react/promise' => 'v2.7.1@31ffa96f8d2ed0341a57848cbb84d88b89dd664d',
  'roave/better-reflection' => '4.0.0@d64c7fd6b358bc7b22844c2b4883d279eb771bbd',
  'roave/signature' => '1.0.0@bed4ecbdd7f312ab6bb39561ac191f520bcee386',
  'symfony/console' => 'v4.4.7@10bb3ee3c97308869d53b3e3d03f6ac23ff985f7',
  'symfony/debug' => 'v4.4.7@346636d2cae417992ecfd761979b2ab98b339a45',
  'symfony/finder' => 'v4.4.7@5729f943f9854c5781984ed4907bbb817735776b',
  'symfony/inflector' => 'v5.0.7@70c25c66427e2bb6ba0827d668366d60b0a90cbf',
  'symfony/polyfill-ctype' => 'v1.15.0@4719fa9c18b0464d399f1a63bf624b42b6fa8d14',
  'symfony/polyfill-mbstring' => 'v1.15.0@81ffd3a9c6d707be22e3012b827de1c9775fc5ac',
  'symfony/polyfill-php73' => 'v1.15.0@0f27e9f464ea3da33cbe7ca3bdf4eb66def9d0f7',
  'symfony/property-access' => 'v4.4.7@75cbf0f388d82685ce06515951397bc1370901d7',
  'symfony/serializer' => 'v4.4.7@2a508a535f2323defb325cf28301064fcbb061b9',
  'symfony/service-contracts' => 'v2.0.1@144c5e51266b281231e947b51223ba14acf1a749',
  'symfony/translation' => 'v5.0.7@99b831770e10807dca0979518e2c89edffef5978',
  'symfony/translation-contracts' => 'v2.0.1@8cc682ac458d75557203b2f2f14b0b92e1c744ed',
  'vlucas/phpdotenv' => 'v3.6.3@1b3103013797f04521c6cae5560f604649484066',
  'webmozart/assert' => '1.7.0@aed98a490f9a8f78468232db345ab9cf606cf598',
  'composer/semver' => '1.5.1@c6bea70230ef4dd483e6bbcab6005f682ed3a8de',
  'composer/xdebug-handler' => '1.4.1@1ab9842d69e64fb3a01be6b656501032d1b78cb7',
  'doctrine/cache' => '1.10.0@382e7f4db9a12dc6c19431743a2b096041bcdd62',
  'doctrine/collections' => '1.6.4@6b1e4b2b66f6d6e49983cebfe23a21b7ccc5b0d7',
  'doctrine/common' => '2.12.0@2053eafdf60c2172ee1373d1b9289ba1db7f1fc6',
  'doctrine/event-manager' => '1.1.0@629572819973f13486371cb611386eb17851e85c',
  'doctrine/persistence' => '1.3.7@0af483f91bada1c9ded6c2cfd26ab7d5ab2094e0',
  'doctrine/reflection' => '1.2.1@55e71912dfcd824b2fdd16f2d9afe15684cfce79',
  'friendsofphp/php-cs-fixer' => 'v2.16.3@83baf823a33a1cbd5416c8626935cf3f843c10b0',
  'hamcrest/hamcrest-php' => 'v2.0.0@776503d3a8e85d4f9a1148614f95b7a608b046ad',
  'hyperf/testing' => 'v1.1.26@f2a4d08592b255e9352690ad5f70e5f07e79431e',
  'jean85/pretty-package-versions' => '1.2@75c7effcf3f77501d0e0caa75111aff4daa0dd48',
  'mockery/mockery' => '1.3.1@f69bbde7d7a75d6b2862d9ca8fab1cd28014b4be',
  'myclabs/deep-copy' => '1.9.5@b2c28789e80a97badd14145fda39b545d83ca3ef',
  'nette/bootstrap' => 'v3.0.1@b45a1e33b6a44beb307756522396551e5a9ff249',
  'nette/di' => 'v3.0.3@77d69061cbf8f9cfb7363dd983136f51213d3e41',
  'nette/finder' => 'v2.5.2@4ad2c298eb8c687dd0e74ae84206a4186eeaed50',
  'nette/neon' => 'v3.1.2@3c3dcbc6bf6c80dc97b1fc4ba9a22ae67930fc0e',
  'nette/php-generator' => 'v3.3.4@8fe7e699dca7db186f56d75800cb1ec32e39c856',
  'nette/robot-loader' => 'v3.2.3@726c462e73e739e965ec654a667407074cfe83c0',
  'nette/schema' => 'v1.0.2@febf71fb4052c824046f5a33f4f769a6e7fa0cb4',
  'nette/utils' => 'v3.1.1@2c17d16d8887579ae1c0898ff94a3668997fd3eb',
  'ocramius/package-versions' => '1.5.1@1d32342b8c1eb27353c8887c366147b4c2da673c',
  'paragonie/random_compat' => 'v9.99.99@84b4dfb120c6f9b4ff7b3685f9b8f1aa365a0c95',
  'pdepend/pdepend' => '2.7.1@daba1cf0a6edaf172fa02a17807ae29f4c1c7471',
  'phar-io/manifest' => '1.0.3@7761fcacf03b4d4f16e7ccb606d4879ca431fcf4',
  'phar-io/version' => '2.0.1@45a2ec53a73c70ce41d55cedef9063630abaf1b6',
  'php-cs-fixer/diff' => 'v1.3.0@78bb099e9c16361126c86ce82ec4405ebab8e756',
  'phpmd/phpmd' => '2.8.2@714629ed782537f638fe23c4346637659b779a77',
  'phpspec/prophecy' => 'v1.10.3@451c3cd1418cf640de218914901e51b064abb093',
  'phpstan/phpdoc-parser' => '0.3.5@8c4ef2aefd9788238897b678a985e1d5c8df6db4',
  'phpstan/phpstan' => '0.11.19@63cc502f6957b7f74efbac444b4cf219dcadffd7',
  'phpunit/php-code-coverage' => '6.1.4@807e6013b00af69b6c5d9ceb4282d0393dbb9d8d',
  'phpunit/php-file-iterator' => '2.0.2@050bedf145a257b1ff02746c31894800e5122946',
  'phpunit/php-text-template' => '1.2.1@31f8b717e51d9a2afca6c9f046f5d69fc27c8686',
  'phpunit/php-timer' => '2.1.2@1038454804406b0b5f5f520358e78c1c2f71501e',
  'phpunit/php-token-stream' => '3.1.1@995192df77f63a59e47f025390d2d1fdf8f425ff',
  'phpunit/phpunit' => '7.5.20@9467db479d1b0487c99733bb1e7944d32deded2c',
  'sebastian/code-unit-reverse-lookup' => '1.0.1@4419fcdb5eabb9caa61a27c7a1db532a6b55dd18',
  'sebastian/comparator' => '3.0.2@5de4fc177adf9bce8df98d8d141a7559d7ccf6da',
  'sebastian/diff' => '3.0.2@720fcc7e9b5cf384ea68d9d930d480907a0c1a29',
  'sebastian/environment' => '4.2.3@464c90d7bdf5ad4e8a6aea15c091fec0603d4368',
  'sebastian/exporter' => '3.1.2@68609e1261d215ea5b21b7987539cbfbe156ec3e',
  'sebastian/global-state' => '2.0.0@e8ba02eed7bbbb9e59e43dedd3dddeff4a56b0c4',
  'sebastian/object-enumerator' => '3.0.3@7cfd9e65d11ffb5af41198476395774d4c8a84c5',
  'sebastian/object-reflector' => '1.1.1@773f97c67f28de00d397be301821b06708fca0be',
  'sebastian/recursion-context' => '3.0.0@5b0cd723502bac3b006cbf3dbf7a1e3fcefe4fa8',
  'sebastian/resource-operations' => '2.0.1@4d7a795d35b889bf80a0cc04e08d77cedfa917a9',
  'sebastian/version' => '2.0.1@99732be0ddb3361e16ad77b68ba41efc8e979019',
  'swoft/swoole-ide-helper' => 'v4.4.8@dfbe372cca6baccd362bc276aa07c5d65b2c1b36',
  'symfony/config' => 'v5.0.7@3e633c31a34738f7f4ed7a225c43fc45ca74c986',
  'symfony/dependency-injection' => 'v5.0.7@4e48dc44680d8efa357410c78093a04753196981',
  'symfony/event-dispatcher' => 'v4.4.7@abc8e3618bfdb55e44c8c6a00abd333f831bbfed',
  'symfony/event-dispatcher-contracts' => 'v1.1.7@c43ab685673fb6c8d84220c77897b1d6cdbe1d18',
  'symfony/filesystem' => 'v5.0.7@ca3b87dd09fff9b771731637f5379965fbfab420',
  'symfony/options-resolver' => 'v5.0.7@09dccfffd24b311df7f184aa80ee7b61ad61ed8d',
  'symfony/polyfill-php70' => 'v1.15.0@2a18e37a489803559284416df58c71ccebe50bf0',
  'symfony/polyfill-php72' => 'v1.15.0@37b0976c78b94856543260ce09b460a7bc852747',
  'symfony/process' => 'v5.0.7@c5ca4a0fc16a0c888067d43fbcfe1f8a53d8e70e',
  'symfony/stopwatch' => 'v5.0.7@a1d86d30d4522423afc998f32404efa34fcf5a73',
  'theseer/tokenizer' => '1.1.3@11336f6f84e16a720dae9d8e6ed5019efa85a0f9',
  'hyperf/hyperf-skeleton' => 'No version set (parsed as 1.0.0)@',
);

    private function __construct()
    {
    }

    /**
     * @throws \OutOfBoundsException If a version cannot be located.
     *
     * @psalm-param key-of<self::VERSIONS> $packageName
     */
    public static function getVersion(string $packageName) : string
    {
        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new \OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files'
        );
    }
}
