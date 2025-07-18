
# PHP Course Notes by Elzero – Videos #004 to #015

---

## ✅ #004 – PHP Tags And Instructions Separation

### 📘 Summary
Covers the different ways to open and close PHP tags and how to separate instructions properly.

### 🔑 Key Concepts
- Standard tag: `<?php ... ?>`
- Short tag: `<? ... ?>` (not recommended)
- HTML and PHP can be mixed
- Each PHP statement ends with `;`

### 🧠 Example
```php
<?php
echo "Hello";
?>
```

### ⚠️ Common Mistakes
- Missing `;` at the end of a line
- Using short tags without enabling them

### 📍 Important Points
- Stick to `<?php ?>` for compatibility.

---

## ✅ #005 – Comments And Best Practices

### 📘 Summary
Introduction to single-line and multi-line comments in PHP.

### 🔑 Key Concepts
- Single-line: `//` or `#`
- Multi-line: `/* ... */`
- Comments help document your code.

### 🧠 Example
```php
// This is a single-line comment
# Another way
/*
This is a multi-line comment
*/
```

### 📍 Important Points
- Don’t overuse comments; write clean code instead.

---

## ✅ #006 – Introduction To Data Types

### 📘 Summary
Introduces PHP's primary data types.

### 🔑 Key Concepts
- String
- Integer
- Float
- Boolean
- Array
- Object
- NULL

### 🧠 Example
```php
$name = "Ahmed";
$age = 25;
$isAdmin = true;
```

### 📍 Important Points
- PHP is loosely typed; no need to declare data types.

---

## ✅ #007 – Type Juggling And Automatic Type Conversion

### 📘 Summary
PHP automatically converts types depending on context (type juggling).

### 🔑 Key Concepts
- `"5" + 10` becomes `15`
- `"5something" + 5` becomes `10`
- PHP tries to guess the correct type

### ⚠️ Common Mistakes
- Assuming strings will always stay strings
- Confusing `==` and `===`

### 📍 Important Points
- Use `===` to avoid type juggling in comparisons.

---

## ✅ #008 – Type Casting

### 📘 Summary
Covers manually converting one data type to another using type casting.

### 🔑 Key Concepts
- `(int)`, `(float)`, `(string)`, `(bool)`

### 🧠 Example
```php
$price = "100";
$price = (int) $price;
```

### 📍 Important Points
- Type casting gives you more control.

---

## ✅ #009 – Boolean And Converting To Boolean

### 📘 Summary
Explains how PHP treats different values when converted to boolean.

### 🔑 Key Concepts
- False values: `0`, `"0"`, `""`, `NULL`, `[]`, `false`
- Everything else is true

### 🧠 Example
```php
var_dump((bool) 0);     // false
var_dump((bool) "Hi");  // true
```

### 📍 Important Points
- Useful in conditional statements

---

## ✅ #010 – String And Escaping

### 📘 Summary
Covers how to write strings and escape characters in PHP.

### 🔑 Key Concepts
- Use `\` to escape quotes or special characters.
- Double quotes allow variables; single quotes don't.

### 🧠 Example
```php
$name = "Ahmed";
echo "Hello "$name""; // Hello "Ahmed"
```

### 📍 Important Points
- Prefer double quotes if using variables in the string.

---

## ✅ #011 – Heredoc And Nowdoc

### 📘 Summary
Explains advanced string syntax for multi-line content.

### 🔑 Key Concepts
- Heredoc: allows variables
- Nowdoc: treats content as plain text

### 🧠 Example
```php
$name = "Ahmed";
echo <<<"TEXT"
Hello $name
TEXT;

echo <<<'TEXT'
Hello $name
TEXT;
```

### 📍 Important Points
- Use Heredoc for templates or email content.

---

## ✅ #012 – Array With Complex Tests

### 📘 Summary
Introduces arrays and how to create and access them.

### 🔑 Key Concepts
- Index-based and associative arrays
- `print_r()` and `var_dump()` for debugging

### 🧠 Example
```php
$colors = ["red", "green"];
$user = ["name" => "Ahmed", "age" => 25];
```

### 📍 Important Points
- Arrays are very flexible in PHP.

---

## ✅ #013 – Introduction To Variables And Naming Rules

### 📘 Summary
Shows how to declare variables and the rules for naming them.

### 🔑 Key Concepts
- Variables start with `$`
- Case-sensitive
- Valid names: letters, numbers, underscore (not starting with a number)

### 🧠 Example
```php
$name = "Ahmed";
$Name = "Ali"; // Different variable
```

### ⚠️ Common Mistakes
- Using a number at the beginning of the variable

### 📍 Important Points
- Stick to meaningful variable names.

---

## ✅ #014 – Testing Variables In Real World

### 📘 Summary
Teaches practical use of `isset()`, `empty()`, and `var_dump()`.

### 🔑 Key Concepts
- `isset()` checks if a variable exists and is not null
- `empty()` checks if value is empty
- `var_dump()` prints type + value

### 🧠 Example
```php
if (isset($name)) { echo $name; }
```

### 📍 Important Points
- Useful for form validation and debugging

---

## ✅ #015 – Variable Variable

### 📘 Summary
Shows how to use variable names stored inside variables.

### 🔑 Key Concepts
- `$$var` accesses the variable whose name is stored in `$var`

### 🧠 Example
```php
$a = "name";
$name = "Ahmed";
echo $$a; // Outputs Ahmed
```

### ⚠️ Common Mistakes
- Hard to debug and understand if overused

### 📍 Important Points
- Use sparingly, mainly in dynamic code generation



## 📘 Lesson #016 - Assign By Value And By Reference

---

### 🧐 Concept Overview

In PHP, when assigning one variable to another, there are two main methods:

- ✅ **Assign by Value**
- 🔁 **Assign by Reference**

Each behaves differently in memory and affects how changes are reflected.

---

### ✅ Assign by Value

> A **copy** of the original variable's value is made.  
> Changing the original does **not** change the copy.

#### 🔸 Example:

```php
$x = "Ahmed";
$y = $x;

$x = "Osama";

echo $x; // Osama
echo $y; // Ahmed
```

📜 Explanation:
- `$y = $x` means `$y` gets a **copy** of `$x`'s value.
- When `$x` is later changed to "Osama", `$y` stays as "Ahmed".


---

### 🔁 Assign by Reference

> The second variable becomes an **alias** to the first.  
> Both point to the **same memory**.  
> Changing one changes both.

#### 🔸 Example:

```php
$x = "Ahmed";
$y = &$x; // Assign by reference

$x = "Osama";

echo $x; // Osama
echo $y; // Osama
```

📜 Explanation:
- `$y = &$x` makes `$y` reference the same memory as `$x`.
- Changing `$x` also changes `$y` because they are **linked**.

---

### 🔍 Real Use Case: Function With Reference Parameter

> You can use references to **modify variables inside functions**.

#### 🔸 Example:

```php
function addOne(&$number) {
    $number++;
}

$x = 5;
addOne($x);

echo $x; // 6
```

📜 Explanation:
- `$x` is passed **by reference** to the function.
- The function modifies the **original** `$x`.

---

### ⚠️ Notes and Tips

- ✅ Assign by value is safer for most use cases.
- ⚠️ Use reference assignments only when **you want** to link variables on purpose.
- 🔒 You can’t assign by reference after the assignment — it must be at the **moment of assignment**.

---


---

### 🧠 Concept Overview

In PHP, when assigning one variable to another, there are two main methods:

- ✅ **Assign by Value**
- 🔁 **Assign by Reference**

Each behaves differently in memory and affects how changes are reflected.

---


# 📘 Are References the Same as Pointers?

---

## 👉 Short Answer

**No**, references in PHP are **not exactly the same** as pointers in C/C++.

---

## 🔍 Deeper Explanation

| Feature              | References (PHP)                                  | Pointers (C/C++)                                 |
|:---------------------|:--------------------------------------------------|:-------------------------------------------------|
| **Memory Address**    | Hidden from you (you don't see memory addresses)  | You directly deal with memory addresses.         |
| **Syntax**            | Simple (`$y = &$x`)                               | Complicated (`int *ptr = &x`)                    |
| **Level of Control**  | Limited (just link variables)                    | Full control (can manipulate memory manually)    |
| **Operations**        | Cannot do math on references.                    | Can do pointer arithmetic (`ptr+1`, etc.).       |
| **Use Case**          | Safer, simpler linking between variables.        | More powerful but dangerous (can cause crashes). |
| **Automatic Handling**| PHP engine handles references internally.        | Must manage memory manually.                    |

---

## 🔥 Example to Feel the Difference

### PHP Reference (Simple link)

```php
$x = 5;
$y = &$x; // Just another name for $x

$x = 10;

echo $y; // 10
```

- `$y` is **linked** to `$x`.
- You **cannot** get the memory address or manipulate it directly.

---

### C Pointer (Address Manipulation)

```c
int x = 5;
int *p = &x; // p holds address of x

*p = 10; // Modify value at address

printf("%d", x); // 10
```

- `p` **knows the memory address** of `x`.
- You **can** move `p` to another variable or perform arithmetic.

---

## 🎯 Conclusion

- **PHP References** = Simple, safe "aliases" for variables.
- **C/C++ Pointers** = Powerful, but risky direct memory access.

**➔ References are like a nickname.**

**➔ Pointers are like GPS coordinates to a house.**

---



## 📘 Lesson #017 - Predefined Variables And Test

---

### 🤔 Concept Overview

PHP comes with many **predefined variables** that are available globally.
These variables contain information about the server, environment, request, and more.


---

### 🔢 Examples of Predefined Variables

| Variable | Purpose |
|:---------|:--------|
| `$_GET` | Data sent via URL query string (GET requests) |
| `$_POST` | Data sent via form submission (POST requests) |
| `$_REQUEST` | Combines `$_GET`, `$_POST`, and `$_COOKIE` |
| `$_SERVER` | Info about server and execution environment |
| `$_SESSION` | Data stored across different page requests |
| `$_COOKIE` | Data stored on the client side (browser) |
| `$_FILES` | Info about uploaded files |
| `$_ENV` | Environment variables |
| `$_GLOBALS` | References all variables available in global scope |


---

### 🔍 Common Predefined Variables Explained

#### 1. `$_SERVER`

> Contains information like headers, paths, and script locations.

```php
echo $_SERVER["SERVER_NAME"];
// Output: localhost (or your server name)

