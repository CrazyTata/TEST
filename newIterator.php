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