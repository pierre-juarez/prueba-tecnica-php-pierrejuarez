<?php 

use PHPUnit\Framework\TestCase;
require_once 'UserRepository.php';

class UserRepositoryTest extends TestCase{

  public function testSave(){
    $user = new User('1','Pierre Juarez', 'pierre@prueba.com.pe','password');
    $repository = new UserRepository();

    $repository->save($user);

    $this->assertCount(1, $repository->getUsers());
    $this->assertEquals('Pierre Juarez', $repository->getUsers()[0]->getName());
  }

  public function testUpdate(){
    $user = new User('1','Pierre Juarez', 'pierre@prueba.com.pe','password');
    $repository = new UserRepository();

    $repository->save($user);
    
    $updateUser = new User('1','Juanito Alcachofa', 'juanito@prueba.com','newpassword');
    $repository->update($updateUser);

    $this->assertCount(1, $repository->getUsers());
    $this->assertEquals('Juanito Alcachofa', $repository->getUsers()[0]->getName());
    $this->assertEquals('juanito@prueba.com', $repository->getUsers()[0]->getEmail());
    $this->assertEquals('newpassword', $repository->getUsers()[0]->getPassword());
  }

  public function testDelete(){
    $user = new User('1','Pierre Juarez', 'pierre@prueba.com.pe','password');
    $repository = new UserRepository();

    $repository->save($user);
    $repository->delete($user);
    $this->assertCount(0, $repository->getUsers());
  }

}

?>