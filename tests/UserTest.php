<?php 

use PHPUnit\Framework\TestCase;
require_once 'User.php';

class UserTest extends TestCase{

  public function testID(){
    $user = new User('1','Pierre Juarez', 'pierre@prueba.com.pe','password');
    $this->assertEquals('1', $user->getID());
  }

  public function testGetName(){
    $user = new User('1','Pierre Juarez', 'pierre@prueba.com.pe','password');
    $this->assertEquals('Pierre Juarez', $user->getName());
  }

  public function testGetEmail(){
    $user = new User('1','Pierre Juarez', 'pierre@prueba.com.pe','password');
    $this->assertEquals('pierre@prueba.com.pe', $user->getEmail());
  }

  public function testGetPassword(){
    $user = new User('1','Pierre Juarez', 'pierre@prueba.com.pe','password');
    $this->assertEquals('password', $user->getPassword());
  }

  public function testSetName(){
    $user = new User('1','Pierre Juarez', 'pierre@prueba.com.pe','password');
    $user->setName('Juanito Alcachofa');
    $this->assertEquals('Juanito Alcachofa', $user->getName());
  }

  public function testSetEmail(){
    $user = new User('1','Pierre Juarez', 'pierre@prueba.com.pe','password');
    $user->setEmail('juanito@prueba.com.pe');
    $this->assertEquals('juanito@prueba.com.pe', $user->getEmail());
  }

  public function testSetPassword(){
    $user = new User('1','Pierre Juarez', 'pierre@prueba.com.pe','password');
    $user->setPassword('newpassword');
    $this->assertEquals('newpassword', $user->getPassword());
  }

}

?>