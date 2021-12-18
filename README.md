# PHP 8 Exercise!

# Dependencies
Following packages required to run codes:

    docker
    docker-compose
    make
# BUGS
Current stable yii framework is not compatible  with php:8.1

    [17-Dec-2021 08:49:16 UTC] PHP Fatal error:  
    During inheritance of IteratorAggregate: 
    Uncaught yii\base\ErrorException: 
    Return type of yii\web\HeaderCollection::getIterator() should either be compatible with IteratorAggregate::getIterator(): Traversable, or the #[\ReturnTypeWillChange] attribute should be used to temporarily suppress the notice in /app/basic/vendor/yiisoft/yii2/web/HeaderCollection.php:37
## Resolution:
[Deprecation notices with PHP 8.1  #10008](https://github.com/composer/composer/issues/10008)

# Howto
Pull containers and setup php:8, mariadb and nginx:

    make up
Browse web app: `http://127.0.0.1/`