<?php
/**
 * Created by PhpStorm.
 * User: AS
 * Date: 2019/4/26
 * Time: 16:05
 */

class newIterator implements \Iterator
{
    public $object;
    public $key=0;
    public $valid=false;
    public function __construct($obj){
        $this->object = $obj;
    }

    /**
     * Return the current element
     * @link https://php.net/manual/en/iterator.current.php
     * @return mixed Can return any type.
     * @since 5.0.0
     */
    public function current(){
        return current($this->object);
    }

    /**
     * Move forward to next element
     * @link https://php.net/manual/en/iterator.next.php
     * @return void Any returned value is ignored.
     * @since 5.0.0
     */
    public function next(){
        //指针下移并且判断是否有数据
        $this->valid=(false !== next($this->object));
    }

    /**
     * Return the key of the current element
     * @link https://php.net/manual/en/iterator.key.php
     * @return mixed scalar on success, or null on failure.
     * @since 5.0.0
     */
    public function key(){
        return key($this->object);
    }

    /**
     * Checks if current position is valid
     * @link https://php.net/manual/en/iterator.valid.php
     * @return boolean The return value will be casted to boolean and then evaluated.
     * Returns true on success or false on failure.
     * @since 5.0.0
     */
    public function valid(){
        return $this->valid;
    }

    /**
     * Rewind the Iterator to the first element
     * @link https://php.net/manual/en/iterator.rewind.php
     * @return void Any returned value is ignored.
     * @since 5.0.0
     */
    public function rewind(){
        $this->valid=(false !==reset($this->object));
    }
}

class Number implements Iterator{  
    protected $i = 1;
    protected $key;
    protected $val;
    protected $count; 
    public function __construct(int $count){
        $this->count = $count;
        echo "第{$this->i}步:对象初始化"."\n";
        $this->i++;
    }
    public function rewind(){
        $this->key = 0;
        $this->val = 0;
        echo "第{$this->i}步:rewind()被调用"."\n";
        $this->i++;
    }
    public function next(){
        $this->key += 1;
        $this->val += 2;
        echo "第{$this->i}步:next()被调用"."\n";
        $this->i++;
    }
    public function current(){
        echo "第{$this->i}步:current()被调用"."\n";
        $this->i++;
        return $this->val;
    }
    public function key(){
        echo "第{$this->i}步:key()被调用"."\n";
        $this->i++;
        return $this->key;
    }
    public function valid(){
        echo "第{$this->i}步:valid()被调用"."\n";
        $this->i++;
        return $this->key < $this->count;
    }
}

$number = new Number(5);
echo "start...\n";
foreach ($number as $key => $value){
    echo "{$key} - {$value}\n";
}
echo "...end...\n";