<!DOCTYPE html>
<html>
    <head>
        <title><?= $title ?> | PinjamBukuApp</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>
    <body>
        <nav class="cyan darken-2">
            <div class="container">
            <div class="nav-wrapper">
              <a href="<?= base_url('peminjam/'); ?>" class="brand-logo" style="font-size: 22px;">  <i class="material-icons left">content_copy</i>PinjamBukuApp</a>
              <ul class="right hide-on-med-and-down">
                <li><a href="<?= base_url('buku/') ?>">Data Buku<i class="material-icons left">view_module</i></a></li>
                <li><a href="<?= base_url('peminjam/') ?>"><i class="material-icons left">account_circle</i>Data Peminjam</a></li>
              </ul>
            </div>
            </div>
        </nav>