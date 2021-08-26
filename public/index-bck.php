<?php
require_once '../bootstrap.php';
?>
    <div class="container mt-4">
        <p>API Dash v1.0.0</p>
    </div>

<?php
use App\Classes\TestClass;
use App\Models\TestModel;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;
$obj = new TestClass();
$obj->test();
echo '<br>';
$objModel = new TestModel();
$objModel->test();
// create a log channel
$log = new Logger('api-logger');
$log->pushHandler(new StreamHandler('../logs/api.log', Logger::WARNING));
$log->warning('Foo');
