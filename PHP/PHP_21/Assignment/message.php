<?php 

function messageBuilder(string $title = '', string $body = '', int $status = 1):string
{
    if($status==1){
        $color = "green";
    }elseif($status == 0){
        $color = "red";
    }else{
        $color = "blue";
    }
    return "<div class='message $color'><h1>$title</h1><p>$body</p></div>";
}

function buildAllMessages(array $messages):string {
    $result = ""; 
    foreach($messages as $message) {
        // dump($message);
        $result.= messageBuilder(...$message); 
    }
    return "<div class='messages-wrapper'>$result</div>";
}

function clearMessages():void {
    if(isset($_SESSION['messages'])) {
        unset($_SESSION['messages']);
    }
}

function getMessages():array {
    return $_SESSION['messages'] ?? [];
}

function messages(): string {
    $messages = getMessages();
    clearMessages();
    // dd($message);
    return buildAllMessages($messages); // spread operatorius
    // return messageBuilder($message['title'], $message['body'], $message['status']); ALTERNATYVA

}

function setErrorMessages(array $messages):void{
    // dd($messages);
    foreach ($messages as $message) {
        $_SESSION['messages'][] = [
            'status' => 0,
            'title' => 'Operacija nepavyko!',
            'body' => $message,
        ];
    }
}

function setSuccessMessage():void {
    $_SESSION['messages'][] = [
        'status' => 1,
        'title' => 'Operacija sėkminga!',
        'body' => '',
    ];
}


?>