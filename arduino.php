<?php
    // Update the path below to your autoload.php,
    // see https://getcomposer.org/doc/01-basic-usage.md
    require_once '/path/to/vendor/autoload.php';
    use Twilio\Rest\Client;

    $sid    = "AC9d9bffc71454e383c32c506e8ccfbab0";
    $token  = "59d59b2b88203c0dbc087f2d0e601cf0";
    $twilio = new Client($sid, $token);

    $message = $twilio->messages
      ->create("+6282239676122", // to
        array(
                  "body" => "Your Message"
        )
      );

print($message->sid);
