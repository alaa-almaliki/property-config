# Property Setter Config
A simple class sets object properties by a given array passed in class constructor
### Installation
Add the following segment to your `composer.json` file on you project, then run `composer install` or `composer require alaa-almaliki/property-setter-config`

### Example
```
class MyClass
{
    private $firstName;
    private $lastName;
    private $email;
    private $friends = [];

    public function __construct(array $config = [])
    {
        PropertySetterConfig::setObjectProperties($this, $config);
    }

    public function setFirstName($value)
    {
        $this->firstName = $value;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function setLastName($value)
    {
        $this->lastName = $value;
        return $this;
    }

    public function getLastName()
    {
        return $this->lastName;
    }

    public function setEmail($value)
    {
        $this->email = $value;
        return $this;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setFriends(array $value)
    {
        $this->friends = $value;
        return $this;
    }

    public function getFriends()
    {
        return $this->friends;
    }
}

$obj = new MyClass([
    'first_name' => 'alaa',
    'last_name' => 'almaliki',
    'email'     => 'alaa.almaliki@gmail.com',
    'friends' => [
        'Adam',
        'Melissa',
        'laith',
        'Ahmed'
    ]
]);

```

Enjoy :)