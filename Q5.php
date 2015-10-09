// 1,2,…,9の数をこの順序で、+ - またはななにもせず結果が100となるあらゆる組合せを出力するプログラムを記述せよ。例えば、1 + 2 + 34 – 5 + 67 – 8 + 9 = 100となる。

$a = array('1', '2', '3', '4', '5', '6', '7', '8', '9', '+', '-');

var_export(pat($a));

// 文字列の順列を求める
public function pat($a, $s = '')
{
    $r = array();
    if (count($a) && is_array($a))
    {
        //第1引数に文字の配列を渡されたらループして処理
        foreach ($a as $k => $v)
        {
            //文字の配列から1文字もらってこちらにくっつけて
            $_s = $s . $v;

            //もらった1文字を除いた文字の配列を作って
            $_a = $a;
            unset($_a[$k]);

            //再帰呼び出し
            $_r = $this->pat($_a, $_s);

            // 空か
            if( empty($_r[0]) ) {
                continue;
            }

            // 先頭が+か-
            if( in_array(substr($_r[0], 0, 1), array("+", "-")) ) {
                continue;
            }

            // 最後が+か-
            if( in_array(substr($_r[0], -1), array("+", "-")) ) {
                continue;
            }
            
            // 最後が+か-
            if( in_array(substr($_r[0], -1), array("+", "-")) ) {
                continue;
            }

            if(strstr($_r[0], "+-") || strstr($_r[0], "-+")){
                continue;
            }

            $str = "return {$_r[0]};";

            $tmp = eval($str); 

            if ($tmp == 90) {
              //返り値にする変数に結果を追加
              $r = array_merge($r, $_r);          
            }
             
        }

  } else {

    //第1引数が空っぽの配列だったら、再帰呼び出しはここでストップ
    //返り値はこれだけ
    $r[] = $s;
  }

  return $r;
}

