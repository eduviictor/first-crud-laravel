---
title: API Reference

language_tabs:
- bash
- javascript

includes:

search: true

toc_footers:
- <a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a>
---
<!-- START_INFO -->
# Info

Welcome to the generated API reference.
[Get Postman Collection](http://localhost/docs/collection.json)

<!-- END_INFO -->

#Product


APIs for managing products
<!-- START_86e0ac5d4f8ce9853bc22fd08f2a0109 -->
## api/products
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/products" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/products"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "current_page": 1,
    "data": [
        {
            "id": 4,
            "name": "Example Response",
            "amount": 150,
            "qty_stock": 2,
            "last_sale": null
        }
    ],
    "first_page_url": "first-page-url",
    "from": 1,
    "last_page": 2,
    "last_page_url": "last-page-url",
    "next_page_url": "next-page-url",
    "path": "path-url",
    "per_page": 10,
    "prev_page_url": null,
    "to": 10,
    "total": 15
}
```
> Example response (404):

```json
{
    "data": {
        "msg": "Não encontrado!",
        "code": 404
    }
}
```

### HTTP Request
`GET api/products`


<!-- END_86e0ac5d4f8ce9853bc22fd08f2a0109 -->

<!-- START_d5a3d0c0add9ae4109a8d270310cf6c0 -->
## api/products/{id}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/products/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/products/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "data": {
        "id": 4,
        "name": "Example Response",
        "amount": 150,
        "qty_stock": 2,
        "last_sale": null
    }
}
```
> Example response (404):

```json
{
    "data": {
        "msg": "Não encontrado!",
        "code": 404
    }
}
```

### HTTP Request
`GET api/products/{id}`


<!-- END_d5a3d0c0add9ae4109a8d270310cf6c0 -->

<!-- START_05b4383f00fd57c4828a831e7057e920 -->
## api/products
> Example request:

```bash
curl -X POST \
    "http://localhost/api/products" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"qui","amount":0,"qty_stock":14,"last_sale":"est"}'

```

```javascript
const url = new URL(
    "http://localhost/api/products"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "qui",
    "amount": 0,
    "qty_stock": 14,
    "last_sale": "est"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "data": {
        "msg": "Sucesso!",
        "code": 200
    }
}
```
> Example response (400):

```json
{
    "data": {
        "msg": "Erro nos dados enviados!",
        "code": 400
    }
}
```
> Example response (500):

```json
{
    "data": {
        "msg": "Erro interno no servidor!",
        "code": 500
    }
}
```

### HTTP Request
`POST api/products`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `name` | string |  required  | Name of product.
        `amount` | float |  required  | Price of product.
        `qty_stock` | integer |  required  | Quantity of products.
        `last_sale` | date |  optional  | optional Date of last sale (default: null, format: dd-mm-yyyy)
    
<!-- END_05b4383f00fd57c4828a831e7057e920 -->

<!-- START_241fd2204f9f5b65c7aa7c9618dcca22 -->
## api/products/{id}
> Example request:

```bash
curl -X PUT \
    "http://localhost/api/products/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"consequuntur","amount":15.02217,"qty_stock":8,"last_sale":"quod"}'

```

```javascript
const url = new URL(
    "http://localhost/api/products/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "consequuntur",
    "amount": 15.02217,
    "qty_stock": 8,
    "last_sale": "quod"
}

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "data": {
        "msg": "Sucesso!",
        "code": 200
    }
}
```
> Example response (400):

```json
{
    "data": {
        "msg": "Erro nos dados enviados!",
        "code": 400
    }
}
```
> Example response (404):

```json
{
    "data": {
        "msg": "Não encontrado!",
        "code": 404
    }
}
```
> Example response (500):

```json
{
    "data": {
        "msg": "Erro interno no servidor!",
        "code": 500
    }
}
```

### HTTP Request
`PUT api/products/{id}`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `name` | string |  optional  | optional Name of product.
        `amount` | float |  optional  | optional Price of product.
        `qty_stock` | integer |  optional  | optional Quantity of products.
        `last_sale` | date |  optional  | optional Date of last sale (default: null, format: dd-mm-yyyy)
    
<!-- END_241fd2204f9f5b65c7aa7c9618dcca22 -->

