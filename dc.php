<?php

// abstract class a{
// 	public $a;
//     public function __construct($a)
//     {
//         $this->a = $a;
//         echo $this->a;
//     }
//     protected function _addCommonParams() {
//         echo "ppp";
//     }
//     abstract protected function action();
//     public function hello(){
//     	echo "aa";
//     }
// }


// class b extends a{
//     protected function action(){
//         echo "aa";
//     }
//     // protected function _addCommonParams() {
//     //     echo "9999";
//     // }

//     public function cc(){
//         $this->_addCommonParams();
//     }
// }

// $b = new b('8');

// $b->cc();


// class  shao
// {
//     public function sasa($name){
//         echo $name,'狗！<br/>';
//     }
// }
// class zhen extends shao{
//     public function sasa($name)
//     {
//         echo '猫<br/>'.$name;
//     }
// }
// $lli = new zhen();
// // $lli->aaa();
// $lli->sasa('binghh');


class fu
{
    public function text(){
        echo '父类';
    }
    public  function  textt(){
        echo '父亲';
}
}
class erzi extends fu{
    public function text()
    {
        parent::text();//我要父类的东西
        echo '儿子';//重写

    }
}
$shili = new fu();
$erzi = new erzi();
$erzi->text();
?>