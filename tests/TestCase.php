<?php

use App\User;

/**
 * @property  defaultUser
 */
abstract class TestCase extends Illuminate\Foundation\Testing\TestCase
{
    /**
     * The base URL to use while testing the application.
     *
     * @var string
     */
    protected $baseUrl = 'http://localhost';
    protected $defaultUser; //Si se crea un metodo nuevo hay que declararlo con protected

    /**
     * Creates the application.
     *
     * @return \Illuminate\Foundation\Application
     */
    public function createApplication()
    {
        $app = require __DIR__.'/../bootstrap/app.php';

        $app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

        return $app;
    }

    public function defaultUser() {

        if ($this->defaultUser) {
            return $this->defaultUser;
        }
        return $this->defaultUser = factory(User::class)->create([
            'name'=> 'Miguel Amezcua',
            'email'=>'admin@jelp.io'
        ]);
    }
}
