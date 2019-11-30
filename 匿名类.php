<?php
//PHP7 新特性---匿名类   现在支持通过new class 来实例化一个匿名类，这可以用来替代一些“用后即焚”的完整类定义。
interface Logger {
    public function log(string $msg);
}
 
class Application {
    private $logger;
 
    public function getLogger(): Logger {
         return $this->logger;
    }
 
    public function setLogger(Logger $logger) {
         $this->logger = $logger;
    }
}
 
$app = new Application;
$app->setLogger(new class implements Logger {
    public function log(string $msg) {
        echo $msg;
    }
});
 
var_dump($app->getLogger());
?>