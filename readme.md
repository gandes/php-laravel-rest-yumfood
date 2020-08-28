# Yumfood API

Yumfood API is an API to order food wherever you are.

### A. Installation

```sh
$ git clone https://github.com/gandes/php-laravel-rest-yumfood.git
$ cd php-laravel-rest-yumfood
$ composer install
```
### B. Running Server
```
$ php artisan serve
```

### C. API Documentation

Yumfood API provides endpoints which can be seen in the list of endpoints below.

#### C.1 API URL
```
http://127.0.0.1:8000
```

#### C.2 Vendor

| Method | Endpoint | Content-Type | Accept | Description |
| ------ | ------ | ------ | ------ | ------ |
| GET | /api/v1/vendors | * | application/json | Show all vendors include **Tags** & **Dishes** |
| GET | /api/v1/vendors?tags[]=halal&tags[]=korean | * | application/json | Show all vendors include **Tags** & **Dishes** with filter by **Tags** |
| GET | /api/v1/vendors/{vendor_id} | * | application/json | Show specific vendor |
| GET | /api/v1/vendors/{vendor_id}/dishes | * | application/json | Show all vendor dishes |
| POST | /api/v1/vendors/ | application/x-www-form-urlencoded | application/json | Add new vendor |
| PUT | /api/v1/vendors/{vendor_id} | application/x-www-form-urlencoded | application/json | Edit vendor |
| DELETE | /api/v1/vendors/{vendor_id} | * | application/json | Delete vendor |

#### C.3 Request & Response

