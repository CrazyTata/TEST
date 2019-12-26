<?php
interface Board {
    public function type();
}

class CommonBoard implements Board {
    public function type(){
        echo '普通键盘';
    }
}

class MechanicalKeyboard implements Board {
    public function type(){
        echo '机械键盘';
    }
}

class Goodsboard implements Board {
    public function type(){
        echo '好键盘';
    }
}

class Computer {
    protected $keyboard;
    
    public function __construct (Board $keyboard) {
        $this->keyboard = $keyboard;
    }

    public function show(){
    	$this->keyboard->type();
    }
}


class Container
{
	protected $binds;

	protected $instances;

	public function bind($abstract, $concrete){
		if($concrete instanceof Closure){
			$this->binds[$abstract] = $concrete;
		}else{
			$this->instances[$abstract] = $concrete;
		}
	}

	public function make($abstract, $parameters=[]){
		if(isset($this->instances[$abstract])){
			return $this->instances[$abstract];
		}

		array_unshift($parameters, $this);

		return call_user_func_array($this->binds[$abstract], $parameters);
	}
}

$container = new Container();

$container->bind('Board', function($container){
	// return new CommonBoard();  
	return new Goodsboard();
});


$container->bind('Computer', function($container,$module){
	return new Computer($container->make($module));
});

$computer = $container->make('Computer', ['Board']);

$computer->show();