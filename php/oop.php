<?php

// class names should be StudlyCaps
class Person { 

    // properties MUST have a scope
    public $id;

    // this property cannot be accessed directly
    protected  $age;

    protected $name;

    // properties should have underscoes or be camelCase 
    protected $eye_color;

    // this is called a magic method, any method with __ before it 
    // is also a magic method
    // this method is called when the object is created, and accepts
    // the parameters you pass to the object when creating it.
    // in this case, we are saying that you MUST specify a name
    // when building a new Person object
    public function __construct($name){ 
        $this->name = $name;
    }

    
    // By having a public getter method, you can access your protected or private property
    public function getAge(){
        // this references the current class's scope
        return $this->age;
    }

}
