<?php 

require_once 'User.php';

class UserRepository{

  private $users = [];

  public function save(User $user){
    $this->users[] = $user;
  }

  public function update(User $user){
    foreach ($this->users as $key => $existUser) {
      if ($existUser->getID() === $user->getID()) {
        $this->users[$key] = $user;
        break;
      }
    }
  }

  public function delete(User $user){
    foreach ($this->users as $key => $existUser) {
      if($existUser->getID() === $user->getID()){
        unset($this->users[$key]);
        break;
      }
    }
  }

  public function getUsers(){
    return $this->users;
  }

}

?>