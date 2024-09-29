<?php

/**
 * Trait is like a Interface but the methods was implemented aready
 * to use trait just implement you trait, declare a class and use your trait inse the class.
 * Automatically you class get the method created inside the trait and insert at the instance of the class.
 */
trait myTrait {
    public function myTraitMethod() {
        print ' I have my Trait';
    }
}

class MyTraitfulClass {
    use myTrait;
}

$my_traitful_class = new MyTraitfulClass();
$my_traitful_class->myTraitMethod();
