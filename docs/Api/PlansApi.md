# Femsa\PlansApi

All URIs are relative to https://api.femsa.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createPlan()**](PlansApi.md#createPlan) | **POST** /plans | Create Plan |
| [**deletePlan()**](PlansApi.md#deletePlan) | **DELETE** /plans/{id} | Delete Plan |
| [**getPlan()**](PlansApi.md#getPlan) | **GET** /plans/{id} | Get Plan |
| [**getPlans()**](PlansApi.md#getPlans) | **GET** /plans | Get A List of Plans |
| [**updatePlan()**](PlansApi.md#updatePlan) | **PUT** /plans/{id} | Update Plan |


## `createPlan()`

```php
createPlan($plan_request, $accept_language, $x_child_company_id): \Femsa\Model\PlanResponse
```

Create Plan

Create a new plan for an existing order

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Femsa\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Femsa\Api\PlansApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$plan_request = new \Femsa\Model\PlanRequest(); // \Femsa\Model\PlanRequest | requested field for plan
$accept_language = es; // string | Use for knowing which language to use
$x_child_company_id = 6441b6376b60c3a638da80af; // string | In the case of a holding company, the company id of the child company to which will process the request.

try {
    $result = $apiInstance->createPlan($plan_request, $accept_language, $x_child_company_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlansApi->createPlan: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **plan_request** | [**\Femsa\Model\PlanRequest**](../Model/PlanRequest.md)| requested field for plan | |
| **accept_language** | **string**| Use for knowing which language to use | [optional] [default to &#39;es&#39;] |
| **x_child_company_id** | **string**| In the case of a holding company, the company id of the child company to which will process the request. | [optional] |

### Return type

[**\Femsa\Model\PlanResponse**](../Model/PlanResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/vnd.femsa-v2.1.0+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deletePlan()`

```php
deletePlan($id, $accept_language): \Femsa\Model\PlanResponse
```

Delete Plan

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Femsa\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Femsa\Api\PlansApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 6307a60c41de27127515a575; // string | Identifier of the resource
$accept_language = es; // string | Use for knowing which language to use

try {
    $result = $apiInstance->deletePlan($id, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlansApi->deletePlan: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Identifier of the resource | |
| **accept_language** | **string**| Use for knowing which language to use | [optional] [default to &#39;es&#39;] |

### Return type

[**\Femsa\Model\PlanResponse**](../Model/PlanResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.femsa-v2.1.0+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPlan()`

```php
getPlan($id, $accept_language, $x_child_company_id): \Femsa\Model\PlanResponse
```

Get Plan

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Femsa\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Femsa\Api\PlansApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 6307a60c41de27127515a575; // string | Identifier of the resource
$accept_language = es; // string | Use for knowing which language to use
$x_child_company_id = 6441b6376b60c3a638da80af; // string | In the case of a holding company, the company id of the child company to which will process the request.

try {
    $result = $apiInstance->getPlan($id, $accept_language, $x_child_company_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlansApi->getPlan: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Identifier of the resource | |
| **accept_language** | **string**| Use for knowing which language to use | [optional] [default to &#39;es&#39;] |
| **x_child_company_id** | **string**| In the case of a holding company, the company id of the child company to which will process the request. | [optional] |

### Return type

[**\Femsa\Model\PlanResponse**](../Model/PlanResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.femsa-v2.1.0+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPlans()`

```php
getPlans($accept_language, $x_child_company_id, $limit, $search, $next, $previous): \Femsa\Model\GetPlansResponse
```

Get A List of Plans

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Femsa\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Femsa\Api\PlansApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept_language = es; // string | Use for knowing which language to use
$x_child_company_id = 6441b6376b60c3a638da80af; // string | In the case of a holding company, the company id of the child company to which will process the request.
$limit = 20; // int | The numbers of items to return, the maximum value is 250
$search = 'search_example'; // string | General order search, e.g. by mail, reference etc.
$next = 'next_example'; // string | next page
$previous = 'previous_example'; // string | previous page

try {
    $result = $apiInstance->getPlans($accept_language, $x_child_company_id, $limit, $search, $next, $previous);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlansApi->getPlans: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **accept_language** | **string**| Use for knowing which language to use | [optional] [default to &#39;es&#39;] |
| **x_child_company_id** | **string**| In the case of a holding company, the company id of the child company to which will process the request. | [optional] |
| **limit** | **int**| The numbers of items to return, the maximum value is 250 | [optional] [default to 20] |
| **search** | **string**| General order search, e.g. by mail, reference etc. | [optional] |
| **next** | **string**| next page | [optional] |
| **previous** | **string**| previous page | [optional] |

### Return type

[**\Femsa\Model\GetPlansResponse**](../Model/GetPlansResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.femsa-v2.1.0+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updatePlan()`

```php
updatePlan($id, $plan_update_request, $accept_language, $x_child_company_id): \Femsa\Model\PlanResponse
```

Update Plan

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Femsa\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Femsa\Api\PlansApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 6307a60c41de27127515a575; // string | Identifier of the resource
$plan_update_request = new \Femsa\Model\PlanUpdateRequest(); // \Femsa\Model\PlanUpdateRequest | requested field for plan
$accept_language = es; // string | Use for knowing which language to use
$x_child_company_id = 6441b6376b60c3a638da80af; // string | In the case of a holding company, the company id of the child company to which will process the request.

try {
    $result = $apiInstance->updatePlan($id, $plan_update_request, $accept_language, $x_child_company_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlansApi->updatePlan: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Identifier of the resource | |
| **plan_update_request** | [**\Femsa\Model\PlanUpdateRequest**](../Model/PlanUpdateRequest.md)| requested field for plan | |
| **accept_language** | **string**| Use for knowing which language to use | [optional] [default to &#39;es&#39;] |
| **x_child_company_id** | **string**| In the case of a holding company, the company id of the child company to which will process the request. | [optional] |

### Return type

[**\Femsa\Model\PlanResponse**](../Model/PlanResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/vnd.femsa-v2.1.0+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
