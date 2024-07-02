<?

// заплатка пока нет лицензии
global $SiteExpireDate;
if (DEMO && ($SiteExpireDate < time())) {
    $SiteExpireDate = time() * 1.1;
}

?>