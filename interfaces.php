<?php
interface InterfaceOne {
    public function doSomething();
}

interface InterfaceTwo {
    public function doSomethingElse();
}

/**
 * Interfaces can extends other interfaces
 * InterfaceThree has public func doSomethingElse() and add public func doAnotherContract();
 * so InterfaceThree has 2 methods now.
 */
interface InterfaceThree extends InterfaceTwo {
    public function doAnotherContract();
}

// abs class cannot be instanciated
// abs class existis just to be extended by others classes
// abs class can have abs methods and non abs method
// abs class can have public, privated, and protected properties
// this abs below has a public property and implents a public method from interfaceOne
// so this abs has 1 prop and 1 method
abstract class MyAbstractClass implements InterfaceOne {
    public $x = 'Something';
}

// this class extends abs class
// so this classe inhered 1 prop and 1 method non implemented
// but this class implements a second interface and now it has 1 prop and 2 methods
class MyConcreteClass extends MyAbstractClass implements InterfaceTwo {
    // now this class implments the respective methods
    // the first method was implemented and receive the prop x
    public function doSomething() {
        echo $this->x;
    }

    public function doSomethingElse() {
        echo 'doSomethingElse';
    }
}


// class can implements more then one interface
// for exemple this class has 2 methods.
// the class above has 2 methods and 1 prop declared at abs class and extended
class SomeOtherClass implements InterfaceOne, InterfaceTwo {
    public function doSomething() {
        echo 'Do Something';
    }

    public function doSomethingElse() {
        echo ' Do Something Else';
    }
}
