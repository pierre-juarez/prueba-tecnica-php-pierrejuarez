<?php 

use PHPUnit\Framework\TestCase;
require_once 'User.php';
require_once 'UserRepository.php';

class UserRepositoryIntegrationTest extends TestCase{

  public function testUserRepositoryIntegration(){

    $repository = new UserRepository();
    $user1 = new User('001-UPX','Pierre Juarez','pierre@prueba.com.pe','12345678');
    $user2 = new User('002-UPX','Juanito Alcachofa','juanito@prueba.com.pe','87654321');

    // Save user
    $repository->save($user1);
    $repository->save($user2);
    $this->assertCount(2,$repository->getUsers());
    $this->assertEquals('Pierre Juarez', $repository->getUsers()[0]->getName());
    $this->assertEquals('Juanito Alcachofa', $repository->getUsers()[1]->getName());

    // Update user
    $updateUser = new User('002-UPX','Mariano Perez','mariano@prueba.com.pe','jfuaka00p');
    $repository->update($updateUser);
    $this->assertCount(2,$repository->getUsers());
    $this->assertEquals('Mariano Perez', $repository->getUsers()[1]->getName());
    $this->assertEquals('mariano@prueba.com.pe', $repository->getUsers()[1]->getEmail());
    $this->assertEquals('jfuaka00p', $repository->getUsers()[1]->getPassword());

    // Delete user
    $repository->delete($user2);
    $this->assertCount(1, $repository->getUsers());
  }

}

?>