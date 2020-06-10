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
    -d '{"name":"autem","amount":13.881373,"qty_stock":12,"last_sale":"et"}'

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
    "name": "autem",
    "amount": 13.881373,
    "qty_stock": 12,
    "last_sale": "et"
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
    -d '{"name":"id","amount":0.832695,"qty_stock":16,"last_sale":"explicabo"}'

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
    "name": "id",
    "amount": 0.832695,
    "qty_stock": 16,
    "last_sale": "explicabo"
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


