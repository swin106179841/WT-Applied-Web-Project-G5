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
$skill = cleanPost("skill");
$otherSkills = cleanPost("otherSkills");

$allowedStates = ['VIC', 'NSW', 'QLD', 'NT', 'WA', 'SA', 'TAS', 'ACT'];
$allowedGenders = ['male', 'female'];


// validation with regex


?>