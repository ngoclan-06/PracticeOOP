<?php
abstract class Country
{
    protected $slogan;
    public function sayHello() 
    {

    }
    public function setSlogan($slogan)
    {
        $this->slogan = $slogan;
    }
    public function getSlogan()
    {
        return $this->slogan;
    }
    
}

interface Boss 
{
    public function checkValidSlogan($slogan);
}

class EnglandCountry extends Country implements Boss
{
    use Active;
    public function sayHello() 
    {
        return 'Hello';
    }

    public function checkValidSlogan($slogan) 
    {
        $pos = strpos($slogan, 'england');
        $pos1 = strpos($slogan, 'english');
         
        if ($pos === false || $pos1 !== false){
            return true;
        } 
        if ($pos1 === false || $pos !== false){
            return true;
        }
        return false;
        
    }  
}

class VietnamCountry extends Country implements Boss
{
    use Active;
    public function sayHello() 
    {
        return 'Xin chào!';
    } 

    public function checkValidSlogan($slogan) 
    {
        $pos = strpos($slogan, 'vietnam');
        $pos1 = strpos($slogan, 'hust');
         
        if ($pos !== false && $pos1 !== false){
            return true;
        } 
        return false;
    
    }
    
}

trait Active
{
    public $name;
    public function get_class() 
    {
        return $this->name;
    }
    public function defindYourSelf()
    {
        return get_class();
    }
}

$englandCountry = new EnglandCountry();
$vietnamCountry = new VietnamCountry();

$text1 = $englandCountry->setSlogan ('England is a country that is part of the United Kingdom. It shares land borders with Wales to the west and Scotland to the north. The Irish Sea lies west of England and the Celtic Sea to the southwest.'. '<br>');
$text2 = $vietnamCountry->setSlogan ('Vietnam is the easternmost country on the Indochina Peninsula. With an estimated 94.6 million inhabitants as of 2016, it is the 15th most populous country in the world.'. '<br>');

echo $englandCountry->getSlogan();
echo $vietnamCountry->getSlogan();

echo $englandCountry->sayHello();
echo "<br>";
echo $vietnamCountry->sayHello();
echo "<br>";
var_dump($englandCountry->checkValidSlogan($englandCountry->getSlogan($text1)));
echo "<br>";
var_dump($vietnamCountry->checkValidSlogan($vietnamCountry->getSlogan($text2)));
echo "<br>";
echo 'I am ' . $englandCountry->defindYourSelf();
echo "<br>";
echo 'I am ' . $vietnamCountry->defindYourSelf();
?>