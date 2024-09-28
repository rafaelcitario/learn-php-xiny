<?php
class MyClass {
    const My_CONST = 'const inside the class: const NAME_CONST = value;' . PHP_EOL;
}

define('My_CONST', 'const outside the class: define("NAME_CONST", "value");' . PHP_EOL);
echo My_CONST;
echo MyClass::My_CONST;


class MyNewClass {
    const MY_CONST = 'value'; // MyNewClass::MY_CONST;
    static $staticVar = 'static'; // MyNewClass::$staticVar

    // public is a variable can be called into instance of the class
    public static $publicStaticVariable = 'public static'; // MyNewClass::$publicStaticVariable

    // private static is an acessive only inside the class
    private static $privateStaticVariable = 'private static';

    // protected static are acessible only by the class and subclasses
    protected static $protectedStaticVariable = 'protected static';

    // to declare a propertie its should be used with visibility modifyers
    public    $property     = 'public'; // classInstance->propertie;
    public    $instanceProp;
    protected $prot         = 'protected';
    private   $priv         = 'private';


    public function __construct($instanceProp) {
        // Access variabe with $this
        $this->instanceProp = $instanceProp;
    }

    // methods should be declared with a visibility modifyers
    // it's declared inside the class as a func
    public function myMethod() { // classInstance->myMethod();
        print 'MyClass';
    }

    // final keyword would make a function Unoverridable
    final function youCannotOverrideMe() {
    }


    // maigc methods are the methods starts within __
    // Magic Methods
    // what to do if an object is treated as a String

    public function __toString() {
        return $this->property;
    }

    public function __destruct() {
    }
}

/**
 * Declare class methods or properties as static
 * makes this methods or properties callable without needing an instantiate class
 *
 * A propertie declared as static cannot be accessed with a instantiated class object (Though a static method can)
 */

static function () {
    return 'a';
};

/**
 * Use :: para constantes e variáveis estáticas.
 * Use -> para acessar propriedades e métodos de instância.
 * Dentro da classe, use $this para acessar propriedades de instância e self:: para variáveis e métodos estáticos.
 */


// class constants can be called like this:
echo MyNewClass::MY_CONST . PHP_EOL;
echo MyNewClass::$staticVar . PHP_EOL;
echo MyNewClass::$publicStaticVariable . PHP_EOL;

echo $myInstance = new MyNewClass('instancia');
echo $myInstance->property . PHP_EOL;
echo $myInstance->myMethod() . PHP_EOL;
echo $myInstance->youCannotOverrideMe();
echo $myInstance->__toString() . PHP_EOL;

// extends classes
class MyOtherClass extends MyNewClass {

    function printProtectedProp() {
        echo $this->prot;
    }

    // override a method
    function myMethod() {
        parent::myMethod();
        print ' > MyOtherClass';
    }
}

$my_other_class = new MyOtherClass('Instance prop MyOtherClass');
$my_other_class->printProtectedProp();
echo "\n";
$my_other_class->myMethod();
echo "\n";
$my_other_class->youCannotOverrideMe();

// final classes can't be extended
final class YouCannotExtendsMe {
}

class MyMapClass {
    private $property;

    public function __get($key) {
        if ($key === 'property') {
            return $this->property;
        }
        return null;
    }

    public function __set($key, $value) {
        if ($key === 'property') {
            $this->property = $value;
        }
    }
}

$x = new MyMapClass();
$x->__set('property', 'Something');
echo $x->__get('property') . PHP_EOL;