echo $_SERVER["REQUEST_METHOD"];
// Output: GET or POST

echo $_SERVER["SCRIPT_FILENAME"];
// Output: Full path to the currently executing script
```


#### 2. `$_GET`

> Data sent through the URL query string.

Example URL:
```
http://example.com/page.php?name=Ahmed&age=25
```

```php
echo $_GET["name"];
// Output: Ahmed

echo $_GET["age"];
// Output: 25
```


#### 3. `$_POST`

> Data sent through a form using POST method.

```html
<form method="POST">
  <input type="text" name="username">
  <input type="submit">
</form>
```

```php
echo $_POST["username"];
```


#### 4. `$_REQUEST`

> Mixes `$_GET`, `$_POST`, and `$_COOKIE` data together.

```php
echo $_REQUEST["username"];
```

⚠️ **Important:** Prefer using `$_GET` and `$_POST` individually for better security.


#### 5. `$_SESSION`

> Used to store information across pages.

```php
session_start();
$_SESSION["fav_color"] = "Blue";
echo $_SESSION["fav_color"];
```


#### 6. `$_COOKIE`

> Data stored on user's computer.

```php
setcookie("user", "Ahmed", time() + 3600); // 1 hour cookie

echo $_COOKIE["user"];
```


#### 7. `$_FILES`

> Handle file uploads.

```php
<form method="POST" enctype="multipart/form-data">
  <input type="file" name="upload">
  <input type="submit">
</form>
```

```php
print_r($_FILES);
```


#### 8. `$_ENV`

> Environment variables.

```php
print_r($_ENV);
```

You usually set these variables in the server settings.


#### 9. `$_GLOBALS`

> Access all global variables.

```php
$x = 100;

echo $GLOBALS["x"];
// Output: 100
```

---

### ⚠️ Important Tips

- Always **validate** and **sanitize** data coming from `$_GET`, `$_POST`, `$_REQUEST`, `$_COOKIE` for security.
- **Never trust** user input directly.
- Use `session_start()` at the top of pages that use `$_SESSION`.
- `$_FILES` contains useful keys like `name`, `type`, `tmp_name`, `error`, `size` for uploaded files.

---

### 📊 Real-World Example: Display Server Info

```php
echo "You are using: " . $_SERVER["HTTP_USER_AGENT"];
```

This will show the browser and device details.

---

### 📈 Conclusion

- Predefined variables are **powerful** tools in PHP.
- They help you **handle forms**, **manage sessions**, **upload files**, and **get server info** easily.

**Mastering them is essential for building real-world PHP applications!**

---

✨ Ready for the next lesson? Let’s keep going! 🚀



## 📘 Lesson #018 - Introduction To Constants

---

### 🤔 Concept Overview

In PHP, **constants** are like variables, but:

- Their **value never changes** once defined.
- They **do not** start with a `$` sign.
- They are **global** and can be used anywhere in the script.

---

### ✨ How To Create A Constant

> Use the `define()` function to create a constant.

#### 🔸 Example:

```php
// Define a constant
define("SITE_NAME", "Elzero Academy");

// Use the constant
echo SITE_NAME; // Output: Elzero Academy
```

✍️ **Notes:**
- `define("CONSTANT_NAME", value);`
- Constant names are usually **uppercase** by convention.
- No `$` before the name.

---

### 🔍 Real World Example

```php
// Define site constants
define("BASE_URL", "https://www.elzero.org");
define("ADMIN_EMAIL", "admin@elzero.org");

// Use them
echo "Visit us at " . BASE_URL;
echo "Contact: " . ADMIN_EMAIL;
```

---

### 🔸 Constant Characteristics

| Feature               | Description                                  |
|:----------------------|:---------------------------------------------|
| Syntax                | `define("NAME", value);`                     |
| Value Changes         | ❌ Not allowed after definition             |
| Scope                 | Global (accessible anywhere)                 |
| Naming Convention     | Uppercase letters usually                    |
| Data Types Supported  | Scalar types (string, integer, float, bool)   |

---

### ⚠️ Important Rules

- Constant names **must start** with a letter or underscore (_).
- Constants are **case-sensitive** by default.
  - You can make them **case-insensitive** (but this feature is **deprecated** after PHP 7.3).

#### 🔸 Example (Deprecated Feature):

```php
// This is deprecated and not recommended
define("PI", 3.14, true);
echo pi; // Output: 3.14
```

✅ Always define constants **case-sensitive** to follow best practices.

---

### 🔸 Magic Constants (Sneak Peek)

PHP also has **predefined constants** called **Magic Constants**.

Examples:
- `__FILE__` : Full path of the current file.
- `__DIR__`  : Directory of the current file.

> You will learn more about them in future lessons! 👩‍🎓

---

### 🔍 Quick Test Yourself

What will happen here?

```php
define("MY_NAME", "Ahmed");
MY_NAME = "Osama";
```

✅ Answer:
- ❌ **Error**! You cannot reassign a constant after defining it.

---

### 📈 Summary

- Constants are **fixed values** throughout your script.
- Defined using `define("NAME", value);`
- Best practice is to use **uppercase** names.
- They are **global** and **cannot** be changed once set.

---

📖 **Coming up next:**
> How to use **Magic Constants** and more advanced tricks! 🚀


## 📘 Lesson #019 - Predefined And Magic Constants And Reserved Keywords

---

### 💡 Concept Overview

In PHP, there are:
- ✨ **Predefined Constants**
- 🌟 **Magic Constants**
- ⛔️ **Reserved Keywords**

---

### ✨ Predefined Constants

> Built-in constants that PHP defines automatically.

#### 🔸 Examples:

```php
// PHP version
echo PHP_VERSION; // 8.1.2

// OS PHP is running on
echo PHP_OS_FAMILY; // Linux

// Maximum integer value
echo PHP_INT_MAX; // 9223372036854775807
```

---

### 🌟 Magic Constants

> Special constants that **change based on their context** (where they are used).

They start and end with **double underscores** `__`.

#### 🔸 Common Magic Constants:

| Magic Constant | Meaning |
|:---------------|:--------|
| `__LINE__`     | Current line number |
| `__FILE__`     | Full path and filename of the file |
| `__DIR__`      | Directory of the file |
| `__FUNCTION__` | Function name |
| `__CLASS__`    | Class name |
| `__METHOD__`   | Class method name |
| `__NAMESPACE__`| Current namespace |


#### 🔸 Example:

```php
echo __LINE__; // Outputs current line number

echo __FILE__; // Outputs full path to this file

echo __DIR__; // Outputs directory path

function test() {
    echo __FUNCTION__;
}
test(); // test
```

---

### ⛔️ Reserved Keywords

> Certain words are **reserved** by PHP and **cannot** be used as:
- Variable names
- Function names
- Class names

#### 🔸 Examples of Reserved Keywords:

```
class, function, echo, if, else, while, foreach, switch, return, public, private, protected, static, abstract, final, try, catch, namespace
```

#### ⚠️ Example (Incorrect Usage):

```php
// ❌ Error: Cannot use reserved keyword 'class' as a variable name
$class = "Hello";
```

Use non-reserved words for your variables, functions, and classes.


---

### 🎉 Summary

- ✨ **Predefined Constants**: Set by PHP to provide useful information.
- 🌟 **Magic Constants**: Change based on where they are used.
- ⛔️ **Reserved Keywords**: Cannot be used for naming your code elements.


---

✨ Continue practicing by **printing different constants** to understand them better!


## 📘 Lesson #020 - Arithmetic Operators

---

### ➕ PHP Arithmetic Operators

PHP supports standard arithmetic operations.

| Operator | Description        | Example        |
|----------|--------------------|----------------|
| `+`      | Addition            | `$x + $y`      |
| `-`      | Subtraction         | `$x - $y`      |
| `*`      | Multiplication      | `$x * $y`      |
| `/`      | Division            | `$x / $y`      |
| `%`      | Modulus (remainder)| `$x % $y`      |
| `**`     | Exponentiation      | `$x ** $y`     |

#### 🔸 Example:
```php
$x = 10;
$y = 3;

echo $x + $y;  // 13
echo $x - $y;  // 7
echo $x * $y;  // 30
echo $x / $y;  // 3.333...
echo $x % $y;  // 1
echo $x ** $y; // 1000 (10^3)
```

---

### ⚠️ Notes:

- Division by zero will result in an error.
- `%` is useful to check if a number is **even** or **odd**:
  ```php
  if ($x % 2 == 0) {
      echo "Even";
  } else {
      echo "Odd";
  }
  ```
- `**` is available since PHP 5.6 and later.

# PHP Type Checking Example  
```php
  echo gettype("100");   // Output: string  
  echo gettype(+"100");  // Output: integer  
