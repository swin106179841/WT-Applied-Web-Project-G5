<?php

    function cleanPost(string $v): string 
    {
        return htmlspecialchars(trim($_POST[$v]));
    }

    $errors = [];

    // load values
    $reference = cleanPost("reference");
    $name = cleanPost("name");
    $surname = cleanPost("surname");
    $DoB = cleanPost("DoB");
    $gender = cleanPost("gender");
    $address = cleanPost("address");
    $suburb = cleanPost("suburb");
    $state = cleanPost("state");
    $postcode = cleanPost("postcode");
    $email = cleanPost("reference");
    $phone = cleanPost("phone");
    $skills = cleanPost("skills");
    $otherSkills = cleanPost("otherSkills");

    $allowedStates = ['VIC', 'NSW', 'QLD', 'NT', 'WA', 'SA', 'TAS', 'ACT'];
    $allowedGenders = ['male', 'female'];


    // validation with regex
    // ======================================
    // reference
    if (!preg_match('/^[a-zA-Z0--9]{6}$/', $reference)) {
        $errors['reference'] = "Reference must be 6 alpha-numeric characters.";
    }
    // name
    if (!preg_match('/^[a-zA-Z]{1,20}$/', $name)) {
        $errors['name'] = "Name must be 1-20 letters.";
    }
    // surname
    if (!preg_match('/^[a-zA-Z]{1,20}$/', $surname)) {
        $errors['surname'] = "Surname must be 1-20 letters.";
    }
    // DoB
    if (!preg_match('/^[0-3][0-9]\/[0-1][0-9]\/[1-2][0-9][0-9][0-9]$/', $DoB)) {
        $errors['DoB'] = "Date of Birth must be a valid date.";
    }

?>