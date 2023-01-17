<?php
session_start();
include_once __DIR__ . "/helpers.php";

(function (): void{
    switch ($_GET['type'] ?? "") {
        case "success":
            $status = '1';
            $title = 'Success';
            $body = '';
            break;

        case "failed":
            $status = '0';
            $title = 'Failed';
            $body = '';
            break;

        default:
            $status = '2';
            $title = 'Info';
            $body = '';
            break;
    }

    $_SESSION['message'] = [
        'status' => $status,
        'title' => $title,
        'body' => $body,
    ];
    header('Location: message_tester.php');
})();
