
<?php

class Person
{
    protected $firstName;
    protected $lastName;
    protected $nickname;
    protected $birthday;
    protected $edad;

    public function __construct($firstName, $birthday)
    {
        $this->firstName = $firstName;
        $this->birthday = $birthday;
    }

    public function setFirstName($firstName){
        $this->firstName = $firstName;
    }

    public function getBirthday(){
        return $this->birthday;
    }

    public function getEdad($birthDay){
        $cumple = new Datetime($birthDay);
        $toDay = new Datetime();
        $age = $toDay->diff($cumple);
        return $age->y;
    }

}

$person1 = new Person('Duilio', '27-03-1993');

//$person2 = new Person('Ramon', 'Lapenta');
$person1->setFirstName('DAnny');
//
echo $person1->getEdad($person1->getBirthday());


