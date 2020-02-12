<!DOCTYPE html> 
<html lang="ja"> 
    <head> 
        <meta charset="UTF-8"> 
        <title>diworksblog掲示板</title> 
        <link rel="stylesheet" type="text/css" href="style2.css">
    </head>

    <body>
             <?php
        mb_internal_encoding("utf8");
        
        
        $pdo= new PDO("mysql:dbname=lesson1;host=localhost;","root","");
        
        $stmt = $pdo->query("select * from diworks_keijiban");        
        ?>
      
        <header> 
         <ul>
         <li>トップ</li>
    　   <li>プロフィール</li>   
         <li>D.IBlogについて</li>
         <li>登録フォーム</li>
         <li>問い合わせ</li>
         <li>その他</li>
        </ul>
        </header>
         <main>
             
             <div class="left">
                <h1>プログラミングに役に立つ掲示板</h1>
                     <form method="post" action="insert.php">
                          <div class="box1">
                            <h2>入力フォーム</h2>
                            <div>
                            <lable>ハンドルネーム</lable><br>
                                <input type="text" class="text" size="50" name="handlename">
                            </div>
                            <div>
                                <lable>タイトル</lable><br>
                                    <input type="text" class="text" size="50" name="title">
                            </div>
                            <div>
                                <lable>コメント</lable><br>
                                    <textarea cols="50" rows="10" name="comments"></textarea>
                            </div>
                            <div>
                                <input type="submit" class="submit" value="投稿する">
                            </div>
                         </div>   
                    </form><br><br>

            </div>
             <div class="right">
                 <h2>人気の記事</h2>
                 
                 <ul>
                     <li>PHPおすすめ本</li>
                     <li>PHP　MyAdminの使い方</li>
                     <li>今の人気エディターTop5</li>
                     <li>HTMLの基礎</li>
                 </ul>
                 <h2>オススメリンク</h2>
                 
                 <ul>
                     <li>ディーアイワークス株式会社</li>
                     <li>XAMPPのダウンロード</li>
                     <li>Eclipseのダウンロード</li>
                     <li>Braketsのダウンロード</li>
                 </ul>
                 <h2>カテゴリ</h2>
                 <ul>
                     <li>HTML</li>
                     <li>PHP</li>
                     <li>MySQL</li>
                     <li>JavaScript</li>
                 </ul>
             </div><br><br>
                     　　<?php
                 
                    while( $row=$stmt ->fetch()){
                 
                        echo"<div class='box2'>";
                        echo"<h3>".$row['title']."</h3>";
                        echo"<div class='contents'>";
                        echo $row['comments'];
                        echo"<div class='handlename'>posted by ".$row['handlename']."</div>";
                        echo"</div>"; 
                        echo"</div><br>";
                         }
                 ?>
        </main><br><br><br><br>

        <footer>
        Copyright(c) all right reserved  2015-2019
        </footer>
    </body> 
</html>
