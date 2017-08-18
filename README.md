# Property Config
A simple class sets object properties by a given array passed in class constructor

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