<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/templates/css/bootstrap.css">
    <link rel="stylesheet" href="/templates/css/mystyle.css">
    <link rel="stylesheet" href="/templates/css/jquery-ui.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css">
    <title>Admin</title>
</head>
<body>
<div class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#responsive-menu">
                <span class="sr-only"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">Main page</a>
        </div>
        <div class="collapse navbar-collapse" id="responsive-menu">
            <ul class="nav navbar-nav">
                <li><a href="/admin/main">Admin</a></li>
                <li><a href="/admin/users">Users</a></li>
                <li><a href="/admin/catalog">Catalog</a></li>

            </ul>
        </div>
    </div>
</div>
<script src="/templates/js/jquery-3.1.1.js"></script>
<script src="/templates/js/bootstrap.js"></script>
<script src="/templates/js/jquery-ui.js"></script>
<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function () {
        $('#user_city').autocomplete({
            source: '/admin/autocomplete',
            select: function (event, ui) {
                $("#user_city").val(ui.item.label); // display the selected text
                $("#user_cityID").val(ui.item.value); // save selected id to hidden input
                return false;
            }
        });
    });
</script>


