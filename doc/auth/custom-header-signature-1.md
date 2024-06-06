
# Custom Header Signature



Documentation for accessing and setting credentials for oAuthTokenPost.

## Auth Credentials

| Name | Type | Description | Setter | Getter |
|  --- | --- | --- | --- | --- |
| X-Apigee-Authorization | `string` | APIGEE access token ([How to obtain APIGEE access token?](page:guided-walkthrough/walkthrough1)) | `xApigeeAuthorization` | `getXApigeeAuthorization()` |



**Note:** Auth credentials can be set using `OAuthTokenPostCredentialsBuilder::init()` in `oAuthTokenPostCredentials` method in the client builder and accessed through `getOAuthTokenPostCredentials` method in the client instance.

## Usage Example

### Client Initialization

You must provide credentials in the client as shown in the following code snippet.

```php
$client = ShellEVClientBuilder::init()
    ->oAuthTokenPostCredentials(
        OAuthTokenPostCredentialsBuilder::init(
            'X-Apigee-Authorization'
        )
    )
    ->build();
```