```
---

🎯 Use arithmetic operators for all kinds of calculations in your logic, loops, and conditions!


## 📘 Lesson #021 - Assignment Operators

---

### 🧐 Concept Overview

Assignment operators in PHP are used to assign values to variables. PHP supports both the **basic assignment** and **compound assignment** (short-hand) operators.

---

### ✅ Basic Assignment

```php
$x = 10;
```
- `=` assigns the value 10 to `$x`.

---

### 🔁 Compound Assignment Operators

These combine arithmetic operations with assignment.

| Operator | Meaning           | Example          | Result          |
|----------|-------------------|------------------|-----------------|
| `+=`     | Add and assign     | `$x += 5;`       | `$x = $x + 5;`   |
| `-=`     | Subtract and assign| `$x -= 3;`       | `$x = $x - 3;`   |
| `*=`     | Multiply and assign| `$x *= 2;`       | `$x = $x * 2;`   |
| `/=`     | Divide and assign  | `$x /= 4;`       | `$x = $x / 4;`   |
| `%=`     | Modulus and assign | `$x %= 2;`       | `$x = $x % 2;`   |

---

### 🔸 Example

```php
$x = 10;
$x += 5;  // $x becomes 15
$x -= 3;  // $x becomes 12
$x *= 2;  // $x becomes 24
$x /= 4;  // $x becomes 6
$x %= 4;  // $x becomes 2
```

📜 Explanation:
- Each line updates `$x` using a different assignment operator.

---

### ⚠️ Tips

- These operators make code cleaner and shorter.
- Always initialize variables before using compound assignments to avoid warnings.

---

✅ Assignment operators are essential when updating variable values within loops or algorithms efficiently.


## 📘 Lesson #023 - Comparison Operators

---

### 🧐 Concept Overview

Comparison operators in PHP are used to compare two values. The result of a comparison is either:
- `true`
- `false`

---

### 🔹 Basic Comparison Operators

| Operator | Name                     | Example             | Result        |
|----------|--------------------------|---------------------|---------------|
| `==`     | Equal                    | `$x == $y`          | true if equal values (type not checked) |
| `===`    | Identical                | `$x === $y`         | true if equal in **value and type** |
| `!=`     | Not equal                | `$x != $y`          | true if values are not equal |
| `<>`     | Not equal (alternative)  | `$x <> $y`          | true if values are not equal |
| `!==`    | Not identical            | `$x !== $y`         | true if not equal or not same type |
| `>`      | Greater than             | `$x > $y`           | true if x is greater |
| `<`      | Less than                | `$x < $y`           | true if x is less |
| `>=`     | Greater than or equal    | `$x >= $y`          | true if x is greater or equal |
| `<=`     | Less than or equal       | `$x <= $y`          | true if x is less or equal |
| `<=>`    | Spaceship operator (three-way comparison) | `$x <=> $y` | Returns 0 if equal, -1 if `$x` is less, 1 if `$x` is greater |
---

### 🔸 Examples

```php
$x = 100;
$y = "100";

var_dump($x == $y);   // true  -> Values are equal
var_dump($x === $y);  // false -> Types differ (int vs string)
var_dump($x != $y);   // false -> They are equal in value
var_dump($x !== $y);  // true  -> Types are not equal
```

---

### 🔍 Comparing Strings in PHP

PHP compares strings **character by character** based on their ASCII values.

#### 🔸 Example:
```php
var_dump("Ahmed" == "Ahmed");    // true
var_dump("Ahmed" == "ahmed");    // false (capital A < lowercase a)
var_dump("5 Ahmed" > "10 Osama"); // true  -> "5" > "1" (character-wise)
```

📌 PHP uses **lexicographical order** when comparing strings:
- It compares the first character of both strings.
- If equal, it moves to the next one.
- Comparison is based on ASCII value.

#### 🔸 ASCII Trick Example:
```php
var_dump("a" > "A");   // true (ASCII: 97 > 65)
var_dump("abc" < "abd"); // true ('c' < 'd')
```

---

### ⚠️ Tips and Notes

- Use `===` instead of `==` for safer comparisons (avoids type juggling).
- PHP converts types automatically when using `==`.
- String comparison is **case-sensitive** by default.
- Watch out for string-number comparisons (`"100" == 100` → true).

---

### 🧠 Summary

- `==` checks only value.
- `===` checks value **and type**.
- Strings are compared **lexicographically**, based on ASCII values.
- Always use strict comparison when exact match is required.

---




## 📘 Lesson #024 - Increment and Decrement Operators

---

### 🧐 Concept Overview

PHP provides **increment** and **decrement** operators to increase or decrease a variable's value by 1.

There are two versions:

- `++$var` (Pre-increment)
- `$var++` (Post-increment)
- `--$var` (Pre-decrement)
- `$var--` (Post-decrement)

---

### 🔼 Increment Operators

#### 🔸 Pre-increment (`++$var`)
> Increments the value **before** using it.

```php
$x = 5;
echo ++$x; // 6
```

#### 🔸 Post-increment (`$x++`)
> Uses the value **before** incrementing it.

```php
$x = 5;
echo $x++; // 5
echo $x;   // 6
```

---

### 🔽 Decrement Operators

#### 🔸 Pre-decrement (`--$var`)
> Decreases the value **before** using it.

```php
$x = 5;
echo --$x; // 4
```

#### 🔸 Post-decrement (`$x--`)
> Uses the value **before** decreasing it.

```php
$x = 5;
echo $x--; // 5
echo $x;   // 4
```

---

### 🧠 Real World Analogy

> Imagine taking a pill from a bottle:

- **Pre**: You reduce the number first, then check how many are left.
- **Post**: You check the number first, then take one out.

---

### ⚠️ Notes

- Works with integers and floats.
- Can be confusing when used inside complex expressions — use parentheses to clarify.

---

### 🔍 Example In Loop

```php
for ($i = 0; $i < 3; $i++) {
    echo $i . " ";
}
// Output: 0 1 2
```

- Post-increment used here. Value checked before incrementing.

---

### ✅ Summary

| Operator | Meaning               | Increments Before | Value Used Before |
|----------|------------------------|--------------------|-------------------|
| `++$x`   | Pre-increment          | ✅                 | ❌                |
| `$x++`   | Post-increment         | ❌                 | ✅                |
| `--$x`   | Pre-decrement          | ✅                 | ❌                |
| `$x--`   | Post-decrement         | ❌                 | ✅                |

Use pre/post depending on whether you need the updated value immediately or after using the current one.

## 📘 Lesson #025 - Logical Operators

---

### 🧐 Concept Overview

Logical operators are used to **combine multiple conditions** or expressions that return Boolean values (`true` or `false`).

---

### ✅ Logical Operators in PHP

| Operator | Name              | Description                                     | Example                         |
|----------|-------------------|-------------------------------------------------|----------------------------------|
| `and`    | Logical AND       | True if **both** operands are true              | `$x and $y`                      |
| `&&`     | Logical AND       | Same as `and`, but has **higher precedence**    | `$x && $y`                       |
| `or`     | Logical OR        | True if **at least one** operand is true        | `$x or $y`                       |
| `||`     | Logical OR        | Same as `or`, but has **higher precedence**     | `$x || $y`                       |
| `xor`    | Logical XOR       | True if **only one** of the operands is true    | `$x xor $y`                      |
| `!`      | Logical NOT       | True if the operand is false (negation)         | `!$x`                            |

---

### 🔸 Example - AND and OR

```php
$x = true;
$y = false;

var_dump($x && $y); // false
var_dump($x || $y); // true
```

📜 Explanation:
- `$x && $y`: returns `false` because `$y` is false.
- `$x || $y`: returns `true` because `$x` is true.

---

### 🔸 Example - NOT

```php
$x = false;

var_dump(!$x); // true
```

📜 Explanation:
- `!$x` negates the value. Since `$x` is `false`, `!$x` is `true`.

---

### 🔸 Example - XOR

```php
var_dump(true xor true);   // false
var_dump(true xor false);  // true
var_dump(false xor true);  // true
var_dump(false xor false); // false
```

📜 Explanation:
- `xor` returns `true` only when **one** of the operands is true.

---

### ⚠️ Operator Precedence

- `&&` has **higher precedence** than `and`
- `||` has **higher precedence** than `or`

#### 🔍 Example:
```php
  # || before =
  $val = false || true ;
  var_dump($val) ;  //true
  echo "<br>";
  
  # but here = before or
  $val2 = false or true ;
  var_dump($val2) ; //false
```



---

### 🧠 Tip:
- Use `&&` and `||` in conditional expressions.
- Use `and` and `or` in assignment expressions when readability matters — but be cautious.

---

### 🎯 Real Example:

```php
$age = 20;
$hasPermission = true;

if ($age >= 18 && $hasPermission) {
  echo "Access granted";
} else {
  echo "Access denied";
}
```

---

✅ Output:
```
Access granted
```

📌 Both conditions must be true for access to be granted.

---




## 📘 Lesson #026 - String Operators in PHP

---

### 🧠 Concept Overview

In PHP, **string operators** allow you to **combine** and **manipulate** strings. There are **two main operators**:

1. `.` (Concatenation Operator)
2. `.=` (Concatenation Assignment Operator)

---

### 🔸 `.` Concatenation Operator

> Used to **combine** two or more strings into one.

#### 🔹 Example:
```php
$firstName = "Ahmed";
$lastName = "AbuObaida";

$fullName = $firstName . " " . $lastName;
echo $fullName; // Ahmed AbuObaida
```

📌 Explanation:
- `.` joins the strings together.
- You can also add spaces, punctuation, or other characters between the strings.

---

### 🔸 `.=` Concatenation Assignment Operator

> Appends a string to an existing variable (adds to the right).

#### 🔹 Example:
```php
$message = "Hello";
$message .= " World";
$message .= "!";
echo $message; // Hello World!
```

📌 Explanation:
- `$message .= " World";` is equivalent to `$message = $message . " World";`
- It's useful for building up strings step-by-step.

---

### 🧪 Extra Example With Numbers

> Numbers are automatically converted to strings if needed.

```php
$x = "Number: ";
$x .= 100;
echo $x; // Number: 100
```

---

### ⚠️ Notes & Tips

- ✅ `.` is **not** the addition operator `+`.
- ⚠️ Mixing `+` and `.` can cause unexpected results.
- 🚫 PHP does **not** support string interpolation with `.` (you must concatenate).
- 🧼 Always sanitize user input when building strings for output or database queries.

---

### ✅ Real Use Case: Building HTML Strings

```php
$title = "Welcome";
$content = "<h1>" . $title . " to our site</h1>";
echo $content;
```

---

### 🎯 Summary

| Operator | Description | Example                       |
|----------|-------------|-------------------------------|
| `.`      | Concatenation | `$a . $b` ➝ Combines `$a` and `$b` |
| `.=`     | Append       | `$a .= $b` ➝ Adds `$b` to `$a`      |

---

🔚 End of Lesson #026 - String Operators


## 📘 Lesson #027 - Array Operators

---

### 🧐 Concept Overview

PHP supports a set of operators that specifically work with **arrays**. These operators help in comparing, combining, and checking arrays.

---

### 🔹 Union Operator (`+`)

> Combines two arrays. If a key exists in both, the first array's value is kept.

```php
$a = ["a" => 1, "b" => 2];
$b = ["b" => 3, "c" => 4];

