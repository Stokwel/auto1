# Bananas Marketplace Pubic API

## Request

### HEADERS

| Key          | Value            |
|--------------|------------------|
| Content-Type | application/json |

## Response

### HEADERS

| Key          | Value            |
|--------------|------------------|
| Content-Type | application/json |

## Add a lot

**POST** `/v1/lots`

Request 

| Field                          | Type    | Description             |
|--------------------------------|---------|-------------------------|
| weight `required`              | Float   | Minimal value is `1000` |
| origin_country_code `required` | String  | Size range: `2`         |
| harvesting_date `required`     | String  | Format is `dd-mm-yyy`   |
| cultivar `required`            | Strong  | Size range: `100`       |

Response

Status code **201** 

Lot was successful added

| Field                          | Type    | Description             |
|--------------------------------|---------|-------------------------|
| id_lot `required`              | Integer |                         |

Status code **400** 

Client or Validation Error - Indicates that the request is not in the correct format. For example, `weight` is lesser than the minimum value.

| Field                    | Type   | Description             |
|--------------------------|--------|-------------------------|
| error_message `required` | String |                         |

## Update a lot

**PUT** `/v1/lots/{id_lot}`

Request

| Field                          | Type    | Description             |
|--------------------------------|---------|-------------------------|
| weight `optional`              | Float   | Minimal value is `1000` |
| origin_country_code `optional` | String  | Size range: `2`         |
| harvesting_date `optional`     | String  | Format is `dd-mm-yyy`   |
| cultivar `optional`            | Strong  | Size range: `100`       |

Response

Status code **204**

Lot was successful updated

Status code **400**

Client or Validation Error - Indicates that the request is not in the correct format. For example, `weight` is lesser than the minimum value.

| Field                    | Type   | Description             |
|--------------------------|--------|-------------------------|
| error_message `required` | String |                         |

Status code **404**

Lot is not exists.

| Field                    | Type   | Description             |
|--------------------------|--------|-------------------------|
| error_message `required` | String |                         |


## Delete a lot

**DEL** `/v1/lots/{id_lot}`

Response

Status code **204**

Lot was successful deleted

Status code **400**

Client or Validation Error - Indicates that the request is not in the correct format. For example, lot have not been sell yet.

| Field                    | Type   | Description             |
|--------------------------|--------|-------------------------|
| error_message `required` | String |                         |

Status code **404**

Lot is not exists

| Field                    | Type   | Description |
|--------------------------|--------|-------------|
| error_message `required` | String |             |

## Start an auction

**POST** `/v1/lots/{id_lot}/auctions`

Request

| Field                    | Type    | Description           |
|--------------------------|---------|-----------------------|
| id_lot `required`        | Integer |                       |
| start_date `required`    | String  | Format is `dd-mm-yyy` |
| initial_price `required` | Float   | Price for kg          |
| duration `required`      | Integer | Duration per days     |
| currency_code `required` | String  | Size range: `3`       |

Response

Status code **201**

Auction was successful started

| Field                 | Type    | Description             |
|-----------------------|---------|-------------------------|
| id_auction `required` | Integer |                         |

Status code **400**

Client or Validation Error - Indicates that the request is not in the correct format. For example, `start_date` is incorrect format.

| Field                    | Type   | Description             |
|--------------------------|--------|-------------------------|
| error_message `required` | String |                         |

Status code **404**

Lot is not exists

| Field                    | Type   | Description |
|--------------------------|--------|-------------|
| error_message `required` | String |             |

## Make a bid

**POST** `/v1/lots/{id_lot}/auctions/{id_auction}/bid`

Request

| Field               | Type    | Description       |
|---------------------|---------|-------------------|
| price `required`    | Float   | Price for kg      |

Response

Status code **201**

Bid was successful made

| Field             | Type    | Description             |
|-------------------|---------|-------------------------|
| id_bid `required` | Integer |                         |

Status code **400**

Client or Validation Error - Indicates that the request is not in the correct format.

| Field                    | Type   | Description             |
|--------------------------|--------|-------------------------|
| error_message `required` | String |                         |

Status code **404**

Lot or auction is not exists

| Field                    | Type   | Description |
|--------------------------|--------|-------------|
| error_message `required` | String |             |

## Get a list of bids

**GET** `/v1/lots/{id_lot}/auctions/{id_auction}/bid`

Response

Status code **200**

| Field           | Type  | Description  |
|-----------------|-------|--------------|
| bids `required` | array | List of bids |

Status code **404**

Lot or auction is not exists

| Field                    | Type   | Description |
|--------------------------|--------|-------------|
| error_message `required` | String |             |



