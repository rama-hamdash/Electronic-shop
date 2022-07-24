@extends('layouts.user')
@section('content')
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg overflow-x-hidden">
        <!-- Navbar -->
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur"
            navbar-scroll="true">
            <div class="container-fluid py-1 px-3">
               
                <div class="collapse navbar-collapse mt-sm-0 mt-2 px-0" id="navbar">

                    <ul class="navbar-nav me-auto ms-0 justify-content-end">

                        <li class="nav-item d-xl-none pe-3 d-flex align-items-center p-2">
                            <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                                <div class="sidenav-toggler-inner">
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                </div>
                            </a>
                        </li>


                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <div class="row justify-content-center">

                <div class="col-12">
                    <div class=" my-4">
                        <section class="h-100">
                            <div class="container h-100 py-5">
                                <div class="row d-flex justify-content-center align-items-center h-100">
                                    <div class="col-10">

                                        <livewire:basket />
                                        <div>
                                            <div class="card-body">
                                                <a href="{{ route('shop.interface') }}"
                                                    class="btn btn-dark text-white btn-block btn-md">قائمة المنتجات</a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </section>

                    </div>
                </div>
            </div>
        @endsection
        @section('styles')
            <style>
                /* body {
                    background: #ddd;
                    min-height: 100vh;
                    vertical-align: middle;
                    display: flex;
                    font-family: sans-serif;
                    font-size: 0.8rem;
                    font-weight: bold;
                } */

                .title {
                    margin-bottom: 5vh;
                }

                .card {
                    margin: auto;
                    max-width: 950px;
                    width: 90%;
                    box-shadow: 0 6px 20px 0 rgba(0, 0, 0, 0.19);
                    border-radius: 1rem;
                    border: transparent;
                }

                @media(max-width:767px) {
                    .card {
                        margin: 3vh auto;
                    }
                }

                .cart {
                    background-color: #fff;
                    padding: 4vh 5vh;
                    border-bottom-left-radius: 1rem;
                    border-top-left-radius: 1rem;
                }

                @media(max-width:767px) {
                    .cart {
                        padding: 4vh;
                        border-bottom-left-radius: unset;
                        border-top-right-radius: 1rem;
                    }
                }

                .summary {
                    background-color: #ddd;
                    border-top-right-radius: 1rem;
                    border-bottom-right-radius: 1rem;
                    padding: 4vh;
                    color: rgb(65, 65, 65);
                }

                @media(max-width:767px) {
                    .summary {
                        border-top-right-radius: unset;
                        border-bottom-left-radius: 1rem;
                    }
                }

                .summary .col-2 {
                    padding: 0;
                }

                .summary .col-10 {
                    padding: 0;
                }

                .row {
                    margin: 0;
                }

                .title b {
                    font-size: 1.5rem;
                }

                .main {
                    margin: 0;
                    padding: 2vh 0;
                    width: 100%;
                }

                .col-2,
                .col {
                    padding: 0 1vh;
                }

                a {
                    padding: 0 1vh;
                }

                .close {
                    margin-left: auto;
                    font-size: 0.7rem;
                }

                img {
                    width: 3.5rem;
                }

                .back-to-shop {
                    margin-top: 4.5rem;
                }

                h5 {
                    margin-top: 4vh;
                }

                hr {
                    margin-top: 1.25rem;
                }

                form {
                    padding: 2vh 0;
                }

                select {
                    border: 1px solid rgba(0, 0, 0, 0.137);
                    padding: 1.5vh 1vh;
                    margin-bottom: 4vh;
                    outline: none;
                    width: 100%;
                    background-color: rgb(247, 247, 247);
                }

                input {
                    border: 1px solid rgba(0, 0, 0, 0.137);
                    padding: 1vh;
                    margin-bottom: 4vh;
                    outline: none;
                    width: 100%;
                    background-color: rgb(247, 247, 247);
                }

                input:focus::-webkit-input-placeholder {
                    color: transparent;
                }

                .btn {
                    background-color: #000;
                    border-color: #000;
                    color: white;
                    width: 100%;
                    font-size: 0.7rem;
                    margin-top: 4vh;
                    padding: 1vh;
                    border-radius: 0;
                }

                .btn:focus {
                    box-shadow: none;
                    outline: none;
                    box-shadow: none;
                    color: white;
                    -webkit-box-shadow: none;
                    -webkit-user-select: none;
                    transition: none;
                }

                .btn:hover {
                    color: white;
                }

                a {
                    color: black;
                }

                a:hover {
                    color: black;
                    text-decoration: none;
                }

                #code {
                    background-image: linear-gradient(to left, rgba(255, 255, 255, 0.253), rgba(255, 255, 255, 0.185)), url("https://img.icons8.com/small/16/000000/long-arrow-right.png");
                    background-repeat: no-repeat;
                    background-position-x: 95%;
                    background-position-y: center;
                }
            </style>
        @endsection
