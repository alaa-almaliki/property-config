# Property Config
A simple class sets object properties by a given array passed in class constructor
### Installation
Add the following segment to your `composer.json` file on you project, then run `composer install` or `composer require alaa-almaliki/property-config`
```
{
  "repositories": [
    {
      "url": "https://github.com/alaa-almaliki/property-config.git",
      "type": "git"
    }
  ],
  "require": {
    "alaa-almaliki/property-config": "master-dev"
    }
}
```
### Example
```
class MyObject
{
    private $name;
    
    public function __construct(array $config = [])
    {
        Config::setObjectProperties($this, $config);
    }

    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }
    
    public function getName()
    {
        return $this->name;
    }
}

$myObject = new MyObject(['name' => 'Alaa']);
echo $myObject->getName(); // alaa

```

Enjoy :)