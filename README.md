# dreller-php-tools
PHP Class to add or simplify features to PHP.

## How to add to project
Simply add the file Dreller.php and declare the class.
``` php
require_once("Dreller.php");
$dreller = new Dreller();
```   
You can now use `$dreller` as your toolkit.

## Tools summary
- **Font Awesome utilities**
  - [buildFA](#buildFA): Quickly create a Font Awesome `<i>`
- **Variable utilities**
  - [getGET](#getget-and-getpost): Retrieve $_GET variable
  - [getPOST](#getget-and-getpost): Retrieve $_POST variable
  - [printVar](#printVar): Output the content of any variable

## Examples
This section shows you practical examples on how to use tools from the class.
### buildFA
This tool will create a `<i>` tag quickly.
#### Parameters
- **icon**: *mandatory* Name of icon from [Font Awesome](https://fontawesome.com).
- **prefix**: The prefix class to use, like `fas`, `far`, `fab`, etc.  Default `fas`.
```php
echo $dreller->buildFA('github');
```
... will create:
```html
<i class="fas fa-github"></i>&nbsp;
```

### getGET and getPOST
Retrieve value of GET or POST values, if they are set.  If not set, they will return the *default* value passed in the call.
#### Parameters
- **key**: *mandatory* Name of the variable to retrieve.
- **default**: The value to return if the variable is not set.  Default ''.
```php
# www.example.com?hello=World
echo $dreller->getGET('hello');
echo $dreller->getGET('blue', 0);
```
... will output:
```
World
0
```

### printVar
Output the content of variable in a `<pre>`.  Works with array too!
#### Parameters
- **var**: *mandatory* Name of variable.
```php
$myVar = 'Hello World!';
echo $dreller->printVar($myVar);
```
... will output:
```html
<pre>Hello World!</pre>
```