<!-- START_160dac2b00e86335715987c6d1c1f3eb -->
## api/products/{id}
> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/products/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/products/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "data": {
        "msg": "Sucesso!",
        "code": 200
    }
}
```
> Example response (404):

```json
{
    "data": {
        "msg": "Não encontrado!",
        "code": 404
    }
}
```
> Example response (500):

```json
{
    "data": {
        "msg": "Erro interno no servidor!",
        "code": 500
    }
}
```

### HTTP Request
`DELETE api/products/{id}`


<!-- END_160dac2b00e86335715987c6d1c1f3eb -->

#Purchase


APIs for managing products
<!-- START_da57eb48d694ba840f22fff28ae9c8d8 -->
## api/purchase
> Example request:

```bash
curl -X POST \
    "http://localhost/api/purchase" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"product_id":15,"quantity_purchased":4,"card":{"owner":"est","card_number":"harum","date_expiration":"mollitia","flag":"et","cvv":"laboriosam"}}'

```

```javascript
const url = new URL(
    "http://localhost/api/purchase"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "product_id": 15,
    "quantity_purchased": 4,
    "card": {
        "owner": "est",
        "card_number": "harum",
        "date_expiration": "mollitia",
        "flag": "et",
        "cvv": "laboriosam"
    }
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "data": {
        "msg": "Sucesso!",
        "code": 200
    }
}
```
> Example response (400):

```json
{
    "data": {
        "msg": "Erro nos dados enviados!",
        "code": 400
    }
}
```
> Example response (404):

```json
{
    "data": {
        "msg": "Não encontrado!",
        "code": 404
    }
}
```
> Example response (402):

```json
{
    "data": {
        "msg": "Compra não aprovada!",
        "code": 402
    }
}
```
> Example response (500):

```json
{
    "data": {
        "msg": "Erro interno no servidor!",
        "code": 500
    }
}
```

### HTTP Request
`POST api/purchase`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `product_id` | integer |  required  | Id of product.
        `quantity_purchased` | integer |  optional  | integer Quantity of products you want to buy.
        `card[owner]` | string |  required  | Credit card holder name.
        `card[card_number]` | string |  required  | Number of credit card.
        `card[date_expiration]` | string |  required  | Credit card expiration date.
        `card[flag]` | string |  required  | Flag of credit card.
        `card[cvv]` | string |  required  | Cvv of credit card.
    
<!-- END_da57eb48d694ba840f22fff28ae9c8d8 -->

#general


<!-- START_cd4a874127cd23508641c63b640ee838 -->
## doc.json
> Example request:

```bash
curl -X GET \
    -G "http://localhost/doc.json" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/doc.json"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "variables": [],
    "info": {
        "name": "Laravel API",
        "_postman_id": "63ef585d-f51b-4ac4-ba72-dcd4d45a36d2",
        "description": "",
        "schema": "https:\/\/schema.getpostman.com\/json\/collection\/v2.0.0\/collection.json"
    },
    "item": [
        {
            "name": "Product",
            "description": "\nAPIs for managing products",
            "item": [
                {
                    "name": "api\/products",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost",
                            "path": "api\/products",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "api\/products\/{id}",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost",
                            "path": "api\/products\/:id",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "api\/products",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost",
                            "path": "api\/products",
                            "query": []
                        },
                        "method": "POST",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "{\n    \"name\": \"quibusdam\",\n    \"amount\": 217461877.0792489,\n    \"qty_stock\": 6,\n    \"last_sale\": \"asperiores\"\n}"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "api\/products\/{id}",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost",
                            "path": "api\/products\/:id",
                            "query": []
                        },
                        "method": "PUT",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "{\n    \"name\": \"quis\",\n    \"amount\": 19.078189,\n    \"qty_stock\": 3,\n    \"last_sale\": \"quam\"\n}"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "api\/products\/{id}",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost",
                            "path": "api\/products\/:id",
                            "query": []
                        },
                        "method": "DELETE",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                }
            ]
        },
        {
            "name": "Purchase",
            "description": "\nAPIs for managing products",
            "item": [
                {
                    "name": "api\/purchase",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost",
                            "path": "api\/purchase",
                            "query": []
                        },
                        "method": "POST",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "{\n    \"product_id\": 1,\n    \"quantity_purchased\": 7,\n    \"card\": {\n        \"owner\": \"iure\",\n        \"card_number\": \"dolorum\",\n        \"date_expiration\": \"quasi\",\n        \"flag\": \"explicabo\",\n        \"cvv\": \"libero\"\n    }\n}"
                        },
                        "description": "",
                        "response": []
                    }
                }
            ]
        },
        {
            "name": "general",
            "description": "",
            "item": [
                {
                    "name": "doc.json",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost",
                            "path": "doc.json",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                }
            ]
        }
    ]
}
```

### HTTP Request
`GET doc.json`


<!-- END_cd4a874127cd23508641c63b640ee838 -->


