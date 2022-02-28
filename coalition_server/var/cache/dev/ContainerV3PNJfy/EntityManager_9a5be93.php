<?php

namespace ContainerV3PNJfy;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder3482b = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer4287a = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties886e7 = [
        
    ];

    public function getConnection()
    {
        $this->initializer4287a && ($this->initializer4287a->__invoke($valueHolder3482b, $this, 'getConnection', array(), $this->initializer4287a) || 1) && $this->valueHolder3482b = $valueHolder3482b;

        return $this->valueHolder3482b->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer4287a && ($this->initializer4287a->__invoke($valueHolder3482b, $this, 'getMetadataFactory', array(), $this->initializer4287a) || 1) && $this->valueHolder3482b = $valueHolder3482b;

        return $this->valueHolder3482b->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer4287a && ($this->initializer4287a->__invoke($valueHolder3482b, $this, 'getExpressionBuilder', array(), $this->initializer4287a) || 1) && $this->valueHolder3482b = $valueHolder3482b;

        return $this->valueHolder3482b->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer4287a && ($this->initializer4287a->__invoke($valueHolder3482b, $this, 'beginTransaction', array(), $this->initializer4287a) || 1) && $this->valueHolder3482b = $valueHolder3482b;

        return $this->valueHolder3482b->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer4287a && ($this->initializer4287a->__invoke($valueHolder3482b, $this, 'getCache', array(), $this->initializer4287a) || 1) && $this->valueHolder3482b = $valueHolder3482b;

        return $this->valueHolder3482b->getCache();
    }

    public function transactional($func)
    {
        $this->initializer4287a && ($this->initializer4287a->__invoke($valueHolder3482b, $this, 'transactional', array('func' => $func), $this->initializer4287a) || 1) && $this->valueHolder3482b = $valueHolder3482b;

        return $this->valueHolder3482b->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer4287a && ($this->initializer4287a->__invoke($valueHolder3482b, $this, 'wrapInTransaction', array('func' => $func), $this->initializer4287a) || 1) && $this->valueHolder3482b = $valueHolder3482b;

        return $this->valueHolder3482b->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer4287a && ($this->initializer4287a->__invoke($valueHolder3482b, $this, 'commit', array(), $this->initializer4287a) || 1) && $this->valueHolder3482b = $valueHolder3482b;

        return $this->valueHolder3482b->commit();
    }

    public function rollback()
    {
        $this->initializer4287a && ($this->initializer4287a->__invoke($valueHolder3482b, $this, 'rollback', array(), $this->initializer4287a) || 1) && $this->valueHolder3482b = $valueHolder3482b;

        return $this->valueHolder3482b->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer4287a && ($this->initializer4287a->__invoke($valueHolder3482b, $this, 'getClassMetadata', array('className' => $className), $this->initializer4287a) || 1) && $this->valueHolder3482b = $valueHolder3482b;

        return $this->valueHolder3482b->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer4287a && ($this->initializer4287a->__invoke($valueHolder3482b, $this, 'createQuery', array('dql' => $dql), $this->initializer4287a) || 1) && $this->valueHolder3482b = $valueHolder3482b;

        return $this->valueHolder3482b->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer4287a && ($this->initializer4287a->__invoke($valueHolder3482b, $this, 'createNamedQuery', array('name' => $name), $this->initializer4287a) || 1) && $this->valueHolder3482b = $valueHolder3482b;

        return $this->valueHolder3482b->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer4287a && ($this->initializer4287a->__invoke($valueHolder3482b, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer4287a) || 1) && $this->valueHolder3482b = $valueHolder3482b;

        return $this->valueHolder3482b->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer4287a && ($this->initializer4287a->__invoke($valueHolder3482b, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer4287a) || 1) && $this->valueHolder3482b = $valueHolder3482b;

        return $this->valueHolder3482b->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer4287a && ($this->initializer4287a->__invoke($valueHolder3482b, $this, 'createQueryBuilder', array(), $this->initializer4287a) || 1) && $this->valueHolder3482b = $valueHolder3482b;

        return $this->valueHolder3482b->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer4287a && ($this->initializer4287a->__invoke($valueHolder3482b, $this, 'flush', array('entity' => $entity), $this->initializer4287a) || 1) && $this->valueHolder3482b = $valueHolder3482b;

        return $this->valueHolder3482b->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer4287a && ($this->initializer4287a->__invoke($valueHolder3482b, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer4287a) || 1) && $this->valueHolder3482b = $valueHolder3482b;

        return $this->valueHolder3482b->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer4287a && ($this->initializer4287a->__invoke($valueHolder3482b, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer4287a) || 1) && $this->valueHolder3482b = $valueHolder3482b;

        return $this->valueHolder3482b->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer4287a && ($this->initializer4287a->__invoke($valueHolder3482b, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer4287a) || 1) && $this->valueHolder3482b = $valueHolder3482b;

        return $this->valueHolder3482b->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer4287a && ($this->initializer4287a->__invoke($valueHolder3482b, $this, 'clear', array('entityName' => $entityName), $this->initializer4287a) || 1) && $this->valueHolder3482b = $valueHolder3482b;

        return $this->valueHolder3482b->clear($entityName);
    }

    public function close()
    {
        $this->initializer4287a && ($this->initializer4287a->__invoke($valueHolder3482b, $this, 'close', array(), $this->initializer4287a) || 1) && $this->valueHolder3482b = $valueHolder3482b;

        return $this->valueHolder3482b->close();
    }

    public function persist($entity)
    {
        $this->initializer4287a && ($this->initializer4287a->__invoke($valueHolder3482b, $this, 'persist', array('entity' => $entity), $this->initializer4287a) || 1) && $this->valueHolder3482b = $valueHolder3482b;

        return $this->valueHolder3482b->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer4287a && ($this->initializer4287a->__invoke($valueHolder3482b, $this, 'remove', array('entity' => $entity), $this->initializer4287a) || 1) && $this->valueHolder3482b = $valueHolder3482b;

        return $this->valueHolder3482b->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer4287a && ($this->initializer4287a->__invoke($valueHolder3482b, $this, 'refresh', array('entity' => $entity), $this->initializer4287a) || 1) && $this->valueHolder3482b = $valueHolder3482b;

        return $this->valueHolder3482b->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer4287a && ($this->initializer4287a->__invoke($valueHolder3482b, $this, 'detach', array('entity' => $entity), $this->initializer4287a) || 1) && $this->valueHolder3482b = $valueHolder3482b;

        return $this->valueHolder3482b->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer4287a && ($this->initializer4287a->__invoke($valueHolder3482b, $this, 'merge', array('entity' => $entity), $this->initializer4287a) || 1) && $this->valueHolder3482b = $valueHolder3482b;

        return $this->valueHolder3482b->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer4287a && ($this->initializer4287a->__invoke($valueHolder3482b, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer4287a) || 1) && $this->valueHolder3482b = $valueHolder3482b;

        return $this->valueHolder3482b->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer4287a && ($this->initializer4287a->__invoke($valueHolder3482b, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer4287a) || 1) && $this->valueHolder3482b = $valueHolder3482b;

        return $this->valueHolder3482b->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer4287a && ($this->initializer4287a->__invoke($valueHolder3482b, $this, 'getRepository', array('entityName' => $entityName), $this->initializer4287a) || 1) && $this->valueHolder3482b = $valueHolder3482b;

        return $this->valueHolder3482b->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer4287a && ($this->initializer4287a->__invoke($valueHolder3482b, $this, 'contains', array('entity' => $entity), $this->initializer4287a) || 1) && $this->valueHolder3482b = $valueHolder3482b;

        return $this->valueHolder3482b->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer4287a && ($this->initializer4287a->__invoke($valueHolder3482b, $this, 'getEventManager', array(), $this->initializer4287a) || 1) && $this->valueHolder3482b = $valueHolder3482b;

        return $this->valueHolder3482b->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer4287a && ($this->initializer4287a->__invoke($valueHolder3482b, $this, 'getConfiguration', array(), $this->initializer4287a) || 1) && $this->valueHolder3482b = $valueHolder3482b;

        return $this->valueHolder3482b->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer4287a && ($this->initializer4287a->__invoke($valueHolder3482b, $this, 'isOpen', array(), $this->initializer4287a) || 1) && $this->valueHolder3482b = $valueHolder3482b;

        return $this->valueHolder3482b->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer4287a && ($this->initializer4287a->__invoke($valueHolder3482b, $this, 'getUnitOfWork', array(), $this->initializer4287a) || 1) && $this->valueHolder3482b = $valueHolder3482b;

        return $this->valueHolder3482b->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer4287a && ($this->initializer4287a->__invoke($valueHolder3482b, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer4287a) || 1) && $this->valueHolder3482b = $valueHolder3482b;

        return $this->valueHolder3482b->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer4287a && ($this->initializer4287a->__invoke($valueHolder3482b, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer4287a) || 1) && $this->valueHolder3482b = $valueHolder3482b;

        return $this->valueHolder3482b->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer4287a && ($this->initializer4287a->__invoke($valueHolder3482b, $this, 'getProxyFactory', array(), $this->initializer4287a) || 1) && $this->valueHolder3482b = $valueHolder3482b;

        return $this->valueHolder3482b->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer4287a && ($this->initializer4287a->__invoke($valueHolder3482b, $this, 'initializeObject', array('obj' => $obj), $this->initializer4287a) || 1) && $this->valueHolder3482b = $valueHolder3482b;

        return $this->valueHolder3482b->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer4287a && ($this->initializer4287a->__invoke($valueHolder3482b, $this, 'getFilters', array(), $this->initializer4287a) || 1) && $this->valueHolder3482b = $valueHolder3482b;

        return $this->valueHolder3482b->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer4287a && ($this->initializer4287a->__invoke($valueHolder3482b, $this, 'isFiltersStateClean', array(), $this->initializer4287a) || 1) && $this->valueHolder3482b = $valueHolder3482b;

        return $this->valueHolder3482b->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer4287a && ($this->initializer4287a->__invoke($valueHolder3482b, $this, 'hasFilters', array(), $this->initializer4287a) || 1) && $this->valueHolder3482b = $valueHolder3482b;

        return $this->valueHolder3482b->hasFilters();
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

        $instance->initializer4287a = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder3482b) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder3482b = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder3482b->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer4287a && ($this->initializer4287a->__invoke($valueHolder3482b, $this, '__get', ['name' => $name], $this->initializer4287a) || 1) && $this->valueHolder3482b = $valueHolder3482b;

        if (isset(self::$publicProperties886e7[$name])) {
            return $this->valueHolder3482b->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3482b;

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

        $targetObject = $this->valueHolder3482b;
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
        $this->initializer4287a && ($this->initializer4287a->__invoke($valueHolder3482b, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer4287a) || 1) && $this->valueHolder3482b = $valueHolder3482b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3482b;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder3482b;
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
        $this->initializer4287a && ($this->initializer4287a->__invoke($valueHolder3482b, $this, '__isset', array('name' => $name), $this->initializer4287a) || 1) && $this->valueHolder3482b = $valueHolder3482b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3482b;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder3482b;
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
        $this->initializer4287a && ($this->initializer4287a->__invoke($valueHolder3482b, $this, '__unset', array('name' => $name), $this->initializer4287a) || 1) && $this->valueHolder3482b = $valueHolder3482b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3482b;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder3482b;
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
        $this->initializer4287a && ($this->initializer4287a->__invoke($valueHolder3482b, $this, '__clone', array(), $this->initializer4287a) || 1) && $this->valueHolder3482b = $valueHolder3482b;

        $this->valueHolder3482b = clone $this->valueHolder3482b;
    }

    public function __sleep()
    {
        $this->initializer4287a && ($this->initializer4287a->__invoke($valueHolder3482b, $this, '__sleep', array(), $this->initializer4287a) || 1) && $this->valueHolder3482b = $valueHolder3482b;

        return array('valueHolder3482b');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer4287a = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer4287a;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer4287a && ($this->initializer4287a->__invoke($valueHolder3482b, $this, 'initializeProxy', array(), $this->initializer4287a) || 1) && $this->valueHolder3482b = $valueHolder3482b;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder3482b;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder3482b;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
