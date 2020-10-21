<?php

declare(strict_types=1);
require __DIR__ . '/data.php';


//function to connect article preview and article
function getArticleById(array $posts, string $id): array
{
    foreach ($posts as $post) {
        if ($post['id'] === $id) {
            return $post;
        }
    }
}


//function to change date 

function daysSinceToday(string $date): int
{
    $today = new DateTime();
    $dateToCheck = new DateTime($date);
    $timeDiff = $today->diff($dateToCheck);
    return $timeDiff->d;
}
function postedDateToString(int $daysAgo): string
{
    switch ($daysAgo) {
        case 0:
            return 'Posted today';
        case 1:
            return 'Posted yesterday';
        default:
            return "Posted $daysAgo days ago";
    }
}

//function for likebutton