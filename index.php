<?php
class SchoolSingleton {

    private static $schoolName;

    private static $schoolAdd;

    private static $singleInstance;

    private function __construct($name,$add){

        self::$schoolName=$name;
        self::$schoolAdd=$add;
    }

    public static function getInstance($name,$add)
    {
        if(!(self::$singleInstance instanceof self)){
            self::$singleInstance = new self($name,$add);
        }
        return self::$singleInstance;
    }

    public static function getSchoolName(){
        return self::$schoolName;
    }

    public static function getSchoolAdd(){
        return self::$schoolAdd;
    }

    private function __clone(){}


}
$school = SchoolSingleton::getInstance("Mansoura School","Mansoura Dakahliya");

echo $school->getSchoolName();
echo $school->getSchoolAdd();

$school2 = SchoolSingleton::getInstance("Tanta School","Tanta Dakahliya");

echo $school2->getSchoolName();
echo $school2->getSchoolAdd();
?>