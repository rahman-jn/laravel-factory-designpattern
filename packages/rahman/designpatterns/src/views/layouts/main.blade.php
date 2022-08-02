<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <style>
            #circle {
            background: green;
            border-radius: 50%;
            margin-right: auto;
            margin-left: auto;
            width: 10rem;
            aspect-ratio: 1/1;
        }

            #rectangle{
                    width:200px;
                    height:100px;
                    background:blue;
                    margin-right: auto;
                    margin-left: auto;
                }
                #triangle {
                    width: 0;
                    height: 0;
                    border: 150px solid transparent;
                    border-top: 0;
                    border-bottom: 300px solid red;
                    margin-right: auto;
                    margin-left: auto;
                }
        </style>

        <title>{{ $title ? $title : '' }} Factory Design Pattern</title>

    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            <div>
                <h2>
                    <a href="/designpatterns/factory/">
                        Choose the shape:
                    </a>
                </h2>
                <ul>
                    <li>
                        <a href="/designpatterns/factory/drawer/rectangle">Rectangle</a>
                    </li>
                    <li>
                        <a href="/designpatterns/factory/drawer/circle">Circle</a>
                    </li>
                    <li>
                        <a href="/designpatterns/factory/drawer/triangle">Triangle</a>
                    </li>
                </ul>
            </div>
        </div>
    </body>
</html>
