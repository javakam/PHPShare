<?php

#第一题
#区别:    
# require一个文件存在错误的话，那么程序就会中断执行了，并显示致命错误 
#include一个文件存在错误的话，那么程序不会中端，而是继续执行，并显示一个警告错误。
# include和include_once : 前者可加载多次相同文件,后者只加载一次。require和require_once同理

//第二题

//最大公约 
function max_gy($num1,$num2){
    // $min = min($num1,$num2);
    $min = $num1>$num2 ? $num2 : $num1;
    for ($i=$min; $i >=1 ; $i--) { 
        if($num1%$i==0 && $num2%$i==0) return $i;
    }
}
echo max_gy(24,36).'</br>';

//最小公倍
function min_gb($num1,$num2){
    $min = $num1>$num2 ? $num2 : $num1;
    for ($i=$min; $i <=$num1*$num2 ; $i+=$min) { 
        if($i%$num1==0 && $i%$num2==0) return $i;
    }
}
echo min_gb(24,36).'</br>';


//第三题
function sushu($num){
    for ($i=2; $i <=$num-1 ; $i++) { 
       if($num%$i==0) return false;
    }
    return true;
}

for ($i=2; $i <=200 ; $i++) { 
    if(sushu($i)) echo $i.'</br>';
}