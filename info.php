<?php 
//phpinfo();
//$x = "Hello world";
//echo $x;
//$x = "Hello world";
//echo $x;
//$x = "Hello world";
//echo $x;
//$x = "Hello world";
//$x ="Hello world";
//echo $x;
//echo "<br>";
//$x= "Hello world";
//echo $x;
//$x = "Hello world";
//echo $x;
//$x ="Hello world";
//echo $x;
class Sort
{
    public function maoPao($arr)
    {
        $num = count($arr);
        for($j=0;$j<$num-1;$j++) {
            for ($i = 0; $i < $num - 1; $i++) {
                if ($arr[$i] > $arr[$i + 1]) {
                    $this->change($arr[$i], $arr[$i + 1]);
                }
            }
        }
        return $arr;
    }
    public function Selection($arr)
    {
        $num = count($arr);
        for ($i = 0; $i < $num - 1; $i++){
            $max = $i;
            for($j = $i+1;$j <= $num - 1;$j++){
                if($arr[$j]>$arr[$max]) {
                    $max = $j;
                }
            }
            if($max != $i) {
                $this->change($arr[$max], $arr[$i]);
            }
        }
        return $arr;
    }
    public function insertion($arr){
        $num = count($arr);
        for ($i = 0; $i < $num - 1; $i++) {
            for($j = $i+1;$j > 0;$j--){
                if($arr[$j]<$arr[$j-1]){
                    $this->change($arr[$j], $arr[$j-1]);
                }
            }
        }
        return $arr;
    }
    public function change(&$a,&$b){
        $c = $a;
        $a = $b;
        $b = $c;
    }

    function quick_sort($a)
    {
        // 判断是否需要运行，因下面已拿出一个中间值，这里<=1
        if (count($a) <= 1) {
            return $a;
        }

        $middle = $a[0]; // 中间值

        $left = array(); // 接收小于中间值
        $right = array();// 接收大于中间值

        // 循环比较
        for ($i=1; $i < count($a); $i++) {

            if ($middle < $a[$i]) {

                // 大于中间值
                $right[] = $a[$i];
            } else {

                // 小于中间值
                $left[] = $a[$i];
            }
        }

        // 递归排序划分好的2边
        $left = $this->quick_sort($left);
        $right = $this->quick_sort($right);

        // 合并排序后的数据，别忘了合并中间值
        return array_merge($left, array($middle), $right);
    }

    function quick_sort2($arr){
        $n = 0;
        $length = count($arr);
        $i = 1;
        while( $i < $length)
        {
            if($arr[$n] <= $arr[$i]){
                $i++;
            }else{
                $this->change($arr[$n],$arr[$i]);
                $n = $i;
            }
        }


    }

    function shell_sort(array $arr){
        // 将$arr按升序排列
        $len = count($arr);
        $f = 3;// 定义因子
        $h = 1;// 最小为1
        while ($h < $len/$f){
            $h = $f*$h + 1; // 1, 4, 13, 40, 121, 364, 1093, ...
        }
        while ($h >= 1){  // 将数组变为h有序
            for ($i = $h; $i < $len; $i++){  // 将a[i]插入到a[i-h], a[i-2*h], a[i-3*h]... 之中 （算法的关键
                for ($j = $i; $j >= $h;  $j -= $h){
                    if ($arr[$j] < $arr[$j-$h]){
                        $temp = $arr[$j];
                        $arr[$j] = $arr[$j-$h];
                        $arr[$j-$h] = $temp;
                    }
                    //print_r($arr);echo '<br/>'; // 打开这行注释，可以看到每一步被替换的情形
                }
            }
            $h = intval($h/$f);
        }
        return $arr;
    }
}
//$entity = new Sort();
//$arr = array(48,14,18,35,1,5,3,5,6,7,28,9);
//$a = array(2,13,42,34,56,23,67,365,87665,54,68,3);
//$result = $entity->quick_sort($a);
//print_r($result);
echo $s;









