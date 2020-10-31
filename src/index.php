<?php

$method = $_SERVER['REQUEST_METHOD'];
$path = $_SERVER['REQUEST_URI'];

//echo "Under developing.Method is $method. Path is $path \n";
$todos = [
        "Install Debian",
        "(A) Read about Nginx location",
        "(B) Fix bash compilition"
];

function serialize_model(int $id, string $content){
    return json_encode(
        ['id'=>$id,
        'content'=> $content,
        ]
    );
}

if($method == 'GET' && $path == "/v1/todos")
{
    //echo var_dump($json);
    http_response_code(501);

} else if($method == 'GET' && preg_match('|^/v1/todos/(\d{1,9})$|', $path, $matches))
{
    $id = $matches[1];
    http_response_code(501);
}
else {
    http_response_code(404);
}
