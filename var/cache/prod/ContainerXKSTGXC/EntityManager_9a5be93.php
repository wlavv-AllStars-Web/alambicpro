<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHoldere5204 = null;
    private $initializeracb1f = null;
    private static $publicProperties6ab4c = [
        
    ];
    public function getConnection()
    {
        $this->initializeracb1f && ($this->initializeracb1f->__invoke($valueHoldere5204, $this, 'getConnection', array(), $this->initializeracb1f) || 1) && $this->valueHoldere5204 = $valueHoldere5204;
        return $this->valueHoldere5204->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializeracb1f && ($this->initializeracb1f->__invoke($valueHoldere5204, $this, 'getMetadataFactory', array(), $this->initializeracb1f) || 1) && $this->valueHoldere5204 = $valueHoldere5204;
        return $this->valueHoldere5204->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializeracb1f && ($this->initializeracb1f->__invoke($valueHoldere5204, $this, 'getExpressionBuilder', array(), $this->initializeracb1f) || 1) && $this->valueHoldere5204 = $valueHoldere5204;
        return $this->valueHoldere5204->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializeracb1f && ($this->initializeracb1f->__invoke($valueHoldere5204, $this, 'beginTransaction', array(), $this->initializeracb1f) || 1) && $this->valueHoldere5204 = $valueHoldere5204;
        return $this->valueHoldere5204->beginTransaction();
    }
    public function getCache()
    {
        $this->initializeracb1f && ($this->initializeracb1f->__invoke($valueHoldere5204, $this, 'getCache', array(), $this->initializeracb1f) || 1) && $this->valueHoldere5204 = $valueHoldere5204;
        return $this->valueHoldere5204->getCache();
    }
    public function transactional($func)
    {
        $this->initializeracb1f && ($this->initializeracb1f->__invoke($valueHoldere5204, $this, 'transactional', array('func' => $func), $this->initializeracb1f) || 1) && $this->valueHoldere5204 = $valueHoldere5204;
        return $this->valueHoldere5204->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializeracb1f && ($this->initializeracb1f->__invoke($valueHoldere5204, $this, 'wrapInTransaction', array('func' => $func), $this->initializeracb1f) || 1) && $this->valueHoldere5204 = $valueHoldere5204;
        return $this->valueHoldere5204->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializeracb1f && ($this->initializeracb1f->__invoke($valueHoldere5204, $this, 'commit', array(), $this->initializeracb1f) || 1) && $this->valueHoldere5204 = $valueHoldere5204;
        return $this->valueHoldere5204->commit();
    }
    public function rollback()
    {
        $this->initializeracb1f && ($this->initializeracb1f->__invoke($valueHoldere5204, $this, 'rollback', array(), $this->initializeracb1f) || 1) && $this->valueHoldere5204 = $valueHoldere5204;
        return $this->valueHoldere5204->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializeracb1f && ($this->initializeracb1f->__invoke($valueHoldere5204, $this, 'getClassMetadata', array('className' => $className), $this->initializeracb1f) || 1) && $this->valueHoldere5204 = $valueHoldere5204;
        return $this->valueHoldere5204->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializeracb1f && ($this->initializeracb1f->__invoke($valueHoldere5204, $this, 'createQuery', array('dql' => $dql), $this->initializeracb1f) || 1) && $this->valueHoldere5204 = $valueHoldere5204;
        return $this->valueHoldere5204->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializeracb1f && ($this->initializeracb1f->__invoke($valueHoldere5204, $this, 'createNamedQuery', array('name' => $name), $this->initializeracb1f) || 1) && $this->valueHoldere5204 = $valueHoldere5204;
        return $this->valueHoldere5204->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializeracb1f && ($this->initializeracb1f->__invoke($valueHoldere5204, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializeracb1f) || 1) && $this->valueHoldere5204 = $valueHoldere5204;
        return $this->valueHoldere5204->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializeracb1f && ($this->initializeracb1f->__invoke($valueHoldere5204, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializeracb1f) || 1) && $this->valueHoldere5204 = $valueHoldere5204;
        return $this->valueHoldere5204->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializeracb1f && ($this->initializeracb1f->__invoke($valueHoldere5204, $this, 'createQueryBuilder', array(), $this->initializeracb1f) || 1) && $this->valueHoldere5204 = $valueHoldere5204;
        return $this->valueHoldere5204->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializeracb1f && ($this->initializeracb1f->__invoke($valueHoldere5204, $this, 'flush', array('entity' => $entity), $this->initializeracb1f) || 1) && $this->valueHoldere5204 = $valueHoldere5204;
        return $this->valueHoldere5204->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializeracb1f && ($this->initializeracb1f->__invoke($valueHoldere5204, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializeracb1f) || 1) && $this->valueHoldere5204 = $valueHoldere5204;
        return $this->valueHoldere5204->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializeracb1f && ($this->initializeracb1f->__invoke($valueHoldere5204, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializeracb1f) || 1) && $this->valueHoldere5204 = $valueHoldere5204;
        return $this->valueHoldere5204->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializeracb1f && ($this->initializeracb1f->__invoke($valueHoldere5204, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializeracb1f) || 1) && $this->valueHoldere5204 = $valueHoldere5204;
        return $this->valueHoldere5204->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializeracb1f && ($this->initializeracb1f->__invoke($valueHoldere5204, $this, 'clear', array('entityName' => $entityName), $this->initializeracb1f) || 1) && $this->valueHoldere5204 = $valueHoldere5204;
        return $this->valueHoldere5204->clear($entityName);
    }
    public function close()
    {
        $this->initializeracb1f && ($this->initializeracb1f->__invoke($valueHoldere5204, $this, 'close', array(), $this->initializeracb1f) || 1) && $this->valueHoldere5204 = $valueHoldere5204;
        return $this->valueHoldere5204->close();
    }
    public function persist($entity)
    {
        $this->initializeracb1f && ($this->initializeracb1f->__invoke($valueHoldere5204, $this, 'persist', array('entity' => $entity), $this->initializeracb1f) || 1) && $this->valueHoldere5204 = $valueHoldere5204;
        return $this->valueHoldere5204->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializeracb1f && ($this->initializeracb1f->__invoke($valueHoldere5204, $this, 'remove', array('entity' => $entity), $this->initializeracb1f) || 1) && $this->valueHoldere5204 = $valueHoldere5204;
        return $this->valueHoldere5204->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializeracb1f && ($this->initializeracb1f->__invoke($valueHoldere5204, $this, 'refresh', array('entity' => $entity), $this->initializeracb1f) || 1) && $this->valueHoldere5204 = $valueHoldere5204;
        return $this->valueHoldere5204->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializeracb1f && ($this->initializeracb1f->__invoke($valueHoldere5204, $this, 'detach', array('entity' => $entity), $this->initializeracb1f) || 1) && $this->valueHoldere5204 = $valueHoldere5204;
        return $this->valueHoldere5204->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializeracb1f && ($this->initializeracb1f->__invoke($valueHoldere5204, $this, 'merge', array('entity' => $entity), $this->initializeracb1f) || 1) && $this->valueHoldere5204 = $valueHoldere5204;
        return $this->valueHoldere5204->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializeracb1f && ($this->initializeracb1f->__invoke($valueHoldere5204, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializeracb1f) || 1) && $this->valueHoldere5204 = $valueHoldere5204;
        return $this->valueHoldere5204->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializeracb1f && ($this->initializeracb1f->__invoke($valueHoldere5204, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializeracb1f) || 1) && $this->valueHoldere5204 = $valueHoldere5204;
        return $this->valueHoldere5204->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializeracb1f && ($this->initializeracb1f->__invoke($valueHoldere5204, $this, 'getRepository', array('entityName' => $entityName), $this->initializeracb1f) || 1) && $this->valueHoldere5204 = $valueHoldere5204;
        return $this->valueHoldere5204->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializeracb1f && ($this->initializeracb1f->__invoke($valueHoldere5204, $this, 'contains', array('entity' => $entity), $this->initializeracb1f) || 1) && $this->valueHoldere5204 = $valueHoldere5204;
        return $this->valueHoldere5204->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializeracb1f && ($this->initializeracb1f->__invoke($valueHoldere5204, $this, 'getEventManager', array(), $this->initializeracb1f) || 1) && $this->valueHoldere5204 = $valueHoldere5204;
        return $this->valueHoldere5204->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializeracb1f && ($this->initializeracb1f->__invoke($valueHoldere5204, $this, 'getConfiguration', array(), $this->initializeracb1f) || 1) && $this->valueHoldere5204 = $valueHoldere5204;
        return $this->valueHoldere5204->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializeracb1f && ($this->initializeracb1f->__invoke($valueHoldere5204, $this, 'isOpen', array(), $this->initializeracb1f) || 1) && $this->valueHoldere5204 = $valueHoldere5204;
        return $this->valueHoldere5204->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializeracb1f && ($this->initializeracb1f->__invoke($valueHoldere5204, $this, 'getUnitOfWork', array(), $this->initializeracb1f) || 1) && $this->valueHoldere5204 = $valueHoldere5204;
        return $this->valueHoldere5204->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializeracb1f && ($this->initializeracb1f->__invoke($valueHoldere5204, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializeracb1f) || 1) && $this->valueHoldere5204 = $valueHoldere5204;
        return $this->valueHoldere5204->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializeracb1f && ($this->initializeracb1f->__invoke($valueHoldere5204, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializeracb1f) || 1) && $this->valueHoldere5204 = $valueHoldere5204;
        return $this->valueHoldere5204->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializeracb1f && ($this->initializeracb1f->__invoke($valueHoldere5204, $this, 'getProxyFactory', array(), $this->initializeracb1f) || 1) && $this->valueHoldere5204 = $valueHoldere5204;
        return $this->valueHoldere5204->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializeracb1f && ($this->initializeracb1f->__invoke($valueHoldere5204, $this, 'initializeObject', array('obj' => $obj), $this->initializeracb1f) || 1) && $this->valueHoldere5204 = $valueHoldere5204;
        return $this->valueHoldere5204->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializeracb1f && ($this->initializeracb1f->__invoke($valueHoldere5204, $this, 'getFilters', array(), $this->initializeracb1f) || 1) && $this->valueHoldere5204 = $valueHoldere5204;
        return $this->valueHoldere5204->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializeracb1f && ($this->initializeracb1f->__invoke($valueHoldere5204, $this, 'isFiltersStateClean', array(), $this->initializeracb1f) || 1) && $this->valueHoldere5204 = $valueHoldere5204;
        return $this->valueHoldere5204->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializeracb1f && ($this->initializeracb1f->__invoke($valueHoldere5204, $this, 'hasFilters', array(), $this->initializeracb1f) || 1) && $this->valueHoldere5204 = $valueHoldere5204;
        return $this->valueHoldere5204->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializeracb1f = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHoldere5204) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldere5204 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHoldere5204->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializeracb1f && ($this->initializeracb1f->__invoke($valueHoldere5204, $this, '__get', ['name' => $name], $this->initializeracb1f) || 1) && $this->valueHoldere5204 = $valueHoldere5204;
        if (isset(self::$publicProperties6ab4c[$name])) {
            return $this->valueHoldere5204->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere5204;
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
        $targetObject = $this->valueHoldere5204;
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
        $this->initializeracb1f && ($this->initializeracb1f->__invoke($valueHoldere5204, $this, '__set', array('name' => $name, 'value' => $value), $this->initializeracb1f) || 1) && $this->valueHoldere5204 = $valueHoldere5204;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere5204;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHoldere5204;
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
        $this->initializeracb1f && ($this->initializeracb1f->__invoke($valueHoldere5204, $this, '__isset', array('name' => $name), $this->initializeracb1f) || 1) && $this->valueHoldere5204 = $valueHoldere5204;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere5204;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHoldere5204;
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
        $this->initializeracb1f && ($this->initializeracb1f->__invoke($valueHoldere5204, $this, '__unset', array('name' => $name), $this->initializeracb1f) || 1) && $this->valueHoldere5204 = $valueHoldere5204;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere5204;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHoldere5204;
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
        $this->initializeracb1f && ($this->initializeracb1f->__invoke($valueHoldere5204, $this, '__clone', array(), $this->initializeracb1f) || 1) && $this->valueHoldere5204 = $valueHoldere5204;
        $this->valueHoldere5204 = clone $this->valueHoldere5204;
    }
    public function __sleep()
    {
        $this->initializeracb1f && ($this->initializeracb1f->__invoke($valueHoldere5204, $this, '__sleep', array(), $this->initializeracb1f) || 1) && $this->valueHoldere5204 = $valueHoldere5204;
        return array('valueHoldere5204');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializeracb1f = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializeracb1f;
    }
    public function initializeProxy() : bool
    {
        return $this->initializeracb1f && ($this->initializeracb1f->__invoke($valueHoldere5204, $this, 'initializeProxy', array(), $this->initializeracb1f) || 1) && $this->valueHoldere5204 = $valueHoldere5204;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldere5204;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldere5204;
    }
}
