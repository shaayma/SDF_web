<?php
$con=mysqli_connect('localhost','root','','bracelet');
if(mysqli_connect_errno())
{
	echo 'Failed'.mysqli_connect_error();
}
