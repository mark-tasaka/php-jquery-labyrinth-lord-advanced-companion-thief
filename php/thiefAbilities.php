<?php


function thiefAbility ($level)
{
    $message = "";
    
    if($level <= 3)
    {
        $message = "Backstab: +4 bonus to hit; x2 damage.<br/>";
    }
    else if($level >= 4 && $level <=8)
    {
        $message = "Backstab: +4 bonus to hit; x2 damage.<br/>
                    80% probability of reading languages (any non-magical writings).";
    }
    else if($level == 9)
    {
        $message = "Backstab: +4 bonus to hit; x2 damage.<br/>
                    80% probability of reading languages (any non-magical writings).<br/>
                    Can establish a thief's den, with 2d6 1st level thief apprentices.";
    }
    else if($level > 9)
    {
        $message = "Backstab: +4 bonus to hit; x2 damage.<br/>
                    80% probability of reading languages (any non-magical writings).<br/>
                    Can establish a thief's den, with 2d6 1st level thief apprentices.<br/>
                    Can read and cast magic from magic-user scrolls with 90% accuracy.";
    }
    
    return $message;
    
}

function pickLocks ($level)
{
    $skill = 0;
    
    switch($level)
    {
        case 1:
            $skill = 17;
            break;
            
        case 2:
            $skill = 23;
            break;
            
        case 3:
            $skill = 27;
            break;
            
        case 4:
            $skill = 31;
            break;
            
        case 5:
            $skill = 35;
            break;
            
        case 6:
            $skill = 45;
            break;
            
        case 7:
            $skill = 55;
            break;
            
        case 8:
            $skill = 65;
            break;
            
        case 9:
            $skill = 75;
            break;
            
        case 10:
            $skill = 85;
            break;
            
        case 11:
            $skill = 95;
            break;
            
        case 12:
            $skill = 97;
            break;
            
        case 13:
            $skill = 99;
            break;
            
        case 14:
            $skill = 99;
            break;
            
        case 15:
            $skill = 99;
            break;
            
        default:
            $skill = 9999;
            break;
            
    }
    
    return $skill;
}


function findRemoveTraps ($level)
{
    $skill = 0;
    
    switch($level)
    {
        case 1:
            $skill = 14;
            break;
            
        case 2:
            $skill = 17;
            break;
            
        case 3:
            $skill = 20;
            break;
            
        case 4:
            $skill = 23;
            break;
            
        case 5:
            $skill = 33;
            break;
            
        case 6:
            $skill = 43;
            break;
            
        case 7:
            $skill = 53;
            break;
            
        case 8:
            $skill = 63;
            break;
            
        case 9:
            $skill = 73;
            break;
            
        case 10:
            $skill = 83;
            break;
            
        case 11:
            $skill = 93;
            break;
            
        case 12:
            $skill = 95;
            break;
            
        case 13:
            $skill = 97;
            break;
            
        case 14:
            $skill = 99;
            break;
            
        case 15:
            $skill = 99;
            break;
            
        default:
            $skill = 9999;
            break;
            
    }
    
    return $skill;
}



function pickPockets ($level)
{
    $skill = 0;
    
    switch($level)
    {
        case 1:
            $skill = 23;
            break;
            
        case 2:
            $skill = 27;
            break;
            
        case 3:
            $skill = 30;
            break;
            
        case 4:
            $skill = 37;
            break;
            
        case 5:
            $skill = 40;
            break;
            
        case 6:
            $skill = 43;
            break;
            
        case 7:
            $skill = 53;
            break;
            
        case 8:
            $skill = 63;
            break;
            
        case 9:
            $skill = 73;
            break;
            
        case 10:
            $skill = 83;
            break;
            
        case 11:
            $skill = 93;
            break;
            
        case 12:
            $skill = 105;
            break;
            
        case 13:
            $skill = 115;
            break;
            
        case 14:
            $skill = 125;
            break;
            
        case 15:
            $skill = 125;
            break;
            
        default:
            $skill = 9999;
            break;
            
    }
    
    return $skill;
}


function moveSilently ($level)
{
    $skill = 0;
    
    switch($level)
    {
        case 1:
            $skill = 23;
            break;
            
        case 2:
            $skill = 27;
            break;
            
        case 3:
            $skill = 30;
            break;
            
        case 4:
            $skill = 37;
            break;
            
        case 5:
            $skill = 40;
            break;
            
        case 6:
            $skill = 43;
            break;
            
        case 7:
            $skill = 53;
            break;
            
        case 8:
            $skill = 63;
            break;
            
        case 9:
            $skill = 73;
            break;
            
        case 10:
            $skill = 83;
            break;
            
        case 11:
            $skill = 93;
            break;
            
        case 12:
            $skill = 95;
            break;
            
        case 13:
            $skill = 97;
            break;
            
        case 14:
            $skill = 99;
            break;
            
        case 15:
            $skill = 99;
            break;
            
        default:
            $skill = 9999;
            break;
            
    }
    
    return $skill;
}


function climbWalls ($level)
{
    $skill = 0;
    
    switch($level)
    {
        case 1:
            $skill = 87;
            break;
            
        case 2:
            $skill = 88;
            break;
            
        case 3:
            $skill = 89;
            break;
            
        case 4:
            $skill = 90;
            break;
            
        case 5:
            $skill = 91;
            break;
            
        case 6:
            $skill = 92;
            break;
            
        case 7:
            $skill = 93;
            break;
            
        case 8:
            $skill = 94;
            break;
            
        case 9:
            $skill = 95;
            break;
            
        case 10:
            $skill = 96;
            break;
            
        case 11:
            $skill = 97;
            break;
            
        case 12:
            $skill = 98;
            break;
            
        case 13:
            $skill = 99;
            break;
            
        case 14:
            $skill = 99;
            break;
            
        case 15:
            $skill = 99;
            break;
            
        default:
            $skill = 9999;
            break;
            
    }
    
    return $skill;
}



function hideInShadows ($level)
{
    $skill = 0;
    
    switch($level)
    {
        case 1:
            $skill = 13;
            break;
            
        case 2:
            $skill = 17;
            break;
            
        case 3:
            $skill = 20;
            break;
            
        case 4:
            $skill = 27;
            break;
            
        case 5:
            $skill = 30;
            break;
            
        case 6:
            $skill = 37;
            break;
            
        case 7:
            $skill = 47;
            break;
            
        case 8:
            $skill = 57;
            break;
            
        case 9:
            $skill = 67;
            break;
            
        case 10:
            $skill = 77;
            break;
            
        case 11:
            $skill = 87;
            break;
            
        case 12:
            $skill = 90;
            break;
            
        case 13:
            $skill = 97;
            break;
            
        case 14:
            $skill = 99;
            break;
            
        case 15:
            $skill = 99;
            break;
            
        default:
            $skill = 9999;
            break;
            
    }
    
    return $skill;
}


function hearNoise ($level)
{
    $message = 2;
    
    if($level >= 3 && $level <=5)
    {
        $message = 3;
    }
    else if($level >= 6 && $level <=9)
    {
        $message = 4;
    }
    else if($level >= 10)
    {
        $message = 5;
    }
    else
    {
        $message = 2;
    }
    
    return $message;
    
    
}


?>