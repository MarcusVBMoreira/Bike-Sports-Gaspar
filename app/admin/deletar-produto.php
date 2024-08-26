<?php

include('assets/inc/Request.php');

$result = Request::DeleteHard($_GET['id']);

header('Location: index.php');