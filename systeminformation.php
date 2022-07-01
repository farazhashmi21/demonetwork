<?php
// PHP Class: System Information.
  class systeminformation{
    public function __construct(){}
    public function info(){
      phpinfo();
    }
  }
  ?>
  <?php
  $sI = new systeminformation();
  $sI->info();
  ?>
  