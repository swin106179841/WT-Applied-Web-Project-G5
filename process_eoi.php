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
    // gender
    if (!in_array($gender, $allowedGenders, true)) {
        $errors['gender'] = "Select a valid gender option.";
    }
    // address
    if (!preg_match('/^[a-zA-Z0-9-\/]{1,40}$/', $address)) {
        $errors['address'] = "Address must be valid length and only contain symbols '-' and '/'.";
    }
    // suburb
    if (!preg_match('/^[a-zA-Z0-9-\/]{1,40}$/', $suburb)) {
        $errors['suburb'] = "Suburb must be valid length and only contain symbols '-' and '/'.";
    }
    // state
    if (!in_array($state, $allowedStates, true)) {
        $errors['state'] = "Select a valid state option.";
    }
    // postcode
    if (!preg_match('/^[0-9][0-9][0-9][0-9]$/', $postcode)) {
        $errors['postcode'] = "Postcode must be 4 numbers only.";
    }
    // email
    // email regex from: https://regexbox.com/regex-templates/email
    if (!preg_match('/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/', $email)) {
        $errors['email'] = "Email must be valid email address.";
    }
    // phone 
    if (!preg_match('/^[0-9]{8,12}$/', $phone)) {
        $errors['phone'] = "Phone must be a valid Australian phone number.";
    }
    // skills - stored as string to better fit in with database
    if (!isset($skills)) {
        $errors["skills-count"] = "Must select at least 1 skill.";
    }
    if (!preg_match('/^[a-z-A-Z, ]{1,55}$/', $skills)) {
        $errors['skills'] = "Pick a valid combination of skills";
    }
    // other skills
    if(!isset($otherSkills)) {
        $otherSkills = "";
    }
?>