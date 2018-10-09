<?php
/**
 * Created by PhpStorm.
 * User: iprokopenko
 * Date: 6/10/18
 * Time: 10:26 AM
 */

class Australia
{
    const CONSTANT = 'Australia';
}

class Norway
{
    const CONSTANT = 'Norway';
}

class CountryFactory
{

    /*
     * @throws \Exception
     */
    public static function createBill($country = null)
    {
        if ($country == null) {
            throw new Exception('Please provide country code');
        }
        if ($country == 'Australia') {

            return new Australia();
        }
        if ($country == 'Norway') {

            return new Norway();
        }
    }
}

//$myBills = CountryFactory::createBill();

echo CountryFactory::createBill('Norway')::CONSTANT;

