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
    return 
        ['id'=>$id,
        'content'=> $content,
    ];
}

function serialize_list($todos): array {
    $list = [];
    foreach($todos as $id => $content)
    {
        $list[] = serialize_model($id, $content);
    }
    return $list;
}

function list_todos(){
    global $todos;
    echo json_encode(serialize_list($todos));
}

if($method == 'GET' && $path == "/v1/todos")
{
    http_response_code(200);
    list_todos();
} else if($method == 'GET' && preg_match('|^/v1/todos/(\d{1,9})$|', $path, $matches))
{
    $id = $matches[1];
    http_response_code(501);
}
else {
    http_response_code(404);
}
