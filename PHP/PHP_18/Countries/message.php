<?php
include_once __DIR__ . "/helpers.php";

function messageBuilder(string $title = '', string $body = '', int $status = 1 ): string {
        if($status == 1){
            $color = "green";
        } elseif ($status == 0){
            $color = "red";
        } else {
            $color = "blue"; 
        }
        // $decodedBody = json_decode($body, true); // jei body ne json formatas (masyvas), json_decode grazina NULL
        // if($decodedBody){
        //     $body = implode("\n", $decodedBody); //paverciam i string
        // }
        return
            "<div class='message {$color}'>
                    <h1>$title</h1>
                    <p>$body</p>
                </div>";
};

function getMessage(): array{
    return $_SESSION['message'] ?? [];
};

function message(): string {
    $message = getMessage();
    return messageBuilder(...$message);
    //return messageBuilder($message['title'], $message['body'], $message['status']); // tas pats, kas ir ankstesnėje eilutėje su spread operatoriumi
};
