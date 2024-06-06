
# Custom Header Signature



Documentation for accessing and setting credentials for MppToken.

## Auth Credentials

| Name | Type | Description | Setter | Getter |
|  --- | --- | --- | --- | --- |
| Authorization | `string` | Digital Payments access token ([How to obtain Digital Payments access token?](page:guided-walkthrough/walkthrough1)) | `authorization` | `getAuthorization()` |



**Note:** Auth credentials can be set using `MppTokenCredentialsBuilder::init()` in `mppTokenCredentials` method in the client builder and accessed through `getMppTokenCredentials` method in the client instance.

## Usage Example

### Client Initialization

You must provide credentials in the client as shown in the following code snippet.

```php
$client = ShellEVClientBuilder::init()
    ->mppTokenCredentials(
        MppTokenCredentialsBuilder::init(
            'Authorization'
        )
    )
    ->build();
```


