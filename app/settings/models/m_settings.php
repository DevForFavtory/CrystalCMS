<?php

declare(strict_types=1);

namespace Crystal;

class Settings
{

    function changePassword($user, $newpass)
    {

        global $Crystal;
        $passSalt = md5($newpass . $Crystal->Auth->getSalt());
        if ($stmt = $Crystal->Database->prepare("UPDATE users SET password = ? WHERE username = ? ")) {
            $stmt->bind_param('ss', $passSalt, $user);
            $stmt->execute();
            $stmt->close();

            return TRUE;
        } else {
            return FALSE;
        }

    }

}