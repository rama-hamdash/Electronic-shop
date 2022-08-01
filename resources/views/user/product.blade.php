@extends('layouts.user')
@section('styles')
    <style>
        body {
            background-color: #ecedee
        }

        .card {
            border: none;
            overflow: hidden; 
            margin-top: 7rem;
        }

        .thumbnail_images ul {
            list-style:
                none;
            justify-content: center;
            display: flex;
            align-items: center;
            margin-top: 10px
        }

        .thumbnail_images ul li {
            margin:
                5px;
            padding: 10px;
            border: 2px solid #eee;
            cursor: pointer;
            transition: all 0.5s
        }

        .thumbnail_images ul li:hover {
            border: 2px solid #000
        }

        .main_image {
            display: flex;
            justify-content: center;
            align-items: center;
            border-bottom: 1px solid #eee;
            height:
                400px;
            width: 100%;
            overflow: hidden
        }

        .heart {
            height: 29px;
            width: 29px;
            background-color: #eaeaea;
            border-radius: 50%;
            display:
                flex;
            justify-content: center;
            align-items: center
        }

        .content p {
            font-size: 12px
        }

        .ratings span {
            font-size: 14px;
            margin-left:
                12px
        }

        .colors {
            margin-top: 5px
        }

        .colors ul {
            list-style: none;
            display: flex;
            padding-left: 0px
        }

        .colors ul li {
            height:
                20px;
            width: 20px;
            display: flex;
            border-radius: 50%;
            margin-right: 10px;
            cursor: pointer
        }
        .sizes ul li {
            height:
                20px;
            width: 20px;
            display: flex;
            border-radius: 50%;
            margin-right: 10px;
            cursor: pointer
        }

        .sizes ul {
            list-style: none;
            display: flex;
            padding-left: 0px;
        }

    

        .right-side {
            position: relative
        }

        .buttons .btn {
            height: 50px;
            width: 150px;
            border-radius: 0px !important
        }
    </style>
@endsection
@section('content')
    <div class="container mt-5 mb-5">
        <livewire:product :model="$model" :product="$product" />
    </div>
@endsection
