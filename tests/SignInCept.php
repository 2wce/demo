<?php 
$I = new FunctionalTester($scenario);
$I->am('a guest');
$I->wantTo('sign in to my account');
$I->amOnPage('/');
$I->click('Sign in');
$I->seeCurrentUrlEquals('/signin');

$I->fillField('Email','kuda@test.moc');
$I->fillField('Password','kuda.123');
$I->click('SIGN IN');

$I->seeCurrentUrlEquals('/');
$I->see('Welcome to Plus');

 