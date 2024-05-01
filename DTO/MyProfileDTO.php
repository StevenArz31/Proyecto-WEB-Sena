<?php
class MyProfileDTO
{
    private $photoProfile;
    private $identificationNumber;
    private $name;
    private $lastName;
    private $mail;
    private $phone;
    private $oldPassword;
    private $newPassword;
    private $confirmationNewPassword;

    public function getImageProfile()
    {
        return $this->photoProfile;
    }

    public function setImageProfile($photoProfile)
    {
        $this->photoProfile = $photoProfile;
    }

    public function getIdentificationNumber()
    {
        return $this->identificationNumber;
    }

    public function setIdentificationNumber($identificationNumber)
    {
        $this->identificationNumber = $identificationNumber;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getLastName()
    {
        return $this->lastName;
    }

    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    public function getMail()
    {
        return $this->mail;
    }

    public function setMail($mail)
    {
        $this->mail = $mail;
    }

    public function getPhone()
    {
        return $this->phone;
    }

    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    public function getOldPassword()
    {
        return $this->oldPassword;
    }

    public function setOldPassword($oldPassword)
    {
        $this->oldPassword = $oldPassword;
    }

    public function getNewPassword()
    {
        return $this->newPassword;
    }

    public function setNewPassword($newPassword)
    {
        $this->newPassword = $newPassword;
    }

    public function getConfirmationNewPassword()
    {
        return $this->confirmationNewPassword;
    }

    public function setConfirmationNewPassword($confirmationNewPassword)
    {
        $this->confirmationNewPassword = $confirmationNewPassword;
    }
}
