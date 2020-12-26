<?php

class A {

}

class B extends A {
	public function __construct($a, $b, $c, $d) {
		$this->a = $a;
		$this->b = $b;
		$this->c = $c;
		$this->d = $d;
	}
	protected $a;
	protected $b;
	protected $c;
	protected $d;
}

$a1 = new A();
$a2 = new A();
$a3 = new A();
$a4 = new A();
$b5 = new B($a1, $a2, $a3, $a4);

var_dump($b5);

$b5 = new B( new A(), new A(), new A(), new A());

echo "<br>";

var_dump($b5);

?>