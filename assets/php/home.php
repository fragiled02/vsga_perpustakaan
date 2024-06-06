<?php
$queryString =  $_SERVER['QUERY_STRING'];
header("Location: ".$queryString."/index.html");