##### I. Show All Vendors
---
**Request**
```
curl -X GET -H 'Accept: application/json' -i 'http://127.0.0.1:8000/api/v1/vendors'
```
**Response**
```
{
    "status": "success",
    "data": [
        {
            "id": 1,
            "name": "Spinka, Langworth and Kuphal",
            "logo": "https://lorempixel.com/640/480/food/?11507",
            "tags": [
                {
                    "id": 13,
                    "name": "affordable"
                },
                {
                    "id": 4,
                    "name": "indonesian"
                },
                {
                    "id": 3,
                    "name": "korean"
                },
                {
                    "id": 6,
                    "name": "halal"
                },
                {
                    "id": 8,
                    "name": "dinner"
                },
                {
                    "id": 9,
                    "name": "breakfast"
                },
                {
                    "id": 7,
                    "name": "lunch"
                },
                {
                    "id": 10,
                    "name": "fish"
                }
            ],
            "dishes": []
        },
        {
            "id": 2,
            "name": "Strosin-McDermott",
            "logo": "https://lorempixel.com/640/480/food/?18375",
            "tags": [
                {
                    "id": 14,
                    "name": "expensive"
                },
                {
                    "id": 1,
                    "name": "chinese"
                },
                {
                    "id": 4,
                    "name": "indonesian"
                },
                {
                    "id": 2,
                    "name": "western"
                },
                {
                    "id": 3,
                    "name": "korean"
                },
                {
                    "id": 6,
                    "name": "halal"
                },
                {
                    "id": 8,
                    "name": "dinner"
                },
                {
                    "id": 9,
                    "name": "breakfast"
                },
                {
                    "id": 10,
                    "name": "fish"
                }
            ],
            "dishes": []
        },
        {
            "id": 3,
            "name": "Dietrich LLC",
            "logo": "https://lorempixel.com/640/480/food/?67157",
            "tags": [
                {
                    "id": 13,
                    "name": "affordable"
                },
                {
                    "id": 1,
                    "name": "chinese"
                },
                {
                    "id": 6,
                    "name": "halal"
                },
                {
                    "id": 7,
                    "name": "lunch"
                },
                {
                    "id": 10,
                    "name": "fish"
                }
            ],
            "dishes": [
                {
                    "id": 19,
                    "name": "Nasi Timbel",
                    "price": 29327
                }
            ]
        },
        {
            "id": 4,
            "name": "Berge, Nikolaus and Bahringer",
            "logo": "https://lorempixel.com/640/480/food/?10084",
            "tags": [
                {
                    "id": 14,
                    "name": "expensive"
                },
                {
                    "id": 4,
                    "name": "indonesian"
                },
                {
                    "id": 1,
                    "name": "chinese"
                },
                {
                    "id": 3,
                    "name": "korean"
                },
                {
                    "id": 2,
                    "name": "western"
                },
                {
                    "id": 6,
                    "name": "halal"
                },
                {
                    "id": 8,
                    "name": "dinner"
                },
                {
                    "id": 11,
                    "name": "meat"
                }
            ],
            "dishes": []
        },
        {
            "id": 5,
            "name": "Durgan-Borer",
            "logo": "https://lorempixel.com/640/480/food/?18793",
            "tags": [
                {
                    "id": 13,
                    "name": "affordable"
                },
                {
                    "id": 1,
                    "name": "chinese"
                },
                {
                    "id": 6,
                    "name": "halal"
                },
                {
                    "id": 7,
                    "name": "lunch"
                },
                {
                    "id": 10,
                    "name": "fish"
                }
            ],
            "dishes": [
                {
                    "id": 10,
                    "name": "Pasta",
                    "price": 63138
                }
            ]
        },
        {
            "id": 6,
            "name": "Turcotte LLC",
            "logo": "http://lorempixel.com/output/animals-q-g-640-480-7.jpg",
            "tags": [
                {
                    "id": 14,
                    "name": "expensive"
                },
                {
                    "id": 3,
                    "name": "korean"
                },
                {
                    "id": 1,
                    "name": "chinese"
                },
                {
                    "id": 4,
                    "name": "indonesian"
                },
                {
                    "id": 6,
                    "name": "halal"
                },
                {
                    "id": 9,
                    "name": "breakfast"
                },
                {
                    "id": 10,
                    "name": "fish"
                }
            ],
            "dishes": []
        },
        {
            "id": 7,
            "name": "Klocko PLC",
            "logo": "https://lorempixel.com/640/480/food/?92442",
            "tags": [
                {
                    "id": 12,
                    "name": "budget"
                },
                {
                    "id": 4,
                    "name": "indonesian"
                },
                {
                    "id": 2,
                    "name": "western"
                },
                {
                    "id": 1,
                    "name": "chinese"
                },
                {
                    "id": 3,
                    "name": "korean"
                },
                {
                    "id": 6,
                    "name": "halal"
                },
                {
                    "id": 7,
                    "name": "lunch"
                },
                {
                    "id": 10,
                    "name": "fish"
                }
            ],
            "dishes": [
                {
                    "id": 36,
                    "name": "Tahu Bulat",
                    "price": 28909
                }
            ]
        },
        {
            "id": 8,
            "name": "Torp-Feil",
            "logo": "https://lorempixel.com/640/480/food/?80432",
            "tags": [
                {
                    "id": 12,
                    "name": "budget"
                },
                {
                    "id": 3,
                    "name": "korean"
                },
                {
                    "id": 2,
                    "name": "western"
                },
                {
                    "id": 4,
                    "name": "indonesian"
                },
                {
                    "id": 6,
                    "name": "halal"
                },
                {
                    "id": 7,
                    "name": "lunch"
                },
                {
                    "id": 10,
                    "name": "fish"
                }
            ],
            "dishes": []
        },
        {
            "id": 9,
            "name": "Conroy-Collins",
            "logo": "https://lorempixel.com/640/480/food/?23049",
            "tags": [
                {
                    "id": 13,
                    "name": "affordable"
                },
                {
                    "id": 1,
                    "name": "chinese"
                },
                {
                    "id": 6,
                    "name": "halal"
                },
                {
                    "id": 9,
                    "name": "breakfast"
                },
                {
                    "id": 10,
                    "name": "fish"
                }
            ],
            "dishes": [
                {
                    "id": 29,
                    "name": "Mie Rebus",
                    "price": 45543
                },
                {
                    "id": 34,
                    "name": "Rujak",
                    "price": 75124
                }
            ]
        },
        {
            "id": 10,
            "name": "Funk Ltd",
            "logo": "http://lorempixel.com/output/animals-q-g-640-480-7.jpg",
            "tags": [
                {
                    "id": 14,
                    "name": "expensive"
                },
                {
                    "id": 2,
                    "name": "western"
                },
                {
                    "id": 1,
                    "name": "chinese"
                },
                {
                    "id": 3,
                    "name": "korean"
                },
                {
                    "id": 6,
                    "name": "halal"
                },
                {
                    "id": 7,
                    "name": "lunch"
                },
                {
                    "id": 10,
                    "name": "fish"
                }
            ],
            "dishes": [
                {
                    "id": 15,
                    "name": "Rujak",
                    "price": 60235
                }
            ]
        },
        {
            "id": 11,
            "name": "Schuster, Crist and Witting",
            "logo": "https://lorempixel.com/640/480/food/?77266",
            "tags": [
                {
                    "id": 14,
                    "name": "expensive"
                },
                {
                    "id": 1,
                    "name": "chinese"
                },
                {
                    "id": 2,
                    "name": "western"
                },
                {
                    "id": 3,
                    "name": "korean"
                },
                {
                    "id": 6,
                    "name": "halal"
                },
                {
                    "id": 8,
                    "name": "dinner"
                },
                {
                    "id": 9,
                    "name": "breakfast"
                },
                {
                    "id": 11,
                    "name": "meat"
                }
            ],
            "dishes": [
                {
                    "id": 33,
                    "name": "Soto Kuning",
                    "price": 61217
                },
                {
                    "id": 45,
                    "name": "Batagor",
                    "price": 66459
                }
            ]
        },
        {
            "id": 12,
            "name": "Beer Inc",
            "logo": "https://lorempixel.com/640/480/food/?45656",
            "tags": [
                {
                    "id": 14,
                    "name": "expensive"
                },
                {
                    "id": 3,
                    "name": "korean"
                },
                {
                    "id": 2,
                    "name": "western"
                },
                {
                    "id": 6,
                    "name": "halal"
                },
                {
                    "id": 9,
                    "name": "breakfast"
                },
                {
                    "id": 7,
                    "name": "lunch"
                },
                {
                    "id": 8,
                    "name": "dinner"
                },
                {
                    "id": 11,
                    "name": "meat"
                }
            ],
            "dishes": [
                {
                    "id": 2,
                    "name": "Wajik",
                    "price": 61060
                },
                {
                    "id": 31,
                    "name": "Ayam Bakar",
                    "price": 32736
                }
            ]
        },
        {
            "id": 13,
            "name": "Leuschke-Brekke",
            "logo": "https://lorempixel.com/640/480/food/?87420",
            "tags": [
                {
                    "id": 13,
                    "name": "affordable"
                },
                {
                    "id": 4,
                    "name": "indonesian"
                },
                {
                    "id": 3,
                    "name": "korean"
                },
                {
                    "id": 2,
                    "name": "western"
                },
                {
                    "id": 6,
                    "name": "halal"
                },
                {
                    "id": 7,
                    "name": "lunch"
                },
                {
                    "id": 8,
                    "name": "dinner"
                },
                {
                    "id": 11,
                    "name": "meat"
                }
            ],
            "dishes": [
                {
                    "id": 16,
                    "name": "Otak-Otak",
                    "price": 45711
                },
                {
                    "id": 46,
                    "name": "Sayur Bening",
                    "price": 61022
                }
            ]
        },
        {
            "id": 14,
            "name": "Frami Group",
            "logo": "https://lorempixel.com/640/480/food/?70148",
            "tags": [
                {
                    "id": 14,
                    "name": "expensive"
                },
                {
                    "id": 3,
                    "name": "korean"
                },
                {
                    "id": 2,
                    "name": "western"
                },
                {
                    "id": 6,
                    "name": "halal"
                },
                {
                    "id": 7,
                    "name": "lunch"
                },
                {
                    "id": 10,
                    "name": "fish"
                }
            ],
            "dishes": [
                {
                    "id": 18,
                    "name": "Sate Kambing",
                    "price": 60972
                }
            ]
        },
        {
            "id": 15,
            "name": "Ruecker LLC",
            "logo": "http://lorempixel.com/output/animals-q-g-640-480-7.jpg",
            "tags": [
                {
                    "id": 12,
                    "name": "budget"
                },
                {
                    "id": 2,
                    "name": "western"
                },
                {
                    "id": 6,
                    "name": "halal"
                },
                {
                    "id": 9,
                    "name": "breakfast"
                },
                {
                    "id": 7,
                    "name": "lunch"
                },
                {
                    "id": 11,
                    "name": "meat"
                }
            ],
            "dishes": [
                {
                    "id": 35,
                    "name": "Sop Buntut",
                    "price": 31625
                }
            ]
        }
    ],
    "error": null,
    "links": {
        "first": "http://127.0.0.1:8000/api/v1/vendors?page=1",
        "last": "http://127.0.0.1:8000/api/v1/vendors?page=4",
        "prev": null,
        "next": "http://127.0.0.1:8000/api/v1/vendors?page=2"
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "last_page": 4,
        "path": "http://127.0.0.1:8000/api/v1/vendors",
        "per_page": 15,
        "to": 15,
        "total": 50
    }
}
```


