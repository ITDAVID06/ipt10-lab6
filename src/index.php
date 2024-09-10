<?php

require "../vendor/autoload.php";

use Monolog\Level;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

// create a log channel
$log = new Logger('ipt10');
$log->pushHandler(new StreamHandler('ipt10.log'));

// add records to the log
$log->warning('[YOUR COMPLETE NAME]');
$log->error('[YOUR EMAIL ADDRESS]');
$log->info('profile', [
    'student_number' => '[YOUR STUDENT NUMBER]',
    'college' => '[COLLEGE NAME]',
    'program' => '[PROGRAM NAME]',
    'university' => '[UNIVERSITY NAME]'
]);

class TestClass
{
    private $logger;
    
    public function __construct($logger_name)
    {
        $this->logger = new Logger($logger_name);
        // Log that the class has been created
        // Change to logger_name
        $this->logger->info(__FILE__ . " Greetings to {$logger_name}");
    }

    public function greet($name)
    {
        // provide a greeting message with the name of the invoker
        $this->logger->info(__METHOD__ . " Greetings to {$name}");
    }

    public function getAverage($data)
    {
        $average = array_sum($data) / count($data);
        $this->logger->info(__CLASS__ . " get the average");
        // no return part here need to calculate
        return $average;
    }

    public function largest($data)
    {
        $largest = max($data);
        $this->logger->info(__CLASS__ . " Get the largest number");
        return $largest;
    }

    public function smallest($data)
    {
        $smallest = min($data);
        $this->logger->info(__CLASS__ . " Get the smallest number");
        return $smallest;
    }
}

$name = "Don Henessy S. David";
// added new keyword
$obj = new TestClass('test_logger');
// fix the parameter for the greet because there is no my_name
echo $obj->greet($name);
$data = [100, 345, 4563, 65, 234, 6734, -99];

// Call the getAverage, largest, and smallest methods and store the results in variables
$average = $obj->getAverage($data);
echo "Average: " . $average ;
 
$largest = $obj->largest($data);
echo "Largest: " . $largest;

$smallest = $obj->smallest($data);
echo "Smallest " . $smallest;


$log->info('data', ['data' => $data]);
$log->info('Average', ['average' => $average]);
$log->info('Largest', ['largest' => $largest]);
$log->info('Smallest', ['smallest' => $smallest]);
$log->info('object', ['object' => $obj]);
