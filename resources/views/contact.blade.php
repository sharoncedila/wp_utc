@extends('master')
@section('title', 'contact')

@section('content')
    <p class="text-white text-center rounded-pill p-contact"><b>CONTACT US</b></p> 
    <div class="contact">
        <div class="division">
            <div class="apa">
                <span class="line"><b>Office Address</b></span>
            </div>
            <div class="isi">
                <span><b>Jl. Kebon Jeruk Raya No. 27, Kebon Jeruk, Jakarta Barat 11530, Indonesia</b></span>
            </div>
        </div>
        <div class="division">
            <div class="apa">
                <span class="line"><b>Open Daily</b></span>
            </div>
            <div class="isi">
                <span><b>10 am - 10 pm</b></span>
            </div>
        </div>
        <div class="division">
            <div class="apa">
                <span class="line"><b>Contact</b></span>
            </div>
            <div class="isi">
                <p><b>08123456789</b></p>
                <p><b>happybook@gmail.com</b></p>
            </div>
        </div>
        
    </div>

    <style>
        .p-contact{
            background-color: #efcc00;
            width: 50em;
            padding: 0.5em;
            font-size: 1.25rem;
        }

        .line{
            border-top: 1px solid #efcc00;
            border-bottom: 1px solid #efcc00;
            color: #efcc00;
            padding: 0.25em;
        }

        .office{
            border: 2px solid #efcc00;
            width: 100%;
            font-size: 1rem;
            padding: 0.75em;
        }

        .contact{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            gap: 2.5rem;
            padding-top: 1rem;
        }

        .division{
            display: flex;
            flex-direction: row;
            /* align-items: center; */
        }

        .apa{
            width: 10em;
            margin-left: 2em;
        }

        .apa-text{
            color: #efcc00;;
            padding: 0.75em;
        }

        .isi{
            width: 40em;
        }
    </style>
@endsection