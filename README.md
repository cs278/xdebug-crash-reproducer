xdebug should be installed and have the `develop` mode enabled.

PHP should be 8.1, crash doesn't appear to happen on 8.2.

```sh
composer install
php -f test.php
```

# Output

```
$ php -f test.php
/tmp/chris.smith/tmp.AyZVqWqkc9/test.php:12:
bool(true)
/tmp/chris.smith/tmp.AyZVqWqkc9/test.php:13:
string(7) "develop"
/tmp/chris.smith/tmp.AyZVqWqkc9/test.php:15:
class Generatedba53babf640f4381356547ca31930c97#5 (13) {
  private $config =>
  *uninitialized*
  private $conn =>
  *uninitialized*
  private $metadataFactory =>
  *uninitialized*
  private $unitOfWork =>
  *uninitialized*
  private $eventManager =>
  *uninitialized*
  private $proxyFactory =>
  *uninitialized*
  private $repositoryFactory =>
  *uninitialized*
  private $expressionBuilder =>
  *uninitialized*
  private $closed =>
  *uninitialized*
  private $filterCollection =>
  *uninitialized*
  private $cache =>
  *uninitialized*
  private $valueHolderdad1a =>
  NULL
  private $initializer2ef3d =>
  class Closure#2 (1) {
      virtual $closure =>
      "{closure}"
    public $parameter =>
    array(2) {
      '&$wrappedInstance' =>
      string(10) "<required>"
      '$proxy' =>
      string(10) "<required>"
    }
  }
}
#0 /tmp/chris.smith/tmp.AyZVqWqkc9/proxy.php(243): {closure}(NULL, Object(Generatedba53babf640f4381356547ca31930c97), '...', Array, Object(Closure))
#1 /tmp/chris.smith/tmp.AyZVqWqkc9/proxy.php(243): Closure->__invoke(NULL, Object(Generatedba53babf640f4381356547ca31930c97), '...', Array, Object(Closure))
#2 /tmp/chris.smith/tmp.AyZVqWqkc9/test.php(16): Generatedba53babf640f4381356547ca31930c97->getConfiguration()
Segmentation fault (core dumped)
```
