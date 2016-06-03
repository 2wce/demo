<?php 
$I = new FunctionalTester($scenario);
$I->am('Plus user');
$I->wantTo('follow other users');

//setup
$I->haveAnAccount( ['username' => 'kuda']);
$I->signIn();
//action

//expectations
