<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>API Reference</title>

    <link rel="stylesheet" href="{{ asset('/docs/css/style.css') }}" />
    <script src="{{ asset('/docs/js/all.js') }}"></script>


          <script>
        $(function() {
            setupLanguages(["bash","javascript"]);
        });
      </script>
      </head>

  <body class="">
    <a href="#" id="nav-button">
      <span>
        NAV
        <img src="/docs/images/navbar.png" />
      </span>
    </a>
    <div class="tocify-wrapper">
        <img src="/docs/images/logo.png" />
                    <div class="lang-selector">
                                  <a href="#" data-language-name="bash">bash</a>
                                  <a href="#" data-language-name="javascript">javascript</a>
                            </div>
                            <div class="search">
              <input type="text" class="search" id="input-search" placeholder="Search">
            </div>
            <ul class="search-results"></ul>
              <div id="toc">
      </div>
                    <ul class="toc-footer">
                                  <li><a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a></li>
                            </ul>
            </div>
    <div class="page-wrapper">
      <div class="dark-box"></div>
      <div class="content">
          <!-- START_INFO -->
<h1>Info</h1>
<p>Welcome to the generated API reference.
<a href="{{ route("apidoc.json") }}">Get Postman Collection</a></p>
<!-- END_INFO -->
<h1>Product</h1>
<p>APIs for managing products</p>
<!-- START_86e0ac5d4f8ce9853bc22fd08f2a0109 -->
<h2>api/products</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/api/products" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
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
}</code></pre>
<blockquote>
<p>Example response (404):</p>
</blockquote>
<pre><code class="language-json">{
    "data": {
        "msg": "Não encontrado!",
        "code": 404
    }
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/products</code></p>
<!-- END_86e0ac5d4f8ce9853bc22fd08f2a0109 -->
<!-- START_d5a3d0c0add9ae4109a8d270310cf6c0 -->
<h2>api/products/{id}</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/api/products/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "data": {
        "id": 4,
        "name": "Example Response",
        "amount": 150,
        "qty_stock": 2,
        "last_sale": null
    }
}</code></pre>
<blockquote>
<p>Example response (404):</p>
</blockquote>
<pre><code class="language-json">{
    "data": {
        "msg": "Não encontrado!",
        "code": 404
    }
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/products/{id}</code></p>
<!-- END_d5a3d0c0add9ae4109a8d270310cf6c0 -->
<!-- START_05b4383f00fd57c4828a831e7057e920 -->
<h2>api/products</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost/api/products" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"qui","amount":0,"qty_stock":14,"last_sale":"est"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "data": {
        "msg": "Sucesso!",
        "code": 200
    }
}</code></pre>
<blockquote>
<p>Example response (400):</p>
</blockquote>
<pre><code class="language-json">{
    "data": {
        "msg": "Erro nos dados enviados!",
        "code": 400
    }
}</code></pre>
<blockquote>
<p>Example response (500):</p>
</blockquote>
<pre><code class="language-json">{
    "data": {
        "msg": "Erro interno no servidor!",
        "code": 500
    }
}</code></pre>
<h3>HTTP Request</h3>
<p><code>POST api/products</code></p>
<h4>Body Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Type</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>name</code></td>
<td>string</td>
<td>required</td>
<td>Name of product.</td>
</tr>
<tr>
<td><code>amount</code></td>
<td>float</td>
<td>required</td>
<td>Price of product.</td>
</tr>
<tr>
<td><code>qty_stock</code></td>
<td>integer</td>
<td>required</td>
<td>Quantity of products.</td>
</tr>
<tr>
<td><code>last_sale</code></td>
<td>date</td>
<td>optional</td>
<td>optional Date of last sale (default: null, format: dd-mm-yyyy)</td>
</tr>
</tbody>
</table>
<!-- END_05b4383f00fd57c4828a831e7057e920 -->
<!-- START_241fd2204f9f5b65c7aa7c9618dcca22 -->
<h2>api/products/{id}</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X PUT \
    "http://localhost/api/products/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"consequuntur","amount":15.02217,"qty_stock":8,"last_sale":"quod"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "data": {
        "msg": "Sucesso!",
        "code": 200
    }
}</code></pre>
<blockquote>
<p>Example response (400):</p>
</blockquote>
<pre><code class="language-json">{
    "data": {
        "msg": "Erro nos dados enviados!",
        "code": 400
    }
}</code></pre>
<blockquote>
<p>Example response (404):</p>
</blockquote>
<pre><code class="language-json">{
    "data": {
        "msg": "Não encontrado!",
        "code": 404
    }
}</code></pre>
<blockquote>
<p>Example response (500):</p>
</blockquote>
<pre><code class="language-json">{
    "data": {
        "msg": "Erro interno no servidor!",
        "code": 500
    }
}</code></pre>
<h3>HTTP Request</h3>
<p><code>PUT api/products/{id}</code></p>
<h4>Body Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Type</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>name</code></td>
<td>string</td>
<td>optional</td>
<td>optional Name of product.</td>
</tr>
<tr>
<td><code>amount</code></td>
<td>float</td>
<td>optional</td>
<td>optional Price of product.</td>
</tr>
<tr>
<td><code>qty_stock</code></td>
<td>integer</td>
<td>optional</td>
<td>optional Quantity of products.</td>
</tr>
<tr>
<td><code>last_sale</code></td>
<td>date</td>
<td>optional</td>
<td>optional Date of last sale (default: null, format: dd-mm-yyyy)</td>
</tr>
</tbody>
</table>
<!-- END_241fd2204f9f5b65c7aa7c9618dcca22 -->
<!-- START_160dac2b00e86335715987c6d1c1f3eb -->
<h2>api/products/{id}</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X DELETE \
    "http://localhost/api/products/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "data": {
        "msg": "Sucesso!",
        "code": 200
    }
}</code></pre>
<blockquote>
<p>Example response (404):</p>
</blockquote>
<pre><code class="language-json">{
    "data": {
        "msg": "Não encontrado!",
        "code": 404
    }
}</code></pre>
<blockquote>
<p>Example response (500):</p>
</blockquote>
<pre><code class="language-json">{
    "data": {
        "msg": "Erro interno no servidor!",
        "code": 500
    }
}</code></pre>
<h3>HTTP Request</h3>
<p><code>DELETE api/products/{id}</code></p>
<!-- END_160dac2b00e86335715987c6d1c1f3eb -->
<h1>Purchase</h1>
<p>APIs for managing products</p>
<!-- START_da57eb48d694ba840f22fff28ae9c8d8 -->
<h2>api/purchase</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost/api/purchase" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"product_id":15,"quantity_purchased":4,"card":{"owner":"est","card_number":"harum","date_expiration":"mollitia","flag":"et","cvv":"laboriosam"}}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "data": {
        "msg": "Sucesso!",
        "code": 200
    }
}</code></pre>
<blockquote>
<p>Example response (400):</p>
</blockquote>
<pre><code class="language-json">{
    "data": {
        "msg": "Erro nos dados enviados!",
        "code": 400
    }
}</code></pre>
<blockquote>
<p>Example response (404):</p>
</blockquote>
<pre><code class="language-json">{
    "data": {
        "msg": "Não encontrado!",
        "code": 404
    }
}</code></pre>
<blockquote>
<p>Example response (402):</p>
</blockquote>
<pre><code class="language-json">{
    "data": {
        "msg": "Compra não aprovada!",
        "code": 402
    }
}</code></pre>
<blockquote>
<p>Example response (500):</p>
</blockquote>
<pre><code class="language-json">{
    "data": {
        "msg": "Erro interno no servidor!",
        "code": 500
    }
}</code></pre>
<h3>HTTP Request</h3>
<p><code>POST api/purchase</code></p>
<h4>Body Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Type</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>product_id</code></td>
<td>integer</td>
<td>required</td>
<td>Id of product.</td>
</tr>
<tr>
<td><code>quantity_purchased</code></td>
<td>integer</td>
<td>optional</td>
<td>integer Quantity of products you want to buy.</td>
</tr>
<tr>
<td><code>card[owner]</code></td>
<td>string</td>
<td>required</td>
<td>Credit card holder name.</td>
</tr>
<tr>
<td><code>card[card_number]</code></td>
<td>string</td>
<td>required</td>
<td>Number of credit card.</td>
</tr>
<tr>
<td><code>card[date_expiration]</code></td>
<td>string</td>
<td>required</td>
<td>Credit card expiration date.</td>
</tr>
<tr>
<td><code>card[flag]</code></td>
<td>string</td>
<td>required</td>
<td>Flag of credit card.</td>
</tr>
<tr>
<td><code>card[cvv]</code></td>
<td>string</td>
<td>required</td>
<td>Cvv of credit card.</td>
</tr>
</tbody>
</table>
<!-- END_da57eb48d694ba840f22fff28ae9c8d8 -->
<h1>general</h1>
<!-- START_cd4a874127cd23508641c63b640ee838 -->
<h2>doc.json</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/doc.json" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
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
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET doc.json</code></p>
<!-- END_cd4a874127cd23508641c63b640ee838 -->
      </div>
      <div class="dark-box">
                        <div class="lang-selector">
                                    <a href="#" data-language-name="bash">bash</a>
                                    <a href="#" data-language-name="javascript">javascript</a>
                              </div>
                </div>
    </div>
  </body>
</html>