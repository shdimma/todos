# Сервис для заметок todo с JSON API

## Получение списка todo

'''
GET /v1/todos
'''

'''json  
[
    {
        "id": 2
        "content": "(A) Do it."
    },
    // ...
]
'''

## Получение элемента списка todo

'''
GET /v1/todos/2
'''

'''json  
[
    {
        "id": 2
        "content": "(A) Do it."
    }
]
'''