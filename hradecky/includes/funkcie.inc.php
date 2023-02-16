<?php

function prazdnyVstupReg($meno, $priezvisko, $email, $pouzivatelskeMeno, $heslo, $hesloZnova) {
    $vysledok;
    if (empty($meno) || empty($priezvisko) || empty($email) || empty($pouzivatelskeMeno) || empty($heslo) || empty($hesloZnova)) {
        $vysledok = true;
    }
    else {
        $vysledok = false;
    }
    return $vysledok;
}

function neplatnePouzivatelske($pouzivatelskeMeno) {
    $vysledok;
    if (!preg_match("/⌃[a-zA-Z0-9]*$/", $pouzivatelskeMeno)) {
        $vysledok = true;
    }
    else {
        $vysledok = false;
    }
    return $vysledok;
}

function neplatneEmail($email) {
    $vysledok;
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $vysledok = true;
    }
    else {
        $vysledok = false;
    }
    return $vysledok;
}

function hesloZhoda($heslo, $hesloZnova) {
    $vysledok;
    if ($heslo !== $hesloZnova) {
        $vysledok = true;
    }
    else {
        $vysledok = false;
    }
    return $vysledok;
}

function pouzivatelskeExistuje($conn, $pouzivatelskeMeno, $email) {
    $sql = "SELECT * FROM pouzivatelia WHERE pouzivatelskeMeno = ? OR email = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../registracia.php?error=stmtzlyhalo");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ss", $pouzivatelskeMeno, $email);
    mysqli_stmt_execute($stmt);

    $vysledokData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($vysledokData)) {
        return $row;
    }
    else {
        $vysledok = false;
        return $vysledok;
    }

    mysqli_stmt_close($stmt);

}

function vytvorPouzivatela($conn, $meno, $priezvisko, $email, $pouzivatelskeMeno, $heslo) {
    $sql = "INSERT INTO pouzivatelia (meno, priezvisko, email, pouzivatelskeMeno, heslo) VALUES (?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../registracia.php?error=stmtzlyhalo");
        exit();
    }

    $hashedHeslo = password_hash($heslo, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "sssss", $meno, $priezvisko, $email, $pouzivatelskeMeno, $hashedHeslo);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../registracia.php?error=ziadny");
    exit();
}

function prazdnyVstupPri($pouzivatelskeMeno, $heslo) {
    $vysledok;
    if (empty($pouzivatelskeMeno) || empty($heslo)) {
        $vysledok = true;
    }
    else {
        $vysledok = false;
    }
    return $vysledok;
}

function prihlasPouzivatela($conn, $pouzivatelskeMeno, $heslo) {
    $pouzivatelskeExistuje = pouzivatelskeExistuje($conn, $pouzivatelskeMeno, $pouzivatelskeMeno);

    if ($pouzivatelskeExistuje == false) {
        header("location: ../prihlasenie.php?error=zlePrihlasenie");
        exit();
    }

    $hesloHashed = $pouzivatelskeExistuje["heslo"];
    $skontrolujHeslo = password_verify($heslo, $hesloHashed);

    if ($skontrolujHeslo == false) {
        header("location: ../prihlasenie.php?error=zlePrihlasenie");
        exit();
    }
    else if ($skontrolujHeslo == true) {
        session_start();
        $_SESSION["pouzivatelid"] = $pouzivatelskeExistuje["pouzivatel_id"];
        $_SESSION["pouzivatelskemeno"] = $pouzivatelskeExistuje["pouzivatelskeMeno"];
        header("location: ../index.php");
        exit();
    }
}

function vytvorProdukt($conn, $nazov, $kategoria, $kratkyPopis, $popis, $cena, $obrazokLink) {
    $sql = "INSERT INTO produkty (nazov, kategoria, kratkyPopis, popis, cena, obrazokLink) VALUES (?, ?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../pridatProdukt.php?error=stmtzlyhalo");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ssssss", $nazov, $kategoria, $kratkyPopis, $popis, $cena, $obrazokLink);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../pridatProdukt.php?error=ziadny");
    exit();
}

function odstranProdukt($conn, $id) {
    mysqli_query($conn, "DELETE FROM produkty WHERE produkt_id=$id");

    header("location: ../odstranitProdukt.php?error=ziadny");
    exit();
}

function upravProdukt($conn, $id, $novaCena) {
    mysqli_query($conn, "UPDATE produkty SET cena=$novaCena WHERE produkt_id=$id");

    header("location: ../upravitProdukt.php?error=ziadny");
    exit();
}

