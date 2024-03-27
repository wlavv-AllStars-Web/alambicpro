<?php

class ModuleRepository_091bb2f extends \PrestaShop\PrestaShop\Core\Module\ModuleRepository implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHoldere5204 = null;
    private $initializeracb1f = null;
    private static $publicProperties6ab4c = [
        
    ];
    public function getList() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializeracb1f && ($this->initializeracb1f->__invoke($valueHoldere5204, $this, 'getList', array(), $this->initializeracb1f) || 1) && $this->valueHoldere5204 = $valueHoldere5204;
        return $this->valueHoldere5204->getList();
    }
    public function getInstalledModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializeracb1f && ($this->initializeracb1f->__invoke($valueHoldere5204, $this, 'getInstalledModules', array(), $this->initializeracb1f) || 1) && $this->valueHoldere5204 = $valueHoldere5204;
        return $this->valueHoldere5204->getInstalledModules();
    }
    public function getMustBeConfiguredModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializeracb1f && ($this->initializeracb1f->__invoke($valueHoldere5204, $this, 'getMustBeConfiguredModules', array(), $this->initializeracb1f) || 1) && $this->valueHoldere5204 = $valueHoldere5204;
        return $this->valueHoldere5204->getMustBeConfiguredModules();
    }
    public function getUpgradableModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializeracb1f && ($this->initializeracb1f->__invoke($valueHoldere5204, $this, 'getUpgradableModules', array(), $this->initializeracb1f) || 1) && $this->valueHoldere5204 = $valueHoldere5204;
        return $this->valueHoldere5204->getUpgradableModules();
    }
    public function getModule(string $moduleName) : \PrestaShop\PrestaShop\Core\Module\ModuleInterface
    {
        $this->initializeracb1f && ($this->initializeracb1f->__invoke($valueHoldere5204, $this, 'getModule', array('moduleName' => $moduleName), $this->initializeracb1f) || 1) && $this->valueHoldere5204 = $valueHoldere5204;
        return $this->valueHoldere5204->getModule($moduleName);
    }
    public function getModulePath(string $moduleName) : ?string
    {
        $this->initializeracb1f && ($this->initializeracb1f->__invoke($valueHoldere5204, $this, 'getModulePath', array('moduleName' => $moduleName), $this->initializeracb1f) || 1) && $this->valueHoldere5204 = $valueHoldere5204;
        return $this->valueHoldere5204->getModulePath($moduleName);
    }
    public function setActionUrls(\PrestaShop\PrestaShop\Core\Module\ModuleCollection $collection) : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializeracb1f && ($this->initializeracb1f->__invoke($valueHoldere5204, $this, 'setActionUrls', array('collection' => $collection), $this->initializeracb1f) || 1) && $this->valueHoldere5204 = $valueHoldere5204;
        return $this->valueHoldere5204->setActionUrls($collection);
    }
    public function clearCache(?string $moduleName = null, bool $allShops = false) : bool
    {
        $this->initializeracb1f && ($this->initializeracb1f->__invoke($valueHoldere5204, $this, 'clearCache', array('moduleName' => $moduleName, 'allShops' => $allShops), $this->initializeracb1f) || 1) && $this->valueHoldere5204 = $valueHoldere5204;
        return $this->valueHoldere5204->clearCache($moduleName, $allShops);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $instance, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($instance);
        $instance->initializeracb1f = $initializer;
        return $instance;
    }
    public function __construct(\PrestaShop\PrestaShop\Adapter\Module\ModuleDataProvider $moduleDataProvider, \PrestaShop\PrestaShop\Adapter\Module\AdminModuleDataProvider $adminModuleDataProvider, \Doctrine\Common\Cache\CacheProvider $cacheProvider, \PrestaShop\PrestaShop\Adapter\HookManager $hookManager, string $modulePath, int $contextLangId)
    {
        static $reflection;
        if (! $this->valueHoldere5204) {
            $reflection = $reflection ?? new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
            $this->valueHoldere5204 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);
        }
        $this->valueHoldere5204->__construct($moduleDataProvider, $adminModuleDataProvider, $cacheProvider, $hookManager, $modulePath, $contextLangId);
    }
    public function & __get($name)
    {
        $this->initializeracb1f && ($this->initializeracb1f->__invoke($valueHoldere5204, $this, '__get', ['name' => $name], $this->initializeracb1f) || 1) && $this->valueHoldere5204 = $valueHoldere5204;
        if (isset(self::$publicProperties6ab4c[$name])) {
            return $this->valueHoldere5204->$name;
        }
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
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
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
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
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
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
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
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
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);
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