$result = $a + $b;
print_r($result);
```

📤 Output:
```
Array (
  [a] => 1
  [b] => 2
  [c] => 4
)
```

📜 Explanation:
- `b` exists in both, but `$a`'s value is used.

---

### 🔸 Equality Operator (`==`)

> Returns `true` if both arrays have **same key/value pairs**, regardless of order.

```php
$a = ["x" => 10, "y" => 20];
$b = ["y" => 20, "x" => 10];

var_dump($a == $b); // true
```

---

### 🔸 Identity Operator (`===`)

> Returns `true` if both arrays have **same key/value pairs** and **same order** and **types**.

```php
$a = ["x" => 10, "y" => 20];
$b = ["y" => 20, "x" => 10];

var_dump($a === $b); // false
```

---

### 🔸 Inequality (`!=` or `<>`) and Non-identity (`!==`)

- `!=` or `<>`: True if arrays are **not equal** (different values or keys).
- `!==`: True if arrays are **not identical** (different values, keys, order, or types).

```php
$a = ["x" => 10, "y" => 20];
$b = ["x" => "10", "y" => 20];

var_dump($a != $b);   // false (values equal, types ignored)
var_dump($a !== $b);  // true  (types different)
```

---

### ⚠️ Notes and Tips

- 🔁 `+` only combines **non-overlapping** keys.
- ✅ Use `===` if you care about **type and order**.
- ✅ Use `==` if you care only about **content**.

---

### ✅ Summary Table

| Operator | Name         | Description                                   |
|----------|--------------|-----------------------------------------------|
| `+`      | Union        | Combines arrays (preserves first array values) |
| `==`     | Equality     | True if key/value pairs are the same          |
| `===`    | Identity     | True if same pairs, order, and types          |
| `!=`/`<>`| Inequality   | True if arrays are not equal                  |
| `!==`    | Non-identity | True if arrays are not identical              |

---

🧠 Use array operators carefully depending on whether you care about value only, or also about order and type.

---


## 📘 Lesson #028 - Error Control Operator

---

### 🧐 Concept Overview

The **Error Control Operator** in PHP is used to suppress error messages that a particular expression might generate.

- PHP uses the **`@` symbol** to suppress errors.
- It prevents the display of warnings, notices, or errors for the given expression.

---

### 🔕 Syntax

```php
@expression
```

---

### 🔸 Example Without Error Control:

```php
$file = file("nonexistent_file.txt");
```

🧨 If the file does not exist, PHP will show a **warning**:

```
Warning: file(nonexistent_file.txt): failed to open stream: No such file or directory
```

---

### 🔸 Example With Error Control:

```php
$file = @file("nonexistent_file.txt");
```

✅ The error is **suppressed**, and no message is shown.

---

### ⚠️ Important Notes

- Suppressing errors doesn't fix the problem. It just hides it.
- It's better to **handle errors properly** using functions like `file_exists()` or try-catch blocks when exceptions are available.

#### ✅ Better Practice:

```php
if (file_exists("nonexistent_file.txt")) {
    $file = file("nonexistent_file.txt");
} else {
    echo "File not found.";
}
```

---

### 🛑 When to Avoid Using `@`

- ❌ Avoid using `@` for debugging or production error handling.
- ✅ Use it **only** when you're absolutely sure the error is harmless and expected (e.g., checking optional resources).

---

### 🧠 Summary

- `@` is used to **suppress errors** in PHP.
- It can prevent the display of unwanted error messages.
- Use it **carefully** — hiding problems is not the same as solving them!

---


## 📘 Lesson #029 - Operator Precedence

---

### 🧐 What Is Operator Precedence?

> Operator precedence determines **the order** in which different operations are evaluated in an expression.

Just like in math: `2 + 3 * 4` is evaluated as `2 + (3 * 4)` → `14`.

In PHP, some operators have **higher precedence** than others.

---

### 🔢 Common Precedence Order (From Highest to Lowest)

| Precedence | Operator(s)                              | Type              |
|------------|-------------------------------------------|-------------------|
| 1          | `()`                                      | Grouping          |
| 2          | `++`, `--`, `!`, `~`, `(int)`, `(string)` | Unary             |
| 3          | `*`, `/`, `%`                             | Multiplication    |
| 4          | `+`, `-`, `.`                             | Addition/String   |
| 5          | `<`, `<=`, `>`, `>=`                      | Comparison        |
| 6          | `==`, `!=`, `===`, `!==`                  | Equality          |
| 7          | `&&`                                      | Logical AND       |
| 8          | `||`                                      | Logical OR        |
| 9          | `=`                                       | Assignment        |
| 10         | `and`, `or`, `xor`                        | Logical (low prio)|

🔹 Operators at a higher level are executed **before** those at lower levels.

---

### ✅ Example 1: Multiplication Before Addition

```php
$result = 2 + 3 * 4; // 2 + (3 * 4) = 14
echo $result;
```

---

### ✅ Example 2: Using Parentheses to Override

```php
$result = (2 + 3) * 4; // (5) * 4 = 20
echo $result;
```

🧠 Use `()` to make your intention clear and **avoid bugs**.

---

### ✅ Example 3: Assignment vs Comparison

```php
$test = true || false; // becomes: $test = (true || false);
echo $test; // true

$test = false or true; // becomes: ($test = false) or true;
echo $test; // false
```

🛑 `=` has **higher precedence** than `or`, so use parentheses if needed.

---

### ✅ Example 4: Logical vs Bitwise

```php
$a = true;
$b = false;

$result1 = $a && $b; // false
$result2 = $a and $b; // false, but used differently in assignment

$x = false;
$x = true && false;  // $x = (true && false) → $x = false

$y = false;
$y = true and false; // ($y = true) and false → $y = true
```

---

### ⚠️ Tips

- ❗ Always use parentheses if you are unsure about the precedence.
- 📚 Operator precedence can cause **unexpected bugs** if misused.
- ✍️ Good formatting helps readability and avoids mistakes.

---

### 📎 Reference:

You can check the full precedence list here:
https://www.php.net/manual/en/language.operators.precedence.php

---

### 🎯 Summary

- Precedence controls **which operator runs first**.
- Use `()` to clarify your logic.
- Know that `=` and `and` behave differently due to precedence.

**➤ Best Practice: Use parentheses even if you know the order—to make your code readable and safe.**

---

## 📘 Lessons #030-032 - If, Elseif, Else

---

### ✅ #030 - If, Elseif, Else - Basics

#### 🧠 Concept
Conditional statements allow your program to make decisions based on certain conditions.

#### 🔸 Basic Syntax
```php
if (condition) {
  // code to run if condition is true
} elseif (another_condition) {
  // code to run if the first condition is false but this is true
} else {
  // code to run if none of the above conditions are true
}
```

#### 🔸 Example
```php
$grade = 85;

if ($grade >= 90) {
  echo "Excellent";
} elseif ($grade >= 75) {
  echo "Good";
} else {
  echo "Needs Improvement";
}
```

---

### ✅ #031 - If, Elseif, Else - Real Life Examples

#### 🛒 Example: Online Store Stock
```php
$stock = 0;

if ($stock > 10) {
  echo "In Stock";
} elseif ($stock > 0) {
  echo "Limited Stock";
} else {
  echo "Out of Stock";
}
```

#### 🚦 Example: Traffic Light
```php
$light = "green";

if ($light === "red") {
  echo "Stop";
} elseif ($light === "yellow") {
  echo "Slow Down";
} else {
  echo "Go";
}
```

---

### ✅ #032 - If, Elseif, Else - Advanced Practice

#### 🧪 Nested Conditions
```php
$age = 20;
$hasID = true;

if ($age >= 18) {
  if ($hasID) {
    echo "You may enter";
  } else {
    echo "ID Required";
  }
} else {
  echo "Too Young";
}
```

#### 🎯 Ternary Equivalent (Advanced)
```php
$age = 20;
echo ($age >= 18) ? "Adult" : "Minor";
```

---

### 📌 Tips
- ✅ Always use curly braces `{}` to avoid logic errors.
- 🔁 Nest `if` statements carefully for complex conditions.
- 🚨 Use `===` for strict comparison (especially with strings or types).

---

## 📘 Lesson #033 - If, Elseif, Else - Alternate Syntax

---

### 🧐 What is Alternate Syntax?

In PHP, especially when writing code inside HTML, you can use an **alternate syntax** for control structures such as `if`, `else`, and `elseif`. This makes code **cleaner and more readable**, especially in templates.

---

### 🔄 Standard Syntax (Recap)

```php
if ($x > 10) {
    echo "X is greater than 10";
} elseif ($x == 10) {
    echo "X is exactly 10";
} else {
    echo "X is less than 10";
}
```

---

### 🌐 Alternate Syntax

```php
if ($x > 10):
    echo "X is greater than 10";
elif ($x == 10):
    echo "X is exactly 10";
else:
    echo "X is less than 10";
endif;
```

📝 Note:
- Use a colon `:` instead of an opening curly brace `{`
- Use `endif;` to close the `if` block instead of `}`

---

### ✅ When To Use Alternate Syntax?

Alternate syntax is ideal when:
- Mixing PHP with HTML (like in templates or views).
- You want more **visual clarity**.

---

### 🔥 Example in HTML Template:

```php
<?php $loggedIn = true; ?>

<html>
<body>
    <?php if ($loggedIn): ?>
        <h1>Welcome, User!</h1>
    <?php else: ?>
        <h1>Please log in.</h1>
    <?php endif; ?>
