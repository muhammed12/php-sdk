require './facebook.php';

$facebook = new Facebook(array(
  'appId'  => '176325579097304',
  'secret' => '8a98b184238abc1acf02c44c24e48985',
));

// Get User ID
$user = $facebook->getUser();