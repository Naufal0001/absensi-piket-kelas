<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @extends('partials.link')
</head>

<body>

    @include('partials.navbar')

    @include('partials.sidebar')

    @yield('content')

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#search-input').keyup(function() {
                var searchText = $(this).val().toLowerCase();
                $('#my-table tbody tr').each(function() {
                    var rowData = $(this).find('td');
                    if (rowData.length > 0) {
                        var found = false;
                        rowData.each(function() {
                            if ($(this).text().toLowerCase().indexOf(searchText) > -1) {
                                found = true;
                                return false;
                            }
                        });
                        if (found) {
                            $(this).show();
                        } else {
                            $(this).hide();
                        }
                    }
                });
            });
        });
        $(document).ready(function() {
            $('#search-input2').keyup(function() {
                var searchText = $(this).val().toLowerCase();
                $('#my-table2 tbody tr').each(function() {
                    var rowData = $(this).find('td');
                    if (rowData.length > 0) {
                        var found = false;
                        rowData.each(function() {
                            if ($(this).text().toLowerCase().indexOf(searchText) > -1) {
                                found = true;
                                return false;
                            }
                        });
                        if (found) {
                            $(this).show();
                        } else {
                            $(this).hide();
                        }
                    }
                });
            });
        });
    </script>

</body>

</html>
