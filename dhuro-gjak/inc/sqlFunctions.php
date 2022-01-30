<?php

global $dbCon;

function connection()
{
    $dbCon = mysqli_connect('localhost', 'root', '', 'blooddb');
    if (!$dbCon) {
        die("Lidhja me databazen deshtoi");
    }

    return $dbCon;
}

connection();


function merrDonatoret()
{
    $dbCon = connection();
    $sql = "SELECT * FROM dhuruesi";
    $result = mysqli_query($dbCon, $sql);

    return $result;
}

function merrMarresit()
{
    $dbCon = connection();
    $sql = "SELECT * FROM marresi";
    $result = mysqli_query($dbCon, $sql);

    return $result;
}

function merrStafin()
{
    $dbCon = connection();
    $sql = "SELECT * FROM stafi_mjeksor";
    $result = mysqli_query($dbCon, $sql);

    return $result;
}


function merrDhuruesin($did)
{
    $dbCon = connection();
    $sql = "SELECT dhuruesiID, emri, mbiemri, adresa, email, telefoni, dtl, tipiGjakut,password";
    $sql .= " FROM dhuruesi WHERE dhuruesiID={$did}";
    $result = mysqli_query($dbCon, $sql);

    return $result;
}


function shtoDonator($emri, $mbiemri, $adresa, $email, $telefoni, $dtl, $tipiGjakut, $password)
{

    $dbCon = connection();
    $sql = "INSERT INTO dhuruesi( emri, mbiemri, adresa, email, telefoni, dtl, tipiGjakut, password)";
    $sql .= " VALUES('$emri','$mbiemri', '$adresa', '$email','$telefoni','$dtl','$tipiGjakut','$password')";

    $result = mysqli_query($dbCon, $sql);

    if ($result) {
        echo "<h1 class='success'>U regjistruat me sukses</h1>";
    } else {
        die("dhuruesi deshtoj te shtohet" . mysqli_error($dbCon));
    }
}



function fshijDonatoret($id)
{
    $dbCon = connection();
    $sql = "DELETE FROM dhuruesi WHERE dhuruesiID={$id}";
    $dhuruesi = mysqli_query($dbCon, $sql);

    if ($dhuruesi) {
        echo "dhuruesi u fshi me sukses";
    } else {
        die("dhuruesi dheshtoi te fshihet" . mysqli_error($dbCon));
    }
}


function fshijPranuesit($id)
{

    $dbCon = connection();
    $sql = "DELETE FROM marresi WHERE marresiID={$id}";
    $marresi = mysqli_query($dbCon, $sql);

    if ($marresi) {
        echo "marresi u fshi me sukses";
    } else {
        die("marresi dheshtoi te fshihet" . mysqli_error($dbCon));
    }
}


function fshijStafin($id)
{

    $dbCon = connection();
    $sql = "DELETE FROM stafi_mjeksor WHERE mjekuID={$id}";
    $mjeku = mysqli_query($dbCon, $sql);

    if ($mjeku) {
        echo "marresi u fshi me sukses";
    } else {
        die("marresi dheshtoi te fshihet" . mysqli_error($dbCon));
    }
}



function modifikoDhuruesin($dhuruesiID, $emri, $mbiemri, $adresa, $email, $telefoni, $dtl, $tipigjakut, $password)
{
    $dbCon = connection();
    $sql = "UPDATE dhuruesi SET emri='$emri',mbiemri='$mbiemri',adresa='$adresa', email='$email',";
    $sql .= "telefoni='$telefoni',dtl='$dtl', tipiGjakut='$tipigjakut', password='$password'";
    $sql .= " WHERE dhuruesiID=$dhuruesiID";
    $dhuruesi = mysqli_query($dbCon, $sql);
    if ($dhuruesi) {
        echo "Dhuruesi u modifiku me sukses";
    } else {
        die("Dhuruesi dheshtoi te ndryshohet" . mysqli_error($dbCon));
    }
}


function modifikoPranuesin($marresiID, $emri, $mbiemri, $adresa, $email, $telefoni, $dtl, $tipigjakut, $password)
{
    $dbCon = connection();
    $sql = "UPDATE marresi SET emri='$emri',mbiemri='$mbiemri',adresa='$adresa', email='$email',";
    $sql .= "telefoni='$telefoni',dtl='$dtl', tipiGjakut='$tipigjakut', password='$password'";
    $sql .= " WHERE marresiID=$marresiID";
    $marresi = mysqli_query($dbCon, $sql);
    if ($marresi) {
        echo "marresi u modifiku me sukses";
    } else {
        die("marresi dheshtoi te ndryshohet" . mysqli_error($dbCon));
    }
}

function merrTransaksionet()
{
    $dbCon = connection();
    $sql = "SELECT dh.emri as dhuruesi, m.emri as marresi, t.dataDhenies as dataa from transaksioni t inner join dhurimi_i_gjakut";
    $sql .= " dhu ON t.gjakuID=dhu.gjakuID INNER join dhuruesi dh ON dh.dhuruesiID = dhu.dhuruesiID inner join marresi";
    $sql .= " m on m.marresiID =t.marresiID";
    return $result = mysqli_query($dbCon, $sql);
}

function login($email, $password)
{
    $dbCon = connection();
    $sql = "SELECT * FROM stafi_mjeksor WHERE email='$email'";
    $result = mysqli_query($dbCon, $sql);
    if ($result) {
        if (mysqli_num_rows($result) == 1) {
            $res = mysqli_fetch_assoc($result);
            if ($password == $res['password']) {
                header("Location: index.php");
                $_SESSION['mjekuID'] = $res['mjekuID'];
                $_SESSION['emri'] = $res['emri'];
                $_SESSION['mbiemri'] = $res['mbiemri'];
                $_SESSION['roli'] = $res['roli'];
                session_start();
            } else {
                echo "<script>alert('Username ose Password nuk jane ne rregull!');</script>";
            }
        }
    }
}
