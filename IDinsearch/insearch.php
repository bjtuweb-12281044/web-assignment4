<?php
@$ID = $_POST[ID];

MySQL_connect("localhost","root","");
MySQL_select_db("userxinxi");
if(!$ID){
echo "��ID�����ڣ�������";
}
else{
$sql="select * from userinformation where ID=$ID";
$result=MySQL_query($sql);
$row=@MySQL_fetch_row($result);
echo "���û�IDΪ��".$row[0]."<br>"."���û�����Ϊ��".$row[1];
}
?>
