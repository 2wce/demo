<?php

class SignUpCest
{
  /**
     * @var Helper\SignUp
     */
    protected $signUp;

    /**
     * @var Helper\NavBarHelper
     */
    protected $navBar;

    protected function _inject(\Helper\SignUp $signUp, \Helper\NavBar $navBar)
    {
        $this->signUp = $signUp;
        $this->navBar = $navBar;
    }

    public function signUp(\AcceptanceTester $I)
    {
        $I->wantTo('sign up');

        $this->navBar->click('Sign up');
        $this->signUp->register([
            'username'            => 'Joe',
            'cat_id'             => '2',
            'email'                 => 'joe@jones.com',
            'password'              => '1234'
        ]);
    }
}
