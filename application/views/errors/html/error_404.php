<style>
    @import url('https://fonts.googleapis.com/css?family=Montserrat:400,600,700');
    @import url('https://fonts.googleapis.com/css?family=Catamaran:400,800');

    .error-container {
        text-align: center;
        font-size: 180px;
        font-family: 'Catamaran', sans-serif;
        font-weight: 800;
        margin: 20px 15px;
    }

    .error-container>span {
        display: inline-block;
        line-height: 0.7;
        position: relative;
        color: #FFB485;
    }

    .error-container>span {
        display: inline-block;
        position: relative;
        vertical-align: middle;
    }

    .error-container>span:nth-of-type(1) {
        color: #fff;
        animation: colordancing 4s infinite;
    }

    .error-container>span:nth-of-type(3) {
        color: #fff;
        animation: colordancing2 4s infinite;
    }

    .error-container>span:nth-of-type(2) {
        width: 120px;
        height: 120px;
        border-radius: 999px;
    }

    .error-container>span:nth-of-type(2):before,
    .error-container>span:nth-of-type(2):after {
        border-radius: 0%;
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: inherit;
        height: inherit;
        border-radius: 999px;
        box-shadow: inset 30px 0 0 rgba(209, 242, 165, 0.4),
            inset 0 30px 0 rgba(239, 250, 180, 0.4),
            inset -30px 0 0 rgba(255, 196, 140, 0.4),
            inset 0 -30px 0 rgba(245, 105, 145, 0.4);
        animation: shadowsdancing 4s infinite;
    }

    .error-container>span:nth-of-type(2):before {
        -webkit-transform: rotate(45deg);
        -moz-transform: rotate(45deg);
        transform: rotate(45deg);
    }

    .screen-reader-text {
        position: absolute;
        top: -9999em;
        left: -9999em;
    }



    body {
        background-color: #5166d8;
        margin-bottom: 50px;
    }

    html,
    button,
    input,
    select,
    textarea {
        font-family: 'Montserrat', Helvetica, sans-serif;
        color: #92a4ad;
    }

    h1 {
        text-align: center;
        margin: 30px 15px;
        color: #fff;
    }

    .zoom-area {
        max-width: 490px;
        margin: 30px auto 30px;
        font-size: 19px;
        text-align: center;
    }

    .link-container {
        text-align: center;
    }

    a.more-link {
        text-transform: uppercase;
        font-size: 13px;
        background-color: #ffffff;
        padding: 10px 15px;
        border-radius: 0;
        color: #5166d8;
        display: inline-block;
        margin-right: 5px;
        margin-bottom: 5px;
        line-height: 1.5;
        text-decoration: none;
        margin-top: 50px;
        font-weight: bold;
        border-radius: 30px;
        padding: 15px 20px;
    }

    section.error-container {
        margin-top: 7rem;
    }
</style>



<section class="error-container">
    <span>4</span>
    <span><span class="screen-reader-text">0</span></span>
    <span>4</span>
</section>
<h1>Maaf, Laman Tidak Ditemukan</h1>
<div class="link-container">
    <a href="<?php echo base_url(); ?>" class="more-link">Kembali ke Beranda</a>
</div>