<?php
$nume='Ion';
$$nume='Maria';
echo $Ion."<br/>";
echo $nume."<br/>";
echo $$nume."<br/>";
$nume='123';
$$nume='456';
echo $nume."<br/>";
echo ${'123'}."<br/>";
?>