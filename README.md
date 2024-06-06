
# Getting Started with Shell EV

## Introduction

The APIs detailed within this document will enable Shell's Fleet Solutions Customers to digitalize Shell Card/s and use them to pay to refuel their vehicles at Shell Stations.

## Install the Package

Run the following command to install the package and automatically add the dependency to your composer.json file:

```php
composer require "shell/digital-payments-sdk:1.0.0"
```

Or add it to the composer.json file manually as given below:

```php
"require": {
    "shell/digital-payments-sdk": "1.0.0"
}
```

You can also view the package at:
https://packagist.org/packages/shell/digital-payments-sdk#1.0.0

## Test the SDK

Unit tests in this SDK can be run using PHPUnit.

1. First install the dependencies using composer including the `require-dev` dependencies.
2. Run `vendor\bin\phpunit --verbose` from commandline to execute tests. If you have installed PHPUnit globally, run tests using `phpunit --verbose` instead.

You can change the PHPUnit test configuration in the `phpunit.xml` file.

## Initialize the API Client

**_Note:_** Documentation for the client can be found [here.](https://www.github.com/sdks-io/digital-payments-php-sdk/tree/1.0.0/doc/client.md)

The following parameters are configurable for the API Client:

| Parameter | Type | Description |
|  --- | --- | --- |
| `timeout` | `int` | Timeout for API calls in seconds.<br>*Default*: `0` |
| `enableRetries` | `bool` | Whether to enable retries and backoff feature.<br>*Default*: `false` |
| `numberOfRetries` | `int` | The number of retries to make.<br>*Default*: `0` |
| `retryInterval` | `float` | The retry time interval between the endpoint calls.<br>*Default*: `1` |
| `backOffFactor` | `float` | Exponential backoff factor to increase interval between retries.<br>*Default*: `2` |
| `maximumRetryWaitTime` | `int` | The maximum wait time in seconds for overall retrying requests.<br>*Default*: `0` |
| `retryOnTimeout` | `bool` | Whether to retry on request timeout.<br>*Default*: `true` |
| `httpStatusCodesToRetry` | `array` | Http status codes to retry against.<br>*Default*: `408, 413, 429, 500, 502, 503, 504, 521, 522, 524` |
| `httpMethodsToRetry` | `array` | Http methods to retry against.<br>*Default*: `'GET', 'PUT'` |
| `mppTokenCredentials` | [`MppTokenCredentials`](https://www.github.com/sdks-io/digital-payments-php-sdk/tree/1.0.0/doc/$a/https://www.github.com/sdks-io/digital-payments-php-sdk/tree/1.0.0/custom-header-signature.md) | The Credentials Setter for Custom Header Signature |
| `oAuthTokenPostCredentials` | [`OAuthTokenPostCredentials`](https://www.github.com/sdks-io/digital-payments-php-sdk/tree/1.0.0/doc/$a/https://www.github.com/sdks-io/digital-payments-php-sdk/tree/1.0.0/custom-header-signature-1.md) | The Credentials Setter for Custom Header Signature |

The API client can be initialized as follows:

```php
$client = ShellEVClientBuilder::init()
    ->mppTokenCredentials(
        MppTokenCredentialsBuilder::init(
            'Authorization'
        )
    )
    ->oAuthTokenPostCredentials(
        OAuthTokenPostCredentialsBuilder::init(
            'X-Apigee-Authorization'
        )
    )
    ->build();
```

## Authorization

This API uses the following authentication schemes.

* [`MppToken (Custom Header Signature)`](https://www.github.com/sdks-io/digital-payments-php-sdk/tree/1.0.0/doc/$a/https://www.github.com/sdks-io/digital-payments-php-sdk/tree/1.0.0/custom-header-signature.md)
* [`oAuthTokenPost (Custom Header Signature)`](https://www.github.com/sdks-io/digital-payments-php-sdk/tree/1.0.0/doc/$a/https://www.github.com/sdks-io/digital-payments-php-sdk/tree/1.0.0/custom-header-signature-1.md)

## List of APIs

* [Shell API Platform Security Authentication](https://www.github.com/sdks-io/digital-payments-php-sdk/tree/1.0.0/doc/controllers/shell-api-platform-security-authentication.md)
* [Digital Payment Enablement](https://www.github.com/sdks-io/digital-payments-php-sdk/tree/1.0.0/doc/controllers/digital-payment-enablement.md)
* [Station Locator](https://www.github.com/sdks-io/digital-payments-php-sdk/tree/1.0.0/doc/controllers/station-locator.md)
* [Partner Notification](https://www.github.com/sdks-io/digital-payments-php-sdk/tree/1.0.0/doc/controllers/partner-notification.md)
* [Fueling](https://www.github.com/sdks-io/digital-payments-php-sdk/tree/1.0.0/doc/controllers/fueling.md)

## Classes Documentation

* [ApiException](https://www.github.com/sdks-io/digital-payments-php-sdk/tree/1.0.0/doc/api-exception.md)
* [HttpRequest](https://www.github.com/sdks-io/digital-payments-php-sdk/tree/1.0.0/doc/http-request.md)
* [HttpResponse](https://www.github.com/sdks-io/digital-payments-php-sdk/tree/1.0.0/doc/http-response.md)

