<?php
require "settings/init.php";
?>

<!DOCTYPE html>
<html lang="da">
<head>
	<meta charset="utf-8">
	
	<title>Home Menu</title>
	
	<meta name="robots" content="All">
	<meta name="author" content="Udgiver">
	<meta name="copyright" content="Information om copyright">
	
	<link href="css/styles.css" rel="stylesheet" type="text/css">
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<div class="container-fluid">
    <div class="row vh-100">
        <div class="vh-100 position-relative bg-success" id="opslagstavle">
            <div class="row row-cols-2 fs-3 text-light border-dark border-bottom py-2">
                <div class="fs-2 fw-bold">Hotel Strandparken</div>
                <div class="text-end fs-2 fw-medium" id="time">00:00</div>
            </div>

            <div class="text-light text-center py-3 mt-3">
                <div class="fs-1 fw-bold">Velkommen</div>
                <div class="fs-2">Værelses nummer</div>
                <div class="fs-3">25</div>
            </div>

            <div class="d-flex my-5 align-items-center justify-content-center" id="logo">
                <img src="../EksamenMUD2024/Pictures/LogoBlackBackground.png" class="img-fluid w-75 d-none" alt="Hotel Strandparken's logo">
                <img src="../EksamenMUD2024/Pictures/LogoWhiteBackground.png" class="img-fluid w-75" alt="Hotel Strandparken's logo">
            </div>

            <div class="text-light text-center py-3 fs-1" id="status">
                <div class="d-none">Forstyr ikke</div>
                <div class="d-none">Forstyr ikke</div>
            </div>

            <!--
                <div class="w-50 mx-auto text-light py-3" id="cleaningStatus">
                    <div class="text-center mb-2">Rengøres af:</div>
                    <div class="card text-light">
                        <div class="row g-0 justify-content-center">
                            <div class="col-auto d-flex align-items-center ps-1">
                                <img src="" class="profile-img rounded-circle border border-2 border-light" alt="profilbillede">
                            </div>
                            <div class="col-auto">
                                <div class="card-body">
                                    <div class="card-text"><small>Navn</small></div>
                                    <div class="card-text">Rengørings assitent</div>
                                    <div class="card-text fw-bold">00:00 - 00:00</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            -->

            <div class="row row-cols-5 position-fixed bottom-0 start-50 translate-middle mb-3">
                <div class="align-content-center p-3 ps-5">
                    <button type="button" class="btn btn-light rounded-circle" data-bs-toggle="modal" data-bs-target="#howToVideo"><i class="fa-solid fa-question" style="color: #808080;"></i></button>
                </div>
                <div id="bellRinging">
                    <button type="button" class="btn btn-light rounded-circle"><img src="../EksamenMUD2024/Pictures/BellIconRinging.png" class="img-fluid p-2" alt="klokke ikon"></button>
                </div>
                <div id="bellMuted">
                    <button type="button" class="btn btn-light rounded-circle"><img src="../EksamenMUD2024/Pictures/BellIconMuted.png" class="img-fluid p-2" alt="klokke ikon muted"></button>
                </div>
                <div class="align-content-center">
                    <button class="btn btn-light btn-lg px-5 rounded-5" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Roomservice</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal" id="howToVideo" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Sådan gør du</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <video src="../EksamenMUD2024/Videos/HowToVideo.mp4" class="img-fluid"></video>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header">
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        <div id="timeRoomservice">00:00</div>
    </div>
    <div class="offcanvas-body">
            <div class="row">
                <?php
                $pictures = $db->sql("SELECT * FROM pictures ORDER BY ProdID asc");
                foreach($pictures as $pictures){
                ?>
                <div>
                    <div class="card my-3">
                        <div class="row g-0">
                            <div class="col-4 d-flex p-2">
                                <img src="../EksamenMUD2024/Pictures/<?php echo $pictures->ProdPic;?>" class="img-fluid rounded-circle" alt="profilbillede">
                            </div>
                            <div class="col-auto">
                                <div class="card-body">
                                    <div class="card-text"><small class="text-body-secondary">Navn</small></div>
                                    <div class="card-text">Rengørings assistent</div>
                                    <div class="card-text fw-bold">00:00 - 00:00</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    <?php
                }
                ?>
            </div>
        </div>
    </div>
</div>

<script src="https://kit.fontawesome.com/96a3a7d865.js" crossorigin="anonymous"></script>
<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script>
    const opslagstavle = document.querySelector('#opslagstavle');
    const logo = document.querySelector('#logo');
    const status = document.querySelector('#status');
    const bellRinging = document.querySelector('#bellRinging');
    const bellMuted = document.querySelector('#bellMuted');
    const time = document.querySelector('#time');
    const timeRoomserive = document.querySelector('#timeRoomservice');

    bellRinging.addEventListener('click', () => {
        toggleStatus(false);
    })

    bellMuted.addEventListener('click', () => {
        toggleStatus(true);
    })

    function toggleStatus(isBellMuted){

        status.children[0].classList.remove('d-none');
        status.children[1].classList.remove('d-none');
        logo.children[0].classList.remove('d-none');
        logo.children[1].classList.remove('d-none');

        if(isBellMuted){
            opslagstavle.classList.remove('bg-succes');
            opslagstavle.classList.add('bg-danger');

            status.children[0].classList.add('d-none');
            status.children[1].classList.add('d-block');

            logo.children[0].classList.add('d-block');
            logo.children[1].classList.add('d-none');

        } else {
            opslagstavle.classList.add('bg-success');
            opslagstavle.classList.remove('bg-danger');

            status.children[0].classList.add('d-none');
            status.children[1].classList.add('d-none');

            logo.children[0].classList.add('d-none');
            logo.children[1].classList.add('d-block');
        }

    }

    function showTime(){
        const date = new Date();
        const hours = date.getHours().toString().padStart(2, 0);
        const minutes = date.getMinutes().toString().padStart(2, 0);
        const clock = hours + ':' + minutes;
        time.innerHTML = clock;

        setTimeout(showTime, 1000);
    }

    showTime();

    function showTimeRoomservice(){
        const date = new Date();
        const hours = date.getHours().toString().padStart(2, 0);
        const minutes = date.getMinutes().toString().padStart(2, 0);
        const clock = hours + ':' + minutes;
        timeRoomserive.innerHTML = clock;

        setTimeout(showTimeRoomservice, 1000);
    }

    showTimeRoomservice();

</script>
</body>
</html>