<?php
/* 
HTTP Request Methods

HTTP request methods are used to communicate between a client (browser) and a server. Each method has a specific purpose. The two most common methods are GET and POST.


1. GET
Purpose: Used to retrieve data from a server. Parameters are sent in the URL.
    Key Features:
        Data is appended to the URL as query parameters.
        Can be bookmarked or cached.
        Limited in the amount of data it can send.
        Not secure for sensitive data since parameters are visible in the URL.
    
    example: 
    http://example.com/page.php?username=John
    */
    
    if ($_SERVER["REQUEST_METHOD"] === "GET") {
    $username = $_GET["username"]; 
    echo "Hello, " . htmlspecialchars($username);
    }


    
// 2. POST
// Purpose: Used to send data to a server to be processed or stored. Parameters are sent in the body of the request.
//     Key Features:
//         Data is not visible in the URL.
//         Suitable for sending sensitive information like passwords.
//         Can send large amounts of data.

        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $username = $_POST["username"];
            echo "Welcome, " . htmlspecialchars($username);
        }




// 3. PUT
// Purpose: Used to update existing resources on the server. Typically used in REST APIs.
// Key Features:
// Data is sent in the request body.
// Not directly supported in HTML forms; often used with APIs and tools like Postman or JavaScript.

if ($_SERVER["REQUEST_METHOD"] === "PUT") {
    parse_str(file_get_contents("php://input"), $data);
    $username = $data["username"] ?? "unknown";
    echo "Updated username to: " . htmlspecialchars($username);
}
?>
