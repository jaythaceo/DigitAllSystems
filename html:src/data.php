<?php

/*Database.php
* By: Jason Brooks
* jaythaceo@gmail.com
*/

$mysql = new mysql_connect('students.txt');

// Cycle thru thru the array
foreach ($users as $users) {

	// Parse the line retrieving the name and email address
	list($name, $email) = explode('', $users);

	//Remove newline from email
	$email trim($email);

	//Output the formatted name and email
	echo "<a href=\"mailto:$email\">$name</a> <br /> ";

}

// Open subscriber data file
$fh = fopen('', 'r'); // add file name 

// Break each file into three parts
while (list($name,$email,$phone) = fgetcsv($fh, 1024, ',')) {
	//output data into html file
	printf("<p>%s (%s) Tel. %s</p>", $name, $email, $phone);
}

	// Error message 
class MyException extends Exception {

    function __construct($language,$errorcode) {
        $this->language = $language;
        $this->errorcode = $errorcode;
} // MessageMap function
    function getMessageMap() {
        $errors = file("errors/".$this->language.".txt");
        foreach($errors as $error) {
             list($key,$value) = explode(",",$error,2);
             $errorArray[$key] = $value;
        }
        return $errorArray[$this->errorcode];
    }
}	// end class

try {
    throw new MyException("english",4);
}
catch (MyException $e) {
    echo $e->getMessageMap();
}

/* The InvalidEmailException class notifies the site
       administrator if that an e-mail is deemed invalid. */
    class InvalidEmailException extends Exception {
        function __construct($message, $email) {
           $this->message = $message;
           $this->notifyAdmin($email);
}
        private function notifyAdmin($email) {
           mail("admin@example.org","INVALID EMAIL",$email,"From:DigitallDesk.com");
        }
}
    /* The Subscribe class validates an e-mail address
       and adds the e-mail address to the database. */

    class Subscribe {
        function validateEmail($email) {

    try {
                if ($email == "") {
                    throw new Exception("You must enter an e-mail address!");
                        } else {
                          
                    list($user,$domain) = explode("@", $email);
                    if (! checkdnsrr($domain, "MX"))
                        throw new InvalidEmailException(
                            "Invalid e-mail address!", $email);
                    else
                        return 1;
{
           catch (Exception $e) {
                  echo $e->getMessage();
            } catch (InvalidEmailException $e) {
                  echo $e->getMessage();
                  $e->notifyAdmin($email);

                   }
    /* Add the e-mail address to the database */

    function subscribeUser() {
        echo $this->email." added to the database!";
 }

// Assume that the e-mail address came from a subscription form

$_POST['email'] = "someuser@example.com";
/* Attempt to validate and add address to database. */
if (isset($_POST['email'])) {
    $subscribe = new Subscribe();
    if($subscribe->validateEmail($_POST['email']))

?>