</body>
</html>
```

✅ This syntax avoids messy PHP tags and makes template logic clean.

---

### ⚠️ Notes

- Always remember to close alternate syntax blocks with their proper keyword (`endif;`, `endfor;`, `endforeach;`, etc.)
- Works for other structures like `while`, `foreach`, `for`, and `switch` too.

---

### 🧠 Summary

| Feature              | Standard Syntax         | Alternate Syntax         |
|---------------------|--------------------------|---------------------------|
| Structure Start      | `{`                     | `:`                      |
| Structure End        | `}`                     | `endif;`, `endforeach;` etc. |
| Usage                | Pure PHP                | PHP with HTML templates  |

---

✅ Use alternate syntax when mixing PHP and HTML to keep your templates clean and readable!


## 📘 Lesson #034 - Nested If And Advanced Practice

---

### 🧐 What Is Nested If?

> A **nested if** is an `if` statement **inside another** `if` or `else` block.

It's used when decisions depend on **multiple conditions**.

---

### 🔸 Basic Syntax

```php
if (condition1) {
    if (condition2) {
        // Code runs if both condition1 and condition2 are true
    }
}
```

You can also nest inside `else` or `elseif` blocks.

---

### 🧪 Example 1: Simple Nested If

```php
$age = 25;
$country = "Egypt";

if ($age >= 18) {
    if ($country === "Egypt") {
        echo "You are allowed to vote in Egypt.";
    } else {
        echo "Check voting rules in your country.";
    }
} else {
    echo "You are too young to vote.";
}
```

---

### 🧪 Example 2: Nested If with More Conditions

```php
$user = "Ahmed";
$isLoggedIn = true;
$isAdmin = false;

if ($isLoggedIn) {
    if ($user === "Ahmed") {
        if ($isAdmin) {
            echo "Welcome Admin Ahmed";
        } else {
            echo "Welcome Ahmed (User)";
        }
    } else {
        echo "Welcome Guest User";
    }
} else {
    echo "Please log in.";
}
```

📜 Explanation:
- Checks if user is logged in.
- Then checks their username.
- Then checks if they are an admin.

---

### 🔄 Example 3: Replace Nested If with Logical AND

```php
$score = 90;
$attendance = 95;

if ($score >= 85 && $attendance >= 90) {
    echo "You passed with honors!";
} else {
    echo "You didn't qualify for honors.";
}
```

✅ This is **cleaner** and avoids deep nesting.

---

### 💡 Tips for Using Nested If

- Avoid too much nesting — it can be hard to read.
- Consider combining conditions with logical operators (`&&`, `||`).
- You can always refactor complex nested logic into **functions**.

---

### 🧠 Practice Exercise:

```php
// Task: Check if user is adult AND has permission
$age = 20;
$hasPermission = true;

if ($age >= 18) {
    if ($hasPermission) {
        echo "Access granted.";
    } else {
        echo "Permission denied.";
    }
} else {
    echo "You are not old enough.";
}
```

Try converting the above into a version using logical AND.

---

### 🎯 Conclusion

- Nested `if` is useful for **layered decisions**.
- Use them when you need to check one condition **inside** another.
- Always try to keep your code readable and clear.

## 📘 Lesson #035 - Ternary Conditional Operator

---

### 🧐 Concept Overview

The **Ternary Operator** is a shorthand way of writing simple `if/else` statements in PHP.

**Syntax:**
```php
(condition) ? value_if_true : value_if_false;
```

✅ It returns one of two values depending on whether the condition is **true** or **false**.

---

### 🔸 Basic Example

```php
$age = 20;
$status = ($age >= 18) ? "Adult" : "Minor";

echo $status; // Adult
```

📜 Explanation:
- If `$age >= 18` is true, `$status` becomes "Adult".
- Otherwise, it becomes "Minor".

---

### 🔸 Nested Ternary Example

```php
$score = 75;
$result = ($score >= 90) ? "Excellent" :
          (($score >= 70) ? "Good" : "Needs Improvement");

echo $result; // Good
```

📜 Explanation:
- If `$score >= 90` → "Excellent"
- Else if `$score >= 70` → "Good"
- Else → "Needs Improvement"

🛑 **Avoid nesting** too many ternaries in one line — it becomes hard to read.

---

### 🔸 Used for Output Directly

```php
echo ($user_is_logged_in) ? "Welcome back!" : "Please log in.";
```

---

### ✅ When to Use
- When you need a quick conditional assignment.
- For short and readable logic.

### ⚠️ When to Avoid
- For complex conditions with multiple branches → use `if/else` for clarity.

---

### 🧠 Summary
- ✅ Ternary = Short `if/else`
- 📌 Syntax: `(condition) ? true_val : false_val;`
- 🚫 Don’t overuse or nest too deeply.


## 📘 Lesson #036 - Switch

---

### 🧐 Concept Overview

The `switch` statement in PHP is an alternative to using multiple `if...elseif...else` statements when checking the value of a single variable.

---

### 🧱 Syntax

```php
switch (expression) {
    case value1:
        // Code to execute if expression == value1
        break;
    case value2:
        // Code to execute if expression == value2
        break;
    default:
        // Code to execute if expression doesn't match any case
}
```

---

### 🔹 Example 1: Basic Usage

```php
$day = "Monday";

switch ($day) {
    case "Saturday":
    case "Sunday":
        echo "It's the weekend!";
        break;
    case "Monday":
        echo "Back to work.";
        break;
    default:
        echo "Midweek day.";
}
```

📜 **Output**:
```
Back to work.
```

✅ `switch` checks the value of `$day` and executes the matching case.

---

### 🔹 Example 2: Grouping Cases

```php
$grade = 'B';

switch ($grade) {
    case 'A':
        echo "Excellent!";
        break;
    case 'B':
    case 'C':
        echo "Good job!";
        break;
    case 'D':
        echo "You passed.";
        break;
    case 'F':
        echo "Try again.";
        break;
    default:
        echo "Invalid grade.";
}
```

📜 **Output**:
```
Good job!
```

---

### ⚠️ Important Notes

- 🧨 **Don't forget `break;`** – Without it, execution will "fall through" to the next case.
- 🧩 `switch` uses `==` comparison (not `===`) — meaning types are not strictly checked.
- 🆘 `default:` is optional but recommended for handling unexpected values.

---

### 🔁 When to Use `switch`

Use `switch` when:
- You're checking a **single variable** or expression.
- You have **many possible fixed values**.
- You want **cleaner, more readable** code than long `if...elseif` chains.

---

### ❗️Avoiding Common Pitfalls

- ❌ Forgetting `break;` can cause unintended execution of multiple blocks.
- ❌ Using complex conditions (like `$x > 10`) — use `if...else` instead for those.

---

### ✅ Summary

- `switch` is a clean, readable way to branch logic based on **one variable's value**.
- Each `case` should usually end with `break;` to prevent fall-through.
- Always include a `default` block as a fallback.

---


## 📘 Lesson #037 - While Loop And Concept Of Loop

---

### 🔁 What Is a Loop?

A **loop** is a structure that repeats a block of code **multiple times** as long as a condition is `true`.

Useful when you want to:
- Repeat tasks
- Iterate over data
- Automate repetitive actions

---

### 🔄 `while` Loop

> The `while` loop executes a block of code **as long as** the condition is `true`.

#### 🔸 Syntax:

```php
while (condition) {
  // Code to execute
}
```

📌 If the condition is initially false, the loop is **never executed**.

---

### ✅ Basic Example

```php
$counter = 1;

while ($counter <= 5) {
  echo "Counter is $counter<br>";
  $counter++;
}
```

📝 Output:
```
Counter is 1
Counter is 2
Counter is 3
Counter is 4
Counter is 5
```

📜 Explanation:
- `$counter` starts at 1
- As long as it's less than or equal to 5, the block runs
- `$counter++` increases the value each time

---

### ⚠️ Infinite Loop Warning

Be careful not to **forget to update** the loop variable.

```php
$x = 1;
while ($x <= 5) {
  echo $x;
  // ❌ If we forget $x++ → infinite loop
}
```

🛑 This will keep running forever unless stopped manually.

---

### 🔁 Real-Life Analogy

"Keep eating until you're full."
```php
$hungry = true;

while ($hungry) {
  echo "Eating...<br>";
  $hungry = false; // Once full, stop
}
```

🧠 This is a loop with a real-world condition that ends when the condition changes.

---

### 🧪 Common Use Cases
- Printing sequences (e.g. numbers, messages)
- Validating user input
- Running until a condition is met (like fetching data)

---

### 🛠 Best Practices
- Always **initialize and update** your condition variables
- Avoid complex conditions unless necessary
- Test small loops first to prevent infinite execution

---

### 🧠 Summary

| Feature         | Value                       |
|----------------|-----------------------------|
| Type           | Entry-controlled loop       |
| Executes when  | Condition is `true`         |
| Stops when     | Condition becomes `false`   |
| Risk           | Infinite loop if not handled|

✅ **Use `while` loops when** you don't know how many times you need to run in advance.

---

## 📘 Lesson #038 - Do While

---

### 🧐 Concept Overview

The `do...while` loop in PHP is a control structure that executes a block of code **at least once**, and then it keeps executing it as long as the given condition is true.

---

### 🔁 Syntax

```php
 do {
     // Code to execute
 } while (condition);
```

---

### 🔍 Key Difference from `while`

- ✅ `while`: **Checks the condition first**, then may or may not execute the block.
- ✅ `do...while`: **Executes the block first**, then checks the condition.

---

### 🔸 Example 1: Basic `do...while`

```php
$x = 1;

do {
    echo "Number is: $x <br>";
    $x++;
} while ($x <= 3);
```

📝 **Output:**
```
Number is: 1
Number is: 2
Number is: 3
```

✅ Even if `$x` was greater than 3 at the start, the block would still run **once**.

---

### 🔸 Example 2: Condition False Initially

```php
$x = 10;

do {
    echo "Hello<br>";
} while ($x < 5);
```

📝 **Output:**
```
Hello
```

✅ It printed "Hello" **once**, even though `$x < 5` is false.

---

### 📦 Use Case Example: Prompt Until Valid Input (Simulated)

```php
$tries = 0;
$correctPassword = "php123";
$input = "";

do {
    // Simulate input
    $input = "wrong";
    $tries++;
    echo "Try $tries: Incorrect password<br>";

    if ($tries == 3) {
        $input = $correctPassword;
    }

} while ($input !== $correctPassword);

