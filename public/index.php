<?php
declare(strict_types=1);

require_once('../vendor/autoload.php');

$tasks = [
    [
        'title' => 'Skriv et program som printer 2-tabellen.',
        'solution' => function () : string {
            return (string) new \RucTasks\MultiplicationTable(2);
        },
    ],
    [
        'title' => 'Print alle ulige tal mellem 0 og 100.',
        'solution' => function () : string {
            return (string) \RucTasks\EvenOdder::odd(0, 100);
        },
    ],
    [
        'title' => 'Hvis du har to integers x og y; Hvor x er større end y; Summer da alle tal mellem x og y.',
        'solution' => function () : string {
            return (string) new \RucTasks\Sum(100, 20);
        },
    ],
    [
        'title' => 'Skriv noget som tæller ned fra 500 til 50, i formindskelser af 11.',
        'solution' => function () : string {
            return (string) new \RucTasks\Countdown(500, 50, 11);
        },
    ],
    [
        'title' => 'Lav et sæt spillekort. Bland dækket og træk to tilfældige kort. Vis de trukkede kort.',
        'solution' => function () : string {
            $deck = new \RucTasks\Deck();
            $deck->shuffle();
            $cards = $deck->draw(2);

            return implode(' | ', $cards);
        },
    ],
    [
        'title' => 'Find alle ulige tal mellem de to integers x og y. Hvor y er større end x.',
        'solution' => function () : string {
            return (string) \RucTasks\EvenOdder::odd(0, 100);
        },
    ],
    [
        'title' => 'Skriv et program som printer 3-tabellen.',
        'solution' => function () : string {
            return (string) new \RucTasks\MultiplicationTable(3);
        },
    ],
    [
        'title' => 'Hvad kan følgende capture groups indeholde? \'/(subject)/lessons/publish/(\d+)/([e|E|f|F]\d{4})\'',
        'solution' => function () : string {
            return 'Eksempel: /subject/lessons/publish/1234/e4321<br> ' .
                '1: Vil altid være "subject".<br>' .
                '2: Et tal på 1 eller flere tegn.<br>' .
                '3: Et tal på 4 tegn, der er prefixed med e, E, f eller F.';
        },
    ],
];

foreach ($tasks as $task) {
    echo "<br><b>{$task['title']}</b><br>";
    echo $task['solution']();
    echo '<br>';
}

