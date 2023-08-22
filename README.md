------------------------------------------------OpenSearch and MySQL Package------------------------------------------------

This is a PHP package that provides convenient controllers and services for working with OpenSearch and MySQL databases in Laravel applications.

------------------------------------------------Installation------------------------------------------------

You can install this package using Composer:

    composer require savvy/opensearch-package

------------------------------------------------Usage------------------------------------------------

------------------------------------------------OpenSearch Controller and Service------------------------------------------------

The OpenSearch namespace provides controllers and services for handling OpenSearch operations.

OpenSearch Controller

    use OpenSearch\Controllers\OpenSearchController;
    class MyController extends OpenSearchController {
        // Your methods and logic here
    }

OpenSearch Service

    use OpenSearch\Services\OpenSearchService;
    class MyService extends OpenSearchService {
        // Your methods and logic here
    }

------------------------------------------------MySQL Controller and Service------------------------------------------------

The MySql namespace provides controllers and services for working with MySQL databases.

MySQL Controller

    use MySql\Controllers\MySqlController;
    class MyController extends MySqlController {
        // Your methods and logic here
    }

MySQL Service

    use MySql\Services\MySqlService;
    class MyService extends MySqlService {
        // Your methods and logic here
    }

------------------------------------------------License------------------------------------------------

This package is open-source and released under the MIT License.

------------------------------------------------Contributions------------------------------------------------

Contributions are welcome! If you find a bug or want to contribute, please create an issue or submit a pull request.

------------------------------------------------Contact------------------------------------------------

For questions or support, you can contact muhammad.mohtashim@savyour.com.