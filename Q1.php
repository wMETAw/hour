// forループ、whileループ、および再帰を使用して、リスト内の数字の合計を計算する3つの関数を記述せよ

$list = array(1,2,3,4,5,6,7,8,9);

echo forFunc($list);
echo whileFunc($list);
recursiveFunc(0 ,$list); 


// for
function forFunc($list)
{
    $sum = 0;
    
    for($i=0; $i<count($list); $i++)
    {
        $sum += $list[$i];
    }
    
    return __FUNCTION__." : ".$sum."\r";
}


// while
function whileFunc($list)
{
    $sum = 0;
    while($list)
    {
        $sum += array_shift($list);
    }
    
    return __FUNCTION__." : ".$sum."\r";
}


function recursiveFunc($sum, $list)
{

    if(empty($list)) {

        echo __FUNCTION__." : ".$sum."\r";
        return;
    }

    $sum += array_shift($list);
    
    recursiveFunc($sum, &$list);
}