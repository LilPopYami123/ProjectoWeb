<?php
$servername = "localhost";
$username = "root"; // Cambia esto si tu configuración de MySQL es diferente
$password = ""; // Cambia esto si tu configuración de MySQL es diferente
$dbname = "database_name"; // Asegúrate de que este sea el nombre de tu base de datos

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Limpiar tabla existente
$conn->query("DELETE FROM businesses");

// Datos ficticios
$businesses = [
    ["Anna's Art Studio", "Anna Smith", "Graphic Designer", "anna@artstudio.com"],
    ["Billy's Web Development", "Billy Cullen", "Web Developer", "billy@webdev.com"],
    ["Creative Consulting", "Carol Johnson", "Consultant", "carol@consulting.com"],
    ["Tech Solutions", "David Brown", "IT Specialist", "david@techsolutions.com"],
    ["Marketing Pros", "Eva Green", "Marketing Expert", "eva@marketingpros.com"],
    ["Financial Advisors", "Frank White", "Financial Advisor", "frank@financialadvisors.com"],
    ["Health & Wellness", "Grace Black", "Health Coach", "grace@healthwellness.com"],
    ["Legal Services", "Hannah Blue", "Lawyer", "hannah@legalservices.com"],
    ["Creative Studio", "Ivy Pink", "Photographer", "ivy@creativestudio.com"],
    ["Home Renovations", "Jack Yellow", "Contractor", "jack@homerenovations.com"],
    ["Fashion Boutique", "Kate Red", "Fashion Designer", "kate@fashionboutique.com"],
    ["Auto Repair", "Leo Orange", "Mechanic", "leo@autorepair.com"],
    ["Education Center", "Mia Purple", "Teacher", "mia@educationcenter.com"],
    ["Travel Agency", "Noah Blue", "Travel Agent", "noah@travelagency.com"],
    ["Fitness Trainer", "Olivia Brown", "Personal Trainer", "olivia@fitnesstrainer.com"],
    ["Restaurant", "Paul Green", "Chef", "paul@restaurant.com"],
    ["Digital Marketing", "Quinn White", "SEO Specialist", "quinn@digitalmarketing.com"],
    ["Real Estate", "Riley Black", "Realtor", "riley@realestate.com"],
    ["Software Development", "Sophia Yellow", "Developer", "sophia@softwaredev.com"],
    ["Interior Design", "Tom Red", "Designer", "tom@interiordesign.com"],
    ["Pet Care", "Uma Orange", "Veterinarian", "uma@petcare.com"],
    ["Event Planning", "Victor Purple", "Event Planner", "victor@eventplanning.com"],
    ["Cleaning Services", "Wendy Blue", "Cleaner", "wendy@cleaningservices.com"],
    ["Music Lessons", "Xander Brown", "Music Teacher", "xander@musiclessons.com"],
    ["Graphic Design", "Yara Green", "Designer", "yara@graphicdesign.com"],
    ["Bakery", "Zane White", "Baker", "zane@bakery.com"],
    ["Landscaping", "Ada Black", "Landscaper", "ada@landscaping.com"],
    ["Tutoring", "Ben Yellow", "Tutor", "ben@tutoring.com"],
    ["Photography", "Cara Red", "Photographer", "cara@photography.com"],
    ["IT Consulting", "Dan Orange", "Consultant", "dan@itconsulting.com"],
];

foreach ($businesses as $business) {
    $sql = "INSERT INTO businesses (name, owner, occupation, email) VALUES ('".$business[0]."', '".$business[1]."', '".$business[2]."', '".$business[3]."')";
    if ($conn->query($sql) !== TRUE) {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

echo "Registros añadidos exitosamente";

$conn->close();
?>
