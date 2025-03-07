<?php
// основе oop

/**
 * User Class
 */
class User
{
    /**
     * User name
     *
     * @var string
     */
    private string $name;

    /**
     * Set user name
     *
     * @param string $name user name
     * @return void
     */
    public function setName(string $name) : void
    {
        $this->name = $name;
    }

    /**
     * get user name
     *
     * @return string user name
     */
    public function getName() : string
    {
        return $this->name;
    }
}

$user = new $User();

$user->setName("syuta");
echo $user->getName;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