##### II. Show All Vendors with Filter
---
**Request**
```
curl -X GET -H 'Accept: application/json' -i 'http://127.0.0.1:8000/api/v1/vendors?tags[]=halal&tags[]=korean'
```
**Response**
```
{
    "status": "success",
    "data": [
        {
            "id": 1,
            "name": "Spinka, Langworth and Kuphal",
            "logo": "https://lorempixel.com/640/480/food/?11507",
            "tags": [
                {
                    "id": 3,
                    "name": "korean"
                },
                {
                    "id": 6,
                    "name": "halal"
                }
            ],
            "dishes": []
        },
        {
            "id": 2,
            "name": "Strosin-McDermott",
            "logo": "https://lorempixel.com/640/480/food/?18375",
            "tags": [
                {
                    "id": 3,
                    "name": "korean"
                },
                {
                    "id": 6,
                    "name": "halal"
                }
            ],
            "dishes": []
        },
        {
            "id": 3,
            "name": "Dietrich LLC",
            "logo": "https://lorempixel.com/640/480/food/?67157",
            "tags": [
                {
                    "id": 6,
                    "name": "halal"
                }
            ],
            "dishes": [
                {
                    "id": 19,
                    "name": "Nasi Timbel",
                    "price": 29327
                }
            ]
        },
        {
            "id": 4,
            "name": "Berge, Nikolaus and Bahringer",
            "logo": "https://lorempixel.com/640/480/food/?10084",
            "tags": [
                {
                    "id": 3,
                    "name": "korean"
                },
                {
                    "id": 6,
                    "name": "halal"
                }
            ],
            "dishes": []
        },
        {
            "id": 5,
            "name": "Durgan-Borer",
            "logo": "https://lorempixel.com/640/480/food/?18793",
            "tags": [
                {
                    "id": 6,
                    "name": "halal"
                }
            ],
            "dishes": [
                {
                    "id": 10,
                    "name": "Pasta",
                    "price": 63138
                }
            ]
        },
        {
            "id": 6,
            "name": "Turcotte LLC",
            "logo": "http://lorempixel.com/output/animals-q-g-640-480-7.jpg",
            "tags": [
                {
                    "id": 3,
                    "name": "korean"
                },
                {
                    "id": 6,
                    "name": "halal"
                }
            ],
            "dishes": []
        },
        {
            "id": 7,
            "name": "Klocko PLC",
            "logo": "https://lorempixel.com/640/480/food/?92442",
            "tags": [
                {
                    "id": 3,
                    "name": "korean"
                },
                {
                    "id": 6,
                    "name": "halal"
                }
            ],
            "dishes": [
                {
                    "id": 36,
                    "name": "Tahu Bulat",
                    "price": 28909
                }
            ]
        },
        {
            "id": 8,
            "name": "Torp-Feil",
            "logo": "https://lorempixel.com/640/480/food/?80432",
            "tags": [
                {
                    "id": 3,
                    "name": "korean"
                },
                {
                    "id": 6,
                    "name": "halal"
                }
            ],
            "dishes": []
        },
        {
            "id": 9,
            "name": "Conroy-Collins",
            "logo": "https://lorempixel.com/640/480/food/?23049",
            "tags": [
                {
                    "id": 6,
                    "name": "halal"
                }
            ],
            "dishes": [
                {
                    "id": 29,
                    "name": "Mie Rebus",
                    "price": 45543
                },
                {
                    "id": 34,
                    "name": "Rujak",
                    "price": 75124
                }
            ]
        },
        {
            "id": 10,
            "name": "Funk Ltd",
            "logo": "http://lorempixel.com/output/animals-q-g-640-480-7.jpg",
            "tags": [
                {
                    "id": 3,
                    "name": "korean"
                },
                {
                    "id": 6,
                    "name": "halal"
                }
            ],
            "dishes": [
                {
                    "id": 15,
                    "name": "Rujak",
                    "price": 60235
                }
            ]
        },
        {
            "id": 11,
            "name": "Schuster, Crist and Witting",
            "logo": "https://lorempixel.com/640/480/food/?77266",
            "tags": [
                {
                    "id": 3,
                    "name": "korean"
                },
                {
                    "id": 6,
                    "name": "halal"
                }
            ],
            "dishes": [
                {
                    "id": 33,
                    "name": "Soto Kuning",
                    "price": 61217
                },
                {
                    "id": 45,
                    "name": "Batagor",
                    "price": 66459
                }
            ]
        },
        {
            "id": 12,
            "name": "Beer Inc",
            "logo": "https://lorempixel.com/640/480/food/?45656",
            "tags": [
                {
                    "id": 3,
                    "name": "korean"
                },
                {
                    "id": 6,
                    "name": "halal"
                }
            ],
            "dishes": [
                {
                    "id": 2,
                    "name": "Wajik",
                    "price": 61060
                },
                {
                    "id": 31,
                    "name": "Ayam Bakar",
                    "price": 32736
                }
            ]
        },
        {
            "id": 13,
            "name": "Leuschke-Brekke",
            "logo": "https://lorempixel.com/640/480/food/?87420",
            "tags": [
                {
                    "id": 3,
                    "name": "korean"
                },
                {
                    "id": 6,
                    "name": "halal"
                }
            ],
            "dishes": [
                {
                    "id": 16,
                    "name": "Otak-Otak",
                    "price": 45711
                },
                {
                    "id": 46,
                    "name": "Sayur Bening",
                    "price": 61022
                }
            ]
        },
        {
            "id": 14,
            "name": "Frami Group",
            "logo": "https://lorempixel.com/640/480/food/?70148",
            "tags": [
                {
                    "id": 3,
                    "name": "korean"
                },
                {
                    "id": 6,
                    "name": "halal"
                }
            ],
            "dishes": [
                {
                    "id": 18,
                    "name": "Sate Kambing",
                    "price": 60972
                }
            ]
        },
        {
            "id": 15,
            "name": "Ruecker LLC",
            "logo": "http://lorempixel.com/output/animals-q-g-640-480-7.jpg",
            "tags": [
                {
                    "id": 6,
                    "name": "halal"
                }
            ],
            "dishes": [
                {
                    "id": 35,
                    "name": "Sop Buntut",
                    "price": 31625
                }
            ]
        }
    ],
    "error": null,
    "links": {
        "first": "http://127.0.0.1:8000/api/v1/vendors?page=1",
        "last": "http://127.0.0.1:8000/api/v1/vendors?page=4",
        "prev": null,
        "next": "http://127.0.0.1:8000/api/v1/vendors?page=2"
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "last_page": 4,
        "path": "http://127.0.0.1:8000/api/v1/vendors",
        "per_page": 15,
        "to": 15,
        "total": 50
    }
}
```

