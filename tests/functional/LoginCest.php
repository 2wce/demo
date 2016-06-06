<?php


class LoginCest
{
    public function _before(FunctionalTester $I)
    {
    }

    public function _after(FunctionalTester $I)
    {
    }

    // tests
    public function usernameLogin(FunctionalTester $I)
    {
      //$I = new FunctionalTester($scenario);
      $I->wantTo('login user');
      $I->amOnPage('/');
      $I->click('Sign in', '.nav');
      $I->fillField('Or username', 'Jacob');
      $I->fillField('Password', 'secret');
      $I->click('Sign in', '.btn');
      //$I->see('Hello, Miles', 'h1');
    }

    public function emailLogin(FunctionalTester $I)
    {
      //$I = new FunctionalTester($scenario);
      $I->wantTo('login user');
      $I->amOnPage('/');
      $I->click('Sign in', '.nav');
      $I->fillField('Email', 'Jacob');
      $I->fillField('Password', 'secret');
      $I->click('Sign in', '.btn');
      //$I->see('Hello, Miles', 'h1');
    }
}
