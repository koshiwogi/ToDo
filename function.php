<?php
 
 //エスケープしてくれる関数
 //エスケープ（<.>）をただの文字として認識させる
 //<script>開いたパソコンのファイルを削除する</script>
function h($str)
{
    return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}