echo "Access Granted!";
```

📝 **Output:**
```
Try 1: Incorrect password
Try 2: Incorrect password
Try 3: Incorrect password
Access Granted!
```

---

### 🧠 Summary

| Feature       | `while`                | `do...while`                  |
|---------------|------------------------|-------------------------------|
| Check Timing | Before loop body       | After one execution of body   |
| Guarantee    | May never run          | Runs **at least once**        |

✅ Use `do...while` when **at least one execution** is required no matter the condition.

---

## 🔁 Lesson #039 - Loop For

---

### 🧐 Concept Overview

The `for` loop in PHP is used to repeat a block of code a known number of times.

```php
for (initialization; condition; increment) {
    // Code to execute
}
```

- **Initialization**: sets the starting point.
- **Condition**: checked before each iteration.
- **Increment**: changes the loop variable each time.

---

### 🔸 Basic Example

```php
for ($i = 0; $i < 5; $i++) {
    echo $i . "<br>";
}
```

📜 **Output:**
```
0
1
2
3
4
```

---

### 🔍 Explanation

- `$i = 0` ➝ Starts from 0.
- `$i < 5` ➝ Loops until `$i` is less than 5.
- `$i++` ➝ Increments `$i` by 1 each time.

---

### 🔸 Example With HTML

```php
for ($i = 1; $i <= 3; $i++) {
    echo "<h3>Section $i</h3>";
}
```

📜 Output:
```html
<h3>Section 1</h3>
<h3>Section 2</h3>
<h3>Section 3</h3>
```

---

### 🔸 Looping Through Arrays

```php
$colors = ["red", "green", "blue"];

for ($i = 0; $i < count($colors); $i++) {
    echo $colors[$i] . "<br>";
}
```

📜 Output:
```
red
green
blue
```

---

### 🛑 Common Mistakes

- Forgetting to update the loop variable ➝ infinite loop!
- Using `<=` instead of `<` when indexing arrays ➝ leads to `Undefined offset`.

---

### ⚙️ Use Cases

- Displaying lists
- Creating tables
- Looping through index-based structures
- Repeating actions with counters

---

### 📘 Summary

- `for` loop is ideal when you **know how many times** to repeat.
- Always include the correct **initialization**, **condition**, and **increment**.

➡️ Great for working with **indexed arrays** and counters!

---

## 📘 Lesson #040 - Loop Foreach

---

### 🧐 Concept Overview

The `foreach` loop is used **only with arrays**. It provides a simple way to iterate through array elements **without using index counters**.

---

### 🔁 Syntax

```php
foreach ($array as $value) {
    // code to execute
}

foreach ($array as $key => $value) {
    // code to execute
}
```

---

### 🔸 Example 1: Loop Through Indexed Array

```php
$names = ["Ahmed", "Osama", "Sayed"];

foreach ($names as $name) {
    echo $name . "<br>";
}
```

**Output:**
```
Ahmed
Osama
Sayed
```

✅ `\$name` takes each value from the array in order.

---

### 🔸 Example 2: Loop Through Associative Array

```php
$user = [
    "name" => "Ahmed",
    "age" => 30,
    "country" => "Egypt"
];

foreach ($user as $key => $value) {
    echo "$key: $value<br>";
}
```

**Output:**
```
name: Ahmed
age: 30
country: Egypt
```

✅ You get both key and value using `as $key => $value` syntax.

---

### 🔸 Example 3: Nested Foreach

```php
$users = [
    ["name" => "Ahmed", "age" => 30],
    ["name" => "Sara", "age" => 25]
];

foreach ($users as $user) {
    foreach ($user as $key => $value) {
        echo "$key: $value<br>";
    }
    echo "---<br>";
}
```

---

### ⚠️ Notes and Tips

- `foreach` works only with arrays or objects.
- You don’t need to know the length of the array.
- Original array is **not changed** unless you use `&` for reference.

#### 🔹 Modify Array with Reference

```php
$nums = [1, 2, 3];

foreach ($nums as &$num) {
    $num *= 2;
}

print_r($nums); // [2, 4, 6]
```

🧠 Reference `&$num` modifies original array elements.

---

### ✅ Conclusion

- `foreach` is great for **clean and readable** loops.
- Use `key => value` if you need the keys.
- Use reference `&` if you want to modify the original array.

---

## 📘 Lesson #041 - Break, Continue

---

### 🔹 `break` Statement

> `break` is used to **exit** the current loop or switch case **immediately**.

#### 🔸 Example:
```php
for ($i = 1; $i <= 10; $i++) {
    if ($i == 5) {
        break; // Exit the loop when $i is 5
    }
    echo $i . "<br>";
}
```

📝 Output:
```
1
2
3
4
```

📌 Once `$i` reaches 5, the loop stops.

---

### 🔹 `continue` Statement

> `continue` is used to **skip** the current iteration and move to the **next** one in the loop.

#### 🔸 Example:
```php
for ($i = 1; $i <= 5; $i++) {
    if ($i == 3) {
        continue; // Skip number 3
    }
    echo $i . "<br>";
}
```

📝 Output:
```
1
2
4
5
```

📌 Number 3 is skipped; the rest continue.

---

### 🔁 Combined Use Example:
```php
for ($i = 1; $i <= 10; $i++) {
    if ($i == 3) {
        continue; // skip 3
    }
    if ($i == 7) {
        break; // stop when reaching 7
    }
    echo $i . "<br>";
}
```

📝 Output:
```
1
2
4
5
6
```

---

### ⚠️ Notes:
- `break` is useful when a condition makes further looping unnecessary.
- `continue` helps ignore specific iterations while keeping the loop running.
- You can use them in all loop types: `for`, `while`, `foreach`, `do...while`.

---

🎯 Use `break` to stop 🔴, use `continue` to skip 🔁.

---


## 📘 Lesson #042 - Include And Require

---

### 🧠 What are `include` and `require` in PHP?

They are both used to include the content of one PHP file into another PHP file.

---

### ✅ `include`
- If the file is **not found**, it will show a **warning** but the script will **continue** running.

#### 🔸 Example:
```php
include("header.php");
echo "Welcome to the website!";
```

📌 If `header.php` does not exist:
- PHP will show a warning.
- But it will still display: `Welcome to the website!`

---

### ✅ `require`
- If the file is **not found**, it will show a **fatal error** and the script will **stop** running.

#### 🔸 Example:
```php
require("header.php");
echo "Welcome to the website!";
```

📌 If `header.php` does not exist:
- PHP will show a fatal error.
- The rest of the script will **not** run.

---

### 🔁 `include_once` and `require_once`
- These versions make sure the file is **included only once**.
- Prevents multiple declarations (e.g., functions, classes).

#### 🔸 Example:
```php
include_once("config.php");
require_once("functions.php");
```

---

### 📌 Use Case Summary:

| Statement         | Behavior on Missing File | Continue Execution? |
|------------------|---------------------------|----------------------|
| `include`        | Warning                   | ✅ Yes               |
| `require`        | Fatal Error               | ❌ No                |
| `include_once`   | Warning                   | ✅ Yes               |
| `require_once`   | Fatal Error               | ❌ No                |

---

### 🧪 Real Example:

```php
// config.php
$siteName = "MySite";
```

```php
// index.php
include("config.php");
echo $siteName; // Output: MySite
```

---

### 🎯 Best Practices:
- Use `require` or `require_once` for essential files (e.g., config, database).
- Use `include` or `include_once` for optional files (e.g., widgets, sidebars).
- Prefer `*_once` to prevent accidental redeclarations.

---

## 📘 Lesson #043 - Function Introduction And DRY Concept

---

### 🧠 What is a Function?
A **function** is a block of code that performs a specific task and can be reused multiple times.

---

### 🔁 DRY Principle: Don't Repeat Yourself
- Reuse code instead of repeating it.
- Helps in cleaner and more maintainable code.

---

### 🔧 Function Syntax:
```php
function functionName() {
    // Code to execute
}
```

#### 🔸 Example:
```php
function sayHello() {
    echo "Hello Ahmed!<br>";
}

sayHello(); // Hello Ahmed!
sayHello(); // Hello Ahmed!
```

---

### 📝 Notes:
- Use functions to group related logic.
- Great for large scripts or reusable components.

---

### ✅ Summary
- Functions help make your code organized and efficient.
- The DRY principle avoids code duplication.

## 📘 Lesson #044 - Advanced Examples With Parameters And Arguments

---

### 🧠 What Are Parameters?
Parameters are variables passed into functions.

```php
function greet($name) {
    echo "Hello $name!<br>";
}

greet("Ahmed"); // Hello Ahmed!
greet("Osama"); // Hello Osama!
```

---

### 🔁 Multiple Parameters:
```php
function fullName($first, $last) {
    echo "Hello $first $last!<br>";
}

fullName("Ahmed", "AbuObaida");
```

---

### ⚠️ Notes:
- Order matters.
- You can combine strings, numbers, and logic in functions.

---

### ✅ Summary:
- Functions can take arguments.
- Parameters allow functions to behave dynamically.

## 📘 Lesson #045 - Function Return And Echo

---

### 🔁 Echo vs Return
- `echo` displays content.
- `return` sends back a value to be used later.
- if function doesn't return value so it will return NULL by default, that means if i didn't used return keyword and i used echo instead func will return NULL 
---

### 🧪 Example:
```php
function sayHello() {
    echo "Hello Ahmed!<br>";
}

function getGreeting() {
    return "Hello Ahmed!";
}

sayHello();
$message = getGreeting();
echo $message;
```

---

### 📜 Explanation:
- `sayHello()` outputs directly.
- `getGreeting()` sends the string back, which we then `echo`.

---

### ✅ Summary:
- Use `return` if you want to store or reuse the result.
- Use `echo` for direct output.

## 📘 Lesson #046 - Function Default Parameter Value

---

### 📍 What Is a Default Parameter Value?
- A value that is used when no argument is passed.

---

### 🧪 Example:
```php
function greet($name = "Guest") {
    echo "Hello $name!<br>";
}

