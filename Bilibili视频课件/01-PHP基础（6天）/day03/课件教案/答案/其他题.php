<?php
//第二题答案
/*
 * 要想得到Hello,?World!字符串，必须要在第一个if结构中满足else的条件。
 * 因此$a必须为False，然后$b也必须为False。
 * 最内层的条件语句的实现要求先前的两个变量（$a和$b）是False，
 * 而$c必须是True
 * 答案：false false true
 */


//第三题答案
$a='';//就是switch的一个简单应用，掌握语法结构，注意break即可。
//说明：运行这一段switch代码会报错，因为里面的如somefunction()等函数未定义。
switch($a){
	case 'a' : 
		somefunction();
		break;
	case 'b':
		anotherfunction();
		break;
	case 'c' : 
		dosomething();
		break;
	default :
		donothing();
		break;
}

//第五题
($a=100) && ($b=200) && ($c=300);
echo $a.','.$b.','.$c;

//第六题
$a=2;
echo $a!=3? $a!=2? $a!=1? $a!=0? '已完成' :'未支付':'已支付':'未发货':'已发货';
//正面推理
echo $a==0?'未支付':($a==1?'已支付':($a==2?'未发货':($a==3?'已发货':'已完成')));
 