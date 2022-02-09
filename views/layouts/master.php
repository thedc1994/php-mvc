<?php require_once 'libs/phpti/ti.php' ?>
<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">
    <title>
      <?php startblock('title') ?>
      <?php endblock() ?>
    </title>
    <meta name="csrf-token"/>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker.css"/>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.0/sweetalert2.css" integrity="sha512-40/Lc5CTd+76RzYwpttkBAJU68jKKQy4mnPI52KKOHwRBsGcvQct9cIqpWT/XGLSsQFAcuty1fIuNgqRoZTiGQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.0/sweetalert2.min.css" integrity="sha512-y4S4cBeErz9ykN3iwUC4kmP/Ca+zd8n8FDzlVbq5Nr73gn1VBXZhpriQ7avR+8fQLpyq4izWm0b8s6q4Vedb9w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <?php include 'views/layouts/css.php' ?>

    <?php startblock('css') ?>
    <?php endblock() ?>
    <body>
    <div id="loading-overlay" style="display: none;">
        <div class="spinner-border text-primary" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <?php include 'views/layouts/header.php' ?>

    <div class="row" style="padding: 50px;">
        <?php startblock('content') ?>
        <?php endblock() ?>
    </div>

    <?php include 'views/layouts/footer.php' ?>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"
            defer></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.0/sweetalert2.min.js" integrity="sha512-4tabfKsx9Wdz5xwd0sT7jqKrieHkIpLXWXVeG/GT4BohF2l/eIaE54Gxb2gzeSH/kVwz0tLL4qpJwsluJuSymA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.0/sweetalert2.all.js" integrity="sha512-mEdS3H2V6RWzMLyx/WPZiC2EQnIWjqSBT5m/D8kEdRtUrg0Qi7sBdcAtCg0dCu4G4Nv3g/V/3J4DIu4j/u/nAA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.0/sweetalert2.all.min.js" integrity="sha512-oTE6Gwi026OvpTsIUmeIA4+Q3DfI/m0ejEbpd1+qDxngi14bMVH249Z5UJVvKSHeSDmlBtmhtRB+HXySaSCp9Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.0/sweetalert2.js" integrity="sha512-3UUOb5j6zHTsx9k8oJ5XHogT2u2miftt8NVKnOICV9Iz6x/WIgJurczwfOVcEZUHWqrBSp0vkc+ZMKfHRd2p2A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <?php include 'views/layouts/script.php' ?>

    <?php startblock('script') ?>
    <?php endblock() ?>
  </body>
</html>