greet("Ahmed");  // Hello Ahmed!
greet();          // Hello Guest!
```

---

### ⚠️ Note:
- Default parameters should come **after** required ones.

```php
function welcome($name, $title = "Mr") {
    echo "Welcome $title $name<br>";
}
```

---

### ✅ Summary:
- Default values make your function flexible.
- Avoid errors from missing arguments.

## 📘 Lesson #047 - Function Variable Arguments List

---

### 🧠 What is Variadic Function?
- Allows passing **unlimited** number of arguments using `...` (spread operator).

---

### 🧪 Example:
```php
function sumAll(...$numbers) {
    $result = 0;
    foreach ($numbers as $num) {
        $result += $num;
    }
    return $result;
}

echo sumAll(1, 2, 3);      // 6
echo sumAll(10, 20, 30);   // 60
```

---

### 📌 Notes:
- You get an array of arguments.
- Use `foreach` or array functions to process them.

---

### ✅ Summary:
- `...$args` allows dynamic arguments.
- Useful for math, formatting, or collecting values.

## 📘 Lesson #048 - Function Training And Unpacking Arguments

---

### 🧠 Unpacking Arrays Into Arguments
- Use `...` to spread an array into separate arguments.

```php
function fullName($first, $last) {
    echo "Hello $first $last!<br>";
}

$name = ["Ahmed", "AbuObaida"];
fullName(...$name); // Hello Ahmed AbuObaida!
```

---

### 🔁 Mixing Static and Dynamic Arguments
```php
function greet($greeting, ...$names) {
    foreach ($names as $name) {
        echo "$greeting $name<br>";
    }
}

greet("Hi", "Ali", "Sarah", "Mona");
```

---

### ✅ Summary:
- `...` works for both sending and receiving arguments.
- Great for working with dynamic data.

## 📘 Lesson #049 - Function Variable And Function Exists

---

### 🧠 Variable Functions
- Call a function using a variable name.

```php
function sayHi() {
    echo "Hi Ahmed!<br>";
}

$func = "sayHi";
$func(); // Calls sayHi()
```

---

### 🔍 function_exists()
- Check if a function is defined.

```php
if (function_exists("sayHi")) {
    sayHi();
} else {
    echo "Function not found.";
}
```

---

### ✅ Summary:
- Variable functions make your code dynamic.
- Use `function_exists` to avoid errors in reuse.

## 📘 Lesson #050 - Passing Arguments By Reference And Return Type Declaration

---

### 🔁 Passing By Reference
- Use `&` to allow a function to **modify** the original variable.

```php
function addFive(&$num) {
    $num += 5;
}

$x = 10;
addFive($x);
echo $x; // 15
```

---

### 🔙 Return Type Declaration
- Define the expected return type using `: type`

```php
function multiply(int $a, int $b): int {
    return $a * $b;
}

echo multiply(3, 4); // 12
```

---

### ⚠️ Notes:
- `&` makes a function change the actual argument.
- Return types ensure predictable outputs.

---

### ✅ Summary:
- Use `&` to update variables.
- Use `: type` for safer code.

## 📘 Lesson #051 - Anonymous Function

---

### 🧠 What Is an Anonymous Function?
- A function **without a name**.
- Often stored in a variable or passed as an argument.

```php
$greet = function($name) {
    return "Hello $name!";
};

echo $greet("Ahmed"); // Hello Ahmed!
```

---

### 🔁 With array_map:
```php
$names = ["Ali", "Mona", "Sara"];

$greetings = array_map(function($name) {
    return "Hi $name";
}, $names);

