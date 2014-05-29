<?php
@$ID = $_POST[ID];

MySQL_connect("localhost","root","");
MySQL_select_db("userxinxi");
if(!$ID){
echo "该ID不存在，请重试";
}
else{
$sql="select * from userinformation where ID=$ID";
$result=MySQL_query($sql);
$row=@MySQL_fetch_row($result);
echo "该用户ID为：".$row[0]."<br>"."该用户姓名为：".$row[1];
}
?>