##### III. Show Specific Vendor
---
**Request**
```
curl -X GET -H 'Accept: application/json' -i 'http://127.0.0.1:8000/api/v1/vendors/1'
```
**Response**
```
{
    "status": "success",
    "data": [
        {
            "id": 1,
            "name": "Spinka, Langworth and Kuphal",
            "logo": "https://lorempixel.com/640/480/food/?11507",
            "tags": [
                {
                    "id": 13,
                    "name": "affordable"
                },
                {
                    "id": 4,
                    "name": "indonesian"
                },
                {
                    "id": 3,
                    "name": "korean"
                },
                {
                    "id": 6,
                    "name": "halal"
                },
                {
                    "id": 8,
                    "name": "dinner"
                },
                {
                    "id": 9,
                    "name": "breakfast"
                },
                {
                    "id": 7,
                    "name": "lunch"
                },
                {
                    "id": 10,
                    "name": "fish"
                }
            ],
            "dishes": []
        }
    ],
    "error": null
}
```

##### IV. Show Vendor Dishes
---
**Request**
```
curl -X GET -H 'Accept: application/json' -i 'http://127.0.0.1:8000/api/v1/vendors/5' --data 'http://127.0.0.1:8000/api/v1/vendors/1/dishes'
```
**Response**
```
{
    "status": "success",
    "data": [
        {
            "id": 10,
            "name": "Pasta",
            "price": 63138
        }
    ],
    "error": null
}
```

