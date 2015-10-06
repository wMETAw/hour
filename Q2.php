// 交互に要素を取ることで、2つのリストを結合する関数を記述せよ。例えば [a, b, c]と[1, 2, 3]という2つのリストを与えると、関数は [a, 1, b, 2, c, 3]を返す。

$list1 = array("a","b","c");
$list2 = array(1,2,3);

print_r(mergeFunc($list1, $list2));


function mergeFunc($list1, $list2)
{
    $ret = array();
    
    $max = count($list1) > count($list2) ? count($list1) :count($list2);
    
    for ($i=0; $i < $max; $i++) {

        if(isset($list1[$i])) {
            $ret[] = $list1[$i];
        }
        if(isset($list2[$i])) {
            $ret[] = $list2[$i];
        }
    }

    return $ret;
}