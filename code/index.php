<?php

//get system variable
$api_url=$_ENV["api_url"]?? "not set"; // -> return test(declared in docker-compose file )
echo $api_url;
//phpinfo();
