
# Client Class Documentation

The following parameters are configurable for the API Client:

| Parameter | Type | Description |
|  --- | --- | --- |
| `environment` | `Environment` | The API environment. <br> **Default: `Environment.TEST`** |
| `timeout` | `int` | Timeout for API calls in seconds.<br>*Default*: `0` |
| `enableRetries` | `bool` | Whether to enable retries and backoff feature.<br>*Default*: `false` |
| `numberOfRetries` | `int` | The number of retries to make.<br>*Default*: `0` |
| `retryInterval` | `float` | The retry time interval between the endpoint calls.<br>*Default*: `1` |
| `backOffFactor` | `float` | Exponential backoff factor to increase interval between retries.<br>*Default*: `2` |
| `maximumRetryWaitTime` | `int` | The maximum wait time in seconds for overall retrying requests.<br>*Default*: `0` |
| `retryOnTimeout` | `bool` | Whether to retry on request timeout.<br>*Default*: `true` |
| `httpStatusCodesToRetry` | `array` | Http status codes to retry against.<br>*Default*: `408, 413, 429, 500, 502, 503, 504, 521, 522, 524` |
| `httpMethodsToRetry` | `array` | Http methods to retry against.<br>*Default*: `'GET', 'PUT'` |
| `mppTokenCredentials` | [`MppTokenCredentials`](auth/custom-header-signature.md) | The Credentials Setter for Custom Header Signature |
| `oAuthTokenPostCredentials` | [`OAuthTokenPostCredentials`](auth/custom-header-signature-1.md) | The Credentials Setter for Custom Header Signature |

The API client can be initialized as follows:

```php
$client = ShellSmartPayAPIClientBuilder::init()
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
    ->environment(Environment::TEST)
    ->build();
```

## Shell SmartPay API Client

The gateway for the SDK. This class acts as a factory for the Controllers and also holds the configuration of the SDK.

## Controllers

| Name | Description |
|  --- | --- |
| getShellAPIPlatformSecurityAuthenticationController() | Gets ShellAPIPlatformSecurityAuthenticationController |
| getDigitalPaymentEnablementController() | Gets DigitalPaymentEnablementController |
| getStationLocatorController() | Gets StationLocatorController |
| getFuelingController() | Gets FuelingController |
| getPartnerNotificationController() | Gets PartnerNotificationController |

