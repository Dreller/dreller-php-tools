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

## Examples
This section shows you practical example on how to use tools from the class.
### buildFA
This too will create a `<i>` tag quickly.
#### Parameters
- icon: *mandatory* Name of icon from [Font Awesome](https://fontawesome.com).
- prefix: The prefix class to use, like `fas`, `far`, `fab`, etc.  Default `fas`.
```php
echo $dreller->buildFA('github');
```
... will create:
```html
<i class="fas fa-github"></i>&nbsp;
```