##### V. Add New Vendor
---
**Request**
```
curl -X POST -H 'Accept: application/json' -H 'Content-Type: application/x-www-form-urlencoded' -i 'http://127.0.0.1:8000/api/v1/vendors/' --data 'name=TAS%20Restaurant&logo=https%3A%2F%2Florempixel.com%2F640%2F480%2Ffood%2Fternama%2F%3F32430'
```
**Response**
```
{
    "message":"New restaurant has been saved"
}
```

##### VI. Edit Vendor
---
**Request**
```
curl -X PUT -H 'Accept: application/json' -H 'Content-Type: application/x-www-form-urlencoded' -i 'http://127.0.0.1:8000/api/v1/vendors/51' --data 'name=TAS%20Restaurant%20Baru&logo=https%3A%2F%2Florempixel.com%2F640%2F480%2Ffood%2Fternama%2F%3F32430'
```
**Response**
```
{
    "message":"Restaurant has been updated"
}
```

##### VII. Delete Vendor
---
**Request**
```
curl -X DELETE -H 'Accept: application/json' -i 'http://127.0.0.1:8000/api/v1/vendors/51'
```
**Response**
```
{
    "message":"Restaurant has been deleted"
}
```
#### C.3 Order

| Method | Endpoint | Description |
| ------ | ------ | ------ |
| GET | /api/v1/orders{order_id} | Show specific order include **Order Items** |
| POST | /api/v1/orders/ | Make new order |

| GitHub | [plugins/github/README.md][PlGh] |
| Google Drive | [plugins/googledrive/README.md][PlGd] |
| OneDrive | [plugins/onedrive/README.md][PlOd] |
| Medium | [plugins/medium/README.md][PlMe] |
| Google Analytics | [plugins/googleanalytics/README.md][PlGa] |

