// 最初の100個のフィボナッチ数のリストを計算する関数を記述せよ。定義では、フィボナッチ数列の最初の2つの数字は0と1で、次の数は前の2つの合計となる。例えば最初の10個のフィボナッチ数列は、0, 1, 1, 2, 3, 5, 8, 13, 21, 34となる。

print_r(fibonacci());

function fibonacci()
{
    $ar = array(0, 1);

    while(count($ar) < 100) {
        $ar[] = current($ar) + next($ar);
    }

    return $ar;
}



// 動的計画法 O(n)アルゴリズム
print_r(fibonacci2(98));

function fibonacci2($count)
{
    $a = 0;
    $b = 1;
    $c = 1;

    $ar = array($a, $b);
    for ($i=0; $i < $count; $i++)
    { 
        $ar[] = $c = $a + $b;
        $a = $b;
        $b = $c;
    }
    return $ar;
}