<?php


require_once ('vendor/autoload.php');




$fb = new Facebook\Facebook([


'app_id' => '440232214378294',


'app_secret' => '81515be8867c83e9122c96af31c0741f',


'default_graph_version' => 'v2.3',


]);




$pageAccessToken = 'EAAM9uTccmDQBAAXDSBpvadUwWACh8Fqx2qaVXXdZA05nlN9Ig6QzewmLc2RwW0gPqwIw07GHingqafiWaSOQxethwZBGlefaJz2jCfQrZB18ZB5Lo81nqTx7ZBIJ06xcyuzq5P0wWkGU9O9Lk4WilRqZAyQK764DVxDvWAIArESrKrgz97QZBl7POkhpexkjLLMnu67yJmpZClbZAXxRRmyEDPx22ZCTm5iMYZD';


$imageData=[
    'source'=>$fb->fileToUpload($_GET['link']),
    'message'=>'Like it please',
    // 'url'=>'https://media.istockphoto.com/photos/programming-source-code-abstract-background-picture-id1047259374?k=20&m=1047259374&s=612x612&w=0&h=pt3XbBvrmiYgoYmVzsaUeXtV8vw_jJI9Ly8P7AL6Qig='
];
// $messageData=[
//     'message'=>'hi this is message',
// ];




try


{


// $response = $fb->post('/me/feed', $imageData,$pageAccessToken);
$response = $fb->post('/me/photos', $imageData,$pageAccessToken);


}


catch(Facebook\Exceptions\FacebookResponseException $e)


{


echo 'Graph returned an error: '.$e->getMessage();


exit;


}


catch(Facebook\Exceptions\FacebookSDKException $e)


{


echo 'Facebook SDK returned an Error: '.$e->getMessage();

exit;


}




$graphNode = $response->getGraphNode();


echo 'ID:'.$graphNode['id'];




?>