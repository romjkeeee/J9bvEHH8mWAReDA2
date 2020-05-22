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
[Get Postman Collection](http://localhost:8080/docs/collection.json)

<!-- END_INFO -->

#Cities


APIs for
<!-- START_cb597ab0518505c008912ed3428b60f9 -->
## List cities

> Example request:

```bash
curl -X GET \
    -G "http://localhost:8080/api/v1/cities" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8080/api/v1/cities"
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
{}
```

### HTTP Request
`GET api/v1/cities`


<!-- END_cb597ab0518505c008912ed3428b60f9 -->

#Station


APIs for
<!-- START_b75d9b754125393d38baf44861c13bb6 -->
## List stations

> Example request:

```bash
curl -X GET \
    -G "http://localhost:8080/api/v1/stations?city_id=1&opened=1&longitude=30.000000&latitude=50.000000" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8080/api/v1/stations"
);

let params = {
    "city_id": "1",
    "opened": "1",
    "longitude": "30.000000",
    "latitude": "50.000000",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

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
{}
```

### HTTP Request
`GET api/v1/stations`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `city_id` |  optional  | The ID of the city.
    `opened` |  optional  | Get just opened Station.
    `longitude` |  optional  | 
    `latitude` |  optional  | 

<!-- END_b75d9b754125393d38baf44861c13bb6 -->

<!-- START_6a4e101e83cc3f8fceaf122866f550bc -->
## Store station

> Example request:

```bash
curl -X POST \
    "http://localhost:8080/api/v1/stations" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"Best station","city_id":1,"address":"st.Pushkina Zolotushkina","longitude":"30.510360","latitude":"50.471052","phone":"380445005050","cost":"3$ per\/mW","description":"best ever station in Kiev","ports":"psr","work_from":"08:00:00","work_to":"22:00:00"}'

```

```javascript
const url = new URL(
    "http://localhost:8080/api/v1/stations"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "Best station",
    "city_id": 1,
    "address": "st.Pushkina Zolotushkina",
    "longitude": "30.510360",
    "latitude": "50.471052",
    "phone": "380445005050",
    "cost": "3$ per\/mW",
    "description": "best ever station in Kiev",
    "ports": "psr",
    "work_from": "08:00:00",
    "work_to": "22:00:00"
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
{}
```

### HTTP Request
`POST api/v1/stations`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `name` | string |  required  | 
        `city_id` | integer |  required  | 
        `address` | string |  required  | 
        `longitude` | string |  required  | 
        `latitude` | string |  required  | 
        `phone` | string |  required  | 
        `cost` | string |  required  | 
        `description` | required |  optional  | string
        `ports` | string |  required  | 
        `work_from` | string |  required  | 
        `work_to` | string |  required  | 
    
<!-- END_6a4e101e83cc3f8fceaf122866f550bc -->

<!-- START_4f9555166a4c3763ddfb12d86a26226f -->
## Show station

> Example request:

```bash
curl -X GET \
    -G "http://localhost:8080/api/v1/stations/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8080/api/v1/stations/1"
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
{}
```

### HTTP Request
`GET api/v1/stations/{station}`


<!-- END_4f9555166a4c3763ddfb12d86a26226f -->

<!-- START_012409f1a9b3f21eace2e9ae3c207ef8 -->
## Update station

> Example request:

```bash
curl -X PUT \
    "http://localhost:8080/api/v1/stations/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"Best station","city_id":1,"address":"st.Pushkina Zolotushkina","longitude":"30.510360","latitude":"50.471052","phone":"380445005050","cost":"3$ per\/mW","description":"best ever station in Kiev","ports":"psr","work_from":"08:00:00","work_to":"22:00:00"}'

```

```javascript
const url = new URL(
    "http://localhost:8080/api/v1/stations/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "Best station",
    "city_id": 1,
    "address": "st.Pushkina Zolotushkina",
    "longitude": "30.510360",
    "latitude": "50.471052",
    "phone": "380445005050",
    "cost": "3$ per\/mW",
    "description": "best ever station in Kiev",
    "ports": "psr",
    "work_from": "08:00:00",
    "work_to": "22:00:00"
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
{}
```

### HTTP Request
`PUT api/v1/stations/{station}`

`PATCH api/v1/stations/{station}`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `name` | string |  optional  | 
        `city_id` | integer |  optional  | 
        `address` | string |  optional  | 
        `longitude` | string |  optional  | 
        `latitude` | string |  optional  | 
        `phone` | string |  optional  | 
        `cost` | string |  optional  | 
        `description` | string |  optional  | 
        `ports` | string |  optional  | 
        `work_from` | string |  optional  | 
        `work_to` | string |  optional  | 
    
<!-- END_012409f1a9b3f21eace2e9ae3c207ef8 -->

<!-- START_ab5f4372ca80d8e23dafa5edf664567d -->
## Destroy station

> Example request:

```bash
curl -X DELETE \
    "http://localhost:8080/api/v1/stations/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8080/api/v1/stations/1"
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
{}
```

### HTTP Request
`DELETE api/v1/stations/{station}`


<!-- END_ab5f4372ca80d8e23dafa5edf664567d -->


