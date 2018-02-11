<?php

use Illuminate\Foundation\Testing\DatabaseTransactions;

/**
 * Created by IntelliJ IDEA.
 * User: obelich
 * Date: 2/10/18
 * Time: 8:32 PM
 */

class FeatureTestCase extends TestCase
{
    use DatabaseTransactions; //Lo importamos aqui para no tener que hacerlo en todos los test

}