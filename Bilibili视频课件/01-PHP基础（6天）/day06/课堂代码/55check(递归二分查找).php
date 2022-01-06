<?php
    /*
     * 从数组中获取元素值
     * @param1 int $num，要查找的目标值
     * @param2 array $arr，要查找的数组
     * @param3 int $start，查找的起始位置
     * @param4 int $end，查找的结束位置
     * @return mixed，找到了返回位置，没找到返回false
     */
     function getValue4($num,$arr,$start = 0,$end = 100){
        //确定起始和终止位置
        //采用二分法查找
        $middle = floor(($end + $start) / 2);
        //判断
        if($arr[$middle] == $num){
            //已经找到了，递归的出口
            return $middle + 1;
        }elseif($arr[$middle] < $num){
            //要查找的元素在数组的后半段
            $start = $middle + 1;
            //边界值
            if($start >= $end){
                //没有找到，但是已经超出边界值，递归出口
                return false;
            }
            //调用自己去查找：递归点
            return getValue4($num,$arr,$start,$end);    //getValue4($num,$arr,51,100)
        }else{
            //要查找的元素在数组的前半段
            $end = $middle - 1;
            //判断边界值
            if($end < 0)return false;
            //调用自己：递归点
            return getValue4($num,$arr,$start,$end);    //getValue4($num,$arr,0,49)
        }
        //都没有找到
        return false;
     }
$arr = array(1,2,3,4,5,34,56,78,88,99,100);
$num = 3;
$end = count($arr);
echo getValue4($num,$arr,0,$end);