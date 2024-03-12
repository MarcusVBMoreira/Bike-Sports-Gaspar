<?php 
  require('inc/config.php');
  require('inc/api_functions.php');
  require('inc/functions.php');

  $results = api_request('get_all_products', 'GET');

  if($results['data']['status'] == 'SUCCESS'){
    $produtos = $results['data']['results'];
  }else{
    $produtos = [];
  }
?>