<?php
require "settings/init.php";
?>

<!DOCTYPE html>
<html lang="da">
<head>
	<meta charset="utf-8">
	
	<title>Sigende titel</title>
	
	<meta name="robots" content="All">
	<meta name="author" content="Udgiver">
	<meta name="copyright" content="Information om copyright">
	
	<link href="css/styles.css" rel="stylesheet" type="text/css">
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<div class="container-fluid">
    <div class="row vh-100">
        <div class="col-8 vh-100 position-relative bg-success" id="meetingRoom">
            <div class="row row-cols-2 fs-3 text-light border-bottom py-2">
                <div id="status">
                    <span>Optaget</span>
                    <span>Ledigt</span>
                </div>
                <div class="text-end">12:34</div>
            </div>

            <div class="text-light text-center py-3">
                <div class="fs-5">#123</div>
                <div class="fs-1 fw-bold">Lokalenavn</div>
            </div>

            <div class="text-light text-center py-3">
                <div>Skærm: Ja</div>
                <div>Maks. pers: 20</div>
            </div>

            <div class="w-50 mx-auto text-light py-3" id="occupied">
                <div class="text-center mb-2">Optaget af:</div>
                <div class="card text-light">
                    <div class="row g-0 justify-content-center">
                        <div class="col-auto d-flex align-items-center ps-1">
                            <img src="images/uifaces5.jpg" class="profile-img rounded-circle border border-2 border-light" alt="profilbillede">
                        </div>
                        <div class="col-auto">
                            <div class="card-body">
                                <div class="card-text fw-bold">07:15 - 08:00</div>
                                <div class="card-text">Afd: Marketingafdeling</div>
                                <div class="card-text"><small>Adam, Bent, Carl</small></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="position-absolute bottom-0 start-50 translate-middle mb-3">
                <button type="button" id="bookBtn" class="btn btn-light btn-lg px-5 rounded-5" data-bs-toggle="modal" data-bs-target="#bookRoom">Book</button>
            </div>

        </div>

        <div class="col-4 vh-100 bg-light position-fixed end-0 overflow-y-scroll">
            <div class="row row-cols-2 fs-3 border-bottom opacity-50 py-2">
                <div>Næste:</div>
                <div class="text-end">1. april</div>
            </div>

            <div class="row">
                <div id="nextUp">
                    <div class="card my-3">
                        <div class="row g-0">
                            <div class="col-auto d-flex align-items-center ps-1">
                                <img src="images/uifaces1.jpg" class="profile-img rounded-circle border border-2 border-danger" alt="profilbillede">
                            </div>
                            <div class="col">
                                <div class="card-body">
                                    <div class="card-text fw-bold">08:00 - 09:30</div>
                                    <div class="card-text">Afd: Salgsafdeling</div>
                                    <div class="card-text"><small class="text-body-secondary">Adam, Bent, Carl</small></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card my-3">
                        <div class="row g-0">
                            <div class="col-auto d-flex align-items-center ps-1">
                                <img src="images/uifaces2.jpg" class="profile-img rounded-circle border border-2 border-danger" alt="profilbillede">
                            </div>
                            <div class="col">
                                <div class="card-body">
                                    <div class="card-text fw-bold">10:00 - 11:00</div>
                                    <div class="card-text">Afd: Finansafdeling</div>
                                    <div class="card-text"><small class="text-body-secondary">Adam, Bent, Carl</small></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card my-3">
                        <div class="row g-0">
                            <div class="col-auto d-flex align-items-center ps-1">
                                <img src="images/uifaces3.jpg" class="profile-img rounded-circle border border-2 border-danger" alt="profilbillede">
                            </div>
                            <div class="col">
                                <div class="card-body">
                                    <div class="card-text fw-bold">11:00 - 12:00</div>
                                    <div class="card-text">Afd: IT-afdeling</div>
                                    <div class="card-text"><small class="text-body-secondary">Adam, Bent, Carl</small></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card my-3">
                        <div class="row g-0">
                            <div class="col-auto d-flex align-items-center ps-1">
                                <img src="images/uifaces4.jpg" class="profile-img rounded-circle border border-2 border-danger" alt="profilbillede">
                            </div>
                            <div class="col">
                                <div class="card-body">
                                    <div class="card-text fw-bold">13:00 - 14:45</div>
                                    <div class="card-text">Afd: HR og Løn</div>
                                    <div class="card-text"><small class="text-body-secondary">Adam, Bent, Carl</small></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal" id="bookRoom" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Modal body text goes here.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
