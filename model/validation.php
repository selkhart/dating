<?php

//NAME
function validName($name)
{
    if(ctype_alpha($name) && !empty($name))
    {
        return true;
    }
    return false;
}

//AGE
function validAge($age)
{
    if(ctype_alnum($age) && $age >= 18)
    {
        return true;
    }
    return false;
}

//PHONE
function validPhone($phone)
{
    if (strlen($phone) == 10 && ctype_digit($phone))
    {
        return true;
    }
    return false;
}

//VALID OUTDOOR
function validOutdoor($outdoorItems)
{
    $outdoorList = array("hiking", "biking", "swimming", "climbing", "walking", "collecting");
    foreach ($outdoorItems as $item)
    {
        if(!in_array($item, $outdoorList))
            return false;
    }
    return true;
}
function validIndoor($indoorItems)
{
    $indoorList = array("tv", "movies", "cooking", "board games", "puzzles", "reading", "playing cards", "video games");
    foreach ($indoorItems as $item)
    {
        if(!in_array($item, $indoorList))
            return false;
    }
    return true;
}

$errors = array();

// SETTING ERRORS *************************************************************************

// NAME ERRORS
if(!validName($inputFirstName))
{
    $errors['inputFirstName'] = "This is not a valid first name";
}
$success = sizeof($errors) == 0;

if(!validName($inputLastName))
{
    $errors['inputLastName'] = "This is not a valid last name";
}
$success = sizeof($errors) == 0;

//AGE ERROR
if(!validAge($inputAge))
{
    $errors['inputAge'] = "This is not a valid age";
}
$success = sizeof($errors) == 0;

//PHONE ERROR
if(!validPhone($inputAge))
{
    $errors['inputAge'] = "This is not a valid age";
}
$success = sizeof($errors) == 0;