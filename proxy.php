<?php

class Generatedba53babf640f4381356547ca31930c97 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderdad1a = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer2ef3d = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesd95ee = [
        
    ];

    private static $signatureba53babf640f4381356547ca31930c97 = 'YTo0OntzOjk6ImNsYXNzTmFtZSI7czoyNjoiRG9jdHJpbmVcT1JNXEVudGl0eU1hbmFnZXIiO3M6NzoiZmFjdG9yeSI7czo1MDoiUHJveHlNYW5hZ2VyXEZhY3RvcnlcTGF6eUxvYWRpbmdWYWx1ZUhvbGRlckZhY3RvcnkiO3M6MTk6InByb3h5TWFuYWdlclZlcnNpb24iO3M6NDg6InYxLjAuMTZAZWNhZGJkYzkwNTJlNGFkMDhjNjBjOGEwMjI2ODcxMmU1MDQyN2Y3YyI7czoxMjoicHJveHlPcHRpb25zIjthOjA6e319';

    public function getConnection()
    {
        $this->initializer2ef3d && ($this->initializer2ef3d->__invoke($valueHolderdad1a, $this, 'getConnection', array(), $this->initializer2ef3d) || 1) && $this->valueHolderdad1a = $valueHolderdad1a;

        return $this->valueHolderdad1a->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer2ef3d && ($this->initializer2ef3d->__invoke($valueHolderdad1a, $this, 'getMetadataFactory', array(), $this->initializer2ef3d) || 1) && $this->valueHolderdad1a = $valueHolderdad1a;

        return $this->valueHolderdad1a->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer2ef3d && ($this->initializer2ef3d->__invoke($valueHolderdad1a, $this, 'getExpressionBuilder', array(), $this->initializer2ef3d) || 1) && $this->valueHolderdad1a = $valueHolderdad1a;

        return $this->valueHolderdad1a->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer2ef3d && ($this->initializer2ef3d->__invoke($valueHolderdad1a, $this, 'beginTransaction', array(), $this->initializer2ef3d) || 1) && $this->valueHolderdad1a = $valueHolderdad1a;

        return $this->valueHolderdad1a->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer2ef3d && ($this->initializer2ef3d->__invoke($valueHolderdad1a, $this, 'getCache', array(), $this->initializer2ef3d) || 1) && $this->valueHolderdad1a = $valueHolderdad1a;

        return $this->valueHolderdad1a->getCache();
    }

    public function transactional($func)
    {
        $this->initializer2ef3d && ($this->initializer2ef3d->__invoke($valueHolderdad1a, $this, 'transactional', array('func' => $func), $this->initializer2ef3d) || 1) && $this->valueHolderdad1a = $valueHolderdad1a;

        return $this->valueHolderdad1a->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer2ef3d && ($this->initializer2ef3d->__invoke($valueHolderdad1a, $this, 'wrapInTransaction', array('func' => $func), $this->initializer2ef3d) || 1) && $this->valueHolderdad1a = $valueHolderdad1a;

        return $this->valueHolderdad1a->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer2ef3d && ($this->initializer2ef3d->__invoke($valueHolderdad1a, $this, 'commit', array(), $this->initializer2ef3d) || 1) && $this->valueHolderdad1a = $valueHolderdad1a;

        return $this->valueHolderdad1a->commit();
    }

    public function rollback()
    {
        $this->initializer2ef3d && ($this->initializer2ef3d->__invoke($valueHolderdad1a, $this, 'rollback', array(), $this->initializer2ef3d) || 1) && $this->valueHolderdad1a = $valueHolderdad1a;

        return $this->valueHolderdad1a->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer2ef3d && ($this->initializer2ef3d->__invoke($valueHolderdad1a, $this, 'getClassMetadata', array('className' => $className), $this->initializer2ef3d) || 1) && $this->valueHolderdad1a = $valueHolderdad1a;

        return $this->valueHolderdad1a->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer2ef3d && ($this->initializer2ef3d->__invoke($valueHolderdad1a, $this, 'createQuery', array('dql' => $dql), $this->initializer2ef3d) || 1) && $this->valueHolderdad1a = $valueHolderdad1a;

        return $this->valueHolderdad1a->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer2ef3d && ($this->initializer2ef3d->__invoke($valueHolderdad1a, $this, 'createNamedQuery', array('name' => $name), $this->initializer2ef3d) || 1) && $this->valueHolderdad1a = $valueHolderdad1a;

        return $this->valueHolderdad1a->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer2ef3d && ($this->initializer2ef3d->__invoke($valueHolderdad1a, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer2ef3d) || 1) && $this->valueHolderdad1a = $valueHolderdad1a;

        return $this->valueHolderdad1a->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer2ef3d && ($this->initializer2ef3d->__invoke($valueHolderdad1a, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer2ef3d) || 1) && $this->valueHolderdad1a = $valueHolderdad1a;

        return $this->valueHolderdad1a->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer2ef3d && ($this->initializer2ef3d->__invoke($valueHolderdad1a, $this, 'createQueryBuilder', array(), $this->initializer2ef3d) || 1) && $this->valueHolderdad1a = $valueHolderdad1a;

        return $this->valueHolderdad1a->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer2ef3d && ($this->initializer2ef3d->__invoke($valueHolderdad1a, $this, 'flush', array('entity' => $entity), $this->initializer2ef3d) || 1) && $this->valueHolderdad1a = $valueHolderdad1a;

        return $this->valueHolderdad1a->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer2ef3d && ($this->initializer2ef3d->__invoke($valueHolderdad1a, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer2ef3d) || 1) && $this->valueHolderdad1a = $valueHolderdad1a;

        return $this->valueHolderdad1a->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer2ef3d && ($this->initializer2ef3d->__invoke($valueHolderdad1a, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer2ef3d) || 1) && $this->valueHolderdad1a = $valueHolderdad1a;

        return $this->valueHolderdad1a->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer2ef3d && ($this->initializer2ef3d->__invoke($valueHolderdad1a, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer2ef3d) || 1) && $this->valueHolderdad1a = $valueHolderdad1a;

        return $this->valueHolderdad1a->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer2ef3d && ($this->initializer2ef3d->__invoke($valueHolderdad1a, $this, 'clear', array('entityName' => $entityName), $this->initializer2ef3d) || 1) && $this->valueHolderdad1a = $valueHolderdad1a;

        return $this->valueHolderdad1a->clear($entityName);
    }

    public function close()
    {
        $this->initializer2ef3d && ($this->initializer2ef3d->__invoke($valueHolderdad1a, $this, 'close', array(), $this->initializer2ef3d) || 1) && $this->valueHolderdad1a = $valueHolderdad1a;

        return $this->valueHolderdad1a->close();
    }

    public function persist($entity)
    {
        $this->initializer2ef3d && ($this->initializer2ef3d->__invoke($valueHolderdad1a, $this, 'persist', array('entity' => $entity), $this->initializer2ef3d) || 1) && $this->valueHolderdad1a = $valueHolderdad1a;

        return $this->valueHolderdad1a->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer2ef3d && ($this->initializer2ef3d->__invoke($valueHolderdad1a, $this, 'remove', array('entity' => $entity), $this->initializer2ef3d) || 1) && $this->valueHolderdad1a = $valueHolderdad1a;

        return $this->valueHolderdad1a->remove($entity);
    }

    public function refresh($entity, ?int $lockMode = null)
    {
        $this->initializer2ef3d && ($this->initializer2ef3d->__invoke($valueHolderdad1a, $this, 'refresh', array('entity' => $entity, 'lockMode' => $lockMode), $this->initializer2ef3d) || 1) && $this->valueHolderdad1a = $valueHolderdad1a;

        return $this->valueHolderdad1a->refresh($entity, $lockMode);
    }

    public function detach($entity)
    {
        $this->initializer2ef3d && ($this->initializer2ef3d->__invoke($valueHolderdad1a, $this, 'detach', array('entity' => $entity), $this->initializer2ef3d) || 1) && $this->valueHolderdad1a = $valueHolderdad1a;

        return $this->valueHolderdad1a->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer2ef3d && ($this->initializer2ef3d->__invoke($valueHolderdad1a, $this, 'merge', array('entity' => $entity), $this->initializer2ef3d) || 1) && $this->valueHolderdad1a = $valueHolderdad1a;

        return $this->valueHolderdad1a->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer2ef3d && ($this->initializer2ef3d->__invoke($valueHolderdad1a, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer2ef3d) || 1) && $this->valueHolderdad1a = $valueHolderdad1a;

        return $this->valueHolderdad1a->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer2ef3d && ($this->initializer2ef3d->__invoke($valueHolderdad1a, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer2ef3d) || 1) && $this->valueHolderdad1a = $valueHolderdad1a;

        return $this->valueHolderdad1a->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer2ef3d && ($this->initializer2ef3d->__invoke($valueHolderdad1a, $this, 'getRepository', array('entityName' => $entityName), $this->initializer2ef3d) || 1) && $this->valueHolderdad1a = $valueHolderdad1a;

        return $this->valueHolderdad1a->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer2ef3d && ($this->initializer2ef3d->__invoke($valueHolderdad1a, $this, 'contains', array('entity' => $entity), $this->initializer2ef3d) || 1) && $this->valueHolderdad1a = $valueHolderdad1a;

        return $this->valueHolderdad1a->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer2ef3d && ($this->initializer2ef3d->__invoke($valueHolderdad1a, $this, 'getEventManager', array(), $this->initializer2ef3d) || 1) && $this->valueHolderdad1a = $valueHolderdad1a;

        return $this->valueHolderdad1a->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer2ef3d && ($this->initializer2ef3d->__invoke($valueHolderdad1a, $this, 'getConfiguration', array(), $this->initializer2ef3d) || 1) && $this->valueHolderdad1a = $valueHolderdad1a;

        return $this->valueHolderdad1a->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer2ef3d && ($this->initializer2ef3d->__invoke($valueHolderdad1a, $this, 'isOpen', array(), $this->initializer2ef3d) || 1) && $this->valueHolderdad1a = $valueHolderdad1a;

        return $this->valueHolderdad1a->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer2ef3d && ($this->initializer2ef3d->__invoke($valueHolderdad1a, $this, 'getUnitOfWork', array(), $this->initializer2ef3d) || 1) && $this->valueHolderdad1a = $valueHolderdad1a;

        return $this->valueHolderdad1a->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer2ef3d && ($this->initializer2ef3d->__invoke($valueHolderdad1a, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer2ef3d) || 1) && $this->valueHolderdad1a = $valueHolderdad1a;

        return $this->valueHolderdad1a->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer2ef3d && ($this->initializer2ef3d->__invoke($valueHolderdad1a, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer2ef3d) || 1) && $this->valueHolderdad1a = $valueHolderdad1a;

        return $this->valueHolderdad1a->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer2ef3d && ($this->initializer2ef3d->__invoke($valueHolderdad1a, $this, 'getProxyFactory', array(), $this->initializer2ef3d) || 1) && $this->valueHolderdad1a = $valueHolderdad1a;

        return $this->valueHolderdad1a->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer2ef3d && ($this->initializer2ef3d->__invoke($valueHolderdad1a, $this, 'initializeObject', array('obj' => $obj), $this->initializer2ef3d) || 1) && $this->valueHolderdad1a = $valueHolderdad1a;

        return $this->valueHolderdad1a->initializeObject($obj);
    }

    public function isUninitializedObject($obj) : bool
    {
        $this->initializer2ef3d && ($this->initializer2ef3d->__invoke($valueHolderdad1a, $this, 'isUninitializedObject', array('obj' => $obj), $this->initializer2ef3d) || 1) && $this->valueHolderdad1a = $valueHolderdad1a;

        return $this->valueHolderdad1a->isUninitializedObject($obj);
    }

    public function getFilters()
    {
        $this->initializer2ef3d && ($this->initializer2ef3d->__invoke($valueHolderdad1a, $this, 'getFilters', array(), $this->initializer2ef3d) || 1) && $this->valueHolderdad1a = $valueHolderdad1a;

        return $this->valueHolderdad1a->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer2ef3d && ($this->initializer2ef3d->__invoke($valueHolderdad1a, $this, 'isFiltersStateClean', array(), $this->initializer2ef3d) || 1) && $this->valueHolderdad1a = $valueHolderdad1a;

        return $this->valueHolderdad1a->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer2ef3d && ($this->initializer2ef3d->__invoke($valueHolderdad1a, $this, 'hasFilters', array(), $this->initializer2ef3d) || 1) && $this->valueHolderdad1a = $valueHolderdad1a;

        return $this->valueHolderdad1a->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer2ef3d = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, ?\Doctrine\Common\EventManager $eventManager = null)
    {
        static $reflection;

        if (! $this->valueHolderdad1a) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderdad1a = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderdad1a->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer2ef3d && ($this->initializer2ef3d->__invoke($valueHolderdad1a, $this, '__get', ['name' => $name], $this->initializer2ef3d) || 1) && $this->valueHolderdad1a = $valueHolderdad1a;

        if (isset(self::$publicPropertiesd95ee[$name])) {
            return $this->valueHolderdad1a->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdad1a;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderdad1a;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer2ef3d && ($this->initializer2ef3d->__invoke($valueHolderdad1a, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer2ef3d) || 1) && $this->valueHolderdad1a = $valueHolderdad1a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdad1a;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderdad1a;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer2ef3d && ($this->initializer2ef3d->__invoke($valueHolderdad1a, $this, '__isset', array('name' => $name), $this->initializer2ef3d) || 1) && $this->valueHolderdad1a = $valueHolderdad1a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdad1a;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderdad1a;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer2ef3d && ($this->initializer2ef3d->__invoke($valueHolderdad1a, $this, '__unset', array('name' => $name), $this->initializer2ef3d) || 1) && $this->valueHolderdad1a = $valueHolderdad1a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdad1a;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderdad1a;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializer2ef3d && ($this->initializer2ef3d->__invoke($valueHolderdad1a, $this, '__clone', array(), $this->initializer2ef3d) || 1) && $this->valueHolderdad1a = $valueHolderdad1a;

        $this->valueHolderdad1a = clone $this->valueHolderdad1a;
    }

    public function __sleep()
    {
        $this->initializer2ef3d && ($this->initializer2ef3d->__invoke($valueHolderdad1a, $this, '__sleep', array(), $this->initializer2ef3d) || 1) && $this->valueHolderdad1a = $valueHolderdad1a;

        return array('valueHolderdad1a');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer2ef3d = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer2ef3d;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer2ef3d && ($this->initializer2ef3d->__invoke($valueHolderdad1a, $this, 'initializeProxy', array(), $this->initializer2ef3d) || 1) && $this->valueHolderdad1a = $valueHolderdad1a;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderdad1a;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderdad1a;
    }
}