print_r($greetings);
```

---

### ✅ Summary:
- Anonymous functions are useful for short, throwaway logic.
- Common in callbacks, `array_map`, and dynamic code.

## 📘 Lesson #052 - Arrow Function

---

### 🧠 What Is an Arrow Function?
- Shorter syntax for anonymous functions (introduced in PHP 7.4)
- Uses `fn` keyword.

```php
$square = fn($n) => $n * $n;
echo $square(5); // 25
```

---

### 🔁 Example with array_map:
```php
$numbers = [1, 2, 3, 4];
$squares = array_map(fn($n) => $n * $n, $numbers);
print_r($squares);
```

---

### 📌 Notes:
- Arrow functions **inherit** variables from the parent scope.
- No need for `use()` keyword.

---

### ✅ Summary:
- Use `fn()` for simple one-liner functions.
- Cleaner and easier than full anonymous functions.


## 📘 Lesson #053 - String Access and Update (Detailed)

---

### 🔤 String
A string in PHP is a **sequence of characters**, and it behaves like an **array** when accessed by index.

---

### 🔹 Access Elements
#### 🔸 String is an Array of Characters
```php
$name = "Ahmed";
echo $name[0]; // A
echo $name[2]; // m
```

#### 🔸 Zero-Based Indexing
- First character is at index 0.
- You access each character using `$string[index]`.

```php
$text = "PHP";
echo $text[0]; // P
echo $text[1]; // H
```

#### 🔸 Negative Indexing ✅ Supported (PHP 7.1+)
- Allows accessing characters from the **end** of the string.
- Index `-1` refers to the last character.

```php
$str = "Ahmed";
echo $str[-1]; // d
echo $str[-2]; // e
```

⚠️ Note: Negative indexing is **read-only**. You cannot assign a value using a negative index.

```php
$str[-1] = 'X'; // ❌ Warning in PHP
```

---

### 🔧 Update Elements
#### 🔸 Update Current Characters
```php
$name = "Ahmed";
$name[0] = "O";
echo $name; // Ohmed
```

#### 🔸 Add New Characters (By Index)
```php
$name[5] = "Z";
echo $name; // OhmedZ
```
- If the index is beyond the current string length, PHP **appends** the new character.

---

### 🔍 Search
#### 🔸 Single-Byte vs Multi-Byte
- Regular functions (`$string[index]`) access **bytes**.
- For **UTF-8** and multi-byte strings (e.g., Arabic, Chinese), use `mb_*` functions like:

```php
$text = "مرحبا";
echo mb_substr($text, 0, 1); // م
```

---

### ✅ Summary
| Feature                | Supported? | Notes                            |
|------------------------|------------|----------------------------------|
| Zero-based indexing    | ✅         | `$str[0]` gives the first char   |
| Negative indexing      | ✅ (PHP 7.1+)| `$str[-1]` gives last char       |
| Direct character update| ✅         | `$str[1] = 'X'` modifies string  |
| Append character       | ✅         | `$str[5] = 'Z'` extends string   |
| Negative write         | ❌         | Cannot assign using `-1` index   |
| Multi-byte safe access | ✅ via mb_ | Use `mb_substr()` for Unicode    |

---


## 📘 Lesson #054 - String Functions Part 1 [6 Functions]

---

### 🔧 1. `lcfirst()`
Converts the **first character** of a string to lowercase.
```php
lcfirst("Ahmed"); // "ahmed"
```

---

### 🔧 2. `ucfirst()`
Converts the **first character** of a string to uppercase.
```php
ucfirst("ahmed"); // "Ahmed"
```

---

### 🔧 3. `strtolower()`
Converts **all characters** in a string to lowercase.
```php
strtolower("PHP IS COOL"); // "php is cool"
```

---

### 🔧 4. `strtoupper()`
Converts **all characters** in a string to uppercase.
```php
strtoupper("php is cool"); // "PHP IS COOL"
```

---

### 🔧 5. `ucwords()`
Capitalizes the **first letter of each word**.
```php
ucwords("learn php with osama"); // "Learn Php With Osama"
```
You can also specify custom delimiters:
```php
ucwords("one-two-three", "-"); // "One-Two-Three"
```

---

### 🔧 6. `str_repeat()`
Repeats a string multiple times.
```php
str_repeat("PHP", 3); // "PHPPHPPHP"
```

---

### ✅ Summary
These functions help in:
- Controlling the **case** of strings
- Formatting strings for display
- Repeating patterns for formatting or output

---


## 📘 Lesson #055 - String Functions Part 2 [8 Functions]

---

### 🔧 1. `implode()` / `join()`
Joins array elements into a string.
```php
$skills = ["PHP", "HTML", "CSS"];
implode(" - ", $skills); // "PHP - HTML - CSS"
```
- `join()` is an alias for `implode()`.

---

### 🔧 2. `explode()`
Splits a string into an array.
```php
$str = "PHP-HTML-CSS";
explode("-", $str); // ["PHP", "HTML", "CSS"]
```
Supports optional **limit**:
```php
explode("-", $str, 2); // ["PHP", "HTML-CSS"]
```

---

### 🔧 3. `str_shuffle()`
Randomly shuffles all characters.
```php
str_shuffle("Ahmed"); // Output like: dAmhe
```

---

### 🔧 4. `strrev()`
Reverses the characters in a string.
```php
strrev("Ahmed"); // demhA
```

---

### 🔧 5. `trim()`
Removes whitespace or characters from **both** sides.
```php
trim("  Ahmed  "); // "Ahmed"
```
Supports **CharList** (custom characters to remove):
```php
trim("--Ahmed--", "-"); // "Ahmed"
```

---

### 🔧 6. `ltrim()`
Removes from the **left** side.
```php
ltrim("\t\n\rAhmed"); // "Ahmed"
```

---

### 🔧 7. `rtrim()`
Removes from the **right** side.
```php
rtrim("Ahmed\0"); // "Ahmed"
```

---

### 🧪 Common Whitespace Characters
| Type             | Char     | Escape       |
|------------------|----------|--------------|
| Space            |          | `" "`        |
| Tab              | \t       | `"\t"`       |
| New Line         | \n       | `"\n"`       |
| Carriage Return  | \r       | `"\r"`       |
| Vertical Tab     | \x0B     | `"\x0B"`     |
| NULL             | \0       | `"\0"`       |

---

### ✅ Summary
Functions for:
- Joining and splitting strings
- Formatting whitespace
- Cleaning input data
- Randomization and reversal

---

## 📘 Lesson #056 - String Functions Part 3 [5 Functions]

---

### 🔧 1. `chunk_split()`
Splits a string into chunks and adds an optional ending.
```php
chunk_split("AhmedAbuObaida", 3, "|");
// "Ahm|edA|buO|bai|da|"
```
- Default `length` = 76, `end` = `\r\n` if not provided.

---

### 🔧 2. `strlen()`
Returns the number of bytes (not characters) in the string.
```php
strlen("Ahmed"); // 5
```

⚠️ For multi-byte strings (e.g., Arabic), use `mb_strlen()`.
```php
mb_strlen("مرحبا"); // 5
```

---

### 🔧 3. `str_split()`
Splits a string into an array of characters or chunks.
```php
str_split("Ahmed"); // ["A", "h", "m", "e", "d"]
str_split("Ahmed", 2); // ["Ah", "me", "d"]
```

---

### 🔧 4. `strip_tags()`
Strips HTML and PHP tags from a string.
```php
strip_tags("<h1>Hello</h1> <script>alert('X')</script>");
// "Hello alert('X')"
```
You can allow certain tags:
```php
strip_tags("<b>Hello</b>", "<b>"); // "<b>Hello</b>"
```

---

### 🔧 5. `nl2br()`
Converts newlines (`\n`) into `<br>` or `<br />`.
```php
echo nl2br("Hello\nWorld"); // "Hello<br>World"
```
- Set second parameter to `true` to return `<br />` (XHTML).

---

### ✅ Summary
Use these functions to:
- Chunk and split strings
- Clean user input
- Convert output formatting for web
- Count characters and structure display

---

## 📘 Lesson #057 - String Functions Part 4 [5 Functions]

---

### 🔧 1. `strpos()`
Finds the **first occurrence** of a substring (case-sensitive).
```php
strpos("Hello World", "o"); // 4
```
Optional start position:
```php
strpos("Hello Hello", "o", 5); // 10
```

---

### 🔧 2. `strrpos()`
Finds the **last occurrence** of a substring (case-sensitive).
```php
strrpos("Hello Hello", "l"); // 9
```
Optional start position (works differently depending on PHP version).

---

### 🔧 3. `stripos()`
Finds the first occurrence, **case-insensitive**.
```php
stripos("Hello World", "O"); // 4
```

---

### 🔧 4. `strripos()`
Finds the last occurrence, **case-insensitive**.
```php
strripos("Hello Hello", "L"); // 9
```

---

### 🔧 5. `substr_count()`
Counts how many times a substring appears.
```php
substr_count("PHP is fast and PHP is popular", "PHP"); // 2
```
Optional start and length:
```php
substr_count("PHP PHP PHP", "PHP", 4, 7); // 2
```

---

### ✅ Summary
| Function      | Case | Position     | Description                        |
|---------------|------|--------------|------------------------------------|
| `strpos`      | ✓    | First        | Case-sensitive                     |
| `strrpos`     | ✓    | Last         | Case-sensitive                     |
| `stripos`     | ✗    | First        | Case-insensitive                   |
| `strripos`    | ✗    | Last         | Case-insensitive                   |
| `substr_count`| ✓    | N/A          | Count occurrences                  |

---


## 📘 Lesson #058 - String Functions Part 5 [4 Functions]

---

### 🔧 1. `parse_str()`
Parses a query string into variables or an array.
```php
$query = "name=Ahmed&age=30";
parse_str($query, $result);
print_r($result);
// ["name" => "Ahmed", "age" => "30"]
```

---

### 🔧 2. `quotemeta()`
Escapes special characters with backslashes: `. \ + * ? [ ^ ] ( ) $`
```php
quotemeta("PHP (version) + fast?");
// "PHP \(version\) \+ fast\?"
```

---

### 🔧 3. `str_pad()`
Pads a string to a certain length.
```php
str_pad("PHP", 6); // "PHP   " (default right)
str_pad("PHP", 6, "-", STR_PAD_BOTH); // "-PHP-"
str_pad("PHP", 6, "0", STR_PAD_LEFT); // "000PHP"
str_pad("PHP", 6, "_", STR_PAD_RIGHT); // "PHP___"
```

---

### 🔧 4. `strtr()`
#### 🔸 Version 1: From/To characters
```php
strtr("Ahmed", "Ae", "@3"); // "@hm3d"
```

#### 🔸 Version 2: Using associative array
```php
strtr("Ahmed Abu", ["Ahmed" => "A.", "Abu" => "B."]); // "A. B."
```

---

### ✅ Summary
| Function     | Purpose                             |
|--------------|-------------------------------------|
| `parse_str`  | Convert query string to array       |
| `quotemeta`  | Escape regex/meta characters        |
| `str_pad`    | Add padding to string               |
| `strtr`      | Character or string replacements    |

---


## 📘 Lesson #059 - String Functions: `str_replace()` & `str_ireplace()`

---

### 🔧 1. `str_replace()`
Replaces all occurrences of the search string with the replacement string (case-sensitive).

**Syntax:**
```php
str_replace(mixed $search, mixed $replace, mixed $subject, int &$count = null)
```

**Example:**
```php
str_replace("Ahmed", "Osama", "Hello Ahmed"); // "Hello Osama"
```

**Replace multiple values:**
```php
str_replace(["One", "Two"], [1, 2], "One, Two, Three"); // "1, 2, Three"
```

**Count replacements:**
```php
$text = "Ahmed Ahmed";
str_replace("Ahmed", "Osama", $text, $count);
echo $count; // 2
```

---

### 🔧 2. `str_ireplace()`
Same as `str_replace()` but **case-insensitive**.

**Example:**
```php
str_ireplace("ahmed", "Osama", "Hello Ahmed"); // "Hello Osama"
```

**Replace Count:**
```php
$text = "Ahmed ahmed AHMED";
str_ireplace("ahmed", "Osama", $text, $count);
echo $count; // 3
```

---

### ✅ Summary
| Function        | Case-Sensitive | Count Support | Notes                     |
|-----------------|----------------|----------------|----------------------------|
| `str_replace`   | ✅ Yes         | ✅ Yes         | Simple direct replacement |
| `str_ireplace`  | ❌ No          | ✅ Yes         | Case-insensitive          |

---

## 📘 Lesson #060 - String Functions: `substr_replace()`

---

### 🔧 `substr_replace()`
Replaces a portion of a string with another string.

**Syntax:**
```php
substr_replace(string $string, string $replacement, int $start, int|null $length = null)
```

---

### 🔹 Examples

#### ✅ Replace a Portion
```php
substr_replace("Hello Ahmed", "Osama", 6); // "Hello Osama"
```

#### ✅ Replace with Length Specified (positive number)
```php
substr_replace("Hello Ahmed", "Osama", 6, 5); // "Hello Osama"
```

#### ✅ Insert Instead of Replace (length = 0)
```php
substr_replace("Hello Ahmed", " Mr.", 5, 0); // "Hello Mr. Ahmed"
```

#### ✅ Negative Length (leave N characters from the end)
```php
substr_replace("Hello Ahmed", "Osama", 6, -2); // "Hello Osamaed"
```

---

### 📌 Behavior by Length Parameter
| Length          | Behavior                              |
|------------------|----------------------------------------|
| Positive Number  | Replace that number of characters     |
| Zero             | Insert without removing               |
| Negative Number  | Leave N characters at the end         |

---

### ✅ Summary
- `substr_replace()` is flexible for replacing, inserting, or partially editing strings.
- Great for modifying specific parts of strings by index.

---

## 📘 Lesson #061 - String Functions Part 8 [4 Functions]

---

### 🔧 1. `wordwrap()`
Wraps a string to a given number of characters using a break character.

**Syntax:**
```php
wordwrap(string $string, int $width = 75, string $break = "\n", bool $cut = false)
```

**Example:**
```php
$text = "Lorem ipsum dolor sit amet, consectetur adipiscing elit.";
echo wordwrap($text, 15, "<br>");
```
- `cut = true`: forces breaking long words if they exceed the width.

---

### 🔧 2. `ord()`
Returns the ASCII value of the **first character** of a string.
```php
ord("A"); // 65
ord("a"); // 97
```

---

### 🔧 3. `chr()`
Returns the character from an ASCII value.
```php
chr(65); // "A"
chr(97); // "a"
```

---

### 🔧 4. `similar_text()`
Calculates the similarity between two strings.

**Returns:** Number of matching characters. Optionally, also returns the percentage.
```php
similar_text("Ahmed", "Ahed", $percent);
echo $percent; // 80
```

---

### ✅ Summary
| Function        | Description                                   |
|-----------------|-----------------------------------------------|
| `wordwrap()`    | Breaks lines in long strings                  |
| `ord()`         | ASCII value of a character                    |
| `chr()`         | Character from an ASCII value                 |
| `similar_text()`| Finds number of similar characters + percent |

---

## 📘 Lesson #062 - String Functions Part 9 [3 Functions]

---

### 🔧 1. `strstr()`
Finds the first occurrence of a string — **case-sensitive**.
- It returns the part of the string starting from the match.
- Alias: `strchr()`

**Syntax:**
```php
strstr(string $haystack, string $needle, bool $before_needle = false)
```

**Example:**
```php
strstr("Hello Ahmed", "Ahmed"); // "Ahmed"
strstr("Hello Ahmed", "Ahmed", true); // "Hello "
```

---

### 🔧 2. `stristr()`
Same as `strstr()` but **case-insensitive**.
```php
stristr("Hello Ahmed", "ahmed"); // "Ahmed"
stristr("Hello Ahmed", "AHMED", true); // "Hello "
```

---

### 🔧 3. `number_format()`
Formats a number with grouped thousands and optional decimals.

**Syntax:**
```php
number_format(float $number, int $decimals = 0, string $decimal_separator = ".", string $thousands_separator = ",")
```

**Examples:**
```php
number_format(1234567.891); // "1,234,568"
number_format(1234567.891, 2); // "1,234,567.89"
number_format(1234567.891, 2, ",", " "); // "1 234 567,89"
```

---

### ✅ Summary
| Function          | Description                                 |
|-------------------|---------------------------------------------|
| `strstr()`        | Finds substring (case-sensitive)            |
| `stristr()`       | Finds substring (case-insensitive)          |
| `number_format()` | Formats number with optional separators     |

---
