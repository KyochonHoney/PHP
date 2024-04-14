<?
    // class info{ //클래스
    //     public $_name;
    //     public $_age;
    // }

    // $a = new info();

    // $a->_name = "홍길동";
    // $a->_age = 15;

    // echo $a->_age;
    // echo "<br>".$a->_name;

    class info{
        private $_name;
        private $_age;

        public function setName($name){
            $this->_name = $name;
        }
        public function getName(){
            return $this->_name;
        }
    }

    $person = new info();

    $person->setName('은서');

    echo $person->getName();
?>