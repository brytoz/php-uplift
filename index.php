<?php
// OOP Basics: Classes and Objects
class User {
    // Properties (Encapsulation: private access)
    private $name;
    private $email;

    // Constructor (initialize properties)
    public function __construct($name, $email) {
        $this->name = $name;
        $this->email = $email;
    }

    // Getter and Setter methods (Encapsulation: controlled access)
    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    // Method to display user info
    public function displayInfo() {
        return "Name: " . $this->getName() . ", Email: " . $this->getEmail();
    }
}

// Inheritance: Admin class extends User class
class Admin extends User {
    private $adminLevel;

    public function __construct($name, $email, $adminLevel) {
        // Call parent constructor
        parent::__construct($name, $email);
        $this->adminLevel = $adminLevel;
    }

    // Overriding the displayInfo method (Polymorphism)
    public function displayInfo() {
        return parent::displayInfo() . ", Admin Level: " . $this->adminLevel;
    }
}

// Inheritance: Moderator class extends User class
class Moderator extends User {
    private $moderationArea;

    public function __construct($name, $email, $moderationArea) {
        // Call parent constructor
        parent::__construct($name, $email);
        $this->moderationArea = $moderationArea;
    }

    // Overriding the displayInfo method (Polymorphism)
    public function displayInfo() {
        return parent::displayInfo() . ", Moderation Area: " . $this->moderationArea;
    }
}

// Application: Creating instances and demonstrating inheritance and polymorphism

// Create a regular user
$user = new User("John Doe", "john@example.com");

// Create an admin
$admin = new Admin("Alice Smith", "alice@example.com", "Super Admin");

// Create a moderator
$moderator = new Moderator("Bob Brown", "bob@example.com", "Tech Forum");

// Display user profiles (Polymorphism in action)
echo $user->displayInfo() . "<br>";
echo $admin->displayInfo() . "<br>";
echo $moderator->displayInfo() . "<br>";
?>
