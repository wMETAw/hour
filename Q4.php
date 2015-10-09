// 正の整数のリストを与えられたとき、数を並び替えて可能な最大数を返す関数を記述せよ。例えば、[50, 2, 1, 9]が与えられた時、95021が答えとなる。


$list = maxNum(array(50, 2, 1, 9));

foreach($list as $value) {
    echo $value;
}



function maxNum($list)
{
    usort($list, "cmp");
    return $list;
}

// 先頭１文字をきりとって比較
function cmp($a, $b)
{
    $a = substr($a, 0, 1);
    $b = substr($b, 0, 1);

    if ($a == $b) {
        return 0;
    }
    return ($a > $b) ? -1 : 1;
}

