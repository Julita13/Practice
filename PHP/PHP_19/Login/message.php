<?php
/*  b)
    1. Sukurti failą message.php arba įsikopijuokite iš pet projekto..
    2. Žinutės funkciją pavadinti/pervedinti į messageBuilder();
    3. Šalia sukurti dar 2 funkcijas: getMessage(): array ir message(): string
    4. getMessage() iš sesijos ištraukia žinutės masyvą ir jį grąžina, jei sesijos nėra ar žinutės nėra
    grąžina tuščią masyvą.
    5. message() kviečia getMessage() ir gautą atsakymą(masyvą) perduoda į messageBuilder(), panaudojant
    spread operatorių - messageBuilder(...$message). messageBuilder atsakymas yra returninamas - tai
    bus žinutės html, kuris bus išvedamas į dokumentą, inicijuojant funkciją message().
    6. inicijuoti funkciją message()  message_tester.php <body> pradžioje.
    Rezultatas - tik pakvietus message() iš sesijos paimami žinutės duomenys, sukuriamas žinutės html ir
    grąžinamas. Jei ne, grąžinamas tuščias string
 */
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