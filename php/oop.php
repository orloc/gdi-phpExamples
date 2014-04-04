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
        return "I am {$this->age} years old!";
    }

    public function setAge($age) { 
        $this->age = $age;
        return $this;
    }

    public function getEyeColor(){
        return "My eyes are {$this->eye_color}";
    }

    public function setEyeColor($color){ 
        $this->eye_color = $color;
        return $this;
    }

    public function getName(){ 
        return "My name is {$this->name}";
    }

    public function __tostring(){
        return $this->getName().' and '.
            $this->getEyeColor().' and '.
            $this->getAge();
    }
}



// Now that we have out simple object we can write a small program


// first we make a new object with the new keyword
$jane = new Person('Jane');

// because we return $this from all our setters, we have created
// a 'fluent' interface for this object.  That means, we can chain
// setters together.


// lets set all of janes attributes
$jane->setage(25)
    ->setEyeColor('Green');


// Now because we have a __tostring function we can just echo the object like a string.
echo $jane;

