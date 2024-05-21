<?php
include "db.php";
if (isset($_POST['edit'])) {
} else {
    $Firstname = $_POST['Firstname'];
    $Lastname = $_POST['Lastname'];
    $Gender = $_POST['Gender'];
    $Address = $_POST['Address'];
    $email = $_POST['email'];
    $ContactNumber = $_POST['ContactNumber'];

    if (empty($Firstname) || empty($Lastname) || empty($Gender) || empty($Address) || empty($email) || empty($ContactNumber)) {
        if (empty($Firstname)) {
        }
        if (empty($Lastname)) {
        }
        if (empty($Gender)) {
        }
        if (empty($Address)) {
        }
        if (empty($email)) {
        }
        if (empty($ContactNumber)) {
        }
    }
    if ($Firstname) {
        $sql = "UPDATE `admin` SET `Firstname`='$Firstname',`Lastname`='$Lastname'  ";
        $result = mysqli_query($conn, $sql);
    }
    if ($Lastname) {


        $sql = "UPDATE `admin` SET `Gender`='$Gender',`Address`='$Address'  ";
        $result = mysqli_query($conn, $sql);
    }
    if ($email) {
        $sql = "UPDATE `admin` SET `email`='$email'  ";
        $result = mysqli_query($conn, $sql);
    }
    if ($ContactNumber) {
        $sql = "UPDATE `admin` SET `ContactNumber`='$ContactNumber' ";
        $result = mysqli_query($conn, $sql);
    }
}

include 'a_profile.php';
