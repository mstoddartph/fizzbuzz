<?php

// Instructions
// This is the very classical Fizz Buzz.

// Subject
// Display numbers between 1 and N by following the rules:

// if number can be divided by 3: display Fizz ;
// if number can be divided by 5: display Buzz ;
// if number can be divided by 3 AND 5 : display FizzBuzz ;
// else: display the number.
// Guidelines
// Write it in your favorite language (one of: javascript, php)
// Push your code to a Github repository or any sandbox environment like codesandbox
// Get ready to justify some of your choices for the interview
// Evaluation
// Quality of the code
// Scalability of the algorithm
// Usage of good practices and modern programming language features

$N = 50;
for ($i = 1; $i <= $N ; $i++) {
    $div3 = $i % 3;
    $div5 = $i % 5;
    $both = (($div3 === 0 ) && ($div5 === 0));
    if ($both) {
        print 'FizzBuzz' . PHP_EOL;
    }
    elseif ($div3 == 0) {
        print 'Fizz' . PHP_EOL;
    }
    elseif ($div5 == 0) {
    print 'Buzz' . PHP_EOL;
    }
    else {
        print $i . PHP_EOL;
    }
} 